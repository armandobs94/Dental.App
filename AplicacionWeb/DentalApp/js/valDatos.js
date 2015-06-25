
function datos(){
	var a = document.getElementById('nombre_p').value;
	var b = document.getElementById('apellido_p').value;
	var c = document.getElementById('edad').value;
	alert(a+"-"+b+"-"+c);

if(a == "" || b == "" || c == ""){
	alert("Por favor, llene todos los campos.");
}else{
	if (c<=1 || c>=150) {
		alert("La edad ingresada no es correcta");
	}else{
		//Algo
	}
}		
	
}


