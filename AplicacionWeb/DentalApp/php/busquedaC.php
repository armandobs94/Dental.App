<table border="1">
	<tr>
		<th>NOMBRE COMPLETO</th>
		<th>TELEFONO</th>
	</tr>
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
	$query = mysqli_query($cont,"	SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m, B.telefono
									FROM clientes A
									INNER JOIN informacion_cliente B ON A.clave_cliente = B.clave_cliente
									WHERE A.clave_cliente LIKE '%$item%' OR A.nombre LIKE '%$item%' OR A.apellido_p LIKE '%$item%' OR A.apellido_m LIKE '%$item%'");

	if (mysqli_num_rows($query) == 0){
		echo "No se encontro un registro :c";
	}else{
		//echo "Se encontro un registro :D!";
	}
	
	while($row = mysqli_fetch_array($query)) {
		$clave_cliente = $row['clave_cliente'];
		$nombre = $row['nombre'];
		$apellido_p = $row['apellido_p'];
		$apellido_m = $row['apellido_m'];
		$telefono = $row['telefono'];

		$n_completo = $nombre. " ". $apellido_p. " ". $apellido_m;
?>
	<tr>
		<td>
			<a href="#" onclick="agregarCita('<?php echo $clave_cliente ?>','<?php echo $n_completo ?>')">
				<?php  echo $n_completo?>
			</a>
		</td>
		<td> <label><?php echo $telefono ?></label> </td>
	</tr>
	
<?php 
	}
?>
</table>