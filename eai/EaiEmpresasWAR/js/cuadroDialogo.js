var respuesta = 0;
var ventanaActiva = 1;
var campoTexto = "";
var nh = "";
var pagBack = 0;
var opcNumber = 0;
var ventana = '';

function cuadroCapturaEmail(mensaje, titulo) {
    campoTexto = "";
    isEmail = "";
    isEmail = mensaje.indexOf("correo");

    captura = window.open('', 'trainerWindow', 'width=380,height=170,toolbar=no,scrollbars=no,left=210,top=225');
    captura.document.open();
    captura.focus();
    captura.document.write("<html>");
    captura.document.writeln("<head><title>MSG</title>");
    captura.document.writeln("<link rel='stylesheet' href='/css/consultas.css' type='text/css'>");
    captura.document.writeln("<script language='javaScript'>");
    captura.document.writeln("var estate = false");
    captura.document.writeln("function ValidaEmail(email)");
    captura.document.writeln("{");
    captura.document.writeln("     if(email.indexOf(\"@\") == 2 || email.indexOf(\"@\") == -1 || email.length < 9 || email.indexOf(\".\") == -1)");
    captura.document.writeln("     {");
    captura.document.writeln("         return false;");
    captura.document.writeln("      }else");
    captura.document.writeln("      return true;");
    captura.document.writeln("}");
    captura.document.writeln("function ValidaForma(forma,boton)");
    captura.document.writeln(" {");
    captura.document.writeln("   if(boton==1)");
    captura.document.writeln("   {    ");
    captura.document.writeln("     ");
    captura.document.writeln("       if(opener.isEmail != -1)");
    captura.document.writeln("        {");
    captura.document.writeln("              if(forma.texto.value != \"\" || forma.texto.value == \"undefined\" )");
    captura.document.writeln("                  {");
    captura.document.writeln("                       if(ValidaEmail(forma.texto.value))");
    captura.document.writeln("                         {");
    captura.document.writeln("                        if(opener.estatus == \"Alta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"obtensucursal\";");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }else if(opener.estatus == \"Consulta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"enviaEmpDetalle\";");
    captura.document.writeln("                         forma.valor_radio.value=opener.cad;");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }");
    captura.document.writeln("                        }else{");
    captura.document.writeln("                                      alert(\"Por Favor entre un correo electronico valido\");");
    captura.document.writeln("                                }");
    captura.document.writeln("                  }else{");
    captura.document.writeln("                        if(opener.estatus == \"Alta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"obtensucursal\";");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }else if(opener.estatus == \"Consulta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"enviaEmpDetalle\";");
    captura.document.writeln("                         forma.valor_radio.value=opener.cad");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }");
    captura.document.writeln("                  }");
    captura.document.writeln("         }else{");
    captura.document.writeln("              opener.campoTexto=forma.texto.value;");
    captura.document.writeln("              opener.respuesta=boton;");
    captura.document.writeln("              opener.continuaCaptura();");
    captura.document.writeln("              window.close();");
    captura.document.writeln("               ");
    captura.document.writeln("         }");
    captura.document.writeln("   }else{opener.respuesta=boton;window.close();}");
    captura.document.writeln(" }");
    captura.document.writeln("</script>");
    captura.document.writeln("</head>");
    captura.document.writeln("<body bgcolor='white'>");
    captura.document.writeln("<form enctype='multipart/form-data' name='captura' method=post onSubmit='return estate'> ");
    captura.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    captura.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=right width=50 rowspan=2><img src='" + cp + "pics/gic25020.gif' border=0></a></td>");
    captura.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br>");
    captura.document.writeln("</td></tr>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=center><input type=hidden name=valor_radio><input type=hidden name=operacion><input type=text name=texto size=30 maxlength=120 class=tabmovtex><br><br></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 align=center cellspacing=0 cellpadding=0>");
    captura.document.writeln("<tr><td align=right><a href='javascript:ValidaForma(document.captura,1);'><img src='" + cp + "pics/gbo25280.gif' border=0 onClick='estate=true'></a></td>");
    captura.document.writeln("<td align=left><a href='javascript:ValidaForma(document.captura,2);'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("</form>");
    captura.document.writeln("</body>\n</html>");
    captura.focus();
    captura.document.captura.texto.focus();
}


