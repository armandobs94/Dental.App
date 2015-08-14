<?php  
	$clave = $_GET['user'];
	$fecha = $_GET['fecha'];
	$horario = $_GET['hora'];

	include_once('../php/conexion.php');

	$SQL = "SELECT asistencia FROM citas WHERE clave_cliente = '$clave' AND fecha='$fecha' AND horario='$horario'";
	$result = mysqli_query($cont, $SQL);
	while ($row = mysqli_fetch_array($result)){
		$as = $row['asistencia'];

		if ($as == "0") {
		?>
			<a href="#" onclick="delCita('<?php echo $clave ?>','<?php echo $fecha ?>','<?php echo $horario ?>')">
				E
			</a>
		<?php 	
		}else{
			echo "E";
		}
	}
?>