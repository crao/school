<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_GET['id'];
		
		
		$result = $crud->getData("SELECT * FROM  stu_admission WHERE stusrno = '$id'");	

		foreach ($result as $res) {
			  
		$studid = $res['studid'];		
		$admissiondate = $res['admissiondate'];
		$pre_title = $res['pre_title'];
		$firstName = $res['firstName'];
		$middleName = $res['middleName'];
		$lastName = $res['lastName'];	 
		$academicYear = $res['academicYear'];	 		
		$gender = $res['gender'];
		$image	= $res['image'];
		$dateOfBirth = $res['dateOfBirth'];
		$bloodGroup = $res['bloodGroup'];
		$medicalHistory = $res['medicalHistory']; 
		$chooseClass = $res['chooseClass'];
		$section = $res['section'];		
		$fatherName = $res['fatherName'];
		$motherName = $res['motherName'];
		$emailId = $res['emailId'];
		$mobileNumber = $res['mobileNumber'];
		$userName = $res['userName'];
		$userPassword = $res['userPassword'];
		$userStatus = $res['userStatus'];
		$documentDeposited = $res['documentDeposited'];
		$physicallyHandicaped = $res['physicallyHandicaped'];
		$hobbies = $res['hobbies'];
		$religion = $res['religion'];
		$caste = $res['caste'];
		$subCaste = $res['subCaste'];
		$stuAddress = $res['stuAddress'];
		$country = $res['country'];
		$state = $res['state'];
		$city = $res['city']; 
		$residanceNumber = $res['residanceNumber'];
		$mobSms = $res['mobSms'];
		$prevSchool = $res['prevSchool'];
		$prevPercent = $res['prevPercent'];
		$prevYearPass = $res['prevYearPass'];
		$transportRoute = $res['transportRoute'];
		$pickupPoint = $res['pickupPoint'];
		$vehicleNumber = $res['vehicleNumber'];
		$vehicleDriver = $res['vehicleDriver'];			  
			  
		}	
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Student Data</title>
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

<style>
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.clearfix:after {
     visibility: hidden;
     display: block;
     font-size: 0;
     content: " ";
     clear: both;
     height: 0;
     }
.clearfix { display: inline-block; }
* html .clearfix { height: 1%; }
.clearfix { display: block; }

.row {
    margin: 0 auto;
    max-width: 1000px;
    width: 100%;
}

.column {
    float: left;
    padding: 0 15px;
}

.span_4 {
    width: 50.00%;
}

#rcorners2 {
    border-radius: 25px;
    border: 2px solid #73AD21;
    padding: 20px; 
    width: 780px;
    height: 900px;    
}


</style>

