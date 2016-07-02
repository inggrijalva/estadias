<?php
	if(isset($_GET['nombre']) || isset($_GET['id'])){}else{
		header("Location: ./busqueda.php");
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultados</title>
	<link href="./css/estilos.css" rel="stylesheet">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<img src="./imagenes/logo.png" id="logo">
	<div id="cuadro" class="col-md-4 col-md-offset-4 col-xs-12">
		<div id="barratitulo">
			<h2>PASO 1</h2>
			<h1>BÚSQUEDA</h1>
			<div id="steps" class="col-lg-12">
			  <div class="step link " data-desc="Busqueda">1</div>
			  <div class="step link active" data-desc="Resultados">2</div>
			  <div class="step link " data-desc="Captura">3</div>
			  
			</div>
		</div>
		<div class="container col-lg-12">
		<br>
			<div class="table table‐bordered">
					<table class="table col-md-0 col-md-offset-0 col-xs-12 table‐striped">
						<tbody class="table‐striped">
						<?php 
							if(isset($_GET['nombre'])&& isset($_GET['apellido'])){
								include "./codigos/conexion.php";
								$resultado=$mysqli->query("select * from personas where nombre like 
									'%".$_GET['nombre']."%' and apellido like 
									'%".$_GET['apellido']."%'");

								while ($f=mysqli_fetch_array($resultado)) {
					?>
							<tr>
								<td><?php echo $f['Nombre'];?></td>
								<td><?php echo $f['Apellido'];?></td>
								<td><?php echo $f['Direccion'];?></td>
								<td>
									<div class="checkbox">
										<label>
										<a href="comentarios.php?id=<?php echo $f['Id_personas'];?>&nombre=<?php echo $f['Nombre'];?>">Aceptar</a>
										</label>
									</div>
								</td>
							</tr>
					<?php
								}

							}



						?>
						
							
							
						</tbody>
					</table>
				<a href="registro.php" class="btn btn-primary">
					<i class="fa fa-add"></i>	Agregar
				</a> 
			</div>
		</div>
	</div>
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
			
			$(document).ready( function() {
			  $('.step').each(function(index, element) {
			    // element == this
			    $(element).not('.active').addClass('done');
			    $('.done').html('<i class="icon-ok"></i>');
			    if($(this).is('.active')) {
			      return false;
			    }
			  }); 
			  $(".link").on('click',function(){
			    	if($(this).data("desc")=="Busqueda"){
			    	   	location.href="./busqueda.php";	
			    	}
			  	
			    });   
			});
		</script>
</body>	
</html>