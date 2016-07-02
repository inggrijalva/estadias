<?php 
include "conexion.php";
$mysqli->query("insert into categoria(Categoria, Estado) 
	values(
		'".$_POST['nombre']."',
		 'habilitado')") or die($mysqli->error);
	header("Location: ../agregarcategoria.php");
 ?>