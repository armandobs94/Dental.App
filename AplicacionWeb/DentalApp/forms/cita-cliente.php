<?php

	$nombre = $_GET['nombre'];
	$clave = $_GET['clave'];

?>
	<label> Nombre del paciente: </label>
	<input type="text" readonly value="<?php echo $nombre ?>">
	
	<br>
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
