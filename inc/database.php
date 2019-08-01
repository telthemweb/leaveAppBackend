<?php 

    $host = "localhost";
	$user = "id4930703_leaveuser";
	$pass = "!physmach89";
	$db = "id4930703_dbleave";
	
	$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);


	if ($conn) {
		return null;
		// echo "Connected";
	}
	else{
		echo "Failed:" . $conn->connect_error;
	}


