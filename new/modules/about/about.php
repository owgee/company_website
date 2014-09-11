<div class="container">
    <div class="row-fluid">
	<div class="span12">
	    <div class="breadcrumb-container">
		<ul class="breadcrumb">
		    <li><a href="#">Home</a></li><span class="divider"> / </span><li class="active">About</li>
		</ul>
	    </div>
	</div>
    </div>
</div>

<!-- FEATURES
================================================== -->
<div class="container ">
    <div class="row-fluid">
	<div class="span3">
	    <div class="row-fluid"><section id="nav_menu-3" class="widget-side span12 widget_nav_menu"><div class="menu-side-menu-container">
			<ul id="menu-side-menu" class="menu nav nav-list">
			    <li id="menu-item-1838" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-174 current_page_item menu-item-1838 active first"><a href="<?= HOME ?>about">ABOUT</a></li>
			    <li id="menu-item-1832" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1832"><a href="<?= HOME ?>about&tab=faq">FAQ</a></li>
			    <li id="menu-item-1831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1831"><a href="<?= HOME ?>about&tab=testimony">TESTIMONIALS</a></li>
			    <li id="menu-item-1833" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1833"><a href="<?= HOME ?>about&tab=contact">CONTACT</a></li>

			</ul>
		    </div>
		</section></div>						
	</div>
	<div class="span9">
	    <div class="wpb_row vc_row-fluid">
		<div class="vc_span12 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="textcenter">
				    <span class="content-heading">ABOUT</span>
				    <div class="content-heading-stripes"></div>
				</div>


			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="content-bubble vertical-divider drop-shadow curved">
				    <div class="row-fluid">
					<?php if (empty($_GET['tab'])) { ?>
    					<div class="span6 promo-box vcenter textcenter" style="margin-top: 78px;">
    					    <div class="about-logo">
    						<img src="media/images/logo-black.png">
    					    </div>
    					</div>

    					<div class="span6">
    					    <h3 class="about-info"><strong>Innovate to Excel</strong><br> 
    						Is our Motto
    					    </h3>

    					</div>
					    <?php
					} else {
					    echo '<h3>' . ucfirst($_GET['tab']) . '</h3>';
					}
					?>
				    </div>
				</div>
				<div class="content-bubble-triangle"></div>


			    </div> 
			</div> 
		    </div> 
		</div> 
	    </div>
	    <div class="wpb_row vc_row-fluid">
		<?php if (empty($_GET['tab'])) { ?>
    		<div class="vc_span4 wpb_column column_container">
    		    <div class="wpb_wrapper">

    			<div class="wpb_text_column wpb_content_element ">
    			    <div class="wpb_wrapper">
    				<h6><strong>OUR VISION</strong></h6>
    				<p>To be a centre for innovation that use technology as a tool to create global solutions to people, organizations and companies.<br><br></p>
    				<p></p>

    			    </div> 
    			</div> 
    		    </div> 
    		</div> 

    		<div class="vc_span4 wpb_column column_container">
    		    <div class="wpb_wrapper">

    			<div class="wpb_text_column wpb_content_element ">
    			    <div class="wpb_wrapper">
    				<h6><strong>OUR MISSION</strong></h6>
    				<p>To provide standards and quality effective software and products that change the way we do things into better and mostly simplified approach to adopt.<br><br></p>
    				<p></p>

    			    </div> 
    			</div> 
    		    </div> 
    		</div> 

    		<div class="vc_span4 wpb_column column_container">
    		    <div class="wpb_wrapper">

    			<div class="wpb_text_column wpb_content_element ">
    			    <div class="wpb_wrapper">
    				<h6><strong>OUR CULTURE</strong></h6>
    				<p>The amazing technology within INETS is such simple, we hire every new member to the team based on our culture aptitude and experience, and we believe if you hire the right people and add a culture of invention at the core of your business brilliant light shall be the results<br><br></p>
    				<p></p>

    			    </div> 
    			</div> 
    		    </div> 
    		</div> 
		<?php
		} else {
		    $file = $_GET['tab'];
		    include_once 'modules/about/section/' . $file . '.php';
		}
		?>
	    </div>
	    <div class="wpb_row vc_row-fluid">
		<div class="vc_span12 wpb_column column_container">
		    <div class="wpb_wrapper">

			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="textcenter">
				    <span class="content-heading">WHAT MAKES UP PROUD</span>
				    <div class="content-heading-stripes"></div>
				</div>


			    </div> 
			</div> 

<?php include_once 'modules/landing/section/clients.php'; ?>		

		    </div> 
		</div> 
	    </div>
	</div>

    </div>
</div>		    	
