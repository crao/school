<?php
	 
	if (isset($_POST['UpdateSubmit'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
				 
		$id = $_SESSION['id'];
		$dateOfJoining = $crud->escape_string($_POST['dateOfJoining']);
		$pre_title = $crud->escape_string($_POST['pre_title']);
		$firstName = $crud->escape_string($_POST['firstName']);
		$middleName = $crud->escape_string($_POST['middleName']);
		$lastName = $crud->escape_string($_POST['lastName']);	 
		$academicYear = $crud->escape_string($_POST['academicYear']);	 		
		$gender = $crud->escape_string($_POST['gender']);
		$dateOfBirth = $crud->escape_string($_POST['dateOfBirth']);
		$staff = $crud->escape_string($_POST['staff']);
		$department = $crud->escape_string($_POST['department']);
		$postApplied = $crud->escape_string($_POST['postApplied']);		
		$chooseClass = $crud->escape_string($_POST['chooseClass']);
		$section = $crud->escape_string($_POST['section']);		
		$emailId = $crud->escape_string($_POST['emailId']);
		$mobileNumber = $crud->escape_string($_POST['mobileNumber']);
		$userName = $crud->escape_string($_POST['userName']);
		$userPassword = $crud->escape_string($_POST['userPassword']);
		$userStatus = $crud->escape_string($_POST['userStatus']);
		$documentDeposited = $crud->escape_string($_POST['documentDeposited']);
		$prevPackage = $crud->escape_string($_POST['prevPackage']);
		$currentPackage = $crud->escape_string($_POST['currentPackage']);
		$religion = $crud->escape_string($_POST['religion']);
		$caste = $crud->escape_string($_POST['caste']);
		$subCaste = $crud->escape_string($_POST['subCaste']);
		$staffAddress = $crud->escape_string($_POST['staffAddress']);
		$city = $crud->escape_string($_POST['city']); 
		$residanceNumber = $crud->escape_string($_POST['residanceNumber']);
		$mobSms = $crud->escape_string($_POST['mobSms']);
		$remarks = $crud->escape_string($_POST['remarks']);
		$transportRoute = $crud->escape_string($_POST['transportRoute']);
		$pickupPoint = $crud->escape_string($_POST['pickupPoint']);
		$vehicleNumber = $crud->escape_string($_POST['vehicleNumber']);
		$vehicleDriver = $crud->escape_string($_POST['vehicleDriver']);

			
	if(is_uploaded_file($_FILES['filename']['tmp_name'])){
	
		
	$maxsize=$crud->escape_string($_POST['MAX_FILE_SIZE']);		
	$size=$crud->escape_string($_FILES['filename']['size']);
	
	
	if($size>$maxsize){
	echo "Maximum Size is ".$maxsize."<br>";
	echo "Size of Uploaded file is ".$size."<br>";
	exit("Maximum Size Limit Excessed");
	}
	
	// getting the image info..
	$imgdetails = getimagesize($_FILES['filename']['tmp_name']);
	$mime_type = $imgdetails['mime']; 
	//print_r($imgdetails);
		
	// checking for valid image type
	if(($mime_type=='image/jpeg')||($mime_type=='image/gif') || ($mime_type=='image/png')){
	  // checking for size yet again
	  if($size<$maxsize){
	    $filename=$_FILES['filename']['name'];	
	    $imgData =addslashes (file_get_contents($_FILES['filename']['tmp_name']));
			   
				
	  }else{
	    echo "<font class='error'>Image to be uploaded is too large..Error uploading the image!!</font>";
	  }
	}else{
	  echo "<font class='error'>Not a valid image file! Please upload jpeg or gif image.</font>";
	}
	
	} else {
	
	$result = $crud->getData("SELECT * FROM  defaultimg WHERE gender = '$gender'");	

	foreach ($result as $res) {
			  
			  $imgData=$res['imgData']; 
			  
		}	
	
	$imgData =addslashes($imgData);
	
	}
	
	$result = $crud->execute("UPDATE staff_add SET dateOfJoining = '$dateOfJoining', pre_title = '$pre_title' ,firstName  = '$firstName', middleName = '$middleName' ,lastName = '$lastName', academicYear = '$academicYear' , gender = '$gender', image = '$imgData',dateOfBirth = '$dateOfBirth',staff = '$staff', department = '$department', postApplied = '$postApplied', chooseClass = '$chooseClass' ,section  = '$section', emailId = '$emailId' , mobileNumber = '$mobileNumber', userName = '$userName',userPassword = '$userPassword', userStatus = '$userStatus', documentDeposited = '$documentDeposited',prevPackage = '$prevPackage', currentPackage = '$currentPackage', religion = '$religion' ,caste  = '$caste', subCaste = '$subCaste' ,staffAddress = '$staffAddress', city = '$city',residanceNumber = '$residanceNumber',mobSms = '$mobSms', remarks = '$remarks',  transportRoute = '$transportRoute', pickupPoint = '$pickupPoint', vehicleNumber = '$vehicleNumber',vehicleDriver = '$vehicleDriver' WHERE staffSrno = '$id'");

	header("Location: http://localhost/School%20ERP/Admin/viewstaff.php");	
		
 }

?>