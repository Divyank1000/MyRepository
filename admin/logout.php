<?php
session_start();
session_destroy();
 echo "<script type=\"text/javascript\">
        alert('You have logged out Successfully')
		window.location.href='index.php';
		</script>";
?>