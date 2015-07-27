<?php include_once('connection/connection.php');
 include_once('session.php');
include_once('header.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Patient</title>
</head>

<body>
<form name="addpatient" action="" method="post" enctype="multipart/form-data">


<center>
<div align="center" style="box-shadow: 10px 10px 10px; background-color:#6cc; height:auto; width:1019px; margin-top:8%; margin-bottom:5%; border-radius:20px; ">
	<table align="center" style="font:'Times New Roman', Times; font-size:22px; margin-top:4%; margin-left:27%; width:65%;">
	    <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    	<tr><td>Name</td><td>&nbsp;</td><td><input type="text" name="p_name" /></td></tr>
    	<tr><td>Contact No:-</td><td>&nbsp;</td><td><input type="text" name="Contact" /></td></tr>
    	<tr><td>Address</td><td>&nbsp;</td><td><textarea name="Address"></textarea></td></tr>
    	<tr><td>Pincode</td><td>&nbsp;</td><td><input type="text" name="pin" /></td></tr>        
    	<tr><td>Pic</td><td>&nbsp;</td><td><input type="file" name="img" /></td></tr>
    	<tr><td>Type</td><td>&nbsp;</td><td><input type="text" name="Type" /></td></tr>
    	<tr><td>Description</td><td>&nbsp;</td><td><textarea name="Description"></textarea></td></tr>
       <tr><td align="center" colspan="3"><input type="submit" name="Save" value="Save" style="border-radius:25%; background-color:#C30; font-family:Tahoma, Geneva, sans-serif; font-size:18px; color:#FFF; margin-left:-35%; margin-bottom:2%; margin-top:3%;" /></td></tr>
    </table>

</div>
</center>
</form>
</body>
</html>
<?php include_once('footer.php'); ?>
<?php
if(isset($_POST['Save']))
{
	$nm=$_POST['p_name'];
	$cont=$_POST['Contact'];
	$add=$_POST['Address'];
	$pinc=$_POST['pin'];
	$type=$_POST['Type'];
	@$decp=$_POST['Description'];
	 @ $img=$_FILES['img']['name'];
	 if(empty($nm) ||(empty($cont)) ||(empty($add))||(empty($type))||(empty($decp))||(empty($pinc)))
	 {
		   echo "<script> alert('Please fill all details.')</script>";
	 }
	 else
	 {
		date_default_timezone_set('Asia/Calcutta');
		$date= date("j  F Y, \A\\T g.i A", time());
		 move_uploaded_file($img,"../PIMG/$img");
		$sql = "INSERT INTO patient (`regid`, `Name`, `address`, `Contactno`, `pincode`, `image`, `docid`, `type`, `description`, `reciptimage`, `fee`, `charge`, `created`) VALUES ('test','$nm','$add','$cont','$pinc','$img','5','$type','$decp','img','500','500','2015-07-07');";
		$run=mysql_query($sql);
		$sql = "INSERT INTO user (`acctype`, `regid`, `name`, `address`, `pincode`) VALUES ('0', 'test', '$nm', '$add','$pinc');";
		mysql_query($sql);
		 if($run>0)
		 {
			 echo "<script>alert('New patient is added.....!')</script>";
		 }
	 }
	 
	
}
?>