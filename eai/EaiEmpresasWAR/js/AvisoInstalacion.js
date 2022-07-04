Aviso = {
    inicio: function(){
        var mensaje = "";
        try {
        var huella = new Huella("ahnlab");
        if (SANTANDER.navegadorValido()) {
            if (!mkd25x_installed()) {
                mensaje = "NoInstalado";
            }
            else {
                mensaje = "Instalado";
            }
        }
        else {
            mensaje = "Invalido";
        }
        if (mensaje != "") {
            Aviso.creaMsg(mensaje);
        }
        }catch(e){
        }
    },
    creaMsg: function(msg){
        var div = document.createElement("div");
        var h3 = document.createElement("h3");
        var cerrar = document.createElement("a");
        var imgMstrr = document.createElement("img");
        var p = document.createElement("p");
        var cuerpo = document.getElementsByTagName("body")[0];
        var br1 = document.createElement("br");
        var br2 = document.createElement("br");
        var br3 = document.createElement("br");
        var txtAncla = document.createTextNode("Cerrar");
        if (msg == "Invalido") {
            div.setAttribute("id", "mensaje");
            var txtOs = document.createTextNode("Aviso: Para poder utilizar la herramienta de seguridad es necesario contar con sistema operativo Windows y los siguientes navegadores: ");
            var txtIe = document.createTextNode("Internet Explorer 6.0 o superior");
            var txtFx = document.createTextNode("Firefox 2.0 o superior");
           
        }
        try {
            if (msg == "Invalido") {
                div.setAttribute("id", "mensaje");
                cerrar.appendChild(txtAncla);
                cerrar.setAttribute("id", "anclaCerrar");
                p.appendChild(txtOs);
                p.appendChild(br1);
                p.appendChild(txtIe);
                p.appendChild(br2);
                p.appendChild(txtFx);
                div.appendChild(p);
                cerrar.onclick = MENSAJE.cerrar;
            }
            else 
                if (msg == "Instalado") {
                    div.setAttribute("id", "instalado");
                    imgMstrr.setAttribute("src", "./pics/anti_intrusos_ok.gif");
                    imgMstrr.setAttribute("alt", "M\u00e1s Informaci\u00f3");
                    cerrar.appendChild(imgMstrr);
                    cerrar.setAttribute("id", "anclaCerrar");
	       	    cerrar.setAttribute("href", "http://www.santander.com.mx/seguridad_nvo/seguridad.html");
                    cerrar.setAttribute("target", "_blank");
                }
                else 
                    if (msg == "NoInstalado") {
                    	var valor = "";
                    	try{
                    		 valor = document.getElementById("pagID").value;
                    		
                    	}catch(e){
                    		
                    	}
                    	if(valor != "renovarCon"){
                			
                    		div.setAttribute("id", "noinstalado");
	                        imgMstrr.setAttribute("src", "./pics/anti_intrusos_no.gif");
	                        imgMstrr.setAttribute("alt", "Instalar");
	                        cerrar.appendChild(imgMstrr);
	                        cerrar.setAttribute("id", "anclaCerrar");
	                        cerrar.setAttribute("href", "http://www.santander.com.mx/publishapp/servlet/GestionFront?comando=5&idsite=10159322174320&idcnt=11901476020030");
	                    	cerrar.setAttribute("target", "_blank");
                    	}
                    }
            div.appendChild(cerrar);
            cuerpo.appendChild(div);
            
        } 
        catch (e) {
            alert("Ocurrio un Error: "+e.message);
        }
        
    }
};

