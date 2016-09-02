<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
      <?php
    if (isset($_GET['pg'])) {
	$title_tag = ucwords(str_ireplace('_', ' ', $_GET['pg']));
	$title = 'Inets - ' . $title_tag;
    } else {
	$title = 'INETS Company Limited – Official Home Page';
    }
    ?>
    <title><?=$title?></title>
    <meta name="Title" content="<?=$title?>" />
    <!--<meta name="CorrelationVector" content="MlxRoJqpv0OEKCvu.7" />-->
    <meta name='description' content='We are Software Development Company that offers online services and focus on enterprise software solutions, Payment System Design & Integration, Mobile applications and Linux Server Configuration' />
    <meta name="keywords" content="Inets, Inets Company Limited, Software Development Company, Africa Enterprise Software companies , Mobile applications development, Payment System Design and Integration, Africa software development company, Tanzania software development company, Software company in Tanzania,karibuSMS, Hotleo,School Management software (shulesoft), File Tracking software, Stock manager software">
    <link rel="shortcut icon" href="<?= HOME ?>media/img/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#1ac6ff">
    <meta property="og:locale" content="en_TZ">
    <meta property="og:site_name" content="Inets Company Limited">
    <meta property="og:title" content="Inets Company Limited ">
    <meta property="og:url" content="<?= HOME ?>">
    <meta property="og:image" content="<?= HOME ?>media/img/logo.png">
    <meta property="og:description" content="We are Software Development Company that offers online services and focus on enterprise software solutions, Payment System Design & Integration, Mobile applications and Linux Server Configuration">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@inetstz">
    <meta name="twitter:title" content="Inets Company Limited">
    <meta name="twitter:description" content="Software Development Company.">
    <meta name="twitter:image:src" content="<?= HOME ?>media/img/logo.png">
    <meta name="twitter:domain" content="<?= HOME ?>">


    <!-- Favicon && Apple touch -->
    <link rel="shortcut icon" href="<?= HOME ?>media/img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="media/img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="media/img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="media/img/apple_icons_114x114.png">
 
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="media/css/materialize.css">
    <link rel="stylesheet" href="media/css/bootstrap.min.css">
    <link rel="stylesheet" href="media/css/font-awesome.min.css">
    <link rel="stylesheet" href="media/css/font-lineicons.css">
    <link rel="stylesheet" href="media/css/animate.css">
    <link rel="stylesheet" href="media/css/toastr.min.css">
    <link rel="stylesheet" href="media/css/style.css">
    <link rel="stylesheet" href="media/css/custom.css">
    <?php
//    css_media('bootstrap.min');
//    css_media('font-awesome.min');
//    css_media('font-lineicons');
//    css_media('animate');
//    css_media('toastr.min');
//    css_media('style');
//    
    ?>
    <!--[if lt IE 9]>
        <script src="media/js/html5.js"></script>
        <script src="media/js/respond.min.js"></script>
    <![endif]-->
    <script>
//        document.ontouchstart = function(e) {
//            e.preventDefault();
//        }//disables touch commands to prevent scrolling whilst loading. Touch is enabled at end of this page.
        var url = "<?= $AJAX ?>";
        var home = "<?= HOME ?>";
        var LOADER = '<?= $LOADER ?>';
    </script>
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
<link rel="shortcut icon" href="<?= HOME ?>media/ico/favicon.html"/> 
<?php } ?>
</head>
