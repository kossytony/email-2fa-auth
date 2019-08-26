<?php
session_start();
require('php-includes/connect.php');
$userid = mysqli_real_escape_string($con,$_POST['userid']);
$password = mysqli_real_escape_string($con,$_POST['password']);


$query = mysqli_query($con,"select * from admin where userid='$userid' and password='$password'");
if(mysqli_num_rows($query)>0){
	$_SESSION['userid'] = $userid;
	$_SESSION['id'] = session_id();
	$_SESSION['login_type'] = "admin";

	$authcode = rand(100000,999999);

	
	$check_timestamp = mysqli_query($con, "SELECT * FROM sessiontable WHERE userid ='$userid'");
	if (mysqli_num_rows($check_timestamp) > 0) {
		$insert_update_timestamp = mysqli_query($con, "UPDATE sessiontable SET otpcode='$authcode', timestamp= UNIX_TIMESTAMP() where userid='$userid'");
	}
	else
	 {	
	$insert_new_timestamp = mysqli_query($con, "INSERT INTO sessiontable (userid, timestamp, otpcode) VALUES ('$userid', UNIX_TIMESTAMP(), '$authcode' )");
	 }
	 
	$querymail = mysqli_query($con, "select * FROM admin where userid='$userid'");
	$emailadd = mysqli_fetch_array($querymail);
	$emailadd = $emailadd['email'];
	
	$message = "Dear User, please your one time password $authcode this is valid for only 2 minutes";
	$sendcode =  mail($emailadd, 'OTP MAIL', $message, 'From: charlesproject.dx.am');
	echo '<script> window.location.assign("2fa.php")</script>';
	
}
else{
	echo '<script>alert("Email id or password is wrong.");window.location.assign("index.php");</script>';
}

?>