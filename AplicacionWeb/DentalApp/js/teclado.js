 //solo permite la entrada de letras
 function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
      for(var i in especiales){
        if(key == especiales[i]){
          tecla_especial = true;
            break;
         }
      }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
    return false;
  }
}
//solo para el index
function clickEnter(){
  if(event.keyCode == 13){
    //Se preciono la tecla enter
  }
}

function mayus(input) { 
  input.value=input.value.toUpperCase(); 
} 

//solo permite la entrada de numeros
function soloNum(evt){
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
    return true;
}
