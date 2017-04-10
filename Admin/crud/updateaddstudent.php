<?php
	 
	if (isset($_POST['UpdateSubmit'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
				 
		$id = $_SESSION['id'];
		$admissiondate = $crud->escape_string($_POST['admissiondate']);
		$pre_title = $crud->escape_string($_POST['pre_title']);
		$firstName = $crud->escape_string($_POST['firstName']);
		$middleName = $crud->escape_string($_POST['middleName']);
		$lastName = $crud->escape_string($_POST['lastName']);	 
		$academicYear = $crud->escape_string($_POST['academicYear']);	 		
		$gender = $crud->escape_string($_POST['gender']);
		$dateOfBirth = $crud->escape_string($_POST['dateOfBirth']);
		$bloodGroup = $crud->escape_string($_POST['bloodGroup']);
		$medicalHistory = $crud->escape_string($_POST['medicalHistory']); 
		$chooseClass = $crud->escape_string($_POST['chooseClass']);
		$section = $crud->escape_string($_POST['section']);		
		$fatherName = $crud->escape_string($_POST['fatherName']);
		$motherName = $crud->escape_string($_POST['motherName']);
		$emailId = $crud->escape_string($_POST['emailId']);
		$mobileNumber = $crud->escape_string($_POST['mobileNumber']);
		$userName = $crud->escape_string($_POST['userName']);
		$userPassword = $crud->escape_string($_POST['userPassword']);
		$userStatus = $crud->escape_string($_POST['userStatus']);
		$documentDeposited = $crud->escape_string($_POST['documentDeposited']);
		$physicallyHandicaped = $crud->escape_string($_POST['physicallyHandicaped']);
		$hobbies = $crud->escape_string($_POST['hobbies']);
		$religion = $crud->escape_string($_POST['religion']);
		$caste = $crud->escape_string($_POST['caste']);
		$subCaste = $crud->escape_string($_POST['subCaste']);
		$stuAddress = $crud->escape_string($_POST['stuAddress']);
		$country = $crud->escape_string($_POST['country']);
		$state = $crud->escape_string($_POST['state']);
		$city = $crud->escape_string($_POST['city']); 
		$residanceNumber = $crud->escape_string($_POST['residanceNumber']);
		$mobSms = $crud->escape_string($_POST['mobSms']);
		$prevSchool = $crud->escape_string($_POST['prevSchool']);
		$prevPercent = $crud->escape_string($_POST['prevPercent']);
		$prevYearPass = $crud->escape_string($_POST['prevYearPass']);
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

	$result = $crud->execute("UPDATE stu_admission SET admissiondate = '$admissiondate', pre_title = '$pre_title' ,firstName  = '$firstName', middleName = '$middleName' ,lastName = '$lastName', academicYear = '$academicYear' , gender = '$gender', image = '$imgData',dateOfBirth = '$dateOfBirth',bloodGroup = '$bloodGroup', medicalHistory = '$medicalHistory', chooseClass = '$chooseClass' ,section  = '$section', fatherName = '$fatherName' ,motherName = '$motherName', emailId = '$emailId' , mobileNumber = '$mobileNumber', userName = '$userName',userPassword = '$userPassword',userStatus = '$userStatus',documentDeposited = '$documentDeposited',physicallyHandicaped = '$physicallyHandicaped', hobbies = '$hobbies', religion = '$religion' ,caste  = '$caste', subCaste = '$subCaste' ,stuAddress = '$stuAddress', country = '$country' , state = '$state', city = '$city',residanceNumber = '$residanceNumber',mobSms = '$mobSms', prevPercent = '$prevPercent', prevYearPass = '$prevYearPass' , transportRoute = '$transportRoute', pickupPoint = '$pickupPoint',vehicleNumber = '$vehicleNumber',vehicleDriver = '$vehicleDriver' WHERE stusrno = '$id'");

	header("Location: ../adminindex2.php");	
		
 }

?>