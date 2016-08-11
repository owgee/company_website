
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>INETS</title>
     <script type="application/javascript" src="js/jquery.min.js"></script>
     <script type="application/javascript" src="js/bootstrap.min.js"></script>
      <script src="http://maps.googleapis.com/maps/api/js"></script>

    <!-- Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/socials.css" crossorigin="anonymous">
        <link rel="stylesheet" href="css/services.css" crossorigin="anonymous">
        <link rel="stylesheet" href="Font-Awesome/css/font-awesome.min.css">


    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 100%;
            margin: auto;
        }
    .caret-up {
        width: 0;
        height: 0;
        border-left: 4px solid rgba(0, 0, 0, 0);
        border-right: 4px solid rgba(0, 0, 0, 0);
        border-bottom: 4px solid;

        display: inline-block;
        margin-left: 2px;
        vertical-align: middle;
    }
.dropdown-menu ul li a:hover{
  background-color: #004d40;

}
.service{
    margin: 8px;
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

                  <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICES <b class="caret"></b></a>
                           <ul class="dropdown-menu mydropdown">
                             <li><a href="<?= route('mobile'); ?>">Mobile Apps</a></li>
                             <li><a href="<?= route('software'); ?>">Enterprise Software</a></li>
                             <li><a href="<?= route('clients'); ?>">Database Design</a></li>
                             <li><a href="<?= route('clients'); ?>">Website Design</a></li>
                             <li><a href="<?= route('clients'); ?>">Linux System</a></li>
                             <li><a href="<?= route('payment'); ?>">Payment Integration</a></li>
                           </ul>
                         </li>
                </li>
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
<script>

   $(function(){
    $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");
            });
    });

</script>
