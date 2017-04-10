	<?php
	 
	if (isset($_POST['SubmitUpdateHolidays'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_SESSION['id'];	
		$startDate = $crud->escape_string($_POST['startDate']);
		$endDate = $crud->escape_string($_POST['endDate']);
		$occasion = $crud->escape_string($_POST['occasion']);
		$details = $crud->escape_string($_POST['details']);
		
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

		
		$result = $crud->execute("UPDATE school_holidays  SET startDate = '$startDate', endDate = '$endDate',occasion = '$occasion',details = '$details',numberDays = '$numberDays' WHERE srno = '$id'");

	
	header("Location: ../createaholidays.php");	
		
 }
// UPDATE `stu_attendance` SET `fullName` = CONCAT_WS(' ', `firstName`, `lastName`);
?>