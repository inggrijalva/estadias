<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>final</title>
	<link href="./css/estilos.css" rel="stylesheet">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<img src="./imagenes/logo.png" id="logo">
	<div id="cuadro" class="col-md-4 col-md-offset-4 col-xs-12">
		<div id="barratitulo">
			<h2></h2>
			<h1>LISTO</h1>
			<div id="steps" class="col-lg-12">
			  <div class="step " data-desc="." style="visibility:hidden">.</div>
			  <div class="step" style="cursor:pointer" data-desc="Inicio" id="link">Volver</div>
			  <div class="step " data-desc="." style="visibility:hidden">.</div>
			  
			</div>
		</div>
		<div class="container col-lg-12">
			<center>
				<h2>Se ha guardado correctamente la captura</h2>
				
				<a href="./busqueda.php" class="btn btn-primary">
					INICIO
				</a>
			</center>
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
			    $("#link").on('click',function(){
			  	location.href="./busqueda.php";
			  });   
			});
		</script>
	</body>
</html>