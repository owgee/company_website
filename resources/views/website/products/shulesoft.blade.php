<?php
/**
 * Created by PhpStorm.
 * User: Owden
 * Date: 27/08/2016
 * Time: 8:44 PM
 */ ?>
@extends('website.master')
@section('title', 'ShuleSoft School Management System')
@section('content')
<div class="l-titlebar imgsize_cover size_large color_alternate">
    <div class="l-titlebar-h">
	<div class="l-titlebar-content"><h1 itemprop="headline">ShuleSoft</h1></div>
    </div>
</div>
    <div class="l-main">
        <div class="l-main-h i-cf">
            <main class="l-content" itemprop="mainContentOfPage">
                <section class="">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_none">
                            <div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437646394418">
                                <div class="in_column-inner">
                                    <div class="w-image  align_center animate_afb"><img width="750" height="1000"
                                                                                        src="{{url('/')}}/website_assets/img/shulesoft.jpg"
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
                                            <h2>About ShuleSoft</h2>
                                            <p>This is the integrated cloud based school management system developed to
                                                bring simplicity and highly improve efficiency in the field of
                                                Education.<br>

                                            <p>ShuleSoft is extensible and scalable educational
                                                management system which allows any user in the system to easily
                                                collaborate with others, it eliminates manual operation and effectively
                                                manages records electronically.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
		<section class="l-section height_medium color_custom" id="custom" style="background-color: #1c1f21; color: #c2c4c5;">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_medium">
                            <div class="in_col-sm-12 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
					    <br/>
                                            <h2 style="text-align: center">Major <span class="highlight highlight_secondary"><strong>Benefits</strong></span></h2>
                                        </div>
                                    </div>
                                    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
                                        <span class="w-separator-h"></span></div>
                                    <div class="g-cols wpb_row offset_medium vc_inner ">
                                        <div class="in_col-sm-4 wpb_column in_column_container">
                                            <div class="in_column-inner">
                                                <div class="w-iconbox iconpos_top size_large style_circle color_contrast">
                                                    <a class="w-iconbox-link" href="#">
                                                        <div class="w-iconbox-icon"><i class="mdfi_hardware_phonelink"></i><span class="ripple-container"></span></div>
                                                        <h4 class="w-iconbox-title">Reduce OPEX</h4></a>
                                                    <div class="w-iconbox-text">By using ShuleSoft, your costs of operation will be highly reduce as most operations will be via the software, you will save money for stationary (paper based), buying books online, etc
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="in_col-sm-4 wpb_column in_column_container">
                                            <div class="in_column-inner">
                                                <div class="w-iconbox iconpos_top size_large style_circle color_contrast">
                                                    <a class="w-iconbox-link" href="#">
                                                        <div class="w-iconbox-icon"><i class="mdfi_action_favorite_outline"></i><span class="ripple-container"></span></div>
                                                        <h4 class="w-iconbox-title">Improve School Performance</h4></a>
                                                    <div class="w-iconbox-text">With ShuleSoft, the time taken to accomplish tasks like markings, creating invoices, generate reports, etc will now be done in seconds. School will need less manpower to accomplish tasks with more accuracy than manual operation
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="in_col-sm-4 wpb_column in_column_container">
                                            <div class="in_column-inner">
                                                <div class="w-iconbox iconpos_top size_large style_circle color_contrast">
                                                    <a class="w-iconbox-link" href="#">
                                                        <div class="w-iconbox-icon"><i class="mdfi_image_landscape"></i>
                                                        <span class="ripple-container"></span></div>
                                                        <h4 class="w-iconbox-title">Simplicity in Usage</h4></a>
                                                    <div class="w-iconbox-text">ShuleSoft allow different users and stakeholders involved in education to collectively work together to improve your school education. ShuleSoft can be accessed in Computer, mobile phones and in tablets at any location 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		    <br/><br/>
                </section>
                <section class="l-section wpb_row height_auto width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset_none">
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                <div class="in_column-inner">
                                    <div class="wpb_text_column ">
                                        <div class="wpb_wrapper">
                                            <h2>ShuleSoft Modules</h2>
                                            <p>There are six main modules of ShuleSoft School Management System, these
                                                modules form the core
                                                application.<br>
                                                These are;
                                            <ol>
                                                <li>Accounting module</li>
                                                <li>Library management module</li>
                                                <li>Hostel management module</li>
                                                <li>Transport management module</li>
                                                <li>Class operations management module</li>
                                                <li>Email and SMS module</li>
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
					    class="vc_empty_space_inner">
					    <a href="http://shulesoft.com/request_demo" target="_blank">Click here</a> to Request a demo. 
					</span>
				    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="l-section wpb_row  width_full">
                    <div class="l-section-h i-cf">
                        <div class="g-cols offset-l2" style="padding-left: 5%; padding-right: 13%;">
                            <div class="in_col-sm-6 wpb_column in_column_container">
                                  <div class="in_column-inner ">

                                        <h2>Benefits of using ShuleSoft</h2>
                                         
                                                <ul>
                                                    <li>Improve Transparency and accountability in school management to all management levels</li>
                                                    <li>Easy generation of school statistics based on records and data generated. For example, school performance, employee status, payment transactions etc &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                                                    <li>Facilitate the easiest and most effectively payment solution. Schools can easily generate invoices to parents and schools can effectively track, reconcile and manage revenues</li>
                                                    <li>Effective in getting school reports including students exams reports, teachers reports, library and accouting reports</li>
                                                    <li>Improve and provide a systematic workflow in all sectors of the school</li>
                                                    <li>Cloud based solution, a school do not need to invest to buy computer servers or build infrastructure in the whole school for system to operate</li>
                                                    <li>Responsive, all users can access the system via desktop computers, laptop computers, tablets and mobile phones</li>
                                                </ul>


                                    </div>
                                
                                </div>
                                <div class="in_col-sm-6 wpb_column in_column_container">
                                    <div class="in_column-inner">
                                        <div class="wpb_text_column ">
                                            <div class="wpb_wrapper" style="padding-left: 5%;">
                                                <h2>ShuleSoft Users</h2>
                                                <p>ShuleSoft School Management System has a vast number of users who fit
                                                    the
                                                    institution</p>
                                                <p>All the Users of the System are explained below;
                                                <ul>
                                                    <li><strong>Admin </strong></li>
                                                </ul>
                                                <blockquote>This enables school&rsquo;s administrator to manage all
                                                    users and
                                                    functions of the system including registration of new users,
                                                    monitoring
                                                    and controlling the system.
                                                </blockquote>
                                                <ul>
                                                    <li><strong>Teachers </strong></li>
                                                </ul>
                                                <blockquote>This module allows teachers to enter all the records of
                                                    students like the
                                                    marks of the examination of students, attendance, create student
                                                    report
                                                    and send to the parent through the system.
                                                </blockquote>
                                                <ul>
                                                    <li><strong>Parents</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </li>
                                                </ul>
                                                <blockquote>ShuleSoft allows parents to view their student&rsquo;s
                                                    examination
                                                    reports, attendance reports, payment invoices &nbsp;and payment
                                                    transaction reports. Parents can also submit paying slip after
                                                    perform
                                                    payment to a specified bank for accountant to validate and for
                                                    schools
                                                    integrated with payments, parents can easily view payment options
                                                    and
                                                    even pay online via credit/debit cards and paypal
                                                </blockquote>
                                                <ul>
                                                    <li><strong>Students</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    </li>
                                                </ul>
                                                <blockquote>Student Module allows students to view their examination
                                                    schedules, view
                                                    school notices, examination reports and download leacture materials.
                                                </blockquote>
                                                <ul>
                                                    <li><strong>Librarian</strong></li>
                                                </ul>
                                                <blockquote>Librarian can login and view list of library members, can
                                                    register new
                                                    members to be library members, can register new books and issue
                                                    books in
                                                    via a system
                                                </blockquote>
                                                <ul>
                                                    <li><strong>Accountant </strong></li>
                                                </ul>
                                                <blockquote>Accountant can desifn all fees available in school, generate
                                                    invoices
                                                    (for one student or group of students), can view payment history,
                                                    can
                                                    approve uploaded bank paying slip, view available balance for each
                                                    student and add any school expense.
                                                </blockquote>
                                            </div>
                                        </div>
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
                                            {{--<h2 style="text-align: center;">More to ShuleSoft</h2>--}}
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
        </div>
    </div>
    <div class="l-navigation">
        <a class="l-navigation-item to_next" href="{{url('/product',['staytz'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/stay-tz-600x400.jpg" width="150"
                     height="150" alt="StayTz">
            </div>
            <div class="l-navigation-item-title">
                <span>StayTz</span>
            </div>
        </a>
        <a class="l-navigation-item to_prev" href="{{url('/product',['file-tracking'])}}">
            <div class="l-navigation-item-arrow"></div>
            <div class="l-navigation-item-preview">
                <img src="{{url('/')}}/website_assets/uploads/file-tracking-600x400.png" width="150"
                     height="150"
                     alt="File Tracking System">
            </div>
            <div class="l-navigation-item-title">
                <span>File Tracking</span>
            </div>
        </a>
    </div>
 @include('website/social-footer')
@stop
