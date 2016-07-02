<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Categoria</title>
	<link href="./css/estilos.css" rel="stylesheet">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
	<img src="./imagenes/logo.png" id="logo">
	<div id="cuadro" class="col-md-4 col-md-offset-4 col-xs-12">
		<div id="barratitulo">
			<h2>Agregar</h2>
			<h1>Categoria</h1>
			<div id="steps" class="col-lg-12">
			</div>
		</div>
		<div class="container col-lg-12">
			<form class=""  action="./codigos/insertarcategoria.php" method="POST">	

				<div class="form‐group col-lg-12">
					<input type="text" class="form‐control" id="exampleInputEmail1" name="nombre" placeholder="Inserte categoria">
				</div>
				<div class="form‐group col-lg-12">
					<button type="submit" class="btn btn-info ">Siguiente</button>
				</div>
			</form>
			<div class="table table‐bordered">
					<table class="table col-md-0 col-md-offset-0 col-xs-12 table‐striped">
						<tbody class="table‐striped">
						<?php 
							
								include "./codigos/conexion.php";
								$resultado=$mysqli->query("select * from categoria");

								while ($f=mysqli_fetch_array($resultado)) {
					?>
							<tr>
								<td><?php echo $f['Categoria'];?></td>
								<td>
									<div class="checkbox">
										<label>
										<a href="./codigos/eliminarcategoria.php?id=<?php echo $f['Id_categoria'];?>">Eliminar</a>
										</label>
									</div>
								</td>
							</tr>
					<?php
								}

							
						?>
						
							
							
						</tbody>
					</table>
				
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