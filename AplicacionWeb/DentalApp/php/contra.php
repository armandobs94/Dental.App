<?php 
/**
	* @file contra.php
	* @brief Archivo para generar la clave y contraseña de un cliente.
	* @author Armando Blanco
	* @version 1.0 
	*/

	verClave();//se llama al metodo para crear clave y contraseña

	/**
	* @brief Metodo para generar la clave y contraseña siempre y cuando no este almacenada en la base de datos
	*/
	function verClave(){
		include_once('conexion.php');//Se incluye archivo de conexion a la base de datos
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";//caracteres admitidos para generar la clave
		$clave = "";//variable clave
		$passw = "";//variable contraseña

		/*ciclo para crear el usuario y contraseña de manera aleatoria*/
		for($i=0;$i<5;$i++) {
			$clave .= substr($str,rand(0,62),1);
			$passw = $clave;
		}

?>

<?php 
	/**
	* @brief Se verifica que no exista la misma clave en la base de datos
	*/
	$sql = "SELECT * FROM clientes WHERE clave_cliente = '$clave' AND llave_cliente = '$passw' AND tipoCliente =  2";
	$result = mysqli_query($cont, $sql);
	$to = mysqli_num_rows($result);
			
	/**
	* @brief Si la clave existe se llama de nuevo a la funcion
	*/
		if($to>= 1)	{
			verClave();
		}else{
	/**
	* @brief Si no exite la clave en la base de datos se muestra la clave correspondiente
	*/
?>
<label>Usuario:</label><input type="text" id="clave" readonly value="<?php echo $clave?>" >
<label>Contraseña:</label><input type="text" id="password" readonly value="<?php echo $passw?>" >
<?php			
		}
	}//termina funcion

	
?>
