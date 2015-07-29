<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<div id="dir">
	<label>Estas en: <b>Inicio/</b><i>Cita ocasional</i></label>
</div>	
<br>	
	<div id="div_ocasionales">
		<p>Nombre</p>
		<br>
		<input type="text" name="nombre" id="nombre" placeholder="Nombre(s)" onkeypress="return soloLetras(event)" onblur="mayus(this)">
		<input type="text" name="apellido_p" id="apellido_p" placeholder="Apellido paterno" onkeypress="return soloLetras(event)" onblur="mayus(this)">
		<input type="text" name="apellido_m" id="apellido_m" placeholder="Apellido materno" onkeypress="return soloLetras(event)" onblur="mayus(this)">
		<br>
		<p>Edad:</p><BR>
		<input type="number" id="edad" name="edad" placeholder="Edad" onkeypress="return soloNum(event)">
		<br>
		<p>Sexo</p>
			<select id="sexo" name="sexo">
				<option selected value="0">--</option>
				<option value="M">Masculino</option>
				<option value="F">Femenino</option>
			</select>
		<BR>
		<p>Telefono Casa/Cel:</p>
		<BR>
		<input type="number" id="telefono" name="telefono" placeholder="Telefono" onkeypress="return soloNum(event)">
		<br>
		<p>Observaciones:</p>
		<br>
		<textarea id="observaciones" name="observaciones" rows="6" cols="50" maxlength="1200" placeholder="Ingrese sus observaciones"></textarea>
		<br>
		<p>Pago:</p><BR>
		<input type="number" id="presupuesto" name="presupuesto" placeholder="Prosupuesto estimado" onkeypress="return soloNum(event)">
		<br>
	</div>
	<button onclick="insData()">Guardar</button>
</body>
</html>