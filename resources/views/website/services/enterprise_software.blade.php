@extends('website.master')
<?php /**
 * Created by PhpStorm.
 * User: Owden
 * Date: 12/08/2016
 * Time: 12:36 PM
 */ ?>
@section('title', 'Enterprise Software')
@section('content')
<div class="l-titlebar imgsize_cover size_large color_alternate">
    <div class="l-titlebar-h">
	<div class="l-titlebar-content"><h1 itemprop="headline">Enterprise Software Development</h1></div>
	<div class="g-nav">
	    <div class="g-nav-list"><a class="g-nav-item to_next" title="Mobile Applications Design"
				       href="{{url('/service',['mobile_apps'])}}"></a><a
				       class="g-nav-item to_prev" title="Creative Project &#8211; Image"
				       href="{{url('/service',['database_design'])}}"></a></div>
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
										    src="{{url('/')}}/website_assets/uploads/enterprise.png"
										    class="attachment-large size-large"
										    alt="Enterprise Solution"
										    sizes="(max-width: 750px) 100vw, 750px"/>
				</div>
			    </div>
			</div>
			<div class="in_col-sm-4 wpb_column in_column_container">
			    <div class="in_column-inner">
				<div class="wpb_text_column ">
				    <div class="wpb_wrapper">
					<h3>Introduction</h3>
					<p>Enterprise software solutions are software solutions created specifically for corporate organizations and SMEs to solve specific needs</p>
					<p>In INETS we offer custom software solutions that cover all enterprise needs starting from online web applications to offline desktop based applications </p>
					<h4>Our customers</h4>
					<p>INETS provides solutions to a number of organizations including;
					<ul>
					    <li>Government agencies</li>
					    <li>Manufacturing companies</li>
					    <li>Educational Institutions</li>
					    <li>Banks & Financial institutions</li>
					    <li>Hospitals</li>
					    <li>and others</li>

					</ul>
					Our strength is to create custom software starting from requirement capture from the customer, design stage, development, testing up to commission.
				    </div>
				</div>
				<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
				    <span class="w-separator-h"><i class="fa fa-star"></i></span></div>
				<div class="w-tabs layout_default accordion type_togglable title_left icon_plus iconpos_right ">
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
					<h2>Examples of Enterprise solutions we provide</h2>
					<p>These includes </p>
					<ul>
					    <li>Online Registrations Systems</li>
					    <li><a href="<?= url('/product/stock') ?>">Stock/Inventory Management system</a></li>
					    <li><a href="<?= url('/product/shulesoft') ?>">School Management system</a></li>
					    <li><a href="<?= url('/product/file_tracking') ?>">File tracking software system</a></li>
					    <li>Hospital Management system</li>
					    <li>Projects Management System</li>
					    <li>Human resource management system</li>
					    <li>and many others</li>
					</ul>
				    </div>
				</div>

			    </div>
			</div>
			<div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437658268320">

			    <div class="in_column-inner">
				<div class="vc_empty_space  blank-column" style="height: 10px"><span
					class="vc_empty_space_inner"><button class="w-btn-label" href="<?= url('/contact_us') ?>">Contact us now</button> for your request</span>

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
				    <p>Do you need any custom software system for your organization ?<button class="w-btn-label" href="<?= url('/contact_us') ?>"> contact us now</button></p>
				</div>
			    </div>
			</div>
			<div class="in_col-sm-6 wpb_column in_column_container">
			    <div class="in_column-inner">
				<div class="wpb_text_column ">
				    <div class="wpb_wrapper">
					<h2>What  Benefits do customer get from our solutions</h2>
					
					<div class="wpb_wrapper">
					    <p>For any organization that embrace and use our custom solutions they benefits from the followings</p>
					    <ul>
						<li>Our Custom solutions are dedicated to meet that organization needs as per their requirements</li>
						<li>Our custom solutions can be easily upgraded to meet that organization need </li>
						<li>The custom solution embrace all characteristics and features that match with local environment and local solutions. For example, Mobile payments integration, Authorities restrictions etc.</li>
						<li>Custom solutions makes reporting easier and customizable with improved reporting capabilites to enable your company to respond to complex business decisions </li>
					    </ul>  </div>
				
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
					<h2>Why customer trust us</h2>
					<p>
					    Being trusted by reputable organizations is not an easy step, but INETS has a special role inside that create great trust from our customers<br>
					    These includes;</p>
					<ol>
					    <li>Professionalism</li>
					    <li>Great care & customer support</li>
					    <li>Highly integrity</li>
					</ol>
				    </div>
				</div>

			    </div>
			</div>
			<div class="in_col-sm-6 wpb_column in_column_container in_col-has-fill  vc_custom_1437658268320">

			    <div class="in_column-inner">
				<div class="vc_empty_space  blank-column" style="height: 10px"><span
					class="vc_empty_space_inner">View our customer <button class="w-btn-label" href="<?= url('/testimonial') ?>"> testimonials here </button></span>

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
    <a class="l-navigation-item to_next" href="{{url('/service',['mobile_apps'])}}">
	<div class="l-navigation-item-arrow"></div>
	<div class="l-navigation-item-preview">
	    <img src="{{url('/')}}/website_assets/uploads/karibusms.png" width="150"
	    height="150" alt="Mobile Application Development">
	</div>
	<div class="l-navigation-item-title">
	    <span>Mobile Apps Design</span>
	</div>
    </a>
    <a class="l-navigation-item to_prev" href="{{url('/service',['database_design'])}}">
	<div class="l-navigation-item-arrow"></div>
	<div class="l-navigation-item-preview">
	    <img src="{{url('/')}}/website_assets/uploads/database.png" width="150" height="150"
	    alt="Database Management">
	</div>
	<div class="l-navigation-item-title">
	    <span>Database Design</span>
	</div>
    </a>
</div>
@include('website/social_footer')
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
