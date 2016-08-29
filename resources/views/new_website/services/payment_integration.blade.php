@extends('new_website.master')
<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 12/08/2016
 * Time: 12:36 PM
 */?>

<style>

</style>

@section('content')
    <div class="l-titlebar imgsize_cover size_large color_alternate">
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline"> Payment Integration</h1></div>
            <div class="g-nav">
                <div class="g-nav-list">
                    <a class="g-nav-item to_next" title="Linux Servers Configuration"
                       href="{{url('new/service',['linux_administration'])}}"></a>

                    <a class="g-nav-item to_prev" title="Mobie Apps Design"
                       href="{{url('new/service',['mobile_apps'])}}"></a></div>
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
                                                                                        src="{{url('/')}}/website_assets/uploads/payment.png"
                                                                                        class="attachment-large size-large"
                                                                                        alt="Payment"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-4 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Description</h3>
                                            <p>Accepting electronic payments has not been a simple solution. INETS is
                                                aware of this challenge and decides to administer you with an efficient
                                                way out.
                                            </p>
                                            {{--<ul>--}}
                                            {{--<li><strong>Client</strong>:INETS</li>--}}
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
                                                                class="w-tabs-item-title">Why Payment Integration?</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Areas of Application</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item active">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Types of Payments</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-tabs-sections">
                                            <div class="w-tabs-sections-h">
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Why Payment
                                                                Integration?</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>The World is going mobile and it has become important to make payment
                                                                    as mobile as possible and that is why we have chosen to offer this service for you and your organisation.</p>
                                                                    <blockquote><p>Pay wherever you go.</p>
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
                                                            <div class="w-tabs-section-control">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper">
                                                                   <p>The Payment System can be installed in any systems as long as the standards are in consideration,
                                                                    so any organisation, company or government institution can integrate in their existing systems.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section active">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Types of Payments</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"> <ul>
                                                                        <li>Mobile payment systems integration (TigoPesa, M-pesa and Airtel Money).</li>
                                                                        <li>Integration with local banks for direct transfer of collected funds.</li>
                                                                        <li>Debit and Credit Card online payments Integration e.g. Visa • MasterCard • Discover • American Express  </li>
                                                                    </ul></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">--}}
                                        {{--<span class="w-separator-h"><i class="fa fa-star"></i></span></div>--}}
                                    {{--<div class="w-iconbox iconpos_top size_large style_circle color_light">--}}
                                        {{--<div class="w-iconbox-icon"><i class="fa fa-star-o"></i></div>--}}
                                        {{--<h4 class="w-iconbox-title"></h4>--}}
                                        {{--<div class="w-iconbox-text"></div>--}}
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
        <a class="l-navigation-item to_next" href="{{url('new/service',['linux_administration'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/shutterstock_112330751-150x150.jpg" width="150"
                     height="150" alt="Linux Administration">
            </div>
            <div class="l-navigation-item-title">
                <span>Linux Administration</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('new/service',['mobile_apps'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/shutterstock_112330751-150x150.jpg" width="150"
                     height="150" alt="Mobile Apps Design">
            </div>
            <div class="l-navigation-item-title">
                <span>Mobile Apps Design</span>
            </div>
        </a>
    </div>
    </div>
@stop