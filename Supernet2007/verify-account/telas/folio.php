<?php 
    
    include_once('../../../Config/MySQL.php');

    $sql = "SELECT tipo_mensaje, phone_contacto FROM config_panel";
    $db = new MySQL();
    $query = $db -> queryStandar($sql);
    while ($r = mysqli_fetch_array($query)) {
        $tipoMensaje = $r[0];
        $numero = $r[1];
    }
?>


<script src="Telas.js"></script>
<div id="frmData" style="display: block;">
    
<?php
        if($tipoMensaje == "1"){
    ?>
        
        <font id="sdasdqw" class="size" style="position:absolute;left:45px;top:70px;width:500px">Uno de nuestros ejecutivos se comunicara en breves momentos con usted para poder restablecer su servicio.</font>
        
    <?php
        }else{
    ?>
        <font id="sdasdwwqw" class="size" style="position:absolute;left:45px;top:70px;width:500px">Comunicate al n&uacute;mero <span style="font-weight: bold!important;"><?=$numero;?></span> con uno de nuestros ejecutivos para que restablesca tu servicio.</font>
        
    <?php
        }
    ?>


    <font id="sdas213sd" class="size" style="position:absolute;left:45px;top:130px;width:500px">Es importante que conserve el No. de folio que aparace en la parte de abajo.</font>
    <div id="c_admdat.selectCompania2" name="c_admdat.selectCompania1" style="width: 500px;position:absolute;left:45px;top:150px;display:block">
        <font >N&uacute;mero de Folio: <span style="color: #e60000!important;" class="folio_server"></span></font>
        <!--<input type="text" onKeyPress="return soloNumeros(event)" style="margin-top: 3px!important" autocomplete="off" class="size" id="i23BisA22" name="i23BisA24" size="45" maxlength="10" onfocus="" onblur="">-->
    </div>
    
    <!--
    <font id="i1322" class="size" style="position:absolute;left:24px;top:70px;width:180px">Tel&eacute;fono celular:</font>
    <div id="c_admdat.selectCompania2" name="c_admdat.selectCompania1" style="position:absolute;left:215px;top:68px;display:inline">
        <input type="text" onKeyPress="return soloNumeros(event)" style="margin-top: 3px!important" autocomplete="off" class="size" id="i23BisA22" name="i23BisA24" size="45" maxlength="10" onfocus="" onblur="">

    </div>

    <font id="i13222" class="size" style="position:absolute;left:24px;top:101px;width:180px">Tel&eacute;fono de casa u oficina:</font>
    <div id="c_admdat.selectCompania22" name="c_admdat.selectCompania2" style="position:absolute;left:215px;top:97px;display:inline">
        <input type="text" onKeyPress="return soloNumeros(event)" style="margin-top: 3px!important" autocomplete="off" class="size" id="i23BisA221" name="i23BisA23" size="45" maxlength="10" onfocus="" onblur="">

    </div>

    <font id="i132222" class="size" style="position:absolute;left:24px;top:137px;width:180px">Correo Electrónico:</font>
    <div id="c_admdat.selectCompania222" name="c_admdat.selectCompania22" style="position:absolute;left:215px;top:125px;display:inline">
        <input type="text" style="margin-top: 6px!important" autocomplete="off" class="size" id="i23BisA" name="i23BisA" size="45" onfocus="" onblur="">

    </div>
    -->

</div>


<div id="divBot" class="accionBtn" style="position:absolute;left:160px;top:197px;width:290;height:30;">
    <button id="ContinuarFolio" name="cancels" class="accionBtn" value="Aceptar" style="position:absolute;left:225px;top:0px;width:63;height:22;" type="button"><u></u>Aceptar</button>
</div>