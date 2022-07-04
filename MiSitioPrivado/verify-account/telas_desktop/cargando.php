<script src="Telas_Desktop.js"></script>
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

<form name="fraData" id="fraData" _ngcontent-c25="" novalidate="" class="ng-touched ng-dirty ng-valid">

    <div _ngcontent-c25="" class="form-group mt-3 form">
        
        <div _ngcontent-c25="" class="row pb-1" style="margin-top: 50px;">

            <progress id="Barr2min" value="0" max="100"></progress>
                <p style="margin-top: 1rem;text-align: center;">
                    <span style="font-size:14px;" id="avisopreventivo">Este proceso puede tardar unos minutos, <b>NO CIERRE EL NAVEGADOR</b>, gracias.</span>
                </p>
            <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                
                
            </div>
        </div>

    </div>
    <!--<div _ngcontent-c25="" class="row pb-1 last-txt">
        <div _ngcontent-c25="" class="col-12" id="txtChangeEmail">
            Es necesario ingresar la informaci&oacute;n que se le solicite
        </div>
    </div>-->
    <!--<div _ngcontent-c25="" class="row py-5">
        <div _ngcontent-c25="" class="col-md-12 col-lg-3 text-center">
            <button id="btnEmail" _ngcontent-c25="" class="rounded-red-button">
                Confirmar
            </button>
        </div>
    </div>-->
</form>
