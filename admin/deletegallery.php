<?php

include('db.php');
$g_id=$_GET['id3'];
$sql1="delete from gallery where g_id='$g_id'";
$cat1=mysqli_query($conn,$sql1);


	if($cat1)
	{
		echo "<script> alert('deleated successfully')
		window.location.href='gallery.php';
		</script>";
		
	}
	


?>
