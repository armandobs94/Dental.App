<?php  
	include_once('conexion.php');

	//Se reciven los datos  
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

	$ruta ="http://localhost:8080/birt-viewer/run?__report=comprobante.rptdesign&__format=pdf";

	$sql_c1 = "INSERT INTO clientes VALUES('','$nombre','$apellidoP','$apellidoM', '$user','$contra','2')";
	$sql_c2 = "INSERT INTO informacion_cliente VALUES('','$user','$edad','$sexo','$tel','$calle','$numInt','$numExt','$col','$cp')";
	$resul_c1 = mysqli_query($cont,$sql_c1) or die("Error al insertar datos del cliente");
	$resul_c2 = mysqli_query($cont,$sql_c2) or die("Error al insertar datos de domicilio");

	if(!$resul_c1 || !$resul_c2){
		echo "Error C1";
	}else{
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