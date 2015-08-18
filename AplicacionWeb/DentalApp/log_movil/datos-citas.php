<?php
	/**
	* @file 
	* @brief 
	* @author Armando Blanco
	* @version 1.0 
	*/
	$clave = $_POST['clave'];
	include_once('../php/conexion.php');
	
	/**
	* @brief 
	*/
	$SQL = "SELECT * FROM citas WHERE clave_cliente = '$clave' AND tipoCliente = 2";
	$S = mysqli_query($cont, $SQL);

	$total = mysqli_num_rows($S);//Cuenta el total de registros encontrados.

	if($total >=1){
		while ($row = mysqli_fetch_array($S)) {//se recorren todos los datos

			$user = $row['clave_cliente'];
			$fecha = $row['fecha'];
			$hora = $row['horario'];
			
		
	/**
	* @brief Se crea una caja de datos en los que se envian las diferentes fechas encontradas
	*/		
		$ob[] = array(
				"clave_cliente" => $user,
				"fecha" => $fecha,
				"hora" => $hora
				);
		$js = json_encode($ob);//objeto json con datos de la cita
		
	}
		echo $js;		
	}else{
		echo "error";
	}

?>