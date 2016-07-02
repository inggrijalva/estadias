<?php
include "conexion.php";
	$mysqli->query("delete from comentarios where Id_comentarios=".$_GET['id']);
	header("Location: ../administrador.php");
?>
