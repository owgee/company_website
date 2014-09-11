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
		    <h6><?=$testimony->job_title.', '.$testimony->company?></h6>
    		    <p><i>““<?= $testimony->content ?>””</i></p>
    		</div>
    		<div class="content-bubble-triangle"></div>
    	    </div>
	    <?php } ?>
	</div>

    </div> 
</div> 