<?php  
	include_once('conexion.php');

	$clave = $_GET['clave'];
	$fecha = $_GET['fecha'];
	$hora = $_GET['hora'];
	//citas
	$observaciones = $_GET['obs'];
	$asistencia = $_GET['asis'];
	//pagos
	$pago = $_GET['pago'];
	//presupuestos
	$total_presupuesto = $_GET['resto'];


	if ($pago==0 && $asistencia=='NO') {
		$sql_citas = "UPDATE citas SET observaciones = '$observaciones', asistencia = '$asistencia' WHERE clave_cliente = '$clave' AND horario = '$hora' AND fecha = '$fecha'";	
		$r1 = mysqli_query($cont, $sql_citas) or die('Error consulta citas');
		if (!$r1) {
			echo "Error, intente más tarde.";
		}else{
?>
			<label>El registro ha sido guardado.</label>
			<a href="">Regresar al listado de citas</a>
<?php			
		}
	}else{
		$sql_citas = "UPDATE citas SET observaciones = '$observaciones', asistencia = '$asistencia' WHERE clave_cliente = '$clave' AND horario = '$hora' AND fecha = '$fecha'";
		$sql_pagos = "INSERT INTO pagos(clave_cliente,monto) VALUES ('$clave','$pago')";
		$sql_pre = "UPDATE presupuestos SET total_presupuesto = '$total_presupuesto' WHERE clave_cliente = '$clave'";

		$r1 = mysqli_query($cont, $sql_citas) or die('Error consulta citas');
		$r2 = mysqli_query($cont, $sql_pagos) or die('Error consulta pagos');
		$r3 = mysqli_query($cont, $sql_pre) or die('Error consulta presupuestos');

		if(!$r1 || !$r2 || !$r3){
			echo "Error, intente más tarde.";
		}else{
?>
			<label>El registro ha sido guardado.</label>
			<a href="">Regresar al listado de citas</a>
<?php		
		}
	}
?>