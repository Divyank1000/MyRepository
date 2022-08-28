<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
<link rel="shortcut icon" href="image/favicon10.ico"/>
<style type="text/css">
fieldset {
	width:500px;
	border:5px solid green;
	margin:0 auto;
	border-radius:5px;
	margin-top:145px;
	padding:35px;
	background-color:#f3e5ab;
}
 
legend {
	color:yellow;
	font-size: 25px;
	background-color:deeppink;
}
th {
	
	color: brown;
	font-size: 19px;
	align:left;
}
 
 
td input {
	width: 200px;
	border: 2px solid brown;
	font-size: 15px;
	text-indent: 5px;
	height: 28px;
}

.btn {
	color: yellow;
	background-color:navy;
	height: 38px;
	border: 2px solid #CCC;
	border-radius: 10px;
	align:center;
	font-size:16px;
	width:10em;
	height:3em;
	margin-top:16px;
}
.btn:hover{
	color:white;
	background-color:deeppink;
	font-size:16px;
	border-radius: 10px;
}
body{
	background-image:url("image/d10.gif");
}
#goback{
	width:8em;
	height:4em;
}
button:hover{
	background-color:salmon;
	font-size:16px;
	color:navy;
	border-radius: 10px;
}
button{
	font-size:16px;
	color:aqua;
	background-color:crimson;
	border-radius: 10px;
}
</style>
</head>
 
<body>
	<fieldset>
		<legend align="center">Change Password</legend>
	<?php 
		$conn_db = mysql_connect("localhost","root","") or die();
		$sel_db = mysql_select_db("patronik",$conn_db) or die();
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$chg_pwd=mysql_query("select * from admin where user_id='1'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update admin set password='$new_pass' where user_id='1'");
			echo "<script>alert('Password changed Sucessfully'); window.location='index.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='index.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='index.php'</script>";
		}}
	?>
	
 
	<form method="post">
	<center><table>
                 <tr>
                                     
             </tr>
             <tr><th>Old Password:</th>
                 <td><input type="password" name="old_pass" placeholder="Old Password..." value="" required /></td></tr>
             <tr><th>New Password:</th>
                 <td><input type="password" name="new_pass" placeholder="New Password..." value=""  required /></td>
                 </tr>
				 <tr><th>Retype New Password:</th>
                 <td><input type="password" name="re_pass" placeholder="Retype New Password..." value="" required /></td>
                 </tr>
                 </table></center>
	
 
		<p align="center">
			<input type="submit" class="btn" value="Change Password" name="re_password" />
		</p>
	</form>
	</fieldset>
	<br><center><button id="goback" onclick="goBack()">Go Back</button></center>
</body>
<script>
function goBack() {
    window.history.back()
}
</script>
</html>