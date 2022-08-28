<?php session_start(); 
include('db.php');?>

<!DOCTYPE HTML>
<html>
<head>
<title>Patronik Lighting|Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <link rel="shortcut icon" href="image/favicon10.ico"/>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style10.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->


<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="admindashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a>
						</li>
						<li>
							<a href="product.php"><i class="fa fa-globe"></i>Products</a>	
						</li>
						<li>
							<a href="project.php"><i class="fa fa-lightbulb-o"></i>Projects</a>	
						</li>
						
						<li>
							<a href="news.php"><i class="fa fa-newspaper-o"></i>News</a>	
						</li>
						<li>
							<a href="services.php"><i class="fa fa-bell-o"></i>Services</a>	
						</li>
						<li>
							<a href="banners.php"><i class="fa fa-lemon-o"></i>Banners</a>	
						</li>
						<li>
							<a href="gallery.php"><i class="fa fa-clock-o"></i>Gallery</a>	
						</li>
						</ul>	
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
			<img src="image/patronik_logo.jpg" width="90px" height="70px">
			<!--//logo-->
				<div class="profile_details" style="float:right;">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="images/a.png" alt=""> </span> 
									<div class="user-name">
										<p><?php echo $_SESSION['login_user'];?></p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="adminchangepassword.php"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left">
						<i class="fa fa-globe"></i>
							<h5>Products</h5>
							<a href="product.php">More info</a>
						</div>
						<div class="stats-right">
						<?php $y="select count(*) as pid from product";
						$u=mysqli_query($conn,$y);
						$j=mysqli_fetch_assoc($u);
						?>
						
						
							<label>  <?php echo $j['pid']; ?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
						<i class="fa fa-lightbulb-o"></i>
							<h5>Projects</h5>
							<a href="project.php">More info</a>
						</div>
						<div class="stats-right">
						<?php $y="select count(*) as proj_id from project";
						$u=mysqli_query($conn,$y);
						$j=mysqli_fetch_assoc($u);
						?>
						
						
							<label>  <?php echo $j['proj_id']; ?></label>

						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
						<i class="fa fa-newspaper-o"></i>
							<h5>News</h5>
							<a href="news.php">More info</a>
						</div>
						<div class="stats-right">
						<?php $y="select count(*) as n_id from news";
						$u=mysqli_query($conn,$y);
						$j=mysqli_fetch_assoc($u);
						?>
						
						
							<label>  <?php echo $j['n_id']; ?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
					
					<div class="col-md-4 widget states-left">
						<div class="stats-left">
						<i class="fa fa-bell-o"></i>
							<h5>Services</h5>
							<a href="services.php">More info</a>
						</div>
						<div class="stats-right">
						<?php $y="select count(*) as s_id from services";
						$u=mysqli_query($conn,$y);
						$j=mysqli_fetch_assoc($u);
						?>
					<label>  <?php echo $j['s_id']; ?></label>
					</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-mdl">
						<div class="stats-left">
						<i class="fa fa-lemon-o"></i>
							<h5>Banners</h5>
							<a href="banners.php">More info</a>
						</div>
						<div class="stats-right">
						<?php $y="select count(*) as b_id from banners";
						$u=mysqli_query($conn,$y);
						$j=mysqli_fetch_assoc($u);
						?>
						<label>  <?php echo $j['b_id']; ?></label>
							
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
						<i class="fa fa-clock-o"></i>
							<h5>Gallery</h5>
							<a href="gallery.php">More info</a>
						</div>
						<div class="stats-right">
						<?php $y="select count(*) as g_id from gallery";
						$u=mysqli_query($conn,$y);
						$j=mysqli_fetch_assoc($u);
						?>
						
						
							<label>  <?php echo $j['g_id']; ?></label>
						</div>
						<div class="clearfix"> </div>	
					</div>
						
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
							<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
 </form>
   <div id="footer">
  <p>© 2018, Patronik Lighting. All Rights Reserved. Designed by&nbsp <a style="color:maroon" href="https://www.vritikatechnologies.com/" target="_blank">Vritika Technologies,Belgaum</a></p>
</div>
   
    
</body> 
</html>
