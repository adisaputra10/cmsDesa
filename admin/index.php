<?php 
 session_start();
 require('libs/path.php');
 require('../models/load_class.php');
 require('libs/routers.php');
 if (!isset($_SESSION['login'])) {
 			header('location:'.adm.'login');
 		}
 echo '


<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin CMS Desa</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="'.root.'asset/css/bootstrap.min.css" rel="stylesheet">
	<link href="'.root.'asset/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="'.root.'asset/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="'.root.'asset/css/style-responsive.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext" rel="stylesheet" type="text/css">
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="'.root.'asset/css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="'.root.'asset/css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="'.adm.'"><span>CMS Desa</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> '.$_SESSION['user'].'
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>

								<li><a href="'.adm.'login/logout.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
		
				
			<!-- start: Main Menu -->

			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="'.adm.'"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
						
								
						<li>
							<a class="dropmenu" href="#"><i class="icon-home"></i><span class="hidden-tablet"> Profil Desa</span><span class="label label-important"> 3 </span></a>
							<ul>
								<li><a class="submenu" href="lembaga.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Struktur Lembaga</span></a></li>
								<li><a class="submenu" href="submenu2.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Data Penduduk</span></a></li>
								<li><a class="submenu" href="submenu3.html"><i class="icon-file-alt"></i><span class="hidden-tablet"> Sub Menu 3</span></a></li>
							</ul>	
						</li>
						<li><a href="'.adm.'pengumuman"><i class="icon-inbox"></i><span class="hidden-tablet"> Pengumuman</span></a></li>
						
						
						<li><a href="'.adm.'potensi"><i class="icon-picture"></i><span class="hidden-tablet"> Potensi</span></a></li>
						
						<li><a href="'.adm.'galeri"><i class="icon-picture"></i><span class="hidden-tablet"> Galeri</span></a></li>

						<li><a href="'.adm.'berita"><i class="icon-file"></i><span class="hidden-tablet"> Berita</span></a></li>
						
						<li><a href="'.adm.'dokumen"><i class="icon-file"></i><span class="hidden-tablet"> Dokumen</span></a></li>
						';
						if ($_SESSION['level'] == 'admin')
 						{
 							echo'
 							<li><a href="'.adm.'user"><i class="icon-group"></i><span class="hidden-tablet"> Users</span></a></li>
 							';
 						}
						
						echo'
												
						<li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Dashboard</a></li>
			</ul>

			';

						switch($model)
 						{
 							case'':
 								include 'views/home.php';
 							break;
 							case 'pengumuman':
 								include 'views/pengumuman_vw.php';
 							break;
 							case 'potensi':
 								include 'views/potensi_vw.php';
 							break;
 							case 'user':
 								if($_SESSION['level'] == 'admin')
 								{
 									include 'views/user.php';
 								}
 								else
 								{
 									echo '404' ;
 								}
 							break;
 							case 'berita':
 								include 'views/berita_vw.php';
 							break;
 							case 'galeri':
 								include 'views/galeri_vw.php';
 							break;
 							case 'dokumen':
 								include 'views/dokumen_vw.php';
 							break;
 
 
 						}

			echo'
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="'.root.'asset/js/jquery-1.9.1.min.js"></script>
	<script src="'.root.'asset/js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="'.root.'asset/js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.ui.touch-punch.js"></script>
	
		<script src="'.root.'asset/js/modernizr.js"></script>
	
		<script src="'.root.'asset/js/bootstrap.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.cookie.js"></script>
	
		<script src="'.root.'asset/js/fullcalendar.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.dataTables.min.js"></script>

		<script src="'.root.'asset/js/excanvas.js"></script>
	<script src="'.root.'asset/js/jquery.flot.js"></script>
	<script src="'.root.'asset/js/jquery.flot.pie.js"></script>
	<script src="'.root.'asset/js/jquery.flot.stack.js"></script>
	<script src="'.root.'asset/js/jquery.flot.resize.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.chosen.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.uniform.min.js"></script>
		
		<script src="'.root.'asset/js/jquery.cleditor.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.noty.js"></script>
	
		<script src="'.root.'asset/js/jquery.elfinder.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.raty.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.iphone.toggle.js"></script>
	
		<script src="'.root.'asset/js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.gritter.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.imagesloaded.js"></script>
	
		<script src="'.root.'asset/js/jquery.masonry.min.js"></script>
	
		<script src="'.root.'asset/js/jquery.knob.modified.js"></script>
	
		<script src="'.root.'asset/js/jquery.sparkline.min.js"></script>
	
		<script src="'.root.'asset/js/counter.js"></script>
	
		<script src="'.root.'asset/js/retina.js"></script>

		<script src="'.root.'asset/js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>




'; 
 						
 
 ?> 