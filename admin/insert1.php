<?php
session_start(); 
include('db.php');
 $news_header="";
    $image="";
    $description="";
    $date="";
    $n_id="";
if(isset($_POST['add']))
{	
	$news_header=$_POST['news_header'];
	//$image=$_POST['image'];
	$description=$_POST['description'];
	$date=$_POST['date'];
	

	  //image upload
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
// Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
      //  echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    
// Check if file already exists
//if (file_exists($target_file)) {
   // echo "Sorry, file already exists.";
  //  $uploadOk = 0;
//}
    
// Check file size
if ($_FILES["image"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
    
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
    
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
     //   echo "The file ". basename( $_FILES["p_img"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    $image=basename( $_FILES["image"]["name"]);	
}
    //image upload end
    
    
	
	
	$sql = "insert into news(news_header,image,description,date) values('$news_header','$image','$description','$date')";  
	$cat = mysqli_query($conn,$sql);
	if($cat)
	{
		echo "<script> alert('inserted successfully')
		window.location.href='st.php';
		</script>";
		
	}
	
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Add</title>
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

<form action="" method="post" enctype="multipart/form-data">
<div class="input-group">
                 <label>News Header</label>
                <input type="text" name="news_header">
            </div>
            <div class="input-group">
                 <label>Image</label>  
                <input type="file" name="image">
                
            </div>
            
             <img src="image/<?php echo $image; ?>" name="image" height="100px" width="100px" alt="<?php echo $image; ?>">   
           
       
                <div class="input-group">
                 <label>Description</label>
                <input type="text" name="description" width="500px">
                </div>
                <div class="input-group">
                 <label>Date</label>
                <input type="date" name="date" >
                </div>


<input type="submit" value="submit" name="add"/>
</form>
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
 
 <div id="footer">
      <div class="container">
        <p class="text-muted credit">© 2018, Patronik Lighting. All Rights Reserved. Designed by&nbsp <a href="https://www.vritikatechnologies.com/" target="_blank">Vritika Technologies,Belgaum</a></p>
      </div>
    </div>
  </body>
</html>
