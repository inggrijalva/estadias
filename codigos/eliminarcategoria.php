<?php
include "conexion.php";
	$mysqli->query("delete from categoria where Id_categoria=".$_GET['id']);
	header("Location: ../agregarcategoria.php");
?>
