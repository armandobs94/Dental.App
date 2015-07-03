
function insData(){	
	var name = document.getElementById('nombre').value;
	var apeP = document.getElementById('apellido_p').value;
	var apeM = document.getElementById('apellido_m').value;
	var edad = document.getElementById('edad').value;
	var tel = document.getElementById('telefono').value;
	var obs = document.getElementById('observaciones').value;
	var pres = document.getElementById('presupuesto').value;

//validar campos vacios

	if(name == '' || apeP == '' || apeM == '' || edad =='' || tel =='' || obs =='' || pres =='' ) { 
		alert("Llenar todos los campos");
	}else{
		if (tel.length !=10) {
			alert("telefono no valido");
		}else{
			if (edad>=100 || edad <= 2) {
				alert('La edad ingresada no es correcta')
			}else{
				//guardar
			}
		}
	}
		
}




function periodo(){	
	var nam = document.getElementById('nombre1').value;
	var apP = document.getElementById('apellido_p1').value;
	var apM = document.getElementById('apellido_m1').value;
	var ed = document.getElementById('edad1').value;
	var te = document.getElementById('telefono1').value;
	var ob = document.getElementById('observaciones1').value;
	var p = document.getElementById('presupuesto1').value;
	var fec = document.getElementById('fecha1').value;
	var h = document.getElementById('hora1').value;

if(nam == '' || apP == '' || apM == '' || ed =='' || te =='' || ob =='' || p =='' ) { 
		alert("Llenar todos los campos");
	}else{
		if (te.length !=10) {
			alert("telefono no valido");
		}else{
			if (ed>=100 || ed <= 2) {
				alert('La edad ingresada no es correcta')
			}else{
				//guardar
			}
		}
	}
}

