<?php
	include("conexion.php");
	$conn = conectar();

	$arr = array();
	$correo = $_POST['correo'];
	$pass = $_POST['pass'];
	$sql = "SELECT id_usuario,correo,nombres,apellidos,id_tipo_usuario FROM usuarios WHERE correo = '".$correo."' && password ='".$pass."'";
	$result = @mysql_query($sql,$conn) or die(mysql_error());
	$row = mysql_fetch_array($result);
	if($row==0){
		$arr = array('id'=>"no");
	}else{
			$arr = array('id'=>$row[0],
					   'correo'=>$row[1],
					   'nombre'=>$row[2],
					   'apellido'=>$row[3],
					   'tipo'=>$row[4]);
			
			session_start();
			$_SESSION['id'] = $row[0];
			$_SESSION['correo'] = $row[1];
			$_SESSION['nombre'] = $row[2];
			$_SESSION['apellido'] = $row[3];
			$_SESSION['tipo'] = $row[4];
		};	
	mysql_close($conn);
	echo json_encode($arr);
?>