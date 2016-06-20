<!-- BEGIN FOOTER BUBBLE
    ================================================== -->

<!-- BEGIN SUB-FOOTER
================================================== -->
<div class="sub-footer">
    <div class="container">
	<div class="row-fluid">
	    <div class="span3">
		<h5 class="heading">ABOUT US</h5>
		<div class="textwidget">
		    <p>Having found with ambition and motives of passion and excellence in software development <br><br></p>
		    <p>Ground Floor<br> COSTECH building<br>Dar es salaam Tanzania<br>+255 714 825 469<br></p>
		</div>
	    </div>
	    <div class="span3 scrollbar" style="max-height: 240px; overflow: scroll; overflow-x: hidden;">
		<a class="twitter-timeline" href="https://twitter.com/Inetstz" data-widget-id="509818389234081792">Tweets by @Inetstz</a>
		<script>!function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
			if (!d.getElementById(id)) {
			    js = d.createElement(s);
			    js.id = id;
			    js.src = p + "://platform.twitter.com/widgets.js";
			    fjs.parentNode.insertBefore(js, fjs);
			}
		    }(document, "script", "twitter-wjs");</script>


	    </div>
	    <div class="span3">
		<h5 class="heading">LATEST POSTS</h5>	
		<ul>
<?php
$posts = blog::find_where("title !='' ", 'AND', 4);
foreach ($posts as $post) {
    ?>
    		    <li>
    			<a href="<?=HOME?>public"><?=$post->title?></a>
    		    </li>
<?php } ?>
		</ul>
	    </div>
	    <div class="span3">
		<div class="textwidget"><div class="wpcf7" id="wpcf7-f268-w1-o1">
			<form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
			    <div style="display: none;">
				<input type="hidden" name="_wpcf7" value="268">
				<input type="hidden" name="_wpcf7_version" value="3.5.4">
				<input type="hidden" name="_wpcf7_locale" value="en_US">
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f268-w1-o1">
				<input type="hidden" name="_wpnonce" value="e25410d0fa">
			    </div>
			    <p><span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="Your Name"></span><br>
				<span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" placeholder="Your Email"></span><br>
				<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="50" rows="3" class="wpcf7-form-control wpcf7-textarea" placeholder="Message"></textarea></span><br>
				<input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit"><img class="ajax-loader" src="media/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;"></p>
			    <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div>
	    </div>

	</div>
    </div>	
</div>

<!-- BEGIN FOOTER
================================================== -->
<div class="footer">
    <div class="container">
	<div class="row-fluid">
	    <div class="span7">
		<p> © 2014 Inets Company Limited </p>
	    </div>

	    <div class="span5">

		<ul class="social-icons">
		    <a rel="alternate" target="_blank" href="https://www.twitter.com/inetstz" data-original-title="Share on Twitter"><i class="icomoon-twitter"></i></a>
		    <a rel="alternate" target="_blank" href="https://www.facebook.com/inets#" data-original-title="Share on Facebook"><i class="icomoon-facebook"></i></a>
		    <a rel="alternate" target="_blank" href="https://plus.google.com/115817418998123742140#" data-original-title="Share on Google+"><i class="icomoon-google-plus"></i></a>
		    <a rel="alternate" target="_blank" href="https://www.linkedin.com/company/inets" data-original-title="Linked in!"><i class="icomoon-yelp"></i></a>
		</ul>

	    </div>
	</div>
    </div>
    <a href="#navigation" rel="alternate" class="gototop up" data-original-title="Back to top" style="display: none;">
	<img src="media/images/icon_up.png" alt=""></a>
</div> 	
<script>

<script type="text/javascript">
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl": "http:\/\/preview.themique.com\/ventus\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif", "sending": "Sending ..."};
    /* ]]> */
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var tmq_script_vars = {"nicescroll": "normal", "nav_choose_text": "GO TO...", "small_header": "on"};
    /* ]]> */
</script>