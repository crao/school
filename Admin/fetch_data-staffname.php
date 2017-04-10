<?php
if(isset($_POST['get_option']))
{

	$department = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  fullName  FROM  staff_add  where department='$department'");
	
		foreach ($result as $res) {
			// echo "<option>".$res['firstName']." ".$res['lastName']." ".$res['studid']."</option>";
			echo "<option>".$res['fullName']."</option>";
				
		}
				
				
		 exit; 
}	


?>