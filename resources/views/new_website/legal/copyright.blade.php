<?php

/**
 * Description of copyright
 *
 *  -----------------------------------------------------
 *  Copyright: INETS COMPANY LIMITED
 *  Website: www.inetstz.com
 *  Email: info@inetstz.com
 *  -----------------------------------------------------
 * @author Ephraim Swilla
 */
?>
@extends('new_website.master')
@section('content')
    {{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
    {{--<script type='text/javascript'--}}
    {{--src='{{url('/')}}/website_assets/themes/framework/js/gmaps.min62d0.js?ver=4.5.3'></script>--}}
    <div class="l-titlebar imgsize_cover parallax_ver size_huge color_primary">
        <div class="l-titlebar-img"
             style="background-image: url({{url("/")}}/website_assets/uploads/picjumbo.com_IMG_6037.jpg)"
             data-img-width="1920" data-img-height="1280"></div>
        <div class="l-titlebar-overlay" style="background-color:rgba(28,28,28,0.3)"></div>
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Career</h1></div>
            <div class="g-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a
                            class="g-breadcrumbs-item" rel="v:url" property="v:title"
                            href="<?=  url('/')?>">Home</a></span>
                <span class="g-breadcrumbs-separator"></span> <span class="g-breadcrumbs-item">Career</span>
            </div>
        </div>
    </div>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="l-section wpb_row height_medium">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_medium">
                            <div class="in_col-sm-6 wpb_column in_column_container">
                          
                                
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                   
                                    
                                    
                                    </div>
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