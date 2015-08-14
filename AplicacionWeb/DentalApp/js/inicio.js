window.onload = function(){
	g_globalObject = new JsDatePick({
		useMode:1,
		isStripped:true,
		target:"id_calendar"
	});		
		
	g_globalObject.setOnSelectedDelegate(function(){
		var obj = g_globalObject.getSelectedDay();
		if(obj.month<10){
			obj.month = "0"+obj.month;
		}
		var fechaS = obj.year+"-"+obj.month+"-"+obj.day; 
		//alert(fechaS);
		calendarioLista(fechaS);
		verFecha(fechaS);
	});	
	
	cargarLista();
	mueveReloj();
	verFecha("");
	validar_admin();
	
}