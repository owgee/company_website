<div class="container">
    <div class="row-fluid">
	<div class="span12">
	    <div class="breadcrumb-container">
		<ul class="breadcrumb">
		    <li><a href="http://preview.themique.com/ventus/">Home</a></li><span class="divider"> / </span><li><a href="http://preview.themique.com/ventus/portfolios/">Portfolio</a></li><span class="divider"> / </span><li class="active">Portfolio 2-col</li>
		</ul>
	    </div>
	</div>
    </div>
</div>
<!-- FEATURES
================================================== -->
<div class="container ">
    <div class="row-fluid">
	<div class="span12">
	    <div class="row-fluid">
		<div class="span12">
		    <div class="textcenter">
			<span class="content-heading">PORTFOLIO</span>
			<div class="content-heading-stripes"></div>
		    </div>
		</div>

	    </div>
	    <div class="row-fluid">
		<div class="span12">
		    <div class="row-fluid">
			<?php
			$projects = project::find_all();
			$i=1;
			foreach ($projects as $project) {
			    ?>
    			<div class="portfolio_item span6  element">
    			    <div class="content-image">
		<a href="<?=$project->logo?>" class="fancybox"><span class="content-image-overlay">
					<i class="icomoon-search"></i></span>
		    <img src="<?=$project->logo?>" class="attachment-slideshow wp-post-image" alt="<?=$project->name?>"></a>
    			    </div>

    			    <div class="content-bubble drop-shadow curved">
    				<h5 class="heading"><a href="<?= HOME . 'project&section=single&name=' . $project->name ?>"><?=$project->name?></a></h5><p>
    				   <?=$project->description?><a href="<?= HOME . 'project&section=single&name=' . $project->name ?>">[...]</a>
    				</p>							
    			    </div>
    			    <div class="content-bubble-triangle"></div>
    			</div>
			<?php $i++; if($i%2==0){
          echo '</div><div class="row-fluid">';}
			
			} ?>
			
			<div class="row-fluid">
			    <div class="span12 pagination pagination-top text-center"><span class="page-numbers current">1</span>
			    <a class="page-numbers" href="#">2</a>
			    <a class="next page-numbers" href="#">»</a></div>
		    </div>
		</div>
	    </div>
	</div>

    </div>
</div>		    	