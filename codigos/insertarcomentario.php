<?php 
include "conexion.php";
$mysqli->query("insert into comentarios(Id_persona, Id_categoria, Id_usuario, Comentario, Estado) 
	values(".$_POST['Id'].", ".$_POST['cate'].", 
		1, 
		'".$_POST['comen']."',
		 'habilitado')") or die($mysqli->error);
	header("Location: ../final.php");
 ?>