@extends('website.master')
@section('title', 'Inets Company - Home page')
@section('content')

<div class="l-main">
    <div class="l-main-h i-cf">
	<main class="l-content" itemprop="mainContentOfPage">
	    <section class="l-section wpb_row height_auto width_full">
		<div class="l-section-h i-cf">
		    <div class="g-cols offset_medium">
			<div class="in_col-sm-12 wpb_column in_column_container">
			    <div class="in_column-inner">
				<div class="wpb_revslider_element wpb_content_element">
				    <link href="http://fonts.googleapis.com/css?family=Libre+Baskerville%3A400italic"
					  rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
				    <link href="http://fonts.googleapis.com/css?family=Roboto%3A700"
					  rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
				    <link href="http://fonts.googleapis.com/css?family=Libre+Baskerville%3Aitalic"
					  rel="stylesheet" property="stylesheet" type="text/css" media="all"/>
				    <div id="rev_slider_2_1_wrapper"
					 class="rev_slider_wrapper fullwidthbanner-container"
					 style="margin:0px auto;background-color:#4e5256;padding:0px;margin-top:0px;margin-bottom:0px;">

					<div id="rev_slider_2_1" class="rev_slider fullwidthabanner"
					     style="display:none;" data-version="5.2.6">
					    <ul>
						<li data-index="rs-7" data-transition="zoomout"
						    data-slotamount="1" data-hideafterloop="0"
						    data-hideslideonmobile="off" data-easein="default"
						    data-easFeout="default" data-masterspeed="500"
						    data-thumb="website_assets/uploads/slider1.jpg"
						    data-rotate="0" data-saveperformance="off"
						    data-title="Intro Slide" data-param1="" data-param2=""
						    data-param3="" data-param4="" data-param5="" data-param6=""
						    data-param7="" data-param8="" data-param9="" data-param10=""
						    data-description="">

						    <img src="website_assets/uploads/slider1.jpg"
							 alt="" title="Girl with phone" width="1920"
							 height="1280" data-bgposition="center center"
							 data-bgfit="cover" data-bgrepeat="no-repeat"
							 data-bgparallax="1" class="rev-slidebg" data-no-retina>


						    <div class="tp-caption zephyr-bg   tp-resizeme"
							 id="slide-7-layer-1" data-x="center" data-hoffset=""
							 data-y="center" data-voffset="" data-width="['auto']"
							 data-height="['auto']" data-transform_idle="o:1;"
							 data-transform_in="opacity:0;s:800;e:Linear.easeNone;"
							 data-transform_out="auto:auto;s:300;" data-start="300"
							 data-splitin="none" data-splitout="none"
							 data-responsive_offset="on"
							 style="z-index: 5; white-space: nowrap; color: rgba(255, 255, 255, 1.00);text-transform:left;background-color:rgba(10, 10, 10, 0.30);border-color:rgba(0, 0, 0, 1.00);"></div>

						    <div class="tp-caption zephyr-01   tp-resizeme"
							 id="slide-7-layer-2" data-x="center" data-hoffset=""
							 data-y="center" data-voffset="" data-width="['auto']"
							 data-height="['auto']" data-transform_idle="o:1;"
							 data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:5;sY:5;skX:0;skY:0;opacity:0;s:500;e:Power3.easeInOut;"
							 data-transform_out="opacity:0;s:500;" data-start="700"
							 data-splitin="chars" data-splitout="none"
							 data-responsive_offset="on" data-elementdelay="0.06"
							 style="z-index: 6; white-space: nowrap; color: rgba(255, 255, 255, 1.00);text-transform:left;border-color:rgba(0, 0, 0, 1.00);">
							accept all payments electronically

						    </div> <div class="tp-caption black  " id="slide-5-layer-3"
								data-x="center" data-hoffset="0" data-y="300"
								data-width="auto" data-height="auto"
								data-transform_idle=""
								data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;"
								data-transform_out="auto:auto;s:300;" data-start="2700"
								data-splitin="none" data-splitout="none"
								data-responsive_offset="on" data-captionhidden="on"
								style="z-index: 7; white-space: nowrap;text-transform:left;">
							<div class="w-btn-wrapper align_left"><a
								class="w-btn style_raised color_white icon_atleft"
								href="<?= url('/service/payment-integration') ?>"><i
								    class="fa fa-arrow-down"></i><span
								    class="w-btn-label">Start Now</span></a>
							</div>
						    </div>

						</li>

						<li data-index="rs-5" data-transition="parallaxvertical"
						    data-slotamount="7" data-hideafterloop="0"
						    data-hideslideonmobile="off" data-easein="default"
						    data-easeout="default" data-masterspeed="500"
						    data-thumb="website_assets/img/system.jpg"
						    data-rotate="0" data-saveperformance="off"
						    data-title="Ken Burns Slide" data-param1="" data-param2=""
						    data-param3="" data-param4="" data-param5="" data-param6=""
						    data-param7="" data-param8="" data-param9="" data-param10=""
						    data-description="">

						    <img src="website_assets/img/system.jpg"
							 alt="" title="Sunset" width="1920" height="1190"
							 data-bgposition="left center" data-kenburns="on"
							 data-duration="12000" data-ease="Linear.ease"
							 data-scalestart="120" data-scaleend="99"
							 data-rotatestart="4" data-rotateend="0"
							 data-offsetstart="0 0" data-offsetend="8 0"
							 data-bgparallax="1" class="rev-slidebg" data-no-retina>


						    <div class="tp-caption zephyr-03   tp-resizeme"
							 id="slide-5-layer-1" data-x="center" data-hoffset="0"
							 data-y="178" data-width="auto" data-height="auto"
							 data-transform_idle=""
							 data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;"
							 data-transform_out="opacity:0;s:300;" data-start="1000"
							 data-splitin="chars" data-splitout="none"
							 data-responsive_offset="on" data-elementdelay="0.14"
							 style="z-index: 5; white-space: nowrap;text-transform:left;border-color:rgba(0, 0, 0, 1.00);">
							Enterprise Software Solutions
						    </div>

						    <div class="tp-caption zephyr-04   tp-resizeme"
							 id="slide-5-layer-2" data-x="center" data-hoffset="0"
							 data-y="150" data-width="auto" data-height="auto"
							 data-transform_idle=""
							 data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;"
							 data-transform_out="auto:auto;s:300;" data-start="2200"
							 data-splitin="none" data-splitout="none"
							 data-responsive_offset="on"
							 style="z-index: 6; white-space: nowrap;text-transform:left;font-style:italic;border-color:rgba(255, 255, 255, 1.00);">
							Improve your business with our custom software solutions
						    </div>

						    <div class="tp-caption black  " id="slide-5-layer-3"
							 data-x="center" data-hoffset="0" data-y="300"
							 data-width="auto" data-height="auto"
							 data-transform_idle=""
							 data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;"
							 data-transform_out="auto:auto;s:300;" data-start="2700"
							 data-splitin="none" data-splitout="none"
							 data-responsive_offset="on" data-captionhidden="on"
							 style="z-index: 7; white-space: nowrap;text-transform:left;">
							<div class="w-btn-wrapper align_left"><a
								class="w-btn style_raised color_white icon_atleft"
								href="<?= url('/service/enterprise-software') ?>"><i
								    class="fa fa-arrow-down"></i><span
								    class="w-btn-label">Learn More</span></a>
							</div>
						    </div>
						</li>

						<li data-index="rs-8"
						    data-transition="parallaxtoright,parallaxtoleft,parallaxtotop,parallaxtobottom,parallaxhorizontal,parallaxvertical,zoomout,zoomin"
						    data-slotamount="7,7,7,7,7,7,7,7" data-hideafterloop="0"
						    data-hideslideonmobile="off"
						    data-easein="default,default,default,default,default,default,default,default"
						    data-easeout="default,default,default,default,default,default,default,default"
						    data-masterspeed="500,500,500,500,500,500,500,500"
						    data-thumb="website_assets/uploads/picjumbo.com_HNCK0082-100x50.jpg"
						    data-rotate="0,0,0,0,0,0,0,0" data-saveperformance="off"
						    data-title="Other Slide" data-param1="" data-param2=""
						    data-param3="" data-param4="" data-param5="" data-param6=""
						    data-param7="" data-param8="" data-param9="" data-param10=""
						    data-description="">

						    <img src="website_assets/uploads/mobile-app.jpg"
							 alt="Mobile Application Design" title="Phone" width="1920" height="1280"
							 data-bgposition="center center" data-bgfit="cover"
							 data-bgrepeat="no-repeat" data-bgparallax="1"
							 class="rev-slidebg" data-no-retina>


						    <div class="tp-caption zephyr-05   tp-resizeme"
							 id="slide-8-layer-1" data-x="center" data-hoffset=""
							 data-y="center" data-voffset="-5" data-width="['auto']"
							 data-height="['auto']" data-transform_idle="o:1;"
							 data-transform_in="x:50px;opacity:0;s:500;e:Power4.easeInOut;"
							 data-transform_out="auto:auto;s:300;" data-start="800"
							 data-splitin="chars" data-splitout="none"
							 data-responsive_offset="on" data-elementdelay="0.05"
							 style="z-index: 5; white-space: nowrap;text-transform:left;border-color:rgba(0, 0, 0, 1.00);">
							Drive More Customers with Mobile app <br>for your Business

						    </div>
						    <div class="tp-caption black  " id="slide-5-layer-3"
							 data-x="center" data-hoffset="0" data-y="300"
							 data-width="auto" data-height="auto"
							 data-transform_idle=""
							 data-transform_in="x:0;y:0;z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;s:1000;e:Power4.easeOut;"
							 data-transform_out="auto:auto;s:300;" data-start="2700"
							 data-splitin="none" data-splitout="none"
							 data-responsive_offset="on" data-captionhidden="on"
							 style="z-index: 7; white-space: nowrap;text-transform:left;">
							<div class="w-btn-wrapper align_left">   <a
								class="w-btn style_raised color_white icon_atleft"
								href="<?= url('/service/mobile-apps') ?>"><i
								    class="fa fa-arrow-down"></i><span
								    class="w-btn-label">Learn how</span></a>
							</div>
						    </div>
						</li>

					    </ul>
					    <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
						var htmlDivCss = "";
						if (htmlDiv) {
						    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
						} else {
						    var htmlDiv = document.createElement("div");
						    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
						    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
						}
					    </script>
					    <div class="tp-bannertimer tp-bottom"
						 style="visibility: hidden !important;"></div>
					</div>
					<script>
					    var htmlDivCss = ' #rev_slider_2_1_wrapper .tp-loader.spinner2{ background-color: #fff !important; } ';
					    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					    if (htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					    }
					    else {
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					    }
					</script>
					<script>
					    var htmlDivCss = unescape(".custom.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3A%23000%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%7D%0A.custom.tparrows%3Ahover%20%7B%0A%09background%3A%23000%3B%0A%7D%0A.custom.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%09font-size%3A15px%3B%0A%09color%3A%23fff%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A.custom.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce824%22%3B%0A%7D%0A.custom.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce825%22%3B%0A%7D%0A%0A%0A");
					    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					    if (htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					    }
					    else {
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					    }
					</script>
				    </div>
				</div>
				<div class="w-tabs layout_default icon_chevron iconpos_right ">
				    <div class="w-tabs-list items_3">
					<div class="w-tabs-list-h">
					    <div class="w-tabs-item with_icon"><a href="#1415175941-1-11"
											 class="w-tabs-item-h"><i
							class="mdfi_action_settings"></i><span
							class="w-tabs-item-title">Who we are</span></a>
					    </div>
					    <div class="w-tabs-item active with_icon"><a href="#1415175941-2-63"
										  class="w-tabs-item-h"><i
							class="mdfi_hardware_laptop_mac"></i><span
							class="w-tabs-item-title">What we do</span></a>
					    </div>
					    <div class="w-tabs-item with_icon"><a href="#1415176356537-2-7"
										  class="w-tabs-item-h"><i
							class="mdfi_communication_ring_volume"></i><span
							class="w-tabs-item-title">Our Work</span></a>
					    </div>
					</div>
				    </div>
				    <div class="w-tabs-sections">
					<div class="w-tabs-sections-h">
					    <div class="w-tabs-section with_icon no_indents active"
						 id="1415175941-1-11"><a href="#1415175941-1-11"
								    class="w-tabs-section-header">
						    <div class="w-tabs-section-header-h"><i
							    class="mdfi_action_settings"></i><h5
							    class="w-tabs-section-title">Who we are</h5>
							<div class="w-tabs-section-control"></div>
						    </div>
						</a>
						<div class="w-tabs-section-content">
						    <div class="w-tabs-section-content-h i-cf">
							<div class="vc_empty_space" style="height: 13px"><span
								class="vc_empty_space_inner"></span></div>
							<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
							    <span class="w-separator-h"></span></div>
							<div class="wpb_text_column ">
							    <div class="wpb_wrapper">
								<h2 style="text-align: center">WHO WE ARE</h2>
								<h5 style="text-align: center"><span
									class="highlight highlight_faded">We are Software Development company founded under strong beliefs and focus<br>
									to solve our local problems and bring solutions to boost efficiency in government, private institutions and in communities.</span>
								</h5>
							    </div>
							</div>
							<div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
							    <span class="w-separator-h"></span></div>
							<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
							    <span class="w-separator-h"></span></div>
							<div class="w-image  align_center"><img width="715"
												height="510"
												src="website_assets/uploads/inets-logo.png"
												class="attachment-large size-large"
												alt="INETS Company Logo, Tanzania, Dar es Salaam"
												sizes="(max-width: 715px) 100vw, 715px"/>
							</div>
						    </div>
						</div>
					    </div>
					    <div class="w-tabs-section with_icon" id="1415175941-2-63"><a
						    href="#1415175941-2-63" class="w-tabs-section-header">
						    <div class="w-tabs-section-header-h"><i
							    class="mdfi_hardware_laptop_mac"></i><h5
							    class="w-tabs-section-title">What we do</h5>
							<div class="w-tabs-section-control"></div>
						    </div>
						</a>
						<div class="w-tabs-section-content">
						    <div class="w-tabs-section-content-h i-cf">
							<div class="wpb_text_column ">
							    <div class="wpb_wrapper">
								<h2 style="text-align: center">WHAT WE DO</h2>
							    </div>
							</div>
							<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
							    <span class="w-separator-h"></span></div>
							<div class="g-cols wpb_row offset_medium vc_inner ">
							    <div class="in_col-sm-4 wpb_column in_column_container">
								<div class="in_column-inner">
								    <div class="w-iconbox iconpos_left size_medium style_circle color_light">
									<div class="w-iconbox-icon"><i
										class="fa fa-money"></i>
									</div>
									<h4 class="w-iconbox-title"><a href="<?=url('/service/payment-integration')?>">Electronic Payment Integration</a></h4>
									<div class="w-iconbox-text">Start now to accept electronic payments in your organization. We enable your customers to pay  via credit/debit cards, mobile money and banking services.
									</div>
								    </div>
								    <div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
									<span class="w-separator-h"></span>
								    </div>
								    <div class="w-iconbox iconpos_left size_medium style_circle color_light">
									<div class="w-iconbox-icon"><i
										class="fa fa-cog"></i></div>
									<h4 class="w-iconbox-title"><a href="<?=url('/service/enterprise-software')?>">Custom Web Systems Development</a></h4>
									<div class="w-iconbox-text">If you need a custom software system , INETS engineers  design and develop a custom software as per your requirements. If you need any software system, <a href="<?=url('/contact-us')?>">click here</a>, to view some of our systems, <a href="<?=url('/products')?>">click here</a>									</div>
								    </div>
								</div>
							    </div>
							    <div class="in_col-sm-4 wpb_column in_column_container">
								<div class="in_column-inner">
								    <div class="w-iconbox iconpos_left size_medium style_circle color_light">
									<div class="w-iconbox-icon"><i
										class="fa fa-mobile-phone"></i></div>
									<h4 class="w-iconbox-title"><a href="<?=url('/service/mobile-apps')?>">Mobile Applications Development</a></h4>
									<div class="w-iconbox-text">INETS helps organizations and individuals to design and develop custom mobile applications that runs on   <a href="https://www.android.com" title="Android Mobile Phones" target="_blank">Android</a>, <a href="http://www.apple.com/iphone/" title="I-phone Mobile" target="_blank">i-phone</a> and <a href="https://www.microsoftstore.com/store/msusa/en_US/cat/All-Windows-Phone/categoryID.69406200" title="Windows Mobile Phones" target="_blank">Windows</a> mobile phones to suite their needs.
									</div>
								    </div>
								    <div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
									<span class="w-separator-h"></span>
								    </div>
								    <div class="w-iconbox iconpos_left size_medium style_circle color_light">
									<div class="w-iconbox-icon"><i
										class="fa fa-globe"></i>
									</div>
									<h4 class="w-iconbox-title"><a href="http://hosting.inetstz.com" target="_blank">Website Hosting Services</a></h4>
									<div class="w-iconbox-text">We are highly reliable and flexible, offering different packages from <a href="http://hosting.inetstz.com/free-web-hosting.html" target="_blank">FREE</a> Hosting, <a href="http://hosting.inetstz.com/shared-hosting.html" target="_blank">Personal</a> hosting, <a href="http://hosting.inetstz.com/shared-hosting.html" target="_blank">Business</a> class hosting, to <a href="http://hosting.inetstz.com/vps-hosting.html" target="_blank">Virtual Private hosting</a> (VPS) etc. If you need to host your website or system, then INETS hosting platform is your place
									</div>
								    </div>
								</div>
							    </div>
							    <div class="in_col-sm-4 wpb_column in_column_container">
								<div class="in_column-inner">
								    <div class="w-iconbox iconpos_left size_medium style_circle color_light">
									<div class="w-iconbox-icon"><i
										class="fa fa-server"></i>
									</div>
									<h4 class="w-iconbox-title"><a href="<?=url('/service/linux-administration')?>">Web Server Configuration</a></h4>
									<div class="w-iconbox-text">If you need to host a system or website in your own premises, we offer support in design your infrastructure, installation of required software and configure all software required necessary to host your system.
									</div>
								    </div>
								    <div class="w-separator type_invisible size_small thick_1 style_solid color_border cont_none">
									<span class="w-separator-h"></span>
								    </div>
								    <div class="w-iconbox iconpos_left size_medium style_circle color_light">
									<div class="w-iconbox-icon"><i
										class="fa fa-database"></i>
									</div>
									<h4 class="w-iconbox-title"><a href="<?=url('/service/database-design')?>">Database Design</a></h4>
									<div class="w-iconbox-text">We provide support to organizations in design advanced database features and architectures and install & configure database to make organization software system to work much faster and effective.
									</div>
								    </div>
								</div>
							    </div>
							</div>
							<div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
							    <span class="w-separator-h"></span></div>
							{{--<div class="w-btn-wrapper align_center"><a--}}
							{{--class="w-btn style_raised color_contrast icon_atleft"--}}
							{{--href="#more"><i--}}
							{{--class="mdfi_navigation_arrow_forward"></i><span--}}
							{{--class="w-btn-label">More</span></a>--}}
							{{--</div>--}}
						    </div>
						</div>
					    </div>
					    <div class="w-tabs-section with_icon" id="1415176356537-2-7"><a
						    href="#1415176356537-2-7" class="w-tabs-section-header">
						    <div class="w-tabs-section-header-h"><i
							    class="mdfi_communication_ring_volume"></i><h5
							    class="w-tabs-section-title">Our Work</h5>
							<div class="w-tabs-section-control"></div>
						    </div>
						</a>
						<div class="w-tabs-section-content">
						    <div class="w-tabs-section-content-h i-cf">
							<div class="wpb_text_column ">
							    <div class="wpb_wrapper">
								<h2 style="text-align: center">OUR WORK</h2>
							    </div>
							</div>
							<div class="l-main">
							    <div class="l-main-h i-cf">
								<main class="l-content"
								      itemprop="mainContentOfPage">
								    <section
									class="l-section  height_auto width_full">
									<div class="l-section-h i-cf">
									    <div class="g-cols offset_medium">
										<div class="in_col-sm-12 layout_default in_column_container link_media animate_revealgrid w-gallery style_simple">
										    <div class="in_column-inner">
											<div class="w-blog layout_tiles cols_3 with_categories"
											     itemscope="itemscope"
											     itemtype="https://schema.org/Blog">

											    <div class="w-blog-list w-gallery-list">
												<article
												    class="w-blog-post web-design post-68 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-web-design tag-design tag-music tag-photography-2 tag-video tag-wordpress-2"
												    data-id="68"
												    data-categories="web-design">
												    <div class="w-blog-post-h">
													<a  class="w-gallery-item order_1 animate_reveal"
													    href="website_assets/uploads/pspf-web.jpg"
													    title="PSPF Web System">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/pspf-web.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="PSPF Web"

														     sizes="(max-width: 600px) 100vw, 600px"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">PSPF Web System</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    February
														    10,
														    2016
														</time>
														<span class="w-blog-post-meta-category"><a href="https://pspf-tz.org" rel="category tag" target="_blank">Web System</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a href="#" class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														    PSPF Web system to manage staff members, website, android application and all PSPF members.</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post social-marketing post-72 post type-post status-publish format-standard has-post-thumbnail hentry category-social-marketing tag-design tag-image tag-photography-2 tag-social tag-wordpress-2"
												    data-id="72"
												    data-categories="social-marketing">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_2 animate_reveal"
													   href="website_assets/uploads/pspf-mobile.jpg"
													   title="PSPF Web System">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/pspf-mobile.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="PSPF Pamoja Nawe, Android Application"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">PSPF Pamoja Nawe</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    February
														    10,
														    2016
														</time>
														<span class="w-blog-post-meta-category"><a href="https://play.google.com/store/apps/details?id=com.pspftz.pspftz" rel="category tag" target="_blank">Mobile App</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														    Android application</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post wordpress post-1497 post type-post status-publish format-video has-post-thumbnail hentry category-wordpress tag-post-format tag-video tag-wordpress-2 post_format-post-format-video"
												    data-id="1497"
												    data-categories="wordpress">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_3 animate_reveal"
													   href="website_assets/uploads/port-6-600x400.jpg"
													   title="BRELA - OBRS">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/port-6-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="BRELA"
														     sizes="(max-width: 600px) 100vw, 600px"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">BRELA - Online Registration</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    September
														    11,
														    2015
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="https://ors.brela.go.tz"  rel="category tag" target="_blank">Web System</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														    Business Registrations and Licensing Agency&#8230;</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post coding post-87 post type-post status-publish format-standard has-post-thumbnail hentry category-coding tag-business tag-coding-2 tag-design tag-music tag-social"
												    data-id="87"
												    data-categories="coding">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_4 animate_reveal"
													   href="website_assets/uploads/bonag-600x400.jpg"
													   title="Bonag Hotel">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/bonag-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="Bonag Hotel"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">Bonag Hotel</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    January
														    ,
														    2015
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="http://bonaghotel.com"
                                                                                                                        rel="category tag" target="_blank">Website</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														    Bonag Hotel website&#8230;</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post has-post-thumbnail web-design wordpress post-1504 post type-post
												    status-publish format-gallery hentry category-web-design category-wordpress tag-gallery
												    tag-image tag-post-format tag-wordpress-2 post_format-post-format-gallery"
												    data-id="1504"
												    data-categories="web-design,wordpress">

												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_5 animate_reveal"
													   href="website_assets/uploads/br-600x400.jpg"
													   title="PSPF Web System">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/br-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2"
														     alt="BR Solutions"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">BR Solutions</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    August
														    ,
														    2014
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="#"
                                                                                                                        rel="category tag">Payment Integration</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post photography social-marketing post-82 post type-post status-publish format-standard has-post-thumbnail hentry category-photography category-social-marketing tag-design tag-photography-2 tag-video"
												    data-id="82"
												    data-categories="photography,social-marketing">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_6 animate_reveal"
													   href="website_assets/uploads/mafge-600x400.jpg"
													   title="MAFGE Website">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/mafge-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="Island"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="http://mafge.org">MAFGE</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    October
														    28,
														    2015
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="#"
                                                                                                                        rel="category tag">Web Design</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														    Male Advocacy for Gender equality&#8230;</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post photography post-286 post type-post status-publish format-standard has-post-thumbnail hentry category-photography tag-business tag-coding-2 tag-design tag-photography-2 tag-wordpress-2"
												    data-id="286"
												    data-categories="photography">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_7 animate_reveal"
													   href="website_assets/uploads/vet-feeds-600x400.jpg"
													   title="Vet Feeds">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/vet-feeds-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="Vet Feeds"
														     sizes="(max-width: 600px) 100vw, 600px"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="http://vet.inetstz.com">Vet Feeds</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    August
														    ,
														    2016
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="#"
                                                                                                                        rel="category tag">Web Design</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														    Vet animal feeds&#8230;</p>
													    </div>
													</div>
												    </div>
												</article>

												<article
												    class="w-blog-post social-marketing post-1495 post type-post status-publish format-standard has-post-thumbnail hentry category-social-marketing tag-blockquote tag-post-format tag-wordpress-2"
												    data-id="1495"
												    data-categories="social-marketing">
												    <div class="w-blog-post-h"> <a class="w-gallery-item order_8 animate_reveal" href="website_assets/uploads/stay-tz-600x400.jpg" title="PSPF Web System">  <div class="w-blog-post-preview"><img width="600"
														     height="400"
														     src="website_assets/uploads/stay-tz-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="StayTz"
														     sizes="(max-width: 600px) 100vw, 600px"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">StayTz</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    July
														    ,
														    2015
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="https://play.google.com/store/apps/details?id=com.inetstz.staytz"
                                                                                                                        rel="category tag" target="_blank">Mobile App</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>Hotels,Guest houses and Lodges in Tanzania.</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post web-design post-85 post type-post status-publish format-standard has-post-thumbnail hentry category-web-design tag-design tag-wordpress-2"
												    data-id="85"
												    data-categories="web-design">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_9 animate_reveal"
													   href="website_assets/uploads/karibuSMS-600x400.jpg"
													   title="KaribuSMS">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/karibuSMS-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="KaribuSMS"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">KaribuSMS</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    February
														    ,
														    2014
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="http://karibusms.com"
                                                                                                                        rel="category tag" target="_blank">Web System</a>,<a
                                                                                                                        href="https://play.google.com/store/apps/details?id=com.inets.karibusms"
                                                                                                                        rel="category tag" target="_blank">Mobile App</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														Bulk SMS service.
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post coding wordpress post-80 post type-post status-publish format-standard has-post-thumbnail hentry category-coding category-wordpress"
												    data-id="80"
												    data-categories="Web System">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_10 animate_reveal"
													   href="website_assets/uploads/shulesoft-600x400.jpg"
													   title="ShuleSoft System">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/shulesoft-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="ShuleSoft"
														     sizes="(max-width: 600px) 100vw, 600px"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">ShuleSoft</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    June
														    1,
														    2016
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="http://shulesoft.com"
                                                                                                                        rel="category tag" target="_blank">Web System</a>, <a
                                                                                                                        href="#"
                                                                                                                        rel="category tag">Education</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">ShuleSoft</a></span>
													    </div>
													    <div class="w-blog-post-content">
														School Management System
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post photography post-78 post type-post status-publish format-standard has-post-thumbnail hentry category-photography tag-image tag-post-format tag-wordpress-2"
												    data-id="78"
												    data-categories="Web System">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_11 animate_reveal"
													   href="website_assets/uploads/file-tracking-600x400.jpg"
													   title="File Tracking System">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/file-tracking-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="File Tracking"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">File Tracking </a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    April
														    ,
														    2015
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="#"
                                                                                                                        rel="category tag">Web System</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														    Track files in your organisation&#8230;</p>
													    </div>
													</div>
												    </div>
												</article>
												<article
												    class="w-blog-post wordpress post-75 post type-post status-publish format-standard has-post-thumbnail hentry category-wordpress tag-branding tag-business tag-design tag-image tag-wordpress-2"
												    data-id="75"
												    data-categories="Web System">
												    <div class="w-blog-post-h">
													<a class="w-gallery-item order_12 animate_reveal"
													   href="website_assets/uploads/stock-600x400.jpg"
													   title="Stock Management System">
													    <div class="w-blog-post-preview">
														<img width="600"
														     height="400"
														     src="website_assets/uploads/stock-600x400.jpg"
														     class="attachment-tnail-3x2 size-tnail-3x2 wp-post-image"
														     alt="Stock Management"/>
														<span class="w-blog-post-preview-icon"
														      style="padding-bottom: 66.6667%;"></span>
													    </div>
													</a>
													<div class="w-blog-post-body">
													    <h2 class="w-blog-post-title">
														<a class="entry-title"
														   rel="bookmark"
														   href="#">Stock Management</a>
													    </h2>
													    <div class="w-blog-post-meta">
														<time class="w-blog-post-meta-date date updated">
														    June
														    ,
														    2015
														</time>
														<span class="w-blog-post-meta-category"><a
                                                                                                                        href="#"
                                                                                                                        rel="category tag">Web System</a></span><span
														    class="w-blog-post-meta-author vcard author hidden"><a
															href="#"
															class="fn">INETS</a></span>
													    </div>
													    <div class="w-blog-post-content">
														<p>
														</p>
													    </div>
													</div>
												    </div>
												</article>
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
						</div>
					    </div>
					</div>
				    </div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </section>

	    <section class="l-section wpb_row height_medium color_primary">
		<div class="l-section-h i-cf">
		    <div class="g-cols offset_medium">
			<div class="in_col-sm-12 wpb_column in_column_container animate_afb">
			    <div class="in_column-inner">
				<div class="w-actionbox color_primary controls_right">
				    <div class="w-actionbox-text"><h2>IMAGINE & SEE</h2></div>
				    <div class="w-actionbox-controls"><a
					    class="w-btn color_white style_raised icon_atleft"
					    href="{{url('contact-us')}}"
					    style="font-size: 19px;"><span
						class="w-btn-label">Request for Service</span></a></div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </section>
	    <section class="l-section wpb_row height_medium">
		<div class="l-section-h i-cf">
		    <div class="g-cols offset_medium">
			<div class="in_col-sm-12 wpb_column in_column_container">
			    <div class="in_column-inner">
				<div class="wpb_text_column ">
				    <div class="wpb_wrapper">
					<h2 style="text-align: center"><strong>INETS</strong>’S CORE
					    VALUES</h2>
				    </div>
				</div>
				<div class="w-separator type_short size_large thick_1 style_solid color_border cont_icon">
				    <span class="w-separator-h"><i class="fa fa-chevron-down"></i></span></div>
				<div class="g-cols wpb_row offset_medium vc_inner ">
				    <div class="in_col-sm-4 wpb_column in_column_container animate_wfc">
					<div class="in_column-inner">
					    <div class="w-iconbox iconpos_left size_small style_default color_light">
						<div class="w-iconbox-icon"><i class="fa fa-signing"></i></div>
						<h4 class="w-iconbox-title">Integrity</h4>
						<div class="w-iconbox-text">We are honest, trustworthy and transparent in all we do. We strive to do the right things right to achieve the best products for our customers.
						</div>
					    </div>
					    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
						<span class="w-separator-h"></span></div>
					    <div class="w-iconbox iconpos_left size_small style_default color_light">
						<div class="w-iconbox-icon"><i class="fa fa-heart-o"></i></div>
						<h4 class="w-iconbox-title">Collaboration</h4>
						<div class="w-iconbox-text">We value the unique contributions of employees and partners to the Company. We develop relationships, foster innovative solutions, and strengthen our capacity to accomplish our mission.
						</div>
					    </div>

					</div>
				    </div>
				    <div class="in_col-sm-4 wpb_column in_column_container animate_wfc d1">
					<div class="in_column-inner">
					    <div class="w-iconbox iconpos_left size_small style_default color_light">
						<div class="w-iconbox-icon"><i class="fa fa-thumbs-o-up"></i>
						</div>
						<h4 class="w-iconbox-title"> Accountability</h4>
						<div class="w-iconbox-text">We are effective and efficient managers of the public trust, and hold ourselves and others to appropriate high standards.  </p>
						</div>
					    </div>
					    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
						<span class="w-separator-h"></span></div>
					    <div class="w-iconbox iconpos_left size_small style_default color_light">
						<div class="w-iconbox-icon"><i class="fa fa-globe"></i></div>
						<h4 class="w-iconbox-title">Respect</h4>
						<div class="w-iconbox-text">We uphold a standard of conduct that recognizes and values the contributions of all stakeholder toward company growth. 
						</div>
					    </div>

					</div>
				    </div>
				    <div class="in_col-sm-4 wpb_column in_column_container animate_wfc d2">
					<div class="in_column-inner">
					    <div class="w-iconbox iconpos_left size_small style_default color_light">
						<div class="w-iconbox-icon"><i class="fa fa-building-o"></i></div>
						<h4 class="w-iconbox-title">Creativity</h4>
						<div class="w-iconbox-text">
						    “Behold, I give you a wise and discerning mind,
						    so that none like you has been before you and none like you shall arise after you.” 
						</div>
					    </div>
					    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_none">
						<span class="w-separator-h"></span></div>
					    <div class="w-iconbox iconpos_left size_small style_default color_light">
						<div class="w-iconbox-icon"><i class="fa fa-hand-pointer-o"></i>
						</div>
						<h4 class="w-iconbox-title">Enthusiasm</h4>
						<div class="w-iconbox-text">Being ambitious is what we need any of us to be. We are in love with what we are doing to achieve high quality, with professional engineering standards, and rely on the feature technology.
						    priority.</p>
						</div>
					    </div>
					</div>
				    </div>
				</div>
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
								<div class="w-logos-list" data-items="4" data-autoplay="1" data-timeout="3000"
									 data-nav="0"><a class="w-logos-item style_1 nav_arrows type_carousel cols_5"
													 href="#"><img width="500" height="250"
																   src="website_assets/uploads/logo/brela-logo-500x250.png"
																   class="attachment-medium size-medium"
																   alt="BRELA"/></a>
									<div class="w-logos-item"><img width="500" height="250"
																   src="website_assets/uploads/logo/pspf-logo-500x250.png"
																   class="attachment-medium size-medium"
																   alt="PSPF"/></div>
									<div class="w-logos-item"><img width="500" height="250"
																   src="website_assets/uploads/logo/mafge-logo-500x250.png"
																   class="attachment-medium size-medium"
																   alt="MAFGE"/></div>
									<div class="w-logos-item"><img width="500" height="250"
																   src="website_assets/uploads/logo/karibusms-logo-500x250.png"
																   class="attachment-medium size-medium"
																   alt="KaribuSMS"/></div>
									<div class="w-logos-item"><img width="500" height="250"
																   src="website_assets/uploads/logo/br-logo-500x250.png"
																   class="attachment-medium size-medium"
																   alt="BR Solutions"/></div>
									<div class="w-logos-item"><img width="500" height="250"
																   src="website_assets/uploads/logo/staytz-logo-500x250.png"
																   class="attachment-medium size-medium"
																   alt="StayTz"/></div>
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
  
</body>

</html>
@stop
@section('footer')
<script type='text/javascript'
src='website_assets/themes/framework/js/owl.carousel.min001e.js?ver=2.0.0'></script>
@stop


