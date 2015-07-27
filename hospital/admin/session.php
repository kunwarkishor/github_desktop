<?php
session_start();
if(!$_SESSION['var'])
header('location:../login.php');
?>
