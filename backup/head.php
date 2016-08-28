<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="description" content="Innovation Software and Network Company Limited">
    <meta name="keywords" content="Inets Company Limited, Software Development Company, Enterprise Software solutions, Mobile applications development">
    <link rel="shortcut icon" href="media/img/favicon.ico">
     <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
    
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name='description' content='We are Software Development Company based on enterprise software solutions, mobile applications and telecommunication projects' />
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#1ac6ff">
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
    <link rel="shortcut icon" href="media/img/favicon.ico" type="image/x-icon">
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
    if (isset($_GET['pg'])) {
        $title_tag = ucwords(str_ireplace('_', ' ', $_GET['pg']));
        $title = 'Inets - ' . $title_tag;
    } else {
        $title = TITLE;
    }
    ?>
    <title><?= $title ?></title>


    <!--[if lt IE 9]>
        <script src="media/js/html5.js"></script>
        <script src="media/js/respond.min.js"></script>
    <![endif]-->
</head>
