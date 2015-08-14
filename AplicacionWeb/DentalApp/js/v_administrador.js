function validar_admin(){
	var v_a = document.getElementById('v_a');
	var t_a = document.getElementById('t_a').value;

	if (t_a == "AS") {
		v_a.style.display = "block";
	}else{
		v_a.style.display = "none";
	}
}