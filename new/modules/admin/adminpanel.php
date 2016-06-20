<?php
$root=HOME.'modules/adminpanel/';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Inets | Admin panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Loading Bootstrap -->
        <link href="<?=$root?>bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Loading Stylesheets -->    
        <link href="<?=$root?>css/archon.css" rel="stylesheet">
        <link href="<?=$root?>css/responsive.css" rel="stylesheet">
        <link href="<?=$root?>css/prettify.css" rel="stylesheet">

        <!-- Loading Custom Stylesheets -->    
        <link href="<?=$root?>css/custom.css" rel="stylesheet">

        <link rel="<?=$root?>shortcut icon" href="images/favicon.ico">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="frame">
            <div class="sidebar">
                <div class="wrapper">

                    <!-- Replace the src of the image with your logo -->
                    <a href="index.html" class="logo"><img src="images/logo.png" alt="Archon Admin" /></a>
                    <ul class="nav  nav-list">

                        <!-- sidebar input search box -->
                        <li class="nav-search">
                            <div class="form-group">
                                <input type="text" class="form-control nav-search" placeholder="Search through site" />
                                <span class="input-icon fui-search"></span>
                            </div>
                        </li>

                        <!-- Sidebar header @add class nav-header for sidebar header -->
                        <li class="nav-header">Overview</li>
                        <li class="active"><a href="<?=HOME?>adminpanel"><i class="fa fa-dashboard"></i>Dashboard </a></li>
                     
                        <li><a href="<?=HOME?>adminpanel&section=email"><i class="fa fa-group"></i>Widgets</a></li>
                         <li class=""><a href="index.html"><i class="fa fa-dashboard"></i>Dashboard </a></li>
                     
                        <li><a href="widgets.html"><i class="fa fa-group"></i>Widgets</a></li>



                    </ul>

                </div><!-- /Wrapper -->
            </div><!-- /Sidebar -->

            <!-- Main content starts here-->
            <div class="content">
                <div class="navbar">
                    <a href="#" onclick="return false;" class="btn pull-left toggle-sidebar"><i class="fa fa-list"></i></a>
                    <a class="navbar-brand" href="index.html">Archon</a>

                    <!-- Top right user menu -->
                    <ul class="nav navbar-nav user-menu pull-right">
                        <!-- First nav user item -->
                        <li class="dropdown hidden-xs">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i></a>
                            <ul class="dropdown-menu right inbox">
                                <li class="dropdown-menu-title">
                                    INBOX <span>(25)</span>
                                </li>
                                <li>
                                    <img src="images/theme/avatarTwo.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="username">Anusha</span> 
                                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                                        <span class="time pull-right"> 06:58 PM</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/theme/avatarFive.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="username">Veeru</span> 
                                        <span class="mini-details">(2) <i class="fa fa-paper-clip"></i></span>
                                        <span class="time pull-right"> 09:58 AM</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/theme/avatarSix.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="username">Nag</span> 
                                        <span class="mini-details">(6) <i class="fa fa-paper-clip"></i></span>
                                        <span class="time pull-right">Yesterday</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/theme/avatarSeven.png" alt="" class="avatar">
                                    <div class="message">
                                        <span class="username">Harish</span> 
                                        <span class="mini-details"> <i class="fa fa-picture-o"></i></span>
                                        <span class="time pull-right">14/12/2013</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
                                    </div>
                                </li>
                                <li class="dropdown-menu-footer">
                                    <a href="#">View All Messages</a>
                                </li>
                            </ul>
                        </li><!-- /dropdown -->

                        <!-- Second nav user item -->
                        <li class="dropdown hidden-xs">
                            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i></a>
                            <ul class="dropdown-menu right notifications">
                                <li class="dropdown-menu-title">
                                    Notifications
                                </li>
                                <li>
                                    <i class="fa fa-cog avatar text-success"></i>
                                    <div class="message">
                                        <span class="username text-success">New settings activated</span> 
                                        <span class="time pull-right"> 06:58 PM</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-shopping-cart avatar text-danger"></i>
                                    <div class="message">
                                        <span class="username text-danger">You have 2 returns</span> 
                                        <span class="time pull-right"> 04:29 PM</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user avatar text-success"></i>
                                    <div class="message">
                                        <span class="username text-success">New User registered</span> 
                                        <span class="time pull-right"> Yesterday</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-comment avatar text-info"></i>
                                    <div class="message">
                                        <span class="username text-info">New Comment received</span> 
                                        <span class="time pull-right"> Yesterday</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-cog avatar text-warning"></i>
                                    <div class="message">
                                        <span class="username text-warning">User deleted</span> 
                                        <span class="time pull-right"> 2 days ago</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-dollar avatar"></i>
                                    <div class="message">
                                        <span class="username">Earned 200 points</span> 
                                        <span class="time pull-right">3 days ago</span>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-hdd avatar text-danger"></i>
                                    <div class="message">
                                        <span class="username text-danger">Memory size exceeded </span> 
                                        <span class="time pull-right"> 1 week ago</span>
                                    </div>
                                </li>

                                <li class="dropdown-menu-footer">
                                    <a href="#">View All Notifications</a>
                                </li>
                            </ul>
                        </li><!-- / dropdown -->

                        <li class="dropdown user-name">
                            <a class="dropdown-toggle" data-toggle="dropdown"><img src="images/theme/avatarSeven.png" class="user-avatar" alt="" />Vijay Kumar</a>
                            <ul class="dropdown-menu right inbox user">
                                <li class="user-avatar">
                                    <img src="images/theme/avatarSeven.png" class="user-avatar" alt="" />
                                    Vijay Kumar
                                </li>
                                <li>
                                    <i class="fa fa-user avatar"></i>
                                    <div class="message">
                                        <span class="username"><a href="profile.html">Profile</a></span> 
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-cogs avatar"></i>
                                    <div class="message">
                                        <span class="username">Settings </span> 
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-book avatar"></i>
                                    <div class="message">
                                        <span class="username">Help </span> 
                                    </div>
                                </li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li><!-- / dropdown -->				
                    </ul><!-- / Top right user menu -->

                </div><!-- / Navbar-->

                <div id="main-content">
                    <div class="row">
                        <div class="col-mod-12">
                            <ul class="breadcrumb">
                                <li><a href="index.html">Archon Admin</a></li>
                                <li><a href="#">Home</a></li>
                                <li class="active">Bread Crumb</li>
                            </ul>
                        </div>
                    </div>
                    <h3 class="page-header">Dashboard</h3>
                    <div class="row">
                        <div class="col-mod-12">
                            <div class="alert alert-dismissable alert-success alert-dashboard fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Hellooo!</strong> Its good to see you. Please check all the features.If you feel something is missing you name it, I will add it in next release
                            </div>
                        </div>
                    </div>

                  
