<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registrar nuevo cliente</title>
</head>
<body>
<div id="conte_datos">
<label>Datos del cliente.</label>
	<div id="div_clave">
		<?php include_once('../php/contra.php'); ?>
	</div>
	<div id="datos_uno">
		<label>Nombre completo</label>
		<input type="text" id="nombre_c" placeholder="Nombre(s)" onkeypress="return soloLetras(event)" onblur="mayus(this)">
		<input type="text" id="apellidoP_c" placeholder="Apellido paterno" onkeypress="return soloLetras(event)" onblur="mayus(this)">
		<input type="text" id="apellidoM_c" placeholder="Apellido materno" onkeypress="return soloLetras(event)" onblur="mayus(this)">
		<label>Edad</label>
		<input type="number" id="edad_c" placeholder="Edad" onkeypress="return soloNum(event)">
		<select id="sexo_c">
			<option value="0" selected>Seleccionar</option>
			<option value="M">Masculino</option>
			<option value="F">Femenino</option>
		</select>
		<input type="number" id="telefono_c" placeholder="Teléfono" onkeypress="return soloNum(event)">
		<textarea placeholder="Alergia(s)" id="alergia" onblur="mayus(this)"></textarea>
		<select id="servicio">
			<option value="0" selected>Seleccionar el tipo de servicio</option>
			<option value="1">Brackers</option>
			<option value="3">Otro</option>
		</select>
		<input type="number" id="presupuesto" placeholder="Presupuesto $" onkeypress="return soloNum(event)">
	</div>
<label>Detalles del domicilio.</label>	
	<div id="datos_dos">
		<p>Estos datos pueden ser llenados después por el cliente</p>
		<input type="text" id="calle" placeholder="Calle y/o Avenida" onblur="mayus(this)">
		<input type="text" id="num_int" placeholder="Número interior" onblur="mayus(this)">
		<input type="text" id="num_ext" placeholder="Número exterior" onblur="mayus(this)">
		<input type="text" id="colonia" placeholder="Colonia" onblur="mayus(this)">
		<input type="text" id="cp" maxlength="5" placeholder="C. P" onkeypress="return soloNum(event)">
	</div>
	<button onclick="newCliente()">Guardar datos</button>
</div>
</body>
</html>