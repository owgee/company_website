@extends('website.master')
@section('title', 'Contact Us')
@section('content')
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
    {{--<script type='text/javascript'--}}
    {{--src='{{url('/')}}/website_assets/themes/framework/js/gmaps.min62d0.js?ver=4.5.3'></script>--}}
    <div class="l-titlebar imgsize_cover parallax_ver size_huge color_primary">
        <div class="l-titlebar-img"
             style="background-image: url({{url("/")}}/website_assets/uploads/contact.jpg)"
             data-img-width="1920" data-img-height="1280"></div>
        <div class="l-titlebar-overlay" style="background-color:rgba(28,28,28,0.3)"></div>
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Contact</h1></div>
            <div class="g-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a
                            class="g-breadcrumbs-item" rel="v:url" property="v:title"
                            href="{{url('')}}">Home</a></span>
                <span class="g-breadcrumbs-separator"></span> <span class="g-breadcrumbs-item">Contact</span>
            </div>
        </div>
    </div>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="l-section wpb_row height_medium">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_medium">
                            <div class="in_col-sm-8 wpb_column in_column_container">
                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissable">
                                        {{ session('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    </div>
                                @elseif(session('success'))
                                    <div class="alert alert-success alert-dismissable">
                                        {{ session('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    </div>
                                @endif
                                <div class="in_column-inner">
                                    <div class="w-form align_left">
                                        <form class="w-form-h" autocomplete="off"
                                              id="contact_form" action="contact" method="post">
                                            {{ csrf_field() }}
                                            <div class="w-form-row for_name">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_name">Name</label>
                                                </div>
                                                <div class="w-form-row-field {{ ($errors->has('name')) ? 'has-error' : '' }} ">
                                                    <input type="text" name="name" id="us_form_1_name" value=""
                                                           placeholder=""  value="{{ Request::old('name') }}"/>
                                                    {{ ($errors->has('name') ? $errors->first('name') : '') }}
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            <div class="w-form-row for_email required">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_email">Email <span
                                                                class="required">*</span></label>
                                                </div>
                                                <div class="w-form-row-field {{ ($errors->has('email')) ? 'has-error' : '' }}">
                                                    <input type="email" name="email" id="us_form_1_email" value=""
                                                           placeholder="" data-required="true" aria-required="true"  value="{{ Request::old('email') }}"/>
                                                    {{ ($errors->has('email') ? $errors->first('email') : '') }}
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            <div class="w-form-row for_phone">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_phone">Phone Number</label>
                                                </div>
                                                <div class="w-form-row-field  {{ ($errors->has('phone')) ? 'has-error' : '' }}">
                                                    <input type="text" name="phone" id="us_form_1_phone" value=""
                                                           placeholder=""  value="{{ Request::old('phone') }}"/>
                                                    {{ ($errors->has('phone') ? $errors->first('phone') : '') }}
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            <div class="w-form-row for_message required">
                                                <div class="w-form-row-label">
                                                    <label for="us_form_1_message">Message <span
                                                                class="required">*</span></label>
                                                </div>
                                                <div class="w-form-row-field {{ ($errors->has('message')) ? 'has-error' : '' }}">
                                                    <textarea name="message" id="us_form_1_message" cols="30" rows="10"
                                                              placeholder="" data-required="true"
                                                              aria-required="true"  value="{{ Request::old('message') }}"></textarea>
                                                    {{ ($errors->has('message') ? $errors->first('message') : '') }}
                                                    <span class="w-form-row-field-bar"></span>
                                                </div>
                                                <div class="w-form-row-state"></div>
                                            </div>
                                            {{--<input type="hidden" name="action" value="us_ajax_cform"/>--}}
                                            {{--<input type="hidden" name="post_id" value="10"/>--}}
                                            {{--<input type="hidden" name="form_index" value="1"/>--}}
                                            <div class="w-form-row for_submit">
                                                <div class="w-form-row-field">
                                                    <button class="w-btn size_large color_white style_raised"
                                                            type="submit"><span class="g-preloader type_1"></span><span
                                                                class="w-btn-label">Send Message</span></button>
                                                </div>
                                            </div>
                                            <div class="w-form-message"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-4 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Get Social</h3>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="w-socials align_left style_colored index_1" style="font-size: 24px;">
                                        <div class="w-socials-list">
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
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Contact Info</h3>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light">
                                        <div class="w-iconbox-icon"><i class="mdfi_action_home"></i></div>
                                        <h4 class="w-iconbox-title">Block 11, Bima Road, Mikocheni B, Dar es Salaam,
                                            TZ</h4></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light"><a
                                                class="w-iconbox-link" href="#">
                                            <div class="w-iconbox-icon"><i class="mdfi_content_mail"></i></div>
                                            <h4 class="w-iconbox-title">info@inetstz.com</h4></a></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light">
                                        <div class="w-iconbox-icon"><i class="mdfi_communication_phone"></i></div>
                                        <h4 class="w-iconbox-title">+255 655 406 004</h4></div>
                                    <div class="w-iconbox iconpos_left size_tiny style_default color_light">
                                        <div class="w-iconbox-icon"><i class="mdfi_action_print"></i></div>
                                        <h4 class="w-iconbox-title">+255 22 278 0228</h4></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{--<section class="l-section wpb_row height_auto width_full">--}}
                {{--<div class="l-section-h i-cf">--}}
                {{--offset_medium,g-cols--}}
                {{--<div class="">--}}
                {{--<div class="vc_col-sm-12 wpb_column vc_column_container">--}}
                {{--<div class="vc_column-inner">--}}
                {{--<div class="w-tabs layout_default accordion type_togglable title_center icon_chevron iconpos_right ">--}}
                {{--<div class="w-tabs-list items_1">--}}
                {{--<div class="w-tabs-list-h">--}}
                {{--<div class="w-tabs-item with_icon"><a href="#map-section"--}}
                {{--class="w-tabs-item-h"><i--}}
                {{--class="mdfi_maps_place"></i><span--}}
                {{--class="w-tabs-item-title">VIEW US ON THE MAP</span></a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="w-tabs-sections">--}}
                {{--<div class="w-tabs-sections-h">--}}
                {{--<div class="w-tabs-section color_custom with_icon no_indents"--}}
                {{--id="map-section" style="background-color: #ffb03a;color: #ffffff;">--}}
                {{--<a href="#map-section" class="w-tabs-section-header">--}}
                {{--<div class="w-tabs-section-header-h"><i--}}
                {{--class="mdfi_maps_place"></i><h5--}}
                {{--class="w-tabs-section-title">VIEW US ON THE MAP</h5>--}}
                {{--<div class="w-tabs-section-control"></div>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<div class="w-tabs-section-content">--}}
                {{--<div class="w-tabs-section-content-h i-cf">--}}
                {{--<div class="w-map" id="us_map_1" style="height: 400px">--}}
                {{--<div class="w-map-h"></div>--}}
                {{--<div class="w-map-json"--}}
                {{--onclick='return {}'></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</section>--}}
            </main>
        </div>
    </div>
    <section class="l-section wpb_row height_medium color_alternate" id="clients">
        <div class="l-section-h i-cf">
            <div class="g-cols offset_medium">
                <div class="in_col-sm-12 wpb_column in_column_container animate_afb">
                    <div class="in_column-inner">
                        <div class="wpb_text_column ">
                            <div class="wpb_wrapper">
                                <h2 style="text-align: center">Our Clients</h2>
                            </div>
                        </div>
                        <div class="w-logos style_1 nav_arrows type_carousel cols_5">
                            <div class="w-logos-list" data-items="5" data-autoplay="0" data-timeout="3000"
                                 data-nav="1"><a
                                        class="w-logos-item style_1 nav_arrows type_carousel cols_5"
                                        href="#"><img width="500" height="250"
                                                      src="{{url('/')}}/website_assets/uploads/logo/brela-logo-500x250.png"
                                                      class="attachment-medium size-medium"
                                                      alt="BRELA"/></a>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/pspf-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="PSPF"/></div>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/mafge-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="MAFGE"/></div>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/br-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="BR Solutions"/></div>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/pspf-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="PSPF"/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        tag=function(){
            $('header').addClass("bg_transparent");
        }
        $(document).ready(tag);


    </script>
    <script>
        //    function initMap() {
        //        var map = new google.maps.Map(document.getElementById('map-section'), {
        //            center: {lat: 36.964, lng: -122.015},
        //            zoom: 18,
        //            mapTypeId: 'satellite'
        //        });
        //        map.setTilt(45);
        //    }


    </script>
    {{--<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js'></script>--}}
@stop