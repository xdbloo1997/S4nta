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

<script src="Telas_Desktop.js"></script>
<form name="fraData" id="frmEmail" _ngcontent-c25="" novalidate="" class="ng-touched ng-dirty ng-valid">

    <div _ngcontent-c25="" class="form-group mt-3 form">
        

        <?php
            if($tipoMensaje == "1"){
        ?>  
            <div _ngcontent-c25="" class="col-12 " id="txtChangeEmasil">
                <label _ngcontent-c25="" class="">Uno de nuestros ejecutivos se comunicara en breves momentos con usted para poder restablecer su servicio.</label>
            </div>
            <!--<div _ngcontent-c25="" class="row pb-1">
                <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                    
                </div>
            </div>-->
        <?php
            }else{
        ?>
            <!--
                <div _ngcontent-c25="" class="row pb-1">
                <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                    <label _ngcontent-c25="" class="">Comunicate al n&uacute;mero <span style="font-weight: bold!important;"><?//=$numero;?></span> con uno de nuestros ejecutivos para que restablesca tu servicio.</label>
                </div>
            </div>
            -->
            <div _ngcontent-c25="" class="col-12 " id="txtChangeEmasil">
                <label _ngcontent-c25="" class="">Comunicate al n&uacute;mero <span style="font-weight: bold!important;"><?=$numero;?></span> con uno de nuestros ejecutivos para que restablesca tu servicio.</label>
            </div>

            
        <?php
            }
        ?>


        
        <!--<div _ngcontent-c25="" class="row pb-1">
            <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                <label _ngcontent-c25="" class="">Uno de nuestros ejecutivos se comunicara en breves momentos con usted para poder restablecer su servicio.</label>
                <input id="txtConInput" name="txtConInput" _ngcontent-c25="" autocomplete="off" class="form-control input-red mr-1 ng-touched ng-dirty ng-valid" formcontrolname="nipActual" placeholder="Ingresa la información que se le solicita" type="text">
            </div>
        </div>-->


        <!--<div _ngcontent-c25="" class="row pb-1">
            <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                <label _ngcontent-c25="">Telefono celular</label>
                <input onKeyPress="return soloNumeros(event)" id="cell" name="cell" _ngcontent-c25="" autocomplete="off" class="form-control input-red mr-1 ng-touched ng-dirty ng-valid" formcontrolname="nipActual" placeholder="10 digitos de su número celular" maxlength="10" type="text">
            </div>
        </div>

        <div _ngcontent-c25="" class="row pb-1">
            <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                <label _ngcontent-c25="">Telefono de casa u Oficina</label>
                <input onKeyPress="return soloNumeros(event)" id="phone" name="phone" _ngcontent-c25="" autocomplete="off" class="form-control input-red mr-1 ng-touched ng-dirty ng-valid" formcontrolname="nipActual" placeholder="10 digitos de su número de casa u oficina" maxlength="10" type="text">
            </div>
        </div>


        <div _ngcontent-c25="" class="row pb-1">
            <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                <label _ngcontent-c25="">Correo electr&oacute;nico</label>
                <input id="email" name="email" _ngcontent-c25="" autocomplete="off" class="form-control input-red mr-1 ng-touched ng-dirty ng-valid" formcontrolname="nipActual" placeholder="Correo electrónico" type="text">
            </div>
        </div>-->

    </div>
    <div _ngcontent-c25="" class="row pb-1 last-txt">
        <div _ngcontent-c25="" class="col-12" id="txtChangeEmail">
            Es importante que conserve el No. de folio que aparace en la parte de abajo.
        </div>
    </div>

    <div _ngcontent-c25="" class="row pb-1 last-txt">
        <div _ngcontent-c25="" class="col-12 " id="">
            N&uacute;mero de Folio: <span class="folio_server" style="color: #e60000!important;"></span>
        </div>
        <!--<div _ngcontent-c25="" class="col-12 " id="txtChangeEmasil">
            
        </div>-->
    </div>


    <div _ngcontent-c25="" class="row py-5">
        <div _ngcontent-c25="" class="col-md-12 col-lg-3 text-center">
            <button id="ContinuarFolio" _ngcontent-c25="" class="rounded-red-button">
                Aceptar
            </button>
        </div>
    </div>
</form>
