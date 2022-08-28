<?php

include('db.php');
$b_id=$_GET['id3'];
$sql1="delete from banners where b_id='$b_id'";
$cat1=mysqli_query($conn,$sql1);


	if($cat1)
	{
		echo "<script> alert('deleated successfully')
		window.location.href='banners.php';
		</script>";
		
	}
	


?>
