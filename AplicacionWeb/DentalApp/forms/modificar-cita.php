<h1>Modificar cita.</h1>
	<h2>Datos de cita actual</h2>
<?php  
	include_once('../php/conexion.php');
	
	$fecha = $_GET['fecha'];
	$horario = $_GET['hora'];
	$clave = $_GET['clave'];
	
	$sql = "SELECT A.nombre, A.apellido_p, A.apellido_m, B.fecha, B.horario FROM clientes A, citas B WHERE A.clave_cliente = '$clave' AND B.clave_cliente = '$clave' AND B.fecha = '$fecha' AND B.horario = '$horario'";
	$result = mysqli_query($cont,$sql);

	if (!$result) {
		echo "Error del servidor, intente más tarde";
	}else{
		while ($row = mysqli_fetch_array($result)) {
			$nombre = $row['nombre'];
			$apellidoP = $row['apellido_p'];
			$apellidoM = $row['apellido_m'];

			$nFecha = $row['fecha'];
			$hora = $row['horario'];
?>
			<label><b>Nombre completo.</b></label>
			<input type="text" readonly id="nom_t" value="<?php echo $nombre.' '.$apellidoP.' '.$apellidoM ?>">
			<br>
			<label><b>Fecha establecida:</b></label>
			<br>
			<input type="text" id="fe_t" readonly value="<?php echo $nFecha; ?>" >
			<label><b>Horario establecido:</b></label>
			<input type="text" id="ho_t" readonly value="<?php echo $hora; ?>" >
<?php			
		}
	}
?>
<h2>Seleccionar nuevo horario</h2>

<label>Fecha:</label>
<input type="date" id="fecha_t">
<br>
<label>Horario</label>
<br>
<select id="hora_t">
	<option value="N" selected>Hora</option>
	<option value="09">09</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="N">--</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
</select>
<select id="min_t">
	<option value="N" selected>Minutos</option>
	<option value="00">00</option>
	<option value="30">30</option>
</select>

<br>

<button onclick="modificarCita('<?php echo $clave ?>')">Guardar cita</button>