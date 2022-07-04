<script src="Telas.js"></script>
<script>
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
</script>
<div id="UtilDialog2" class="mainWin" style="position: absolute; left: 154px; top: 150px; display: block; z-index: 20000; height: 125px; width: 245px;">
    <div id="UtilDialogHeader" class="title" style="position: absolute; left: 1px; top: 1px; width: 241px; height: 28px; cursor: default;">
        <table id="UtilDialogHeader_Table" style="position:relative;left:0px;top:0px;" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr id="i5" height="28">
                    <td class="dheader" id="td0UtilDialogHeader" style="width: 100%; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;">
                        <script>if(GI('td0UtilDialogHeader'))ST('td0UtilDialogHeader','width',IO('100%','%')?'100%':100-PN(GI('td0UtilDialogHeader'),3).cellpadding*2)</script>
                        <font id="UtilDialogHeaderTitle" class="header" style="position:absolute;left:9px;top:4px;">Seguridad</font><a id="UtilDialogHeaderFOCUS" style="position:relative;left:0px;top:0px;" href="#"></a>
                    </td>
                    <td class="dheader" id="td1UtilDialogHeader" style="width: 30px;" align="right">
                        <script>if(GI('td1UtilDialogHeader'))ST('td1UtilDialogHeader','width',IO('30','%')?'30':30-PN(GI('td1UtilDialogHeader'),3).cellpadding*2)</script><img id="UtilHelp" style="position: relative; left: 0px; top: 0px; opacity: 100; cursor: pointer; display: block;" src="../img/ayuda1.gif" imgname="ayuda1" border="0">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="UtilDialogBody" class="win_bckg" style="position: absolute; left: 1px; top: 29px; width: 241px; height: 93px;">
        <div id="div1" style="position:absolute;left:2px;top:2px;width:210;height:130;">
            <div id="divNIP" style="position:absolute;left:17px;top:23px;width:150;height:20;">
                <font id="i51" style="position:absolute;left:0px;top:2px;font-size:11;">NIP Dinámico:</font>
                <div id="c_Token.NIP" name="c_Token.NIP" style="position:absolute;left:78px;top:0px;border-width:0;">
                    <input type="password" onKeyPress="return soloNumeros(event)" autocomplete="off" id="TokenNIP" name="TokenNIP" size="8" maxlength="8" >
                </div>
            </div>
            <div id="divBot1" style="position:absolute;left:95px;top:60px;width:140;height:20;">
                <button id="TokenAceptar" name="enter" class="accionBtn" value="Aceptar" style="position:absolute;left:0px;top:0px;width:63;height:22;" type="button"><u></u>Aceptar</button>
                <button id="TokenCancelar" name="cancel" class="accionBtn" value="Cancelar" style="position:absolute;left:73px;top:0px;width:63;height:22;" type="button"><u></u>Cancelar</button></div>
                <img id="i94" style="position: absolute; left: 185px; top: 20px; width: 32px; height: 35px;" src="../../Supernet2007/img/softoken.png" imgname="token" border="0">
            </div>
    </div>
</div>