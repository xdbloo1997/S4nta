function presentaHoraFecha(){
    var fechaActual = new Date();
    var fechaSpan = document.getElementById("fecha");
    var horaSpan = document.getElementById("hora");
    if (fechaActual.getMinutes() < 10) {
        horaSpan.innerHTML = fechaActual.getHours() + ":0" + fechaActual.getMinutes();
    }
    else {
        horaSpan.innerHTML = fechaActual.getHours() + ":" + fechaActual.getMinutes();
    }
    fechaSpan.innerHTML = construirFecha();
}

function construirFecha(){
    var dias = new Array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");
    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var fecha = new Date();
    var dia = fecha.getDay();
    var mes = fecha.getMonth();
    var fechaStr = "";
    fechaStr = dias[dia] + " " + fecha.getDate() + " de " + meses[mes] + " del " +
    fecha.getFullYear();
    return fechaStr;
}

function validacionDatos(){
    var forma = document.forms[0];
    if (mkd25x_installed()) {
        if (mkd25x_loaded()) {
            mkd25x_copy_to_form(forma);
        }
    }
    if (document.getElementById("MKD25X")) {
        document.getElementById("MKD25X").SkipVerify(1);
    }
    regreso = true;
    if (limpia(forma.IdUsernameTxt.value) != "") {
        var usrw = forma.IdUsernameTxt.value;
        var usuarioStr = "";
        if (forma.IdUsernameTxt.value.length == 8) {
            usuarioStr = regresaUsuario(usrw);
        }
        else {
            forma.IdUsernameTxt.value = cerosIzquierda(forma.IdUsernameTxt.value);
            usuarioStr = cerosIzquierda2(usrw);
        }

        if (!isInteger(forma.IdUsernameTxt.value)) {
        	var btn=$("#btnPress").val();
        	if(btn=="1"){
        		$("#btnPress").val("0");
        		cuadroDialogo("El C&oacute;digo de Cliente Debe Ser Num&eacute;rico para acceder al Modulo de Administraci&oacute;n Token.", 1);
        	}
        	if(btn=="2"){
        		$("#btnPress").val("0");
        		cuadroDialogo("El C&oacute;digo de Cliente Debe Ser Num&eacute;rico para acceder al Modulo de Administraci&oacute;n Contrase&ntilde;a.", 1);
        	}
        	if(btn =="0"|| btn==undefined){
        	cuadroDialogo("El C&oacute;digo de Cliente Debe Ser Num&eacute;rico.", 1);
        	}
            //forma.Idsubmit.disabled=false;
            return false;
        }

    }
    else {
        cuadroDialogo("Debe introducir su C&oacute;digo de cliente.", 2);
        //forma.Idsubmit.disabled=false;
        return false;
    }
    if (document.getElementById("MKD25X")) {
        document.getElementById("MKD25X").SkipVerify(0);
    }
    return regreso;
}

function limpia(valor){
    return valor.replace(/^s+|s+$/g, '');
}

function isInteger(s){
    var i

    for (i = 0; i < s.length; i++) {
        var c = s.charAt(i)
        if (!isDigit(c))
            return false
    }
    return true
}

function isDigit(c){
    return ((c >= "0") && (c <= "9"))
}

function cerosIzquierda(codClient){
    var cad = "";
    if (codClient.length <= 7) {
        limiteSuperior = 8 - codClient.length;
        for (i = 0; i < limiteSuperior; i++) {
            cad += "0";
        }
    }
    return cad + codClient;
}

function cerosIzquierda2(codClient){
    var cad = "";
    if (codClient.length <= 6) {
        limiteSuperior = 7 - codClient.length;
        for (i = 0; i < limiteSuperior; i++) {
            cad += "0";
        }
    }
    return cad + codClient;
}



function obtenerRuta(){
    var parametros = window.location.search.substring(1);
    if (parametros != "") {
        var parametrosArray = parametros.split("&");
        var valoresParamArray = new Array();
        for (i = 0; i < parametrosArray.length; i++) {
            valoresParamArray[i] = parametrosArray[i].split("=");
        }
        return unescape(valoresParamArray[0][1]);
    }
    else {
        return "/enlaceMig/EnlaceMig";
    }


}

function obtenerDescripcion(){
    var parametros = window.location.search.substring(1);
    if (parametros != "") {
        var parametrosArray = parametros.split("&");
        var valoresParamArray = new Array();
        for (i = 0; i < parametrosArray.length; i++) {
            valoresParamArray[i] = parametrosArray[i].split("=");
        }
        return unescape(valoresParamArray[1][1]);
    }
    else {
        return "Enlace Banca Electr&oacute;nica";
    }
}

function regresaUsuario(usuario){
    var longitud = usuario.length;
    var usua = "";
    if (longitud == 8) {
        var identificado = usuario.substring(0, 2);
        var user = usuario.substring(2, 8);
        var entero = parseInt(identificado, 10);

        if(entero >= 30)
        	return usuario;

        switch (entero) {
            case 10:
                usuario = 'A' + user;
                break;
            case 11:
                usuario = 'B' + user;
                break;
            case 12:
                usuario = 'G' + user;
                break;
            case 13:
                usuario = 'H' + user;
                break;
            case 14:
                usuario = 'I' + user;
                break;
            case 15:
                usuario = 'J' + user;
                break;
            case 16:
                usuario = 'K' + user;
                break;
            case 17:
                usuario = 'L' + user;
                break;
            case 18:
                usuario = 'M' + user;
                break;
            case 19:
                usuario = 'N' + user;
                break;
            case 20:
                usuario = 'O' + user;
                break;
            case 21:
                usuario = 'P' + user;
                break;
            case 22:
                usuario = 'Q' + user;
                break;
            case 23:
                usuario = 'R' + user;
                break;
            case 24:
                usuario = 'T' + user;
                break;
            case 25:
                usuario = 'U' + user;
                break;
            case 26:
                usuario = 'V' + user;
                break;
            case 27:
                usuario = 'W' + user;
                break;
            case 28:
                usuario = 'X' + user;
                break;
            case 29:
                usuario = 'Y' + user;
                break;
            case 0:
                usuario = usuario.substring(1, 8);
                break;
            default:
                usuario = usuario.substring(1, 8);
                break;
        }
    }
    else {
        usua = usuario;
    }
    return usuario;
}
