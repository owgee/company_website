<?php
/**
 * Description of social-footer
 *
 *  -----------------------------------------------------
 *  Copyright: INETS COMPANY LIMITED
 *  Website: www.inetstz.com
 *  Email: info@inetstz.com
 *  -----------------------------------------------------
 * @author Ephraim Swilla
 */
?>
<?php $url = 'www.inetstz.com' . $_SERVER['REQUEST_URI'] ?>
<section class="l-section wpb_row height_medium color_custom">
    <hr/><br/><br/>
    <div class="l-section-h i-cf">
	<div class="g-cols offset_medium">
	    <div class="in_col-sm-4 wpb_column in_column_container animate_afc">
		<div class="in_column-inner">
		    <div class="size_medium color_custom">
			<div class="w-counter-h">
			    <div class="w-counter-number">
				<div
				    class="fb-like "
				    data-share="true"
				    data-width="50"
				    data-show-faces="true">
				</div>
			    </div>
			    <h6 class="w-counter-title">Facebook Fans</h6>
			</div>
		    </div>
		</div>
	    </div>
	    <div class="in_col-sm-4 wpb_column in_column_container animate_afc d1">
		<div class="in_column-inner">
		    <div class="size_medium color_secondary">
			<div class="w-counter-h">
			    <div class="w-counter-number">
				<a class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)"
				   data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
				<a id="twitter_button" title="twitter"  data-height="20" href="https://twitter.com/inetstz"
				   class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @inetstz</a>
			    </div>
			    <h6 class="w-counter-title">Twitter Fans</h6>
			</div>
		    </div>
		</div>
	    </div>
	    <div class="in_col-sm-4 wpb_column in_column_container animate_afc d2">
		<div class="in_column-inner">
		    <div class="size_medium color_primary">
			<div class="w-counter-h">
			    <div class="w-counter-number">
				<a class="w-sharing-item gplus" title="Share this on Google +" href="javascript:void(0)"
				   data-sharing-url="<?= $url ?>" data-sharing-image="">
				    <span class="w-sharing-icon"></span>
				</a>

				<link rel="canonical" href="<?= $url ?>"/>
				<!--Place this tag where you want the +1 button to render.--> 
				<div class="g-plusone" data-annotation="inline" data-width="300"></div>
			    </div>
			    <h6 class="w-counter-title">Google + Fans</h6>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</section>
<script>
    document.getElementById('shareBtn').onclick = function () {
	FB.ui({
	    method: 'share',
	    display: 'popup',
	    href: '<?= $url ?>',
	}, function (response) {
	});
    }
</script>
<script>

    window.fbAsyncInit = function () {
	FB.init({
	    appId: '299111130448732',
	    xfbml: true,
	    version: 'v2.7'
	});
    };

    (function (d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) {
	    return;
	}
	js = d.createElement(s);
	js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js";
	fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<script>!function (d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (!d.getElementById(id)) {
	    js = d.createElement(s);
	    js.id = id;
	    js.src = "//platform.twitter.com/widgets.js";
	    fjs.parentNode.insertBefore(js, fjs);
	}
    }(document, "script", "twitter-wjs");</script>

<script src="https://apis.google.com/js/platform.js" async defer></script>
<!--<div class="w-sharing type_fixed align_right color_default" style="margin-top: -149px;">
    <a class="w-sharing-item email" title="Email this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item facebook" title="Share this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    
    <a class="w-sharing-item gplus" title="Share this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item linkedin" title="Share this" href="javascript:void(0)" 
       data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
   
</div>-->