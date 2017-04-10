	<?php
	
	if (isset($_POST['UpdateTimetable'])) {
		error_reporting("0");
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$con = $crud->myconnect();

		$row_data = array();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		$id = $_SESSION['id'];
		
		$i = 0;
		$j = 0;
		
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
		
		$days1 = array("MON","TUE","WED","THU","FRI","SAT");
		$count = 6;	

		
		foreach($_POST['days'] as $row=>$days) { 
		
		$days = array(mysqli_real_escape_string($con,$days));
		

		$department1 = array(mysqli_real_escape_string($con,($_POST['department1'][$row])));
		$fullName1 = array(mysqli_real_escape_string($con,($_POST['fullName1'][$row])));
		$department2 = array(mysqli_real_escape_string($con,($_POST['department2'][$row])));
		$fullName2 = array(mysqli_real_escape_string($con,($_POST['fullName2'][$row])));
		$department3 = array(mysqli_real_escape_string($con,($_POST['department3'][$row])));
		$fullName3 = array(mysqli_real_escape_string($con,($_POST['fullName3'][$row])));
		$department4 = array(mysqli_real_escape_string($con,($_POST['department4'][$row])));
		$fullName4 = array(mysqli_real_escape_string($con,($_POST['fullName4'][$row])));
		$department5 = array(mysqli_real_escape_string($con,($_POST['department5'][$row])));
		$fullName5 = array(mysqli_real_escape_string($con,($_POST['fullName5'][$row])));
		$department6 = array(mysqli_real_escape_string($con,($_POST['department6'][$row])));
		$fullName6 = array(mysqli_real_escape_string($con,($_POST['fullName6'][$row])));
		$department7 = array(mysqli_real_escape_string($con,($_POST['department7'][$row])));
		$fullName7 = array(mysqli_real_escape_string($con,($_POST['fullName7'][$row])));
		$department8 = array(mysqli_real_escape_string($con,($_POST['department8'][$row])));
		$fullName8 = array(mysqli_real_escape_string($con,($_POST['fullName8'][$row])));
		$department9 = array(mysqli_real_escape_string($con,($_POST['department9'][$row])));
		$fullName9 = array(mysqli_real_escape_string($con,($_POST['fullName9'][$row])));

		$sql1="UPDATE staff_timetable SET chooseClass='$chooseClass', section='$section', 1col='$time1',2col='$time2',3col='$time3',4col='$time4',5col='$time5',6col='$time6',7col='$time7',8col='$time8',9col='$time9',days='$days[$i]',1dep='$department1[$i]',1name='$fullName1[$i]', 2dep='$department2[$i]',2name='$fullName2[$i]', 3dep='$department3[$i]',3name='$fullName3[$i]', 4dep='$department4[$i]',4name='$fullName4[$i]', 5dep='$department5[$i]',5name='$fullName5[$i]', 6dep='$department6[$i]',6name='$fullName6[$i]', 7dep='$department7[$i]',7name='$fullName7[$i]', 8dep='$department8[$i]',8name='$fullName8[$i]', 9dep='$department9[$i]',9name='$fullName9[$i]'  WHERE section='$section' AND days='$days1[$j]'";
	
		$result = $crud->execute($sql1);
		
		
		$j = $j + 1;
		
		echo ($sql1."<p>");
		
		if ($j == $count) {break;}	
	
		}
		
	//	exit;   
			
		header("Location: ../updatetimetable.php?id=$id");
		
		
	}

?>