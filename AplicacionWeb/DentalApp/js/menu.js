// Elementos del menu
var a = document.getElementById('c_u');
var b = document.getElementById('c_d');
var c = document.getElementById('g_u');
var d = document.getElementById('g_d');
var e = document.getElementById('g_t');

//Carga el formulario de citas por periodo
a.onclick = function(){
	menuChange("c_per.html");
}

b.onclick = function(){
	menuChange("c_oca.html");
}

c.onclick = function(){
	menuChange("r_gnl.html");
}

d.onclick = function(){
	menuChange("r_per.html");
}

e.onclick = function(){
	menuChange("r_cli.html");
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