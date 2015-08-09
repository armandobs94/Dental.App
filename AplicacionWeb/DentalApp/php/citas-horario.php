<?php  
	include_once('conexion.php');

	$horario = $_GET['horario'];
	$fecha = $_GET['fecha'];
?>
<label>Fecha:</label><input type="text" readonly id="c_fecha" value="<?php  echo $fecha; ?>">
<label>Hora:</label><input type="text" readonly id="c_hora" value="<?php  echo $horario; ?>">
<input type="text" maxlength="11" id="busca" onkeypress="buscadorCliente(this.value)" placeholder="Ingrese número de teléfono">


<div id="div_buscador">
	
</div>