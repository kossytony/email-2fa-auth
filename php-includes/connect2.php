<?php
	$db_host = "fdb26.awardspace.net";
	$db_user = "2943280_logintestdatabase";
	$db_pass = "welcome.1";
	$db_name = "2943280_logintestdatabase";
	
	$con =  mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if(mysqli_connect_error()){
		echo 'connection to database failed';
		
	}
	//else 
//	{
//		echo 'connected successfully';
//	}
//	
?>