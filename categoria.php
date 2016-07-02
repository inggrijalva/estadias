<?php 
session_start();
	
	/*if(isset($_SESSION['datosusuario'])){
		$arreglocapturado=$_SESSION['datosusuario'];
	}else{
		header("Location: ./busqueda.php");
	}*/	
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Apoyos</title>
	<link href="./css/estilos.css" rel="stylesheet">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<img src="./imagenes/logo.png" id="logo">
	<div id="cuadro" class="col-md-8 col-md-offset-2 col-xs-12">
		<div id="barratitulo">
			<h2>Administrador</h2>
			<h1>Insertar apoyos</h1>
			
		</div>
		<div class="container col-lg-12">
		<br>
			<div class="post">
					
						<form class="">	

							<div class="form‐group">
								<label for="exampleInputEmail1">Nombre</label>
								<input type="text" class="form‐control" id="exampleInputEmail1"placeholder="Inserte su Nombre">
							</div>
							<button type="submit" class="btn btn-info">Aceptar</button>
						</form>
						<div class="table‐responsive">
							<table class="table table‐striped">
								<thead>
									<tr>
										<td>nombre</td>
										<td>estado</td>
									</tr>
								</thead>
								<tbody class="table‐striped">
									<tr>
										<td>cemento</td>
										<td>habilitado</td>

									</tr>
									
									<?php 
									include "./codigos/conexion.php";
										$resultado=$mysqli->query("select * from categoria"); 
										while ($f=mysqli_fetch_array($resultado)){
											echo '<tr><td>'.$f['Categoria'].'</td>';
											echo '<td>'.$f['Estado'].'</td></tr>';
										}
									 ?>
										
										
									
								</tbody>
							</table>
						</div>		
				
			</div>
		</div>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>	
</html>