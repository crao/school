	<?php
	 
	if (isset($_POST['SubmitHolidays'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
			
		$startDate = $crud->escape_string($_POST['startDate']);

		$endDate = $crud->escape_string($_POST['endDate']);

		$occasion = $crud->escape_string($_POST['occasion']);
		$details = $crud->escape_string($_POST['details']);
		
		$numberDays =	round(abs(strtotime($startDate)-strtotime($endDate))/86400);
		
	
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
		
				
		$result = $crud->execute("INSERT INTO  school_holidays (startDate, endDate,occasion,details,numberDays) VALUES ('$startDate','$endDate', '$occasion', '$details','$numberDays')");

	
	header("Location: ../createaholidays.php");	
		
 }

?>