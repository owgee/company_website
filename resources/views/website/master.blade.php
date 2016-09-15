@include('website.header')
@yield('content')
@extends('website.links')
<footer class="l-footer" itemscope="itemscope" itemtype="https://schema.org/WPFooter">

    <div class="l-subfooter at_top">
        <div class="l-subfooter-h i-cf">
            <div class="g-cols offset_medium">
                <div class="in_col-sm-6">
                    <div id="text-7" class="widget widget_text"><h4>About INETS</h4>
                        <div class="textwidget">We are software development company, design and develop Enterprise applications, payment systems, mobile applications, databases configurations and Linux servers administration.
                        </div>
                    </div>
                    <div id="us_socials-2" class="widget widget_us_socials">
                        <div class="w-socials align_left style_desaturated" style="font-size: 24px;">
                            <div class="w-socials-list">
                                <div class="w-socials-item facebook">
                                    <a class="w-socials-item-link" target="_blank" href="https://www.facebook.com/inets">
                                        <span class="w-socials-item-link-hover"></span>
                                    </a>
                                    <div class="w-socials-item-popup">
                                        <span>Facebook</span>
                                    </div>
                                </div>
                                <div class="w-socials-item twitter">
                                    <a class="w-socials-item-link" target="_blank" href="https://twitter.com/Inetstz">
                                        <span class="w-socials-item-link-hover"></span>
                                    </a>
                                    <div class="w-socials-item-popup">
                                        <span>Twitter</span>
                                    </div>
                                </div>
                                <div class="w-socials-item instagram">
                                    <a class="w-socials-item-link" target="_blank" href="https://www.instagram.com/inetscompany">
                                        <span class="w-socials-item-link-hover"></span>
                                    </a>
                                    <div class="w-socials-item-popup">
                                        <span>Instagram</span>
                                    </div>
                                </div>
                                <div class="w-socials-item google">
                                    <a class="w-socials-item-link" target="_blank" href="https://plus.google.com/u/0/b/115817418998123742140/115817418998123742140">
                                        <span class="w-socials-item-link-hover"></span>
                                    </a>
                                    <div class="w-socials-item-popup">
                                        <span>Google +</span>
                                    </div>
                                </div>

                                <div class="w-socials-item linkedin">
                                    <a class="w-socials-item-link" target="_blank" href="https://www.linkedin.com/company/inets">
                                        <span class="w-socials-item-link-hover"></span>
                                    </a>
                                    <div class="w-socials-item-popup">
                                        <span>LinkedIn</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="in_col-sm-4">

                </div>
                <div class="in_col-sm-6">

                    <div id="text-6" class="widget widget_text">
                        <div class="textwidget">
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_action_home"></i></div>
                                <h4 class="w-iconbox-title">Block 11, Mikocheni B, Dar es Salaam, Tanzania</h4></div>
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_content_mail"></i></div>
                                <h4 class="w-iconbox-title"><a href="mailto:info@inetstz.com">info@inetstz.com</a></h4></div>
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_communication_phone"></i></div>
                                <h4 class="w-iconbox-title"><a href="tel:+255222228780 ">+255 222 228 780</a></h4></div>
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_communication_call"></i></div>
                                <h4 class="w-iconbox-title"><a href="tel:+255655406004">+255 655 406 004</a></h4></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="l-subfooter at_bottom">
        <div class="l-subfooter-h i-cf">
            <div class="w-menu ">
                <div class="w-menu-list"><a
			class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
			href="<?= url('/privacy') ?>" id="menu-item-3693"><span>Privacy</span></a><a
			class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
			href="<?= url('/terms-of-use') ?>" id="menu-item-3615"><span>Terms of Use</span></a>
		    <!--		    <a
						class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
						href="<?= url('/copyright') ?>" id="menu-item-3616"><span>Copyright</span></a>-->
		    <!--		    <a
						class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
						href="<?= url('/career') ?>" id="menu-item-4384"><span>Career</span></a>-->
		    <a
			class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
			href="<?= url('/products') ?>" id="menu-item-3613"><span>Products</span></a></div>
            </div>
            <div class="w-copyright">© <?= date('Y') ?> All rights reserved. INETS Co Ltd
            </div>
        </div>
    </div>
</footer>

<a class="w-header-show" href="javascript:void(0);"></a>
<a class="w-toplink" href="#" title="Back to top"></a>
<textarea id="us-style-schemes" style="display:none">


</textarea>
<script type="text/javascript" src="{{url('/')}}/website_assets/plugins/us-switcher/w-switcher5589.js?ver=3.4.1" async></script>
<link rel="stylesheet" type="text/css" media="all"
      href="{{url('/')}}/website_assets/plugins/us-switcher/switcher5589.css?ver=3.4.1"/>
<script type='text/javascript'
src='{{url('/')}}/website_assets/themes/framework/js/owl.carousel.min001e.js?ver=2.0.0'></script>
<script type="text/javascript">
	search = function () {
	    var hash = window.location.hash;
//	    var replaced = $("body").html().replace(/herein/g, 'The ALL new string');
//	    $("body").html(replaced);
	}
$(document).ready(search);
</script>
<noscript>
<div>Please enable Javascript</div>
</noscript>
@yield('footer')
