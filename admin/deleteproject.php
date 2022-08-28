<?php

include('db.php');
$proj_id=$_GET['id3'];
$sql1="delete from project where proj_id='$proj_id'";
$cat1=mysqli_query($conn,$sql1);


	if($cat1)
	{
		echo "<script> alert('deleated successfully')
		window.location.href='project.php';
		</script>";
		
	}
	


?>
