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
			<h2>PASO 3</h2>
			<h1>COMENTARIOS</h1>
			<div id="steps" class="col-lg-12">
			  <div class="step link " data-desc="Busqueda">1</div>
			  <div class="step link" data-desc="Resultados">2</div>
			  <div class="step link active" data-desc="Captura">3</div>
			  
			</div>
		</div>
		<div class="container col-lg-12">
			<form  action="./codigos/insertarcomentario.php" method="post">	
				<div class="form‐group">
					
					<input type="text" class="form‐control" 
						disabled="true"
						placeholder="Inserte su Nombre" value="<?php echo $_GET['nombre'] ?>">
					<input type="hidden" name="Id" value="<?php echo $_GET['id']; ?>">
				</div>
				<div class="form‐group">
					
					<select class="form-control" name="cate">
						<?php 
						include "./codigos/conexion.php";
							$resultado=$mysqli->query("select * from categoria where Estado='habilitado'"); 
							while ($f=mysqli_fetch_array($resultado)){
								echo '<option value="'.$f['Id_categoria'].'">'.$f['Categoria'].'</option>';
							}
						 ?>
						
					</select>
				</div>
				<div class="form‐group">
					<textarea  class="form-control" rows="5" placeholder="inserte el comentario" name="comen"></textarea>
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