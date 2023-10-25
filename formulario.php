<?php 
// invoco el archivo de conexion a la base de datos
include ('conexion.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<div class="contenedor">
		<h3> Registrar Usuario</h3>

		<form action="guardar.php" method="post">
			<label>Nombres</label><br>
			<input type="text" name="Nombres" placeholder="Digite Nombres"><br>
			<label>Apellidos</label><br>
			<input type="text" name="Apellidos" placeholder="Digite Apellidos"><br>
			<label>Email</label><br>
			<input type="text" name="Email" placeholder="Digite Email"><br><br>  
			<label>Contraseña</label><br>  
			<input type="text" name="Contraseña" placeholder="Digite Contraseña"><br><br>       
    </div>
			<p> Para crear una cuenta estas de acuerdo con nuestros <a href="register.html">Terminos & Condiciones</a>.</p>
    		<button type="submit" class="registerbtn">Registrarse</button>

  			<div class="container signin">
    		<p>Ya tienes una cuenta? <a href="login.html">Ingresa</a>.</p>
  			</div>
	    </form>
</table>
</body>
</html


