<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" content="Innovation Software and Network Company Limited">
    <meta name="keywords" content="Inets, Inets Company Limited, Software Development Company, Africa Enterprise Software solutions ,Africa Mobile applications development, Africa software company, Tanzania software company">
    <link rel="shortcut icon" href="media/img/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name='description' content='We are Software Development Company based on enterprise software solutions, mobile applications and telecommunication projects' />
    <meta property="og:type" content="website">
    <meta name="keyword" content="Software Company, Innovation Software and Network, karibuSMS, Unnett, Hotleo, RN metering, Online Video & Audio Streaming, Mobile Application Development, Work with DTBi under COSTECH "/>
    <meta property="og:locale" content="en_TZ">
    <meta property="og:site_name" content="Inets Company Limited - Software  & Telecom Services">
    <meta property="og:title" content="Inets Company Limited ">
    <meta property="og:url" content="<?= HOME ?>">
    <meta property="og:image" content="<?= HOME ?>media/images/logo.png">
    <meta property="og:description" content="We are Software Development Company based on enterprise software solutions, mobile applications and telecommunication projects">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@inetstz">
    <meta name="twitter:title" content="Innovation Software and Network Company Limited">
    <meta name="twitter:description" content="Software Development Company.">
    <meta name="twitter:image:src" content="<?= HOME ?>media/img/logo.png">
    <meta name="twitter:domain" content="<?= HOME ?>">


    <!-- Favicon && Apple touch -->
    <link rel="shortcut icon" href="media/img/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="media/img/apple_icons_57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="media/img/apple_icons_72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="media/img/apple_icons_114x114.png">
    <?php
    if (isset($_GET['pg'])) {
	$title_tag = ucwords(str_ireplace('_', ' ', $_GET['pg']));
	$title = 'Inets - ' . $title_tag;
    } else {
	$title = TITLE;
    }
    ?>
    <title><?= $title ?></title>
    <?php
    css_media('bootstrap.min');
    css_media('font-awesome.min');
    css_media('font-lineicons');
    css_media('animate');
    css_media('toastr.min');
    css_media('style');
    
    ?>
    <!--[if lt IE 9]>
        <script src="media/js/html5.js"></script>
        <script src="media/js/respond.min.js"></script>
    <![endif]-->
    <script>
	var url = "<?= $AJAX ?>";
    </script>
    <script src="http://localhost:3000/socket.io/socket.io.js"></script>
</head>
