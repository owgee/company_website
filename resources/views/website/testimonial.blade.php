<?php
/**
 * Description of testimonial
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
@section('title', 'Customer Testimonials')
@section('content')
<div class="l-titlebar imgsize_cover size_large color_alternate">
    <div class="l-titlebar-h">
	<div class="l-titlebar-content"><h1 itemprop="headline">Customer Appreciations</h1></div>
    </div>
</div>
<div class="l-main">
    <div class="l-main-h i-cf">
	<main class="l-content" itemprop="mainContentOfPage">
	    <section class="l-section wpb_row height_medium">
		<div class="l-section-h i-cf">
		    <div class="g-cols offset_medium">
			<div class="vc_col-sm-12 wpb_column vc_column_container">
			    <div class="vc_column-inner">
				<div class="wpb_text_column ">
				    <div class="wpb_wrapper">
					<h2 style="text-align: center">From : <a href="https://pspf-tz.org" target="_blank">Public Services Pension Fund
						(PSPF)</a></h2>
				    </div>
				</div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
				    <span class="w-separator-h"></span></div>
				<div class="g-cols wpb_row offset_medium vc_inner ">
				    <div class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="vc_column-inner">
					    <div class="w-testimonial style_2">
						<blockquote><q class="w-testimonial-text">I have the pleasure of
							working directly with the company and fully understand its
							capabilities.
							INETS worked effectively with PSPF, making them great
							problem solvers due to its excellence in software
							development field</q>
						    <div class="w-testimonial-person"><span
							    class="w-testimonial-person-name"><span>Andrew E. Mkangaa
							    </span></span><span class="w-testimonial-person-meta">Director of Information System - PSPF
							</span></div>
						</blockquote>
						<small><b>Work we have done for PSPF</b>:- Design & development of new web system to allow their members view and manage their accounts online, Server configuration and host new web system inhouse, Payment system design to allow members to contribute via Credit/Debit cards and PayPal, Design and develop android application version 1 & version 2, Upgrade PSPF pension management system etc</small>
						{{--<a href="">View More</a>--}}
					    </div>
					</div>
				    </div>
				</div>
				<div class="w-separator type_invisible size_large thick_1 style_solid color_border cont_none">
				    <span class="w-separator-h"></span>
				</div>
				<div class="wpb_text_column ">
				    <div class="wpb_wrapper">
					<h2 style="text-align: center">From : <a href="http://brela.go.tz" target="_blank">Business Registrations and Licensing
						Agency (BRELA)</a></h2>
				    </div>
				</div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
				    <span class="w-separator-h"></span></div>
				<div class="g-cols wpb_row offset_medium vc_inner ">
				    <div class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="vc_column-inner">
					    <div class="w-testimonial style_2">
						<blockquote><q class="w-testimonial-text">We highly appreciate these
							people toward success of this project (<a href="https://ors.brela.go.tz" target="_blank">OBRS</a>) which highly
							removes manual processes for BRELA staff and clients.
							Remarkably does these people posses exceptional talent in
							this field of software development</q>
						    <div class="w-testimonial-person"><span
							    class="w-testimonial-person-name"><span>Frank Kanyusi
							    </span></span><span class="w-testimonial-person-meta">BRELA - CEO</span></div>
						</blockquote>
						<small><b>Work we have done for BRELA</b>:- Design & development of OBRS, Server configuration to host OBRS, Payment system design and integration with 2 banks and train BRELA staff</small>
						{{--<a href="">View More</a>--}}
					    </div>
					</div>
				    </div>

				</div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none"><span class="w-separator-h"></span></div>
			    </div>
			</div>
		    </div>
		</div>
	    </section>
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

	</main>
    </div>
    @include('website/social-footer')
</div>
</div>
@stop