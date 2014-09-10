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

			    <li id="menu-item-1838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1838 first"><a href="#"><?= strtoupper($project->name) ?></a></li>
<?php } ?>
			</ul></div></section></div>						</div>
	<div class="span9">
	    <div class="wpb_row vc_row-fluid">
		<div class="vc_span12 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="textcenter">
				    <span class="content-heading">WHAT WE DO</span>
				    <div class="content-heading-stripes"></div>
				</div>


			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="content-bubble drop-shadow curved text-left">
				    <br>
				    &lt;h6&gt;&lt;strong&gt;WE DO MORE THAN JUST DESIGN&lt;/strong&gt;&lt;/h6&gt;<br>
				    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<p></p>
				    <p>
				    </p></div><div class="content-bubble-triangle"></div>

			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div><div class="wpb_row vc_row-fluid">
		<div class="vc_span4 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">
				<div class="">
				    <div class="features drop-shadow features-active">
					<div class="features-circle">
					    <i class="icomoon-mobile"></i>
					</div>
					<h4>WE <strong>DESIGN</strong></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet…</p>
					<br>
					<div class="features-read-more">
					    <a class="btn btn-small btn-prime" href="#" target="_self">READ MORE</a>
					</div>
					<div class="features-triangle"></div>
				    </div>
				</div>

			    </div> 
			</div> 
		    </div> 
		</div> 

		<div class="vc_span4 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">
				<div class="">
				    <div class="features drop-shadow">
					<div class="features-circle">
					    <i class="icomoon-screen"></i>
					</div>
					<h4>WE <strong>DEVELOP</strong></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet…</p>
					<br>
					<div class="features-read-more">
					    <a class="btn btn-small btn-prime" href="#" target="_self">READ MORE</a>
					</div>
					<div class="features-triangle"></div>
				    </div>
				</div>

			    </div> 
			</div> 
		    </div> 
		</div> 

		<div class="vc_span4 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">
				<div class="">
				    <div class="features drop-shadow">
					<div class="features-circle">
					    <i class="icomoon-laptop"></i>
					</div>
					<h4>WE <strong>CONSULT</strong></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet…</p>
					<br>
					<div class="features-read-more">
					    <a class="btn btn-small btn-prime" href="#" target="_self">READ MORE</a>
					</div>
					<div class="features-triangle"></div>
				    </div>
				</div>

			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div><div class="wpb_row vc_row-fluid">
		<div class="vc_span12 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">
				<div class="clearfix" style="height: 10px"></div>

			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div>
	</div>

    </div>
</div>