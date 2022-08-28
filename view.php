<?php 
$proj_id=$_GET['id1'];
$conn = mysqli_connect('localhost','root','','patronik');
$sql1="select * from project where proj_id='$proj_id'";
$t=mysqli_query($conn,$sql1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="https://vritikatechnologies.com" />
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
                                            <a class="navbar-brand" href="index.html">
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
			
			
			
			
			
			<br/><br/><br/><br/>
			
			
			
			
			
		       <section class="mixitap-section1 pad-top100 pad-bottom100">
			
                <div class="maxi-tap-head pad-bottom30">
				
                    <div class="container">
			
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-12">
                                <h2 class="heading-color theme-title">Our Projects</h2>
                            </div>
							
                            <div class="col-md-6 col-sm-8 col-xs-12 ">
                                <div class= "row">
                                    <div class= "col-md-12 col-sm-12 col-xs-12">
									
                                       
										
                                    </div>
                                </div>
                            </div>
                        </div>
						
                    </div>
						
                </div>
					
			<!--//====================projects display from backend start==================================//-->
			
               <div class="container">
                    <div class="row">
                        <div id="mixi-box">
						<?php while ($row=mysqli_fetch_assoc($t)) { ?>
                            <div class="col-md-12 col-sm-6 col-xs-12 mix category-4" >
                                <div class="itg-box-style-1">
                                    <figure class="hover-section">
                                       <img src="admin/image/<?php echo $row['image'];?>" alt="">

                                            <ul class="icon-hover">
                                                <li><a href="project-detail-with-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/img/projects/folder/<?php echo $row['image'];?>" class="fancybox" data-fancybox-group="group"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
											
                                       
                                    </figure>
							
						
                                   
								  
								 </div>
                            </div>
							
						 <div class="col-md-12 col-sm-6 col-xs-12 mix category-4" >
                       <h1><label style="color:yellow">Name of the project:</label></h1><h3> <?php echo $row['name']; ?></h3>
						<h1><label style="color:yellow">Architect designer:</label></h1><h3> <?php echo $row['architecture']; ?><h3>
						<h1><label style="color:yellow">Product used:</label></h1><h3> <?php echo $row['product']; ?></h3>
                            </div>
							
							
						<?php } ?>
						
                            
                        </div>
                    </div>
				
                </div>
				<!--//====================projects display from backend end==================================//-->
            </section>
	            <!--//========projects section End=========//-->
           	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
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