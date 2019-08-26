<?php
require('php-includes/connect.php');

$userid = "";
$query = mysqli_query($con, "INSERT INTO sessiontable (userid, timestamp) VALUES ('$userid', UNIX_TIMESTAMP() )");

if (mysqli_error($con))
{
	echo mysqli_error($con);
	}
	else
	{
	echo 'Connection successful';
	}
