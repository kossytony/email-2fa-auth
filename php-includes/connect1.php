<?php
	$db_host = "fdb24.awardspace.net";
	$db_user = "2917556_logintestdatabase";
	$db_pass = "kossy1010";
	$db_name = "2917556_logintestdatabase";
	
	$con =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if(mysqli_connect_error()){
		echo 'connect to database failed';
	}
?>