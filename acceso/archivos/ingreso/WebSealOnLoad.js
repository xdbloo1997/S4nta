var nombrewebseal=window.location.host,altaswebseal=nombrewebseal,cadVariables="",arrVariables="",yaSeEnvio=!1,acceso="",usuario="false",servicio="n",tarjeta="",entrada="",cuenta="",echeque="false",ech_empresa="",ech_numero_convenio="",ech_referencia="",ech_concepto="",ech_importe="",ech_fecha="",ech_fecha_prog="",numeroPoliza="",pagoSubsecuente="",admonConvenios="",buzon="",admonBanners="",sat="false",anual="false",valida_campos="true",pcol="",vida_bancomer="",nvoportal="",Mundo_Tarjeta="",ntogrup=
"",hipotecario="",TPwidth="",TPheight="",portalsat="false",cloud="false",maxTarjeta,protocol=void 0!=window.location.protocol?window.location.protocol:"https";protocol=protocol.replace(":","");
function onWebSealLoad(){cadVariables=location.search.substring(1);arrVariables=cadVariables.split("&");if(""!=arrVariables)for(i=0;i<arrVariables.length;i++)arrVariableActual=arrVariables[i].split("="),isNaN(arrVariableActual[1])?window[arrVariableActual[0]]=unescape(arrVariableActual[1]):window[arrVariableActual[0]]=arrVariableActual[1];""!=tarjeta&&(tarjeta=-1==tarjeta.indexOf("AB")?tarjeta:enmascara(tarjeta));""!=cuenta&&(cuenta=-1==cuenta.indexOf("AB")?cuenta:enmascara(cuenta));""==tarjeta&&
(tarjeta=MascaraPublica(ntogrup));11==tarjeta.length&&(tarjeta=tarjeta.substring(0,8)+"-"+tarjeta.substring(8));maxTarjeta=10>tarjeta.length||21<tarjeta.length?16:tarjeta.length;"Netscape"==navigator.appName?(window.captureEvents(Event.KEYPRESS),window.onKeyPress=netscapeKeyPress):document.onKeyPress=microsoftKeyPress;addStyleSheets();window.addEventListener("load",function(){document.getElementsByTagName("BODY")[0].style.display="block"})}
function isSupportedCloud(){return"true"===portalsat||"true"===sat||"resp"===nvoportal||"true"===hipotecario}
function addStyleSheets(){if(isCoronitas()&&isSupportedCloud())document.head.appendChild(createStyleSheet("style_crown.css",!1)),document.head.appendChild(createStyleSheet("styles.css",!1));else{var a="tablas.css";"tdc01"==acceso?a="tablas_walmart.css":"tdc02"==acceso?a="tablas_soriana.css":"tdc03"==acceso?a="tablas_heb.css":"tdc04"==acceso?a="tablas_chedraui.css":"tdc05"==acceso?a="tablas_suburbia.css":"tdc06"==acceso?a="tablas_honda.css":"tdc07"==acceso&&(a="tablas_sams.css");document.head.appendChild(createStyleSheet("ban_styles.css",
!1));document.head.appendChild(createStyleSheet(a,!0))}}function createStyleSheet(a,b){var d=document.createElement("link");d.rel="stylesheet";d.type="text/css";var c="";"true"==window.testDevelop&&(c=location.pathname.substring(0,location.pathname.lastIndexOf("/")));d.href=protocol+"://"+location.host+c+(b?"/images/":"/estilos/")+a;return d}
function enmascara(a){var b=0;var d=a.split("AB");a=d[0];var c=d[1];var e=d[2];if(0<e.length){do e+=e;while(e.length<=a.length);for(d=1;d<=a.length/3;d++){var f=parseInt(a.substring(3*d-3,3*d))-parseInt(e.substring(d-1,1*d))-100;var g=g+""+String.fromCharCode(f);b=(b+f)%256}}return b!=c?(alert("N\u00famero inv\u00e1lido"),top.location.href="https://www.bbva.mx",!1):g=g.replace("undefined","")}
function MascaraPublica(a){if(1>a.length)return"";var b=["amIRXY".split(""),"QnbAW1".split(""),"EPyoc7".split(""),"rdFpe6".split(""),"DOqfJ2".split(""),"gszLV5".split(""),"thBSU4".split(""),"ijuHk3".split(""),"NKCvT9".split(""),"lwMGxZ".split("")],d="";for(i=0;i<a.length;i++){var c=a.substr(i,1);var e=!1;for(j=0;j<b.length;j++){for(k=0;k<b[j].length;k++)if(c==b[j][k]){d+=j+"";e=!0;break}if(e)break}e||(d+=c)}return d}
function configurar(){-1==cadVariables.indexOf("servicio")&&window.location.replace("https://www.bbva.mx")}function enviarAdmon(){if(yaSeEnvio)return!1;document.forms[0].username2.value=document.forms[0].username2.value.toUpperCase();document.forms[0].username.value=document.forms[0].username2.value;return yaSeEnvio=!0}
function VerificaDatosEntrada(){if(yaSeEnvio)return!1;var a=!0,b=!1,d=document.forms[0].password.value,c="Estimado cliente:\n\n",e=document.forms[0].username2.value,f=0,g=""!=acceso?"cr\u00e9dito":"d\u00e9bito";if("true"==valida_campos){if(0==e.length)a=!1,c+="Es necesario introducir el n\u00famero de tarjeta de "+g+" (16 d\u00edgitos) ",b=!0;else if(16>e.length&&12<e.length)alert("Estimado cliente:\nEl n\u00famero de tu tarjeta de "+g+" debe ser de 16 d\u00edgitos"),a=!1;else if(12>e.length)alert("Estimado cliente:\nEl n\u00famero de servicio debe ser de 12 d\u00edgitos"),
a=!1;else{for(var h=0;h<e.length;h++)-1!="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(e.charAt(h))&&f++;"-"==e.charAt(8)&&f++;f!=e.length&&(a=!1,c+="El n\u00famero de tu tarjeta de "+g+" debe ser de 16 d\u00edgitos\n")}0==d.length?(c=b?c+"y la clave de acceso":c+"Es necesario introducir la clave de acceso",a=!1):4>d.length&&(c+="La clave de acceso debe ser de 4 a 10 caracteres",a=!1)}b=document.forms[0].username2.value;"-"==b.charAt(8)&&(b=b.substring(0,8)+b.substring(9));
a?document.forms[0].username.value="b"!=servicio?b+document.forms[0].nombre.value:b:alert(c);return yaSeEnvio=a}
function VerificaDatosEntradaCheque(){if(yaSeEnvio)return!1;var a=!0,b=document.forms[0].password.value,d="Estimado cliente:\n\n",c=document.forms[0].username2.value,e=0,f=""!=acceso?"cr\u00e9dito":"d\u00e9bito";if("true"==valida_campos){if(0==c.length)return a=!1,showError("Estimado Cliente: Introduzca el n&uacute;mero de tarjeta o celular de "+f+" (16 d\u00edgitos) ",document.forms[0].username2),a;if(10>c.length||12>c.length&&10<c.length)return showError("Estimado Cliente: El n&uacute;mero de servicio debe ser de 12 d\u00edgitos",
document.forms[0].username2),!1;if(16>c.length&&12<c.length)return showError("Estimado Cliente: El n&uacute;mero de su tarjeta de "+f+" debe ser de 16 d\u00edgitos",document.forms[0].username2),!1;for(var g=0;g<c.length;g++)-1!="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(c.charAt(g))&&e++;"-"==c.charAt(8)&&e++;e!=c.length&&(a=!1,d+="El n\u00famero de tu tarjeta de "+f+" debe ser de 16 d\u00edgitos\n");0==b.length?(d+="Es necesario introducir la clave de acceso",a=!1):
4>b.length&&(d+="La clave de acceso debe ser de 4 a 10 caracteres",a=!1)}b=document.forms[0].username2.value;"-"==b.charAt(8)&&(b=b.substring(0,8)+b.substring(9));a?document.forms[0].username.value="b"!=servicio?b+document.forms[0].nombre.value:b:alert(d);10==c.length&&(document.forms[0].username.value=b);return yaSeEnvio=a}function DesbloqueoHipo(){window.open("https://"+location.host+"/nhhpp_mx_web/AtpnLogon","_blank","scrollbars=no,resizable=yes,status=yes,width=750,height=500,left=5,top=5")}
function VerificaDatosEntradaHipo(){if(yaSeEnvio)return!1;var a=!0,b=!1,d=document.forms[0].password.value,c="Estimado Cliente:\n\n",e=document.forms[0].username2.value,f=0;if("true"==valida_campos){if(0==e.length)a=!1,c+="Es necesario introducir el n\u00famero de cr\u00e9dito",b=!0;else if(20!=e.length)alert("Estimado cliente:\nEl n\u00famero de tu cr\u00e9dito debe ser de 20 d\u00edgitos"),a=!1;else{for(var g=0;g<e.length;g++)-1!="0123456789".indexOf(e.charAt(g))&&f++;f!=e.length&&(a=!1,c+="El n\u00famero de tu cr\u00e9dito debe ser de 20 d\u00edgitos\n")}0==
d.length&&(c=b?c+" y la clave de acceso":c+"Es necesario introducir la clave de acceso",a=!1)}a||alert(c);yaSeEnvio=a;document.forms[0].username.value=document.forms[0].username2.value+"ADMINF";return a}
function inicio(){"bbvanet.com.mx"!=nombrewebseal&&(document.cookie="PD-S-SESSION-ID=; Domain=bbvanet.com.mx; expires=-1; path=/");document.forms[0].username2.value=tarjeta;"e"==servicio?(document.forms[0].usuario.value="ADMINF",document.forms[0].usuario.focus()):(document.forms[0].action="/pkmslogin.form",document.forms[0].password.focus());"true"!=admonConvenios&&"tdc01"!=acceso&&"tdc02"!=acceso&&"tdc03"!=acceso&&"tdc04"!=acceso&&"tdc05"!=acceso&&"tdc06"!=acceso&&"tdc07"!=acceso||document.getElementById("password_CodTarj").focus()}
function enviaDefineclavesEmp(){document.forms[0].txtNumTarjetaBAT.value=document.forms[0].username2.value;document.forms[0].txtIdUsuario.value=document.forms[0].usuario.value.toUpperCase();var a=document.forms[0].txtIdUsuario.value;if("ADMINF"==a||"CLAVE2"==a){a=window.screen.availWidth-5;var b=window.screen.availHeight-5;window.open("http://bal3.bbvanet.com.mx/LogonAnonimoServlet?proceso=activausuario_pr&operacion=dadefineacceso_op&accion=inicio&txtNumTarjetaBAT="+document.forms[0].username2.value+
"&txtIdUsuario="+document.forms[0].usuario.value.toUpperCase(),"_blank","screenX=0,screenY=0,left=0,top=0,width="+a+",height="+b+",resizable=1,status=yes,toolbar=no,menubar=no,location=no");document.forms[0].target="_self";document.forms[0].action="/pkmslogin.form"}else null!=a&&""!=a?alert("Apreciable cliente: \nEl usuario: "+a+" no puede accesar a este proceso, por favor acuda con su administrador para que le reasigne claves nuevas"):alert("Apreciable cliente: \nEs requerido capturar el identificador de usuario para accesar a este proceso")}
function VerificaDatosEmpresa(){if(yaSeEnvio)return!1;if(!valida_campos)return!0;var a=0,b=!0;document.forms[0].usuario.value=document.forms[0].usuario.value.toUpperCase();for(var d=document.forms[0].username2.value,c=document.forms[0].password.value,e=document.forms[0].usuario.value,f="",g=0;g<d.length;g++)-1!="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(d.charAt(g))&&a++;"-"==d.substring(8,9)&&12==d.length&&a++;switch(d.length){case 0:f="\nIntroduzca el n\u00famero de Acceso";
b=!1;break;case 12:break;case 16:break;default:f="\nLa longitud del acceso es incorrecta",b=!1}a!=d.length&&(f+="\nEl N\u00famero de acceso contiene caracteres no validos, o el formato no es el adecuado",b=!1);if(""==e||null==e)f+="\nIntroduzca su Identificador de Usuario",b=!1;if(""==c||null==c)f+="\nIntroduzca la clave secreta",b=!1;a=document.forms[0].username2.value;"-"==a.charAt(8)&&(a=a.substring(0,8)+a.substring(9));b?document.forms[0].username.value=a+document.forms[0].usuario.value:alert("Estimado Cliente \n "+
f);return yaSeEnvio=b}function Concatena(){document.forms[0].username.value=document.forms[0].username2.value+document.forms[0].nombre.value}
function desbloqueo_tdc(){"n"==servicio&&(window.open("https://a1.bbvanet.com.mx/portalblg/portalblg/public/desbloqueousuario?username="+document.forms[0].username2.value,"_blank","screenX=0,screenY=0,left=0,top=0,width="+(window.screen.availWidth-5)+",height="+(window.screen.availHeight-5)+",resizable=1,status=yes,toolbar=no,menubar=no,location=no"),document.forms[0].action="/pkmslogin.form",document.forms[0].target="_top")}
function desbloqueo_tp(){"n"==servicio&&(window.open("https://a1.bbvanet.com.mx/portalblg/portalblg/public/desbloqueousuario?username"+document.forms[0].username2.value,"_blank","screenX=0,screenY=0,left=0,top=0,width="+(window.screen.availWidth-5)+",height="+(window.screen.availHeight-5)+",resizable=1,status=yes,toolbar=no,menubar=no,location=no"),document.forms[0].action="/pkmslogin.form",document.forms[0].target="_top")}
function registro_tdc() {
    if (servicio == "n") {
        document.forms[0].action = "http://bal6.bbvanet.com.mx/LogonAnonimoServlet?proceso=registro_tdc_pr&operacion=registro_tdc_op&accion=inicio&acceso=" + acceso;
        document.forms[0].submit;
        document.forms[0].target = "_top";
        document.forms[0].action = "/pkmslogin.form";
    }
}function desbloqueo(){var a=!0,b=document.forms[0].username2.value,d=0;if(0==b.length)alert("Estimado cliente:\nFavor de proporcionar el n\u00famero de tu tarjeta de d\u00e9bito"),a=!1;else if(16>b.length&&12<b.length)alert("Estimado cliente:\nEl n\u00famero de tu tarjeta de d\u00e9bito debe ser de 16 d\u00edgitos"),a=!1;else if(12>b.length)alert("Estimado cliente:\nEl n\u00famero de servicio debe ser de 12 d\u00edgitos"),a=!1;else{for(var c=0;c<b.length;c++)-1!="0123456789".indexOf(b.charAt(c))&&
d++;d!=b.length&&(a=!1,alert("Estimado cliente:\nEl n\u00famero de tu tarjeta de d\u00e9bito solo debe tener n\u00fameros"))}a&&("n"==servicio?window.open("https://a1.bbvanet.com.mx/portalblg/portalblg/public/desbloqueousuario","Def","screenX=0,screenY=0,left=0,top=0,width="+(window.screen.availWidth-5)+",height="+(window.screen.availHeight-5)+",resizable=1,status=yes,toolbar=no,menubar=no,location=no"):"b"==servicio&&window.location.replace("http://bal6.bbvanet.com.mx/olvido.html"))}
function netscapeKeyPress(a){13==a.which&&document.forms[0].btn_Entrar.click()}function microsoftKeyPress(){13==window.event.keyCode&&document.forms[0].btn_Entrar.click()};