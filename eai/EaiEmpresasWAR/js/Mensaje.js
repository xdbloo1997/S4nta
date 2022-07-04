MENSAJE = {
    creada: false,
    crearVentana: function(msg){
    
        if (!MENSAJE.creada) {
            MENSAJE.creada = true;
            var div = document.createElement("div");
            var h3 = document.createElement("h3");
            var cerrar = document.createElement("a");
            var p = document.createElement("p");
            var cuerpo = document.getElementsByTagName("body")[0];
            var br1 = document.createElement("br");
            var br2 = document.createElement("br");
            var br3 = document.createElement("br");
            if (msg == "Instalado") {
                var txtOs = document.createTextNode("Esta PC Se encuentra Protegida");
                var txtIe = document.createTextNode("");
                var txtFx = document.createTextNode("");
                var txtPr = document.createTextNode("");
                var txtH3 = document.createTextNode("");
            }else if(msg == "NoInstalado"){
				var txtOs = document.createTextNode("Esta PC No Se encuentra Protegida");
                var txtIe = document.createTextNode("");
                var txtFx = document.createTextNode("");
                var txtPr = document.createTextNode("");
                var txtH3 = document.createTextNode("");
			}
            else {
                var txtOs = document.createTextNode("Aviso: Para poder utilizar la herramienta de seguridad es necesario contar con sistema operativo Windows y los siguientes navegadores: ");
            var txtIe = document.createTextNode("Internet Explorer 6.0 o superior");
                var txtCerrar = document.createTextNode("Cerrar");
            }
            try {
            
                cerrar.onclick = function(){
                    return MENSAJE.cerrar();
                }
                cerrar.setAttribute("id", "anclaCerrar");
                cerrar.setAttribute("href", "exit.html");
                cerrar.appendChild(txtCerrar);
                div.setAttribute("id", "mensaje");
                p.appendChild(txtOs);
                p.appendChild(br1);
                p.appendChild(txtIe);
                p.appendChild(br2);
                div.appendChild(p);
                div.appendChild(cerrar);
                cuerpo.appendChild(div);
            } 
            catch (e) {
                alert("Ocurrio un Error :: " + e.message);
            }
        }
    },
    cerrar: function(){
        var continuar = false;
        MENSAJE.creada = false;
        try {
            var cuerpo = document.getElementsByTagName("body")[0];
            var div = document.getElementById("mensaje");
            cuerpo.removeChild(div);
        } 
        catch (e) {
            alert("Ocurrio Un Error");
        }
        return continuar;
    }
}
