/**
 * Isban Mexico
 *   Clase: bitacoraAdministrativa.js
 *   Descripci�n: Archivo JS para la pantalla de bitcora Administrativa.
 *
 *   Control de Cambios:
 *   1.0 Mar 15, 2012 oacosta - Creacion
 */

var ID_FORMA = "formaPrincipal";
var URL_DESTINO = "validarClienteinicio.do";
var URL_CONTRASENA = "validarContrasena.do";
var URL_AVISO_LEGAL = "avisoLegal.do";
var URL_VALIDAR_CLIENTE = "validarClienteGeneral.do";
//Funcion ready() de jQuery
$(window).load(function(){
	function getParameter(parameter){
		// Obtiene la cadena completa de URL
		var url = location.href;
		/* Obtiene la posicion donde se encuentra el signo ?, 
		ahi es donde empiezan los parametros */
		var index = url.indexOf("?");
		/* Obtiene la posicion donde termina el nombre del parametro
		e inicia el signo = */
		index = url.indexOf(parameter,index) + parameter.length;
		/* Verifica que efectivamente el valor en la posicion actual 
		es el signo = */ 
		if (url.charAt(index) == "="){
		// Obtiene el valor del parametro
		var result = url.indexOf("&",index);
		if (result == -1){result=url.length;};
		// Despliega el valor del parametro
		return url.substring(index + 1 ,result);
		//alert(url.substring(index + 1,result));
		}
	}
	var token=getParameter('token');
	if(""!== token && null != token){
		$('#IdPasswordTxt').focus();
	}
});
$(function() {
	var urlToken = $("#urlToken").val();
	var token=$("#IdUsernameTxt").val();
	if(urlToken != null && urlToken != '' && urlToken == 'true'){
		window.location = "/acceso/EnlaceMig/indexToken.html?plantilla=11&token="+token;
		PANTALLA_TOKEN = true;
	}
	$("#avisoLegal").click(function(){
		ir_a(ID_FORMA, URL_AVISO_LEGAL);
	});
	
	$("#IdSubmit").click(function() {
		$("#btnPress").val("0");
	});

	$("#administracionToken").click(function() {
		$("#btnPress").val("1");
		document.getElementById("paginaReq").value="1";
		var cod=document.getElementById("IdUsernameTxt").value;
		if(cod.length == 0){
			cuadroDialogo(mensajes['ERRUSUADMT'], 1);
		}else{
			ir_a(ID_FORMA,URL_VALIDAR_CLIENTE);
		}
		//window.location = "urlToken.do";
	});

	$("#administracionContra").click(function() {
		$("#btnPress").val("2");
		document.getElementById("paginaReq").value="2";
		var cod=document.getElementById("IdUsernameTxt").value;
		if(cod.length == 0){
			cuadroDialogo(mensajes['ERRUSUADMCNT'], 1);
		}else{
			ir_a(ID_FORMA,URL_VALIDAR_CLIENTE);
		}

		//window.location = "/mac/MAC/jsp/index.html";
	});
	$("form").keypress(function(e) {
		  if (e.which == 13) {
			  $('#IdSubmit').attr('disabled', 'disabled');
			  mandarDatos();
			  return false;
		  }
	});
	tokenInicio();

});

function mandarDatos() {
	var token = $("#token").val();
	if(token == "true"){
		var datosValidos = validacionDatos();
		if(datosValidos) {
			var datosValidosC = validacionDatosC();
			if(datosValidosC) {
				$("#usrAut").val(regresaUsuario($("#IdUsernameTxt").val()));
				ir_a(ID_FORMA, URL_CONTRASENA);
			}
		}
	}else{
		var datosValidos = validacionDatos();
		if(datosValidos) {
			$("#usrAut").val(regresaUsuario($("#IdUsernameTxt").val()));
			ir_a(ID_FORMA, URL_DESTINO);
		}
	}
	$('#IdSubmit').attr('disabled', false);
}

function mandarDatosIE6() {
	var token = $("#token").val();
	if(token == "true"){
		var jIdForm = "#" + ID_FORMA;
		$(jIdForm).attr('action', URL_CONTRASENA);
		var datosValidos = validacionDatos();
		if(datosValidos) {
			var datosValidosC = validacionDatosC();
			if(datosValidosC) {
				$("#usrAut").val(regresaUsuario($("#IdUsernameTxt").val()));
				return true;
			}
		}
	}else{
		var datosValidos = validacionDatos();
		if(datosValidos) {

			$("#usrAut").val(regresaUsuario($("#IdUsernameTxt").val()));
			return true;
		}
	}
	return false;
}

function regresoInicio(){
  window.location="inicio.do";
  //window.location.href;
}

function tokenInicio() {
 	var legend = document.getElementById("root-tplSeguridad-ICabeceraPrincipal-headingTituloPrincipal");
 	var textCabezeraSecundaria = document.getElementById("root-tplSeguridad-cabeceraSecundaria-seguridadCabSuperiorSecundariaSubtitulo");
 	var imgteer = document.getElementById("root-tplSeguridad-seguridadBody");
 	var admonTokenBotones = document.getElementById("root-tplSeguridad-IFooter-pieInferiorBotoneraDerecha");
  	presentaHoraFecha();
 	var textoContrasena = document.getElementById("IdPassword");
 	var campoContrasena = document.getElementById("IdPasswordTxt");
 	var anclaToken = document.getElementById("administracionToken");
 	var anclaContra = document.getElementById("administracionContra");
 	//
    // document.getElementById("token").value = "true";
 	//
 	var token = document.getElementById("token");
	var urlPathName = window.location.pathname;
	var querystring =  window.location.search.substring(1);
	if(token.value == "true" || (querystring.indexOf("plantilla=11") != -1)) {
     	campoContrasena.className = "col-md-12 col-lg-12 form-control";
     	textoContrasena.className = "visible";
     	anclaToken.className = "oculto";
     	anclaContra.className = "oculto";
      	legend.innerHTML = "Bienvenido a Administraci&oacute;n de Token";
      	token.value = "true";
 	}
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
        forma.Idsubmit.disabled=false;
    }
    if (document.getElementById("MKD25X")) {
        document.getElementById("MKD25X").SkipVerify(0);
    }
    return regreso;
}
function submitForm(){
	/*var res = document.getElementById("formaPrincipal").onsubmit();
	if(res){
		document.getElementById("formaPrincipal").submit();
	}*/

	alert();
}