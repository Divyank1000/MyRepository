<?php
session_start(); 
include('db.php');
$sql = 'select * from news';
$cat = mysqli_query($conn,$sql);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Patronik Lighting|News</title>
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
		         
		
		<div class="pull-right">
<h2><a class="button button1" href="addnews.php">Add</a></h2></div>
  
             <table class="col-lg-6" id="home">
            <thead>
                <tr>
                    <th>News header</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th colspan="9">Action</th>
                   <!-- <th><a class="button button1" href="addnews.php">Add</a></th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($cat)) {
                    ?>
                    <tr>
                        <td><?php echo $row['news_header']; ?></td>
                         <td><img src="image/<?php echo $row['image']; ?>" alt="image"  value="<?php echo $image; ?>" width="100px" height="100px"></td>
                        <td><?php echo $row['description']; ?></td>
                          <td><?php echo $row['date']; ?></td>
                           
                          

<td><a class="button button2" href="editnews.php?id2=<?php echo $row['n_id']; ?> ">Edit</a></td>
<td><a class="button button3" href="deletenews.php?id3=<?php echo $row['n_id']; ?> ">Delete</a></td>
                    </tr>
<?php } ?>
            </tbody>
        </table>
		
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






