<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		 
		
		$stusrno = $_GET['id'];
		
		$table = "stu_admission";
		
		$crud->execute("DELETE FROM $table WHERE stusrno = $stusrno");
	
		header("Location: ../adminindex2.php");	
		
 

?>