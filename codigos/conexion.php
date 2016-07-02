<?php
	$nombreusuario="root";
	$passwordbd="";
	$servidor="localhost";
	$basedatos="desarrollosocial";
	
	//$conId=mysql_connect($servidor,$nombreusuario,$passwordbd)or die("No se pudo conectar :C ");
	//$selectDb=mysql_select_db($basedatos, $conId)or die("No existe esa bd");
		$mysqli = new mysqli($servidor, $nombreusuario, $passwordbd,$basedatos);
	if($mysqli->connect_error){
		die('no se pudo conectar'.mysqli_connect_error());
	}

?>