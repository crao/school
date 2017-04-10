<?php
if(isset($_POST['get_option']))
{

	$staffSrno = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  fullName  FROM  temp_staff_students  where staffId='$staffSrno'");
	
		foreach ($result as $res) {
			
			echo "<option>".$res['fullName']."</option>";
				
		}
				
				
		 exit; 
}	


?>