<?php
	 
	if (isset($_POST['UpdateSubmit'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
				 
echo		$id = $_SESSION['id'];
		
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


	$result = $crud->execute("UPDATE stu_fees_collection SET receiptNo = '$receiptNo', feesDate = '$feesDate' ,academicYear  = '$academicYear', paymentMode = '$paymentMode' ,guardianName = '$guardianName', class = '$class' , division = '$section', studentName = '$studentName',mobileNumber = '$mobileNumber',emailID = '$emailID', remark = '$remark', particular = '$particular' ,feesAmount  = '$feesAmount', sms = '$Sms' ,email = '$Email', web = '$Web'  WHERE fee_receipt = '$id'");

	header("Location: ../viewfees.php");	
		
 }

?>