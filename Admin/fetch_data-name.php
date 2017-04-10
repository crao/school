<?php
if(isset($_POST['get_option']))
{

	$state = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT  pickpoint FROM transport_route  where route='$state'");
	
		foreach ($result as $res) {
			 echo "<option>".$res['pickpoint']."</option>";
		
		}
		
		 exit; 
}	


?>