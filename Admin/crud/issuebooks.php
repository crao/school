	<?php

		//   Issue Book Script
		
		if (isset($_POST['SubmitIssueBook'])) {
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
			
		$bookName = $crud->escape_string($_POST['bookName']);
		$author = $crud->escape_string($_POST['author']);
		$bookType = $crud->escape_string($_POST['bookType']);
		$category = $crud->escape_string($_POST['category']);
		$accessionNumber = $crud->escape_string($_POST['accessionNumber']);
		$issue_date = $crud->escape_string($_POST['issue_date']);
		$due_date = $crud->escape_string($_POST['due_date']);
		$staff_stu_Id1 = $crud->escape_string($_POST['staff_stu_Id']);
		$fullName1 = $crud->escape_string($_POST['fullName']);
		$section1 = $crud->escape_string($_POST['section']);
		$class = $crud->escape_string($_POST['class']);
		$fine = $crud->escape_string($_POST['fine']);
		
	
		
		
				
		$result = $crud->execute("INSERT INTO  library_book_issue (bookName, author,bookType, category, accessionNumber,issue_date,due_date,staff_stu_Id,fullName,section,fine) VALUES ('$bookName','$author','$bookType','$category', '$accessionNumber','$issue_date', '$due_date', '$staff_stu_Id1','$fullName1', '$section1','$fine')");
		
		$result = $crud->execute("UPDATE library_book SET issue_date = '$issue_date', due_date = '$due_date', staff_stu_Id = '$staff_stu_Id1', fullName = '$fullName1', section = '$section1', class = '$class' WHERE accessionNumber = '$accessionNumber' ");

	
	header("Location: ../createissuebook.php");	
		
		
		}
		
		//   Return Book Script
		
		if (isset($_POST['SubmitReturnBook'])) {
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
			
		$accessionNumber = $crud->escape_string($_POST['accessionNumber']);
		
		$fine = $crud->escape_string($_POST['fine']);
		$return_date = date("d/m/Y");
	
		
		
				
		$result = $crud->execute("UPDATE  library_book_issue SET fine = '$fine', return_date='$return_date' WHERE accessionNumber = '$accessionNumber' and return_date = ''");
		
		$result = $crud->execute("UPDATE library_book SET issue_date = '', due_date = '', staff_stu_Id = '', fullName = '', section = '', class = '' WHERE accessionNumber = '$accessionNumber'");
		
		
	
	header("Location: ../createissuebook.php");	
		
		
		}
?>