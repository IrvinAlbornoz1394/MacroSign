<?php 
	include("conexion.php");
	$conn = conectar();

	$nombre = $_POST['nombre'];
	$imagen = $_POST['imagen'];
	$descripcion = $_POST['descripcion'];
	$estado = $_POST['estado'];
	if($estado!="1"){
		$estado =2;
	}else{
		$estado =1;
	}

 	$sql = "INSERT INTO productos VALUES ('','$nombre','$imagen','$descripcion','$estado')";
	$result = @mysql_query($sql,$conn) or die(mysql_error());
	if (!$result) {
		
    echo "Fallo al insertar datos: (" . $mysqli->errno . ") " . $mysqli->error;
}else{
	echo "Guardado Exitosamente";
		//echo "<script language=JavaScript>window.location='../../contrato/nuevocontrato.php?id_cliente=".$id."';</script>";
}
	mysql_close($conn);
 ?>