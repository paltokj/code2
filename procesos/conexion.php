<?php 

	$conexion = new mysqli('localhost','root','','labcet');
	
	if($conexion->connect_error){
		die('Error' . $conexion->connect_error);
	};
?>