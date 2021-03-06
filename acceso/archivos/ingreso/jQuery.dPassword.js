(function($){
   $.fn.dPassword = function(options) {
      var defaults = {
         interval:      200,
         duration:      1100,
         replacement:   '%u25CF',
         prefix:        'password_',
         debug:  			false
      }
      var opts    = $.extend(defaults, options);
      var checker = new Array();
      var timer   = new Array();
      $(this).each(function() {
         if (opts.debug) console.log('init [' + $(this).attr('id') + ']');
         // get original password tag values
         var name        = $(this).attr('name');
         var id          = $(this).attr('id');
         var cssclass    = $(this).attr('class');
         var style       = $(this).attr('style');
         var size        = $(this).attr('size');
         var maxlength   = $(this).attr('maxlength');
         var disabled    = $(this).attr('disabled');
         var tabindex    = $(this).attr('tabindex');
         var accesskey   = $(this).attr('accesskey');
         var value       = $(this).attr('value');
         checker.push(id);
         timer.push(id);
         $(this).hide();
         if (opts.debug) {
				$(this).after('<span id="debug_' + opts.prefix + name + '" style="color: #f00;"></span>');         
         }
         $(this).after(' <input name="' + (opts.prefix + name) + '" ' +
                                 'id="' +  (opts.prefix + id) + '" ' + 
                               'type="text" ' +
                              'value="' + value + '" ' +
               (cssclass != '' ? 'class="' + cssclass + '"' : '') +
               (style != '' ? 'style="' + style + '"' : '') +
                 (size != '' ? 'size="' + size + '"' : '') +
       (maxlength != -1 ? 'maxlength="' + maxlength + '"' : '') +
         (disabled != '' ? 'disabled="' + disabled + '"' : '') +
         (tabindex != '' ? 'tabindex="' + tabindex + '"' : '') +
 (accesskey != undefined ? 'accesskey="' + accesskey + '"' : '') +
                      'autocomplete="off" />');
         $('label[for='+id+']').attr('for', opts.prefix + id);
         $(this).attr('tabindex', '');
         $(this).attr('accesskey', '');
         $('#' + opts.prefix + id).bind('focus', function(event) {
            if (opts.debug) console.log('event: focus [' + getId($(this).attr('id')) + ']');
            clearTimeout(checker[getId($(this).attr('id'))]);
            checker[getId($(this).attr('id'))] = setTimeout("check('" + getId($(this).attr('id')) + "', '')", opts.interval);
         });
         $('#' + opts.prefix + id).bind('blur', function(event) {
            if (opts.debug) console.log('event: blur [' + getId($(this).attr('id')) + ']');
            clearTimeout(checker[getId($(this).attr('id'))]);
         });
			setTimeout("check('" + id + "', '', true);", opts.interval);
      });
      getId = function(id) {
         var pattern = opts.prefix+'(.*)';
         var regex = new RegExp(pattern);
         regex.exec(id);
         id = RegExp.$1;
         return id;
      }
      setPassword = function(id, str) {
         if (opts.debug) console.log('setPassword: [' + id + ']');
         var tmp = '';
         for (i=0; i < str.length; i++) {
            if (str.charAt(i) == unescape(opts.replacement)) {
               tmp = tmp + $('#' + id).val().charAt(i);
            }
            else {
               tmp = tmp + str.charAt(i);
            }
         }
         $('#' + id).val(tmp);
      }
      
      check = function(id, oldValue, initialCall) {
	   var tam = document.getElementById(id).getAttribute("maxlength");
         if (opts.debug) console.log('check: [' + id + ']');
         
         var bullets = $('#' + opts.prefix + id).val();
         if (oldValue != bullets) {
            setPassword(id, bullets);
            if (bullets.length > 1 && bullets.length < tam-4) {
               var tmp = '';
               for (i=0; i < bullets.length-1; i++) {
                  tmp = tmp + unescape(opts.replacement);
               }
               tmp = tmp + bullets.charAt(bullets.length-1);
   
               $('#' + opts.prefix + id).val(tmp);
            }
			
			else if (bullets.length >= tam-4){
					convertLastChar(id);
			}
            else  {
				   clearTimeout(timer[id]);
            timer[id] = setTimeout("convertLastChar('" + id + "')", opts.duration);
            }
         }
         if (opts.debug) {
         	$('#debug_' + opts.prefix + id).text($('#' + id).val());
         }
         if (!initialCall) {
	         checker[id] = setTimeout("check('" + id + "', '" + $('#' + opts.prefix + id).val() + "', false)", opts.interval);
			}
      }
      convertLastChar = function(id) {
		var tam = document.getElementById(id).getAttribute("maxlength");
         if ($('#' + opts.prefix + id).val() != '') {
            var tmp = '';
            for (i=0; i < $('#' + opts.prefix + id).val().length; i++) {
            		if(i < tam-4)
               tmp = tmp + unescape(opts.replacement);
               else
               	tmp = tmp + $('#' + opts.prefix + id).val().substring(i,i+1);
            }
   
            $('#' + opts.prefix + id).val(tmp);
         }
      }
   };
}) (jQuery);