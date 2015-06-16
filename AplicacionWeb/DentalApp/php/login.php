<?php 
	$user = $_POST['user'];
	$password = $_POST['password'];

	$cont = mysqli_connect("localhost","root","","dentalapp") or die("Error de servidor");
	$query = mysqli_query($cont,"SELECT * FROM administradores WHERE user = '$user' AND password = '$password'");
	if(mysqli_num_rows($query) == 1){
		$row = mysqli_fetch_array($query);
			session_start();
			$_SESSION['user'] = $row['user'];
			header('Location:../bienvenido.php');
			exit;
	}else{
		header('Location:../index.php');
		exit;
	}

?>