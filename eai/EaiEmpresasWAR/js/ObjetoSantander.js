
SANTANDER = {
    navegadorValido : function () {
      var userAgent = window.navigator.userAgent;
      var valido = false;
      if((userAgent.indexOf("Firefox") != -1 || userAgent.indexOf("MSIE") != -1) && (userAgent.toLowerCase().indexOf("windows") != -1)) {
         valido = true;
      }else if(userAgent.indexOf("Trident") != -1){//Para internet explorer 11
    	  valido = true;
      }else if(userAgent.indexOf("Chrome") != -1){//Para Chrome
      	  valido = true;
      }else if(userAgent.indexOf("Safari") != -1){//Para Safari
    	  valido = true;
      }
      return valido;
    }, 
    creaVentana : function () {
      ventana=window.open('','trainerWindow','width=380,height=250,toolbar=no,scrollbars=no,left=210,top=225');
      ventana.document.open();
      ventana.document.write("<html>");
      ventana.document.writeln("<head>\n<title>Alerta</title>\n");
      ventana.document.writeln("<style type = \"text/css\">\n");
      ventana.document.writeln("body { \n ");
      ventana.document.writeln("font: 12px Arial; background-color: #DCDCDC;");
      ventana.document.writeln("}");
      ventana.document.writeln("a { position: relative; left: 140px; width: 100px; }");
      ventana.document.writeln("div {");
      ventana.document.writeln("color: white; background-color: red;");
      ventana.document.writeln("font-weight: bold; padding: 2px;");
      ventana.document.writeln("}");
      ventana.document.writeln("h3 { background-color: red; color: white; text-align: center;}");
      ventana.document.writeln("</style>");
      ventana.document.writeln("</head>\n");
      ventana.document.writeln("<body>");
      ventana.document.writeln("<h3>Aviso</h3>");
      ventana.document.writeln("<p>");
      ventana.document.writeln("<br />");
      ventana.document.writeln("Es necesario contar con Internet Explorer 6.0 o superior.");
      ventana.document.writeln("<br />");
      ventana.document.writeln("Firefox 2.0 para poder utilizar la herramienta de Seguridad.");
      ventana.document.writeln("<br />");
      ventana.document.writeln("</p>");
      ventana.document.writeln("<p>");
      ventana.document.writeln("En caso de utilizar otro navegador, extreme sus precauciones.");
      ventana.document.writeln("</p>");
      ventana.document.writeln("<a href = \"cerrar.html\" onclick = \"window.close(); return false;\">Cerrar</a>");
      ventana.document.writeln("");
      ventana.document.writeln("");
      ventana.document.writeln("\n</body>");
      ventana.document.writeln("\n</html>");
      ventana.focus();
      ventana = null;
   }
}
