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
	$SQL = "SELECT * FROM clientes WHERE clave_cliente = '$user' LIMIT 0,1";
	$result = mysqli_query($cont, $SQL);
	while ($row = mysqli_fetch_array($result)){

		/**
		* @brief Se muestran los datos del cliente
		*/
?>
	<tr>
	<input type="hidden" id="id_user" value="<?php echo $row['id_cliente']; ?>">
		<a href=""> 
		<?php echo $row['nombre']; ?>
		<?php echo $row['apellido_p']; ?>
		<?php echo $row['apellido_m']; ?>
	</a>
<?php 		
	}
?>
</table>