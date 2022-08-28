<?php

include('db.php');
$n_id=$_GET['id3'];
$sql1="delete from news where n_id='$n_id'";
$cat1=mysqli_query($conn,$sql1);


	if($cat1)
	{
		echo "<script> alert('deleated successfully')
		window.location.href='news.php';
		</script>";
		
	}
	


?>
