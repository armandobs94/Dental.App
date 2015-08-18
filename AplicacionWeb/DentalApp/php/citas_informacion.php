<div id="datos_paciente">
<?php  
/**
* @brief Archivo encargado de mostrar datos referente a citas que ya tienen asignado un cliente
* @author Armando Blanco
* @version 1.0
*/
	include_once('conexion.php');
	$clave = $_GET['clave'];
	$fecha = $_GET['fecha'];
	$hora = $_GET['hora'];
	// echo $clave." ".$fecha." ".$hora;

	$sql ="SELECT A.clave_cliente, A.nombre, A.apellido_p, A.apellido_m,B.telefono, B.edad,B.sexo,B.alergia,C.observaciones,C.fecha,C.horario,C.asistencia, D.total_presupuesto FROM clientes A, informacion_cliente B, citas C, presupuestos D WHERE B.clave_cliente = '$clave' AND A.clave_cliente = '$clave' AND A.tipoCliente = 2 and c.clave_cliente= '$clave' and D.clave_cliente = '$clave' order by fecha desc limit 0,1";
	$result=mysqli_query($cont, $sql);
	while($row = mysqli_fetch_array($result)){

	$nombre = $row['nombre'];
	$apellidoP = $row['apellido_p'];
	$apellidoM = $row['apellido_m'];
	$telefono = $row['telefono'];
	$edad = $row['edad'];
	$sexo = $row['sexo'];
	$alergia = $row['alergia'];
	$f_fecha = $row['fecha'];
	$f_hora = $row['horario'];
	$observaciones = $row['observaciones'];
	//asistenacia
	$pago_t = $row['total_presupuesto'];

?>

	<h1>Datos del paciente.</h1>
	<label><b>Clave:</b></label>
	<label><?php echo $clave?></label>
	<label><b>Nombre completo:</b></label>
	<label><?php echo $nombre. " ".$apellidoP." ".$apellidoM ?></label>
	<br>
	<label>Teléfono:</label>
	<label><?php echo $telefono ?></label>
	<label>Edad:</label>
	<label><?php echo $edad ?></label>
	<label>Sexo:</label>
	<label><?php echo $sexo ?></label>
	<br>
	<label>Alergia(s):</label><br>
	<textarea id="alertia_s" readonly> <?php echo $alergia ?> </textarea>

	<hr>

	<h1>Información de la cita.</h1>

	<label>Fecha:</label><label><?php echo $f_fecha ?></label>
	<label>Horario:</label><label><?php echo $f_hora ?></label>
	<br>
	<label>Monto restante:</label>
	<input type="text" id="pago_to" readonly value="<?php echo $pago_t ?>">
	<br>
	<label>Observaciones de la cita</label>
	<br>
	<textarea id="obs_f" placeholder="Ingrese aquí una descripción"></textarea>
	<br>
	<label>Asistencia.</label>
	<select id="asisT" onchange="activa()">
		<option value="0" selected>Seleccionar</option>
		<option value="SI">Si</option>
		<option value="NO">No</option>
	</select>
	<br>
	<label>Pago.</label>
	<input type="text" id="pago_s" placeholder="Ingresar pago" onkeypress="return soloNum(event)">

<?php  
	}//termina while
?>	
</div>
<button onclick="modDatos('<?php echo $clave; ?>','<?php echo $f_fecha ?>','<?php echo $f_hora ?>')"> Guardar</button>

