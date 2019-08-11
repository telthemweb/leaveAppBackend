<?php 
require_once '../inc/database.php';
session_start();
if (isset($_SESSION['ec_number'])) {
	header('Location: ../employees/index.html');
	exit();
}
if ($_POST['login']) {
		
	    $ec_number = $_POST['ec_number'];
        $password =  $_POST['password'];
        $hash = md5($password);

      try {
      	  $stmt = $conn->prepare('SELECT* FROM employees WHERE ec_number = :ec_number || password =:password');
          $stmt->execute(array(
					':ec_number' => $ec_number,
					':password'=>$hash
					));
		  $data = $stmt->fetch(PDO::FETCH_ASSOC);

		if($data == false){
			  echo "<span style='color:red; font-size:18px;'> User not found please create account </span>";
			  exit('failed');
		}
		else{
		echo json_encode($data);
				// $_SESSION['loggedIn'] = ;
				$_SESSION['emp_fname'] = $data['emp_fname'];
				$_SESSION['ec_number'] = $data['ec_number'];
				header('Location: ../employees/index.html');
							
		}
      }catch(PDOException $e) {
			echo $e->getMessage();
		}

}