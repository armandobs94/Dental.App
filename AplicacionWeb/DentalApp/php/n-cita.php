<?php  
	include_once('conexion.php');

	$clave = $_GET['clave'];
	$fecha = $_GET['fecha'];
	$hora = $_GET['hora'];

	$sql = "SELECT * FROM citas WHERE fecha='$fecha' AND horario='$hora' ";
	$que = mysqli_query($cont, $sql);
	$t = mysqli_num_rows($que);

	if ($t >= 1) {
	?>
		<div id="div_error">
			<label>Este horario ya se encuentra ocupado, seleccionar uno diferente.</label>
		</div>
		<div id="datos_citas">
			<h2> Seleccionar horario</h2>

			<label> Fecha </label>
			<input type="date" id="fecha_i">

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

			<button onclick="newCita('<?php  echo $clave ?>')">Guardar cita</button>
		</div>
	<?php
	}else{
		$query = "INSERT INTO citas (clave_cliente,fecha, horario, asistencia, tipoCita) VALUES('$clave','$fecha','$hora','0','2')";
		$result = mysqli_query($cont, $query);
		if (!$result) {
			echo "Error, no se pudo guardar los datos. Intente más tarde.";
		}else{
		?>
			<div id="div_ok">
				<label>Datos guardados.</label>
				<a href="">Regresar al listado de citas</a>
			</div>
		<?php 
		}
	}
?>