function cuadroDialogoMttoEmp(encabezado, mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";

    if (tipo == 9) {
        imagen = "gic25050.gif";
        titulo = encabezado;
    }

    ventana = window.open('', 'trainerWindow', 'width=380,height=165,toolbar=no,scrollbars=no,left=210,top=225');
    ventana.document.open();
    ventana.document.write("<html>");
    ventana.document.writeln("<head>\n<title>MSG</title>\n");
    ventana.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    ventana.document.writeln("</head>");
    ventana.document.writeln("<body bgcolor='white'>");
    ventana.document.writeln("<form name='captura'>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></a></td>");
    ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br><br>");
    ventana.document.writeln("</tr></td>");
    ventana.document.writeln("<tr><td class='tabmovtex1'>");
    ventana.document.writeln("</td></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");

    if (tipo == 9) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=11;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=12;window.close();opener.continua();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    }

    ventana.document.writeln("</table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>\n</html>");
    ventana.focus();
}

function cuadroDialogoPagosNomina(encabezado, mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";
    if (tipo == 1) {
        imagen = "gic25020.gif";
        titulo = encabezado;
    } else if (tipo == 2) {
        opcNumber = 2;
        imagen = "gic25050.gif";
        titulo = encabezado;
    } else if (tipo == 3) {
        imagen = "gic25050.gif";
        titulo = encabezado;
    } else if (tipo == 5) {
        imagen = "gic25050.gif";
        titulo = encabezado;
    } else if (tipo == 6) {
        imagen = "gic25050.gif";
        titulo = encabezado;
    } else if (tipo == 9) {
        opcNumber = 9;
        imagen = "gic25050.gif";
        titulo = encabezado;
    } else if (tipo == 15) {
        opcNumber = 15;
        imagen = "gic25050.gif";
        titulo = encabezado;
    } else if (tipo == 7) {
        imagen = "gic25020.gif";
        titulo = encabezado;
    } else if (tipo == 8) {
        imagen = "gic25020.gif";
        titulo = encabezado;
    } else {
        imagen = "gic25060.gif";
        titulo = "Error";
    }

    ventana = window.open('', 'trainerWindow', 'width=380,height=200,toolbar=no,scrollbars=no,left=210,top=350');
    ventana.document.open();
    ventana.document.write("<html>");
    ventana.document.writeln("<head>\n<title>MSG</title>\n");
    ventana.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    ventana.document.writeln("<script language='javaScript'>");
    ventana.document.writeln("function ValidaForma(forma,boton)");
    ventana.document.writeln(" {");
    ventana.document.writeln("   if(boton==1)");
    ventana.document.writeln("   {    ");
    ventana.document.writeln("        opener.nh=forma.HorarioPremierDialogo.options[forma.HorarioPremierDialogo.selectedIndex].value;");
    ventana.document.writeln("       opener.respuesta=13;");
    ventana.document.writeln("       opener.continua()");
    ventana.document.writeln("       window.close();");
    ventana.document.writeln("   }    ");
    ventana.document.writeln(" }");
    ventana.document.writeln("</script>");
    ventana.document.writeln("</head>");
    ventana.document.writeln("<body bgcolor='white'>");
    ventana.document.writeln("<form name='captura'>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></a></td>");
    ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br><br>");
    ventana.document.writeln("</tr></td>");
    ventana.document.writeln("<tr><td class='tabmovtex1'>");
    ventana.document.writeln("</td></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
    if (tipo == 2) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:ValidaForma(document.captura,1);'><img src='" + cp + "pics/gbo25520.gif' border=0></a></td>");
    } else if (tipo == 3) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:ValidaForma(document.captura,1);'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td></tr>");
    } else if (tipo == 15) {
        ventana.document.writeln("<tr><td align=center><a href='javascript:opener.ventanaActiva=0;opener.respuesta=12;window.close();opener.continua();'><img src='" + cp + "pics/gbo25520.gif' border=0></a></td></tr>");
    } else if (tipo == 6) {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    } else if (tipo == 9) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=11;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=12;window.close();opener.continua();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 10) {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=12;window.close();opener.continua();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    } else {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=0;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    }
    ventana.document.writeln("</table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>\n</html>");
    ventana.focus();
}

