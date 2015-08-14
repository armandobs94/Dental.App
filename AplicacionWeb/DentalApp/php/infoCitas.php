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
	$fecha = $_GET['fecha'];//se obtiene la fecha
	$horario = $_GET['hora'];//se obtiene la hora
	
	/**
	* @brief Se cargan los datos de cliente
	*/
	$SQL = "SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m, B.telefono, C.asistencia, C.fecha, C.horario FROM clientes A, informacion_cliente B, citas C WHERE A.clave_cliente = '$user' AND B.clave_cliente = '$user' AND C.fecha='$fecha' AND C.horario = '$horario' AND C.clave_cliente='$user' ORDER BY horario DESC";
	$result = mysqli_query($cont, $SQL);
	while ($row = mysqli_fetch_array($result)){

		/**
		* @brief Se muestran los datos del cliente
		*/
		$clave = $row['clave_cliente'];
		$nombre = $row['nombre'];
		$apellidoP = $row['apellido_p'];
		$apellidoM = $row['apellido_m'];
		$as = $row['asistencia'];

		if($as=="0"){
?>
	<a href="#" onclick="mostrarInfo('<?php echo $clave ?>')"> 
		<?php echo $nombre. " ". $apellidoP. " ". $apellidoM ?>
	</a>
<?php 
		}else{
			echo $nombre. " ". $apellidoP. " ". $apellidoM;
		}		
	}
?>
</table>