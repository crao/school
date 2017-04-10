<?php
if(isset($_POST['get_option']))
{

	$state1 = $_POST['get_option'];
	
	include_once("classes/Crud.php");
	
	$crud = new Crud();
	
	$result = $crud->getData("SELECT drivername FROM  transport_vehicle  where vroute='$state1'");
	
    	foreach ($result as $res) {
			 echo "<option>".$res['drivername']."</option>";
		
		}
		
		 exit; 
}	

?>
