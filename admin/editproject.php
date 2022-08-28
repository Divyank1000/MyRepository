<?php
session_start(); 
include('db.php');
$name="";
$architecture="";
$image="";
$product="";
    
    
$proj_id=$_GET['id2'];
$sql1="select * from project where proj_id='$proj_id'";
$cat1=mysqli_query($conn,$sql1);

if(isset($_POST['update']))
{	
$proj_id=$_POST['proj_id'];
	$name=$_POST['name'];
	$architecture=$_POST['architecture'];
	$product=$_POST['product'];
	//$image=$_POST['image'];
	
function generateRandomString($length = 25) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, strlen($characters) - 1)];
	    }
	    return $randomString;
	}

$image = generateRandomString();
	$allowedExts = array("gif", "jpeg", "jpg", "png");

	$temp = explode(".", $_FILES["image"]["name"]);
	$extension = end($temp);

	$image = $image . "." . $extension;
	move_uploaded_file($_FILES["image"]["tmp_name"],
	"image/" . $image);   
	
	
	if(!empty($_FILES['image']['name']))
        {
           
            $query="UPDATE project SET name='$name',image='$image',architecture='$architecture', product='$product' WHERE proj_id='$proj_id'"; 
		$res1=mysqli_query($conn,$query);
		}  
 else {
         $query="UPDATE project SET name='$name',architecture='$architecture',product='$product' WHERE proj_id='$proj_id'";
        $res1=mysqli_query($conn,$query);
 }
	if($res1){
		echo "<script> alert('updated successfully')
		window.location.href='project.php';
		</script>";
	}
	
	
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Patronik Lighting|Edit Services</title>
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
<?php while($abc=mysqli_fetch_array($cat1))

{
	?>
<div class="input-group">
<div class="input-group">
                 <label>Image</label>  
                <input type="file" name="image" id="img" onchange="validateImage()"/>
            </div>
            
             <img src="image/<?php echo $abc['image']; ?>" height="100px" width="100px" alt="image"/> <br></br> 
                 <label>Name</label>
				 
				 <input type="hidden" name="proj_id" value="<?php echo $abc['proj_id'];?>"/>
                <input type="text" name="name" value="<?php echo $abc['name'];?>"/>
            </div>
			
			<div class="input-group">
                 <label>Architecture</label>
                <input type="text" name="architecture" value="<?php echo $abc['architecture'];?>"/>
            </div>
			<div class="input-group">
                 <label>Product</label>
                <input type="text" name="product" value="<?php echo $abc['product'];?>"/>
            </div>
			
             
           
<button class="btn" type="submit" value="button" name="update">Update</button>
<?php } ?>
</form>
<!-- Classie -->

<script type="text/javascript">
function validateImage() {
    var formData = new FormData();

    var file = document.getElementById("img").files[0];

    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}
</script>
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
  <p>© 2018, Patronik Lighting. All Rights Reserved. Designed by&nbsp <a style="color:maroon" href="https://www.vritikatechnologies.com/" target="_blank">Vritika Technologies,Belgaum</a></p>
</div>
  </body>
</html>
