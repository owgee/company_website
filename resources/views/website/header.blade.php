<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 11/08/2016
 * Time: 8:58 PM
 */ ?>
<!DOCTYPE HTML>
<html class="" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="alternate" type="application/rss+xml" title="INETS website&raquo; Feed"
          href="#"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <meta name="og:title" content="INETS Company Limited">
    <meta name="og:type" content="website">
    <meta name="theme-color" content="#03A9F4"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="Title" content="INETS Company Limited � Official Home Page" />
    <!--<meta name="CorrelationVector" content="MlxRoJqpv0OEKCvu.7" />-->
    <meta name='description' content='We are Software Development Company that offers online services and focus on enterprise software solutions, Payment System Design & Integration, Mobile applications and Linux Server Configuration' />
    <meta name="keywords" content="Inets, Inets Company Limited, Software development company, web development, Web design, custom software, Linux Administration, Database design, Enterprise Software company , Mobile app development, Payment System Design and Integration, Credit & Debit card payment integration, mobile money (m-pesa,tigo-pesa & airtel-money) integration, PayPal payment integration, software development company, Tanzania software development company, Software company in Tanzania">
    <link rel="shortcut icon" href="http://inetstz.com/media/img/favicon.png">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#1ac6ff">
    <meta property="og:locale" content="en_TZ">
    <meta property="og:site_name" content="Inets Company Limited">
    <meta property="og:title" content="Inets Company Limited ">
    <meta property="og:url" content="http://inetstz.com/">
    <meta property="og:image" content="http://inetstz.com/media/img/favicon.png">
    <meta property="og:description" content="We are Software Development Company that offers online services and focus on enterprise software solutions, Payment System Design & Integration, Mobile applications and Linux Server Configuration">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@inetstz">
    <meta name="twitter:title" content="Inets Company Limited">
    <meta name="twitter:description" content="Software Development Company.">
    <meta name="twitter:image:src" content="http://inetstz.com/media/img/logo.png">
    <meta name="twitter:domain" content="http://inetstz.com/">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    
    
    <script   src="{{url('/')}}/js/jquery.min.js" ></script>
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href='{{url('/')}}/website_assets/plugins/revslider/public/assets/css/settings5223.css' type='text/css'
          media='all'/>
         
    <link rel="shortcut icon" href="{{url('/')}}/website_assets/img/favicon.png">
          
    <link rel='stylesheet' id='us-font-1-css'
          href='http://fonts.googleapis.com/css?family=Roboto%3A300%2C400%2C700%2C400italic&amp;subset=latin&amp;ver=4.5.3'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='us-woocommerce-css'
          href='{{url('/')}}/website_assets/themes/css/us.woocommerce5589.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='us-base-css'
          href='{{url('/')}}/website_assets/themes/framework/css/us-base5589.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='us-font-awesome-css'
          href='{{url('/')}}/website_assets/themes/framework/css/font-awesome4698.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='us-font-mdfi-css'
          href='{{url('/')}}/website_assets/themes/framework/css/font-mdfi68b3.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='us-style-css' href='{{url('/')}}/website_assets/themes/css/style5589.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='us-responsive-css'
          href='{{url('/')}}/website_assets/themes/css/responsive5589.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='bsf-Defaults-css'
          href='{{url('/')}}/website_assets/uploads/smile_fonts/Defaults/Defaults62d0.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='bsf-Defaults-css'
          href='{{url('/')}}/css/custom.min.css' id='rs-plugin-settings-inline-css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='bsf-Defaults-css'
          href='{{url('/')}}/css/header.min.css'  type='text/css'
          media='all'/>
    <script type='text/javascript' src='{{url("/")}}/website_assets/js/jquery/jqueryb8ff.js'></script>
    <script type='text/javascript' src='{{url("/")}}/website_assets/js/jquery/jquery-migrate.min330a.js'></script>
    <link rel='https://api.w.org/' href='{{url('/')}}/website_assets/index.html'/>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd"/>
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{url('/')}}/website_assets/wlwmanifest.xml"/>

    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css"
          href="website_assets/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
          media="screen"><![endif]--><!--[if IE  8]>
    <link rel="stylesheet" type="text/css"
          href="website_assets/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen">
    <![endif]-->

    <noscript>
        <style type="text/css">.wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
</head>

{{--Put oncontextmenu="return false" on body tag to prevent mouse right click--}}
<body  class="page page-id-9 page-template-default l-body inets_site Header_Builder header_hor state_default woocommerce-type_2 columns-3 wpb-js-composer js-comp-ver-4.12 vc_responsive"
      itemscope="itemscope" itemtype="https://schema.org/WebPage">
