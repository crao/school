<?php
		
		include_once("Admin/classes/Crud.php");

		$crud = new Crud();
		
		$spassword=$crud->escape_string($_POST['mpassword']);
		$suser=$crud->escape_string($_POST['muser']);
			

		$result = $crud->getData("SELECT * FROM  login_authority WHERE password = '$spassword' AND username = '$suser'");
	    
		foreach ($result as $res) {
			  $mpassword=$res['password'];
			  $muser=$res['username']; 
			  $mauthority=$res['authority'];
			  $mfirst_name=$res['first_name'];
			  $mlast_name=$res['last_name'];

		}

		if ($spassword == $mpassword AND $suser == $muser AND $mauthority == "Admin" )
                {
				session_start();
				$_SESSION['userid'] = $muser;
				$_SESSION['username'] = $mfirst_name.' '.$mlast_name;

			    header('Location: Admin/adminindex2.php');
        	 
                }
		
		else if ($spassword == $mpassword AND $suser == $muser AND $mauthority == "Staff" )
		{
				session_start();
				$_SESSION['userid'] = $muser;
				$_SESSION['username'] = $mfirst_name.' '.$mlast_name;

				header('Location: Admin/adminindex2.php');
				
			  // header('Location: Staff/staffindex2.php');
			   
		}
		
		else if ($spassword == $mpassword AND $suser == $muser AND $mauthority == "Student" )
		{
				session_start();
				$_SESSION['userid'] = $muser;
				$_SESSION['username'] = $mfirst_name.' '.$mlast_name;

			   header('Location: Student/studentindex2.php');
		}
	    
		else {
		
				header('Location: index.html');
		}	  		
?>