<?php 
	

	verClave();

	function verClave(){
		include_once('conexion.php');
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$clave = "";
		$passw = "";

		for($i=0;$i<5;$i++) {
			$clave .= substr($str,rand(0,62),1);
			$passw = $clave;
		}

?>

<?php 
	// echo $clave;
	// echo $passw;
	$sql = "SELECT * FROM clientes WHERE clave_cliente = '$clave' AND llave_cliente = '$passw' AND tipoCliente =  2";
		$result = mysqli_query($cont, $sql);
		$to = mysqli_num_rows($result);
		//echo $to."\n";	

		if($to>= 1)	{
			verClave();
		}else{
?>
<label>Usuario:</label><input type="text" id="clave" readonly value="<?php echo $clave?>" >
<label>Contraseña:</label><input type="text" id="password" readonly value="<?php echo $passw?>" >
<?php			
		}
	}//termina funcion

	
?>
