<?php  
	/**
	* @file ingresar_cliente.php
	* @brief Archivo para guardar los datos de un nuevo cliente.
	* @author Armando Blanco
	* @version 1.0 
	*/

	include_once('conexion.php');//Se incluye conexion a base de datos

	/*Se reciven los datos a guardar*/  
	$nombre = $_GET['nombre'];
	$apellidoP = $_GET['apellidoP'];
	$apellidoM = $_GET['apellidoM'];
	$edad = $_GET['edad'];
	$sexo = $_GET['sexo'];
	$tel = $_GET['tel'];
	$calle = $_GET['calle'];
	$numInt = $_GET['numInt'];
	$numExt = $_GET['numExt'];
	$col = $_GET['col'];
	$cp = $_GET['cp'];
	$user = $_GET['clave'];
	$contra = $_GET['contra'];
	$alergia = $_GET['alergia'];
	$servicio = $_GET['servicio'];
	$presupuesto = $_GET['presupuesto'];

	$ruta ="http://localhost:8080/birt-viewer/run?__report=comprobante.rptdesign&__format=pdf";//Ruta para mostrar el comprobante de registro

	/**
	*@brief Se insertan los datos en sus respectivas tablas
	*/
	$sql_c1 = "INSERT INTO clientes VALUES('','$nombre','$apellidoP','$apellidoM', '$user','$contra','2')";
	$sql_c2 = "INSERT INTO informacion_cliente VALUES('','$user','$edad','$sexo','$tel','$calle','$numInt','$numExt','$col','$cp','$alergia')";
	$sql_c3 = "INSERT INTO presupuestos VALUES ('','$presupuesto','$user','$servicio')";
	$resul_c1 = mysqli_query($cont,$sql_c1) or die("Error al insertar datos del cliente");
	$resul_c2 = mysqli_query($cont,$sql_c2) or die("Error al insertar datos de domicilio");
	$resul_c3 = mysqli_query($cont,$sql_c3) or die("Error al insertar datos de presupuesto");

	/**
	*@ brief Si algo sale mal en la consulta se muestra un mensaje de error
	*/
	if(!$resul_c1 || !$resul_c2 || !$resul_c3){
		echo "Error en las consultas";
	}else{

		/**
		*@ brief Si todo sale bien, se muestra el mensaje correspondiente y el enlace para ver el comprobante
		*/
?>		
		<div id="estado_ok">
		<p>Se ha registrado con exito a <?php echo " ".$nombre." ".$apellidoP." ".$apellidoM; ?></p>
		<br>
		<p>Con clave: <b> <?php echo " ".$user." "; ?> </b> y contraseña: <b> <?php echo " ".$contra; ?> </b> </p>
		<br> 
		<a href="<?php echo $ruta.'&nombre='.$nombre.'&apellidoP='.$apellidoP.'&apellidoM='.$apellidoM.'&clave='.$user.'&contra='.$contra; ?>">Clic aquí para imprimir comprobante</a>
		 
<?php  	
	}
?>