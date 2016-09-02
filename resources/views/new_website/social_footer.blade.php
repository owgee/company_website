<?php
/**
 * Description of social_footer
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
<section class="l-section wpb_row height_medium color_default"><hr/>
    <div class="l-section-h i-cf">
	<div class="g-cols wpb_row offset_medium vc_inner ">
	    <div class="in_vc_col-sm-6 wpb_column vc_column_container">
		<div class="vc_column-inner">
		    <div id="modal-trg-txt-wrap-8042" class="ult-modal-input-wrapper ult-adjust-bottom-margin  ">
			<div class="w-socials-item facebook">
			    <a class="w-socials-item-link" target="_blank" href="#">
				<span class="w-socials-item-link-hover"></span>
			    </a>
			    <div class="w-socials-item-popup">
				<span>Facebook</span>
			    </div>
			</div>
			<div class="w-socials-item twitter">
			    <a class="w-socials-item-link" target="_blank" href="#">
				<span class="w-socials-item-link-hover"></span>
			    </a>
			    <div class="w-socials-item-popup">
				<span>Twitter</span>
			    </div>
			</div>
			<div class="w-socials-item google">
			    <a class="w-socials-item-link" target="_blank" href="#">
				<span class="w-socials-item-link-hover"></span>
			    </a>
			    <div class="w-socials-item-popup">
				<span>Google+</span>
			    </div>
			</div> 
		    </div>
		</div></div>
	    <div class="vc_col-sm-3 wpb_column vc_column_container">
		<div class="vc_column-inner">
		    <div id="modal-trg-txt-wrap-5363" class="ult-modal-input-wrapper ult-adjust-bottom-margin  ">Share this Page</div>
		</div>

	    </div>
	    <div class="vc_col-sm-3 wpb_column vc_column_container">
		<div class="vc_column-inner">
		    <div id="modal-trg-txt-wrap-8334" class="ult-modal-input-wrapper ult-adjust-bottom-margin  ">

			<div
			    class="fb-like"
			    data-share="true"
			    data-width="50"
			    data-show-faces="true">
			</div>

		    </div>


		    <div id="modal-trg-txt-wrap-8334" class="ult-modal-input-wrapper ult-adjust-bottom-margin  ">
			<a  id="twitter_button" title="twitter" href="https://twitter.com/inets" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @inets</a>
			<a class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)"
			   data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
		    </div>
		    <!-- Place this tag in your head or just before your close body tag. -->
		    <script src="https://apis.google.com/js/platform.js" async defer></script>
		    <link rel="canonical" href="<?=$url?>" />
		    <!-- Place this tag where you want the +1 button to render. -->
		    <div class="g-plusone" data-annotation="inline" data-width="300"></div>
		    <a class="w-sharing-item gplus" title="Share this" href="javascript:void(0)" 
		       data-sharing-url="<?=$url?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
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

<!--<div class="w-sharing type_fixed align_right color_default" style="margin-top: -149px;">
    <a class="w-sharing-item email" title="Email this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item facebook" title="Share this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item twitter" title="Tweet this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    
    <a class="w-sharing-item gplus" title="Share this" href="javascript:void(0)" data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
    <a class="w-sharing-item linkedin" title="Share this" href="javascript:void(0)" 
       data-sharing-url="<?= $url ?>" data-sharing-image=""><span class="w-sharing-icon"></span></a>
   
</div>-->