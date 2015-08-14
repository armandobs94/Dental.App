<?php 
	session_start();
	if (empty($_SESSION['id_administrador'])) {
		header('Location:index.php');
	}else{
		$id = $_SESSION['id_administrador'];
		
	}
	/*Aquiva la consulta para validar el Administrador*/
	include("php/conexion.php");
	$query = mysqli_query($cont,"SELECT * FROM administrador where id_administrador = '$id'");
	while ($row = mysqli_fetch_array($query)) {
		$t_a = $row['tipo'];
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>DentalApp</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
	<link rel="stylesheet" type="text/css" href="css/escritorio2.css">
	<link rel="stylesheet" type="text/css" href="css/tablet2.css">
	<link rel="stylesheet" type="text/css" href="css/telefono2.css">
	<link rel="stylesheet" type="text/css" href="css/font.css">
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/menuresponsive.js"></script>
	<script type="text/javascript" src="js/calendario.js"></script>
	<script type="text/javascript" src="js/inicio.js"></script>
	<script type="text/javascript" src="js/v_administrador.js"></script>
	<script type="text/javascript" src="js/buscador.js"></script>
	<script type="text/javascript" src="js/env_valores.js"></script>
	<script type="text/javascript" src="js/v_contraseña.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="css/calendario.css"/>

</head>
<body>
<input type="text" id="t_a" value="<?php echo $t_a;?>" hidden>
<input type="hidden" id="caja_datos" readonly>
<input type="hidden" id="hora" readonly>
<input type="hidden" id="campoFecha">
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
			          
			            <li class="dropdown">
				          <a href="#" id="c_u" class="dropdown-toggle">Por periodo <b class="caret"></b></a>
				          <ul class="dropdown-menu">
				            <li><a href="#" id="g_cliente">Nuevo cliente</a></li>
				            <li><a href="#" id="g_cita">Cita</a></li>
				           
				          </ul>
				        </li>
			            <li><a href="#" id="c_d">Ocacional</a></li>
			          </ul>
			        </li>

					<li class="dropdown">
			          <a href="#" class="dropdown-toggle"> Generar reporte <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#" id="g_u">General</a></li>
			            <li><a href="#" id="g_d">Periodo</a></li>
			            <li><a href="#" id="g_t">Cliente</a></li>
			          </ul>
			        </li>
			        			        <li class="dropdown" display="none" id="v_a">
			          <a href="#" class="dropdown-toggle" >Administrador<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			           <li class="dropdown">
				          <a href="#" id="c_u" class="dropdown-toggle">Nuevo administrador <b class="caret"></b></a>
				          <ul class="dropdown-menu">
				            <li><a href="#" id="n_aS">Administrador del sistema</a></li>
				            <li><a href="#" id="n_aB">Administrador basico</a></li>
				          </ul>
				        </li>
				            <li><a href="#" id="e_ad">Eliminar administradores</a></li>
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
		<?php include_once('php/citas.php'); ?>
	</div>
</aside>
	</section>
	
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/datos_conf.js"></script>
<script type="text/javascript" src="js/valDatos.js"></script>
<script type="text/javascript" src="js/teclado.js"></script>

</body>
</html>