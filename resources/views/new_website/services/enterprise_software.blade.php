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
            <div class="l-titlebar-content"><h1 itemprop="headline">Enterprise Software Development</h1></div>
            <div class="g-nav">
                <div class="g-nav-list"><a class="g-nav-item to_next" title="Mobile Applications Design"
                                           href="{{url('new/service',['mobile_apps'])}}"></a><a
                            class="g-nav-item to_prev" title="Creative Project &#8211; Image"
                            href="{{url('new/service',['database_design'])}}"></a></div>
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
                                                                                        src="{{url('/')}}/website_assets/uploads/enterprise.png"
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
                                            <h3>Introduction</h3>
					    <p>Enterprise software solutions are software solutions created specifically for corporate organizations and SME to solve specific needs</p>
					    <p>In INETS we offer custom software solutions that cover all enterprise needs starting from online web applications to offline desktop based applications </p>
					    <h4>Types of customers we focus</h4>
                                            <p>INETS provide solutions to number of organizations including
					    <ul>
						<li>Government agencies</li>
						<li>Manufacturing companies</li>
						<li>Hospitals</li>
						<li>Education institutions</li>
						<li>and other SME businesses</li>
						
					    </ul>
					   We do custom development starting from requirement capture from the customer, design stage, development, testing up to commission..

