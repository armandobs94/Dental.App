// Elementos del menu
var a = document.getElementById('c_u');
var b = document.getElementById('c_d');
var c = document.getElementById('g_u');
var d = document.getElementById('g_d');
var e = document.getElementById('g_t');

//Carga el formulario de citas por periodo
a.onclick = function(){
	menuChange("citas_periodo.html");
}

b.onclick = function(){
	menuChange("citas_ocacionales.html");
}

c.onclick = function(){
	menuChange("reporte_general.html");
}

d.onclick = function(){
	menuChange("reporte_periodo.html");
}

e.onclick = function(){
	menuChange("reporte_cliente.html");
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
	   	document.getElementById("ajax").innerHTML=xmlhttp.responseText;
	   }
	 }
	xmlhttp.open("POST","forms/"+opc,true);
	xmlhttp.send();
}