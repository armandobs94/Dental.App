<?php 
	/**
	*@file busqueda.php
	*@brief Archivo del buscador por clientes.
	*@author L. Enrique Rodriguez.
	*@version 3.0 
	*/
	$item = $_GET['item'];
	echo $item;
	include("conexion.php");
	echo "<br>";
	$query = mysqli_query($cont,"	SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m, B.edad, C.fecha, C.observaciones, D.monto
									FROM clientes A
									INNER JOIN informacion_cliente B ON A.clave_cliente = B.clave_cliente
									INNER JOIN citas C ON A.clave_cliente = C.clave_cliente
									INNER JOIN pagos D ON A.clave_cliente = D.clave_cliente
									WHERE A.clave_cliente LIKE '%$item%' OR A.nombre LIKE '%$item%' OR A.apellido_p LIKE '%$item%' OR A.apellido_m LIKE '%$item%'");

	if (mysqli_num_rows($query) == 0){
		echo "No se encontro un registro :c";
	}else{
		echo "Se encontro un registro :D!";
	}


	echo"
		<table style='width:100%; border: 1px solid #000;' border='1' >
			<tr					
				style='			
						text-align:center;					
						padding: 30px;
						font-size: 12px;
						background-color: #A4A4A4; 
						color: #FFFFFF;
						border-right-width: 1px;
						border-bottom-width: 1px;
						border-right-style: solid;
						text-transform: uppercase;
			'>
				<td >Clave</td>
				<td>Nombre</td>
				<td>Apellido P</td>
				<td>Apellido M</td>
				<td>Edad</td>
				<td>Presupuesto</td>
				<td>Observaciones</td>
				<td>Fecha</td>
			</tr>
	";
	
	while($row = mysqli_fetch_array($query)) {
		$fecha = $row['fecha'];
			if(isset($fecha)){
				list($año,$mes,$dia) = explode('-',date($fecha) );
				
				if ($mes=="01") $mes="Enero";
				if ($mes=="02") $mes="Febrero";
				if ($mes=="03") $mes="Marzo";
				if ($mes=="04") $mes="Abril";
				if ($mes=="05") $mes="Mayo";
				if ($mes=="06") $mes="Junio";
				if ($mes=="07") $mes="Julio";
				if ($mes=="08") $mes="Agosto";
				if ($mes=="09") $mes="Septiembre";
				if ($mes=="10") $mes="Octubre";
				if ($mes=="11") $mes="Noviembre";
				if ($mes=="12") $mes="Diciembre";
				
				$fecha = $dia."-".$mes."-".$año; 
			}
		echo"
			<tr>
				<td><a href='PDF' target='_blank' style='color:black;'>".$row['clave_cliente']."</a></td>
				<td>".$row['nombre']."</td> 
				<td>".$row['apellido_p']."</td>
				<td>".$row['apellido_m']."</td>
				<td>".$row['edad']."</td>
				<td>$ ".$row['monto']."</td>
				<td>".$row['observaciones']."</td>
				<td>".$fecha."</td>
			</tr>
		";
		}
	echo "</table>";
?>
