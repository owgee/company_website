@extends('new_website.master')
<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 12/08/2016
 * Time: 12:36 PM
 */?>
@section('title', 'Linux Servers Administration')
@section('content')
    <div class="l-titlebar imgsize_cover size_large color_alternate">
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Linux System Administration</h1></div>
            <div class="g-nav">
                <div class="g-nav-list"><a class="g-nav-item to_next" title="Database Design"
                                           href="{{url('new/service',['database_design'])}}"></a><a
                            class="g-nav-item to_prev" title="Payment Integration"
                            href="{{url('new/service',['payment_integration'])}}"></a></div>
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
                                                                                        src="{{url('/')}}/website_assets/uploads/linux.png"
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
                                            <p>We provide recommendations on hardware components, operating system
                                                levels and recommendations specific to conformance to your computing
                                                environment (e.g., authentication, file sharing, etc). When new hardware
                                                is to be deployed, project planning cycle to provide input to hardware
                                                specification and capacity requirement has to be performed.
                                            </p>
                                            {{--<ul>--}}
                                            {{--<li><strong>Client</strong>: INETS</li>--}}
                                            {{--<li><strong>Date</strong>: September 9, 2016</li>--}}
                                            {{--<li><strong>URL</strong>: <a href="#"--}}
                                            {{--target="_blank">#</a>--}}
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
                                                                class="w-tabs-item-title">Description</span></div>
                                                </div>
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Areas of Application</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item active">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Types of Linux OS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-tabs-sections">
                                            <div class="w-tabs-sections-h">
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Summary</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>Security planning,
                                                                        architectural analysis, application dependency
                                                                        analysis, changes to data classification, and
                                                                        project management that requires facilitation
                                                                        between multiple groups external to IT Services,
                                                                        are not part part of core linux administrative
                                                                        services.
                                                                    </p>
                                                                    <blockquote><p>The health of a server is checked via
                                                                            the system monitoring tool, Nagios. Checks
                                                                            for Web, Tomcat, and other ports or services
                                                                            are not included in the fundamental service,
                                                                            but are available as by arrangement with the
                                                                            client.</p>
                                                                    </blockquote>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Areas of
                                                                Application</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>Linux based systems and applications can be used in any governmental institution
                                                                    wanting to save cash as most of these systems are Open Source Software.</p></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section active">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Types of Linux OS</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>

                                                                        <li>Red Hat Enterprise Linux 5 and 6 (most current minor release, 32 and 64 bit)</li>
                                                                        <li>Centos 6.5 and 7 64 bit</li>
                                                                        <li>Ubuntu (32 and 64 bit)</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <div class="l-navigation">
        <a class="l-navigation-item to_next" href="{{url('new/service',['database_design'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                {{--<img src="{{url('/')}}/website_assets/uploads/logo/port-6-150x150.jpg" width="150" height="150"--}}
                     {{--alt="Database Design">--}}
            </div>
            <div class="l-navigation-item-title">
                <span>Database Design</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('new/service',['payment_integration'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                {{--<img src="{{url('/')}}/website_assets/uploads/logo/port-6-150x150.jpg" width="150" height="150"--}}
                     {{--alt="Payment Integration">--}}
            </div>
            <div class="l-navigation-item-title">
                <span>Payment Integration</span>
            </div>
        </a>
    </div>
    </div>
     @include('new_website/social_footer')
@stop
