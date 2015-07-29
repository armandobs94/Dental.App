
function insData(){	
	var name = document.getElementById('nombre').value;
	var apeP = document.getElementById('apellido_p').value;
	var apeM = document.getElementById('apellido_m').value;
	var edad = document.getElementById('edad').value;
	var sexo = document.getElementById('sexo').value;
	var tel = document.getElementById('telefono').value;
	var obs = document.getElementById('observaciones').value;
	var pago = document.getElementById('presupuesto').value;
	var hora = document.getElementById('hora').value;

	if(name == '' || apeP == '' || apeM == '' || edad =='' ||  pago =='' || sexo == 0) { 
		alert("Llenar todos los campos");
	}else{
		if (tel != '' && tel.length !=10) {
			alert("telefono no valido");
		}else{
			if (edad>=100 || edad <= 2) {
				alert('La edad ingresada no es correcta');
			}else{
				guardaCitaOcacional(name, apeP, apeM, edad, sexo, tel, obs, pago,hora);
			}
		}
	}
		
}

function newCliente(){	
	var clave = document.getElementById('clave').value;
	var llave = document.getElementById('password').value;
	var nombre = document.getElementById('nombre_c').value;
	var apellidoPa = document.getElementById('apellidoP_c').value;
	var apellidoMa = document.getElementById('apellidoM_c').value;
	var edad = document.getElementById('edad_c').value;
	var sexo = document.getElementById('sexo_c').value;
	var tel = document.getElementById('telefono_c').value;
	var calle = document.getElementById('calle').value;
	var nuInt = document.getElementById('num_int').value;
	var nuExt = document.getElementById('num_ext').value;
	var col = document.getElementById('colonia').value;
	var cp = document.getElementById('cp').value;
	
	if(nombre=="" || apellidoPa=="" || apellidoMa=="" || edad=="" || sexo=="" || tel==""){
		alert('Favor de llenar todos los campos');
	}else{
		if(tel.length!= 10){
			alert('Teléfono no válido');
		}else{
			if(edad >= 100 || edad<=2){
				alert('Edad no válida');
			}else{
				guardaCliente(nombre, apellidoPa, apellidoMa, edad, sexo, tel, calle, nuInt, nuExt, col, cp, clave,llave);
			}
		}
	}
	
}

/*Funcion para guardar datos de una cita ocacional*/ 
function guardaCitaOcacional(nombre, apellido_p, apellido_m, edad, sexo, telefono, observaciones, pago, hora){
	var ruta = "php/citas_ocasional.php?";
	var datos = ruta+"nombre="+nombre+"&apellidoP="+apellido_p+"&apellidoM="+apellido_m+"&edad="+edad+"&tel="+telefono+"&pago="+pago+"&obs="+observaciones+"&sexo="+sexo+"&hora="+hora;
	guardarDatos(datos);
	
}

/*Funcion para guardar datos del cliente*/
function guardaCliente(nombre, apellidoP, apellidoM, edad, sexo, tel, calle, nuInt, nuExt, col, cp, clave, llave){
	var ruta = "php/ingresar_cliente.php?";
	var datos = ruta+"nombre="+nombre+"&apellidoP="+apellidoP+"&apellidoM="+apellidoM+"&edad="+edad+"&sexo="+sexo+"&tel="+tel+"&calle="+calle+"&numInt="+nuInt+"&numExt="+nuExt+"&col="+col+"&cp="+cp+"&clave="+clave+"&contra="+llave;
	guardarDatos(datos);
}

//reloj
function mueveReloj(){
	//alert("hora")
	momentoActual = new Date();
	hora = momentoActual.getHours();
	minuto = momentoActual.getMinutes();
	segundo = momentoActual.getSeconds();

	horaImprimible = hora + ":" + minuto + ":" + segundo; 

	document.getElementById('hora').value = horaImprimible;

	setTimeout("mueveReloj()",1000);
}