<?php
	session_start();
	session_destroy();
	session_unset();
	echo "<script>
				alert('Hasta luego.');
				window.location='../index.php';
		  </script>";
	// header('Location:../index.php');
?>