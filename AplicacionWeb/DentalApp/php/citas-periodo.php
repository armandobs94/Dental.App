<?php  
	include_once('conexion.php');
	/**
	* @file citas-periodo.php
	* @author Armando Blanco
	* @version 1.0
	* @brief Archivo encargado de guardar las citas por periodo
	*/

	/**
	* @brief obtenemos las variables
	*/
	$clave = $_GET['clave'];
	$fecha = $_GET['fecha'];
	$hora = $_GET['hora'];

	$sql_cita = "INSERT INTO citas(clave_cliente, fecha, horario, tipoCita) VALUES ('$clave','$fecha','$hora',2)";
	$result = mysqli_query($cont, $sql_cita);

	if(!$result) {
		echo "No se pudo guardar los datos de la cita. Intente más tarde.";
	}else{
		echo "Se ha guardado la cita.";
	}
?>
<a href="">Ver listado de citas</a>
