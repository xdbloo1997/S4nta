var secs = 0;
var timerID = null;
var timerRunning = false;
var delay = 1000;
var ventana;

function InitializeTimer(timeSession){
    secs = timeSession;
    StopTheClock();
    StartTheTimer();
}

function StopTheClock(){
    if(timerRunning){
        clearTimeout(timerID);
    	timerRunning = false;
    }
}
	
function StartTheTimer(){
    if (secs==120){
    	var titulo="Aviso";
    	var imagen="gic25020.gif";
    	var mensaje = "Su sesi\363n terminar\341 en 2 minutos, para continuar es necesario que realice alguna operaci\363n.";
    	var cp = contexto;
    	try{
			ventana=window.open('','trainerWindow','width=380,height=150,toolbar=no,scrollbars=no,left=210,top=225');
			ventana.document.open();
			ventana.document.write("<html>");
			ventana.document.writeln("<head>\n<title>"+titulo+"</title>\n");
			ventana.document.writeln("<link rel='stylesheet' href='./css/consultas.css' type='text/css'>");
			ventana.document.writeln("</head>");
			ventana.document.writeln("<body bgcolor='white'>");	
			ventana.document.writeln("<form>");
			ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=3 cellpadding=0>");
			ventana.document.writeln("<tr><th height=25 class='tittabdat' colspan=2>"+ titulo + "</th></tr>");
			ventana.document.writeln("</table>");
			ventana.document.writeln("<table border=0 width=365 class='textabdatcla' align=center cellspacing=0 cellpadding=1>");
			ventana.document.writeln("<tr><td class='tabmovtex1' align=right width=50><img src='"+cp+"/pics/"+imagen+"' border=0></a></td>");
			ventana.document.writeln("<td class='tabmovtex1' align=center width=300><br>"+mensaje+"<br><br>");
			ventana.document.writeln("</tr></td>");
			ventana.document.writeln("<tr><td class='tabmovtex1'>");
			ventana.document.writeln("</td></tr>");
			ventana.document.writeln("</table>");
			ventana.document.writeln("<table border=0 align=center cellspacing=6 cellpadding=0>");
			ventana.document.writeln("<td align=left><a href='javascript:window.close();opener.ventanaActiva=0;opener.respuesta=0;'><img src='"+cp+"/pics/gbo25200.gif' border=0></a></td></tr>");
			ventana.document.writeln("</table>");
			ventana.document.writeln("</form>");
			ventana.document.writeln("</body>\n</html>");
			ventana.focus();
    	}catch(e){}
    }

    if(secs==0){
		StopTheClock();
		try{
			ventana.close();
		}catch(e){
			
		}
		window.location = "usrLogout.do";
    }else{
        secs = secs - 1;
        timerRunning = true;
        timerID = self.setTimeout("StartTheTimer()", delay);
    }
}