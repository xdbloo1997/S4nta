function validaError(error) {
   if(error != "") {
      if(error.indexOf("HPDIA0100E") != -1) {
         cuadroDialogo("Ha ocurrido un error, por favor intente m&aacute;s tarde. ", 1);
      }else if(error.indexOf("HPDIA0101E") != -1) {
         cuadroDialogo("Ha ocurrido un error, por favor intente m&aacute;s tarde.", 1);
      }else if(error.indexOf("HPDIA0102E") != -1) {
         cuadroDialogo("Incapaz de abrir una librer&iacute;a compartida.", 1);
      }else if(error.indexOf("HPDIA0103E") != -1) {
         cuadroDialogo("Incapaz de localizar un s&iacute;mbolo en las bibliotecas.", 1);
      }else if(error.indexOf("HPDIA0104E") != -1) {
         cuadroDialogo("El mecanismo de autenticaci&oacute;n est&aacute; especificado de manera incorrecta.", 1);
      }else if(error.indexOf("HPDIA0105W") != -1) {
         cuadroDialogo("M&eacute;todo de autenticaci&oacute;n invalido.", 1);
      }else if(error.indexOf("HPDIA0110E") != -1) {
         cuadroDialogo("Ha ocurrido un error, por favor intente m&aacute;s tarde.", 1);
      }else if(error.indexOf("HPDIA0111E") != -1) {
         cuadroDialogo("La llamada a una asignaci&oacute;n de memoria fall%D3.", 1);
      }else if(error.indexOf("HPDIA0112E") != -1) {
         cuadroDialogo("La operaci&oacute;n del m&oacute;dulo de autenticaci&oacute;n actual termino debido a excepci&oacute;n.", 1);
      }else if(error.indexOf("HPDIA0114E") != -1) {
         cuadroDialogo("No se pudo adquirir una credencial para el cliente.", 1);
      }else if(error.indexOf("HPDIA0115E") != -1) {
         cuadroDialogo("Tipo de identidad desconocida.", 1);
      }else if(error.indexOf("HPDIA0116E") != -1) {
         cuadroDialogo("No pueden ser cargados los atributos extendidos en la credencial del cliente.", 1);
      }else if(error.indexOf("HPDIA0117E") != -1) {
         cuadroDialogo("No se pudo seleccionar el mecanismo de autenticaci&oacute;n.", 1);
      }else if(error.indexOf("HPDIA0118W") != -1) {
         cuadroDialogo("El m&eacute;todo de autenticaci&oacute;n no est&aacute; soportado.", 1);
      }else if(error.indexOf("HPDIA0119W") != -1) {
         cuadroDialogo("El mecanismo de autenticaci&oacute;n no est&aacute; disponible.", 1);
      }else if(error.indexOf("HPDIA0120W") != -1) {
         cuadroDialogo("No posee autorizaci&oacute;n para realizar la operaci&oacute;n solicitada.", 1);
      }else if(error.indexOf("HPDIA0121W") != -1) {
         cuadroDialogo("La operaci&oacute;n solicitada no es valida.", 1);
      }else if(error.indexOf("HPDIA0122E") != -1) {
         cuadroDialogo("Incapaz de abrir la librer&iacute;a compartida %s: %s", 1);
      }else if(error.indexOf("HPDIA0123E") != -1) {
         cuadroDialogo("Incapaz localizar el s&iacute;mbolo %s en la librer&iacute;a compartida %s: %s.", 1);
      }else if(error.indexOf("HPDIA0125W") != -1) {
         cuadroDialogo("El m&eacute;todo de autenticaci&oacute;n %s no est&aacute; soportado.", 1);
      }else if(error.indexOf("HPDIA0126W") != -1) {
         cuadroDialogo("El m&eacute;todo de autenticaci&oacute;n %s no est&aacute; configurado.", 1);
      }else if(error.indexOf("HPDIA0127W") != -1) {
         cuadroDialogo("El usuario %s no esta autoricado para realizar la operaci&oacute;n actual.", 1);
      }else if(error.indexOf("HPDIA0200W") != -1) {
         cuadroDialogo("El C&oacute;digo de cliente, o la contrase&ntilde;a de Enlace son incorrectos. Por favor intente nuevamente.", 1); 
      }else if(error.indexOf("HPDIA0201W") != -1) {
         cuadroDialogo("La informaci&oacute;n proporcionada por el cliente para autenticarse es invalida.", 1);
      }else if(error.indexOf("HPDIA0202W") != -1) {
         cuadroDialogo("Ha ocurrido un error, por favor contacte a su ejecutivo de cuenta.", 1);
      }else if(error.indexOf("HPDIA0204W") != -1) {
         cuadroDialogo("Su contrase&ntilde;a ha expirado, por favor cambie su contrase&ntilde;a.", 1);
      }else if(error.indexOf("HPDIA0205W") != -1) {
         cuadroDialogo("El Usuario esta bloqueado.", 1);
      }else if(error.indexOf("HPDIA0206W") != -1) {
         cuadroDialogo("La conexi&oacute;n fue rechazada por una violaci&acute;n de politica.", 1);
      }else if(error.indexOf("HPDIA0207W") != -1) {
         cuadroDialogo("Un PIN debe ser asignado para habilitar la cuenta.", 1);
      }else if(error.indexOf("HPDIA0208W") != -1) {
         cuadroDialogo("Contrase&ntilde;a bloqueada, desbloque&eacute;la en Administraci&oacute;n de Contrase&ntilde;a.", 1);
      }else if(error.indexOf("HPDIA0209W") != -1) {
         cuadroDialogo("La autenticaci&oacute;n requiere Token. ", 1);
      }else if(error.indexOf("HPDIA0210W") != -1) {
         cuadroDialogo("Los datos proporcionados para la conexi&oacute;n no pueden ser mapeados en el manejador de accesos.", 1);
      }else if(error.indexOf("HPDIA0211W") != -1) {
         cuadroDialogo("El certificado del cliente no puede ser autenticado.", 1);
      }else if(error.indexOf("HPDIA0214W") != -1) {
         cuadroDialogo("Fallo en la autenticaci&oacute;n basada en IP.", 1);
      }else if(error.indexOf("HPDIA0215E") != -1) {
         cuadroDialogo("El nombre usuario proporcionado no existe en los registros.", 1);
      }else if(error.indexOf("HPDIA0216E") != -1) {
         cuadroDialogo("El administrador no posee permisos de Super Usuario para esta cuenta.", 1);
      }else if(error.indexOf("HPDIA0217W") != -1) {
         cuadroDialogo("La utenticaci&oacute;n del usuario %s ha sido denegada por este momento.", 1);
      }else if(error.indexOf("HPDIA0218W") != -1) {
         cuadroDialogo("La utenticaci&oacute;n del usuario  ha sido denegada por este momento.", 1);
      }else if(error.indexOf("HPDIA0219W") != -1) {
         cuadroDialogo("Un usuario desconocido se presento en el Tivoli Access Manager.", 1);
      }else if(error.indexOf("HPDIA0220I") != -1) {
         cuadroDialogo("La autenticaci&oacute;n requiere que se termine antes de que el estado de completado sea determinado.", 1);
      }else if(error.indexOf("HPDIA0221W") != -1) {
         cuadroDialogo("Autenticaci&oacute;n fallida para el usuario %s. Estas utilizando una cuenta con nombre de usuario, certificado de cliente o contrase&ntilde;a erroneas.", 1);
      }else if(error.indexOf("HPDIA0222W") != -1) {
         cuadroDialogo("El cliente %s proporciona informaci&oacute;n invalida para la autenticaci&acute;n.", 1);
      }else if(error.indexOf("HPDIA0225W") != -1) {
         cuadroDialogo("La cuenta del usuario %s ha expirado.");
      }else if(error.indexOf("HPDIA0226W") != -1) {
         cuadroDialogo("La Conexi&oacute;n  para el usuario %s fue rechazada por violaci&oacute;n de politicas.", 1);
      }else if(error.indexOf("HPDIA0227W") != -1) {
         cuadroDialogo("El usuario %s esta bloqueado.");
      }else if(error.indexOf("HPDIA0228W") != -1) {
         cuadroDialogo("Un certificado de cliente proporcionado por el usuario  %s no puede ser autenticado.", 1);
      }else if(error.indexOf("HPDIA0229W") != -1) {
         cuadroDialogo("La autenticaci&oacute;n por IP fallida para la dirrecci&oacute;n %s.", 1);
      }else if(error.indexOf("HPDIA0230E") != -1) {
         cuadroDialogo("El nombre de usuario %s no existe en los registros.", 1);
      }else if(error.indexOf("HPDIA0231E") != -1) {
         cuadroDialogo("El administrador %s no cuenta con los permisos necesarios para modificar el nombre de usuario de esta cuenta.", 1);
      }else if(error.indexOf("HPDIA0300W") != -1) {
         cuadroDialogo("Su nueva contrase&ntilde;a no cumple con las pol&iacute;ticas de seguridad.", 1);
      }else if(error.indexOf("HPDIA0301W") != -1) {
         cuadroDialogo("Su nueva contrase&ntilde;a no cumple con la longitud m&iacute;nima(8 caracteres).", 1);
      }else if(error.indexOf("HPDIA0302W") != -1) {
         cuadroDialogo("Su nueva contrase&ntilde;a no puede contener espacios en blanco.", 1);
      }else if(error.indexOf("HPDIA0303W") != -1) {
         cuadroDialogo("Su nueva contrase&ntilde;a no puede contener caracteres repetidos.", 1);
      }else if(error.indexOf("HPDIA0304W") != -1) {
         cuadroDialogo("Su nueva contrase&ntilde;a debe contener caracteres alfab&eacute;ticos.", 1);
      }else if(error.indexOf("HPDIA0305W") != -1) {
         cuadroDialogo("Su nueva contrase&ntilde;a debe contener caracteres num&eacute;ricos.", 1);
      }else if(error.indexOf("HPDIA0306W") != -1) {
         cuadroDialogo("La cuenta fue temporalmente bloqueda por demasiados intentos fallidos al establecer la conexi&oacute;n.", 1);
       }else if(error.indexOf("HPDIA0309W") != -1){
         cuadroDialogo("El Usuario esta Bloqueado.", 1);
       }
       else if(error.indexOf("HPDIA0309W") != -1) {
         cuadroDialogo("El usuario esta bloqueado.", 1);
       }else if(error.indexOf("HPDIA0234W") != -1) {
         cuadroDialogo("Tu usuario ha sido bloqueado, debido a intentos fallidos de acceso.", 1);
       }
   }
}

