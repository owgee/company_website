<?php
$root=HOME.'modules/admin/';

if(!isset($ses_user)){
    include_once 'modules/admin/section/signin.php';
}else{
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
				<a href="index.html" class="logo"><img src="<?=$root?>images/logo.png" alt="Archon Admin" /></a>
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
					<li><a href="index.html"><i class="fa fa-dashboard"></i>Dashboard </a></li>
					<li>
						<a class="dropdown" href="#"><i class="fa fa-tint"></i> UI Features <span class="label">11</span></a>
						<ul>
							<li><a href="buttons.html"><i class="fa fa-bullhorn"></i> Buttons &amp; Notifications</a></li>
							<li><a href="alerts.html"><i class="fa fa-bell"></i> Alerts</a></li>
							<li><a href="progressbars.html"><i class="fa fa-rub"></i> Progress Bars</a></li>
							<li><a href="labelsbadges.html"><i class="fa fa-bullseye"></i> Labels &amp; Badges </a></li>
							<li><a href="breadcrumbs.html"><i class="fa fa-ellipsis-horizontal"></i>Breadcrumbs</a></li>
							<li><a href="pagination.html"><i class="fa fa-sort-amount-asc"></i> Pagination</a></li>
							<li><a href="sliders.html"><i class="fa fa-minus"></i> Sliders</a></li>
							<li><a href="nestable.html"><i class="fa fa-list"></i> Nestable</a></li>
							<li><a href="utilities.html"><i class="fa fa-tag"></i> Utilities</a></li>
							<li><a href="image-crop.html"><i class="fa fa-crop"></i> Image Crop</a></li>
							<li><a href="file-manager.html"><i class="fa fa-file"></i> File Manager</a></li>
						</ul>	
					</li>
					<li><a href="widgets.html"><i class="fa fa-group"></i>Widgets</a></li>

					<!-- Sidebar header @add class nav-header for sidebar header -->
					<li class="nav-header">Pages</li>
					<li><a href="template.html"><i class="fa fa-list-alt"></i>Template Page</a></li>
					<li><a href="faq.html"><i class="fa fa-pagelines"></i>FAQ</a></li>
					<li><a href="invoice.html"><i class="fa fa-money"></i>Invoice</a></li>
					<li><a href="timeline.html"><i class="fa fa-clock-o"></i>Timeline</a></li>
					<li><a href="calendar.html"><i class="fa fa-calendar"></i>Calendar</a></li>
					<li><a href="gallery.html"><i class="fa fa-picture-o"></i>Gallery</a></li>
					<li><a href="mail.html"><i class="fa fa-envelope"></i>Mail</a></li>
					<li class="frontend"><a href="frontend/index.html"><i class="fa fa-building"></i>Front End<span class="label">14</span></a></li>
					<li class="frontend"><a href="frontend/index-v2.html"><i class="fa fa-building"></i>Front End Single Page</a></li>
					<li> <!-- Example for second level menu -->
						<a class="dropdown" href="#"><i class="fa fa-user"></i> Profile <span class="label">2</span></a>
						<ul>
							<li><a href="profile.html"><i class="fa fa-user"></i> Model One</a></li>
							<li><a href="profileTwo.html"><i class="fa fa-user"></i> Model Two</a></li>
						</ul>	
					</li>
					<li> <!-- Example for Third level menu -->
						<a class="dropdown" href="#"><i class="fa fa-sitemap"></i> 3 Level menu <span class="label">3</span></a>
						<ul>
							<li><a href="#"><i class="fa fa-hdd"></i> Submenu </a></li>
							<li><a href="#"><i class="fa fa-coffee"></i>Submenu </a></li>
							<li>
								<a class="dropdown" href="#"><i class="fa fa-sitemap"></i> One More <span class="label">3</span></a>
								<ul>
									<li><a href="#"><i class="fa fa-hdd"></i> Submenu </a></li>
									<li><a href="#"><i class="fa fa-coffee"></i>Submenu </a></li>
									<li>
										<a class="dropdown" href="#"><i class="fa fa-sitemap"></i> More here <span class="label">3</span></a>
										<ul>
											<li><a href="#"><i class="fa fa-hdd"></i> Submenu </a></li>
											<li><a href="#"><i class="fa fa-coffee"></i>Submenu</a></li>
											<li><a href="#"><i class="fa fa-crop"></i> One More</a></li>
										</ul>	
									</li>
								</ul>	
							</li>
						</ul>	
					</li>


					<!-- Sidebar header @add class nav-header for sidebar header -->
					<li class="nav-header">Components</li>
					<li>
						<a class="dropdown" href="#"><i class="fa fa-table"></i>Tables <span class="label">3</span></a>
						<ul>
							<li><a href="tables.html"><i class="fa fa-table"></i> Basic Tables </a></li>
							<li><a href="dynamic-tables.html"><i class="fa fa-table"></i> Dynamic Tables </a></li>
							<li><a href="editing-tables.html"><i class="fa fa-table"></i> Editable Tables </a></li>
						</ul>
					</li>
					<li><a href="grid.html"><i class="fa fa-th-large"></i>Grid</a></li>
					<li><a href="panels.html"><i class="fa fa-windows"></i>Panels</a></li>
					<li><a href="wells.html"><i class="fa fa-square-o"></i>Wells</a></li>
					<li> <!-- Example for second level menu -->
						<a class="dropdown" href="#"><i class="fa fa-bar-chart-o"></i> Charts <span class="label">4</span></a>
						<ul>
							<li class="active"><a href="morris.html"><i class="fa fa-bar-chart-o"></i> Morris</a></li>
							<li><a href="nvd.html"><i class="fa fa-hdd"></i> NVD</a></li>
							<li><a href="flot.html"><i class="fa fa-bolt"></i>Flot</a></li>
							<li><a href="knobs.html"><i class="fa fa-dot-circle-o"></i>Knobs</a></li>
						</ul>	
					</li>
					<li><a href="typography.html"><i class="fa fa-text-width"></i>Typography</a></li>
					<li>
						<a class="dropdown" href="forms.html"><i class="fa fa-list-alt"></i>Forms  <span class="label">8</span></a>
						<ul>
							<li><a href="form-elements.html"><i class="fa  fa-tasks"></i> Form Elements</a></li>
							<li><a href="forms.html"><i class="fa fa-indent"></i>Forms</a></li>
							<li><a href="inputgroups.html"><i class="fa fa-group"></i> Input Groups</a></li>
							<li><a href="form-editor.html"><i class="fa fa-code"></i>Wysiwyg & Markdown</a></li>
							<li><a href="form-wizard.html"><i class="fa fa-coffee"></i>Form wizard</a></li>
							<li><a href="file-uploads.html"><i class="fa fa-file"></i>Dropzone & File Upload</a></li>
							<li><a href="multiple-file-upload.html"><i class="fa fa-copy"></i>Multiple File Upload</a></li>
							<li><a href="input-masks.html"><i class="fa fa-list-alt"></i>Input Masks</a></li>
						</ul>	
					</li>
					<li><a href="icons.html"><i class="fa fa-truck"></i>Icons</a></li>
				</ul>

			</div><!-- /Wrapper -->
		</div><!-- /Sidebar -->

		<!-- Main content starts here-->
		<div class="content">
			<div class="navbar">
				<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar "><i class="fa fa-list"></i></a>
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
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#">charts</a></li>
							<li><a href="morris.html">Morris</a></li>
							<li class="active">Bread Crumb</li>
						</ul>
					</div>
				</div>
				<h3 class="page-header">Morris Charts</h3>
				<!-- Live Line Chart -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Live Updating chart
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="fa fa-cog"></i></a>
										<a  href="#"  class="panel-close"><strong>X</strong></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<div id="graph"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Donut -->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Donut Basic
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="fa fa-cog"></i></a>
										<a  href="#"  class="panel-close"><strong>X</strong></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<div id="graphDonut"></div>

							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Donut Custom color
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="fa fa-cog"></i></a>
										<a  href="#"  class="panel-close"><strong>X</strong></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<div id="graphDonut2"></div>

							</div>
						</div>
					</div>
				</div>


				<!-- Bar charts -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Bar chart
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="fa fa-cog"></i></a>
										<a  href="#"  class="panel-close"><strong>X</strong></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<div id="barchart" style="height: 250px;"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Basic Line Chart -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-archon">
							<div class="panel-heading">
								<h3 class="panel-title">
									Basic Line Chart
									<span class="pull-right">
										<a  href="#" class="panel-minimize"><i class="fa fa-chevron-up"></i></a>
										<a  href="#"  class="panel-settings"><i class="fa fa-cog"></i></a>
										<a  href="#"  class="panel-close"><strong>X</strong></a>
									</span>
								</h3>
							</div>
							<div class="panel-body">
								<div id="myfirstchart" style="height: 250px;"></div>
							</div>
						</div>
					</div>
				</div>

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
<?php } ?>