<!--                                            <p> They eliminate repetitive processes and greatly reduce
                                                the need to manually register the information. The systems also
                                                streamline business processes and make it easier and more efficient for
                                                companies to collect and manipulate data for different purposes.</p>-->
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
                                    <div class="w-tabs layout_default accordion title_left icon_chevron iconpos_right ">
                                        <div class="w-tabs-list items_3">
                                            <div class="w-tabs-list-h">
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span
                                                                class="w-tabs-item-title">Benefits</span></div>
                                                </div>
                                                <div class="w-tabs-item">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Areas of Application</span>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-item active">
                                                    <div class="w-tabs-item-h"><span class="w-tabs-item-title">Solutions Types</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-tabs-sections">
                                            <div class="w-tabs-sections-h">
                                                <div class="w-tabs-section">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Benefits</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper"><p>Enterprise software helps
                                                                        make reporting easier and more customizable.
                                                                        With improved reporting capabilities, your
                                                                        company can respond to complex data requests
                                                                        more easily. Users can also run their own
                                                                        reports without relying on help from IT experts
                                                                        </p>
                                                                    <blockquote><p>It’s easier to provide high-quality customer
                                                                            service using an enterprise system. Sales and
                                                                            customer service people can interact with
                                                                            customers better and improve relationships with
                                                                            them, through faster, more accurate access to
                                                                            customers’ information and history.</p>
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
                                                                <div class="wpb_wrapper"><p>Enterprise Software solutions can be used by NGOs, governmental
                                                                    Institutions, Private companies and Groups of Companies. </p></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-tabs-section active">
                                                    <div class="w-tabs-section-header">
                                                        <div class="w-tabs-section-header-h"><h5
                                                                    class="w-tabs-section-title">Solution Types</h5>
                                                            <div class="w-tabs-section-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="w-tabs-section-content">
                                                        <div class="w-tabs-section-content-h i-cf">
                                                            <div class="wpb_text_column ">
                                                                <div class="wpb_wrapper">
                                                                        <ul><li>Corporate</li><li>SMEs</li></ul>
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
		 <section class="l-section wpb_row height_auto width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_none">
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>Why customer trust us</h2>
                                            <p>
						Being trusted by reputable organizations is not an easy step, but INETS has a special role inside that create great trust from our customers<br>
                                                These are;</p>
                                            <ol>
                                                <li>Professionalism</li>
                                                <li>Great care & customer support</li>
                                                <li>Highly integrity</li>
                                            </ol>
                                        </div>
                                    </div>
                                    {{--<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">--}}
                                        {{--<span class="w-separator-h"></span></div>--}}
                                    {{--<div class="g-cols wpb_row offset_medium vc_inner ">--}}
                                        {{--<div class="in_col-sm-4 wpb_column in_column_container">--}}
                                            {{--<div class="in_column-inner">--}}
                                                {{--<div class="w-counter size_small color_text" data-initial="0"--}}
                                                     {{--data-target="456" data-prefix="" data-suffix="">--}}
                                                    {{--<div class="w-counter-h">--}}
                                                        {{--<div class="w-counter-number">--}}
                                                            {{--0--}}
                                                        {{--</div>--}}
                                                        {{--<h6 class="w-counter-title">Expected Users</h6>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="in_col-sm-4 wpb_column in_column_container">--}}
                                            {{--<div class="in_column-inner">--}}
                                                {{--<div class="w-counter size_small color_primary" data-initial="0"--}}
                                                     {{--data-target="328" data-prefix="" data-suffix="">--}}
                                                    {{--<div class="w-counter-h">--}}
                                                        {{--<div class="w-counter-number">--}}
                                                            {{--0--}}
                                                        {{--</div>--}}
                                                        {{--<h6 class="w-counter-title">Payment Channels Integrated</h6>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="in_col-sm-4 wpb_column in_column_container">--}}
                                            {{--<div class="in_column-inner">--}}
                                                {{--<div class="w-counter size_small color_secondary" data-initial="0"--}}
                                                     {{--data-target="719" data-prefix="" data-suffix="">--}}
                                                    {{--<div class="w-counter-h">--}}
                                                        {{--<div class="w-counter-number">--}}
                                                            {{--0--}}
                                                        {{--</div>--}}
                                                        {{--<h6 class="w-counter-title">Schools Covered</h6>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                           <div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437658268320">
			       
                                <div class="in_column-inner">
                                    <div class="vc_empty_space  blank-column" style="height: 10px"><span
                                                class="vc_empty_space_inner">Request a Quote Now</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <div class="l-navigation">
        <a class="l-navigation-item to_next" href="{{url('new/service',['mobile_apps'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                {{--<img src="{{url('/')}}/website_assets/uploads/shutterstock_112330751-150x150.jpg" width="150"--}}
                     {{--height="150" alt="Mobile Application Development">--}}
            </div>
            <div class="l-navigation-item-title">
                <span>Mobile Apps Design</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('new/service',['database_design'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                {{--<img src="{{url('/')}}/website_assets/uploads/logo/port-6-150x150.jpg" width="150" height="150"--}}
                     {{--alt="Database Management">--}}
            </div>
            <div class="l-navigation-item-title">
                <span>Database Design</span>
            </div>
        </a>
    </div>
    </div>
    <section class="l-section wpb_row height_medium color_alternate" id="clients">
        <div class="l-section-h i-cf">
            <div class="g-cols offset_medium">
                <div class="in_col-sm-12 wpb_column in_column_container animate_afb">
                    <div class="in_column-inner">
                        <div class="wpb_text_column ">
                            <div class="wpb_wrapper">
                                <h2 style="text-align: center">Our Clients</h2>
                            </div>
                        </div>
                        <div class="w-logos style_1 nav_arrows type_carousel cols_5">
                            <div class="w-logos-list" data-items="5" data-autoplay="0" data-timeout="3000"
                                 data-nav="1"><a
                                        class="w-logos-item style_1 nav_arrows type_carousel cols_5"
                                        href="#"><img width="500" height="250"
                                                      src="{{url('/')}}/website_assets/uploads/logo/brela-logo-500x250.png"
                                                      class="attachment-medium size-medium"
                                                      alt="BRELA"/></a>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/pspf-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="PSPF"/></div>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/mafge-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="MAFGE"/></div>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/br-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="BR Solutions"/></div>
                                <div class="w-logos-item"><img width="500" height="250"
                                                               src="{{url('/')}}/website_assets/uploads/logo/pspf-logo-500x250.png"
                                                               class="attachment-medium size-medium"
                                                               alt="PSPF"/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
