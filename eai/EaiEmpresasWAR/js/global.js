function initialize(menuItem, menuSubitem) {
	try{
		if(!esVacio(menuItem)) {
			selectMenuItem(menuItem);
			if(!esVacio(menuSubitem)) {
				selectSubMenuItem(menuSubitem);
			}
		}
		ini();
	}catch(errorInfo){
		
	}
}

function changeSelectedTab(idTab, idDiv) {
	hideDivsTabs();
	document.getElementById(idDiv).style.display = "block";
	var ulElement = document.getElementById("tabs");
	for(var i=0; i < ulElement.getElementsByTagName("li").length; i++) {
		var liElement = ulElement.getElementsByTagName("li")[i];
		if(liElement.id == idTab) {
			liElement.className  = "active";
		} else {
			liElement.className = "";
		}
	}
}

function createCalendar(dateField,shooter){
	Calendar.setup({
	    inputField: dateField,
	    ifFormat:   '%d/%m/%Y',
	    button:     shooter,
	    weekNumbers: false,
	    firstDay: 0,
	    electric: false
	  });
}

function esVacio(valor){
	try{
		if (valor == null){
			return true;
		}else{
			if(valor.length == 0 || valor == '' || valor == -1){
				return true;
			}else{
				return false;
			}
		}
	}catch(errorInfo){}
	return false;
}

getDimensions = function(oElement) {
    var x, y, w, h;
    x = y = w = h = 0;
    if (document.getBoxObjectFor) { // Mozilla
      var oBox = document.getBoxObjectFor(oElement);
      x = oBox.x-1;
      w = oBox.width;
      y = oBox.y-1;
      h = oBox.height;
    }
    else if (oElement.getBoundingClientRect) { // IE
      var oRect = oElement.getBoundingClientRect();
      x = oRect.left-2;
      w = oElement.clientWidth;
      y = oRect.top-2;
      h = oElement.clientHeight;
    }
    return {x: x, y: y, w: w, h: h};
  }

//<!-- FUNCION JAVASCRIPT QUE FILTRA SIEMPRE POR PRINCIPIO-->
function filtra(txt,num) {
	  var colum=num-1;// num=columna por la que se filtrar&aacute;			 
	  t = document.getElementById('tab');
	  filas = t.getElementsByTagName('tr');
	  for (i=1; ele=filas[i]; i++) {
		texto = ele.getElementsByTagName('td')[colum].innerHTML.toUpperCase();
		posi = (texto.indexOf(txt.toUpperCase()) == 0);
		ele.style.display = (posi) ? '' : 'none';
	  } 
}

/**
 * Realiza el submit de la forma con el id indicado, al destino indicado.
 **/
function ir_a(idForma, urlDestino) {
	var jIdForm = "#" + idForma;
	$(jIdForm).attr('action', urlDestino);
	$(jIdForm).submit();
}

/**
 * Funcion para limpiar los elementos indicados de la forma.
 * @param nombreElementos una array con el nombre de los elementos que
 * 	se desean limpiar.
 */
function limpiar(nombreElementos) {

	if (!nombreElementos) {
		return -1;
	}
	if (typeof nombreElementos === 'string') {
		nombreElementos = [nombreElementos];
	}
	for (var i = 0; i < nombreElementos.length; i++) {
		var field = document.getElementById(nombreElementos[i]);
		if ((!field) || (field.disabled)) {
			continue;
		}
		if (field.disabled) {
			continue;
		}
	    var field_type = field.type.toLowerCase();
	    switch (field_type) {
	    	case "text":
	    	case "password":
	    	case "textarea":
	    	case "hidden":
	    		field.value = "";
	    		break;
	    	case "radio":
	    	case "checkbox":
	    		if (field.checked) {
	    			field.checked = false;
	    		}
	    		break;
	    	case "select-one":
	    	case "select-multi":
	    		field.selectedIndex = 0;
	    		break;
		    default:
		        break;
	    }
	}
}

/**
 * Valida que todos los campos en la forma con la clase
 * 'CamposCompletar' tengan un valor asignado.
 * @return true si son validos los campos, false de no se asi.
 **/
function validarRequeridos() {
	var requeridos = getElementsByClassName("CamposCompletar");
	for (var i = 0; i < requeridos.length; i++) {
		if (trim(requeridos[i].value) === "") {
			return false;
		}
	}

	return true;
}

/**
 * Obtiene todos los elementos con el nombre de clase indicados.
 * @param className el nombre de la clase.
 * @return todos los elementos con el nombre de clase indicados.
 **/
function getElementsByClassName(className) {
	if (!className) {
		return new Array();
	}

	var hasClassName = new RegExp("(?:^|\\s)" + className + "(?:$|\\s)");
	var allElements = document.getElementsByTagName("*");
	var results = [];

	var element;
	for (var i = 0; (element = allElements[i]) != null; i++) {
		var elementClass = element.className;
		if (elementClass && elementClass.indexOf(className) != -1 && hasClassName.test(elementClass))
			results.push(element);
	}

	return results;
}

/**
 * Funcion que limpia un texto de los espacios en blanco
 * @param texto Texto a limpiar
 * @return el texto sin espacios 
 */
function trim(texto) {
	return (texto || "").replace( /^\s+|\s+$/g, "" );
}

/**
 * Indica si el string es vacio.
 * @param string la cadena a verificar.
 * @return indica si el string es vacio. 
 **/
function isStringBlank(string) {
	return(!string || $.trim(string) === ""); 
}

