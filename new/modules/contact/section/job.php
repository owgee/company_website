<div class="container ">
    <div class="row-fluid">
	<div class="span3">
	    <div class="row-fluid"><section id="nav_menu-3" class="widget-side span12 widget_nav_menu"><div class="menu-side-menu-container">
			<ul id="menu-side-menu" class="menu nav nav-list">
			    <?php
			    $jobs = job::find_where("deadline >'" . date('Y-m-d') . "'");
			    foreach ($jobs as $job) {
				?>
    			    <li id="menu-item-1838" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1838 first"><a href="<?= HOME ?>contact&tab=job&name=<?= $job->name ?>"><?= $job->name . '(' . $job->vacancy . ')' ?></a></li>
			    <?php } ?>
			</ul>
		    </div></section></div>						</div>
	<div class="span9">
	    <div class="wpb_row vc_row-fluid">
		<div class="vc_span12 wpb_column column_container">
		    <div class="wpb_wrapper">
			<?php $job_info = job::find_by_id(isset($_GET['job_id'])?$_GET['job_id']:1);
			$job = array_shift($job_info);
			?>
			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="textcenter">
				    <span class="content-heading"><?= $job->name ?></span>
				    <div class="content-heading-stripes"></div>
				</div>


			    </div> 
			</div> 
			<div class="wpb_text_column wpb_content_element ">
			    <div class="wpb_wrapper">

				<div class="content-bubble drop-shadow curved text-left">
				    <br>
				    <h5>Description</h5>
				    <p><?= $job->description ?></p>
				    <p>
				    </p></div><div class="content-bubble-triangle"></div>

			    </div> 
			</div>
			<h4>Deadline for application is on : <?=$job->deadline?></h4><br/><br/>
			<div class="wpb_wrapper">

			    <div class="wpb_text_column wpb_content_element  wpb_animate_when_almost_visible wpb_appear wpb_start_animation">
				<div class="wpb_wrapper">
				    <ul class="nav nav-tabs" id="tabs">
					<li class="active">
					    <a href="#slug0" data-toggle="tab">Education required</a>
					</li>
					<li class="">
					    <a href="#slug1" data-toggle="tab">Task to be done</a>
					</li>
					<li class="">
					    <a href="#slug2" data-toggle="tab">How to apply</a>
					</li>
				    </ul> 
				    <div class="tab-content">
					<div class="tab-pane active" id="slug0">
					    <div class="content-bubble">
						<h5 class="text-left heading">Skills</h5><br>
<?= $job->skills ?>
					    </div>
					</div>

					<div class="tab-pane " id="slug1">
					    <div class="content-bubble">
						<h5 class="text-left normal">Task to be done</h5>
						<?php
						$tasks = explode(',', $job->tasks);
						foreach ($tasks as $task) {
						    echo '<li>' . $task . '</li>';
						}
						?>
					    </div>
					</div>

					<div class="tab-pane " id="slug2">
					    <div class="content-bubble">
						<h5 class="text-left normal">How to apply the job</h5>
						Send these information to <a href="mail:info@inetstz.com">info@inetstz.com</a>.
						Your email should have the followings
						<ul>
						    <li>Your curriculum vitae (CV)</li>
						    <li>A document having a request for job letter</li>
						    <li>One page description document showing what will you do to improve the company performance</li>
						</ul>
					    </div>
					</div>
				    </div><div class="content-bubble-triangle"></div>


				</div> 
			    </div> 
			</div>
		    </div> 
		</div> 
	    </div>
	    <div class="wpb_row vc_row-fluid"> </div>
	    <div class="wpb_row vc_row-fluid">
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