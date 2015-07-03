<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Dental.App</title>
		<meta charset="utf-8"/> <!-- Universal -->
		<meta description="Pagina principal del dentista"/> <!--Descripcion de la pagina apra que slaga en el navegador  -->
	
		<!-- <link rel="stylesheet" type="text/css" href="css/estilos.css"> -->
		<link rel="stylesheet" type="text/css" href="css/escritorio.css">
		<link rel="stylesheet" type="text/css" href="css/telefono.css">
		<link rel="stylesheet" type="text/css" href="css/tablet.css">
		<link rel="stylesheet" type="text/css" href="css/flexslider.css">
		
		<script language="JavaScript" type="text/javascript" src="js/clickEnter.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
		<script src="js/jquery.flexslider.js"></script>
		<script>
			$(window).load(function(){
			$(".flexslider").flexslider();

			});
		</script>
	</head>
<body><br>
	<form action="php/login.php" method="POST" onkeypress="clickEnter();">
		<div id="inputs">
			<input  id="user" type="text" name="user" placeholder="Usuario:"id="comentario" required>	
			<input type="password" name="password" placeholder="Contraseña:" id="comentario" required>
			<button id="btn">Log in</button>
		</div>
		
	</form>
	
<header>
	
	<h1>
		<a href="index.php" >
			<img class="fade"  class="mostrar" alt="DentalApp" src="img/logo.png">
		</a>
	</h1>
	</header>
	<section id="contenedor">  
	<article id="galeria-inicio">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<a href="index.php"><img src="img/dentall.png"</a>
					<p class="flex-caption">DentalApp</p>
				</li>	

				<li>
					<a href="index.php"><img src="img/dentall2.png"</a>
					<p class="flex-caption">DentalApp</p>
				</li>

<li>
					<a href="index.php"><img src="img/dentall3.png"</a>
					<p class="flex-caption">DentalApp</p>
				</li>

			</ul>
		</div>

	</article>
	</section>
	
	
</body>
</html>