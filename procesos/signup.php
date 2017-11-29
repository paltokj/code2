<?php

	include("conexion.php");

	$nombre = $_POST['nombres'];
	$apellidos = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$correo = $_POST['correo'];
	$pass = $_POST['pass'];
	$institucion = $_POST['institucion'];


	$sql = "insert into usuarios (nombres,apellidos,usuario,correo,password,institucion) values ('$nombre','$apellidos','$usuario','$correo','$pass','institucion')";

	$r = mysqli_query($conexion,$sql);

	header("Location: ../games.php");
?>