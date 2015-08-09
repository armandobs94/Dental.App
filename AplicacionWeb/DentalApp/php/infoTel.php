<table>
<?php 
	/**
	* @file infoTel.php
	* @brief Archivo para mostrar el telefono del cliente.
	* @author Armando Blanco
	* @version 1.0 
	*/

	include_once('conexion.php');//se incluye la conexion a la base de datos
	$user = $_GET['user'];//se obtiene la clave del cliente
	
	/**
	* @brief Se cargan los datos de cliente
	*/
	$SQL = "SELECT B.telefono FROM clientes A, informacion_cliente B WHERE A.clave_cliente = '$user' AND B.clave_cliente = '$user' LIMIT 0,1";
	$result = mysqli_query($cont, $SQL);
	while ($row = mysqli_fetch_array($result)){

		/**
		* @brief Se muestran los datos del cliente
		*/
		$telefono = $row['telefono'];
?>
	<a href="#"> 
		<?php echo $telefono?>
	</a>
<?php 		
	}
?>
</table>