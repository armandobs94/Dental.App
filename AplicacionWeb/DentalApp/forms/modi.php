<?php  
	$clave = $_GET['user'];
	$fecha = $_GET['fecha'];
	$horario = $_GET['hora'];
	include_once('../php/conexion.php');

	$SQL = "SELECT asistencia,horario FROM citas WHERE clave_cliente = '$clave' AND fecha='$fecha' AND horario='$horario'";
	$result = mysqli_query($cont, $SQL);
	while ($row = mysqli_fetch_array($result)){
		$as = $row['asistencia'];
		$hora = $row['horario'];

		if ($as == "0") {
		?>
			<a href="#" onclick="modiCita('<?php echo $clave ?>','<?php echo $hora ?>')">
				M
			</a>
		<?php 	
		}else{
			echo "M";
		}
	}
?>

