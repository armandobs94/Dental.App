<table>
<?php 
	/**
	* @file infoCitas.php
	* @brief Archivo para mostrar los datos del cliente segun el horario de la cita.
	* @author Armando Blanco
	* @version 1.0 
	*/

	include_once('conexion.php');//se incluye la conexion a la base de datos
	$user = $_GET['user'];//se obtiene la clave del cliente
	
	/**
	* @brief Se cargan los datos de cliente
	*/
	$SQL = "SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m, B.telefono FROM clientes A, informacion_cliente B WHERE A.clave_cliente = '$user' AND B.clave_cliente = '$user' LIMIT 0,1";
	$result = mysqli_query($cont, $SQL);
	while ($row = mysqli_fetch_array($result)){

		/**
		* @brief Se muestran los datos del cliente
		*/
		$clave = $row['clave_cliente'];
		$nombre = $row['nombre'];
		$apellidoP = $row['apellido_p'];
		$apellidoM = $row['apellido_m'];
?>
	<a href="#" onclick="mostrarInfo('<?php echo $clave ?>')"> 
		<?php echo $nombre. " ". $apellidoP. " ". $apellidoM ?>
	</a>
<?php 		
	}
?>
</table>