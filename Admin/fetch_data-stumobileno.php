<?php
if(isset($_POST['get_option']))
{

	$section1 = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  mobSms FROM stu_admission  where section='$section1'");
	
		foreach ($result as $res) {
			 echo "<option>".$res['mobSms']."</option>";
		
		}
		
		 exit; 
}	


?>