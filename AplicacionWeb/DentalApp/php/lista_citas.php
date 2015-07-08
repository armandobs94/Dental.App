<?php  
	include_once('conexion.php');
	$f = $_GET['fecha'];
	date_default_timezone_set("America/Mexico_City");//se define la zona horaria
	$anio = date('Y');//obtenemos el año
	$mes = date('m');//se obtiene el mes
	$dia = date('d');//se obtiene el dia
	$d = $dia;	
		if(empty($f)){
			$fecha=$anio."-".$mes."-".$d;//se construye la fecha completa
		}else{
			$fecha = $f;
		}
		
?>
<div id="dir">
	<label>Estas en: <b>Inicio/</b><i>Cita ocasional</i></label>
</div>
<table border="1">
	<tr>
		<th>Horario</th>
		<th>Datos del cliente</th>
		<th>Asistencia (Si/No)</th>
	</tr>
	<?php  
		//Verificar si hay registros para mostrar.
		$sql = "SELECT * from citas WHERE fecha = '$fecha' ORDER BY fecha" ;
		$exe = mysqli_query($cont,$sql);//ejecuta la consulta
		$cuenta = mysqli_num_rows($exe);//su cuentan los registros encontrados

		if($cuenta>=1){
			while($row = mysqli_fetch_array($exe)){
				$s_hor = explode(":", $row['hora']);
				$h = $s_hor[0];//hora
				$m = $s_hor[1];//minutos
				
				//cita 1
				if($h=='09' && $m=='00'){
?>
				<tr>
					<td>9:00 - 9:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php  					
					
				}else{
?>
					
<?php 					
				}//termina cita 1

				//cita 2
				if($h=='09' && $m=='30'){
?>
				<tr>
					<td>9:30 - 10:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php
					
				}else{
					
				}//termina cita 2

				//cita 3
				if($h=='10' && $m=='00'){
?>
				<tr>
					<td>10:00 - 10:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>				
<?php 					
					
				}else{
					
				}//termina cita 3
				
				//cita 4
				if($h=='10' && $m=='30'){
?>
				<tr>
					<td>10:30 - 11:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 									
				}else{
					
				}//termina cita 3	
				//cita 4
				if($h=='11' && $m=='00'){
?>
				<tr>
					<td>11:00 - 11:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{
					
				}//termina cita 4	

				//cita 5
				if($h=='11' && $m=='30'){
?>
				<tr>
					<td><label>11:30 - 12:00</label></td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php				
				}else{
					
				}//termina cita 5
				
				//cita 6
				if($h=='12' && $m=='00'){
?>
				<tr>
					<td>12:00 - 12:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{
					
				}//termina cita 6						
				
				//cita 7
				if($h=='12' && $m=='30'){
?>
				<tr>
					<td>12:30 - 13:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{
					
				}//termina cita 7

				//cita 8
				if($h=='13' && $m=='00'){
?>
				<tr>
					<td>13:00 - 13:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{
					
				}//termina cita 8
				
				//cita 9
				if($h=='13' && $m=='30'){
?>
				<tr>
					<td>13:30 - 14:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 
				}else{

				}//termina cita 9

				//cita 10
				if($h=='14' && $m=='00') {
?>
				<tr>
					<td>14:00 - 14:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 10

				//cita 11
				if($h=='14' && $m=='30') {
?>
				<tr>
					<td>14:00 - 14:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 11

				//cita 12
				if($h=='15' && $m=='00') {
?>
				<tr>
					<td>15:00 - 15:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php
				}else{

				}//temina cita 12

				//cita 11
				if($h=='15' && $m=='30') {
?>
				<tr>
					<td>15:30 - 16:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 11
				
				//cita 12
				if($h=='16' && $m=='00') {
?>
				<tr>
					<td>16:00 - 16:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 12

				//cita 13
				if($h=='16' && $m=='30') {
?>
				<tr>
					<td>16:30 - 17:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 13

				//cita 14
				if($h=='17' && $m=='00') {
?>
				<tr>
					<td>17:00 - 17:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 14

				//cita 15
				if($h=='17' && $m=='30') {
?>
				<tr>
					<td>17:30 - 18:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php					
				}else{

				}//temina cita 15

				//cita 16
				if($h=='18' && $m=='00') {
?>
				<tr>
					<td>18:00 - 18:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 16

				//cita 17
				if($h=='18' && $m=='30') {
?>
				<tr>
					<td>18:30 - 19:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 17
				
				//cita 18
				if($h=='19' && $m=='00') {
?>
				<tr>
					<td>19:00 - 19:30</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{

				}//temina cita 18

				//cita 19
				if($h=='19' && $m=='30') {
?>
				<tr>
					<td>19:30 - 20:00</td>
					<td> <?php echo $row['clienteID'] ?> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php 					
				}else{
?>
				<tr>
					<td>19:30 - 20:00</td>
					<td> <a href="#">Agregar cita</a> </td>
					<td> <select><option>-</option><option value="1">Si</option><option value="0">No</option></select> </td>
				</tr>
<?php
				}//temina cita 19	
			}
		}else{
			echo "No se encontraron registros.";
		}

	?>
</table>


