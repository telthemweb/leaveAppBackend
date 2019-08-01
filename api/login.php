<?php
   require_once '../inc/database.php';
   $ec_number = $_POST['EC_number'];
   $password = $_POST['password'];

   $hash = md5($password);
   $response = array();
   try {

     $stmt = $conn->prepare('SELECT * FROM employees WHERE EC_number = :EC_number && password=:password');
      $stmt->execute(array(
					':EC_number' => $ec_number,
					':password'=>$hash
					));
    
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if($data == false){
          $response['message'] = "User not found";
				}else {
					echo json_encode($data);
				}  

	}
	catch(PDOException $e) {
				$errMsg = $e->getMessage();
			} 