</head>
<body>


	
	 <div class="row">
				
		<div id="dialog" style="display: none; " >
		
		<!-- This will not print -->
		<div id="donotprintdiv" style="width: 100%;height: 70px; text-align:center;"> 
		<p>
		<input type="submit" value="Print" name="Submit" class="btn btn-primary" onclick="javascript:printDiv('printablediv')">
		
		<input type="submit" value="Return" name="Submit" class="btn btn-primary" onclick="location.href = 'http://localhost/School%20ERP/Admin/viewstudent.php'">

		</div> 
	
	<!-- This will Print the division -->
	
	
	
	<div id="printablediv" style="width: 100%; margin-left:30px;">
	
	<div id="rcorners2">
				
				<h3 style="margin-left:250px;align:center">Student Profile</h3> <br>	
				
				<div class="row clearfix">
				
				<div class="span_4 column">
					<img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" height="90" width="110"/> <p>
				</div>
				
				<div class="span_4 column">
				&nbsp;  
				</div>
				
				<div class="span_4 column">
				&nbsp;  
				</div>
				
				<div class="span_4 column">
				&nbsp;  
				</div>
				
				<div class="span_4 column">
				&nbsp;  
				</div>

				<div class="span_4 column">
				&nbsp;  
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Student ID :</label>
					<?php echo $studid ;?> <p>
				</div>
				<div class="span_4 column">
					<label for="sel1">Admission Date :</label> 
					 <?php echo $admissiondate ;?> <p>
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">First Name :</label> 
					<?php echo $pre_title . " " .$firstName ;?> <p>
				</div>
				<div class="span_4 column">
					<label for="sel1">Middle Name :</label> 
					 <?php echo $middleName ;?> <p> 
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Last Name :</label> 
					<?php echo $lastName ;?> <p> 
				</div>
				<div class="span_4 column">
					<label for="sel1">Academic Year :</label> 
						<?php echo $academicYear ;?> <p> 
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Gender  :</label> 
					<?php echo $gender ;?> <p>  
				</div>
				<div class="span_4 column">
					<label for="sel1">Date of Birth :</label> 
					  <?php echo $dateOfBirth ;?> <p> 
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Blood Group  :</label>
					<?php echo $bloodGroup  ;?> <p>   
				</div>
				<div class="span_4 column">
					<label for="sel1">Medical History :</label> 
						<?php echo $medicalHistory  ;?> <p> 
				</div>
								
				<div class="span_4 column">
				  <label for="sel1">Choose Class  :</label> 
					<?php echo $chooseClass;?> <p>   
				</div>
				<div class="span_4 column">
					<label for="sel1">Section :</label> 
						<?php echo $section  ;?> <p>
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Father Name :</label> 
					<?php echo $fatherName  ;?> <p>  
				</div>
				<div class="span_4 column">
					<label for="sel1">Mother Name  :</label> 
					 <?php echo $motherName  ;?> <p>
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Email Id   :</label> 
					<?php echo $emailId  ;?> <p>  
				</div>
				<div class="span_4 column">
					<label for="sel1">Mobile Number :</label> 
					  <?php echo $mobileNumber  ;?> <p>
				</div>

				<div class="span_4 column">
				  <label for="sel1">User Status :</label>
					<?php echo $userStatus  ;?> <p> 
				</div>
				<div class="span_4 column">
					<label for="sel1">Mobile Number :</label> 
					  <?php echo $mobileNumber  ;?> <p>
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Document Deposited  :</label> 
					<?php echo $documentDeposited  ;?> <p>
				</div>
				<div class="span_4 column">
					<label for="sel1">Hobbies  :</label> 
					 <?php echo $hobbies;?> <p>
				</div>
		
				<div class="span_4 column">
				  <label for="sel1">Religion  :</label> 
					<?php echo $religion  ;?> <p>
				</div>
				<div class="span_4 column">
					<label for="sel1">Caste  :</label> 
					  <?php echo $caste  ;?> <p> 
				</div>
						
				<div class="span_4 column">
				  <label for="sel1">Sub Caste  :</label> 
					<?php echo $subCaste  ;?> <p> 
				</div>
				<div class="span_4 column">
					<label for="sel1">Student Address   :</label> 
					 <?php echo $stuAddress  ;?> <p>
				</div>		
				
				<div class="span_4 column">
				  <label for="sel1">Country State :</label> 
					<?php echo $city . ", ". $state . ", " .$country  ;?> <p>
				</div>
				<div class="span_4 column">
					<label for="sel1">Residance Number   :</label> 
					<?php echo $residanceNumber;?> <p>
				</div>		
				
				<div class="span_4 column">
				  <label for="sel1">Registered Mobile  :</label> 
					<?php echo $mobSms  ;?> <p>
				</div>
				<div class="span_4 column">
					<label for="sel1">Previous School :</label> 
					 <?php echo $prevSchool  ;?> <p>
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Previous Percentage    :</label> 
					<?php echo $prevPercent    ;?> <p>
				</div>
				<div class="span_4 column">
					<label for="sel1">Previous Year of Pass   :</label> 
					  <?php echo $prevYearPass     ;?> <p>
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Transport Route    :</label> 
					<?php echo $transportRoute   ;?> <p> 
				</div>
				<div class="span_4 column">
					<label for="sel1">Pickup Point  :</label> 
					  <?php echo $pickupPoint  ;?> <p>
				</div>
				
				<div class="span_4 column">
				  <label for="sel1">Vehicle Number     :</label> 
					<?php echo $vehicleNumber    ;?> <p> 
				</div>
				<div class="span_4 column">
					<label for="sel1">Vehicle Driver   :</label> 
					 <?php echo $vehicleDriver   ;?> <p>
				</div>
				
			</div>	
			</div>	
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
            title: "View Student Profile",
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
