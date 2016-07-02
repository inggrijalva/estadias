<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Busqueda</title>
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
			  <div class="step link active" data-desc="Busqueda">1</div>
			  <div class="step link" data-desc="Resultados">2</div>
			  <div class="step link" data-desc="Captura">3</div>
			  
			</div>
		</div>
		<div class="container col-lg-12">
			<form class=""  action="./resultado.php" method="get">	

				<div class="form‐group col-lg-12">
					<input type="text" class="form‐control" id="exampleInputEmail1" name="nombre" placeholder="Inserte el Nombre">
				</div>
				<div class="form‐group col-lg-12">
					<input type="text" class="form‐control" id="nombre" name="apellido" placeholder="Inserte el Apellido">
				</div>
				<div class="form‐group col-lg-12">
					<button type="submit" class="btn btn-info ">Siguiente</button>
				</div>
			</form>
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