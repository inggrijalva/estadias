<?php
session_start(); 
	//isset si existe	
	if(isset($_POST['Usuario']) && isset($_POST['Password'])){

		$usuario=$_POST['Usuario'];//capturamos por metodo POST
		$password=$_POST['Password'];
		/*
			VERIFICAR LOGIN
			si usuario es pepito@gmail.com yla contraseña=1234
		*/
		$consulta="select * from usuario where 
					Correo='".$usuario."' AND 
					Contrasena='".sha1($password)."' ";
		include "conexion.php";
		
		$resultado=$mysqli->query($consulta);
		if($resultado->num_rows==1){
			while($f=mysqli_fetch_array($resultado)){
				echo $f['id']." ".$f['nombre']."</br>";
				$arregludo[]=array(
					"Id"=>$f['Id_usuario'],
					"Nombre"=>$f['Nombre']." ".$f['Apellido'],
					"Nivel"=>$f['Nivel'],
					"Correo"=>$f['Correo']
				);
				$_SESSION['datosusuario']=$arregludo;
				header("Location: ../administrador.php");
			}	
		}else{
			header("Location: ../login.php?error=Datos Invalidos");
		}
		
	}else{
		echo "De seguro eres un perro";
		header("Location: ../login.php?error=Usuario o Password Incorrectos");
	}	

?>