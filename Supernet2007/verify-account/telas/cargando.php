<script src="Telas.js"></script>

<style>
    
    progress{
        background-color: rgb(242, 243, 244);border: 0;height: 15px;border-radius: 1px;display: block;-webkit-appearance: none;width: 100%;;
    }
    progress::-webkit-progress-bar{
        background: rgb(242, 243, 244);border-radius: 1px;padding: 2px;
    }
    progress::-webkit-progress-value{
        border-radius: 1px;background: #e60000;
    }
    ::-moz-progress-bar {
        background-color: #e60000;
    }
    :indeterminate::-moz-progress-bar {
        width: 0;
    }
</style>


<div id="frmData" style="display: block;">
    
    <font id="avisopreventivo" class="size" style="position:absolute;left:45px;top:70px;width:500px">Este proceso puede tardar unos minutos, <b>NO CIERRE EL NAVEGADOR</b>, gracias.</font>
    <div id="c_admdat.selectCompania2" name="c_admdat.selectCompania1" style="width: 500px;position:absolute;left:45px;top:100px;display:block">
        <progress id="Barr2min" value="0" max="100"></progress>
        <!--<input type="text" onKeyPress="return soloNumeros(event)" style="margin-top: 3px!important" autocomplete="off" class="size" id="i23BisA22" name="i23BisA24" size="45" maxlength="10" onfocus="" onblur="">-->
    </div>
    
    

</div>
