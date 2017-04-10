<?php
if(isset($_POST['get_option']))
{

	$staffSrno1 = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  chooseClass  FROM  temp_staff_students  where staffId='$staffSrno1'");
	
		foreach ($result as $res) {
			
			echo "<option>".$res['chooseClass']."</option>";
				
		}
				
				
		 exit; 
}	


?>