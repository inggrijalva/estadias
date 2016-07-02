<?php 
session_start();
	/*if(isset($_SESSION['datosusuario'])){
		$arreglocapturado=$_SESSION['datosusuario'];
	}else{
		header("Location: ./busqueda.php");
	}	*/
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
	<link href="./css/estilos.css" rel="stylesheet">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<img src="./imagenes/logo.png" id="logo">
	<div id="cuadro" class="col-md-8 col-md-offset-2 col-xs-12">
		<div id="barratitulo">
			<h2>Administrador</h2>
			<h1>Lista de peticiones</h1>
			<br>
			<center>
				<a href="./pdf/descargar.php" style="color:white">
					<i class="glyphicon glyphicon-arrow-down"></i>
					DESCARGAR

				</a>
			</center>	
		</div>
		<div class="container col-lg-12">
		<br>
			<div class="post">
					
						<?php 
							
								include "./codigos/conexion.php";
								$resultado=$mysqli->query("select * from vistacomentario;  ");

								while ($f=mysqli_fetch_array($resultado)) {
					?>

							<div>
								<div class="col-lg-8">
									<h3><?php echo $f['Nombre']." ".$f['Apellido'];?></h3>
								</div>
								<div class="col-lg-4">
									<i><?php echo $f['Fecha'];?></i>
								</div>
								<div class="col-lg-12">
									<h4><?php echo $f['Categoria'];?><h4>
									<h5><?php echo $f['Direccion'];?></h5>
								</div>
								<div class="col-lg-12">
									<?php echo $f['Comentario'];?>
								</div>
								<!-- yea -->
								<div class="col-lg-3 col-lg-offset-8">
									<?php 
										if($f['Estado']=="habilitado"){
											echo '<a href="./codigos/cambiarestado.php?id='.$f['Id_comentarios'].'&estado='.$f['Estado'].'" >
													Deshabilitar
												</a>';
										}else{
											echo '<a href="./codigos/cambiarestado.php?id='.$f['Id_comentarios'].'&estado='.$f['Estado'].'" >
													Habilitar
												</a>';
										}
									?>

									<a href="./codigos/eliminar.php?id=<?php echo $f['Id_comentarios'];?>">
										Eliminar
									</a>
								</div>
							</div>
							
					<?php
								}


						?>
						
							
				
			</div>
		</div>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>	
</html>