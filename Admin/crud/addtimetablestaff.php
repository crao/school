	<?php
	
	if (isset($_POST['SubmitTimetable'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$con = $crud->myconnect();

		$row_data = array();
	
		$chooseClass = $_POST['chooseClass'];
		$section = $_POST['section'];
		$time1 = $_POST['time1'];
		$time2  = $_POST['time2'];
		$time3 = $_POST['time3'];
		$time4  = $_POST['time4'];
		$time5 = $_POST['time5'];
		$time6  = $_POST['time6'];
		$time7 = $_POST['time7'];
		$time8  = $_POST['time8'];
		$time9 = $_POST['time9'];
		

		
		foreach($_POST['days'] as $row=>$days) { 
		
		$days=mysqli_real_escape_string($con,$days);

		$department1=mysqli_real_escape_string($con,($_POST['department1'][$row]));
		$fullName1=mysqli_real_escape_string($con,($_POST['fullName1'][$row]));
		$department2=mysqli_real_escape_string($con,($_POST['department2'][$row]));
		$fullName2=mysqli_real_escape_string($con,($_POST['fullName2'][$row]));
		$department3=mysqli_real_escape_string($con,($_POST['department3'][$row]));
		$fullName3=mysqli_real_escape_string($con,($_POST['fullName3'][$row]));
		$department4=mysqli_real_escape_string($con,($_POST['department4'][$row]));
		$fullName4=mysqli_real_escape_string($con,($_POST['fullName4'][$row]));
		$department5 = "Break";
		$fullName5 = "Break";
		$department6=mysqli_real_escape_string($con,($_POST['department6'][$row]));
		$fullName6=mysqli_real_escape_string($con,($_POST['fullName6'][$row]));
		$department7=mysqli_real_escape_string($con,($_POST['department7'][$row]));
		$fullName7=mysqli_real_escape_string($con,($_POST['fullName7'][$row]));
		$department8=mysqli_real_escape_string($con,($_POST['department8'][$row]));
		$fullName8=mysqli_real_escape_string($con,($_POST['fullName8'][$row]));
		$department9=mysqli_real_escape_string($con,($_POST['department9'][$row]));
		$fullName9=mysqli_real_escape_string($con,($_POST['fullName9'][$row]));
			
		
		$row_data[] = "('$chooseClass','$section','$days', '$time1', '$department1', '$fullName1', '$time2','$department2','$fullName2','$time3','$department3', '$fullName3','$time4','$department4','$fullName4','$time5','$department5', '$fullName5', '$time6','$department6','$fullName6','$time7','$department7', '$fullName7','$time8','$department8','$fullName8','$time9','$department9','$fullName9' )";
		}
	

		if (!empty($row_data)) {	
		$sql = 'INSERT INTO  staff_timetable(chooseClass,section,days, 1col, 1dep, 1name, 2col, 2dep, 2name,3col,3dep,3name,4col,4dep,4name,5col, 5dep, 5name, 6col, 6dep,6name, 7col,7dep,7name,8col,8dep,8name,9col,9dep,9name) VALUES '.implode

			(',', $row_data);
			$result = mysqli_query($con, $sql );
		
		
		}
		
		
		header("Location: ../createtimetable.php");	
		
	}

?>