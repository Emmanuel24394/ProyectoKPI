<?php 


   $alert = '';
   
   if (!empty($_POST)){
   	if (empty($_POST['datos']))
   	{
   		$alert = 'Ingrese Datos';
   	}else{
   		require_once"conexion.php";

   		$datos = $_POST['datos'];
   		

   		$query = mysqli_query($conection,"SELECT * FROM datos WHERE datos= '$datos'");
   		$result = mysqli_num_rows($query);
        $query_insert = mysqli_query($conection, "INSERT INTO datos(datos) VALUES ('$datos')");
}}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de medicion de KPI</title>
		

<body>

   
    
	<section id="container">

		<form action="" method="post">

			
			

			<input type="text" name="datos" placeholder="Datos">
			
			<div class="alert"><?php echo isset($alert) ? $alert : '';  ?></div>
			
			<input type="submit" value="INGRESAR">
	
			
		</form>
         
		    
    </section>
    

</body>	
</html>