<?php
$name = isset($_GET['name']) ? $_GET['name'] : 'karibuSMS';
$project_info = project::find_where(array('name' => $name));
$project = array_shift($project_info);
?>
<!-- PORTFOLIO ITEM
================================================== -->
<div class="container">
    <div class="row-fluid">


	<!-- PAGE HEADING -->
	<div class="span12 textcenter">
	    <span class="content-heading"></span>
	    <div class="content-heading-stripes"></div>
	</div>

    </div>
    <div class="row-fluid">
	<div class="span3">
	    <div class="row-fluid">
		<section id="nav_menu-3" class="widget-side span12 widget_nav_menu">
		    <div class="menu-side-menu-container">
			<ul id="menu-side-menu" class="menu nav nav-list">
			    <li id="menu-item-1838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1838 first"><a href="#">List of projects</a></li>
			    <?php
			    $projects = project::find_all();
			    foreach ($projects as $project_info) {
				?>
    			    <li id="menu-item-1837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1837">
    				<a href="<?= HOME ?>project&section=type&name=<?= $project_info->name ?>"><?= strtoupper($project_info->name) ?></a>
    			    </li>
			    <?php } ?>
			</ul>
		    </div>
		</section></div>									</div>

	<div class="span9">
	    <div class="row-fluid portfolio-item">

		<!-- PORTFOLIO IMAGE -->
		<div class="span12">
		    <div class="row-fluid low-margin">
			<div class="span10">
			    <h1 class="portfolio-heading-h1"><?= $project->name ?></h1>
			</div>
			<div class="span2">
			    <ul class="portfolio-view-nav">

				<li><a href="#"><img src="media/images/icon_arrowleft.png" alt=""></a></li>
				<li><a href="#"><img src="media/images/icon_grid.png" alt=""></a></li>
				<li><a href="#"><img src="media/images/icon_arrowright.png" alt=""></a></li>
			    </ul>
			</div>
		    </div>
		    <div class="content-bubble drop-shadow curved">
			<div class="flexslider portfolio_flexsliders">

			    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-2052px, 0px, 0px);">
				    <?php
				    $project_images = image::find_where(array('project_id' => $project->id));
				    foreach ($project_images as $image) {
					?>
    				    <li class="clone" style="float: left; display: block; width: 684px;">

    					<a href="<?= $image->link ?>" class="fancybox">
    					    <img src="<?= $image->link ?>" alt="" title="<?= $image->caption ?>"></a>
    				    </li><?php } ?>
				</ul>
			    </div>
			    <ul class="flex-direction-nav">
				<li><a class="flex-prev" href="#"></a></li>
				<li><a class="flex-next" href="#"></a></li>
			    </ul>
			</div>								
		    </div>
		    <div class="content-bubble-triangle"></div>
		</div>

	    </div><div class="row-fluid">								
		<!-- PORTFOLIO INFO SIDEBAR -->
		<div class="span12">
		    <div class="row-fluid">
			<div class="span12">
			    <div class="content-bubble drop-shadow curved text-left">
				<h6 class="heading"><strong>OVERVIEW</strong></h6>
				<p><?= $project->description ?></p>
			    </div>
			    <div class="content-bubble-triangle"></div>
			</div>
		    </div>
		    <div class="row-fluid">
			<div class="span8">
			    <div class="content-bubble drop-shadow curved text-left">
				<h6 class="heading"><strong>WHY THIS WAS DONE</strong></h6>
				<p><?= $project->history ?></p>
			    </div>
			    <div class="content-bubble-triangle"></div>
			</div>
			<div class="span4">
			    <div class="content-bubble drop-shadow curved text-left">
				<h6 class="heading"><strong>SKILLS</strong></h6>
				<p><?= $project->skills ?></p>
			    </div>
			    <div class="content-bubble-triangle"></div>
			</div>										
		    </div>
		    <h4>Features available in <?=$project->name?></h4>
		    <p><?=$project->features?></p>
		    <br>																		<div class="row-fluid">
			<?php if ($project->link != '') { ?>
    			<div class="span12">
    			    <a href="<?= $project->link ?>" target="_blank" class="btn btn-padded btn-block">VIEW PROJECT</a>
    			</div>
			<?php } ?>
		    </div>
<div class="row-fluid">
			<?php if ($project->invest ==1) { ?>
    			<div class="span12">
    			    <a href="<?= $project->link ?>" target="_blank" class="btn btn-padded btn-block">Click here to invest on this project</a>
    			</div>
			<?php } ?>
		    </div>
		</div>
	    </div>
	    <!-- Start Related Portfolio Items-->
	    <!-- End Related -->
	</div>
    </div>
    <!-- Sidebar Setting End-->

</div>
