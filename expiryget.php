<?php
session_start();
require('php-includes/connect.php');

$userid = $_SESSION['userid'];
$userid = mysqli_real_escape_string($con, $userid);
$query = mysqli_query($con, "SELECT timestamp FROM sessiontable where userid= '$userid'");
$row = mysqli_fetch_array($query);
$expirytime = $row['timestamp'];


$expirytime = ($expirytime + 120) *1000 ;
//echo $expirytime;
echo json_encode($expirytime);

?>