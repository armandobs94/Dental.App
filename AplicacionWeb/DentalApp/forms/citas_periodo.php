<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<div id="dir">
	<label>Estas en: <b>Inicio/</b><i>Citas por periodo</i></label>
</div>
	
	<div>
		
		<p>Observaciones:</p>
		<textarea id="observaciones1" rows="6" cols="50" maxlength="1200" placeholder="Ingrese sus observaciones"></textarea>

		<p>Cita:</p>
		<input type="date" id="fecha1" value="Fecha">
		<select id="hora1">
			<option value="0" selected>Horario</option>
			<option value="09:00">09:00 a 9:30</option>
			<option value="09:30">09:30 a 10:00</option>
			<option value="10:00">10:00 a 10:30</option>
			<option value="10:30">10:30 a 11:00</option>
			<option value="11:00">11:00 a 11:30</option>
			<option value="11:30">11:30 a 12:00</option>
			<option value="12:00">12:00 a 12:30</option>
			<option value="12:30">12:30 a 13:00</option>
			<option value="13:00">13:00 a 13:30</option>
			<option value="13:30">13:30 a 14:00</option>
			<option value="00">Descanso</option>
			<option value="16:00">16:00 a 16:30</option>
			<option value="16:30">16:30 a 17:00</option>
			<option value="17:00">17:00 a 17:30</option>
			<option value="17:30">17:30 a 18:00</option>
			<option value="18:00">18:00 a 18:30</option>
			<option value="18:30">18:30 a 19:00</option>
			<option value="19:00">19:00 a 19:30</option>
			<option value="19:30">19:30 a 20:00</option>
		</select>

		<p>Prosupuesto estimado:</p>
		<input type="number" id="presupuesto1" name="presupuesto" placeholder="Prosupuesto estimado" onkeypress="return soloNum(event)">
		<br>
		
	</div>
</div>
</body>
</html>