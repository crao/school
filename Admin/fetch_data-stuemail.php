<?php
if(isset($_POST['get_option']))
{

	$section2 = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  emailId FROM stu_admission  where section='$section2'");
	
		foreach ($result as $res) {
			 echo "<option>".$res['emailId']."</option>";
		
		}
		
		 exit; 
}	


?>