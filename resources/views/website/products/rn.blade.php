<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 26/08/2016
 * Time: 8:29 PM
 */ ?>
@extends('website.master')
@section('title', 'RN Application')
@section('content')
    <div class="l-titlebar imgsize_cover size_large color_alternate">
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Prepaid Energy Meters</h1></div>
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
                                    <div class="vc_empty_space  blank-column" style="height: 10px"><span
                                                class="vc_empty_space_inner"></span></div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>About Prepaid Energy Meters</h2>
                                            <p>A system that will allow keypad prepaid meters to be remotely recharged
                                                via any available payment channel and enable users to receive SMS
                                                notification via their phones. This application makes a prepaid meter
                                                recharged without user to be in physical contact or nearby a meter
                                            </p>
                                        </div>
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
                                            <h2>Benefits of Prepaid Energy Meters</h2>
                                            <p>This project involves more than one field of engineering including
                                                telecommunication, electrical and computer engineering. The project will
                                                provide the following benefits to electricity distributors and prepaid
                                                energy users</p>
                                            <ol>
                                                <li>Allow prepaid energy meters to be recharged remotely by a user
                                                    without a user to find a meter and enters token manually..
                                                </li>
                                                <li>Allow automatic detection of remain credit balance and send SMS
                                                    notification to user when credit is about to be over
                                                </li>
                                                <li>Automatic recharging of a meter when client decides to allow this
                                                    service by connecting his meter account with payment systems. The
                                                    payment system will include

                                                </li>
                                                <ul>
                                                    <li>Bank payment account</li>
                                                    <li>Mobile payment account.</li>
                                                </ul>
                                                <li>Allow electricity distribution companies to get automatic real time
                                                    update for any user action to a meter. This include
                                                </li>
                                                <ul>
                                                    <li>Automatic temper detection and send notification to electricity
                                                        distribution company and security agencies.
                                                    </li>
                                                    <li>GPS location detection for easy detection of current location of a
                                                        meter in case of any detection.
                                                    </li>
                                                    <li>Simplify prepaid meter auditing process by automatic send all
                                                        prepaid meter data to a server computer for analysis.
                                                    </li>
                                                    <li>Automatic meter fault detection by sending fault detection errors in
                                                        server station.
                                                    </li>
                                                </ul>
                                            </ol>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437658268320">
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
                                            {{--<h2 style="text-align: center;">More About Prepaid Energy Meters</h2>--}}
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
        <a class="l-navigation-item to_next" href="{{url('new/product',['karibusms'])}}">>
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/products/karibusms-600x400.png" width="150"
                     height="150" alt="KaribuSMS - Bulk SMS,CRM">
            </div>
            <div class="l-navigation-item-title">
                <span>KaribuSMS</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('new/product',['staytz'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/products/staytz-600x400.png" width="150" height="150"
                     alt="StayTz,Hotels,lodges & Guest Houses">
            </div>
            <div class="l-navigation-item-title">
                <span>StayTz</span>
            </div>
        </a>
    </div>
 @include('website/social_footer')
    <script>
        tag = function () {
            $('header').addClass("bg_transparent");
        }
        $(document).ready(tag);


    </script>
@stop
