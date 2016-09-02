@extends('new_website.master')
<?php /**
 * Created by PhpStorm.
 * User: Owden
 * Date: 12/08/2016
 * Time: 12:36 PM
 */ ?>
@section('title', 'Mobile Apps Design & development')
@section('content')
<div class="l-titlebar imgsize_cover size_large color_alternate">
    <div class="l-titlebar-h">
	<div class="l-titlebar-content"><h1 itemprop="headline">Mobile Applications Design</h1></div>
	<div class="g-nav">
	    <div class="g-nav-list">
		<a class="g-nav-item to_next" title="Mobile Applications Design"
		   href="{{url('new/service',['payment_integration'])}}"></a>
		<a
		    class="g-nav-item to_prev" title="Enterprise Software Design"
		    href="{{url('new/service',['enterprise_software'])}}"></a></div>
	</div>
    </div>
</div>
<div class="l-main">
    <div class="l-main-h i-cf">
	<main class="l-content" itemprop="mainContentOfPage">
	    <section class="wpb_row height_medium">
		<div class="l-section-h i-cf">
		    <div class="g-cols offset_medium">
			<div class="in_col-sm-8 wpb_column in_column_container">
			    <div class="in_column-inner">
				<div class="w-image  align_center animate_afb"><img width="750" height="1000"
										    src="{{url('/')}}/website_assets/uploads/karibusms.png"
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
					<p>Do you need a mobile app for your organization or you want to create a business in mobile app ? </p>
					<p>INETS exparts can help you in design, gathering requirements for that application and create a mobile app based on the brand and what you need</p>
					<p>

					    Mobile phone applications, are rapidly gaining popularity in the
					    smartphone market, and for organization not to have a mobile app for customers to know the products is the risk you cannot afford</p>

				    </div>

				</div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
				    <span class="w-separator-h"><i class="fa fa-star"></i></span></div>
				<div class="w-tabs layout_default accordion title_left icon_chevron iconpos_right ">


				</div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
				    <span class="w-separator-h"><i class="fa fa-star"></i></span></div>

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
					<h2>Which areas you may need a mobile app</h2>
					<p>Mobile apps usage continue to grow rapidly each year. INETS offer support in design and development of apps in different fields includes</p>
					<ul>
					    <li>pension funds</li>
					    <li>Media based applications like radio app,television app </li>
					    <li>hotels and restaurants</li>
					    <li>enterprise based applications</li>
					    <li>banks and financial institutions</li>
					    <li>other customized business applications and e-commerce</li>
					    <li>and many others</li>
					</ul>
				    </div>
				</div>

			    </div>
			</div>
			<div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437658268320">

			    <div class="in_column-inner">
				<div class="vc_empty_space  blank-column" style="height: 10px"><span
					class="vc_empty_space_inner"><a href="<?= url('/new/contact_us') ?>">Contact us now</a> for your request</span>

				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </section>
	    <section class="l-section wpb_row height_auto width_full">
		<div class="l-section-h i-cf">
		    <div class="g-cols offset_none">

			<div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437658268320">

			    <div class="in_column-inner">
				<div class="vc_empty_space  blank-column" style="height: 10px">
				    <p>Do you need a mobile application ?,<a href="<?= url('/new/contact_us') ?>"> contact us now</a> or view <a href="https://play.google.com/store/apps/details?id=com.pspftz.pspftz" target="_blank">some of our mobile apps</a></p>
				</div>
			    </div>
			</div>
			<div class="in_col-sm-6 wpb_column in_column_container">
			    <div class="in_column-inner">
				<div class="wpb_text_column ">
				    <div class="wpb_wrapper">
					<h2>Benefits of having a mobile app for business</h2>

					<div class="wpb_wrapper">
					    <p>These are some benefits an Organization can benefits from mobile apps</p>
					    <ul>
						<li>Develop the direct marketing channel for businesses</li>
						<li>building of the close relationship through periodic alerts to  users </li>
						<li>Highly useful in research based institutions to collect data in remote areas.</li>
						<li>customers can access most of your service description with or without internet connection</li>
					    </ul>  </div>

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
<div class="l-navigation">
    <a class="l-navigation-item to_next" href="{{url('new/service',['payment_integration'])}}">
	<div class="l-navigation-item-arrow"></div>
	<div class="l-navigation-item-preview">
	    {{--<img src="{{url('/')}}/website_assets/uploads/shutterstock_112330751-150x150.jpg" width="150"--}}
	    {{--height="150" alt="Payment Integration">--}}
	</div>
	<div class="l-navigation-item-title">
	    <span>Payment Integration</span>
	</div>
    </a>
    <a class="l-navigation-item to_prev" href="{{url('new/service',['enterprise_software'])}}">
	<div class="l-navigation-item-arrow"></div>
	<div class="l-navigation-item-preview">
	    {{--<img src="{{url('/')}}/website_assets/uploads/logo/port-6-150x150.jpg" width="150" height="150"--}}
	    {{--alt="Enterprise Software">--}}
	</div>
	<div class="l-navigation-item-title">
	    <span>Enterprise Software</span>
	</div>
    </a>
</div>
</div>
@include('new_website/social_footer')
@stop
