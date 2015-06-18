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
		$cont = mysqli_connect("localhost","root","","dentalapp") or die("Error de servidor");
		$query = mysqli_query($cont,"SELECT * FROM administradores WHERE user = '$this->user' AND password = '$this->password'");
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
    }
}
$validar_post = new resivir_post();
// Vañidar el POST
if(!empty($_POST))
{
    $validar_post->login();
}
?>