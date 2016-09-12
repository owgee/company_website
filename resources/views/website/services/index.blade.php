@extends('website.master')
<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 17/08/2016
 * Time: 2:03 PM
 */?>

@section('title', 'Services')
@section('content')
    <div class="l-titlebar imgsize_cover parallax_ver size_huge color_primary">
        <div class="l-titlebar-img" style="background-image: url({{url('')}}/website_assets/uploads/services.jpg)"
             data-img-width="2000" data-img-height="1333"></div>
        <div class="l-titlebar-overlay" style="background-color:rgba(17,17,17,0.4)"></div>
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Our Services</h1>
                {{--<p>People are not disturbed by things, but by the view they take of them</p>--}}
                <p>In the end, they will forget what you did or said but remember how you made them feel</p>
            </div>
        </div>
    </div>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="l-section wpb_row height_medium">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_medium">
                            <div class="in_col-sm-12 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="g-cols wpb_row offset_medium vc_inner ">
                                        <div class="in_col-sm-4 wpb_column in_column_container animate_afb">
                                            <div class="in_column-inner">
                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="w-iconbox-link"
                                                       href="{{url('service',['enterprise_software'])}}">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #ff7043;box-shadow: 0 0 0 2px #ff7043 inset;color: #ffffff;">
                                                            <i class="fa fa-html5"></i></div>
                                                        <h4 class="w-iconbox-title">Enterprise Software </h4></a>
                                                    <div class="w-iconbox-text">INETS LTD designs and develops these
                                                        systems for organizations that need to automate their
                                                        processes,these Softwares are intended for Businesses, Schools,
                                                        Interest-based user groups, Charities, NGOs or
                                                        the
                                                        Government.
                                                    </div>
                                                </div>
                                                <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                                    <span class="w-separator-h"></span></div>
                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="w-iconbox-link"
                                                       href="{{url('service',['database_design'])}}">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #41baae;box-shadow: 0 0 0 2px #41baae inset;color: #ffffff;">
                                                            <i class="mdfi_device_data_usage"></i></div>
                                                        <h4 class="w-iconbox-title"> Database Design </h4>
                                                    </a>
                                                    <div class="w-iconbox-text">We at INETS, offer database design and development services
                                                        to different sectors like e-commerce, financial and healthcare
                                                        etc. Our database applications are flexible, client-centric and
                                                        designed to suit your business needs
                                                    </div>
                                                </div>
                                                <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                                    <span class="w-separator-h"></span></div>

                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #795548;box-shadow: 0 0 0 2px #795548 inset;color: #ffffff;">
                                                            <i class="mdfi_action_search"></i></div>
                                                        <h4 class="w-iconbox-title">SEO</h4></a>
                                                    <div class="w-iconbox-text">We perform a level 1 Search Engine Optimization
                                                        for your website to appear on top of Google Searches and most popular Search Engines
                                                        such as Yahoo! and Bing.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="in_col-sm-4 wpb_column in_column_container animate_afb d1">
                                            <div class="in_column-inner">
                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="w-iconbox-link" href="{{url('service',['payment_integration'])}}">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #80d8ff;box-shadow: 0 0 0 2px #80d8ff inset;color: #ffffff;">
                                                            <i class="mdfi_image_compare"></i></div>
                                                        <h4 class="w-iconbox-title">Payment Integration</h4></a>
                                                    <div class="w-iconbox-text">We provide electronic payment solution for your system which covers;
                                                        •	Mobile payment systems integration
                                                        (TigoPesa, M-pesa and Airtel Money).
                                                        •	Integration with local banks for direct transfer of collected funds.
                                                        •	Debit and Credit Card online payments Integration e.g. Visa • MasterCard • Discover • American Express • 

                                                    </div>
                                                </div>
                                                <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                                    <span class="w-separator-h"></span></div>
                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="w-iconbox-link"
                                                       href="{{url('service',['linux_administration'])}}">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #7e57c2;box-shadow: 0 0 0 2px #7e57c2 inset;color: #ffffff;">
                                                            <i class="mdfi_action_dns"></i></div>
                                                        <h4 class="w-iconbox-title">Linux System Admininistration</h4>
                                                    </a>
                                                    <div class="w-iconbox-text">
                                                        The following OS types are supported:
                                                        Red Hat Enterprise Linux 5 and 6 (most current minor release, 32 and 64 bit)
                                                        Centos 6.5 and 7 64 bit
                                                        Ubuntu (32 and 64 bit)

                                                        Other OS’s, including any custom Linux kernels, may be subject to the non-standard OS rate.
                                                    </div>
                                                </div>

                                                <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                                    <span class="w-separator-h"></span></div>
                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #ed426f;box-shadow: 0 0 0 2px #ed426f inset;color: #ffffff;">
                                                            <i class="mdfi_hardware_phone_iphone"></i></div>
                                                        <h4 class="w-iconbox-title">Mobile Optimization</h4></a>
                                                    <div class="w-iconbox-text">All the websites we create pass the "Mobile App - like" test for
                                                        websites and thus can be accessed using a mobile phone and feels just like a normal mobile
                                                        application.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="in_col-sm-4 wpb_column in_column_container animate_afb d2">
                                            <div class="in_column-inner">
                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="w-iconbox-link" href="{{url('service',['mobile_apps'])}}">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #7cb342;box-shadow: 0 0 0 2px #7cb342 inset;color: #ffffff;">
                                                            <i class="mdfi_notification_play_install"></i></div>
                                                        <h4 class="w-iconbox-title">Mobile Apps Development</h4></a>
                                                    <div class="w-iconbox-text">We build world-class mobile applications
                                                        for Android, IOS and Windows ranging from hybrid to native applications.

                                                        <p>Our focus is on custom mobile applications’ development
                                                    </div>
                                                </div>
                                                <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                                    <span class="w-separator-h"></span></div>
                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="w-iconbox-link" href="http://hosting.inetstz.com">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #ffca28;box-shadow: 0 0 0 2px #ffca28 inset;color: #ffffff;">
                                                            <i class="mdfi_action_backup"></i></div>
                                                        <h4 class="w-iconbox-title">Website Hosting</h4></a>
                                                    <div class="w-iconbox-text">We provide a dependable hosting solution that fits your plan, with an advanced Control panel.
                                                        <p>Head over to
                                                            <a href="http://hosting.inetstz.com">INETS Hosting</a> and choose your preferred plan.
                                                    </div>
                                                </div>

                                                <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                                    <span class="w-separator-h"></span></div>

                                                <div class="w-iconbox iconpos_left size_medium style_circle color_custom">
                                                    <a class="">
                                                        <div class="w-iconbox-icon"
                                                             style="background-color: #3481c9;box-shadow: 0 0 0 2px #3481c9 inset;color: #ffffff;">
                                                            <i class="mdfi_action_polymer"></i></div>
                                                        <h4 class="w-iconbox-title">Website Design</h4></a>
                                                    <div class="w-iconbox-text">From official to vintage to classic websites that fulfil your needs, INETS
                                                        has got your back.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator type_default size_large thick_1 style_solid color_border cont_icon">
                                        <span class="w-separator-h"><i class="fa fa-plus"></i></span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="l-section wpb_row height_large color_primary with_img parallax_ver with_overlay">
                    <div class="l-section-img"
                         style="background-image: url({{url('')}}/website_assets/uploads/services.jpg);"
                         data-img-width="1920" data-img-height="1263"></div>
                    <div class="l-section-overlay" style="background-color: rgba(0,0,0,0.5)"></div>
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_medium">
                            <div class="in_col-sm-12 wpb_column in_column_container animate_afb">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3 style="text-align: center">Call us today at <a href="#"><strong>+255 22
                                                        278 0228 </strong></a> or Email us at <strong><a
                                                            href="mailto:info@inetstz.com">info@inetstz
                                                        .com</a></strong>
                                            </h3>
                                            <p style="text-align: center">If you seek truth you will not seek victory by
                                                dishonorable means, and if you find truth you will become
                                                invincible.</p>
                                        </div>
                                    </div>
                                    <div class="w-btn-wrapper align_center"><a
                                                class="w-btn style_raised color_secondary icon_atleft"
                                                href="{{url('new',['contact_us'])}}" style="font-size: 19px;"><i
                                                    class="mdfi_content_mail"></i><span
                                                    class="w-btn-label">Request for Service</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
        <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
            <span class="w-separator-h"></span></div>
        @include('website/social_footer')
    </div>
    <script>
        tag=function(){
            $('header').addClass("bg_transparent");
        }
        $(document).ready(tag);


    </script>
@stop