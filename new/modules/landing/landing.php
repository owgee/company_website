<!-- FEATURES
   ================================================== -->
<div class="container with-breadcrumb">
    <div class="row-fluid">
	<div class="span12">


	    <div class="wpb_row vc_row-fluid">

		<?php
		$services = service::find_all();
		shuffle($services);
		foreach ($services as $service) {
		    ?>
    		<div class="vc_span3 wpb_column column_container">
    		    <div class="wpb_wrapper">

    			<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right wpb_start_animation">
    			    <div class="wpb_wrapper">
    				<div class="">
    				    <div class="features drop-shadow features-active">
    					<div class="features-circle">
    					    <i class="icomoon-mobile"></i>
    					</div>
    					<h4><?= $service->name ?></h4>
    					<p><?= $service->description ?></p>
    					<br>
    					<div class="features-read-more">
    					    <a class="btn btn-small btn-prime" href="<?= HOME ?>service&section=type&name=<?= $service->name ?>" target="_self">READ MORE</a>
    					</div>
    					<div class="features-triangle"></div>
    				    </div>
    				</div>

    			    </div> 
    			</div> 
    		    </div> 
    		</div> 

		<?php } ?>
	    </div>


	    <div class="wpb_row vc_row-fluid">
		<div class="vc_span12 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">
				<div class="clearfix" style="height: 20px"></div>
				<div class="textcenter">
				    <span class="content-heading">RECENT WORKS</span>
				    <div class="content-heading-stripes"></div>
				</div>

			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_bottom-to-top">


			    <div class="wpb_wrapper">

				<div class="row-fluid">

				    <?php
				    $projects = project::find_all();
				    $i = 0;
				    shuffle($projects);
				    foreach ($projects as $project) {
					?>

    				    <div class="portfolio_item span4  element">
    					<div class="content-image">
    					    <a href="<?= $project->logo ?>" class="fancybox">
    						<span class="content-image-overlay">
    						    <i class="icomoon-search"></i></span>
    						<img src="<?= $project->logo ?>" class="attachment-slideshow wp-post-image" alt="photodune-5441478-climbing-hard-s"></a>
    					</div>

    					<div class="content-bubble drop-shadow curved">
    					    <h5 class="heading"><a href="<?= HOME . 'project&section=type&name=' . $project->name ?>"><?= $project->name ?></a></h5><p>
						    <?= $project->description ?>
    						<a href="<?= HOME . 'project&section=type&name=' . $project->name ?>">[...]</a>
    					    </p>							
    					</div>
    					<div class="content-bubble-triangle"></div>
    				    </div>

					<?php $i++;
					if ($i == 3) break;
				    } ?>

				</div>

			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="textcenter">
				    <span class="content-heading"> WHY MANY CHOOSE OUR SERVICES</span>
				    <div class="content-heading-stripes"></div>
				</div>


			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div><div class="wpb_row vc_row-fluid">
		<div class="vc_span8 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_left-to-right">
			    <div class="wpb_wrapper">
				<div class="tour-tab">
				    <ul class="nav nav-list" id="myTab">
					<li class="active first">
					    <a href="#slug-ZTFT6-0" data-toggle="tab">HOW WE WORKS</a>
					</li>

					<li class="">
					    <a href="#slug-ZTFT6-2" data-toggle="tab">OUR CULTURE</a>
					</li>
					<li class="">
					    <a href="#slug-ZTFT6-4" data-toggle="tab">OUR TEAM</a>
					</li>
				    </ul></div><div class="tour-content mobile-box"> <div class="tab-content">
					<div class="tab-pane active" id="slug-ZTFT6-0">
					    <h4 class="text-left ">How we work</h4>
					    We provide our services in more open way, transparent and highly committed and efficient to meet customer needs and add more values. We provide professional services and open contracts with guarantee that, if we deliver something which do not meet your expectation or needs, we will pay you back.<br><br><br><br><a href="#" target="_self" class="btn btn-prime ">GET STARTED</a>
					</div>


					<div class="tab-pane " id="slug-ZTFT6-2">
					  	    <h4 class="text-left ">Our Culture</h4>
					    We provide our services in more open way, transparent and highly committed and efficient to meet customer needs and add more values. We provide professional services and open contracts with guarantee that, if we deliver something which do not meet your expectation or needs, we will pay you back.<br><br><br><br>
					</div>

					<div class="tab-pane " id="slug-ZTFT6-4">
					   <h4 class="text-left ">Our Team</h4>
					   <?php include_once 'modules/landing/section/team.php';?>
					</div>
				    </div></div>


			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">
				<div class="clearfix" style="height: 40px"></div>

			    </div> 
			</div> 
		    </div> 
		</div> 

		<div class="vc_span4 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_right-to-left">
			    <div class="wpb_wrapper">

				<div class="content-bubble drop-shadow curved text-left">
				    <h3 class="text-left ">inets<br/>We Innovate to Excel</h3>-Our slogan
				</div><div class="content-bubble-triangle"></div>

			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div><div class="wpb_row vc_row-fluid">
		<div class="vc_span8 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="textcenter">
				    <span class="content-heading">TESTIMONIALS</span>
				    <div class="content-heading-stripes"></div>
				</div>


			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_top-to-bottom">
			    <div class="wpb_wrapper">
				<div class="row-fluid">
				    <?php
				    $testimonies = testimony::find_where(array('accepted' => 1), '', 2);
				    shuffle($testimonies);
				    foreach ($testimonies as $testimony) {
					?>
    				    <div class="span6">
    					<div class="content-bubble drop-shadow curved">
    					    <h5 class="heading"><?= $testimony->user_name ?></h5>
    					    <p><i>““<?= $testimony->content ?>””</i></p>
    					</div>
    					<div class="content-bubble-triangle"></div>
    				    </div>
<?php } ?>
				</div>

			    </div> 
			</div> 

<?php include_once 'modules/landing/section/clients.php'; ?>


		    </div> 
		</div> 

		<div class="vc_span4 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear">
			    <div class="wpb_wrapper">
				<ul class="nav nav-tabs" id="tabs">
				    <li class="active">
					<a href="#slug0" data-toggle="tab">Our Vision</a>
				    </li>

				    <li class="">
					<a href="#slug1" data-toggle="tab">Our Mission</a>
				    </li>
				</ul> 
				<div class="tab-content">
				    <div class="tab-pane active" id="slug0">
					<div class="content-bubble">
					    <h5 class="text-left heading">Vision</h5><br><br>
					    To be a centre for innovation that use technology as a tool to create global solutions to people, organizations and companies
					</div>
				    </div>

				    <div class="tab-pane " id="slug1">
					<div class="content-bubble">
					    <h5 class="text-left normal">Mission</h5>
					    To provide standards and quality effective software and products that change the way we do things into better and mostly simplified approach to adopt.
					</div>
				    </div>
				</div><div class="content-bubble-triangle"></div>


			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div>
	</div>

    </div>
</div>