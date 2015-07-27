<?php include_once('header.php');
include_once('connection/connection.php');
include_once('session.php');
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="css/admincss.css" type="text/css" rel="stylesheet"/>
</head>
<body style="background-color:#fff;"><center><fieldset style=" width:78%; margin-top:7%; height:284px; margin-left:0%;">
<div >
<fieldset style="border-color:#03C; height:92px; border:hidden;">
<h1 style="color:#C60;">Your Profile details</h1>
<h6 style="color:#F00; margin-top:-2%;">**If you want to modify click on EDIT link**</h6></fieldset>
<table class="table" style="width:100%;margin-top:4%;">
	<tr>
	<th class="th">S No.</th>
	<th class="th">Reg No.</th>
	<th class="th">Name</th>
	<th class="th">Cotact NO</th>
	<th class="th">Address</th>
    <th class="th">Pincode</th>
	<th class="th">Created On</th>
    <th class="th">Action</th>
	</tr>
    
<?php
$id=$_SESSION['var'];
  $get_details=mysql_query("Select * from admin where id='$id' ");
   	   while($row=mysql_fetch_array($get_details))
		   {
			   $couter=1;
           $id=$row['id'];
		    $regid=$row['regid'];
			 $name=$row['name'];
			  $contactno=$row['contactno'];
			   $address=$row['address'];
			    $pincod=$row['pincode'];
				 $createdon=$row['created'];
	        }
 ?>
	<tr>
    	<td><?php echo $couter; ?></td>
        <td><?php echo $regid; ?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $contactno; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $pincod; ?></td>
        <td><?php echo $createdon; ?></td>
        <td><a href="#">Edit</a></td>
    </tr>
    </table>
</div>
</fieldset>
<fieldset style=" width:78%; margin-top:1%; height:23px; margin-left:0%;">
<div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the</div>
</fieldset>
</center>
</body>
</html>
<?php include_once('footer.php') ?>