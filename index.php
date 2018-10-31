<?php 
   $alert = '';
   /*session_start();*/
   if(!empty($_SESSION['active']))
   {
   	header('location: admin.php');
   }else{
   if (!empty($_POST)){
   	if (empty($_POST['usuario']) || empty($_POST['clave']))
   	{
   		$alert = 'Ingrese Su Clave y Usuario';
   	}else{
   		require_once"com/conexion.php";

   		$user = $_POST['usuario'];
   		$pass = $_POST['clave'];

   		$query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave ='$pass'");
   		$result = mysqli_num_rows($query);

   		if($result > 0)
   		{
   			$data = mysqli_fetch_array($query);   			
   			$_SESSION['active'] = true;
   			$_SESSION['idUser'] = $data['idusuario'];
   			$_SESSION['nombre'] = $data['nombre'];
   			$_SESSION['email'] = $data['email'];
   			$_SESSION['user'] = $data['usuario'];
   			$_SESSION['rol'] = $data['rol'];

   			header('location: admin.php');
   		}else{$alert = 'La Clave O Usuario Son Incorrectos';
            session_destroy();

      	}
   	}
   }
}   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de medición de KPI</title>
	<link rel="stylesheet" type="text/css" href="css1/stylekpi.css">	
</head>
<body>
	<section id="container">

		<form action="" method="post">

			<h3>Iniciar Sesión</h3>
			<img src="img/login.png" width="120" height="125" alt="Login">

			<input type="text" name="usuario" placeholder="Usuario">
			<input type="password" name="clave" placeholder="Contraseña">
			<div class="alert"><?php echo isset($alert) ? $alert : '';  ?></div>
			<input type="submit" value="INGRESAR">

		</form>

    </section>
</body>	
</html>