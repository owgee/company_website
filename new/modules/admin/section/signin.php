<?php $root=$root.'frontend/'; ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrapguru.com/preview/archon/frontend/signin.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 16 Jan 2014 21:23:10 GMT -->
<head>
	<meta charset="utf-8">
	<title>Admin sign in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading Bootstrap -->
	<link href="<?=$root?>bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="<?=$root?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">


	<!-- Loading Flat UI -->
	<link href="<?=$root?>css/archon.min.css" rel="stylesheet">
	<link href="<?=$root?>css/theme.css" rel="stylesheet">
	<link href="<?=$root?>css/signin.css" rel="stylesheet">
	<link href="<?=$root?>css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=$root?>layerslider/css/layerslider.css" type="text/css">
	<link rel="stylesheet" href="<?=$root?>css/flexslider.css" type="text/css">

	<link rel="shortcut icon" href="<?=$root?>images/favicon.ico">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Main content -->
	<div class="container">
		<div class="row">
			<div class="box-holder span6 offset3">
				<!-- Title -->
				<h1>inets</h1><hr>
				<!-- Login Form -->
				<form action="<?=HOME?>admin">
					<div class="input-prepend">
						<span class="add-on">@</span>
						<input class="span3" id="prependedInput" type="text" placeholder="Email">
					</div>																			<div class="input-prepend">
						<span class="add-on">@</span>
						<input class="span3" id="prependedInput" type="text" placeholder="Password">
					</div>
					<ul class="inline"><li>
						<label class="checkbox " for="checkbox1">
							<input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
							Remember me
						</label>
					</li></ul>
					<input type="submit" class="btn btn-primary btn-wide" value="Sign in"/>
				</form><!-- /Login form -->
				<!-- Social login -->
		
				<hr>
				<!-- Create and forget links -->
				<ul class="inline">
					<li>&nbsp;&nbsp;</li>
					<li><a href="forgot.html">Forgot password?</a></li>
				</ul><!-- /Create and forget links -->
			</div>
		</div>
	</div><!-- Main content -->


	<!-- Load JS here for greater good =============================-->
	<script src="js/jquery-1.8.3.min.js"></script>

	<!-- jQuery with jQuery Easing, and jQuery Transit JS -->
	<script src="<?=$root?>layerslider/jQuery/jquery-easing-1.3.js" type="text/javascript"></script>
	<script src="<?=$root?>layerslider/jQuery/jquery-transit-modified.js" type="text/javascript"></script>

	<!-- LayerSlider from Kreatura Media with Transitions -->
	<script src="<?=$root?>layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="<?=$root?>layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script src="<?=$root?>js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="<?=$root?>js/jquery.ui.touch-punch.min.js"></script>
	<script src="<?=$root?>js/bootstrap.min.js"></script>
	<script src="<?=$root?>js/bootstrap-select.js"></script>
	<script src="<?=$root?>js/bootstrap-switch.js"></script>
	<script src="<?=$root?>js/flatui-checkbox.js"></script>
	<script src="<?=$root?>js/flatui-radio.js"></script>
	<script src="<?=$root?>js/jquery.tagsinput.js"></script>
	<script src="<?=$root?>js/jquery.placeholder.js"></script>
	<script src="<?=$root?>js/jquery.stacktable.js"></script>
	<script src="<?=$root?>js/archon.js"></script>
	<script src="<?=$root?>js/jquery.flexslider.js"></script>
</body>

<!-- Mirrored from bootstrapguru.com/preview/archon/frontend/signin.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 16 Jan 2014 21:23:11 GMT -->
</html>
