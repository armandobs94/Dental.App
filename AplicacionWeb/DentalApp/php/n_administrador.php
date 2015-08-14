<?php
	$tipo = $_GET['tipo'];
	if ($tipo == "AS") {
		$user = $_GET['user'];
		$ctr = $_GET['ctr'];
		include("conexion.php");
		mysqli_query($cont,"INSERT INTO administrador VALUES ('',
																	  '$user',
																	  '$ctr','$tipo')");
		echo "<script>
				  alert('Registro exitoso');
				  window.location='../bienvenido.php';
			  </script>";
	}else{
		$tipo = "AB";
		$user = $_GET['user'];
		$ctr = $_GET['ctr'];
		include("conexion.php");
		mysqli_query($cont,"INSERT INTO administrador VALUES ('',
																	  '$user',
																	  '$ctr','$tipo')");
		echo "<script>
				  alert('Registro exitoso');
				  window.location='../bienvenido.php';
			  </script>";
	}
	
?>