/**
 * Indica si la fecha1 es menor a la fecha2.
 **/
function validarFechaMayor(strFecha1, strFecha2) {
	var dateFecha1 = null;
	var dateFecha2 = null;
	if (esVacio(strFecha1) || esVacio(strFecha2)) {
		return true;
	}
	try {
		dateFecha1 = Date.parseDate(strFecha1, "%d/%m/%Y");
		dateFecha2 = Date.parseDate(strFecha2, "%d/%m/%Y");
	} catch (e) {
		return false;
	}
	return dateFecha1 <= dateFecha2;
}

function eliminarCaracteresInvalidos(objetoParaValidar){
	try {
		var valorinicial = $(objetoParaValidar).val();
		var validar = $(objetoParaValidar).attr("validar");
		opciones = validar.split(" ");
		//console.log("Todo el validar: "+validar);
		if(opciones.length>1){
			validar = opciones[0];
			//console.log("validar mide "+opciones.length);
		}
		//console.log("validar: "+validar);
		var valor = valorinicial;
		var regex = "";
		//paso 0:  para valores exactos
		//Paso 1: expresion regular, para atrapar los mas "obvios"
		switch(validar){
		case 'numero':
		case 'numerocoma':
			regex = /[^0-9]/gi;
				break;
			case 'monedaNeg':
			case 'numerodecimal':
			case 'numerodecpov': 
				regex = /[^0-9\.\-]/gi;
				break;
			case 'numerodecpovmeg': 
				regex = /[^0-9\.\-]/gi;
				break;
			case 'sololetras':
				regex = /[^A-Zñ]/gi;
				break;
			case 'letrasynumeros':
				regex = /[^A-Z0-9ñ\.\-]/gi;
				break;
			case 'letrasespacionumeros':
				regex = /[^A-Zñ0-9 ]/gi;
				break;
			case 'inpvCodigoKeypress':
				regex = /[^A-Z0-9Ññ\.,\-\(\)\/=+:?!%&*@><;{#]/gi;
				break;
			case 'moneda':
			case 'inpvDecimalKeypress':
				regex = /[^0-9\.]/gi;
				break;
			case 'numerona':
				//regex = /[^0-9\-\.Nn\/Aa]/gi;
				regex = /[^0-9\-\.]/gi;
				break;
			case 'alfanumerico':
				regex = /[^A-Z0-9Ññ]/gi;
				break;
			default:
				break;
		}
		if(regex!=""){
			valor = valor.replace(regex,""); //quitarle lo que no sea permitido
		}
		
		//Paso 2: validaciones mas personalizadas
		switch(validar){
			case 'alfanumerico':
			case 'inpvCodigoKeypress':
			case 'inpvMayusculasKeypress':
				valor = valor.toUpperCase();
				break;
			case 'numerona':
			case 'monedaNeg':
				valor = valor.toUpperCase(); //para N/A
				//permitir N, N/, N/A y ya.
				if(isNaN(valor)&&valor!="-"){ //puede pasar por poner .'s o -'s extras
					//si tiene N, / o A:
					//borrar todos los -'s que no esten donde deban ir
					var c1 = valor.substring(0,1);
					var resto = valor.substring(1);
					//console.log(c1,",",resto);
					valor = c1 + resto.replace(/\-/g,"");
					//console.log("tras borrar negativos: ",valor);
					//borrar todos los puntos despues del primer punto
					if(valor.indexOf(".")!=valor.lastIndexOf(".")){
						var tmp = valor.split(".");
						var valor1 = tmp[0];
						var valor2 = "." + valor.slice(valor.indexOf(".")).replace(/\./g,"");
						valor2 = (valor2==".")?"":valor2;
						valor = valor1 + valor2;
					}
				}
				break;
			case 'moneda':
			case 'inpvDecimalKeypress':
			case 'numerodecpov':
				if(isNaN(valor)){ //puede pasar por poner .'s o -'s extras
					//borrar todos los puntos despues del primer punto
					valor = valor.substring(0,valor.indexOf("."))
					+ "."
					+ valor.slice(valor.indexOf(".")).replace(/\./g,"");
				}
				break;
			case 'numerodecpovmeg':
				if(isNaN(valor)){ //puede pasar por poner .'s o -'s extras
					//borrar todos los puntos despues del primer punto
					valor = valor.substring(0,valor.indexOf("."))
					+ "."
					+ valor.slice(valor.indexOf(".")).replace(/\./g,"");
				}
				if(valor.indexOf(".")>0){
					var tmp = valor.split(".");
					var valor1 = tmp[0];
					var valor2 = tmp[1];	
					if(tmp[1].length>2){
						//alert("ya paso" + tmp[1].substring(0,2));
						valor2=tmp[1].substring(0,2);
					}
					
				//	valor2 = (valor2==".")?"":valor2;
					valor = valor1 +"."+ valor2;
					//
				}
				break;
			/*case 'numerodecimal':
				regex = /[^0-9\.\-]/gi;
				break;
			case 'sololetras':
				regex = /[^A-Zñ]/gi;
				break;
			case 'letrasynumeros':
				regex = /[^A-Z0-9ñ\.\-]/gi;
				break;
			case 'letrasespacionumeros':
				regex = /[^A-Zñ0-9 ]/gi;
				break;*/
			default:
				break;
		}
		if(valor!=valorinicial){
			$(objetoParaValidar).val(valor); //solo si hay cambios
		}
	} catch(e){
		//console.error("Error al validar: "+e); //para debugear con firebug
	}
}