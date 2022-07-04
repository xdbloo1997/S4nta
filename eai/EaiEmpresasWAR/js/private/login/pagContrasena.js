/**
 * Isban Mexico
 *   Clase: pagContrasena.js
 *   Descripción: Archivo JS para la pantalla de pagLoginContrasena.jsp
 *
 *   Control de Cambios:
 *   1.0 Dic 26, 2012 bvb - Creacion
 */

var ID_FORMA = "formaPrincipal";
var URL_DESTINO = "validarContrasena.do";
var URL_LOGOUT = "usrLogout.do";

//Funcion ready() de jQuery
$(function() {
	
	$("#IdSubmit").click(function() {
		mandarDatos();
	});
	
	$("#IdCancelar").click(function() {
		limpiaDatos();
	});
	
	$("#finalizar").click(function(){
		mandarDatosL();
	});
	
});

function mandarDatos() {
	var token = $("#token").val();
	if(token == "true"){
		var datosValidos = validacionDatos();
		if(datosValidos) {
			var datosValidosC = validacionDatosC();
			if(datosValidosC) {
				ir_a(ID_FORMA, URL_DESTINO);
			}			
		}
	}else{
		var datosValidosC = validacionDatosC();
		if(datosValidosC) {
			
			ir_a(ID_FORMA, URL_DESTINO);
			
		}
	}
}

function mandarDatosIE6() {
	var token = $("#token").val();
	if(token == "true"){
		var datosValidos = validacionDatos();
		if(datosValidos) {
			var datosValidosC = validacionDatosC();
			if(datosValidosC) {
				return true;
			}			
		}
	}else{
		var datosValidosC = validacionDatosC();
		if(datosValidosC) {
			
			return true;
			
		}
	}
	return false;
}

function mandarDatosL() {
	ir_a(ID_FORMA, URL_LOGOUT);

}

function limpiaDatos() {
	$("#IdPasswordTxt").val("");
}

function validacionDatosC(){
    var forma = document.forms[0];
    if (mkd25x_installed()) {
        if (mkd25x_loaded()) {
            mkd25x_copy_to_form(forma);
        }
    }
    if (document.getElementById("MKD25X")) {
        document.getElementById("MKD25X").SkipVerify(1);
    }
    regreso = false;
    if (limpia(forma.txtPassword.value) != "") {
        
        forma.password.value = forma.codigoCliente.value + forma.txtPassword.value;
        regreso = true;
    }
    else {
        cuadroDialogo(mensajes['CERR000'], 1);
        $("#IdSubmit").removeAttr('disabled');
    }
    if (document.getElementById("MKD25X")) {
        document.getElementById("MKD25X").SkipVerify(0);
    }
    return regreso;
}