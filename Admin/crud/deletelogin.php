<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_GET['id'];
		
		$table = "login_authority";
		
		$crud->delete($id, $table);
	
		header("Location: ../adminindex2.php");	
		
 

?>