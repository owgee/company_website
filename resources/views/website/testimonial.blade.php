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
{{--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
{{--<script type='text/javascript'--}}
{{--src='{{url('/')}}/website_assets/themes/framework/js/gmaps.min62d0.js?ver=4.5.3'></script>--}}
<div class="l-titlebar imgsize_cover parallax_ver size_huge color_primary">
    <div class="l-titlebar-img"
	 style="background-image: url({{url("/")}}/website_assets/uploads/picjumbo.com_IMG_6037.jpg)"
	 data-img-width="1920" data-img-height="1280"></div>
    <div class="l-titlebar-overlay" style="background-color:rgba(28,28,28,0.3)"></div>
    <div class="l-titlebar-h">
	<div class="l-titlebar-content"><h1 itemprop="headline">Testimonials</h1></div>
	<div class="g-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span typeof="v:Breadcrumb"><a
		    class="g-breadcrumbs-item" rel="v:url" property="v:title"
		    href="<?= url('/') ?>">Home</a></span>
	    <span class="g-breadcrumbs-separator"></span> <span class="g-breadcrumbs-item">Testimonials</span>
	</div>
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
				<div class="wpb_text_column "><div class="wpb_wrapper">
					<h2 style="text-align: center">From : Public Services Pension Fund (PSPF)</h2>
				    </div> </div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none"><span class="w-separator-h"></span></div>
				<div class="g-cols wpb_row offset_medium vc_inner ">
				    <div class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="vc_column-inner"><div class="w-testimonial style_1"><blockquote><q class="w-testimonial-text">I have the pleasure of working directly with the company and fully understand its capabilities.
INETS worked effectively with PSPF, making them great problem solvers due to its excellence in software development field</q><div class="w-testimonial-person"><span class="w-testimonial-person-name"><span>Andrew E. Mkangaa
</span></span><span class="w-testimonial-person-meta">Director of Information System - PSPF
</span></div></blockquote><a href="">View More</a></div></div>
				    </div>
				</div>
				<div class="w-separator type_invisible size_large thick_1 style_solid color_border cont_none">
				    <span class="w-separator-h"></span>
				</div>
				<div class="wpb_text_column ">
				    <div class="wpb_wrapper">
					<h2 style="text-align: center">From : Business Registrations and Licensing Agency (BRELA)</h2>
				    </div>
				</div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none"><span class="w-separator-h"></span></div>
				<div class="g-cols wpb_row offset_medium vc_inner ">
				    <div class="vc_col-sm-6 wpb_column vc_column_container">
					<div class="vc_column-inner">
					    <div class="w-testimonial style_2"><blockquote><q class="w-testimonial-text">We highly appreciate these people toward success of this project (OBRS) which highly removes manual processes for BRELA staff and clients. 
Remarkably does these people posses exceptional talent in this field of software development</q><div class="w-testimonial-person"><span class="w-testimonial-person-name"><span>Frank Kanyusi
</span></span><span class="w-testimonial-person-meta">BRELA - CEO</span></div></blockquote><a href="">View More</a></div>
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
<script>
    tag = function () {
	$('header').addClass("bg_transparent");
    }
    $(document).ready(tag);


</script>
@stop