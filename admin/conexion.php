<?php
	require_once 'config.php';
	function conectar (){
		$db_con= mysqli_connect(DB_SERVER, DB_USER, DB_PASS)
		or die ("Problemas con la conexion");
		
		mysqli_select_db($db_con, DB_NAME )
		or die ("Problemas al conectar a la base de datos");
		
		return $db_con;
	}
?>