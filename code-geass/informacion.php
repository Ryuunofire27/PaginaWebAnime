<?php
	require_once '../admin/conexion.php';
	require_once '../admin/config.php';

	$dbConn = conectar();

	$reg = mysqli_query($dbConn, "SELECT * FROM anime WHERE nombre=$nombre, sinopsis=$sinopsis, imagen=$imagen, video=$video,
						tipo=$tipo, genero=$genero, duracion=$duracion, emitido=$emitido, estado=$estado, extra=$extra ");

?>