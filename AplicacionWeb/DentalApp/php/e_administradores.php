<?php 
$id = $_GET['id'];

include("conexion.php");
mysqli_query($cont,"DELETE FROM administrador where id_administrador = $id");
include_once("../forms/e_administrador.php");
?>