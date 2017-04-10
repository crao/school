<?php
	 
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_GET['id'];
		
		
		$result = $crud->getData("SELECT * FROM  login_authority WHERE id = '$id'");	

		foreach ($result as $res) {
			  
			  $username=$res['username']; 
			  $first_name=$res['first_name']; 
			  $username=$res['username']; 
			  $last_name=$res['last_name']; 
			  $gender=$res['gender']; 
			  $email=$res['email']; 
			  $mobile=$res['mobile']; 
			  $type=$res['type']; 
			  $authority=$res['authority'];
			  $image=$res['image'];			  
			  
		}	
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View User Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="../bootstrap/js/bootstrap.min.js"></script>

<head>

<style>
	
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
</style>

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
    width: 730px;
    height: 410px;    
}
</style>

</head>
<body>


	
	 <div class="row">
				
		<div id="dialog" style="display: none; " >
		
		<!-- This will not print -->
		<div id="donotprintdiv" style="width: 100%;height: 100px; text-align:center;"> 
		<p>
		<input type="submit" value="Print" name="Submit" class="btn btn-primary" onclick="javascript:printDiv('printablediv')">
		
		<input type="submit" value="Return" name="Submit" class="btn btn-primary" onclick="location.href = 'http://localhost/School%20ERP/Admin/adminindex2.php'">

		</div> 
	
	<!-- This will Print the division margin-left:330px;" -->
	
	
	
	<div id="printablediv" class="paragrpahs" style="width: 100%;margin-left:90px;">
	
	<div id="rcorners2">
				
		<h3 style="margin-left:300px;align:center">User Profile</h3>  <br>	
				
		<div class="row clearfix">
			
		<div class="span_4 column">
		   <img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" height="90" width="110"    />
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
		   <label for="sel1">User Name :</label>
					<?php echo $username;?> <p>
		</div>
		<div class="span_4 column">
			<label for="sel1">First Name :</label> 
					<?php echo $first_name;?> <p> 
		</div>
			
		<div class="span_4 column">
		   <label for="sel1">Last Name :</label> 
					<?php echo $last_name;?> <p> 
		</div>
		<div class="span_4 column">
			<label for="sel1">Gender :</label> 
					<?php echo $gender;?> <p> 
		</div>
		
		<div class="span_4 column">
		   <label for="sel1">Mobile Number :</label> 
					<?php echo $mobile;?> <p>
		</div>
		<div class="span_4 column">
			<label for="sel1">Email ID :</label> 
					<?php echo $email;?> <p> 
		</div>
		
		<div class="span_4 column">
		   <label for="sel1">Type :</label> 
					<?php echo $type;?> <p> 
		</div>
		<div class="span_4 column">
		   <label for="sel1">Authority :</label> 
					<?php echo $authority;?> <p> 
		</div>
	
	
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
            title: "View User",
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
