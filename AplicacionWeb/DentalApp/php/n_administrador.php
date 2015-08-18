<?php
	include_once('conexion.php');
	$tipo = $_GET['tipo'];
	if ($tipo == "AS") {
		$user = $_GET['user'];
		$ctr = $_GET['ctr'];
		$ver = "SELECT * FROM administrador WHERE user = '$user' AND tipo ='$tipo'";
		$r1 = mysqli_query($cont, $ver) or die("Error al consutar datos");
		$re1 = mysqli_num_rows($r1);

		if($re1 >= 1){
	?>
			<div id="div_error">
				<label>El nombre de usuario: <?php echo " ".$user." " ?>ya existe. Ingresar uno difetente.</label>
			</div>
			<div id="dir">
				<label>Estas en: <b>Inicio/</b><i>Nuevo administrador del sistema</i></label>
			<div>
				<p>Ingrese usuario:</p>
				<input type="text" name="user" id="user" placeholder="Ingrese usuraio" maxlength="15">
				<p>Ingrese contraseña:</p>
				<input type="password" id="ctr1" name="password1" placeholder="Ingrese contraseña" maxlength="15"><br>
				<p>Vuelva a ingresar la contraseña</p>
				<input type="password" id ="ctr2" name="password2" placeholder="Repita contraseña" maxlength="15"><br><br>
				<button onclick="v_contraseña('AS')">Enviar</button>
			</div>			
	<?php 		
		}else if($re1 == 0){
			$sql = "INSERT INTO administrador VALUES('','$user','$ctr','$tipo')";
			$result = mysqli_query($cont,$sql);
			if(!$result){
				echo "No se pudo terminar la consulta. Por favor intente más tarde.";
			}else{
		?>
			<div id="div_ok">
				<label>Se ha registrado con éxito al usuario: <?php echo " ".$user;  ?></label>
			</div>
		<?php 		
			}
		}
	}else if($tipo=="AB"){
		
		$user = $_GET['user'];
		$ctr = $_GET['ctr'];

		$s1 = "SELECT * FROM administrador WHERE user = '$user' AND tipo ='$tipo'";
		$s2 = mysqli_query($cont, $s1) or die("Error al consutar datos 2");
		$tt = mysqli_num_rows($s2);
		
		if($tt>=1){
		?>
			<div id="div_error">
				<label>El nombre de usuario: <?php echo " ".$user." " ?>ya existe. Ingresar uno difetente.</label>
			</div>
			<div id="dir">
				<label>Estas en: <b>Inicio/</b><i>Nuevo administrador basico</i></label>
			</div>
			<div>
				<p>Ingrese usuario:</p>
				<input type="text" name="user" id="user" placeholder="Ingrese usuraio" maxlength="15">
				<p>Ingrese contraseña:</p>
				<input type="password" id="ctr1" name="password1" placeholder="Ingrese contraseña" maxlength="15"><br>
				<p>Vuelva a ingresar la contraseña</p>
				<input type="password" id ="ctr2" name="password2" placeholder="Repita contraseña" maxlength="15"><br><br>
				<button onclick="v_contraseña('AB');">Enviar</button>
			</div>
		<?php	
		}else if($tt==0){
			$sql = "INSERT INTO administrador VALUES('','$user','$ctr','$tipo')";
			$result = mysqli_query($cont,$sql);
			if (!$result) {
				echo "No se pudo realizar la consulta, intente más tarde.";
			}else{
		?>
			<div id="div_ok">
				<label>Se ha registrado con éxito al usuario: <?php echo " ".$user;  ?></label>
			</div>
		<?php 
			}
		}		
	}
	
?>
