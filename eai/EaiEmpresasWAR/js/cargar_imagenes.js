 var gbo25111 = new Image();
 gbo25111.src = "./pics/gbo25111.gif";
 var gbo25131 = new Image();
 gbo25131.src = "./pics/gbo25131.gif";
 var gbo25151 = new Image();
 gbo25151.src = "./pics/gbo25151.gif";
 var gbo25110 = new Image();
 gbo25110.src = "./pics/gbo25110.gif";
 var gbo25130 = new Image();
 gbo25130.src = "./pics/gbo25130.gif";
 var gbo25150 = new Image();
 gbo25150.src = "./pics/gbo25150.gif";
 function cambio(id){
   img = document.getElementById(id);
   if(id == "gbo25110"){
      img.src = gbo25111.src;
   }else if(id == "gbo25130") {
      img.src = gbo25131.src;
   }else if(id == "gbo25150") {
      img.src = gbo25151.src;
   }
}
function regresaImagen(id){
   img = document.getElementById(id);
   if(id == "gbo25110"){
      img.src = gbo25110.src;
   }else if(id == "gbo25130") {
      img.src = gbo25130.src;
   }else if(id == "gbo25150") {
      img.src = gbo25150.src;
   }
}
