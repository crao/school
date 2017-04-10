<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		 
		
		$stusrno = $_GET['id'];
		
		$table = "library_book";
		
		$crud->execute("DELETE FROM $table WHERE srno = $stusrno");
	
		header("Location: ../updatebooks.php");	
		
 

?>