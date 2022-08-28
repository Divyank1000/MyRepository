<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="https://vritikatechnologies.com/" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Patronik Lighting | Designed For You</title>
        <!-- Bootstrap -->
        <!-- Favicon -->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="admin/image/favicon10.ico" type="image/x-icon">
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
    </head>
    <body>
        <div class="dark-version">
            <!--//==top header Start==//-->
            <header id="main-header">
                <div class="top-header pad-top10 pad-bottom10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12 text-left ">
                                <ul class="top-bar-icon">
                                    <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+91 76249 32280</a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>office@patronik.in</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                                <ul class="top-right-icon">
                                    <li><a href="https://www.facebook.com/patroniklighting/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/patronik_lighting/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//==top header end==//-->
                <!--//==mega menu start==//-->
                <div id="main-menu" class="wa-main-menu">
                    <!-- Menu -->
                    <div class="wathemes-menu relative">
                        <!-- navbar -->
                        <div class="navbar navbar-default navbar-bg-dark" role="navigation">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="navbar-header pad-top15 pad-bottom15">
                                            <!-- Button For Responsive toggle -->
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span> 
                                            <span class="icon-bar"></span>
                                            </button> 
                                            <!-- Logo -->
                                            <a class="navbar-brand" href="index.php">
                                            <img class="site_logo dark-logo" alt="Site Logo"  src="assets/img/patronik_logo.jpg" />
                                            <img class="site_logo light-logo" alt=""  src="assets/img/light-logo.png" />
                                            </a>
                                        </div>
                                        <!-- Navbar Collapse -->
                                        <div class="navbar-collapse collapse">
                                            <!-- nav -->
                                            <ul class="nav navbar-nav">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about-us.html">About Us</a></li>
												<li><a href="#">Products</a>
												   <ul class="dropdown-menu">
                                                        <li><a href="automation.php">Automation</a></li>
                                                        <li><a href="lighting.php">Lighting</a></li>
                                                    </ul>
												</li>
                                                <li><a href="services.php">Services</a></li>
                                                <li><a href="projects.php">Projects</a></li>
												 <li><a href="news.php">News</a></li>
												 <li><a href="gallery.php">Gallery</a></li>
                                                <li><a href="contact-form.html">Contact</a></li>
                                            </ul>
                                        </div>
                                        <!-- navbar-collapse -->
                                    </div>
                                    <!-- col-md-12 -->
                                </div>
                                <!-- row -->
                            </div>
                            <!-- container -->
                        </div>
                        <!-- navbar -->
                    </div>
                    <!--  Menu -->
                </div>
                <!--//==mega menu end==//-->
            </header>
            <!--//========breadcrumb section start=========//-->
            <div class="breadcrumb-section-box">
                <div class="special-style special-style-full special-style-semidark col-md-12 col-md-offset-0 pull-right">
                    <div class="bg-image" style="background-image:url('admin/image/sink.jpg');"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 pad-top250 pad-bottom0 heading-box">
                            <h1 class="heading-color box-z">Services</h1>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--//========breadcrumb section End=========//-->
            <!--//========Our service section Start=========//-->
          
		  
		  
		  
		 <?php include("db.php");
				$sql = "select * from services";
				$result=mysqli_query($conn,$sql);
				
			?>
           <section class="service-section">
                <div class="special-style special-style-full special-style-dark half-height col-md-12 col-md-offset-0 pull-right">
                    <div class="bg-image" style="background-image:url('admin/image/sink.jpg');"></div>
                </div>
                <div class="container">
                    <div class="row pad-top100">
                        <div class="">
						<?php while ($row=mysqli_fetch_assoc($result)) { ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 mar-bottom">
                                <div class="service-box1 glyph">
                                     <img src="admin/image/<?php echo $row['image'];?>" width="500px" height="200px" alt="">
                                    <h3><a href="#" class="samll-head mar-top25 pad-bottom20"><?php echo $row['s_name'];?></a></h3>
                                    <p><?php echo $row['s_desc'];?></p><br>
                                    <a href="viewservice.php" class="link-btn mar-top20 pad-bottom50">Read more</a>
                                </div>
                            </div>
						<?php } ?>
                        </div>
                    </div>
                </div>
            </section>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  <!--//========Our service section End=========//-->
            <!--//========footer section Strat=========//-->
            <footer class="footer-section">
                <div class="footer-bottom-bar">
                    <div class="container">
                        <p class="pad-top30 pad-bottom30">© 2018, Patronik Lighting. All Rights Reserved. Designed by <a href="https://vritikatechnologies.com" target="_blank">Vritika Technologies</a></p>
                    </div>
                </div>
            </footer>
            <!--//========footer section End=========//-->		
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="assets/plugin/menu-menu/js/hover-dropdown-menu.js"></script>
        <script src="assets/plugin/menu-menu/js/jquery.hover-dropdown-menu-addon.js"></script>
        <script src="assets/plugin/owl-carousel-slider/js/owl.carousel.min.js"></script>
        <script src="assets/plugin/fancyBox/js/jquery.fancybox.pack.js"></script>
        <script src="assets/plugin/fancyBox/js/jquery.fancybox-media.js"></script>
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.countTo.js"></script> 
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.appear.js"></script> 
        <script src="assets/plugin/mixitup/js/jquery.mixitup.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

</html>