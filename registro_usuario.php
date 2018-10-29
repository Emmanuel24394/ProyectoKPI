<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<title>Registro De Usuario</title>
</head>
<body>
     

	<section id="container">
         <div class="form_register">
		
			<h1>Registro Usuario</h1>
			<hr>
			<div class="alert"></div>

            <form>
            	
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" id="nombre" placeholder="Nombre Completo">
            	<label for="email">Correo Electronico</label>
            	<input type="email" name="correo" id="correo" placeholder="Correo Electronico">
            	<label for="usuario">Usuario</label>
            	<input type="text" name="usuario" id="usuario" placeholder="Usuario">
            	<label for="clave">Clave</label>
            	<input type="password" name="clave" id="clave" placeholder="Clave de Acceso">
            	<label for="rol">Tipo de Usuario</label>
            	<select name="rol" id="rol">
            		<option value="1">Administrador</option>
            		<option value="2">Supervisor</option>
            		<option value="3">Empleado</option>
            	</select>
            	<input type="submit" value="Crear Usuario" class="btn_save">
            </form>   


		</div>

	</section>
	
</body>
</html>