<?php
	$mysqli = new mysqli('localhost', 'root', '', 'bd_luhi_muebleria');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);	
	}
?>