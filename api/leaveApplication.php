<?php

    require_once '../inc/database.php';

   		$empID = $_POST['empID'];
		$leaveCode = $_POST['leaveCode'];
		$leaveFormat = $_POST['leaveFormat'];
		$leaveapplied = $_POST['leaveapplied'];
		$datefrom = $_POST['datefrom'];
		$dateTo = $_POST['dateTo'];
		$leaveDate = $_POST['leaveDate'];
		$leaveEndDate = $_POST['leaveEndDate'];
		$numOdDays = $_POST['numOdDays'];
		$reasonForLeave = $_POST['reasonForLeave'];
        
        try {
            $stmt = $conn->prepare('INSERT INTO leaveapplication (empID, leaveCode, leaveFormat,leaveapplied, 
            datefrom,dateTo,leaveDate,leaveEndDate,numOdDays,reasonForLeave)
             VALUES (:empID, :leaveCode,:leaveFormat,:leaveapplied,:datefrom,
             :dateTo,:leaveDate,:leaveEndDate,:numOdDays,:reasonForLeave)');
                
                $exeQuery=$stmt->execute(array(
                ':empID' => $empID,
                ':leaveCode' => $leaveCode,
                ':leaveFormat' => $leaveFormat,
                ':leaveapplied' => $leaveapplied,
                ':datefrom' => $datefrom,
                ':dateTo' => $dateTo,
                ':leaveDate' => $leaveDate,
                ':leaveEndDate' => $leaveEndDate,
                ':numOdDays' => $numOdDays,
                ':reasonForLeave' => $reasonForLeave
                ));

                if($exeQuery){
			     echo (json_encode(array('Success' => 'Your application has been sent please wait for your approval soon')));
			} 
			else{
                echo (json_encode(array('Error' => 'Error trying to proccess your leave application please contact IT Department')));

			}

        }catch(PDOException $e) {
        echo $e->getMessage();
        }