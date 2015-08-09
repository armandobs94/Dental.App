<?php  
	/**
	* @file citas-cliente.php
	* @brief Archivo para cargar los datos de la cita del cliente en el movil
	* @author Armando Blanco
	* @version 1.0
	*/
	include_once('../php/conexion.php');

	$clave = $_GET['clave'];
	$sql = "SELECT A.fecha,A.horario,B.nombre,B.apellido_p FROM citas A, clientes B WHERE A.clave_cliente = '$clave' AND B.clave_cliente ='$clave' AND A.tipoCita = 2 ORDER BY fecha DESC LIMIT 0,1";
	$result = mysqli_query($cont, $sql);

	if (!$result) {
		echo "Error";
	}else{
		while ($row=mysqli_fetch_array($result)) {
			 $hora = $row['fecha'];
			 $fecha = $row['horario'];
			 $nombre = $row['nombre'];
			 $apellido_p = $row['apellido_p'];

			$datos = array(
				"fecha"=>$fecha,
				"hora"=>$hora,
				"nombre"=>$nombre,
				"apellido_p"=>$apellido_p
						
			);

			$ob = json_encode($datos);
		}
		echo $ob;
	}

?>