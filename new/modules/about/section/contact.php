
<div class="content-bubble drop-shadow curved">
    <div class="wpcf7" id="wpcf7-f1346-t1-o1">
	<form action="<?= $AJAX ?>" method="post" class="wpcf7-form" novalidate="novalidate">
	    <div class="contact-alerts"></div>
	    <p><label>Your Name</label>
		<span class="wpcf7-form-control-wrap your-name">
		    <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true"></span><br>
		<label>Your Email</label>
		<span class="wpcf7-form-control-wrap your-email">
		    <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true"></span><br>
		<label>Your Message</label>
		<span class="wpcf7-form-control-wrap your-message">
		    <textarea name="your-message" cols="50" rows="3" class="wpcf7-form-control wpcf7-textarea"></textarea></span><br>
		<button type="submit" id="submit" class="btn btn-prime btn-full">SEND</button></p>
	    <div class="wpcf7-response-output wpcf7-display-none"></div>
	</form>

    </div>	    					
</div>