<?php
require_once '../inc/database.php';

try {
	$stmt = $conn->prepare('select*from employees');
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_OBJ);
	echo json_encode($result);
}
catch(PDOException $e) {
	echo $e->getMessage();
}