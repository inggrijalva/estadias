<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INICIAR SESIÓN</title>
	<link href="./css/estilos.css" rel="stylesheet">
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body>
<img src="./imagenes/logo.png" id="logo">
	<div id="cuadro" class="col-md-4 col-md-offset-4 col-xs-12">
		<div id="barratitulo">
			<h2></h2>
			<h1>INICIAR SESIÓN</h1>
		</div>
		<div class="container col-lg-12">
			<form class=""  action="./codigos/verificarlogin.php" method="POST">	

				<div class="form‐group col-lg-12">
					<input type="text" class="form‐control" id="exampleInputEmail1" name="Usuario" placeholder="USUARIO">
				</div>
				<div class="form‐group col-lg-12">
					<input type="password" class="form‐control" id="nombre" name="Password" placeholder="PASSWORD">
				</div>

				<div class="form‐group col-lg-12">
					<br>
					<center>
						<button type="submit" class="btn btn-info ">Iniciar Sesión</button>
					</center>
				</div>
			</form>
		</div>
	</div>
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
			
	</body>
</html>