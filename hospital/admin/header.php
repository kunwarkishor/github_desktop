<?php
	include_once('connection/connection.php');
 include_once('session.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/user.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="menu/styles.css" type="text/css">
   <!--<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
   <script src="../menu/jquery-latest.min.js" type="text/javascript"></script>
   <script src="menu/script.js"></script>
   
</head>

<body>
<center>
<div class="header">
	<div class="left_logo">
	    <img src="../img/logo-png.png" width="40%" height="25%" class="logo" />
        <img src="img/Administration.jpg" class="logo" width="72%" height="0%" style=" margin-top:-28%; margin-left:56%;" />
    </div>
    <div class="right_top">
    	<h1 style=" margin-top:2%; color:#B00000; font-family:'Adobe Garamond Pro Bold';">Appirion Dental Software</h1>
    </div>
   	 <div class="header_right">
      <img src="img/administrator-icon (1).png" class="logo" width="59%" height="0%" style=" margin-top:-22%; margin-left:-59%;" />
     <?php 
	 	$id=$_SESSION['var'];
		$sql="Select * from admin where id='$id'";
		 $details=mysql_query($sql);
		while($get_details=mysql_fetch_array($details))
			{
				echo $get_details['name'];
			}
	?>	
    </div>
    <hr class="hrheader" />
    <div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'>Home</a></li>
   <li><a href='newpatient.php'>New Patient</a></li>
   <li><a href='allpatient.php'>Old Patient</a></li>
   <li><a href='#'>Service</a></li>
   <li><a href='#'>Carrer</a></li>
   <li><a href='#'>Contact Us</a></li>  
   <li> <?php if($_SESSION['var']=='')
   { ?>
   <a href='login.php'>Login</a>
   <?php }else { ?><a href='Logout.php'>Logout</a></li>  <?php //echo 'Welcome MR.ABC';  
   } ?>
</ul>
</div>
</div>
</center>
</body>
</html>