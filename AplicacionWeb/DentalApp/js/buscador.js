	/**
	*@file buscador.js
	*@brief Archivo del Ajax del buscador .
	*@author L. Enrique Rodriguez.
	*@version 2.0 
	*/

	function Object_Ajax(){
	var xmlhttp=false;
	
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	}catch(e){
		try {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}catch(E){
			xmlhttp = false;
		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	
	return xmlhttp;
}

function buscador(){
	item = document.getElementById('item').value;
	result = document.getElementById('resultado');
	
	ajax = Object_Ajax();
	ajax.open("GET", "php/busqueda.php?item="+item,true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			result.innerHTML = ajax.responseText;
		}
	}
	ajax.send();

}

function buscadorC(){
	item = document.getElementById('item').value;
	result = document.getElementById('resultado');
	
	ajax = Object_Ajax();
	ajax.open("GET", "php/busquedaC.php?item="+item,true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			result.innerHTML = ajax.responseText;
		}
	}
	ajax.send();

}

