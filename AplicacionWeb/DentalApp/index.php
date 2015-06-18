<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Dentilapp</title>
		<meta charset="utf-8"/> <!-- Universal -->
		<meta description="Web principal donde los clientes podran ver la información del consultorio"/> <!--Descripcion de la pagina apra que slaga en el navegador  -->
	
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/escritorio.css">
		<link rel="stylesheet" type="text/css" href="css/telefono.css">
		<link rel="stylesheet" type="text/css" href="css/tablet.css">
		<link rel="stylesheet" type="text/css" href="css/flexslider.css">
		<link rel="stylesheet" type="text/css" href="js/flexslider.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script>
			$(window).load(function(){
			$(".flexslider").flexslider();

			});
		</script>
	</head>
<body>
	<form action="php/login.php" method="POST">
		<button id="btn">Log in</button>
		<input type="password" name="password" placeholder="Contraseña:"   id="comentario">
		<input type="text" name="user" placeholder="Usuario:"id="comentario">	
	</form>
	
<header>
	<div>	
		<nav>
			<ul>
				<!-- <li><a>Login</a></li> -->
				<li class="ocultar"><a>Información</a></li>
			</ul>
		</nav>
	</div>
	<h1>
		<a href="index.html" class="mostrar">
			<img class="fade"  class="mostrar" alt="DentalApp" src="img/logo.png">
		</a>
	</h1>
	</header>
	<section id="contenedor">  <!--Esta  es la  seccion es invisible-->
	<section id="principal">
	<article id="galeria-inicio">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<a href="index.php"><img src="img/uno.jpg"</a>
					<p class="flex-caption">Demo</p>
				</li>	

				<li>
					<a href="index.php"><img src="img/uno.jpg"</a>
					<p class="flex-caption">Demo</p>
				</li>
			</ul>
		</div>

	</article>
	</section>
	</section>
	<a href="index.html" class="ocultar">
		<img class="fade" alt="DentalApp" src="img/logo.png">
	</a>
	<footer>Dental.App</footer>
</body>
</html>