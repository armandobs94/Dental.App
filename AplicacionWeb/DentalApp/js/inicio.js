	window.onload = function(){
		g_globalObject = new JsDatePick({
			useMode:1,
			isStripped:true,
			target:"id_calendario"
		});		
		
		g_globalObject.setOnSelectedDelegate(function(){
			var obj = g_globalObject.getSelectedDay();
			alert("Fecha seleccionada es : " + obj.day + "-" + obj.month + "-" + obj.year);
			//document.getElementById("div3_example_result").innerHTML = obj.day + "/" + obj.month + "/" + obj.year;
		});

		/*Carga los datos de citas al iniciar la pagina*/
		isDatos("caja_datos","datos");
				
	}