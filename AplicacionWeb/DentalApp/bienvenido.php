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
	<meta charset="utf-8">
	<title>Dental.App</title>
	<link rel="stylesheet" type="text/css" href="css/calendario.css"/>
</head>
<body>
	<div id="logout">
		<a id="user">Bienvenido: <?php echo $_SESSION['user']; ?></a>
		<a href="php/logout.php"> Log out </a>
	</div>
	
	<!-- Aquí se muestra el calendario -->
	<div id="id_calendario" style="margin:10px 0 30px 0; border:dashed 1px red; width:200px; height:200px;"></div>
	<div id="contenido">
		<?php 
			//include_once('php/citas.php');
		?>
	</div>
	<div id="caja_datos"></div>
	<!-- JS -->
	<script type="text/javascript" src="js/calendario.js"></script>
	<script type="text/javascript" src="js/inicio.js"></script>
	<script type="text/javascript" src="js/datos_conf.js"></script>
</body>
</html>


	