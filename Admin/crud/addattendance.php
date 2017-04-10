	<?php
	 
	if (isset($_POST['SubmitPresenty'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$con = $crud->myconnect();

		$row_data = array();
		
		foreach($_POST['studid'] as $row=>$studid) { 
		
		$studid=mysqli_real_escape_string($con,$studid);
		$firstName=mysqli_real_escape_string($con,($_POST['firstName'][$row]));
		$lastName=mysqli_real_escape_string($con,($_POST['lastName'][$row]));
		$chooseClass=mysqli_real_escape_string($con,($_POST['chooseClass'][$row]));
		$section=mysqli_real_escape_string($con,($_POST['section'][$row]));
		$attendance=mysqli_real_escape_string($con,($_POST['attendance'][$row]));
		$remark=mysqli_real_escape_string($con,($_POST['remark'][$row]));
		
		$attDate=mysqli_real_escape_string($con,($_POST['attDate'][$row]));
		$academicYear=mysqli_real_escape_string($con,($_POST['academicYear'][$row]));
		
		$row_data[] = "('$studid', '$firstName', '$lastName', '$attendance', '$remark', '$attDate','$academicYear','$chooseClass', '$section' )";
		}

		if (!empty($row_data)) {	
		$sql = 'INSERT INTO  stu_attendance(studid, firstName,lastName,attendance, remark, attDate, academicYear,class,section) VALUES '.implode

			(',', $row_data);
			$result = mysqli_query($con, $sql );
		
		}

	    $updatesql = "UPDATE `stu_attendance` SET `fullName` = CONCAT_WS(' ', `firstName`, `lastName`)";
		$result1 = mysqli_query($con, $updatesql );
		
		header("Location: ../createattendance.php");	
		
	}

?>