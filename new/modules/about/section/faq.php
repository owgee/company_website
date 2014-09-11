<div class="container ">
    <div class="row-fluid">
	<div class="span3">
	    <div class="row-fluid">
		<section id="nav_menu-3" class="widget-side span12 widget_nav_menu">
		    <div class="menu-side-menu-container">
			<ul id="menu-side-menu" class="menu nav nav-list">
			    <li id="menu-item-1838"
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1838 first">
				<a href="<?=HOME?>about&tab=faq&category=company">Company</a></li>
			    <li id="menu-item-1837" 
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1837">
				<a href="<?=HOME?>about&tab=faq&category=service">Services</a></li>
			    <li id="menu-item-1836" 
				class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1836">
				<a href="<?=HOME?>about&tab=faq&category=product">Products</a></li>
			    <li id="menu-item-1832"
				class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-180 current_page_item menu-item-1832 active">
				<a href="<?=HOME?>about&tab=faq&category=investment">Investment</a></li>			  
			</ul></div>
		</section>
	    </div>					
	</div>
	<div class="span9">
	    <div class="row-fluid"><div class="span12">
		    <div class="textcenter">
			<span class="content-heading">FAQ</span>
			<div class="content-heading-stripes"></div>
		    </div>
		</div></div>
	    <div class="row-fluid"><div class="span7">
		    <div class="accordion" id="slug-tvadk">
			<?php
			$category = isset($_GET['category']) ? $_GET['category'] : 'company';
			$faqs = faq::find_where(array('category' => $category));
			foreach ($faqs as $faq) {
			    ?>
    			<div class="accordion-group">
    			    <div class="accordion-heading">
    				<a class="accordion-toggle" data-toggle="collapse"
				   data-parent="#slug-tvadk" href="#faq<?=$faq->id?>">
    				    <i class="icon icon-chevron-down"></i>#1 <?=$faq->question?>
    				</a>
    			    </div>
    			    <div id="faq<?=$faq->id?>" class="accordion-body collapse" style="height: 0px;">
    				<div class="accordion-inner">
    				 <?=$faq->answer?>
    				</div>
    			    </div>
    			</div>
			<?php } ?>			    
		    </div>

		</div>
		<div class="span5">
		    <div class="content-bubble drop-shadow curved text-left">
			<p></p>
			<h3><i>DO YOU STILL NEED MORE&nbsp;<strong>HELP?</strong></i></h3>
			<p><a href="<?= HOME ?>about&tab=contact" target="_self" class="btn btn-prime btn-small">CONTACT US</a></p>
			<p>
			</p></div><div class="content-bubble-triangle"></div></div></div>
	</div>

    </div>
</div>