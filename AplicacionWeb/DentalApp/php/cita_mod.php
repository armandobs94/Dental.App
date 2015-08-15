<?php  
	include_once('conexion.php');

	$clave = $_GET['clave'];
	$nombre = $_GET['nombre'];
	$fecha = $_GET['fecha'];
	$nFecha = $_GET['f2'];
	$hora = $_GET['hora'];
	$nHora = $_GET['h2'];

	$sql = "SELECT * FROM citas WHERE fecha='$fecha' AND horario ='$hora' AND asistencia = '0'";
	$q = mysqli_query($cont, $sql);
	$tt = mysqli_num_rows($q);

	if ($tt) {
	?>
	<div id="div_error">
		<label>La fecha y horario indicados ya estan asignados, seleccionar otro horario.</label>
	</div>
	<div id="form_mod">
		<label><b>Nombre completo.</b></label>
			<input type="text" readonly id="nom_t" value="<?php echo $nombre?>">
			<br>
			<label><b>Fecha establecida:</b></label>
			<br>
			<input type="text" id="fe_t" readonly value="<?php echo $nFecha; ?>" >
			<label><b>Horario establecido:</b></label>
			<input type="text" id="ho_t" readonly value="<?php echo $hora; ?>" >
		
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
	</div>		
	<?php	
	}else{
		$rs = "UPDATE citas SET fecha = '$fecha', horario='$hora' WHERE clave_cliente='$clave' AND horario='$nHora' AND fecha = '$nFecha'";
		$result = mysqli_query($cont, $rs);
		if(!$result){
			echo "Error, intente más tarde";
		}else{
		?>
			<label>Se modifico el horario y fecha de la cita.</label>
			<a href="">Regresar a listado</a>
		<?php 	
		}
	}

?>