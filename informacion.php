<?php
	require_once 'admin/conexion.php';
	require_once 'admin/config.php';

	$dbConn = conectar();
	$query = "SELECT * FROM anime WHERE id=9";
	$resultado=mysqli_query($dbConn,$query);
	$row=mysqli_fetch_row($resultado);

	$nombre=$row[1];
	$sinopsis=$row[2]; 
	$imagen=$row[3];
	$video=$row[4];
	$tipo=$row[5];
	$genero=$row[6];
	$duracion=$row[7];
	$emitido=$row[8];
	$estado=$row[9];
	$extra=$row[10];

	mysqli_close($dbConn);
?>