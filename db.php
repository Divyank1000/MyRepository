<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "patronik";
$conn=mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error($conn));
//mysqli_select_db('patronik');
?>

