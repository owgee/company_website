(function($){
	$.fn.wSwitcher = function(options){

		var defaultOptions = {},
			obj = $.extend(defaultOptions, options);

		return this.each(function(){
			var $switcher = $(this),
				$control = $switcher.find('.w-switcher-control.for_style'),
				$canvas = $('.l-canvas'),
				$layoutBtns = $switcher.find('.w-switcher-section.for_layout .w-switcher-section-item'),
				colorSwitched = false;

			$control.click(function(){
				$switcher.toggleClass('open');
			});

			var curType = $canvas.usMod('type');
			$switcher.find('.layout_type_' + curType).addClass('active');

			$layoutBtns.click(function(){
				var $this = $(this);
				if ($this.hasClass('active')) return;
				var value = $this.attr('data-value');
				$layoutBtns.removeClass('active');
				$this.addClass('active');
				$canvas.usMod('type', value);
				// Redrawing all the Revolution Sliders
				if (window.revapi3 !== undefined && window.revapi3.revredraw !== undefined) {
					window.revapi3.revredraw();
				}
			});

			var $styleSchemes = {},
				$ssHtmlContainer = $('#us-style-schemes'),
				ssHtml = $ssHtmlContainer.html(),
				$ssContainer = $('<div>');

			var entities = [
				['apos', '\''],
				['amp', '&'],
				['lt', '<'],
				['gt', '>']
			];
			for (var i = 0, max = entities.length; i < max; ++i) {
				ssHtml = ssHtml.replace(new RegExp('&' + entities[i][0] + ';', 'g'), entities[i][1]);
			}

			var activeStyleScheme = null;
			var $colorBtns = $('.w-switcher-section.for_color .w-switcher-section-item');
			$('.us-style-scheme').each(function(){
				var $this = $(this),
					id = $this.attr('id').substr(16);
				$styleSchemes[id] = $this;
				$colorBtns.removeClass('active').filter('[data-value="' + id + '"]').addClass('active');
				activeStyleScheme = id;
			});

			$ssContainer.html(ssHtml).find('.us-style-scheme').each(function(){
				var $this = $(this),
					id = $this.attr('id').substr(16);
				$styleSchemes[id] = $this;
				$this.detach();
			});
			$ssContainer.remove();
			$ssHtmlContainer.remove();

			var showStyleScheme = function(id){
				if (id == activeStyleScheme || $styleSchemes[id] === undefined) return;
				if ($styleSchemes[activeStyleScheme] !== undefined) $styleSchemes[activeStyleScheme].detach();
				$styleSchemes[id].appendTo($('head'));
				if ( ! colorSwitched) {
					$('#us-theme-options-css').remove();
					colorSwitched = true;
				}
				$colorBtns.removeClass('active').filter('[data-value="' + id + '"]').addClass('active');
				activeStyleScheme = id;
			};
			$colorBtns.click(function(){
				showStyleScheme($(this).data('value'));
			});

		});
	}
})(jQuery);

jQuery(document).ready(function(){
	jQuery('.w-switcher:first').wSwitcher();
});