<?php
if(isset($_GET['section'])){
    include_once 'modules/adminpanel/section/'.$_GET['section'].'.php';
}else{
    include_once 'modules/adminpanel/section/default.php';
}

?>
                  

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h5 class="modal-title">Panel Settings</h5>
                                    <span class="small">Some sort of settings with a form</span>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label for="inputEmail1" class="col-lg-2 control-label">Label</label>
                                            <div class="col-lg-10">
                                                <input type="email" class="form-control" id="inputEmail1" placeholder="Label">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPassword1" class="col-lg-2 control-label">Second Label</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="inputPassword1" placeholder="Label two">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                </div><!-- /Main Content  @7 -->

            </div><!-- / Content @5 -->

            <div class="row footer">
                <div class="col-md-12 text-center">
                    © 2013 <a href="http://bootstrapguru.com/">Bootstrap Guru</a>
                </div>
            </div>
        </div> <!-- Frame -->


        <!-- Load JS here for greater good =============================-->
        <script src="<?=$root?>js/jquery-1.8.3.min.js"></script>
        <script src="<?=$root?>js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?=$root?>js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?=$root?>js/bootstrap.min.js"></script>
        <script src="<?=$root?>js/bootstrap-select.js"></script>
        <script src="<?=$root?>js/bootstrap-switch.js"></script>
        <script src="<?=$root?>js/jquery.tagsinput.js"></script>
        <script src="<?=$root?>js/jquery.placeholder.js"></script>
        <script src="<?=$root?>js/bootstrap-typeahead.js"></script>
        <script src="<?=$root?>js/application.js"></script>
        <script src="<?=$root?>js/moment.min.js"></script>
        <script src="<?=$root?>js/jquery.dataTables.min.js"></script>
        <script src="<?=$root?>js/jquery.sortable.js"></script>
        <script type="text/javascript" src="<?=$root?>js/jquery.gritter.js"></script>

        <!-- Charts  =============================-->
        <script src="<?=$root?>js/charts/jquery.flot.js"></script>
        <script src="<?=$root?>js/charts/jquery.flot.resize.js"></script>
        <script src="<?=$root?>js/charts/jquery.flot.stack.js"></script>
        <script src="<?=$root?>js/charts/jquery.flot.pie.min.js"></script>	
        <script src="<?=$root?>js/charts/jquery.sparkline.min.js"></script>	
        <script src="<?=$root?>js/jquery.knob.js"></script>


        <!-- NVD3 graphs  =============================-->
        <script src="<?=$root?>js/nvd3/lib/d3.v3.js"></script>
        <script src="<?=$root?>js/nvd3/nv.d3.js"></script>
        <script src="<?=$root?>js/nvd3/src/models/legend.js"></script>
        <script src="<?=$root?>js/nvd3/src/models/pie.js"></script>
        <script src="<?=$root?>js/nvd3/src/models/pieChart.js"></script>
        <script src="<?=$root?>js/nvd3/src/utils.js"></script>
        <script src="<?=$root?>js/nvd3/sample.nvd3.js"></script>

        <!-- Map and icons on map-->
       <script src="<?=$root?>js/map-icons.js"></script>

        <!-- Archon JS =============================-->
        <script src="<?=$root?>js/archon.js"></script>
        <script src="<?=$root?>js/knobs-custom.js"></script>
        <script src="<?=$root?>js/sparkline-custom.js"></script>
        <script src="<?=$root?>js/dashboard-custom.js"></script>
    </body>

    <!-- Mirrored from bootstrapguru.com/preview/archon/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 16 Jan 2014 21:15:05 GMT -->
</html>
