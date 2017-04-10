<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
				 
		
		$fee_receipt = $_GET['id'];
		
		$table = "stu_fees_collection";
		
		$crud->execute("DELETE FROM $table WHERE fee_receipt = $fee_receipt");
	
		header("Location: ../adminindex2.php");	
		
 
?>