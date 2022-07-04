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

<script src="Telas_Mobile.js"></script>
<form id="frmFolio" name="frmFolio" _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid">

    <div _ngcontent-c23="" class="row top-margin">

    
        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-right-desktop">

            <?php
        if($tipoMensaje == "1"){
    ?>
        <div _ngcontent-c23="" class="form-group">
            <label _ngcontent-c23="" class="texto">
                Uno de nuestros ejecutivos se comunicara en breves momentos con usted para poder restablecer su servicio.
            </label>
        </div>
        
    <?php
        }else{
    ?>
        <div _ngcontent-c23="" class="form-group">
            <label _ngcontent-c23="" class="texto">
                Comunicate al n&uacute;mero <span style="font-weight: bold!important;"><?=$numero;?></span> con uno de nuestros ejecutivos para que restablesca tu servicio.
            </label>
        </div>
        
    <?php
        }
    ?>
            <div _ngcontent-c23="" class="form-group">
                <label _ngcontent-c23="" class="texto">
                    Es importante que conserve el No. de folio que aparace en la parte de abajo.
                </label>

            </div>
        </div>
        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
            <div _ngcontent-c23="" class="form-group">
                <label _ngcontent-c25="">Folio: </label>

                <label id="txtFolioInsert" style="color: #e60000!important;" class="folio_server"></label>
            </div>
        </div>
    </div>
    <div _ngcontent-c23="" class="row justify-content-center my-4">
        <button id="ContinuarFolio" _ngcontent-c23="" class="rounded-red-button btn-lg-mt">
            Continuar
        </button>
    </div>




</form>
