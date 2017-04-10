	<?php
	 
	if (isset($_POST['SubmitLeaves'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
			
		$startDate = $crud->escape_string($_POST['startDate']);
		$endDate = $crud->escape_string($_POST['endDate']);
		$section = $crud->escape_string($_POST['section']);
		$studentName = $crud->escape_string($_POST['studentName']);
		$reason = $crud->escape_string($_POST['reason']);
		
		$numberDays =	round(abs(strtotime($startDate)-strtotime($endDate))/86400); // 86400 seconds in one day
		
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

		
		$result = $crud->execute("INSERT INTO  school_leaves (startDate, endDate,section,studentName,reason, numberDays) VALUES ('$startDate','$endDate', '$section', '$studentName','$reason','$numberDays')");
		
		$updatesql = $crud->execute("UPDATE `school_leaves` n JOIN  login_authority o ON n.studentName = o.fullName  SET  n.userID = o.username ");
				
	
	header("Location: ../createleaves.php");	
		
 }

?>