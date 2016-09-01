@extends('new_website.master')
<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 12/08/2016
 * Time: 12:36 PM
 */?>
@section('title', 'Mobile Apps Design & development')
@section('content')
    <div class="l-titlebar imgsize_cover size_large color_alternate">
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Mobile Applications Design</h1></div>
            <div class="g-nav">
                <div class="g-nav-list">
                    <a class="g-nav-item to_next" title="Mobile Applications Design"
                       href="{{url('new/service',['payment_integration'])}}"></a>
                    <a
                            class="g-nav-item to_prev" title="Enterprise Software Design"
                            href="{{url('new/service',['enterprise_software'])}}"></a></div>
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
                                <div class="in_column-inner">
                                    <div class="w-image  align_center animate_afb"><img width="750" height="1000"
                                                                                        src="{{url('/')}}/website_assets/uploads/karibusms.png"
                                                                                        class="attachment-large size-large"
                                                                                        alt="Vesper"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-4 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Description</h3>
                                            <p>Mobile applications are also known as Mobile apps.They are software
                                                programs you can download and access directly using your smartphone or
                                                another mobile device – like a tablet.

                                                Mobile phone applications, are rapidly gaining popularity in the
                                                smartphone market, and so is the demand for best Mobile software
                                                application Development</p>
                                            {{--<ul>--}}
                                            {{--<li><strong>Client</strong>: Anyone</li>--}}
                                            {{--<li><strong>Date</strong>: September 9, 2016</li>--}}
                                            {{--<li><strong>URL</strong>: <a href="#"--}}
                                            {{--target="_blank">inetstz.com</a>--}}
                                            {{--</li>--}}
                                            {{--</ul>--}}
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
                                        <span class="w-separator-h"><i class="fa fa-star"></i></span></div>
                                    <div class="w-tabs layout_default accordion title_left icon_chevron iconpos_right ">
                                        <div class="w-tabs-list items_3">
                                            <div class="w-tabs-list-h">
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span
                                                                class="w-tabs-item-title">Why Mobile App?</span></div>
                                                </div>
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Application Areas</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item active">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Types of Solutions</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-tabs-sections">
                                            <div class="w-tabs-sections-h">
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Why Mobile App?</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>Develop the direct marketing
                                                                        channel for businesses through building of the
                                                                        close relationship through periodic alerts to
                                                                        users
                                                                        Develop direct data storage during registration
                                                                        and research, this applies to the development
                                                                        and research companies, companies who register
                                                                        new members from different places of the world
                                                                        and hence growth of the membership in the
                                                                        organization</p>
                                                                    <blockquote><p>Users of the mobile application
                                                                            increase the chance for your newsletter to
                                                                            be read due to a large number and increased
                                                                            number of smartphone users.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Areas of Application</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>We at INETS being a
                                                                        technological company offer the development of
                                                                        these applications in different fields like
                                                                        pension funds, hotels and restaurants,
                                                                        enterprise based applications,banks and
                                                                        financial institutions,Media based applications
                                                                        like radio app,television app and , e-commerce
                                                                        and other customized business applications.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Mobile Apps Types</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li>Native Applications</li>
                                                                        <li>Hybrid Applications</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
                                        <span class="w-separator-h"><i class="fa fa-star"></i></span></div>
                                    {{--<div class="w-iconbox iconpos_top size_large style_circle color_light">--}}
                                        {{--<div class="w-iconbox-icon"><i class="fa fa-star-o"></i></div>--}}
                                        {{--<h4 class="w-iconbox-title">Award</h4>--}}
                                        {{--<div class="w-iconbox-text">INETS</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <div class="l-navigation">
        <a class="l-navigation-item to_next" href="{{url('new/service',['payment_integration'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                {{--<img src="{{url('/')}}/website_assets/uploads/shutterstock_112330751-150x150.jpg" width="150"--}}
                     {{--height="150" alt="Payment Integration">--}}
            </div>
            <div class="l-navigation-item-title">
                <span>Payment Integration</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('new/service',['enterprise_software'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                {{--<img src="{{url('/')}}/website_assets/uploads/logo/port-6-150x150.jpg" width="150" height="150"--}}
                     {{--alt="Enterprise Software">--}}
            </div>
            <div class="l-navigation-item-title">
                <span>Enterprise Software</span>
            </div>
        </a>
    </div>
    </div>
     @include('new_website/social_footer')
@stop
