<?php
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
session_start();
				session_unset();
				session_destroy();
		echo "<script language='javascript'>alert('Sesion Cerrada.')</script>";
		echo "<script language=JavaScript>window.location='../index.php'</script>";
		
?>