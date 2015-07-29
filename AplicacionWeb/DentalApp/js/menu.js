// Elementos del menu
var citaO = document.getElementById('c_d');
var gCliente = document.getElementById('g_cliente');
var gCita = document.getElementById('g_cita');

//Carga el formulario de citas por periodo
citaO.onclick = function(){
	menuChange("citas_ocasionales.php");
}
g_cliente.onclick = function(){
	menuChange("gen_cliente.php");
}

function menuChange(opc){
	var xmlhttp;
	if (window.XMLHttpRequest){
	 	xmlhttp=new XMLHttpRequest();
	 }else{
	 	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	xmlhttp.onreadystatechange=function(){
	 if (xmlhttp.readyState==4 && xmlhttp.status==200){
	   	document.getElementById("listado").innerHTML=xmlhttp.responseText;
	   }
	 }
	xmlhttp.open("POST","forms/"+opc,true);
	xmlhttp.send();
}

function mostrarOpcion(idElemento,archivo){
	var xmlhttp;
	if (window.XMLHttpRequest){
	 	xmlhttp=new XMLHttpRequest();
	 }else{
	 	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	xmlhttp.onreadystatechange=function(){
	 if (xmlhttp.readyState==4 && xmlhttp.status==200){
	   	document.getElementById("listado").innerHTML=xmlhttp.responseText;
	   }
	 }
	xmlhttp.open("POST","forms/"+opc,true);
	xmlhttp.send();
}

//carga el user de acuerdo al user
function cargarCita(elem,opc){
	var xmlhttp;
	if (window.XMLHttpRequest){
	 	xmlhttp=new XMLHttpRequest();
	 }else{
	 	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	 }
	xmlhttp.onreadystatechange=function(){
	 if (xmlhttp.readyState==4 && xmlhttp.status==200){
	   	document.getElementById(elem).innerHTML=xmlhttp.responseText;
	   }
	 }
	xmlhttp.open("POST",opc,true);
	xmlhttp.send();
}

