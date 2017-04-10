	<?php
	 
	if (isset($_POST['SubmitPresentyStaff'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$con = $crud->myconnect();

		$row_data = array();
	
		foreach($_POST['staffId'] as $row=>$staffId) { 
		
		$staffId=mysqli_real_escape_string($con,$staffId);
		$firstName=mysqli_real_escape_string($con,($_POST['firstName'][$row]));
		$lastName=mysqli_real_escape_string($con,($_POST['lastName'][$row]));
		$department=mysqli_real_escape_string($con,($_POST['department'][$row]));
		$section=mysqli_real_escape_string($con,($_POST['section'][$row]));
		$attendance=mysqli_real_escape_string($con,($_POST['attendance'][$row]));
		$remark=mysqli_real_escape_string($con,($_POST['remark'][$row]));
		
		$attDate=mysqli_real_escape_string($con,($_POST['attDate'][$row]));
		$academicYear=mysqli_real_escape_string($con,($_POST['academicYear'][$row]));
		
		$row_data[] = "('$staffId', '$firstName', '$lastName', '$attendance', '$remark', '$attDate','$academicYear','$department', '$section' )";
		}

		if (!empty($row_data)) {	
		$sql = 'INSERT INTO  staff_attendance(staffId, firstName,lastName,attendance, remark, attDate, academicYear,department,section) VALUES '.implode

			(',', $row_data);
			$result = mysqli_query($con, $sql );
		
		}

	    $updatesql = "UPDATE `staff_attendance` SET `fullName` = CONCAT_WS(' ', `firstName`, `lastName`)";
		$result1 = mysqli_query($con, $updatesql );
		
		header("Location: ../createattendancestaff.php");	
		
	}

?>