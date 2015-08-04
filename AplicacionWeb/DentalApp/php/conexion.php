<?php 
	/**
	* @file conexion.php
	* @brief Archivo para conectar a la base de datos.
	* @author Luis Enrique
	* @version 1.0 
	*/
	$cont = mysqli_connect("localhost","root","","dentalapp") or die("Error del servidor");	
?>