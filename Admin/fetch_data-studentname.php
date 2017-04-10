<?php
if(isset($_POST['get_option']))
{

	$section = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  firstName,lastName, studid  FROM stu_admission  where section='$section'");
	
		foreach ($result as $res) {
			// echo "<option>".$res['firstName']." ".$res['lastName']." ".$res['studid']."</option>";
			echo "<option>".$res['firstName']." ".$res['lastName']."</option>";
				
		}
				
				
		 exit; 
}	


?>