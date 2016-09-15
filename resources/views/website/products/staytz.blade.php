<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 26/08/2016
 * Time: 8:31 PM
 */ ?>
@extends('website.master')
@section('title', 'StayTz Application')
@section('content')
    <div class="l-titlebar imgsize_cover size_large color_alternate">
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">StayTz</h1></div>
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
                                                                                        src="{{url('/')}}/website_assets/uploads/stay-tz-600x400.jpg"
                                                                                        class="attachment-large size-large"
                                                                                        alt="ShuleSoft - School Managment System"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>Hotels, Lodges, Conference Halls & Guest Houses</h2>
                                            <p>Quickly search for a variety of stay options in Cities and Towns in the
                                                United Republic of TANZANIA such as Hotels and Lodges, Holiday Homes,
                                                Apartments, Guesthouses, Halls for Conferences, Meetings, Wedding
                                                Reception or Social
                                            </p>
                                        </div>
                                    </div>
                                    <div class="w-iconbox iconpos_top size_large style_circle color_light">
                                        <a href='https://play.google.com/store/apps/details?id=com.inetstz.staytz&utm_source=global_co&utm_medium=prtnr&utm_content=Mar2515&utm_campaign=PartBadge&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img
                                                    alt='Get it on Google Play' width="200" height="80"
                                                    src='{{url('/')}}/website_assets/img/google-play-badge.png'/></a>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </section>
                {{--<section class="l-section wpb_row height_auto width_full">--}}
                {{--<div class="l-section-h i-cf">--}}
                {{--<div class="g-cols offset_none">--}}
                {{--<div class="in_col-sm-6 wpb_column in_column_container">--}}
                {{--<div class="in_column-inner">--}}
                {{--<div class="wpb_text_column ">--}}
                {{--<div class="wpb_wrapper">--}}
                {{--<h2>Advantages of Using StayTz</h2>--}}
                {{--<p>.</div>--}}
                {{--</div>--}}
                {{--<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">--}}
                {{--<span class="w-separator-h"></span></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437658268320">--}}
                {{--<div class="in_column-inner">--}}
                {{--<div class="vc_empty_space  blank-column" style="height: 10px"><span--}}
                {{--class="vc_empty_space_inner"></span></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</section>--}}
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
                {{--<h2 style="text-align: center;">More About StayTz</h2>--}}
                {{--<p style="text-align: center;"></p>--}}
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
            @include('website/social-footer')
        </div>
        <div class="l-navigation">
            <a class="l-navigation-item to_next" href="{{url('/product',['rn'])}}">
                <div class="l-navigation-item-arrow"></div>
                <div class="l-navigation-item-preview">
                    <img src="{{url('/')}}/website_assets/uploads/rn.png" width="150"
                         height="150" alt="Prepaid Energy Meters">
                </div>
                <div class="l-navigation-item-title">
                    <span>Prepaid Eenergy Meters</span>
                </div>
            </a>
            <a class="l-navigation-item to_prev" href="{{url('/product',['shulesoft'])}}">
                <div class="l-navigation-item-arrow"></div>
                <div class="l-navigation-item-preview">
                    <img src="{{url('/')}}/website_assets/uploads/products/shulesoft-600x400.png" width="150"
                         height="150"
                         alt="ShuleSoft - School Management System">
                </div>
                <div class="l-navigation-item-title">
                    <span>ShuleSoft</span>
                </div>
            </a>
        </div>
    </div>

    <script>
        tag = function () {
            $('header').addClass("bg_transparent");
        }
        $(document).ready(tag);


    </script>
@stop
