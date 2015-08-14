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
        cargarCita("ci_1","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_1_t","php/infoTel.php?user="+datos[i].user);  
        cargarCita("mo_c1","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c1","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==09 && datos[i].min == 30){
        cargarCita("ci_2","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_2_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c2","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c2","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==10 && datos[i].min == 00){
        cargarCita("ci_3","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_3_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c3","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c3","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==10 && datos[i].min == 30){
        cargarCita("ci_4","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("ci_4_t","php/infoTel.php?user="+datos[i].user); 
        cargarCita("mo_c4","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c4","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==11 && datos[i].min == 00){
        cargarCita("ci_5","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_5_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c5","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c5","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==11 && datos[i].min == 30){
        cargarCita("ci_6","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("ci_6_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c6","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("el_c6","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==12 && datos[i].min == 00){
       cargarCita("ci_7","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);  
       cargarCita("ci_7_t","php/infoTel.php?user="+datos[i].user);
       cargarCita("mo_c7","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
       cargarCita("el_c7","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==12 && datos[i].min == 30){
        cargarCita("ci_8","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("ci_8_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c8","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c8","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);  
      }
      if(datos[i].hora==13 && datos[i].min == 00){
        cargarCita("ci_9","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);  
        cargarCita("ci_9_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c9","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c9","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==13 && datos[i].min == 30){
        cargarCita("ci_10","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);   
        cargarCita("ci_10_t","php/infoTel.php?user="+datos[i].user); 
        cargarCita("mo_c10","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c10","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==16 && datos[i].min == 00){
        cargarCita("ci_11","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_11_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c11","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("el_c11","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);   
      }
      if(datos[i].hora==16 && datos[i].min == 30){
        cargarCita("ci_12","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_12_t","php/infoTel.php?user="+datos[i].user); 
        cargarCita("mo_c12","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("el_c12","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);  
      }
      if(datos[i].hora==17 && datos[i].min == 00){
        cargarCita("ci_13","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("ci_13_t","php/infoTel.php?user="+datos[i].user);  
        cargarCita("mo_c13","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("el_c13","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==17 && datos[i].min == 30){
        cargarCita("ci_14","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_14_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c14","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("el_c14","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);  
      }
      if(datos[i].hora==18 && datos[i].min == 00){
        cargarCita("ci_15","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("ci_15_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c15","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);  
        cargarCita("el_c15","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==18 && datos[i].min == 30){
        cargarCita("ci_16","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("ci_16_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c16","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("el_c16","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
      }
      if(datos[i].hora==19 && datos[i].min == 00){
        cargarCita("ci_17","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("ci_17_t","php/infoTel.php?user="+datos[i].user);
        cargarCita("mo_c17","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("el_c17","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);  
      }
      if(datos[i].hora==19 && datos[i].min == 30){
        cargarCita("ci_18","php/infoCitas.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min);
        cargarCita("ci_18_t","php/infoTel.php?user="+datos[i].user); 
        cargarCita("mo_c18","forms/modi.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
        cargarCita("el_c18","forms/del.php?user="+datos[i].user+"&fecha="+datos[i].fecha+"&hora="+datos[i].hora+":"+datos[i].min); 
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

function calendarioLista(fecha){
  cargarCita("listado","php/citas.php");
  var caja = document.getElementById('caja_datos');
  var xmlhttp;
  if( window.XMLHttpRequest ){
    xmlhttp = new XMLHttpRequest();
  }else if(window.ActiveXObject) {
    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }else{
    return false;
  }
xmlhttp.open('POST', 'php/lista_citas.php?fecha='+fecha);
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