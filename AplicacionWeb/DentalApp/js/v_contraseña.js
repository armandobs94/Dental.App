function v_contraseña(tipo){
	var user = document.getElementById('user').value;
	var ctr1 = document.getElementById('ctr1').value;
	var ctr2 = document.getElementById('ctr2').value;
	

	if (user == "" || ctr1 == "" || ctr2 == "" ) {
		alert('Llene los campos vacios');
	}else{
		if (ctr1 == ctr2) {
		var datos = "user="+user+"&ctr="+ctr1+"&tipo="+tipo;
		guardarDatos("php/n_administrador.php?"+datos);

	}
	else{
		alert('Contraseñas no iguales');
	}
	}
}
