function env_valor(idAdmin){
	var ruta = "php/e_administradores.php?";
	var datos = ruta+"id="+idAdmin;
	guardarDatos(datos);
}