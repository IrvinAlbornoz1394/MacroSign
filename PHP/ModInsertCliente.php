<?php 
	include("conexion.php");
	$conn = conectar();

	$correo = $_POST['correo'];
	$contrasena = $_POST['contrasena'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$telefono = $_POST['telefono'];
	$telefono_adicional = $_POST['telefono_adicional'];

 	
 	$sql = "INSERT INTO usuarios VALUES ('','$correo','$contrasena','$nombres','$apellidos','$telefono','$telefono_adicional','1')";
 	if (!$result) {
   		echo "Fallo al insertar datos: (" . $mysqli->errno . ") " . $mysqli->error;
	}else{
		echo "Guardado Exitosamente";
	}
	mysql_close($conn);
 ?>