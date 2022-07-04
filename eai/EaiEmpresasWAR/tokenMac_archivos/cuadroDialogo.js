var respuesta=0;
var ventanaActiva=1;
var campoTexto ="";
var nh ="";
var pagBack = 0;
var opcNumber = 0;



function cuadroDialogo(path, mensaje, tipo )
{
	respuesta=0;
	var titulo="Error";
	var imagen="gic25020.gif";
	var aceptar = "gbo25280.gif";
	if(tipo>9)imagen="gic25060.gif";
	ventana=window.open('','trainerWindow','width=380,height=165,toolbar=no,scrollbars=no,left=210,top=225');
	ventana.document.open();
	
	/*<VC autor ="ESC" fecha ="09/04/2008" descripcion ="validar que se muestren las imagenes con  juncion y sin juncion" OT ="ALMACHEQ"*/
	var pname = ventana.document.location.pathname;
	var indice = pname.indexOf(path);	
	var junction = pname.substring(0,indice);
	//alert(pname);
	//alert(junction);
	if(junction.length > 0) 
		path = junction +path;	
	//alert(path);
	/*</VC*/
	ventana.document.write("<html>");
	ventana.document.writeln("<head>\n<title>MSG</title>\n");
		ventana.document.writeln("<link rel='stylesheet' href='" + path + "/css/consultas.css' type='text/css'>");
	ventana.document.writeln("</head>");
	ventana.document.writeln("<body bgcolor='white'>");
	ventana.document.writeln("<form name='captura'>");
	ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
	ventana.document.writeln("</table>");
	ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
	ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + path + "/img/"+imagen+"' border=0></a></td>");
	ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>"+mensaje+"<br><br>");
	ventana.document.writeln("</tr></td>");
	ventana.document.writeln("<tr><td class='tabmovtex1'>");
	ventana.document.writeln("</td></tr>");
	ventana.document.writeln("<tr><td>");
	ventana.document.writeln("<tr><td colspan='2' align='center' style='cursor: pointer;'>");
	ventana.document.writeln("<img src='" + path + "/img/"+aceptar+"' onclick='window.close()' >");
	ventana.document.writeln("</td></tr>");
	ventana.document.writeln("</table>");
	ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
	ventana.document.writeln("</table>");
	ventana.document.writeln("</form>");
	ventana.document.writeln("</body>\n</html>");
	ventana.focus();
}


function logout() {
	//ventana=window.open('/AdminPwdServlet?module=MOD_LOGOUT&method=MET_CERRAR','trainerWindow','width=580,height=350,toolbar=no,scrollbars=no,left=210,top=225');
	//window.document.location='/NASApp/enlaceMig/logout?cerrar=S';
	// window.open('AdminPwdServlet?module=VAL_MOD_FIN_SESION&method=FINALIZA&cerrar=S','trainerWindow','width=580,height=350,toolbar=no,scrollbars=no,left=210,top=225');
	window.open('../AdminPwdServlet?module=VAL_MOD_FIN_SESION&method=FINALIZA&cerrar=S','trainerWindow','width=580,height=350,toolbar=no,scrollbars=no,left=210,top=225');
}


function cuadroDialogoEspecial2(path, mensaje, tipo )
{
	respuesta=0;
	var titulo="Error";
	var imagen="gic25020.gif";
	var aceptar = "gbo25280.gif";

	if ( tipo == 1 ) // Alerta
	{
		imagen="gic25020.gif"; // signo de admiraci?n
		titulo="Alerta";
	}
	else if ( tipo== 2) // Confirmaci?n
	{
		imagen ="gic25050.gif"; // signo de interrogaci?n
		titulo ="Confirmaci&oacute;n";
	}
	else // Error
	{
		imagen="gic25060.gif"; // una espantosa X
		titulo="Error";
	}

	ventana=window.open('','trainerWindow','width=480,height=320,toolbar=no,scrollbars=no,left=210,top=225');
	ventana.document.open();
	
	/*<VC autor ="ESC" fecha ="09/04/2008" descripcion ="validar que se muestren las imagenes con  juncion y sin juncion" OT ="ALMACHEQ"*/
	var pname = ventana.document.location.pathname;
	var indice = pname.indexOf(path);	
	var junction = pname.substring(0,indice);
	//alert(pname);
	//alert(junction);
	if(junction.length > 0) 
		path = junction +path;	
	//alert(path);
	/*</VC*/
	
	ventana.document.write("<html>");
	ventana.document.writeln("<head>\n<title>"+titulo+"</title>\n");
	ventana.document.writeln("<link rel='stylesheet' href='" + path + "/css/consultas.css' type='text/css'>");
	ventana.document.writeln("</head>");
	ventana.document.writeln("<body bgcolor='white'>");
	ventana.document.writeln("<form>");
	ventana.document.writeln("<table border=0 width=90% class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
	ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>"+ titulo + "</th></tr>");
	ventana.document.writeln("</table>");
	ventana.document.writeln("<table border=0 width=90% class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
	ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='" + path + "/img/"+imagen+"' border=0></a></td>");
	ventana.document.writeln("<td class='tabmovtex1' style='font-size:15px; text-align:justify' width=90%><br>"+mensaje+"<br><br>");
	ventana.document.writeln("</tr></td>");
	ventana.document.writeln("<tr><td class='tabmovtex1'>");
	ventana.document.writeln("</td></tr>");
	ventana.document.writeln("</table>");
	ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
	if (tipo == 2) // Solo para confirmaci?n : aceptar y cancelar
	{
		ventana.document.writeln("<tr><td align=right><a href='javascript:opener.ventanaActiva=0;opener.respuesta=1;window.close();opener.continua();'><img src='/gifs/EnlaceMig/gbo25280.gif' border=0></a></td>");
		ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=2;opener.continua();window.close();'><img src='/gifs/EnlaceMig/gbo25190.gif' border=0></a></td></tr>");
	}
	else // bot?n Cerrar
	{
		ventana.document.writeln("<td align=left><a href='javascript:opener.ventanaActiva=0;opener.respuesta=0;window.close();'><img src='" + path + "/img/"+aceptar+"' onclick='window.close()' ></a></td></tr>");
	}
	ventana.document.writeln("</table>");
	ventana.document.writeln("</form>");
	ventana.document.writeln("</body>\n</html>");
	ventana.focus();
}



