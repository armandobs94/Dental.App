<table>
<?php  
	include_once('conexion.php');
	$user = $_GET['user'];
	//echo $user;

	$SQL = "SELECT * FROM clientes WHERE clave_cliente = '$user' LIMIT 0,1";
	$result = mysqli_query($cont, $SQL);
	while ($row = mysqli_fetch_array($result)){
?>
	<tr>
	<input type="hidden" id="id_user" value="<?php echo $row['id_cliente']; ?>">
		<a href=""> 
		<?php echo $row['nombre']; ?>
		<?php echo $row['apellido_p']; ?>
		<?php echo $row['apellido_m']; ?>
	</a>
<?php 		
	}
?>
</table>