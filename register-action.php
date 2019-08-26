<?php
require('php-includes/connect.php');

if (isset($_POST["submit"]))
{
if($_POST['userid'] == "" || $_POST['password'] == "" || $_POST['email'] == "")
{
	echo '<script> alert("please fill out all fields"); window.location.assign("register.php") </script>';
}
else
{

$userid = mysqli_real_escape_string($con,$_POST['userid']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$email = mysqli_real_escape_string( $con, $_POST['email']);
}
};

$query = mysqli_query($con,"select * from admin where userid='$userid' and email='$email'");
if (mysqli_num_rows($query) > 0) 
{
	echo '<script> alert("account already exists"); window.location.assign("register.php"); </script>';
}
else
{
$query = mysqli_query($con,"INSERT INTO admin (userid, password, email) VALUES ('$userid', '$password', '$email')");
if ($query) 
{
 echo'<script> alert("Registeration Successful"); window.location.assign("index.php")</script>';
}
else 
{
	echo mysqli_error($con);
}

}

?>