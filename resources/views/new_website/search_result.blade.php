<?php
/**
 * Description of search_result
 *
 *  -----------------------------------------------------
 *  Copyright: INETS COMPANY LIMITED
 *  Website: www.inetstz.com
 *  Email: info@inetstz.com
 *  -----------------------------------------------------
 * @author Ephraim Swilla
 */
?>
@section('title', 'Search Results')
@extends('new_website.master')
@section('content')
<div class="l-titlebar imgsize_cover size_medium color_alternate">
    <div class="l-titlebar-h"><div class="l-titlebar-content"><h1 itemprop="headline">Search | </h1> <p>Search results</p></div><div class="g-breadcrumbs" xmlns:v=""><span typeof="v:Breadcrumb"><a class="g-breadcrumbs-item" rel="v:url" property="v:title" href="<?= url('/') ?>">Home</a></span> <span class="g-breadcrumbs-separator"></span> <span typeof="v:Breadcrumb"><a class="g-breadcrumbs-item" rel="v:url" property="v:title" href="<?= url('/search') ?>">search</a></span></div></div></div>
<div class="l-main-h i-cf">
    <main class="l-content" itemprop="mainContentOfPage">
	<section class="l-section wpb_row height_medium">
	    <div class="l-section-h i-cf">
		<div class="g-cols offset_medium">
		    <div class="in_col-sm-8 wpb_column in_column_container">
			<div class="in_column-inner">
			    <div class="w-image  animate_afb">
				<h2>Search Results</h2>
			    </div>
			    <h6><?= count($content) ?> Results founded, click a link to view results</h6>
			    <div>
				<ul>
				    <?php foreach ($content as $value) { ?>
    				    <div class="w-blog-post-body">
    					<h2 class="w-blog-post-title">
    					    <a class="entry-title" rel="bookmark" href="<?= $value[0] ?>#<?= $value[1] ?>">Inets - <?= $value[1] ?></a>
    					</h2>
    					<div class="w-blog-post-meta">

    					    <p><a href="<?= $value[0] ?>#<?= $value[1] ?>" rel="category tag"><?= $value[0] ?></a></p>

    					</div>
    				    </div> 
    				    <hr/>
					<?php
				    }
				    ?>
				</ul>
			    </div>

			</div>
		    </div>
		    <div class="in_col-sm-4 wpb_column in_column_container">
			<div class="in_column-inner">
			    <div class="wpb_text_column ">
				<div class="wpb_wrapper">
				    <h3>Inets</h3>
				    <p>A software development company</p>

				</div>
			    </div>
			    <div class="w-separator type_invisible size_medium thick_1 style_solid color_border cont_icon">
				<span class="w-separator-h"><i class="fa fa-star"></i></span></div>
			    <div class="w-tabs layout_default accordion title_left icon_chevron iconpos_right ">
				<div class="w-tabs-list items_3">
				    <div class="w-tabs-list-h">
					<div class="w-tabs-item">
					    <div class="w-tabs-item-h"><span
						    class="w-tabs-item-title">Services</span></div>
					</div>
				

				    </div>
				</div>
				<div class="w-tabs-sections">
				    <div class="w-tabs-sections-h">
					<div class="w-tabs-section">
					    <div class="w-tabs-section-header">
						<div class="w-tabs-section-header-h"><h5
							class="w-tabs-section-title">Our Services</h5>
						    <div class="w-tabs-section-control"></div>
						</div>
					    </div>
					    <div class="w-tabs-section-content">
						<div class="w-tabs-section-content-h i-cf">
						    <div class="wpb_text_column ">
							<div class="wpb_wrapper">
							    <p>We are software development company offering these services </p>
							    <ul>
								<li>
								    <p>Enterprise software design and development</p>
								</li>
								<li>
								    <p>Payment design and integrate</p>
								</li>
								<li>
								    <p>Mobile app design and development</p>
								</li>
								<li>
								    <p>Linux administration</p>
								</li>
								<li>
								    <p>Database design</p>
								</li>
							    </ul>
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

    </main>
</div>

</div>

@stop
