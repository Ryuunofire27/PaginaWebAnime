<?php
	require_once 'admin/conexion.php';
	require_once 'admin/config.php';

	$dbConn = conectar();


	$nombre=$_POST['nombre'];
	$sinopsis=$_POST['sinopsis']; 
	$imagen=$_POST['imagen'];
	$video=$_POST['video'];
	$tipo=$_POST['tipo'];
	$genero=$_POST['genero'];
	$duracion=$_POST['duracion'];
	$emitido=$_POST['emitido'];
	$estado=$_POST['estado'];
	$extra=$_POST['extra'];

	$query="INSERT INTO anime (nombre,sinopsis,imagen,video,tipo,genero,duracion,emitido,estado,extra) VALUES 
				('$nombre','$sinopsis','$imagen','$video','$tipo', '$genero', '$duracion', '$emitido', '$estado', '$extra')";
	$result= mysqli_query($dbConn,$query );

	mysqli_close($dbConn);

?>