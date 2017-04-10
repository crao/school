	<?php
	 
	if (isset($_POST['SubmitUpdateLeaves'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_SESSION['id'];	
		$startDate = $crud->escape_string($_POST['startDate']);
		$endDate = $crud->escape_string($_POST['endDate']);
		$section = $crud->escape_string($_POST['section']);
		$studentName = $crud->escape_string($_POST['studentName']);
		$reason = $crud->escape_string($_POST['reason']);

		
		$startTimeStamp = strtotime($startDate);
		$endTimeStamp = strtotime($endDate);

		$timeDiff = abs($endTimeStamp - $startTimeStamp);

		$numberDays = $timeDiff/86400;  // 86400 seconds in one day
	
		if ($numberDays < 1) {
		$numberDays = intval($numberDays+1);
		 $numberDays = $numberDays. " Day";
		}
		else {
		$numberDays = intval($numberDays+1);
		 $numberDays = $numberDays. " Days";	
		}
		
		$startDate = date("d/m/Y", strtotime($startDate));
		$endDate   = date("d/m/Y", strtotime($endDate));

		$result = $crud->execute("UPDATE school_leaves  SET startDate = '$startDate', endDate = '$endDate',section = '$section',studentName = '$studentName', reason = '$reason',numberDays = '$numberDays' WHERE srnoLeaves = '$id'");

	
	header("Location: ../createleaves.php");	
		
 }
 
 // UPDATE `stu_attendance` SET `fullName` = CONCAT_WS(' ', `firstName`, `lastName`);

?>