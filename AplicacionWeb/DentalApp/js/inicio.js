window.onload = function(){
	g_globalObject = new JsDatePick({
		useMode:1,
		isStripped:true,
		target:"id_calendar"
	});		
		
	g_globalObject.setOnSelectedDelegate(function(){
		var obj = g_globalObject.getSelectedDay();
		var fechaS = obj.year+"-"+obj.month+"-"+obj.day; 
		//alert(fechaS);
		calendarioLista(fechaS);
	});	
	
	cargarLista();
	mueveReloj();

}