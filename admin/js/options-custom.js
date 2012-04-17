/**
 * Prints out the inline javascript needed for the colorpicker and choosing
 * the tabs in the panel.
 */

jQuery(document).ready(function($) {
	
	var Of_options = {};
	if (typeof window.Of_options != 'undefined') {
		Of_options = window.Of_options;
	}
	
	Of_options = $.extend({
		// Defaults
		'fadeDuration': 400,
		'navTabSelector': '.nav-tab-wrapper a'
	}, Of_options);
	
	
	// Fade out the save message
	$('.fade').delay(1000).fadeOut(1000);
	
	// Color Picker
	$('.colorSelector').each(function(){
		var Othis = this; //cache a copy of the this variable for use inside nested function
		var initialColor = $(Othis).next('input').attr('value');
		$(this).ColorPicker({
		color: initialColor,
		onShow: function (colpkr) {
		$(colpkr).fadeIn(Of_options.fadeDuration);
		return false;
		},
		onHide: function (colpkr) {
		$(colpkr).fadeOut(Of_options.fadeDuration);
		return false;
		},
		onChange: function (hsb, hex, rgb) {
		$(Othis).children('div').css('backgroundColor', '#' + hex);
		$(Othis).next('input').attr('value','#' + hex);
	}
	});
	}); //end color picker
	
	// Switches option sections
	$('.group').hide();
	var activetab = '';
	if (typeof(localStorage) != 'undefined' ) {
		activetab = localStorage.getItem("activetab");
	}
	if (activetab != '' && $(activetab).length ) {
		$(activetab).fadeIn(Of_options.fadeDuration);
	} else {
		$('.group:first').fadeIn(Of_options.fadeDuration);
	}
	$('.group .collapsed').each(function(){
		$(this).find('input:checked').parent().parent().parent().nextAll().each( 
			function(){
				if ($(this).hasClass('last')) {
					$(this).removeClass('hidden');
						return false;
					}
				$(this).filter('.hidden').removeClass('hidden');
			});
	});
	
	if (activetab != '' && $(activetab + '-tab').length ) {
		$(activetab + '-tab').addClass('nav-tab-active').trigger('of-tab-active');
	}
	else {
		$(Of_options.navTabSelector+':first').addClass('nav-tab-active').trigger('of-tab-active');
	}
	$(Of_options.navTabSelector).click(function(evt) {
		$(Of_options.navTabSelector).removeClass('nav-tab-active');
		$(this).addClass('nav-tab-active').blur();
		// Trigger a custom event so that the behavior can be extended:
		$(this).trigger('of-tab-active');
		var clicked_group = $(this).attr('href');
		if (typeof(localStorage) != 'undefined' ) {
			// Validate that clicked item is a valid CSS ID selector:
			if ($(this).attr('href').charAt(0) == '#') {
				localStorage.setItem("activetab", $(this).attr('href'));
			}
		}
		$('.group').hide();
		$(clicked_group).fadeIn(Of_options.fadeDuration);
		evt.preventDefault();
	});
           					
	$('.group .collapsed input:checkbox').click(unhideHidden);
				
	function unhideHidden(){
		if ($(this).attr('checked')) {
			$(this).parent().parent().parent().nextAll().removeClass('hidden');
		}
		else {
			$(this).parent().parent().parent().nextAll().each( 
			function(){
				if ($(this).filter('.last').length) {
					$(this).addClass('hidden');
					return false;		
					}
				$(this).addClass('hidden');
			});
           					
		}
	}
	
	// Image Options
	$('.of-radio-img-img').click(function(){
		$(this).parent().parent().find('.of-radio-img-img').removeClass('of-radio-img-selected');
		$(this).addClass('of-radio-img-selected');		
	});
		
	$('.of-radio-img-label').hide();
	$('.of-radio-img-img').show();
	$('.of-radio-img-radio').hide();
		 		
});	