<?php

include('db.php');
$s_id=$_GET['id3'];
$sql1="delete from services where s_id='$s_id'";
$cat1=mysqli_query($conn,$sql1);


	if($cat1)
	{
		echo "<script> alert('deleated successfully')
		window.location.href='services.php';
		</script>";
		
	}
	


?>
