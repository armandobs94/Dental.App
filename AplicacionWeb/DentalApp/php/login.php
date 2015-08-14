<?php
// Clace resivir variables post 
class resivir_post {
    private $user;
    private $password;
    
// Crear constructor
    function __construct() {
    	$this->user =  mysql_real_escape_string($_POST['user']);
	    $this->password = mysql_real_escape_string($_POST['password']);   
    }
// Funcion del login 
    function login() {

		include("conexion.php");
		$query = mysqli_query($cont,"SELECT * FROM administrador WHERE user = '$this->user' AND password = '$this->password'");
		if(mysqli_num_rows($query) == 1){
			$row = mysqli_fetch_array($query);
				session_start();
				$_SESSION['id_administrador'] = $row['id_administrador'];
				header('Location: ../bienvenido.php');
				exit;
		}else{
			echo "<script>
						alert('Usuario y Contraseña incorrectos.');
				  		window.location='../index.php';
				  </script>";
			// header('Location:../index.php');
			exit;
		}
    }
}
$validar_post = new resivir_post();
// Vañidar el POST
if(!empty($_POST))
{
    $validar_post->login();
}
?>