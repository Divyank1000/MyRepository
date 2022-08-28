<?php
include('./db.php');
session_start();
if(isset($_POST["sub"]))
{
    $username=$_POST["txtuser"];
    $password=$_POST["txtpass"];
    $query="select * from admin where username='$username' and password='$password'";
    $exe_query=mysqli_query($conn,$query);
        $found_num_rows=mysqli_num_rows($exe_query);
      if($found_num_rows==1)
    {
         
        $_SESSION["login_user"]=$username;
        header("Location:admindashboard.php");
    }
    else 
    {
       echo "<script type=\"text/javascript\">
        alert('Your username or password is incorrect. Please try again')
		window.location.href='index.php';
		</script>";
      //  header("Location:index.php?invalid=Your username or password is incorrect|Please try again");
        
    }     
}
    ?>