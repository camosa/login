<?php 
include('conexion.php');

// los recogemos con las siguientes variables
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Email= $_POST['Email'];
$Contraseña= $_POST['Contraseña'];

//string de que permita realizar la accion de la insercion

$ins = $con-> query("INSERT INTO usuario(Nombres,Apellidos,Email,Contraseña) VALUES ('$Nombres','$Apellidos','$Email','$Contraseña')");
if ($ins) {
	        echo "<h1> Registro guardo con exito. </h1>";
          }
else  {
	     echo "<h1> Registro no guardado. </h1> <br/>";
      }

 echo "<h1> <a href='formulario.php' </a> Regresar al Formulario </h1>";
 //include('includes/desconectar.php');
 ?>