//=================================================================================================

function cuadroDialogo(mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";

    if (tipo == 1) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    } else if (tipo == 888) {
        imagen = "gic25020.gif";
        titulo = "AVISO";
    }else if (tipo == 2) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else if (tipo == 5) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else if (tipo == 6) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else if (tipo == 7) {
        imagen = "gic25020.gif";
        titulo = "AVISO";
    } else if (tipo == 8) {
        imagen = "gic25020.gif";
        titulo = "Obten Data";
    } else if (tipo == 99) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    } else if (tipo == 98) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    } else {
        imagen = "gic25060.gif";
        titulo = "Error";
    }
    var contexto = "";
    var cp = contexto;
    
    ventana = window.open('', 'trainerWindow', 'width=380,height=170,toolbar=no,scrollbars=no,left=210,top=225');
    ventana.document.open();
    ventana.document.writeln("<html>");
    ventana.document.writeln("<head>\n<title>" + titulo + "</title>\n");
    ventana.document.writeln("<link rel='stylesheet' href='./css/consultas.css' type='text/css'>");
    ventana.document.writeln("</head>");
    if (tipo == 99) {
        ventana.document.writeln("<body bgcolor='white' onunload=\"window.opener.location= 'usrLogout.do'\" >");
    } else if (tipo == 98) {
        ventana.document.writeln("<body bgcolor='white' onunload=\"window.opener.location= 'falloRetoChallenge.do'; \" >");
    } else {
        ventana.document.writeln("<body bgcolor='white'>");
    }
    ventana.document.writeln("<form>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></a></td>");
    ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br><br>");
    ventana.document.writeln("</tr></td>");
    ventana.document.writeln("<tr><td class='tabmovtex1'>");
    ventana.document.writeln("</td></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
    if (tipo == 2) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 5) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    } else if (tipo == 6) {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    } else if (tipo == 7) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=8;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=7;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 8) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=9;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=10;window.close();opener.continua();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 9) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=11;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=12;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 99) {
        if (navigator.userAgent.search("MSIE") != -1) {
            ventana.document.writeln("<td align=left><a href=javascript:window.close();opener.location.href='/eai/EaiEmpresasWAR/usrLogout.do';><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
        } else {
            ventana.document.writeln("<td align=left><a href='javascript:window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
        }
    } else if (tipo == 98) {
        ventana.document.writeln("<td align=left><a href='javascript:window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    } else {
        ventana.document.writeln("<td align=left><a href='javascript:window.close();opener.ventanaActiva=0;opener.respuesta=0;'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    }
    ventana.document.writeln("</table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>\n</html>");
    ventana.focus();
    return ventana;
}
//=================================================================================================

function cuadroDialogoCLABE(mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";

    if (tipo == 1) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    } else if (tipo == 2) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else if (tipo == 5) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else if (tipo == 6) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else if (tipo == 7) {
        imagen = "gic25020.gif";
        titulo = "AVISO";
    } else if (tipo == 8) {
        imagen = "gic25020.gif";
        titulo = "Obten Data";
    } else {
        imagen = "gic25060.gif";
        titulo = "Error";
    }

    ventana = window.open('', 'trainerWindow', 'width=380,height=150,toolbar=no,scrollbars=no,left=210,top=225');
    ventana.document.open();
    ventana.document.write("<html>");
    ventana.document.writeln("<head>\n<title>" + titulo + "</title>\n");
    ventana.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    ventana.document.writeln("</head>");
    ventana.document.writeln("<body bgcolor='white'>");
    ventana.document.writeln("<form>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></a></td>");
    ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br><br>");
    ventana.document.writeln("</tr></td>");
    ventana.document.writeln("<tr><td class='tabmovtex1'>");
    ventana.document.writeln("</td></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
    if (tipo == 2) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;opener.continua();window.close();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 5) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    } else if (tipo == 6) {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    } else if (tipo == 7) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=8;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=7;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 8) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=9;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=10;window.close();opener.continua();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else if (tipo == 9) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=11;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=12;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=0;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    }
    ventana.document.writeln("</table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>\n</html>");
    ventana.focus();
}
//=================================================================================================


