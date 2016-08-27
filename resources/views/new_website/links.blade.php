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
        src='{{url("/")}}/website_assets/themes/framework/js/jquery.easing.min62d0.js?ver=4.5.3'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/framework/js/jquery.magnific-popupf488.js?ver=1.1.0'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/framework/js/jquery.simpleplaceholder62d0.js?ver=4.5.3'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/framework/js/imagesloaded62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/themes/framework/js/us.core5589.js'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/themes/framework/js/us.widgets5589.js'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/themes/js/us.theme5589.js?ver=3.4.1'></script>
<script type='text/javascript'
        src='{{url("/")}}/website_assets/themes/framework/js/mediaelement-and-player.min62d0.js?ver=4.5.3'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/js/custom.js'></script>
<script type='text/javascript' src='{{url("/")}}/website_assets/js/slider.js'></script>