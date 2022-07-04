//Implementacion SFJ Accenture
/**
 * funcion para banner emergente
 */
function closeBannermain (){
  $('#bannerEmergente').slideUp(500).css('display','none');
}

/**
 * FADE OUT MODAL INTRUSIVO
 */
function fade_OUtModalIntrusive(){
	$("#supermod_intrusivo").fadeOut(500).css("display","none");
	closeBannermain();
}

/**
 * Funcion para el spam
 */
function htmlBannerSpamSlideUp(){
		$('#bannerEmergente').slideUp(500);
		$("#supermod_intrusivo").fadeOut(300);
}

/**
 * Muestra el banner intrusivo
 */
function bannerIntrusivo(){
		$("#supermod_intrusivo").fadeIn(300);
		var	htmlBannerSpam='<embed src="js/Santander/banner_emergente_seguridad_login.swf" width="936" quality=high allowScriptAccess=always height="262" quality="high" wmode="transparent" allowscriptaccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>';
		$('#bannerEmergente').html(htmlBannerSpam);
		setTimeout(htmlBannerSpamSlideUp,15500);
}
//Fin implementacion SFJ Accenture

/**
 * Funciones para el uso de la ventana modal para trusteer
 */
$(document).ready(function() {
	
	$('#logoTrusteer').click(function(){
		creaModalTruster(685, 421);
	});
	
});

/**
 * Funcion que crea la ventana modal
 * 
 * @param contenido Variable que guarda lo que se va a mostrar en la 
 * 			ventana modal
 * @param ancho Ancho de la ventana
 * @param alto Alto de la ventana
 */
function creaModalTruster(ancho, alto) {
	var overlayTrusteer = $('#overlayTrusteer');
	var modalTrusteer = $('#modalTrusteer');
	var closeTrusteer = $('#closeTrusteer');
	modalTrusteer.css({
		width: ancho || 'auto', 
		height: alto || 'auto'
	});
	overlayTrusteer.css({
		width : $(document).width() + 'px',
		height: $(document).height() + 'px'
	});
	centerModalTrusteer(modalTrusteer, overlayTrusteer);
	$(window).bind('resize.modal', function() {
		centerModalTrusteer(modalTrusteer, overlayTrusteer);
	});
	overlayTrusteer.fadeIn(300);
	modalTrusteer.fadeIn(300);
	closeTrusteer.click(function(e) {
		cierraModalTrusteer();
		e.preventDefault();
	});
	overlayTrusteer.unbind('click').click(function(e) {
		cierraModalTrusteer();
		e.preventDefault();
	});
	$('#aquiTrusteer').text('AQUÍ');
}

/**
 * Funcion que cierra la ventana modal
 */
function cierraModalTrusteer() {
	$('#overlayTrusteer').fadeOut(300);
	$('#modalTrusteer').fadeOut(300);
	$(window).unbind('resize.modal');
}

/**
 * Funcion que centra la ventana modal
 * @param modalTrusteer Guarda el objeto que es la ventana modal
 */
function centerModalTrusteer(modalTrusteer, overlayTrusteer) {
	var top, left;
	top = Math.max($(window).height() - modalTrusteer.outerHeight(), 0) / 2;
	left = Math.max($(window).width() - modalTrusteer.outerWidth(), 0) / 2;
	modalTrusteer.css({
		top : top + $(window).scrollTop(), 
		left: left + $(window).scrollLeft()
	});
	overlayTrusteer.css({
		width : $(document).width() + 'px',
		height: $(document).height() + 'px'
	});
}

/*
 * FIN Funciones para el uso de la ventana modal para trusteer
 */