function cuadroCaptura(mensaje, titulo) {
    campoTexto = "";
    isEmail = "";
    isEmail = mensaje.indexOf("correo");

    captura = window.open('', 'trainerWindow', 'width=380,height=170,toolbar=no,scrollbars=no,left=210,top=225');
    captura.document.open();
    captura.document.write("<html>");
    captura.document.writeln("<head><title>MSG</title>");
    captura.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    captura.document.writeln("<script language='javaScript'>");
    captura.document.writeln("function ValidaEmail(email)");
    captura.document.writeln("{");
    captura.document.writeln("     if(email.indexOf(\"@\") == 2 || email.indexOf(\"@\") == -1 || email.length < 9 || email.indexOf(\".\") == -1)");
    captura.document.writeln("     {");
    captura.document.writeln("         return false;");
    captura.document.writeln("      }else");
    captura.document.writeln("      return true;");
    captura.document.writeln("}");
    captura.document.writeln("function ValidaForma(forma,boton)");
    captura.document.writeln(" {");
    captura.document.writeln("   if(boton==1)");
    captura.document.writeln("   {    ");
    captura.document.writeln("     ");
    captura.document.writeln("       if(opener.isEmail != -1)");
    captura.document.writeln("        {");
    captura.document.writeln("              if(forma.texto.value != \"\" || forma.texto.value == \"undefined\" )");
    captura.document.writeln("                  {");
    captura.document.writeln("                       if(ValidaEmail(forma.texto.value))");
    captura.document.writeln("                         {");
    captura.document.writeln("                        if(opener.estatus == \"Alta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"obtensucursal\";");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }else if(opener.estatus == \"Consulta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"enviaEmpDetalle\";");
    captura.document.writeln("                         forma.valor_radio.value=opener.cad;");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }");
    captura.document.writeln("                        }else{");
    captura.document.writeln("                                      alert(\"Por Favor entre un correo electronico valido\");");
    captura.document.writeln("                                }");
    captura.document.writeln("                  }else{");
    captura.document.writeln("                        if(opener.estatus == \"Alta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"obtensucursal\";");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }else if(opener.estatus == \"Consulta Empleados\"){");
    captura.document.writeln("                         opener.campoTexto=forma.texto.value;");
    captura.document.writeln("                         opener.respuesta=boton;");
    captura.document.writeln("                         forma.operacion.value=\"enviaEmpDetalle\";");
    captura.document.writeln("                         forma.valor_radio.value=opener.cad");
    captura.document.writeln("                         forma.action  = \"NomEmpOpciones\";");
    captura.document.writeln("                         forma.submit();");
    captura.document.writeln("                           }");
    captura.document.writeln("                  }");
    captura.document.writeln("         }else{");
    captura.document.writeln("              opener.campoTexto=forma.texto.value;");
    captura.document.writeln("              opener.respuesta=boton;");
    captura.document.writeln("              opener.continuaCaptura();");
    captura.document.writeln("              window.close();");
    captura.document.writeln("               ");
    captura.document.writeln("         }");
    captura.document.writeln("   }else{opener.respuesta=boton;window.close();}");
    captura.document.writeln(" }");
    captura.document.writeln("</script>");
    captura.document.writeln("</head>");
    captura.document.writeln("<body bgcolor='white' onSubmit='javascript:ValidaForma(document.captura,1);'>");
    captura.document.writeln("<form enctype='multipart/form-data' name='captura' method=post>");
    captura.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    captura.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=right width=50 rowspan=2><img src='" + cp + "pics/gic25020.gif' border=0></a></td>");
    captura.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br>");
    captura.document.writeln("</td></tr>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=center><input type=hidden name=valor_radio><input type=hidden name=operacion><input type=text name=texto size=30 maxlength=120 class=tabmovtex><br><br></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 align=center cellspacing=0 cellpadding=0>");
    captura.document.writeln("<tr><td align=right><a href='javascript:ValidaForma(document.captura,1);'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
    captura.document.writeln("<td align=left><a href='javascript:ValidaForma(document.captura,2);'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("</form>");
    captura.document.writeln("</body>\n</html>");
    captura.focus();
    captura.document.captura.texto.focus();
}


function cuadroCaptura1(mensaje, titulo) {

    campoTexto = "";

    captura = window.open('', 'trainerWindow', 'width=380,height=170,toolbar=no,scrollbars=no,left=210,top=225');
    captura.document.open();
    captura.document.write("<html>");
    captura.document.writeln("<head>\n<title>MSG</title>\n");
    captura.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    captura.document.writeln("<script language='javaScript'>");
    captura.document.writeln("function ValidaForma(forma,boton)");
    captura.document.writeln(" {");
    captura.document.writeln("   if(boton==1)");
    captura.document.writeln("       opener.campoTexto=forma.texto.value;");
    captura.document.writeln("  opener.respuesta=boton;");
    captura.document.writeln("  opener.continuaCaptura(1);");
    captura.document.writeln("  window.close();");
    captura.document.writeln(" }");
    captura.document.writeln("</script>");
    captura.document.writeln("</head>");
    captura.document.writeln("<body bgcolor='white'>");
    captura.document.writeln("<form enctype='multipart/form-data' name='captura' onSubmit='return ValidaForma(this,1);' method=post>");
    captura.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    captura.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 width=360 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=right width=50 rowspan=2><img src='" + cp + "pics/gic25020.gif' border=0></a></td>");
    captura.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br>");
    captura.document.writeln("</tr></td>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=center><input type=text name=texto size=30 maxlength=25 class=tabmovtex><br><br></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 align=center cellspacing=0 cellpadding=0>");
    captura.document.writeln("<tr><td align=right><a href='javascript:ValidaForma(document.captura,1);'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
    captura.document.writeln("<td align=left><a href='javascript:ValidaForma(document.captura,2);'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("</form>");
    captura.document.writeln("</body>\n</html>");
    captura.focus();
    captura.document.captura.texto.focus();
}

function cuadroCapturaRespaldo(mensaje, titulo) {

    campoTexto = "";

    captura = window.open('', 'trainerWindow', 'width=380,height=170,toolbar=no,scrollbars=no,left=210,top=225');
    captura.document.open();
    captura.document.write("<html>");
    captura.document.writeln("<head>\n<title>MSG</title>\n");
    captura.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    captura.document.writeln("<script language='javaScript'>");
    captura.document.writeln("function ValidaForma(forma,boton)");
    captura.document.writeln(" {");
    captura.document.writeln("   if(boton==1)");
    captura.document.writeln("     {");
    captura.document.writeln("       if(forma.texto.value=='' && forma.texto.value.length<1) ");
    captura.document.writeln("          forma.texto.focus();");
    captura.document.writeln("       else");
    captura.document.writeln("        {");
    captura.document.writeln("          opener.campoTexto=forma.texto.value;");
    captura.document.writeln("         opener.respuesta=boton;");
    captura.document.writeln("         opener.continuaCaptura();");
    captura.document.writeln("         window.close();");
    captura.document.writeln("        }");
    captura.document.writeln("    }");
    captura.document.writeln("  else");
    captura.document.writeln("   {");
    captura.document.writeln("    opener.respuesta=boton;");
    captura.document.writeln("    opener.continuaCaptura();");
    captura.document.writeln("    window.close();");
    captura.document.writeln("   }");
    captura.document.writeln("}");
    captura.document.writeln("</script>");
    captura.document.writeln("</head>");
    captura.document.writeln("<body bgcolor='white'>");
    captura.document.writeln("<form enctype='multipart/form-data' name='captura' onSubmit='return ValidaForma(this,1);' method=post>");
    captura.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    captura.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 width=360 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=right width=50 rowspan=2><img src='" + cp + "pics/gic25020.gif' border=0></a></td>");
    captura.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br>");
    captura.document.writeln("</tr></td>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=center><input type=text name=texto size=30 class=tabmovtex><br><br></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 align=center cellspacing=0 cellpadding=0>");
    captura.document.writeln("<tr><td align=right><a href='javascript:ValidaForma(document.captura,1);'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
    captura.document.writeln("<td align=left><a href='javascript:ValidaForma(document.captura,2);'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("</form>");
    captura.document.writeln("</body>\n</html>");
    captura.focus();
}


function cuadroDeCaptura(mensaje, titulo) {

    campoTexto = "";


    captura = window.open('', 'trainerWindow', 'width=380,height=170,toolbar=no,scrollbars=no,left=210,top=225');
    captura.document.open();
    captura.document.write("<html>");
    captura.document.writeln("<head>\n<title>MSG</title>\n");
    captura.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    captura.document.writeln("<script language='javaScript'>");
    captura.document.writeln("function ValidaForma(forma,boton)");
    captura.document.writeln(" {");
    captura.document.writeln("   if(boton==1)");
    captura.document.writeln("       opener.campoTexto=forma.texto.value;");
    captura.document.writeln("  opener.respuesta=boton;");
    captura.document.writeln("    opener.ChesPrincipal.archivo_actual.value = forma.texto.value;");
    captura.document.writeln("  opener.ChesPrincipal.archivo_actual.focus();");
    captura.document.writeln("  window.close();");
    captura.document.writeln(" }");
    captura.document.writeln("</script>");
    captura.document.writeln("</head>");
    captura.document.writeln("<body bgcolor='white'>");
    captura.document.writeln("<% session.setAttribute('Enviado','no');%>");
    captura.document.writeln("<% out.println('hi mundo');%>");
    captura.document.writeln("<form enctype='multipart/form-data' name='captura' onSubmit='return ValidaForma(this,1);' method=post>");
    captura.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    captura.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 width=360 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    captura.document.writeln("<tr>");
    captura.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br>");
    captura.document.writeln("</td></tr>");
    captura.document.writeln("<tr><td class='tabmovtex1' align=center><input type=text name=texto size=30 class=tabmovtex><br><br></td></tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("<table border=0 align=center cellspacing=0 cellpadding=0>");
    captura.document.writeln("<tr><td align=right><a href='javascript:ValidaForma(document.captura,1);'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
    captura.document.writeln("</tr>");
    captura.document.writeln("</table>");
    captura.document.writeln("</form>");
    captura.document.writeln("</body>\n</html>");
    captura.focus();
    captura.document.captura.texto.focus();
}



function cuadroDialogoLupa(mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";

    if (tipo == 1) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    } else if (tipo == 2) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else {
        imagen = "gic25060.gif";
        titulo = "Error";
    }

    ventana = window.open('', 'trainerWindow', 'width=380,height=180,toolbar=no,scrollbars=no,left=210,top=225');
    ventana.document.open();
    ventana.document.write("<html>");
    ventana.document.writeln("<head>\n<title>" + titulo + "</title>\n");
    ventana.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    ventana.document.writeln("</head>");
    ventana.document.writeln("<body bgcolor='white'>");
    ventana.document.writeln("<form>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 width=360 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></a></td>");
    ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br><br>");
    ventana.document.writeln("</tr></td>");
    ventana.document.writeln("<tr><td class='tabmovtex1'>");
    ventana.document.writeln("</td></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
    if (tipo == 2) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=0;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    }
    ventana.document.writeln("</table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>\n</html>");
    ventana.focus();
}




function cuadroDialogoEspecial(mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";

    if (tipo == 1) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    } else if (tipo == 2) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else {
        imagen = "gic25060.gif";
        titulo = "Error";
    }

    ventana = window.open('', 'trainerWindow', 'width=380,height=190,toolbar=no,scrollbars=no,left=210,top=225');
    ventana.document.open();
    ventana.document.write("<html>");
    ventana.document.writeln("<head>\n<title>" + titulo + "</title>\n");
    ventana.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    ventana.document.writeln("</head>");
    ventana.document.writeln("<body bgcolor='white'>");
    ventana.document.writeln("<form>");
    ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 width=360 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></a></td>");
    ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br><br>");
    ventana.document.writeln("</tr></td>");
    ventana.document.writeln("<tr><td class='tabmovtex1'>");
    ventana.document.writeln("</td></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
    if (tipo == 2) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=0;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    }
    ventana.document.writeln("</table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>\n</html>");
    ventana.focus();
}

function cuadroDialogoEspecial2(mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";

    if (tipo == 1) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    } else if (tipo == 2) {
        imagen = "gic25050.gif";
        titulo = "Confirmaci&oacute;n";
    } else {
        imagen = "gic25060.gif";
        titulo = "Error";
    }

    ventana = window.open('', 'trainerWindow', 'width=480,height=320,toolbar=no,scrollbars=no,left=210,top=225');
    ventana.document.open();
    ventana.document.write("<html>");
    ventana.document.writeln("<head>\n<title>" + titulo + "</title>\n");
    ventana.document.writeln("<link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'>");
    ventana.document.writeln("</head>");
    ventana.document.writeln("<body bgcolor='white'>");
    ventana.document.writeln("<form>");
    ventana.document.writeln("<table border=0 width=90% class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 width=90% class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></a></td>");
    ventana.document.writeln("<td class='tabmovtex1' style='font-size:15px; text-align:justify' width=90%><br>" + mensaje + "<br><br>");
    ventana.document.writeln("</tr></td>");
    ventana.document.writeln("<tr><td class='tabmovtex1'>");
    ventana.document.writeln("</td></tr>");
    ventana.document.writeln("</table>");
    ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
    if (tipo == 2) {
        ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;window.close();opener.continua();'><img src='" + cp + "pics/gbo25280.gif' border=0></a></td>");
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='" + cp + "pics/gbo25190.gif' border=0></a></td></tr>");
    } else {
        ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=0;window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    }
    ventana.document.writeln("</table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>\n</html>");
    ventana.focus();
}

//function logout() {
//   ventana=window.open('/NASApp/enlaceMig/logout?cerrar=S','trainerWindow','width=580,height=350,toolbar=no,scrollbars=no,left=210,top=225');
//}

function cuadroCerrar(mensaje, tipo) {
    respuesta = 0;
    var titulo = "Error";
    var imagen = "gic25020.gif";

    if (tipo == 1) {
        imagen = "gic25020.gif";
        titulo = "Alerta";
    }
    ventana = window.open('', 'trainerWindow', 'width=380,height=150,toolbar=no,scrollbars=no,left=210,top=225');
    ventana.document.open();
    ventana.document.writeln("<html>");
    ventana.document.writeln("<head>");
    ventana.document.writeln("    <title>" + titulo + "</title>");
    ventana.document.writeln("    <link rel='stylesheet' href='/EnlaceMig/consultas.css' type='text/css'></link>");
    ventana.document.writeln("</head>");
    ventana.document.writeln("<body bgcolor='white'>");
    ventana.document.writeln("<form>");
    ventana.document.writeln("    <table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
    ventana.document.writeln("        <tr><th height=25 class='tittabdat' colspan=2>" + titulo + "</th></tr>");
    ventana.document.writeln("    </table>");
    ventana.document.writeln("    <table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
    ventana.document.writeln("        <tr><td class='tabmovtex1' align=right width=50><img src='" + cp + "pics/" + imagen + "' border=0></td>");
    ventana.document.writeln("            <td class='tabmovtex1' align=center width=300><br>" + mensaje + "<br><br></td>");
    ventana.document.writeln("        </tr>");
    ventana.document.writeln("        <tr><td class='tabmovtex1'></td></tr>");
    ventana.document.writeln("    </table>");
    ventana.document.writeln("    <table border=0 align=center cellspacing=6 cellpadding=0>");
    ventana.document.writeln("        <tr><td align=left><a href='javascript:window.close();'><img src='" + cp + "pics/gbo25200.gif' border=0></a></td></tr>");
    ventana.document.writeln("    </table>");
    ventana.document.writeln("</form>");
    ventana.document.writeln("</body>");
    ventana.document.writeln("</html>");
    ventana.focus();
    return ventana;
}