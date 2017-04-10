<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_GET['id'];
		
		
		$result = $crud->getData("SELECT * FROM  stu_fees_collection WHERE fee_receipt = '$id'");	

		foreach ($result as $res) {
			  
		$receiptNo = $res['receiptNo'];		
		$feesDate = $res['feesDate'];
		$academicYear = $res['academicYear'];
		$paymentMode = $res['paymentMode'];
		$guardianName = $res['guardianName'];
		$class = $res['class'];	 
		$division = $res['division'];	 		
		$studentName = $res['studentName'];
		$mobileNumber	= $res['mobileNumber'];
		$emailID = $res['emailID'];
		$particular = $res['particular'];
		$feesAmount = $res['feesAmount'];
		$remark = $res['remark'];		
			  
		}	
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Student Fees</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../bootstrap/js/bootstrap.min.js"></script>

<head>

<script>
	
	html, body {
    height: 100%;
	
	p.paragrpahs {
    height: 100%;
}

	p.paragrpahs:before {
    content: '';
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}
}
</script>

</head>
<body>


	
	 <div class="row">
				
		<div id="dialog" style="display: none;">
		
		<!-- This will not print -->
		<div id="donotprintdiv" style="width: 100%;height: 70px; text-align:center;"> 
		<p>
		<input type="submit" value="Print" name="Submit" class="btn btn-primary" onclick="javascript:printDiv('printablediv')">
		
		<input type="submit" value="Return" name="Submit" class="btn btn-primary" onclick="location.href = 'http://localhost/School%20ERP/Admin/viewfees.php'">

		</div> 
	
	<!-- This will Print the division -->
	<div id="printablediv" style="width: 100%; margin-left:30px;">
				
				<span style="font-color: blue"><h3>&nbsp;&nbsp;Student Fees</h3></span> <br>
		
				<p>
				
				<div class="col-sm-6"><label for="sel1">Receipt Number :</label>
				<?php echo $receiptNo  ;?> <p> </div> 
				
				<div class="col-sm-6"><label for="sel1">Receipt Date :</label> 
				<?php echo $feesDate ;?> <p>	</div> 
				
				<div class="col-sm-6">
				<label for="sel1">Student Name :</label> 
				<?php echo $studentName ;?> <p> </div> 
				
				<div class="col-sm-6"><label for="sel1">Guardian Name :</label> 
				<?php echo $guardianName ;?> <p>  </div> 

				<div class="col-sm-6"><label for="sel1">Division :</label> 
				<?php echo $division ;?> <p>  </div> 
				
				<div class="col-sm-6"><label for="sel1">Academic Year :</label> 
				<?php echo $academicYear ;?> <p> </div> 
				
				
				
				<div class="col-sm-6"><label for="sel1">Payment Mode  :</label> 
				<?php echo $paymentMode ;?> <p>  </div> 
				
				<div class="col-sm-6"><label for="sel1">Mobile Number :</label> 
				<?php echo $mobileNumber ;?> <p>  </div>
				
				<div class="col-sm-6"><label for="sel1">Particular  :</label>
				<?php echo $particular; ?> <p> </div> 
				
				<div class="col-sm-6"><label for="sel1">Fees Amount :</label> 
				<?php echo "Rs. ". $feesAmount   ;?> <p>	</div>

				<div class="col-sm-6"><label for="sel1">Remark :</label> 
				<?php echo $remark    ;?> <p>	</div>	
				
				
				
			
				
	</div>
	</div>			
	</div>
	
	
 
 <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
 <script src="../../bootstrap/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "View Student Fees",
            width: 900,
            height: 650
        });
      	$(window).load(function(){
         $('#dialog').dialog('open');
    });

    });
	
</script>

<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
			
			document.getElementById('header').style.display = 'none';
			document.getElementById('footer').style.display = 'none';

          
        }
    </script>
	
		
 </body>
 </html>
