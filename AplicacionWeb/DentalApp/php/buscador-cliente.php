<?php 
	include_once('conexion.php');
	/**
	* @file buscador-cliente.php
	* @author Armando Blanco
	* @version 1.0
	* @brief Archivo encargado de buscar un cliente en espcifico para asignarle su cita.
	*/

	/**
	* @brief Recivir variable
	*/
	$busca = $_GET['busca'];
	/**
	* @brief se ejecuta la consulta sql
	*/
	$SQL = "SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m, B.telefono FROM clientes A, informacion_cliente B WHERE B.telefono LIKE ('%$busca%') AND A.clave_cliente = B.clave_cliente AND A.tipoCliente = 2 LIMIT 0,1";
	$result = mysqli_query($cont, $SQL);
	/**
	* @brief Se muestran los datos del cliente
	*/
	while ($row = mysqli_fetch_array($result)){
	
		$clave = $row['clave_cliente'];
		$nombre = $row['nombre'];
		$apellidoP = $row['apellido_p'];
		$apellidoM = $row['apellido_m'];
		$tel = $row['telefono'];
	
?>
<input type="hidden" id="c_clave" readonly value="<?php echo $clave?>">
<label>Nombre</label>
<input type="text" id="d_nombre" readonly value="<?php echo $nombre?>">
<label>Apellido paterno</label>
<input type="text" id="d_nombre" readonly value="<?php echo $apellidoP?>">
<label>Apellido materno</label>
<input type="text" id="d_nombre" readonly value="<?php echo $apellidoM?>">
<label>Teléfono</label>
<input type="text" id="d_nombre" readonly value="<?php echo $tel?>">
<?php 
	} 
?>
<button onclick="citaPeriodo()">Guardar cita</button>