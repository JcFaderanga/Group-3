<?php

$connections = mysli_connect("localhost","root","","db_enrollment");

if ($mysqli_connect_errno()){
	
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
		echo "connected.";
	
} 
	?>