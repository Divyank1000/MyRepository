<?php

include('db.php');
$pid=$_GET['id3'];
$sql1="delete from product where pid='$pid'";
$cat1=mysqli_query($conn,$sql1);


	if($cat1)
	{
		echo "<script> alert('deleated successfully')
		window.location.href='product.php';
		</script>";
		
	}
	


