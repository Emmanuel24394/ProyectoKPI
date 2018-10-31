<?php 
  $volver="";
  if(isset($_POST['volver']))$volver=$_POST['volver'];

  if ($volver) {
  	header('location: admin.php');
  }else{

   $alert = '';
   
   if (!empty($_POST)){
   	if (empty($_POST['datos']))
   	{
   		$alert = 'Ingrese Datos';
   	}else{
   		require_once"com/conexion.php";

   		$datos = $_POST['datos'];
   	 
   		$query = mysqli_query($conection,"SELECT * FROM datos WHERE datos= '$datos'");
   		$result = mysqli_num_rows($query);
        $query_insert = mysqli_query($conection, "INSERT INTO datos(datos) VALUES ('$datos')");
      

}}

 


}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de medicion de KPI</title>
		
</head><link rel="stylesheet" type="text/css" href="css1/style2.css">
<body>

    <?php include "com/gra.php" ?>
    
	<section id="container">

		<form action="" method="post">

			<h3><?php include "com/nom.php" ?></p></h3>
			

			<input type="text" name="datos" placeholder="Datos">
			
			<div class="alert"><?php echo isset($alert) ? $alert : '';  ?></div>
			
			<input type="submit" value="INGRESAR">
			<input type="submit" name="volver" value="VOLVER">
	
			
		</form>
         
		    
    </section>
    

</body>	
</html>