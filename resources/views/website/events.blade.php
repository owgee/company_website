<?php
/**
 * Description of events
 *
 *  -----------------------------------------------------
 *  Copyright: INETS COMPANY LIMITED
 *  Website: www.inetstz.com
 *  Email: info@inetstz.com
 *  -----------------------------------------------------
 * @author Ephraim Swilla
 */
?>
@extends('website.master')
@section('content')
    <div class="l-titlebar imgsize_cover parallax_ver size_huge color_primary">
        <div class="l-titlebar-img"
             style="background-image: url({{url("/")}}/website_assets/uploads/about.jpg)"
             data-img-width="1920" data-img-height="1280"></div>
        <div class="l-titlebar-overlay" style="background-color:rgba(28,28,28,0.3)"></div>
        <div class="l-titlebar-h">
            <div class="l-titlebar-content"><h1 itemprop="headline">Some Events</h1></div>
            <div class="g-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a
                            class="g-breadcrumbs-item" rel="v:url" property="v:title"
                            href="<?= url('/') ?>">Home</a></span>
                <span class="g-breadcrumbs-separator"></span> <span class="g-breadcrumbs-item">Micro blog</span>
            </div>
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
                                                                                        src="{{url('/')}}/website_assets/uploads/inets-tbc.jpg"
                                                                                        class="attachment-large size-large"
                                                                                        alt="TBC1 Tanzania, Technology Dar es Salaam,Payment System"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>Interview with Tanzania Broadcasting Corporation (TBC)</h2>
                                            <time class="w-blog-post-meta-date date updated">August 30th, 2016</time>


                                            <p><br/>TBC after identifying our potential in payment systems design and
                                                integration, they decided to visit our offices to have an interview with
                                                us about our technology.
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
                                            <h2>Inets Day</h2>
                                            <time>May 14th, 2016</time>
                                            <p><br/>This is the day for ALL Inets employees to refresh their minds in a
                                                nice and sweet hotel. <br>
                                                This process helps us to rejuvenate and align our focus.

                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="g-cols wpb_row offset_medium vc_inner ">


                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <img width="750" height="1000"
                                                 src="{{url('/')}}/website_assets/uploads/inets-day.jpg"
                                                 class="attachment-large size-large"
                                                 alt="INETS Day, White Sands Hotel"
                                                 sizes="(max-width: 750px) 100vw, 750px"/>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="g-cols wpb_row offset_medium vc_inner ">


                                    </div>
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
                                    <div class="wpb_text_column ">


                                        <img width="750" height="1000"
                                             src="{{url('/')}}/website_assets/uploads/ikulu.jpg"
                                             class="attachment-large size-large"
                                             alt="Tanzania State House, OBRS,BRELA,TNBC,Kikwete,Mengi"
                                             sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>Launching of <a href="ors.brela.go.tz" target="_blank">OBRS</a> with the
                                                former Tanzania President, <a
                                                        href="https://en.wikipedia.org/wiki/Jakaya_Kikwete"
                                                        target="_blank">Dr Jakaya Mrisho Kikwete</a></h2>
                                            <p>Online Registration System for Tanzanians to register Business names,
                                                Company clearance and perform Official Search.</p>
                                            <p>The event was on the 2nd October 2015 at the Tanzania Statehouse during
                                                the 9th TNBC meeting.</p>

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
                                            <h2>IAD 2015, 14th-16th April at Zimbabwe Victoria Falls</h2>
                                            <time class="w-blog-post-meta-date date updated">September 15, 2014</time>


                                            <p><br/> A coordinated and concerted effort by Policy Makers, Service
                                                Providers, Investors, Solution Providers and Major End Users that would
                                                move
                                                Africa towards the goal of making Access Affordable, bringing all of the
                                                associated Socio Economic benefits.

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394418">
                                <div class="in_column-inner">
                                    <div class="w-image  align_center animate_afb"><img width="750" height="1000"
                                                                                        src="{{url('/')}}/website_assets/uploads/victoria-falls.jpg"
                                                                                        class="attachment-large size-large"
                                                                                        alt="Victoria Falls,Zimbabwe,IAD 2015"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="l-section wpb_row height_auto width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_none">
                            <div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394418">
                                <div class="in_column-inner">
                                    <div class="w-image  align_center animate_afb"><img width="750" height="1000"
                                                                                        src="{{url('/')}}/website_assets/uploads/doha.jpg"
                                                                                        class="attachment-large size-large"
                                                                                        alt="Qatar, DOHA, Luku Meter,Dar es Salaam"
                                                                                        sizes="(max-width: 750px) 100vw, 750px"/>
                                    </div>
                                </div>
                            </div>
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>ITU Telecom World Event in 2014 at Qatar - DOHA</h2>
                                            <time class="w-blog-post-meta-date date updated">September 15, 2014</time>


                                            <p><br/>ITU Telecom World 2014, the leading platform of strategic debate,
                                                knowledge-sharing, innovation-showcasing and networking for the global
                                                ICT community.<br>
                                           <p> We were privileged to represent Tanzania under TCRA and DTBi, COSTECH.

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
    </div>
    <script>
        tag = function () {
            $('header').addClass("bg_transparent");
        }
        $(document).ready(tag);


    </script>
@stop