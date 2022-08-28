<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Login</title>
		<link rel="shortcut icon" href="image/favicon10.ico"/>
		
        <style>
            input[type=text]
            {
                height:26px;
                width:250px;
				border: 2px solid brown;
            }
            input[type=password]
            {
                height:26px;
                width:250px;
				border: 2px solid brown;
            }
            input[type=submit]
            {
                height:39px;
                width:120px;
                background:navy;
                color:white;
                text-decoration:none;
                border:none;
                font-size:23px;
            }
           input[type=submit]:hover{
			   color:yellow;
			   background-color:deeppink;
		   }
            table{
                
    border: 2px solid black;
    outline: darkviolet solid 10px;
    padding: 70px;
    text-align: center;
    background-color:pink;
    margin-top:145px;
            }
           body{
                background-image:url("image/Tailored Lighting.gif");
            }
			th{
				color:purple;
				font-size:19px;
			}
            </style>
    <body>
        <h3 align="center" style="color:green;"><?php echo @$_GET["success"];?></h3>
         <h3 align="center" style="color:red;"><?php echo @$_GET["logout"];?></h3>
         <form action="login.php" method="POST">
             
             <center> <table cellpadding="5" cellspacing="6" width="40%">
                 <tr>
                     <th colspan="2" align="center" style="background-image:url('image/star.gif');color:white">
                 <h1>Admin Login</h1><br></th>
             </tr>
             <tr><th align="right">Username:</th>
                 <td><input type="text" name="txtuser" placeholder="Enter Username" required=""></td></tr>
             <tr><th align="right">Password:</th>
                 <td><input type="password" name="txtpass" placeholder="Enter Password" required=""></td>
                 </tr>
                 <tr><td colspan="2" align="center"><br>
                     <input type="submit" value="Login" id="sub" name="sub"></td></tr>
                 </table></center>
         </form>
    </body>
</html>
                                      
                   
        
    