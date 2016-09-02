@extends('website.master')
<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 12/08/2016
 * Time: 12:36 PM
 */?>
@section('title', 'Database Design')
@section('content')
    <div class="l-titlebar imgsize_cover size_large color_alternate">
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Database Design</h1></div>
            <div class="g-nav">
                <div class="g-nav-list"><a class="g-nav-item to_next" title="Creative Project &#8211; Slider"
                                           href="{{url('/service',['enterprise_software'])}}"></a><a
                            class="g-nav-item to_prev" title="Creative Project &#8211; Image"
                            href="{{url('/service',['linux_administration'])}}"></a></div>
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
                                                                                        src="{{url('/')}}/website_assets/uploads/database.png"
                                                                                        class="attachment-large size-large"
                                                                                        alt="Database Design"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-4 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Description</h3>
                                            <p>Database management system (DBMS) is a system based solution that allows
                                                you to organize, store, maintain and retrieve data to get meaningful
                                                trends, solutions and reports.

                                            <p> With globalization, acquisition & mergers are becoming a day-to-day
                                                phenomenon increasing the size and scope of businesses to new heights.
                                                Companies exploit this open-market business environment to cater
                                                services and products to a wide range of consumers spread across the
                                                entire world. To withstand in this open-market environment and to keep
                                                track with consumer's trends, constant and close monitoring of data is
                                                required.</p>
                                            {{--<ul>--}}
                                            {{--<li><strong>Client</strong>: INETS</li>--}}
                                            {{--<li><strong>Date</strong>: September 9, 2016</li>--}}
                                            {{--<li><strong>URL</strong>: <a href="#"--}}
                                            {{--target="_blank">INETS</a>--}}
                                            {{--</li>--}}
                                            {{--</ul>--}}
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
                                        <span class="w-separator-h"><i class="fa fa-star"></i></span></div>
                                    <div class="w-tabs layout_default type_togglable title_left icon_plus iconpos_right accordion ">
                                        <div class="w-tabs-list items_3">
                                            <div class="w-tabs-list-h">
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span
                                                                class="w-tabs-item-title">Why Database Design?</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Areas of Application</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item active">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Types of Databases</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-tabs-sections">
                                            <div class="w-tabs-sections-h">
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Why Database
                                                                Design?</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>Our database design and
                                                                        development services are targeted both for small
                                                                        inventory display or a complex integrated system
                                                                        application such as financial services, telecom
                                                                        services, etc. We also assist you in selecting
                                                                        the right technology and the right platform for
                                                                        designing and developing database application
                                                                        that will meet the long term vision of your
                                                                        company.</p>
                                                                    <blockquote><p>We have a dedicated team of
                                                                            professionals highly skilled in database
                                                                            design and development and having expertise
                                                                            in handling variety of database tools.</p>
                                                                    </blockquote>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--<div class="w-tabs-section">--}}
                                                {{--<div class="w-tabs-section-header">--}}
                                                {{--<div class="w-tabs-section-header-h"><h5--}}
                                                {{--class="w-tabs-section-title">Areas of Application</h5>--}}
                                                {{--<div class="w-tabs-section-control"></div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="w-tabs-section-content">--}}
                                                {{--<div class="w-tabs-section-content-h i-cf">--}}
                                                {{--<div class="wpb_text_column ">--}}
                                                {{--<div class="wpb_wrapper"><p></p></div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                {{--</div>--}}
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Types of Databases</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper">
                                                                    <ul>
                                                                        <li><a href=""></a>PostgreSQL</li>
                                                                        <li>MySQL</li>
                                                                        <li>Oracle</li>
                                                                        <li>MS SQL Server</li>
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
        <a class="l-navigation-item to_next" href="{{url('/service',['enterprise_software'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/database.png" width="150" height="150"
                     alt="Enterprise Software">

            </div>
            <div class="l-navigation-item-title">
                <span>Enterprise Software</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('/service',['linux_administration'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/linux.png" width="150" height="150"
                     alt="Enterprise Software">
            </div>
            <div class="l-navigation-item-title">
                <span>Linux Administration</span>
            </div>
        </a>
    </div>
    @include('website/social_footer')
    </div>

@stop
