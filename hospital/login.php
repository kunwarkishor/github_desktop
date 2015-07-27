<?php
mysql_connect('localhost','root','');
mysql_select_db('hospital');
session_start();
 ?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
        <link rel="stylesheet" href="css/loginstyle.css">
  </head>
  <body>
    <div class="wrapper">
	<div class="container">
		<h1>Login Here</h1>
		
		<form  action="" method="POST">
        	Select user: &nbsp;&nbsp;&nbsp;&nbsp;<select name="acctype" style="margin-bottom:2%; margin-left:5%;"><option value="1">Admin</option><option value="0">User</option></select>
			<input type="text" placeholder="Username" name="username">
			<input type="password" placeholder="Password" name="pass">
            <input type="submit" name="submit" value="login">
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

       <script src="js/index.js"></script>-->

    
    
    
  </body>
</html>
<?php 
if(isset($_POST['submit']))
{
	
	$name=$_POST['username'];
	$pass=$_POST['pass'];
	$acctype=$_POST['acctype'];
    if(empty($name) ||(empty($pass)))
		 {
		     echo "<script> alert('Enter Registration number and pasword.')</script>";
		 }
		 else
		 {
			 include_once('connection/connection.php');
			  $chek="select * from user where regid='$name' AND pincode='$pass' And acctype='$acctype'";
	 		  $run=mysql_query($chek);
	          if(mysql_num_rows($run)>0)
	 			{ 
				while($sesn_id=mysql_fetch_array($run))
		 {
			
			 $_SESSION['var']=$sesn_id['id'];
			  if($acctype>0){
	        	 echo"<script>window.open('admin/index.php','_self')</script>";
			     }else{
				  echo"<script>window.open('user/userdashboard.php','_self')</script>";
				  }
		 }
				 }
				  else
				  {
				  echo"<script> alert('Wrong User Id or Password....')</script>";
				  exit();
				  }
				}
}
 ?>