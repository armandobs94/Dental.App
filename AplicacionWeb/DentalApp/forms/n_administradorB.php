<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="dir">
	<label>Estas en: <b>Inicio/</b><i>Nuevo administrador basico</i></label>
	<div>
		<p>Ingrese usuario:</p>
		<input type="text" name="user" id="user" placeholder="Ingrese usuraio" maxlength="15">
		<p>Ingrese contraseña:</p>
		<input type="password" id="ctr1" name="password1" placeholder="Ingrese contraseña" maxlength="15"><br>
		<p>Vuelva a ingresar la contraseña</p>
		<input type="password" id ="ctr2" name="password2" placeholder="Repita contraseña" maxlength="15"><br><br>
		<button onclick="v_contraseña('AB')">Enviar</button>
	</div>

</div>
</body>
</html>