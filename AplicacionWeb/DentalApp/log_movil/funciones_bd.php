<?php
 
class funciones_BD {
 
    private $db;
 
    // constructor

    function __construct() {
        require_once 'connectbd.php';
        // connecting to database

        $this->db = new DB_Connect();
        $this->db->connect();

    }
 
    // destructor
    function __destruct() {
 
    } 
   
	public function login($user,$passw){

	$result=mysql_query("SELECT COUNT(*) FROM clientes WHERE clave_cliente='$user' AND llave_cliente='$passw' AND tipoCliente = 2 "); 
	$count = mysql_fetch_row($result);

	/*como el usuario debe ser unico cuenta el numero de ocurrencias con esos datos*/


		if ($count[0]==0){

		return true;

		}else{

		return false;

		}
	}
  
}
 
?>
