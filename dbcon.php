<?php

	$server = "localhost:3307";
	$user = "root";
	$password = "";
	$db = "displayupload";

	$con = mysqli_connect($server, $user, $password, $db);

	if($con){
		echo "Connection Successfull";
	}else{
		echo "No Connection";
	}

?>