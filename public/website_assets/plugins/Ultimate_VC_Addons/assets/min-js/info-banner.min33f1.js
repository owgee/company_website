!function(a){function b(){a(".ultb3-box").each(function(b,c){var d=a(c).outerHeight(),e=a(c).find(".ultb3-info").outerHeight(),f=(d-e)/2;a(c).find(".ultb3-info").css({top:f})})}a(document).ready(function(){b(),a(window).resize(function(){b()}),jQuery(".ultb3-box .ultb3-info").each(function(){if(jQuery(this).attr("data-animation")){jQuery(this).css("opacity","0");var a=jQuery(this).attr("data-animation"),b="delay-"+jQuery(this).attr("data-animation-delay");jQuery(this).bsf_appear(function(){var c=jQuery(this);c.addClass("animated").addClass(a),c.addClass("animated").addClass(b),c.css("opacity","1")},{accY:-70})}})}),a(window).load(function(){b()})}(jQuery);