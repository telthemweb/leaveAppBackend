<?php
   require_once './db/database.php';
   $ec_number = $_POST['ec_number'];
   $password = $_POST['password'];

   $hash = md5($password);
   $response = array();
   try {

     $stmt = $conn->prepare('SELECT * FROM users WHERE ec_number = :ec_number && password=:password');
      $stmt->execute(array(
					':ec_number' => $ec_number,
					':password'=>$hash
					));
    
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if($data == false){
          $response['message'] = "User not found"
				}else {
					echo json_encode($data);
				}  

	}
	catch(PDOException $e) {
				$errMsg = $e->getMessage();
			} 
