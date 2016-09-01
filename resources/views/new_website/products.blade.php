@extends('new_website.master')
<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 17/08/2016
 * Time: 2:48 PM
 */?>
@section('title', 'Products')
@section('content')
    <div class="l-titlebar imgsize_cover parallax_ver size_huge color_primary">
        <div class="l-titlebar-img" style="background-image: url(../website_assets/uploads/download.jpg)"
             data-img-width="2000" data-img-height="1600"></div>
        <div class="l-titlebar-overlay" style="background-color:rgba(17,17,17,0.4)"></div>
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">OUR PRODUCTS</h1>
                <p>Some of our latest products developed for Corporate companies & SMEs.</p></div>
        </div>
    </div>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="l-section wpb_row height_auto width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_medium">
                            <div class="in_col-sm-12 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="w-portfolio style_4 cols_3 align_center ratio_1x1 with_indents with_filters position_isotope animate_revealgrid">

                                        <div class="w-portfolio-list">
                                            <div class="w-portfolio-item photography size_1x1 animate_reveal"
                                                 data-id="331" data-categories="Education">
                                                <a class="w-portfolio-item-anchor"
                                                   href="{{url('new/product',['shulesoft'])}}"
                                                   style="background-color: #7e57c2;color: #ffffff;">
                                                    <div class="w-portfolio-item-image"
                                                         style="background-image: url(../website_assets/uploads/products/shulesoft-600x400.png)">
                                                        <img src="../website_assets/uploads/products/shulesoft-600x400.png"
                                                             width="600" height="400"
                                                             alt="ShuleSoft School Management System"/></div>
                                                    <div class="w-portfolio-item-meta">
                                                        <div class="w-portfolio-item-meta-h">
                                                            <h2 class="w-portfolio-item-title" style="font-size: 20px">
                                                                ShuleSoft</h2><span
                                                                    class="w-portfolio-item-text" style="font-size: 13px">Education</span>
                                                            <span class="w-portfolio-item-arrow"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="w-portfolio-item illustration photography size_1x1 animate_reveal"
                                                 data-id="332" data-categories="Files,">
                                                <a class="w-portfolio-item-anchor"
                                                   href="{{url('new/product',['file_tracking'])}}"
                                                   style="background-color: #ffd54f;color: #2b2420;">
                                                    <div class="w-portfolio-item-image"
                                                         style="background-image: url(../website_assets/uploads/file-tracking-600x400.png)">
                                                        <img src="../website_assets/uploads/products/file-tracking-600x400.png"
                                                             width="600" height="400"
                                                             alt="Corporate File Tracking System"/></div>
                                                    <div class="w-portfolio-item-meta">
                                                        <div class="w-portfolio-item-meta-h">
                                                            <h2 class="w-portfolio-item-title" style="font-size: 20px">
                                                                File Tracking</h2><span
                                                                    class="w-portfolio-item-text" style="font-size: 13px">Corporate Files Handling</span>
                                                            <span class="w-portfolio-item-arrow"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="w-portfolio-item illustration web-design-2 size_1x1 animate_reveal"
                                                 data-id="337" data-categories="Bulk SMS,Android">
                                                <a class="w-portfolio-item-anchor"
                                                   href="{{url('new/product',['karibusms'])}}"
                                                   style="background-color: #fff4ea;color: #38291d;">
                                                    <div class="w-portfolio-item-image"
                                                         style="background-image: url(../website_assets/uploads/karibuSMS-600x400.jpg)">
                                                        <img src="../website_assets/uploads/karibuSMS-600x400.jpg"
                                                             width="600" height="400"
                                                             alt="KaribuSMS Bulk SMS Platform"/></div>
                                                    <div class="w-portfolio-item-meta">
                                                        <div class="w-portfolio-item-meta-h">
                                                            <h2 class="w-portfolio-item-title" style="font-size: 20px">
                                                                KaribuSMS</h2><span
                                                                    class="w-portfolio-item-text" style="font-size: 13px">Bulk SMS,CRM</span>
                                                            <span class="w-portfolio-item-arrow"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="w-portfolio-item photography size_1x1 animate_reveal"
                                                 data-id="340" data-categories="Electricity,LUKU,Energy Meters">
                                                <a class="w-portfolio-item-anchor"
                                                   href="{{url('new/product',['rn'])}}"
                                                   style="background-color: #ff5d44;color: #ffffff;">
                                                    <div class="w-portfolio-item-image"
                                                         style="background-image: url(../website_assets/uploads/products/rn-600x400.png)">
                                                        <img src="../website_assets/uploads/products/rn-600x400.png"
                                                             width="600" height="450"
                                                             alt="Remote Prepaid Energy Meters"/></div>
                                                    <div class="w-portfolio-item-meta">
                                                        <div class="w-portfolio-item-meta-h">
                                                            <h2 class="w-portfolio-item-title" style="font-size: 20px">
                                                               Remote Prepaid Energy Meters</h2><span
                                                                    class="w-portfolio-item-text" style="font-size: 13px">Electricity,LUKU,Energy Meters</span>
                                                            <span class="w-portfolio-item-arrow"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="w-portfolio-item video-2 size_2x1 animate_reveal" data-id="341"
                                                 data-categories="video-2">
                                                <a class="w-portfolio-item-anchor"
                                                   href="{{url('new/product',['staytz'])}}"
                                                   style="background-color: #7cb342;color: #ffffff;">
                                                    <div class="w-portfolio-item-image"
                                                         style="background-image: url(../website_assets/uploads/products/staytz-600x400.png)">
                                                        <img src="../website_assets/uploads/products/staytz-600x400.png"
                                                             width="600" height="400"
                                                             alt="Single Project &#8211; Video"/></div>
                                                    <div class="w-portfolio-item-meta">
                                                        <div class="w-portfolio-item-meta-h">
                                                            <h2 class="w-portfolio-item-title" style="font-size: 20px">
                                                                StayTz</h2><span
                                                                    class="w-portfolio-item-text" style="font-size: 13px">Hotels,Lodges,Guest Houses</span>
                                                            <span class="w-portfolio-item-arrow"></span>
                                                        </div>
                                                    </div>
                                                </a>
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
 @include('new_website/social_footer')
    <script>
        tag=function(){
            $('header').addClass("bg_transparent");
        }
        $(document).ready(tag);


    </script>
@stop