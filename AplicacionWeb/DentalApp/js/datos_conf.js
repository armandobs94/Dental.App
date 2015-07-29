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
      //se llama a funcion para cargar datos a la cita correspondiente
      datosForm();
    }
  }
  xmlhttp.send(null);
}

function datosForm(){
  var caja = document.getElementById('caja_datos').value;
  //alert(caja);
  var datos = JSON.parse(caja);
  if (datos.length){
    for(var i in datos){
      if(datos[i].hora==09 && datos[i].min == 00){
        alert(datos[i].user);
        cargarCita("ci_1","php/infoCitas.php?user="+datos[i].user);  
      }
      if(datos[i].hora==09 && datos[i].min == 30){
        cargarCita("ci_2","php/infoCitas.php?user="+datos[i].user);
      }
      if(datos[i].hora==10 && datos[i].min == 00){
        // alert(datos[i].user);
        cargarCita("ci_3","php/infoCitas.php?user="+datos[i].user);
      }
      if(datos[i].hora==10 && datos[i].min == 30){
        // alert(datos[i].user);
        cargarCita("ci_4","php/infoCitas.php?user="+datos[i].user);  
      }
      if(datos[i].hora==11 && datos[i].min == 00){
        cargarCita("ci_5","php/infoCitas.php?user="+datos[i].user);
      }
      if(datos[i].hora==11 && datos[i].min == 30){
        cargarCita("ci_6","php/infoCitas.php?user="+datos[i].user);  
      }
      if(datos[i].hora==12 && datos[i].min == 00){
       cargarCita("ci_7","php/infoCitas.php?user="+datos[i].user);  
      }
      if(datos[i].hora==12 && datos[i].min == 30){
        cargarCita("ci_8","php/infoCitas.php?user="+datos[i].user);   
      }
      if(datos[i].hora==13 && datos[i].min == 00){
        cargarCita("ci_9","php/infoCitas.php?user="+datos[i].user);  
      }
      if(datos[i].hora==13 && datos[i].min == 30){
        cargarCita("ci_10","php/infoCitas.php?user="+datos[i].user);    
      }
      if(datos[i].hora==16 && datos[i].min == 00){
        cargarCita("ci_11","php/infoCitas.php?user="+datos[i].user);    
      }
      if(datos[i].hora==16 && datos[i].min == 30){
        cargarCita("ci_12","php/infoCitas.php?user="+datos[i].user);   
      }
      if(datos[i].hora==17 && datos[i].min == 00){
        cargarCita("ci_13","php/infoCitas.php?user="+datos[i].user);    
      }
      if(datos[i].hora==17 && datos[i].min == 30){
        cargarCita("ci_14","php/infoCitas.php?user="+datos[i].user);   
      }
      if(datos[i].hora==18 && datos[i].min == 00){
        cargarCita("ci_15","php/infoCitas.php?user="+datos[i].user);   
      }
      if(datos[i].hora==18 && datos[i].min == 30){
        cargarCita("ci_16","php/infoCitas.php?user="+datos[i].user);  
      }
      if(datos[i].hora==19 && datos[i].min == 00){
        cargarCita("ci_17","php/infoCitas.php?user="+datos[i].user);    
      }
      if(datos[i].hora==19 && datos[i].min == 30){
        cargarCita("ci_18","php/infoCitas.php?user="+datos[i].user);   
      }
    }//termina for
  }//termina if principal

}

function guardarDatos(datos){
  divResultado = document.getElementById('listado');
  ajax=objetoAjax();
  ajax.open("POST", datos);
  divResultado.innerHTML="<div align='center'><img src='img/anim.gif'></div>";
  ajax.onreadystatechange=function() {
    if (ajax.readyState==4) {
      divResultado.innerHTML = ajax.responseText
    }
  }
  ajax.send()
}





