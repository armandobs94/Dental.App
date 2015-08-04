<?php
	/**
	* @file datos.php
	* @brief Archivo para mostrar los datos de la citas del dia actual.
	* @author Armando Blanco
	* @version 1.0 
	*/

	include('conexion.php');
	/**
	* @brief Se construye la hora de acuerdo a la zona horaria
	*/
	date_default_timezone_set("America/Mexico_City");//se define la zona horaria
	$anio = date('Y');//obtenemos el año
	$mes = date('m');//se obtiene el mes
	$dia = date('d');//se obtiene el dia
	$d = $dia;	
	$fecha=$anio."-".$mes."-".$d;//se construye la fecha completa
	
	/**
	* @brief Seleccionar todos los datos y agruparlos por fecha.
	*/
	$SQL = "SELECT * FROM citas WHERE fecha = '$fecha' ORDER BY horario";
	$S = mysqli_query($cont, $SQL);

	$total = mysqli_num_rows($S);//Cuenta el total de registros encontrados.

	if($total >=1){
		while ($row = mysqli_fetch_array($S)) {//se recorren todos los datos
		
		$horario = explode(":", $row['horario']);//separar la fecha

		$hora = $horario[0];//separa el año.
		$min = $horario[1];//separa el mes.
		$user = $row['clave_cliente'];
		
	/**
	* @brief Se crea una caja de datos en los que se envian las diferentes fechas encontradas
	*/		
		$ob[] = array(
				"hora" => $hora,
				"min" => $min,
				"user" => $user
			);
		$js = json_encode($ob);//objeto json con datos de la cita
		
	}
		echo $js;		
	}else{
		echo "error";
	}

?>