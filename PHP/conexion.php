<?php
	function conectar(){
		//Conexión a DB mysql
		$conexi = @mysql_connect('localhost','root','');
		@mysql_select_db('macrosign',$conexi);
		if (!$conexi){
			echo "No se pudo conectar a la BD. Favor de verificar";
			return;
		}
		return $conexi;
	}
?>