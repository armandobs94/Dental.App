function isDatos(element,fich){
  alert("hola")
  var xmlhttp;
  if (window.XMLHttpRequest){
    xmlhttp=new XMLHttpRequest();
   }else{
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
  xmlhttp.onreadystatechange=function(){
   if (xmlhttp.readyState==4 && xmlhttp.status==200){
      document.getElementById(element).innerHTML=xmlhttp.responseText;
     }
   }
  xmlhttp.open("POST","php/"+fich+".php",true);
  xmlhttp.send();
}