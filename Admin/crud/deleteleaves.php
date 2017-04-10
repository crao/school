<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		 
		
		$srnoLeaves = $_GET['id'];
		
		$table = "school_leaves";
		
		$crud->execute("DELETE FROM $table WHERE srnoLeaves = $srnoLeaves");
	
		header("Location: ../createleaves.php");	
		
 

?>