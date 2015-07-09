<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DentalApp</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">	
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato:300,400">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/menuresponsive.js"></script>
	<script type="text/javascript" src="js/calendario.js"></script>
	<script type="text/javascript" src="js/inicio.js"></script>
	
	<link rel="stylesheet" type="text/css" media="all" href="css/calendario.css"/>
</head>
<body>
<input type="hidden" id="caja_datos" readonly>
<button onclick="datosForm()">ver</button>
	<header class="container">		
			<nav class="navbar">
			  <div class="container-fluid">			    
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">			        
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" >DentalApp</a>
			    </div>
			    <div class="collapse navbar-collapse" id="menu">
			      <ul class="navbar-nav">
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle">Citas <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Por periodo</a></li>
			            <li><a href="#">Ocacional</a></li>
			          </ul>
			        </li>

					<li class="dropdown">
			          <a href="#" class="dropdown-toggle"> Generar reporte <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">General</a></li>
			            <li><a href="#">Periodo</a></li>
			            <li><a href="#">Cliente</a></li>
			          </ul>
			        </li>
			     </ul>
			     <ul class="nav navbar-nav navbar-right">
			        <li><a href="php/logout.php">Salir</a></li>		        
			     </ul>
			    </div>
			  </div>
			</nav>		
	</header>

<section id="contenedor">	
	<section id="principal">
</div>
		<!-- Aquí se muestra el calendario -->
		<div id="id_calendar" ></div>
	</section>
<aside>
	<div id="listado">
		<?php 
			include_once('php/citas.php');
		?>
	</div>
</aside>
	</section>
	
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/datos_conf.js"></script>
</body>
</html>