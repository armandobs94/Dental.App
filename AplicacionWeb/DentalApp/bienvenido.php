<?php 
	session_start();
	if (empty($_SESSION['user'])) {
		header('Location:index.php');
	}else{
		$_SESSION['user'];
	}
?>
<!DOCTYPE html>
<html lang="es">
	<head>
	<title>Dental.App</title>
		<meta charset="utf-8"/> <!-- Universal -->
		<meta description="Web "/> <!--Descripcion de la pagina apra que salga en el navegador  -->
		<!-- <link rel="stylesheet" type="text/css" href="css/estilos2.css"> -->
		<link rel="stylesheet" type="text/css" href="css/escritorio2.css">
		<link rel="stylesheet" type="text/css" href="css/telefono2.css">
		<link rel="stylesheet" type="text/css" href="css/tablet2.css">
	</head>
<body>
	<!-- Se muestra el nombre de usuario y link para salir -->
	<div id="logout">
		<a id="user">Bienvenido: <?php echo $_SESSION['user']; ?></a>
		<a href="php/logout.php"> Log out </a>
	</div>
	<a href="bienvenido.php">
		<img class="fade"   alt="DentalApp" src="img/logo.png"/>
	</a>
<section id="contenedor"> 
<!--Esta  es la  seccion es invisible-->
	
<section id="principal">    

<ul >
	<li><a href="#">Inicio</a></li>
	<li><a href="#">Citas</a>
		<ul>
			<li id="c_u"><a href="#">Por periodo.</a></li>
			<li id="c_d"><a href="#">Ocacional.</a></li>
		</ul>
	<li><a href="#">Generar reporte</a>
		<ul>
			<li id="g_u"><a href="#">General.</a></li>
			<li id="g_d"><a href="#">Periodo.</a></li>
			<li id="g_t"><a href="#">Cliente.</a></li>
		</ul>
</ul> 
</section>
<aside>  <!--Ete es el que va a la izquierda-->
	<div id="ajax">
		<?php  
			include_once('php/lista_citas.php');
		?>
	</div>	
</aside>
</section>

<!--  -->
	<script type="text/javascript" src="js/ajax.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/teclado.js"></script>
	<script type="text/javascript" src="js/valDatos.js"></script>
<!--  -->
</body>
</html>