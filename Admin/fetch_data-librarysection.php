<?php
if(isset($_POST['get_option']))
{

	$staffSrno2 = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  section  FROM  temp_staff_students  where staffId='$staffSrno2'");
	
		foreach ($result as $res) {
			
			echo "<option>".$res['section']."</option>";
				
		}
				
				
		 exit; 
}	


?>