<div class="container ">
    <div class="row-fluid">
	<div class="span3">
	    <div class="row-fluid">
		<section id="nav_menu-3" class="widget-side span12 widget_nav_menu">
		    <div class="menu-side-menu-container">
			<ul id="menu-side-menu" class="menu nav nav-list">
			    <?php
			    $projects = project::find_all();
			    foreach ($projects as $project) {
				?>

    			    <li id="menu-item-1838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1838 first">
    				<a href="<?=HOME?>contact&tab=project_investment&name=<?= $project->name ?>"><?= strtoupper($project->name) ?></a>
    			    </li>
			    <?php } ?>
			</ul></div></section></div>						</div>
	<div class="span9">
	    <div class="wpb_row vc_row-fluid">
		<div class="vc_span12 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="textcenter">
				    <span class="content-heading">Project investment</span>
				    <div class="content-heading-stripes"></div>
				</div>


			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">
				<?php
				$name = isset($_GET['name']) ? $_GET['name'] : 'karibuSMS';
				$projects_investment = project::find_where(array('name' => $name));
				$project = array_shift($projects_investment);
				?>
				<div class="content-bubble drop-shadow curved text-left">
				    <br>
				    <h4 class="heading"><?= $project->name ?></h4>
				    <p><?= $project->description ?></p>
				    <p>
				    </p></div><div class="content-bubble-triangle"></div>

				    
				    <div class="content-bubble drop-shadow curved text-left">
				    <br>
				    <h4 class="heading">Why you should invest on <?=$project->name?></h4>
				    <p><?= $project->why_invest ?></p>
				    <p>
				    </p></div><div class="content-bubble-triangle"></div>
				    <div class="span12">
    			    <a href="#" target="_blank" class="btn btn-padded btn-block">Click here to invest on this project</a>
    			</div>
			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div><div class="wpb_row vc_row-fluid">

	    </div>
	</div>

    </div>
</div>