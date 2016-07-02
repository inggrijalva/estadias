<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="./css/estilos.css" rel="stylesheet">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
	<body>
	<img src="./imagenes/logo.png" id="logo">
		<div id="cuadro" class="col-md-4 col-md-offset-4 col-xs-12">
		<div id="barratitulo">
			<h2></h2>
			<h1>Registro</h1>
			<div id="steps" class="col-lg-12" style="">
			  <div class="step " data-desc="." style="visibility:hidden">.</div>
			  <div class="step" style="cursor:pointer" data-desc="Inicio" id="link">Volver</div>
			  <div class="step " data-desc="." style="visibility:hidden">.</div>
			  
			</div>
		</div>
		<div class="container col-lg-12">
		<form class="" action="./codigos/registrar.php" method="post">

			<div class="form‐group col-lg-12">

				<input type="text" class="form‐control" name="nombre" placeholder="Inserta nombre" required="true">
			</div>

			<div class="form‐group">
				
				<input type="text" class="form‐control"  name="apellido" placeholder="Inserta apellido" required="true">
			</div>
			<div class="form‐group">
				<input type="text" class="form‐control"  name="telefono" placeholder="Inserta telefono" required="true">
			</div>
			<div class="form‐group">
				<input type="text" class="form‐control"  name="direccion" placeholder="Inserta direccion" required="true">
			</div>
			<div class="form‐group">
				<input type="number" class="form‐control"  name="edad" placeholder="Inserta edad" required="true">
			</div>
			<button type="submit" class="btn btn-info">Aceptar</button>
		</form>
		</div>
	</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			
			$(document).ready( function() {
			  $('.step').each(function(index, element) {
			     element == this
			    $(element).not('.active').addClass('done');
			    $('.done').html('<i class="icon-ok"></i>');
			   if($(this).is('.active')) {
			      return false;
			    }
			  });  
			  $("#link").on('click',function(){
			  	location.href="./busqueda.php";
		     });  
			});
		</script>



















		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
