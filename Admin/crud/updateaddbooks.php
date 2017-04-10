	<?php
	 
	if (isset($_POST['SubmitUpdateBooks'])) {
	
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_SESSION['id'];	
			
		$bookName = $crud->escape_string($_POST['bookName']);
		$author = $crud->escape_string($_POST['author']);
		$billNo = $crud->escape_string($_POST['billNo']);
		$billDate = $crud->escape_string($_POST['billDate']);

		$bookType = $crud->escape_string($_POST['bookType']);
		$category = $crud->escape_string($_POST['category']);
		$accessionNumber = $crud->escape_string($_POST['accessionNumber']);
		$bookEdition = $crud->escape_string($_POST['bookEdition']);
		
		$yearofPublication = $crud->escape_string($_POST['yearofPublication']);
		$bookPages = $crud->escape_string($_POST['bookPages']);
		$bookCost = $crud->escape_string($_POST['bookCost']);
		$bookPublication = $crud->escape_string($_POST['bookPublication']);
		
		$libraryShelf = $crud->escape_string($_POST['libraryShelf']);
		$coppies = $crud->escape_string($_POST['coppies']);
		$suplierName = $crud->escape_string($_POST['suplierName']);
		$descriptionNote = $crud->escape_string($_POST['descriptionNote']);
	
		
		
	
		
		
				
		$result = $crud->execute("UPDATE library_book SET bookName = '$bookName', author = '$author', billNo = '$billNo',billDate = '$billDate',bookType = '$bookType', category = '$category', accessionNumber = '$accessionNumber',bookEdition = '$bookEdition',yearofPublication = '$yearofPublication',bookPages = '$bookPages', bookCost = '$bookCost',bookPublication = '$bookPublication',libraryShelf = '$libraryShelf',coppies = '$coppies', suplierName = '$suplierName',descriptionNote = '$descriptionNote' WHERE srno = '$id'");
		
		
	
	header("Location: ../updatebooks.php");	
		
 }

?>