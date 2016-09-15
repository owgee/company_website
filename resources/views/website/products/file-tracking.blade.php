<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 26/08/2016
 * Time: 8:26 PM
 */ ?>
@extends('website.master')
@section('title', 'eFormat File tracking system')
@section('content')
    <div class="l-titlebar imgsize_cover size_large color_alternate">
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">File Tracking</h1></div>
        </div>
    </div>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="l-section wpb_row height_auto width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_none">
                            <div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394418">
                                <div class="in_column-inner">
                                    <div class="w-image  align_center animate_afb"><img width="750" height="1000"
                                                                                        src="{{url('/')}}/website_assets/uploads/file-tracking-600x400.png"
                                                                                        class="attachment-large size-large"
                                                                                        alt="File Tracking System"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>About File Tracking System</h2>
                                            <p>This is the record management and files tracking solution that manages
                                                and track all organization physical files and electronic files.
                                            </p>
                                            <p>The application helps the organization to track movement of all physical
                                                files from one office to another or one branch to another and facilitate
                                                easy flow of records and information within the organization</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="l-section wpb_row height_auto width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_none">
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2 class="center">File Tracking Main Features</h2>
                                            <h4>1.&nbsp;&nbsp; Track physical file</h4>
                                            <p>With this software, each physical file is market with a special
                                                electronic number and once this file moved from one office to another
                                                office, the software track automatically and record information in the
                                                database without any human interference.</p>
                                            <p>This eliminates completely manual operation and at any instant, admin can
                                                search file number in the software and see where the file is located</p>

                                            <h4>3.&nbsp;&nbsp; Tracking electronic files</h4>
                                            <p>With this software, user at any office can create electronic file (word
                                                file, excel, power point etc), write required contents and forward it to
                                                other user(s) in the system. Other user in the system can receive a
                                                file, edit or write and share with other users , print or download..</p>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h4>2.&nbsp;&nbsp; Finding a missing file</h4>
                                            <p>Within an office with many files available (example in registry office),
                                                finding one file or misplaced file can be a paid and highly time wasting
                                                activity. This software come up with a tracking device (small like a
                                                mobile phone), which help user to locate exactly where is that missing
                                                file and withing few second user will know exactly where is that missing
                                                file.</p>
                                          <h4>4.&nbsp;&nbsp; Records registration</h4>
                                            <p>Once file is received, whether at reception, register office or anywhere,
                                                user can just mark them with a tag and automatically it will start to be
                                                tracked.</p>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <section class="l-section wpb_row height_auto width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_none">
                            <div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394425">
                                <div class="in_column-inner">
                                    <div class="vc_empty_space  blank-column" style="height: 10px"><span
                                                class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{--<section class="l-section wpb_row height_medium color_alternate">--}}
                    {{--<div class="l-section-h i-cf">--}}
                        {{--<div class="g-cols offset_medium">--}}
                            {{--<div class="in_col-sm-12 wpb_column in_column_container">--}}
                                {{--<div class="in_column-inner">--}}
                                    {{--<div class="wpb_text_column ">--}}
                                        {{--<div class="wpb_wrapper">--}}
                                            {{--<h2 style="text-align: center;">More about File Tracking</h2>--}}
                                            {{--<p style="text-align: center;">.</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="w-separator type_default size_large thick_1 style_solid color_border cont_icon">--}}
                                        {{--<span class="w-separator-h"><i class="fa fa-heart-o"></i></span></div>--}}

                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</section>--}}
                {{--<section class="l-section wpb_row height_auto width_full">--}}
                    {{--<div class="l-section-h i-cf">--}}
                        {{--<div class="g-cols offset_none">--}}
                            {{--<div class="in_col-sm-4 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394431">--}}
                                {{--<div class="in_column-inner">--}}
                                    {{--<div class="vc_empty_space  blank-column" style="height: 10px"><span--}}
                                                {{--class="vc_empty_space_inner"></span></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="in_col-sm-4 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394432">--}}
                                {{--<div class="in_column-inner">--}}
                                    {{--<div class="vc_empty_space  blank-column" style="height: 10px"><span--}}
                                                {{--class="vc_empty_space_inner"></span></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="in_col-sm-4 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394433">--}}
                                {{--<div class="in_column-inner">--}}
                                    {{--<div class="vc_empty_space  blank-column" style="height: 10px"><span--}}
                                                {{--class="vc_empty_space_inner"></span></div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</section>--}}
            </main>
        </div>
    </div>
    <div class="l-navigation">
        <a class="l-navigation-item to_next" href="{{url('/product',['shulesoft'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/products/shulesoft-600x400.png" width="150"
                     height="150" alt="ShuleSoft - School Management System">
            </div>
            <div class="l-navigation-item-title">
                <span>ShuleSoft</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('/product',['karibusms'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/karibuSMS-600x400.jpg" width="150" height="150"
                     alt="KaribuSMS - Bulk SMS, Android application">
            </div>
            <div class="l-navigation-item-title">
                <span>KaribuSMS</span>
            </div>
        </a>
    </div>
 @include('website/social-footer')
    <script>
        tag = function () {
            $('header').addClass("bg_transparent");
        }
        $(document).ready(tag);


    </script>
@stop
