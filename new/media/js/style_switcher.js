var wide_width = '978';
var layout_mode = 'widemode';
var boxed_width = '1078';
function updateThemeWidth() {
	jQuery('.container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container').animate({'max-width': wide_width});
	if ( layout_mode == 'boxedmode' ) {
		if ( wide_width == '1170' ) {
			boxed_width = '1200';
		} else {
			boxed_width = '1078';
		}
		jQuery('.boxed .body-wrapper, .boxed .body-wrapper .navbar, .boxed .body-wrapper .top-bar').animate({'max-width': boxed_width});
	} else {
		jQuery('.body-wrapper, .body-wrapper .navbar, .body-wrapper .top-bar').animate({'max-width': '100%'});
	}
}
function updateThemeStyle(e) {
	if (e == 'simple') {
		jQuery('.content-bubble-triangle, .bubble-triangle, .features-triangle, .nav-active-arrow, .title-bubble-triangle').css({'border-width': 0});
	} else if (e == 'stylish')  {
		jQuery('.content-bubble-triangle, .features-triangle, .title-bubble-triangle').css({'border-top-width' : '30px'});
		jQuery('.content-bubble-triangle, .features-triangle, .title-bubble-triangle').css({'border-right-width' : '30px'});
		jQuery('.bubble-triangle').css({'border-top-width' : '50px'});
		jQuery('.bubble-triangle').css({'border-right-width' : '50px'});
		jQuery('.nav-active-arrow').css({'border-top-width' : '22px'});
		jQuery('.nav-active-arrow').css({'border-right-width' : '22px'});	
	} else if (e == 'dark') {
		jQuery('.navbar-inner').css({'background-color' : '#444'});
		jQuery('.sf-menu > li > a').css({'color' : '#ddd'});
	} else if (e == 'light') {
		jQuery('.navbar-inner').css({'background-color' : '#f7f7f7'});
		jQuery('.sf-menu > li > a').css({'color' : '#444'});
	} else if (e == 'widemode') {
		jQuery('body').removeClass('boxed');
		updateThemeWidth();
	} else if (e == 'boxedmode') {
		jQuery('body').addClass('boxed');
		updateThemeWidth();
	}
}

jQuery(document).ready(function() {
	jQuery('<style type="text/css" id="style_switcher" />').appendTo('head');
});
jQuery('.w978').click(function() {
	wide_width = '978';
	updateThemeWidth();
});
jQuery('.w1170').click(function() {
	wide_width = '1170';
	updateThemeWidth();
});
jQuery('.simple').click(function() {
	updateThemeStyle('simple');
});
jQuery('.stylish').click(function() {
	updateThemeStyle('stylish');
});
jQuery('.dark').click(function() {
	updateThemeStyle('dark');
});
jQuery('.light').click(function() {
	updateThemeStyle('light');
});
jQuery('.widemode').click(function() {
	layout_mode = 'widemode';
	updateThemeStyle('widemode');
});
jQuery('.boxedmode').click(function() {
	layout_mode = 'boxedmode';
	updateThemeStyle('boxedmode');
});
jQuery('.style_green').click(function() {
	jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/green.css" type="text/css" />');
});
jQuery('.style_blue').click(function() {
	jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/blue.css" type="text/css" />');
});
jQuery('.style_red').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/red.css" type="text/css" />');
});
jQuery('.style_turquoise').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/turquoise.css" type="text/css" />');
});
jQuery('.style_turquoise2').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/turquoise2.css" type="text/css" />');
});
jQuery('.style_purple').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/purple.css" type="text/css" />');
});
jQuery('.style_orange').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/orange.css" type="text/css" />');
});
jQuery('.style_brown').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/brown.css" type="text/css" />');
});
jQuery('.style_black').click(function() {
		jQuery('head').append('<link rel="stylesheet" href="/ventus/wp-content/themes/ventus/assets/css/colours/black.css" type="text/css" />');
});