@include('new_website.header')
@yield('content')

<script type="text/javascript">
    if (window.$us === undefined) window.$us = {};
    $us.canvasOptions = ($us.canvasOptions || {});
    $us.canvasOptions.disableEffectsWidth = 900;
    $us.canvasOptions.responsive = true;

    $us.langOptions = ($us.langOptions || {});
    $us.langOptions.magnificPopup = ($us.langOptions.magnificPopup || {});
    $us.langOptions.magnificPopup.tPrev = 'Previous (Left arrow key)'; // Alt text on left arrow
    $us.langOptions.magnificPopup.tNext = 'Next (Right arrow key)'; // Alt text on right arrow
    $us.langOptions.magnificPopup.tCounter = '%curr% of %total%'; // Markup for "1 of 7" counter

    $us.navOptions = ($us.navOptions || {});
    $us.navOptions.mobileWidth = 1000;
    $us.navOptions.togglable = true;
</script>
<script type="text/javascript">$us.headerSettings = {
        "default": {
            "options": {
                "orientation": "hor",
                "sticky": true,
                "scroll_breakpoint": "100",
                "transparent": "0",
                "width": "300",
                "elm_align": "center",
                "top_show": 1,
                "top_height": "40",
                "top_sticky_height": "0",
                "top_fullwidth": "0",
                "middle_height": "100",
                "middle_sticky_height": "50",
                "middle_fullwidth": "0",
                "bg_img": "",
                "bg_img_wrapper_start": "",
                "bg_img_size": "cover",
                "bg_img_repeat": "repeat",
                "bg_img_attachment": "scroll",
                "bg_img_position": "top center",
                "bgimage_wrapper_end": "",
                "bottom_show": 0,
                "bottom_height": "40",
                "bottom_sticky_height": "40",
                "bottom_fullwidth": "0"
            },
            "layout": {
                "top_left": ["text:2", "text:3", "text:4"],
                "top_center": [],
                "top_right": ["socials:1"],
                "middle_left": ["text:1"],
                "middle_center": [],
                "middle_right": ["menu:1", "search:1", "cart:1"],
                "bottom_left": [],
                "bottom_center": [],
                "bottom_right": [],
                "hidden": []
            }
        },
        "tablets": {
            "options": {
                "orientation": "hor",
                "sticky": "1",
                "scroll_breakpoint": "80",
                "transparent": 0,
                "width": 300,
                "elm_align": "center",
                "top_show": 1,
                "top_height": 36,
                "top_sticky_height": 0,
                "top_fullwidth": 0,
                "middle_height": 80,
                "middle_sticky_height": "50",
                "middle_fullwidth": 0,
                "bg_img": "",
                "bg_img_wrapper_start": "",
                "bg_img_size": "cover",
                "bg_img_repeat": "repeat",
                "bg_img_attachment": "scroll",
                "bg_img_position": "top center",
                "bgimage_wrapper_end": "",
                "bottom_show": 0,
                "bottom_height": 50,
                "bottom_sticky_height": 50,
                "bottom_fullwidth": 0
            },
            "layout": {
                "top_left": ["text:2", "text:3", "text:4"],
                "top_center": [],
                "top_right": ["socials:1"],
                "middle_left": ["text:1"],
                "middle_center": [],
                "middle_right": ["menu:1", "search:1", "cart:1"],
                "bottom_left": [],
                "bottom_center": [],
                "bottom_right": [],
                "hidden": []
            }
        },
        "mobiles": {
            "options": {
                "orientation": "hor",
                "sticky": "1",
                "scroll_breakpoint": "50",
                "transparent": 0,
                "width": 300,
                "elm_align": "center",
                "top_show": 0,
                "top_height": 36,
                "top_sticky_height": 0,
                "top_fullwidth": 0,
                "middle_height": 50,
                "middle_sticky_height": 50,
                "middle_fullwidth": 0,
                "bg_img": "",
                "bg_img_wrapper_start": "",
                "bg_img_size": "cover",
                "bg_img_repeat": "repeat",
                "bg_img_attachment": "scroll",
                "bg_img_position": "top center",
                "bgimage_wrapper_end": "",
                "bottom_show": 0,
                "bottom_height": 50,
                "bottom_sticky_height": 50,
                "bottom_fullwidth": 0
            },
            "layout": {
                "top_left": ["text:2", "text:3", "text:4"],
                "top_center": [],
                "top_right": ["socials:1"],
                "middle_left": ["text:1"],
                "middle_center": [],
                "middle_right": ["menu:1", "search:1", "cart:1"],
                "bottom_left": [],
                "bottom_center": [],
                "bottom_right": [],
                "hidden": []
            }
        }
    };</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link rel='stylesheet' id='vc_google_fonts_raleway100200300regular500600700800900-css'
      href='http://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=4.5.3'
      type='text/css' media='all'/>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/plugins/revslider/public/assets/js/jquery.themepunch.tools.min5223.js?ver=5.2.6'
        defer='defer'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min5223.js?ver=5.2.6'
        defer='defer'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/plugins/woocommerce/assets/js/frontend/add-to-cart.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/plugins/woocommerce/assets/js/frontend/woocommerce.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min330a.js?ver=1.4.1'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/plugins/woocommerce/assets/js/frontend/cart-fragments.min72e6.js?ver=2.6.4'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/Zephyr/framework/js/jquery.easing.min62d0.js?ver=4.5.3'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/Zephyr/framework/js/jquery.magnific-popupf488.js?ver=1.1.0'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/Zephyr/framework/js/jquery.simpleplaceholder62d0.js?ver=4.5.3'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/Zephyr/framework/js/imagesloaded62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/themes/Zephyr/framework/js/us.core5589.js?ver=3.4.1'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/themes/Zephyr/framework/js/us.widgets5589.js?ver=3.4.1'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/themes/Zephyr/js/us.theme5589.js?ver=3.4.1'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/Zephyr/framework/js/mediaelement-and-player.min62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/js/custom.js'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/js/slider.js'></script>
