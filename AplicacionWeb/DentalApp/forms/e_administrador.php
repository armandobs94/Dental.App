<?php
// Formulario
include("../php/conexion.php");
$query = mysqli_query($cont,"SELECT * FROM administrador");
echo "<table border='1'>
<trc>
	<td>ID_Administrador</td>
	<td>Usuario</td>
	<td>Contraseña</td>
</tr>

";
while ($row = mysqli_fetch_array($query)) {
	$id = $row['id_administrador'];
	$user = $row['user'];
	$password = $row['password'];

?>
	<tr>
		<td><a href="#" onclick = "env_valor(<?php echo $id ?>)" style = "color:black;"><?php echo $id ?></a></td>
		<td> <?php echo $user ?> </td>
		<td> <? echo $password ?> </td>
	</tr>

<?php
}
echo "</table>"
?>