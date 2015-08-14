function v_contraseña1(){
	var user = document.getElementById('user').value;
	var ctr1 = document.getElementById('ctr1').value;
	var ctr2 = document.getElementById('ctr2').value;
	var tipo = "AS";

	if (user == "" || ctr1 == "" || ctr2 == "" ) {
		alert('Llene los campos vacios :c!');
	}else{
		if (ctr1 == ctr2) {
		alert('Consulta e.e!');
		var datos = "user="+user+"&ctr="+ctr1+"&tipo="+tipo;
		window.location="php/n_administrador.php?"+datos;

	}
	else{
		alert('Contraseñas no iguales');
	}
	}
}

function v_contraseña2(){
	var user = document.getElementById('user').value;
	var ctr1 = document.getElementById('ctr1').value;
	var ctr2 = document.getElementById('ctr2').value;
	var tipo = "AB";

	if (user == "" || ctr1 == "" || ctr2 == "" ) {
		alert('Llene los campos vacios :c!');
	}else{
		if (ctr1 == ctr2) {
		alert('Consulta e.e!');
		var datos = "user="+user+"&ctr="+ctr1+"&tipo="+tipo;
		window.location="php/n_administrador.php?"+datos;

	}
	else{
		alert('Contraseñas no iguales');
	}
	}
}