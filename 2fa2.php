<?php
session_start();
require('php-includes/connect.php');
$receivedcode = $_POST['otp'];
$userid = $_SESSION['userid'];
//$userid = "kossy";
$userid = mysqli_real_escape_string($con, $userid);
$query = mysqli_query($con, "SELECT otpcode FROM sessiontable where userid= '$userid'");
$row = mysqli_fetch_array($query);
$generatedcode = $row['otpcode'];
//echo $userid;
//echo $generatedcode;
if ($generatedcode == $receivedcode)
{
	echo ' <script>alert("Code correct login successful"); window.location.assign("home.php") </script>';
	}
else
{
	echo'<script> alert("incorrect otp code re-login"); window.location.assign("index.php") </script>';
	}
?>