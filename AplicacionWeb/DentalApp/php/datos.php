<?php
	include('conexion.php');

	date_default_timezone_set("America/Mexico_City");//se define la zona horaria
	$anio = date('Y');//obtenemos el año
	$mes = date('m');//se obtiene el mes
	$dia = date('d');//se obtiene el dia
	$d = $dia;	
	$fecha=$anio."-".$mes."-".$d;//se construye la fecha completa
	
	//Seleccionar todos los datos y agruparlos por fecha.
	$SQL = "SELECT * FROM citas WHERE fecha = '$fecha' ORDER BY hora";
	$S = mysqli_query($cont, $SQL);

	$total = mysqli_num_rows($S);//Cuenta el total de registros encontrados.

	echo $total;

	if($total >=1){
		while ($row = mysqli_fetch_array($S)) {//se recorren todos los datos
		
		$horario = explode(":", $row['hora']);//separar la fecha

		$hora = $horario[0];//separa el año.
		$min = $horario[1];//separa el mes.
		//$seg = $horario[2];//separa el dia.

		/*Se crea una caja de datos en los que se envian las diferentes fechas encontradas*/
		$ob[] = array(
				"hora" => $hora,
				"min" => $min
			);
	}
		echo json_encode($ob);//Se crea un objeto json para enviar todas las fechas	
	}else{
		echo "error";
	}


?>