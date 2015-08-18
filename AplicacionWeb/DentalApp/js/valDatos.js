
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
	var alergia = document.getElementById('alergia').value;
	var servicio = document.getElementById('servicio').value;
	var presupuesto = document.getElementById('presupuesto').value;
	
	if(nombre=="" || apellidoPa=="" || apellidoMa=="" || edad=="" || sexo=="" || tel=="" || servicio==0 || presupuesto==""){
		alert('Favor de llenar todos los campos');
	}else{
		if(tel.length!= 10){
			alert('Teléfono no válido');
		}else{
			if(edad >= 100 || edad<=2){
				alert('Edad no válida');
			}else{
				guardaCliente(nombre, apellidoPa, apellidoMa, edad, sexo, tel, calle, nuInt, nuExt, col, cp, clave,llave,alergia, servicio, presupuesto);
			}
		}
	}
	
}

function citaPeriodo(){
	var fecha = document.getElementById('c_fecha').value;
	var hora = document.getElementById('c_hora').value;
	var clave = document.getElementById('c_clave').value;

	if(fecha=="" || hora=="" || clave==""){
		alert("No se encontro ningun cliente");
	}else{
		
		guardaCitaPeriodo(clave, fecha, hora);
	}
	
}

/*Funcion para guardar datos de una cita ocacional*/ 
function guardaCitaOcacional(nombre, apellido_p, apellido_m, edad, sexo, telefono, observaciones, pago, hora){
	var ruta = "php/citas_ocasional.php?";
	var datos = ruta+"nombre="+nombre+"&apellidoP="+apellido_p+"&apellidoM="+apellido_m+"&edad="+edad+"&tel="+telefono+"&pago="+pago+"&obs="+observaciones+"&sexo="+sexo+"&hora="+hora;
	guardarDatos(datos);
	
}

/*Guardar cita por periodo*/
function guardaCitaPeriodo(clave, fecha, hora){
	var ruta = "php/citas-periodo.php?";
	var datos = ruta+"clave="+clave+"&fecha="+fecha+"&hora="+hora;
	
	guardarDatos(datos);
	
}

/*Funcion para guardar datos del cliente*/
function guardaCliente(nombre, apellidoP, apellidoM, edad, sexo, tel, calle, nuInt, nuExt, col, cp, clave, llave, alergia, servicio, presupuesto){
	var ruta = "php/ingresar_cliente.php?";
	var datos = ruta+"nombre="+nombre+"&apellidoP="+apellidoP+"&apellidoM="+apellidoM+"&edad="+edad+"&sexo="+sexo+"&tel="+tel+"&calle="+calle+"&numInt="+nuInt+"&numExt="+nuExt+"&col="+col+"&cp="+cp+"&clave="+clave+"&contra="+llave+"&alergia="+alergia+"&servicio="+servicio+"&presupuesto="+presupuesto;
	guardarDatos(datos);
}

