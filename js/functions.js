/**
 * Placeholder plugin for jQuery
 * Version: 3.0.0
 * http://vermeertech.nl
 * Copyright (c) 2012 Rob Vermeer
 * http://vermeertech.nl
 * 19 May, 2012
 */
;(function($){$.fn.placeholder=function(options){var defaults={cssClass:'placeholder'},opts=$.extend(defaults,options),support='placeholder'in document.createElement('input');if(support)return;return this.each(function(){var form=$(this);form.find(':input').each(function(){var input=$(this),placeholder=input.attr("placeholder");if(!placeholder)return;if(!input.val()||input.val()==placeholder)input.val(placeholder).addClass(opts.cssClass);form.on('focus','.'+opts.cssClass,function(){$(this).val('').removeClass(opts.cssClass)});$(input).on('blur',function(){var input=$(this);if(!input.val())input.val(input.attr("placeholder")).addClass(opts.cssClass)})});form.submit(function(){$(this).find('.'+opts.cssClass).val('')})})}})(jQuery);

/**
 * Selectbox plugin for jQuery
 * Version: 1.0.0
 * http://vermeertech.nl
 * Copyright (c) 2011 Rob Vermeer
 * http://vermeertech.nl
 * 13 Februari, 2012
 */
;(function($){$.fn.selectbox=function(options){var defaults={callback:function(){}};var opts=$.extend(defaults,options);var selectbox=1;$('html').click(function(){$(".selectbox").find('ul').hide()});return this.each(function(){var $this=$(this);$this.hide();$this.attr('id','sb_'+selectbox);$this.before('<div class="selectbox sb_'+selectbox+'"><span>'+$this.children().first().text()+'</span></div>');$(".sb_"+selectbox).data('sb',selectbox).append('<ul></ul>');$($this).find('option').each(function(){$(".sb_"+selectbox+' ul').append('<li>'+$(this).text()+'</li>').hide()});$($this).find('option:selected').each(function(){$(".sb_"+selectbox+' span').text($(this).text())});$(".sb_"+selectbox).click(function(e){$(this).find('ul').toggle();e.stopPropagation()});$(".sb_"+selectbox+' li').click(function(){var $this=$(this);var sb_id=$this.parent().parent().data('sb');var this_val=$this.html();$this.parent().parent().find('span').text(this_val);$('#sb_'+sb_id+' option[selected]').removeAttr("selected");$('#sb_'+sb_id).children().filter(function(){return $(this).text()==this_val}).attr("selected","selected");opts.callback.call(this)});selectbox++})}})(jQuery);

/* Functions for PopupVenue */
;(function($){
	var $window = $(window),
		$body = $("body"),
		$form = $("form"),
		$searchsubmit = $(".search-submit"),
		$s = $("#s"),
		$htmlbody = $('html, body'),
		aboveHeight = $('header').outerHeight(),
		fh = $('footer').offset().top,
		$footer = $("footer"),
		$top = $(".top");
	
	$body.removeClass("no-js").addClass("js");
	$form.placeholder();
	$("select").selectbox();
	
	/* Prevent empty search */
	$searchsubmit.on("click",  function(e) {
		if ($s.val() == $s.attr("placeholder") || $s.val() == "") {
			$s.focus()
			e.preventDefault();
		}
	});
		
	$window.scroll( function() {
        if( $window.scrollTop() > aboveHeight )
			$top.fadeIn(200);
		else
			$top.not(":animated").fadeOut(200);
		
        if( $window.scrollTop() > $footer.offset().top - $window.height() )
			$top.addClass('fixed');
		else
			$top.removeClass('fixed');
	});	

	$top.on("click", function(e) {
		$htmlbody.animate({scrollTop : (0)}, 200);
		e.preventDefault();
	});
		
})(window.jQuery);