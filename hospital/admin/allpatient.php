<?php include_once('connection/connection.php');
 include_once('session.php');
include_once('header.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/admincss.css" rel="stylesheet" type="text/css"  />
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>
<body>
<center>
<fieldset style="border-color:#03C; height:92px; margin-top:5%;  border:hidden;">
<h1 style="color:#C60;">All Patient details</h1>
<h6 style="color:#F00; margin-top:-2%;">**If you want to see click on View link**</h6></fieldset>
<fieldset style="border-color:#03C; height:73px; margin-top:-2%; width:78%; text-align: left; border:hidden;">
<div style="margin-top:0%; margin-bottom:1%;">
	<div style="margin-left:1%;"">Searched by:-</div>&nbsp;&nbsp;
    <div style="margin-left:24%; margin-top:-4%;">
    		<select name="serchedby">
            	<option value="0">--Select--</option>
            	<option value="1">Reg No</option>
            	<option value="2">Name</option>
            	<option value="3">Contact No</option>
            </select>
    </div>
    <div style="margin-left:47%; margin-top:-2%;">Enter Value:-</div>
    <div style="margin-left:66%; margin-top:-2.5%;">
    	<input type="search"  />
    </div> 
    <div style="margin-left:91%; margin-top:-2.5%;">
    	<input type="submit" name="Search" value="Search"  />
    </div>
</div>
</fieldset>
<div style="box-shadow: 10px 10px 10px; width:80%; height:auto; background-color:#6cc; margin-top:-5%; margin-bottom:5%; ">

<table class="table" align="center" style="margin-top:1%; margin-left:0%;">
    <tr>
    	<th class="th">S No</th>
        <th class="th">R.No</th>
        <th class="th">Name</th>
        <th class="th">address</th>
        <th class="th">Contact No</th>
        <th class="th">Type</th>
        <th class="th">Description</th>
        <th class="th">Date</th> 
        <th class="th">action</th>       
	</tr>
   
<?php
 $details=mysql_query('select * from patient');
 $counter=0;
 while($p_details=mysql_fetch_array($details))
 {
	 $regno=$p_details['regid'];
	 $Name=$p_details['Name'];
	 $address=$p_details['address']." ".$p_details['pincode'];
	 $Contactno=$p_details['Contactno'];
	 $type=$p_details['type'];
	 $description=$p_details['description'];
	 $created=$p_details['created'];
	 $counter++;
	?>
    <tr>
    <td><?php echo $counter;  ?></td>
    <td><?php echo $regno;  ?></td>
    <td><?php echo $Name;  ?></td>
    <td><?php echo $address;  ?></td>
    <td><?php echo $Contactno;  ?></td>
    <td><?php echo $type;  ?></td>
    <td><?php echo $description;  ?></td>
    <td><?php echo $created;  ?></td>
    <td><a href="#">View</a></td>
    </tr>
    <?php
 }
?>

</table>
</div>
</center>
</body>
</html>
<?php include_once('footer.php'); ?>