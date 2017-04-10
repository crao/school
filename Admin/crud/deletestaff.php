<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		 
		
		$staffSrno = $_GET['id'];
		
		$table = "staff_add";
		
		$crud->execute("DELETE FROM $table WHERE staffSrno = $staffSrno");
	
		header("Location: ../adminindex2.php");	
		
 

?>