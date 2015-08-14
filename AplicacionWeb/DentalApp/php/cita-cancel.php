<?php  
	include_once('conexion.php');

	$clave = $_GET['clave'];
	$hora = $_GET['hora'];
	$fecha = $_GET['fecha'];

	$sql = "DELETE FROM citas WHERE clave_cliente='$clave' AND horario='$hora' AND fecha = '$fecha'";
	$result = mysqli_query($cont, $sql);

	if(!$result){
		echo "Error, no se pudo eliminar la cita. Intente más tarde.";
	}else{
	?>
	<a href="">Regresar al listado de citas</a>
	<?php 
	}
?>