//muestra informacion de la cita del cliente.
function mostrarInfo(clave){
	//alert(clave);
	var hh = document.getElementById('hora').value;
	var ff = document.getElementById('campoFecha').value;
	var ruta = "php/citas_informacion.php?clave="+clave+"&hora="+hh+"&fecha="+ff;
	guardarDatos(ruta);

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

//fecha
function verFecha(fecha){
	if(fecha == ""){
		momentoActual = new Date();
		dia = momentoActual.getDate();
		mes = momentoActual.getMonth()+1;
		anio = momentoActual.getFullYear();
		if(mes<10){
			mes = "0"+mes;
		}
		document.getElementById('campoFecha').value = anio+"-"+mes+"-"+dia;
	}else{
		document.getElementById('campoFecha').value = fecha;
	}
}

//Modificar estado de cita de acuerdo al cliente
function modDatos(clave,fecha, hora){
	//alert(fecha+" "+hora);
	var aa = document.getElementById('obs_f').value;
	var bb = document.getElementById('asisT').value;
	var cc = document.getElementById('pago_s').value;
	var dd = document.getElementById('pago_to').value;
	var s_to = 0;
	var ruta = "php/mod_citas.php?";
	if (clave=="") {
		alert("No se ha podido realizar la consulta")
	} else{
		if(bb==0){
			alert('Debe de seleccionar una opción');
		}else{
			if (bb=="SI"){
				if(cc<=0 || cc ==""){
					alert('Valor no valido');
				}else{
					s_to = dd - cc;
					//alert(s_to);
					var datos = ruta+"clave="+clave+"&obs="+aa+"&asis="+bb+"&resto="+s_to+"&pago="+cc+"&fecha="+fecha+"&hora="+hora;
					guardarDatos(datos);
				}
			}else{
				if (bb=="NO"){
					cc.value = dd;
					var datos = ruta+"clave="+clave+"&obs="+aa+"&asis="+bb+"&resto="+dd+"&pago="+"0"+"&fecha="+fecha+"&hora="+hora;
					guardarDatos(datos);
				}
			}
			
		}	
	}
}

function activa(){
	var opc = document.getElementById('asisT').value;
	var cc = document.getElementById('pago_s');
	if (opc=="NO"){
		cc.disabled=true;
	} else if(opc=="SI"){
		cc.disabled=false;
	}
}

//modificar datos de una cita
function modiCita(clave,hora){
	if(!confirm('¿Quiere modificar esta cita?')){

	}else{
		var f = document.getElementById('campoFecha').value;
		//alert(clave+ " "+f)
		var ruta = "forms/modificar-cita.php?";
		var datos = ruta+"clave="+clave+"&fecha="+f+"&hora="+hora;
		guardarDatos(datos);
	}
}

//eliminar cita
function delCita(clave, fecha, hora){
	if(!confirm('¿Desea cancelar esta cita?')){

	}else{
		var ruta = "php/cita-cancel.php?";
		var datos = ruta+"clave="+clave+"&fecha="+fecha+"&hora="+hora;
		guardarDatos(datos);
	}
}

//modificando cita
function modificarCita(clave){
	var name = document.getElementById('nom_t').value;
	var fA= document.getElementById('campoFecha').value;
	var fecha_t = document.getElementById('fecha_t').value;
	var h = document.getElementById('hora_t').value;
	var m = document.getElementById('min_t').value;
	var f2 = document.getElementById('fe_t').value;
	var h2 = document.getElementById('ho_t').value;
	var hora = h+":"+m; 
	if(fecha_t==""){
		alert('Debe de seleccionar una fecha');
	}else if(h=="N" || m=="N"){
		alert('seleccionar horario')
	}else if(fecha_t <= fA ){
		alert('La fecha seleccionada no es correcta');
	}else{
		//alert(fecha_t+"  "+hora+" "+name+" "+clave+" - "+fA)
		var ruta = 'php/cita_mod.php?';
		var datos = ruta+'clave='+clave+"&nombre="+name+"&fecha="+fecha_t+"&hora="+hora+"&f2="+f2+"&h2="+h2;
		guardarDatos(datos);
	}
}

function agregarCita(clave,nomb){
	//alert(clave+ " "+nomb);
	var ruta = "forms/cita-cliente.php?";
	var datos = ruta+"clave="+clave+"&nombre="+nomb;
	guardarDatos(datos);
}

function newCita(clave){
	var fecha = document.getElementById('fecha_i').value;
	var hh = document.getElementById('hora_t').value;
	var mm = document.getElementById('min_t').value;

	hora = hh+":"+mm;
	if(fecha==''){
		alert('Seleccionar fecha');
	} else if(hh=='N' || mm == 'N'){
		alert('Seleccionar horario');
	}else{
		var ruta = "php/n-cita.php?";
		var datos = ruta+"clave="+clave+"&fecha="+fecha+"&hora="+hora;
		guardarDatos(datos);
	}	
}



