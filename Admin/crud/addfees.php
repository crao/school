	<?php
	 
	if (isset($_POST['Submit'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$checkBox = implode(',', $_POST['alert']);
		
		if (strpos($checkBox,'SMS') !== false) {
			$Sms = 'SMS';
		} else { $Sms = ''; }
		

		if (strpos($checkBox,'Email') !== false) {
			$Email = 'Email';
		} else { $Email = ''; }

		if (strpos($checkBox,'Web') !== false) {
			$Web = 'Web';
		} else { $Web = ''; }	
			
		$receiptNo = $crud->escape_string($_POST['receiptNo']);
		$feesDate = $crud->escape_string($_POST['feesDate']);
		$academicYear = $crud->escape_string($_POST['academicYear']);
		$paymentMode = $crud->escape_string($_POST['paymentMode']);	 
		$guardianName = $crud->escape_string($_POST['guardianName']);	 		
		$class = $crud->escape_string($_POST['class']);
		$section = $crud->escape_string($_POST['section']);
		$studentName = $crud->escape_string($_POST['studentName']);
		$mobileNumber = $crud->escape_string($_POST['mobileNumber']);
		$emailID = $crud->escape_string($_POST['emailID']);		
		$remark = $crud->escape_string($_POST['remark']);
		$particular = $crud->escape_string($_POST['particular']);		
		$feesAmount = $crud->escape_string($_POST['feesAmount']);
		
	
	
	
	$result = $crud->execute("INSERT INTO  stu_fees_collection (receiptNo, feesDate,academicYear,paymentMode,guardianName, class, division, studentName,mobileNumber,emailID,remark, particular,feesAmount,sms,email,web) VALUES ('$receiptNo','$feesDate', '$academicYear', '$paymentMode','$guardianName','$class','$section', '$studentName','$mobileNumber','$emailID','$remark','$particular','$feesAmount','$Sms','$Email','$Web')");

	$updatesql = $crud->execute("UPDATE `stu_fees_collection` n JOIN  login_authority o ON n.studentName = o.fullName  SET  n.userID = o.username ");
	
	header("Location: ../adminindex2.php");	
		
 }

?>