<footer class="l-footer" itemscope="itemscope" itemtype="https://schema.org/WPFooter">

    <div class="l-subfooter at_top">
        <div class="l-subfooter-h i-cf">
            <div class="g-cols offset_medium">
                <div class="in_col-sm-6">
                    <div id="text-7" class="widget widget_text"><h4>About INETS</h4>
                        <div class="textwidget">Our company was officially registered in July 2012 under BRELA in Tanzania and started
                            it's operation officially in July 2014, 2 years after registration.
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
                    <div id="search-3" class="widget widget_search"><h4>Search Something</h4>
                        <div class="w-form for_search" id="us_form_1">
                            <form class="w-form-h" autocomplete="off" action="#"
                                  method="get">
                                <div class="w-form-row for_s">
                                    <div class="w-form-row-label">
                                        <label for="us_form_1_s"></label>
                                    </div>
                                    <div class="w-form-row-field">
                                        <input type="text" name="s" id="us_form_1_s" value=""
                                               placeholder="search ..."/>
                                        <span class="w-form-row-field-bar"></span>
                                    </div>
                                    <div class="w-form-row-state"></div>
                                </div>
                                <div class="w-form-row for_submit">
                                    <div class="w-form-row-field">
                                        <button class="w-btn" type="submit"><span class="g-preloader type_1"></span><span
                                                    class="w-btn-label">Search</span></button>
                                    </div>
                                </div>
                                <div class="w-form-message"></div>
                            </form>
                        </div>
                    </div>
                    <div id="text-6" class="widget widget_text">
                        <div class="textwidget">
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_action_home"></i></div>
                                <h4 class="w-iconbox-title">Block 11, Mikocheni B, Dar es Salaam, Tanzania</h4></div>
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_content_mail"></i></div>
                                <h4 class="w-iconbox-title">info@inetstz.com</h4></div>
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_communication_phone"></i></div>
                                <h4 class="w-iconbox-title">+255 222 228 780</h4></div>
                            <div class="w-iconbox iconpos_left size_tiny style_default color_contrast">
                                <div class="w-iconbox-icon"><i class="mdfi_action_print"></i></div>
                                <h4 class="w-iconbox-title">+255 655 406 004</h4></div>
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
                            href="../index.html" id="menu-item-3693"><span>Home</span></a><a
                            class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                            href="../pages/about/index.html" id="menu-item-3615"><span>About</span></a><a
                            class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                            href="../portfolio-3/index.html" id="menu-item-3616"><span>Services</span></a><a
                            class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                            href="../blog-cards-5-columns/index.html" id="menu-item-4384"><span>Portfolio</span></a><a
                            class="w-menu-item menu-item menu-item-type-post_type menu-item-object-page"
                            href="../pages/contact/index.html" id="menu-item-3613"><span>Products</span></a></div>
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

<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter21110668 = new Ya.Metrika({
                    id: 21110668,
                    webvisor: true,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () {
                    n.parentNode.insertBefore(s, n);
                };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") +
                "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="http://mc.yandex.ru/watch/21110668" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
@yield('footer')
