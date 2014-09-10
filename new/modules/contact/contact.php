

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
			    <li id="menu-item-1838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1838 first"><a href="<?= HOME ?>contact&tab=investor_guide">Investor Guide</a></li>
			    <li id="menu-item-1837" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1837"><a href="<?= HOME ?>contact&tab=project_investment">Project investments</a></li>
			    <li id="menu-item-1832" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1832"><a href="<?= HOME ?>contact&tab=job">Jobs</a></li>

			</ul></div>
		</section></div>									</div>

	<div class="span9">
	    <div class="row-fluid portfolio-item">

		<?php
		$name = isset($_GET['tab']) ? $_GET['tab'] : 'investor_guide';
		?>
	    </div>
	    <?php
	    if ($name == 'job') {
		include_once 'modules/contact/section/job.php';
	    } else if($name=='project_investment') {
		include_once 'modules/contact/section/project_investment.php';
	    }else{
		include_once 'modules/contact/section/invest.php';
	    }
	    ?>
	    <!-- Start Related Portfolio Items-->
	    <!-- End Related -->
	</div>
    </div>
    <!-- Sidebar Setting End-->

</div>
