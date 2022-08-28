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
            <!--//========slider start=========//-->
			<?php include("db.php");
			
				$sql = "select * from banners";
				$result=mysqli_query($conn,$sql);
				
			?>
		
            <section class="slider-section">
			<!--//========banner display from backend start=========//-->	
                <div id="main-slider" class="owl-carousel owl-theme">
				<?php while ($row=mysqli_fetch_assoc($result)) { ?>
                    <div class="item">
                        <figure class="dark-theme">
                            <img src="admin/image/<?php echo $row['image']; ?>" width="100%" height="400px" alt="">
                        </figure >
                        <div class="slider-section-1 text-left">
                            <div class="container">
                                <div class=" col-md-8 slider-box1">
                                    <div class="row">
                                        <div class="main-slider-heading">
                                            <h1 style="color:#B2F302" class="heading-wa"><?php echo $row['main_title']; ?></h1>
                                        </div>
                                        <div class="slider-section-1-text">
                                            <h3 style="color:#FFCBA4" class="heading-wa "><?php echo $row['sub_title']; ?></h3>
                                            </p>
                                        </div>
                                        <a href="contact-form.html" class="itg-button mar-top20 mar-left15">Contact us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php } ?>
                </div>
				<!--//========banner display from backend stop=========//-->	
            </section>
			
            <!--//========slider End=========//-->	
            <!--//========About us section start=========//-->	
            <section class="about-us-section pad-top100 pad-bottom100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <iframe height="315" width="100%" src="https://www.youtube.com/embed/lHk7yRu7_K4?autoplay=1"></iframe>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12 about-box">
                            <h2 class="heading-color theme-title">Company</h2>
                            <p class="pregap-tecx" style="text-align:justify">We the team of Patronik Lighting Love lights and are inspired by the fact that how greater and positive difference can a good light make on our lives. Passion towards light has made Patronik Lighting today a leading Designer and Manufacturers of high-quality Architectural Lights and Automation Systems. </p>
							
							<p class="pregap-tecx" style="text-align:justify">We also undertake customized requirements of Lighting designers, Architects and Specifiers considering quality, energy efficiency, functionality and design at a time. These competences enable us to respond very flexibly to our customers’ requirements and also realise specially tailored LED-solutions in an extremely short time. Hence we tag ourselves as "<b>Designed For You"</b>.</p>
                            <a href="about-us.html" class="itg-button mar-top20">Read more</a>
                        </div>
                    </div>
                </div>
            </section>
            <!--//========About us section End=========//-->
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
                        <div class=" col-md-12 col-sm-12 col-xs-12 head-box">
                            <h2 class="heading-color mar-bottom50 theme-title">Our Service</h2>
                        </div>
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
            <!--//========projects section Start=========//-->
			<?php include("db.php");
			
				$sql = "select * from project";
				$result=mysqli_query($conn,$sql);
				
			?>
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
						<?php while ($row=mysqli_fetch_assoc($result)) { ?>
                            <div class="col-md-4 col-sm-4 col-xs-12 mix category-4" >
                                <div class="itg-box-style-1">
                                    <figure class="hover-section">
                                       <img src="admin/image/<?php echo $row['image'];?>" alt="">

                                            <ul class="icon-hover">
                                                <li><a href="project-detail-with-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                                <li><a href="assets/img/projects/folder/<?php echo $row['image'];?>" class="fancybox" data-fancybox-group="group"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                            </ul>
											
                                       
                                    </figure>
									<div class="box-caption">
								
                                        <h3 class="pad-top15"><a href="projects.php"><?php echo $row['name']; ?></a></h3>
                                    </div>
							
							<br><center><a href="view.php?id1=<?php echo $row['proj_id']; ?> " class="btn btn-primary" role="button">View</a></center></br>								
                                   
								   
								 </div>
                            </div>
						<?php } ?>
						
                            
                        </div>
                    </div>
					<center><a href="projects.php" class="itg-button mar-top20">View All Projects</a></center>
                </div>
				<!--//====================projects display from backend end==================================//-->
            </section>
	            <!--//========projects section End=========//-->
           
            <!--//========pattern section End=========//-->
            <!--//========banner box section Start=========//-->
            <section class="baneer-desing pad-top-bottom80">
                <div class="container">
                    <div class="row">
                        <div claSS="col-md-9 col-sm-8 col-xs-12">
                            <h1 class="banner-text">We are Designed For You</h1>
							<p>Patronik Lighting is specialized in custom design & manufacturing of architectural lights. </p>
                        </div>
                        <div claSS="col-md-3 col-sm-4 col-xs-12">
                            <div claSS="baner-boxes">
                                <div class="special-style special-style-full special-style-dark  col-md-12 col-md-offset-0 pull-right">
                                    <div class="bg-image"><img src="assets/img/banner/blog1.jpg" alt=""></div>
                                </div>
                                <div class="img-text mar-top50 mar-bottom50"><a href="contact-form.html">get quotation</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--//========banner box section End=========//-->
            <!--//========footer section Strat=========//-->
            <footer class="footer-section">
                <div class="container">
                    <div class="row mar-top60 mar-bottom30">
                        <div class="col-md-4 col-sm-6 col-xs-12 owl-ba mar-bottom30">
                            <div class=" footer-box ba">
                                <h3 class="footer-color">Sales Office</h3>
                                <div class="address-box pad-top20">
                                    <div class="col-md-2 col-xs-2">
                                        <i class="footer-icon fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <p class="footer-box1-text">RS No. 142, CTS No.1269 02, Ground Floor, Plot No-6, Nanawadi, Belagavi, Karnataka-590009</p>
                                    </div>
                                </div>
                                <div class="contact-box mar-top10">
                                    <div class="col-md-2 col-xs-2">
                                        <i class="footer-icon fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <p class="footer-icon footer-box1-text">+91 76249 32280</p>
                                    </div>
                                </div>
								<div class="contact-box mar-top10">
                                    <div class="col-md-2 col-xs-2">
                                        <i class="footer-icon fa fa-mobile" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-xs-10">
                                        <p class="footer-icon footer-box1-text">+91 99454 27001</p>
                                    </div>
                                </div>
                                <div class="contact-box1 mar-top10">
                                    <div class="col-md-2 col-xs-2">
                                        <i class="footer-icon fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-10 col-xs-10 bottom-size">
                                        <p class=" footer-box1-text">office@patronik.in</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 owl-ba">
                            <div class="footer-box ">
                                <h3 class="footer-color">Quick Links</h3>
                                <ul class="footer-3-ul">
                                    <li><a href="about-us.html"><i class="fa fa-angle-right" aria-hidden="true"></i>About Patronik</a></li>
                                    <li><a href="automation.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Automation Product</a></li>
									<li><a href="products.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Lighting Product</a></li>
									<li><a href="lighting.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Projects</a></li>
									<li><a href="news.php"><i class="fa fa-angle-right" aria-hidden="true"></i>News</a></li>
									<li><a href="gallery.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a></li>
									<li><a href="services.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Services</a></li>
									<li><a href="contact-form.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Contact</a></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 owl-ba">
                            <div class="footer-box">
                                <h3 class="footer-color">Follow Us</h3>
                                <div class="new-letter-box">
                                    <ul class="top-right-icon">
                                    <li><a href="https://www.facebook.com/patroniklighting/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/patronik_lighting/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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