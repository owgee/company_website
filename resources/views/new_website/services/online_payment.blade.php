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
            <div class="l-titlebar-content"><h1 itemprop="headline">Online Payment Integration</h1></div>
            <div class="g-nav">
                <div class="g-nav-list"><a class="g-nav-item to_next" title="Creative Project &#8211; Slider"
                                           href="../creative-project-slider/index.html"></a><a
                            class="g-nav-item to_prev" title="Creative Project &#8211; Image"
                            href="../creative-project-image/index.html"></a></div>
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
                                                                                        src="{{url('/')}}/website_assets/uploads/2014/09/vesper_by_alexandreev-d79vil6.jpg"
                                                                                        class="attachment-large size-large"
                                                                                        alt="Vesper"
                                                                                        srcset="http://zephyr.us-themes.com/wp-content/uploads/2014/09/vesper_by_alexandreev-d79vil6.jpg 750w, http://zephyr.us-themes.com/wp-content/uploads/2014/09/vesper_by_alexandreev-d79vil6-375x500.jpg 375w, http://zephyr.us-themes.com/wp-content/uploads/2014/09/vesper_by_alexandreev-d79vil6-600x800.jpg 600w"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-4 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h3>Description</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                                                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                                dis parturient montes. Etiam facilisis venenatis libero, ac fermentum
                                                dolor euismod in.</p>
                                            <ul>
                                                <li><strong>Client</strong>: ThemeForest</li>
                                                <li><strong>Date</strong>: September 9, 2014</li>
                                                <li><strong>URL</strong>: <a href="http://alexandreev.deviantart.com/"
                                                                             target="_blank">alexandreev.deviantart.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
                                        <span class="w-separator-h"><i class="fa fa-star"></i></span></div>
                                    <div class="w-tabs layout_default accordion title_left icon_chevron iconpos_right ">
                                        <div class="w-tabs-list items_3">
                                            <div class="w-tabs-list-h">
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span
                                                                class="w-tabs-item-title">Summary</span></div>
                                                </div>
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Extended Info</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item active">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Additional Few Things</span>
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
                                                                <div class="wpb_wrapper"><p>Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing elit. Morbi sagittis, sem
                                                                        quis lacinia faucibus, orci ipsum gravida
                                                                        tortor, vel interdum mi sapien ut justo. Nulla
                                                                        varius consequat magna, id molestie ipsum
                                                                        volutpat quis.</p>
                                                                    <blockquote><p>At delectus doloremque dolores
                                                                            explicabo laudantium minima qui. Animi
                                                                            aperiam aspernatur atque debitis distinctio
                                                                            impedit inventore iure labore modi omnis,
                                                                            optio rerum ut veritatis voluptatum?</p>
                                                                    </blockquote>
                                                                    </p></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Extended Info</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing elit. Morbi sagittis, sem
                                                                        quis lacinia faucibus, orci ipsum gravida
                                                                        tortor, vel interdum mi sapien ut justo. Etiam
                                                                        facilisis venenatis libero, ac fermentum dolor
                                                                        euismod in. Phasellus placerat egestas varius.
                                                                        Vivamus eleifend at massa sodales faucibus.
                                                                        Vestibulum egestas nibh in turpis volutpat
                                                                        ornare.</p></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section active">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Additional Few
                                                                Things</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>Etiam facilisis venenatis
                                                                        libero, ac fermentum dolor euismod in. Phasellus
                                                                        placerat egestas varius. Vivamus eleifend at
                                                                        massa sodales faucibus. Vestibulum egestas nibh
                                                                        in turpis volutpat ornare. Ut tempor lacinia
                                                                        purus, ac gravida tortor suscipit eget. Maecenas
                                                                        ornare imperdiet. Nullam et faucibus bibendum
                                                                        ante.</p></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
                                        <span class="w-separator-h"><i class="fa fa-star"></i></span></div>
                                    <div class="w-iconbox iconpos_top size_large style_circle color_light">
                                        <div class="w-iconbox-icon"><i class="fa fa-star-o"></i></div>
                                        <h4 class="w-iconbox-title">Award Winner</h4>
                                        <div class="w-iconbox-text">It&#8217;s a realy great image!</div>
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
        <a class="l-navigation-item to_next" href="../creative-project-slider/index.html">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/shutterstock_112330751-150x150.jpg" width="150"
                     height="150" alt="Creative Project &#8211; Slider">
            </div>
            <div class="l-navigation-item-title">
                <span>Creative Project &#8211; Slider</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="../creative-project-image/index.html">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/2014/09/port-6-150x150.jpg" width="150" height="150"
                     alt="Creative Project &#8211; Image">
            </div>
            <div class="l-navigation-item-title">
                <span>Creative Project &#8211; Image</span>
            </div>
        </a>
    </div>
    </div>
@stop
