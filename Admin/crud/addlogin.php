<?php
	 
	if (isset($_POST['Submit'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		$username = $crud->escape_string($_POST['username']);
		$password = $crud->escape_string($_POST['password']);
		$first_name = $crud->escape_string($_POST['first_name']);
		$last_name = $crud->escape_string($_POST['last_name']);
		$gender = $crud->escape_string($_POST['gender']);
		$email = $crud->escape_string($_POST['email']);
		$mobile = $crud->escape_string($_POST['mobile']);
		$type = $crud->escape_string($_POST['type']);
		$authority = $crud->escape_string($_POST['authority']);

			
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
	
	if ($authority == "Student") {
	$result = $crud->getData("SELECT MAX(stusrno) as max_id FROM stu_admission");
									
				foreach ($result as $res) {
					$max_id=$res['max_id'];		
				}
									
				$username =  $max_id + 1;
				
				$username = "Stu" . $username;
				
	}								
	
	if ($authority == "Admin" or $authority == "Staff" ) {
	
	$result = $crud->getData("SELECT MAX(staffsrno) as max_id FROM staff_add");
									
				foreach ($result as $res) {
					$max_id=$res['max_id'];		
				}
									
				$username =  $max_id + 1;
				
				$username = "Staff" . $username;				
		}	
		
	$result = $crud->execute("INSERT INTO  login_authority (username, password,first_name,last_name,gender, email, mobile, type,authority,image) VALUES ('$username','$password', '$first_name', '$last_name','$gender','$email','$mobile', '$type','$authority','$imgData')");

	header("Location: ../adminindex2.php");	
		
 }

?>