<table>
<tr>
	<th>Clave Cliente</th>
	<th>Nombre completo</th>
</tr>
<?php
	include_once('conexion.php');
	/**
	*@file busqueda.php
	*@brief Archivo del buscador por clientes.
	*@author L. Enrique Rodriguez.
	*@version 3.0 
	*/
	$item = $_GET['item'];
	$sql = "SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m, B.edad, C.fecha, C.observaciones, D.monto
				FROM clientes A
				INNER JOIN informacion_cliente B ON A.clave_cliente = B.clave_cliente
				INNER JOIN citas C ON A.clave_cliente = C.clave_cliente
				INNER JOIN pagos D ON A.clave_cliente = D.clave_cliente
				WHERE A.clave_cliente LIKE '%$item%' OR A.nombre LIKE '%$item%' OR A.apellido_p LIKE '%$item%' OR A.apellido_m LIKE '%$item%' AND A.tipoCliente='2' GROUP BY A.clave_cliente";

	$res = mysqli_query($cont,$sql);
	$total = mysqli_num_rows($res);
	if ($total==0) {
?>
		<tr>
			<td> <label> - - </label> </td>
			<td> <label>No se encontro coincidencias</label> </td>
		</tr>
<?php 
	}else{
		while ($row=mysqli_fetch_array($res)) {
			$clave = $row['clave_cliente'];
			$nombre = $row['nombre'];
			$apeP = $row['apellido_p'];
			$apeM = $row['apellido_m'];

			$n_completo = $nombre." ".$apeP." ".$apeM;

		
?>
			<tr>
				<td><?php echo $clave ?></td>
				<td> <a href="#"> <?php echo $n_completo ?> </a></td>
			</tr>
<?php 
		}
	}
?>
</table>