<div class='l-preloader'>
    <div class='l-preloader-spinner'>
        <div class='g-preloader  type_1'>
            <div class='g-preloader-h'></div>
        </div>
    </div>
</div>

<div class="l-canvas sidebar_none type_wide titlebar_none">
    <header class="l-header pos_fixed bg_solid shadow_thin" itemscope="itemscope"
            itemtype="https://schema.org/WPHeader">
        <div class="l-subheader at_top">
            <div class="l-subheader-h">
                <div class="l-subheader-cell at_left">
                    <div class="w-text ush_text_2">
                        <div class="w-text-h"><i class="fa fa-phone"></i><span
                                    class="w-text-value">+255 222 780 228</span></div>
                    </div>
                    <div class="w-text ush_text_3">
                        <div class="w-text-h"><i class="fa fa-envelope"></i><a class="w-text-value"
                                                                               href="mailto:info@inetstz
                                                                                       .com">info@inetstz
                                .com</a></div>
                    </div>
                    {{--<div class="w-text ush_text_4">--}}
                        {{--<div class="w-text-h"><i class="mdfi_action_lock"></i><a class="w-text-value"--}}
                                                                                 {{--href="{{url('/')}}/admin">Admin--}}
                                {{--login</a></div>--}}
                    {{--</div>--}}
                </div>
                <div class="l-subheader-cell at_center"></div>
                <div class="l-subheader-cell at_right">
                    <div class="w-socials style_desaturated hover_default ush_socials_1">
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
        </div>
        <div class="l-subheader at_middle">
            <div class="l-subheader-h">
                <div class="l-subheader-cell at_left">
                    <div class="w-text ush_text_1">
                        <div class="w-text-h"><a class="w-text-value"
                                                 href="{{url('')}}"><img src="{{url("website_assets/img/logo-white.png")}}" alt="Inets Logo" width="90" height="5"></a></div>
                    </div>
                </div>
                <div class="l-subheader-cell at_center"></div>
                <div class="l-subheader-cell at_right">
                    <nav class="w-nav type_desktop animation_mdesign ush_menu_1" itemscope="itemscope"
                         itemtype="https://schema.org/SiteNavigationElement"><a class="w-nav-control"
                                                                                href="javascript:void(0);"></a>
                        <ul class="w-nav-list level_1 hover_simple hidden">
                           
                         
 <li id="menu-item-3594"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3594">
                                <a class="w-nav-anchor level_1" href="{{url('/about')}}"><span
                                            class="w-nav-title">About us</span><span class="w-nav-arrow"></span></a>
                            </li>
			     <li id="menu-item-4759"
                                class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-4760">
                                <a class="w-nav-anchor level_1" href="{{url('/testimonial')}}"><span class="w-nav-title">Testimonials</span><span
                                            class="w-nav-arrow"></span></a></li>
			    <li id="menu-item-4759"
                                class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-4760">
                                <a class="w-nav-anchor level_1" href="{{url('/events')}}"><span class="w-nav-title">Events</span><span
                                            class="w-nav-arrow"></span></a></li>
                            <li id="menu-item-3594"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3594">
                                <a class="w-nav-anchor level_1" href="#"><span
                                            class="w-nav-title">Services</span><span class="w-nav-arrow"></span></a>
                                <ul class="w-nav-list level_2">
				         <li id="menu-item-3598"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3598">
                                        <a class="w-nav-anchor level_2" href="{{url('/service',['enterprise-software'])}}"><span
                                                    class="w-nav-title">Enterprise Software</span><span
                                                    class="w-nav-arrow"></span></a></li>
				    <li id="menu-item-4257"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-4257">
                                        <a class="w-nav-anchor level_3"
                                           href="{{url('/service',['payment-integration'])}}"><span class="w-nav-title">Payment Integration</span><span
                                                    class="w-nav-arrow"></span></a>

                                    </li>
				    
                                    <li id="menu-item-3597"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3597">
                                        <a class="w-nav-anchor level_2" href="{{url('/service',['mobile-apps'])}}"><span
                                                    class="w-nav-title">Mobile Apps</span><span
                                                    class="w-nav-arrow"></span></a></li>
                               
                                    <li id="menu-item-3612"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3612">
                                        <a class="w-nav-anchor level_2" href="{{url('/service',['database-design'])}}"><span
                                                    class="w-nav-title">Database Design</span><span
                                                    class="w-nav-arrow"></span></a></li>
                                    <li id="menu-item-3595"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3595">
                                        <a class="w-nav-anchor level_2" href="{{url('/service',['linux-administration'])}}"><span
                                                    class="w-nav-title">Linux Administration</span><span
                                                    class="w-nav-arrow"></span></a></li>
                                    
                                </ul>
                            </li>
                            {{--<li id="menu-item-3637"--}}
                                {{--class="columns_3 menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-3637">--}}
                                {{--<a class="w-nav-anchor level_1" href="#clients"><span--}}
                                            {{--class="w-nav-title">CLIENTS</span><span--}}
                                            {{--class="w-nav-arrow"></span></a>--}}
                                {{----}}
                            {{--</li>--}}
                            {{--<li id="menu-item-5294"--}}
                                {{--class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children w-nav-item level_1 menu-item-5294">--}}
                                {{--<a class="w-nav-anchor level_1" href="{{url('',['projects'])}}"><span--}}
                                            {{--class="w-nav-title">Projects</span><span class="w-nav-arrow"></span></a>--}}

                            {{--</li>--}}

			    
	
			    
			    
			    
                            <li id="menu-item-4760"
                                class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-4760  menu-item-has-children">
                                <a class="w-nav-anchor level_1" href="{{url('',['products'])}}"><span class="w-nav-title">Products</span><span
                                            class="w-nav-arrow"></span></a>
					    
					     <ul class="w-nav-list level_2">
				         <li id="menu-item-3598"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3598">
                                        <a class="w-nav-anchor level_2" href="{{url('/product',['shulesoft'])}}"><span
                                                    class="w-nav-title">ShuleSoft</span><span
                                                    class="w-nav-arrow"></span></a></li>
				    <li id="menu-item-4257"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-4257">
                                        <a class="w-nav-anchor level_3"
                                           href="{{url('/product',['file-tracking'])}}"><span class="w-nav-title">E-Format File Tracking</span><span
                                                    class="w-nav-arrow"></span></a>

                                    </li>
				    
                                    <li id="menu-item-3597"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3597">
                                        <a class="w-nav-anchor level_2" href="{{url('/product',['karibusms'])}}"><span
                                                    class="w-nav-title">KaribuSMS</span><span
                                                    class="w-nav-arrow"></span></a></li>
                               
                                    <li id="menu-item-3612"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3612">
                                        <a class="w-nav-anchor level_2" href="{{url('/product',['rn'])}}"><span
                                                    class="w-nav-title">Pre-paid Meters</span><span
                                                    class="w-nav-arrow"></span></a></li>
                                    <li id="menu-item-3595"
                                        class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_2 menu-item-3595">
                                        <a class="w-nav-anchor level_2" href="{{url('/product',['staytz'])}}"><span
                                                    class="w-nav-title">StayTZ</span><span
                                                    class="w-nav-arrow"></span></a></li>
                                    
                                </ul>
				
                            </li>
                            <li id="menu-item-4759"
                                class="menu-item menu-item-type-post_type menu-item-object-page w-nav-item level_1 menu-item-4760">
                                <a class="w-nav-anchor level_1" href="{{url('',['contact-us'])}}"><span class="w-nav-title">Contact Us</span><span
                                            class="w-nav-arrow"></span></a></li>
                        </ul>
                        <div class="w-nav-options hidden"
                             onclick='return {&quot;mobileWidth&quot;:1000,&quot;mobileBehavior&quot;:1}'></div>
                    </nav>
                    <div class="w-search layout_fullscreen ush_search_1">
                        <div class="w-search-background"></div>
                        <div class="w-search-form">
                            <form class="w-search-form-h" autocomplete="off" action="<?=  url('/search-result')?>"
                                  method="get">
                                <div class="w-search-form-field"><input type="text" name="s" id="us_form_search_s"
                                                                        placeholder="Type and press enter..."/><span
                                            class="w-form-row-field-bar"></span></div>
                                <div class="w-search-close"></div>
                            </form>
                        </div>
                        <!--<a class="w-search-open" href="javascript:void(0);"></a>-->
		    </div>

                </div>


            </div>
        </div>
        <div class="l-subheader at_bottom">
            <div class="l-subheader-h">
                <div class="l-subheader-cell at_left"></div>
                <div class="l-subheader-cell at_center"></div>
                <div class="l-subheader-cell at_right"></div>
            </div>
        </div>
        <div class="l-subheader for_hidden hidden"></div>
    </header>
