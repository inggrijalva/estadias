<?php 
include "conexion.php";
$mysqli->query("insert into personas(Nombre, Apellido, Telefono, Direccion, Edad) 
	values('".$_POST['nombre']."', '".$_POST['apellido']."', 
		'".$_POST['telefono']."', '".$_POST['direccion']."', ".$_POST['edad'].")") or die($mysqli->error);
	header("Location: ../comentarios.php");
 ?>