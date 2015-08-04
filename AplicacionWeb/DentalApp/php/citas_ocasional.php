<?php  
	/**
	* @file citas_ocasional.php
	* @brief Archivo para guardar datos de una cita ocasional.
	* @author Armando Blanco
	* @version 2.0 
	*/


	include_once('conexion.php');//Se incluye el archivo de conexion a la base de datos

	date_default_timezone_set("America/Mexico_City");//se define la zona horaria
	$anio = date('Y');//obtenemos el año
	$mes = date('m');//se obtiene el mes
	$dia = date('d');//se obtiene el dia
	$d = $dia;
	$fecha=$anio."-".$mes."-".$d;//se construye la fecha completa
	/*
	* Recivimos los elementos a guardar
	*/
	$nombre = $_GET['nombre'];
	$apellidoP = $_GET['apellidoP'];
	$apellidoM = $_GET['apellidoM'];
	$edad = $_GET['edad'];
	$obs = $_GET['obs'];
	$sexo = $_GET['sexo'];
	$pago = $_GET['pago'];
	$tel = $_GET['tel'];
	$hora = $_GET['hora'];
	$n = 0;//almacena el id
	
	$clave = "SELECT id_cliente FROM clientes ORDER BY id_cliente DESC LIMIT 0,1";
	$result = mysqli_query($cont,$clave);

	while($row = mysqli_fetch_array($result)){
		$n = $row['id_cliente'];
	}
	$n = $n +1;

	/**
	* @brief Se preparan las consultas correspondientes
	*/
	$sql = "INSERT INTO clientes(nombre, apellido_p, apellido_m, clave_cliente, tipoCliente) VALUES ('$nombre','$apellidoP','$apellidoM', '$n',1)";
	$sql_info = "INSERT INTO informacion_cliente(clave_cliente,edad,sexo, telefono) VALUES ('$n','$edad','$sexo','$tel')";
	$sql_cita = "INSERT INTO citas(clave_cliente, fecha, horario, observaciones, tipoCita) VALUES ('$n','$fecha','$hora','$obs',1)";
	$sql_pago = "INSERT INTO pagos (clave_cliente,monto,estado_pagos)VALUES('$n','$pago','Pago en efectivo')";

	/**
	* @brief Se realizan las consultas correspondientes
	*/
	$c1 = mysqli_query($cont, $sql) or die("error en la consulta datos");
	$c2 = mysqli_query($cont, $sql_info) or die("error consulta informacion");
	$c3 = mysqli_query($cont, $sql_cita) or die("error en la consulta citas");
	$c4 = mysqli_query($cont, $sql_pago) or die("error consulta pago");

	/**
	* @brief Si todo sale bien se muestra el mensaje correspondiente 
	*/
?>
	<div id="estado_ok">
		<label>Registro exitoso</label>
		<br>
		<a href="bienvenido.php">Ir a listado de citas</a>
		<br>
		<a href="#" onclick="menuChange('citas_ocasionales.php')">Ingresar otra cita</a>
	</div>
