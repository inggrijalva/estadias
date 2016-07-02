<?php
include "conexion.php";
	if($_GET['estado']=="habilitado"){
		$mysqli->query("update comentarios set estado='deshabilitado' 
			where Id_comentarios=".$_GET['id']);
	}else {

		$mysqli->query("update comentarios set estado='habilitado' 
			where Id_comentarios=".$_GET['id']);

	}
	header("Location: ../administrador.php");
?>
