<?php 
	include_once('conexion.php');

	$user = $_GET['user'];

	$sql = "SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m,B.edad, B.sexo,B.telefono,B.calle_avenida,B.num_interior, B.num_exteriror, B.colonia, B.cp FROM clientes A, informacion_cliente B WHERE A.clave_cliente = '$user' AND B.clave_cliente = '$user'";
	$result = mysqli_query($cont,$sql);
	$total = mysqli_num_rows($result);
	if($total>=1){
		while ($row=mysqli_fetch_array($result)) {
			echo $row['clave_cliente'];
			echo $row['nombre'];
			echo $row['apellido_p'];
			echo $row['apellido_m'];
			echo $row['edad'];
			echo $row['sexo'];
			echo $row['telefono'];
			echo $row['calle_avenida'];
			echo $row['num_interior'];
			echo $row['num_exteriror'];
			echo $row['colonia'];
			echo $row['cp'];
			
		}
	}else{
		echo "Error";
	}

?>