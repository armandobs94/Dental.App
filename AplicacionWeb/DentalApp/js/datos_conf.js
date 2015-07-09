function cargarLista(){
  var caja = document.getElementById('caja_datos');
  var xmlhttp;
  if( window.XMLHttpRequest ){
    xmlhttp = new XMLHttpRequest();
  }else if(window.ActiveXObject) {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }else{
    return false;
  }
xmlhttp.open('POST', 'php/datos.php');
 xmlhttp.onreadystatechange = function(){
    if(xmlhttp.readyState == 4 && xmlhttp.status == 200 ){
      var resultado_A = xmlhttp.responseText;
      //json_V = eval("(" + resultado_A + ")");//necesario parse el json
      cadenaFechaB = resultado_A;
      caja.value=cadenaFechaB;
      //alert(cadenaFechaB);
    }
  }
  xmlhttp.send(null);
}

function datosForm(){
  var caja = document.getElementById('caja_datos').value;
  var datos = JSON.parse(caja);
  alert(datos);
  if (datos.length){
    for(var i in datos){
      if(datos[i].hora==9 && datos[i].min == 00){
        alert("Hora: "+datos[i].hora+" Min: "+datos[i].min);
      }
      if(datos[i].hora==9 && datos[i].min == 30){
        alert("Hora: "+datos[i].hora+" Min: "+datos[i].min);
      }
    }//termina for
  }//termina if principal

}





