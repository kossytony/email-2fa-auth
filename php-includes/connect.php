<?php
	$db_host = "";
	$db_user = "";
	$db_pass = "";
	$db_name = "";
	
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