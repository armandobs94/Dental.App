<?php 
	session_start();
	if (empty($_SESSION['user'])) {
		header('Location:php/login.php');
	}else{
		echo $_SESSION['user'];
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<title>Dentilapp</title>
<meta charset="utf-8"/> <!-- Universal -->
<meta description="Web "/> <!--Descripcion de la pagina apra que slaga en el navegador  -->

	
<link rel="stylesheet" type="text/css" href="css/estilos2.css">
<link rel="stylesheet" type="text/css" href="css/escritorio2.css">
<link rel="stylesheet" type="text/css" href="css/telefono2.css">
<link rel="stylesheet" type="text/css" href="css/tablet2.css">


</head>

<body>
<!-- Se muestra el nombre de usuario y link para salir -->
<a href="php/logout.php"> Log out </a>
<a href="index.php">
	<img class="fade"   alt="DentalApp" src="img/logo.png"/>
</a>


<section id="contenedor">  <!--Esta  es la  seccion es invisible-->
	
<section id="principal">    

<ul >
	
		<li><a href="#">Inicio</a></li>
	
		<li><a href="#">Citas</a>
		
			<ul>
				<li><a href="#">Por periodo.</a></li>
				<li><a href="#">Ocacional.</a></li>
		
			</ul>
				

<li><a href="#">Generar reporte</a>
		
			<ul>
				<li><a href="#">General.</a></li>
				<li><a href="#">Periodo.</a></li>
		<li><a href="#">Cliente.</a></li>
			</ul>
		


	</ul>
 
</section>



<aside>  <!--Ete es el que va a la izquierda-->
Ajax  	
</aside>



</section>



<footer>Dentalapp</footer>


</body>
</html>