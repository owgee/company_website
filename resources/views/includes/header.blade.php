
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>INETS</title>




    <script type="application/javascript" src="js/jquery.min.js"></script>
     <script type="application/javascript" src="js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/socials.css" crossorigin="anonymous">
         <link rel="stylesheet" href="css/services.css" crossorigin="anonymous">
         <link rel="stylesheet" href="css/font-awesome.min.css" crossorigin="anonymous">


    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
    </style>

</head>


<nav class="navbar  header navbar-fixed-top" style="background-color: #00b3ff; color:white; height: auto;">
    <div class="container-fluid"  style="background-color:#00b3ee; height: 30px;"></div>
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= route('home'); ?>">INETS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?= route('home'); ?>">HOME</a></li>
                <li><a href="<?= route('about'); ?>">ABOUT</a></li>
                <li><a href="<?= route('clients'); ?>">CLIENTS</a></li>
                <li><a href="<?= route('portfolio'); ?>">PROJECTS</a></li>
                <li><a href="<?= route('portfolio'); ?>">PRODUCTS</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= route('contacts'); ?>">CONTACT US</a></li>
            </ul>
        </div>
    </div>
</nav>
<br>