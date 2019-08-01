<?php

    require_once '../inc/database.php';

   		$ec_number = $_POST['EC_number'];
		$emp_fname = $_POST['emp_fname'];
		$emp_lname = $_POST['emp_lname'];
		$address = $_POST['address'];
		$birth_date = $_POST['birth_date'];
		$emp_sex = $_POST['emp_sex'];
		$emp_role = $_POST['emp_role'];
		$password = $_POST['password'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$date_employed = $_POST['date_employed'];
		$hash = md5($password);
		
	
try {
$sqlUser = "SELECT * FROM employees WHERE EC_number = '".$ec_number."'";

$stmt = $conn->prepare($sqlUser);
$stmt->execute();
$numUsers = $stmt->rowCount();

if($numUsers > 0) {
	echo (json_encode(array('Errmessage' => 'EC Number already Exist')));
	exit;
}
else{
	$stmt = $conn->prepare('INSERT INTO employees (EC_number, emp_fname, emp_lname,address, birth_date,emp_sex,emp_role,password,phone,email,date_employed) VALUES (:EC_number, :emp_fname,:emp_lname,:address,:birth_date,:emp_sex,:emp_role,:password,:phone,:email,:date_employed)');
	
	$exeQuery=$stmt->execute(array(
	':EC_number' => $ec_number,
	':emp_fname' => $emp_fname,
	':emp_lname' => $emp_lname,
	':address' => $address,
	':birth_date' => $birth_date,
	':emp_sex' => $emp_sex,
	':emp_role' => $emp_role,
	':password' => $hash,
	':phone' => $phone,
	':email' => $email,
	':date_employed' => $date_employed
	));
	
	
	if($exeQuery){
		    // $data = $stmt->fetch(PDO::FETCH_ASSOC);
			echo "success";
			//  echo json_encode($data);
			//echo (json_encode(array('Success' => 'Your application has been sent please wait for your approval soon')));
			} 
			else{
				echo "No data send";
			}
	
}  



}catch(PDOException $e) {
echo $e->getMessage();
}
	
	