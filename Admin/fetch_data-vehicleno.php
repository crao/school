<?php

if(isset($_POST['get_option']))
{

	$state2 = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT vehicleno FROM  transport_vehicle  where vroute='$state2'");
	
		foreach ($result as $res) {
			 echo "<option>".$res['vehicleno']."</option>";
		
		}
		
		 exit; 
}	

?>