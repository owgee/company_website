<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=0">

    <title>Inets Company Limited</title>
    <script>
        document.ontouchstart = function(e) {
            e.preventDefault();
        }//disables touch commands to prevent scrolling whilst loading. Touch is enabled at end of this page.
        var url = "<?= $AJAX ?>";
        var home = "<?= HOME ?>";
        var LOADER = '<?= $LOADER ?>';
    </script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if(!isset($_GET['pg']) || $_GET['pg'] !='email'){ ?>
<link href="media/css/style.css" rel="stylesheet" media="all" type="text/css"/>

<!--[if IE 7]>
  <link rel="stylesheet" href="media/css/font-awesome-ie7.css"/>
  <![endif]-->

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src=media/js/html5shiv.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="shortcut icon" href="media/ico/favicon.html"/> 
<?php } ?>
</head>
