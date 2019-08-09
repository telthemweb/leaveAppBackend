<?php 

    $host = "localhost";
	$user = "root";
	$pass = "!physmach89";
	$db = "dbleave";

	//    $host = "localhost";
	// $user = "id4930703_leaveuser";
	// $pass = "!physmach89";
	// $db = "id4930703_dbleave";
	
try {
		$conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	if ($conn) {
		return null;
		// echo "Connected";
	}
	else{
		echo "Failed:" . $conn->connect_error;
	}
}
catch(PDOException $e) {
	echo $e->getMessage();
}


