<?php
		
		include_once("../classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$id = $_GET['id'];
		
		$_SESSION['id'] = $id;
		
		$result = $crud->getData("SELECT * FROM  staff_timetable WHERE srno = '$id'");	

		foreach ($result as $res) {
			  
		$chooseClass = $res['chooseClass'];		
		$section = $res['section'];
		 
		}	
		
		$result = $crud->getData("SELECT * FROM  staff_timetable WHERE section = '$section'");	
		
		foreach ($result as $res) {
			  
		$chooseClass = $res['chooseClass'];		
		$section = $res['section'];
		 
		}	
		
		   
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>View Timetable</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <script src="../../bootstrap/js/bootstrap.min.js"></script>



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
    height: 810px;    
}

</style>



</head>
<body>
  <br><p>
		<div align="center">
		<input type="submit" value="Return" name="Submit" class="btn btn-primary" onclick="location.href = 'http://localhost/School%20ERP/Admin/viewtimetable.php'">
		</div>
		
	<div id="printablediv" style="width: 95%; margin-left:30px;">
	
				<?php
		
			  if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
				{
				
		
				
				error_reporting("0"); 
				
				if ( $crud->is_session_started() === FALSE ) session_start();
				
				$_SESSION['id'] = $id;
				
				include_once("classes/Crud.php");
				
				$crud = new Crud();
				
				$conn = $crud->myconnect();
				
				$result = $crud->getData("SELECT * FROM staff_timetable WHERE srno = '$id'");
				
				foreach ($result as $res) {
					
						  $id = $res['srno'];
						  $chooseClass = $res['chooseClass'];
						  $section=$res['section'];
				}
				
				if ( $crud->is_session_started() === FALSE ) session_start();
		
				 $_SESSION['section'] = $section;	  
				
						  
		?>			

			<br><p>	
		
		<div class="container-fluid form-group"><!-- Row 7 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="chooseClass">Class</label></div>
					<div class="col-sm-6">
				<?php	
					
					echo $chooseClass;

				?>	
					  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="Section">Section</label></div>
					<div class="col-sm-6">
					
					<?php echo $section; ?>
																			
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		
		<br>
	
		
		<div class="table-responsive">
	
		<?php	
		include_once("classes/Crud.php");
		
	//	error_reporting("0");
		
		$perpage = 10;
		
		if(isset($_GET["page"])){
		$page = intval($_GET["page"]);
		}
		else {
		$page = 1;
		}
		
		$calc = $perpage * $page;
		$start = $calc - $perpage;
		
		$crud = new Crud();
		
		$conn = $crud->myconnect();
		
		$section =  $_SESSION['section'];
		
		$query = "Select * SELECT * FROM staff_timetable WHERE section = '$section'";
		
		$rows = $crud->getNorows($query); 
		
		
	//	$result = $crud->getData("SELECT * FROM timetable_days  ORDER BY srno Asc"); 
	
			
		
		echo "<table align='center' class='table' cellpadding='3' border-spacing: 0px; width='1000px'>";

		
		echo '<tr> <th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF; text-align: center; ">Period</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">1</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">2</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">3</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">4</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">5</th>
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">6</th>
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">7</th>
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">8</th>
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">9</th>
		
		
		
</tr>';

		$section =  $_SESSION['section'];
		
		$result = $crud->getData("SELECT * FROM staff_timetable WHERE section = '$section' limit 1");
				
				foreach ($result as $res) {
					
						  $id = $res['srno'];
						  $chooseClass = $res['chooseClass'];
						  $section=$res['section'];
						  $days = $res['days'];		
						  $col1=$res['1col'];
						  $col2=$res['2col'];  
						  $col3=$res['3col'];
						  $col4=$res['4col'];						  						  
						  $col5=$res['5col'];
						  $col6=$res['6col']; 
						  $col7=$res['7col']; 
						  $col8 = $res['8col'];
						  $col9=$res['9col'];  
						  
						  
					?>
				
		
<tr> <th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF; text-align: center; ">Days</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		<?php echo $col1; ?> 
	</th> 
	
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		
		<?php echo $col2; ?>
		
		
		</th> 
		
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		<?php echo $col3; ?> 
				
		</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		
		<?php echo $col4; ?>
		
		</th> 
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		
		<?php echo $col5; ?>
		
		</th>
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		
		<?php echo $col6; ?>
		
		</th>
		
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		
		<?php echo $col7; ?>
		
		
		</th>
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		
		<?php echo $col8; ?>
		
		</th>
		
		<th style="border: 1px solid #FFFFFF;background: #3c8dbc;color: #FFFFFF;text-align: center; ">
		
		<?php echo $col9; ?> 
		
		
		
		</th>
		
		
</tr>

<?php

		}
				
				
		$section =  $_SESSION['section'];
		
		$result = $crud->getData("SELECT * FROM staff_timetable WHERE section = '$section'");
				
				foreach ($result as $res) {
					
						  $id = $res['srno'];
						  $chooseClass = $res['chooseClass'];
						  $section=$res['section'];
						  $days = $res['days'];		
						  $col1=$res['1col'];
						  $dep1=$res['1dep'];
						  $name1=$res['1name'];
						  $col2=$res['2col'];  
						  $dep2=$res['2dep']; 
						  $name2=$res['2name'];
						  $col3=$res['3col'];
						  $dep3=$res['3dep']; 
						  $name3=$res['3name'];
						  $col4=$res['4col'];						  						  
						  $dep4 = $res['4dep'];
						  $name4 = $res['4name'];
						  $col5=$res['5col'];
						  $dep5=$res['5dep'];
						  $name5=$res['5name'];  
						  $col6=$res['6col']; 
						  $dep6=$res['6dep'];
						  $name6=$res['6name'];
						  $col7=$res['7col']; 
						  $dep7=$res['7dep'];						  
						  $name7 = $res['7name'];
						  $col8 = $res['8col'];
						  $dep8=$res['8dep'];
						  $name8 = $res['8name'];		
						  $col9=$res['9col'];  
						  $dep9=$res['9dep']; 
						  $name9=$res['9name'];
				
	
				  
			 	echo '<tr> </tr>';
				echo '<tr> </tr>';
			
				echo "<tr>"; ?>
				<input type="hidden" name="days[]"  value="<?php echo $days; ?>">
				<?php
                echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ">'  .'<div align="center">'.($days).'</div>'. '</td>'; 
                echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep1 == "Deaprtment") {					
				
				$dep1 = "";		
				 echo $dep1; 
				
				} else
					
				{
					echo $dep1; 		
				}
				
				?>
				<br>		
					
				<?php
				if ($name1 == "Full Name") {					
				
				$name1 = "";		
				 echo $name1; 
				
				} else
					
				{
					echo $name1; 		
				}
				
				?>
				<br>
				
				
				
				
				<?php '</td>';
                
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep2 == "Deaprtment") {					
				
				$dep2 = "";		
				 echo $dep2; 
				
				} else
					
				{
					echo $dep2; 		
				}
				
				?>
				<br>
					
				<?php
				if ($name2 == "Full Name") {					
				
				$name2 = "";		
				 echo $name2; 
				
				} else
					
				{
					echo $name2; 		
				}
				
				?>
				<br>
				
				<?php '</td>';
				
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep3 == "Deaprtment") {					
				
				$dep3 = "";		
				 echo $dep3; 
				
				} else
					
				{
					echo $dep3; 		
				}
				
				?>
				<br>		
					
				<?php
				if ($name3 == "Full Name") {					
				
				$name3 = "";		
				 echo $name3; 
				
				} else
					
				{
					echo $name3; 		
				}
				
				?>
				<br>				
				
				
				<?php '</td>';
				
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				
				<?php
				if ($dep4 == "Deaprtment") {					
				
				$dep4 = "";		
				 echo $dep4; 
				
				} else
					
				{
					echo $dep4; 		
				}
				
				?>
				<br>		
					
				<?php
				if ($name4 == "Full Name") {					
				
				$name4 = "";		
				 echo $name4; 
				
				} else
					
				{
					echo $name4; 		
				}
				
				?>
				<br>						

				
				
				<?php '</td>';
				
				
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep5 == "Deaprtment") {					
				
				$dep5 = "";		
				 echo $dep5; 
				
				} else
					
				{
					echo $dep5; 		
				}
				
				?>
				<br>		
					
				<?php
				if ($name5 == "Full Name") {					
				
				$name5 = "";		
				 echo $name5; 
				
				} else
					
				{
					echo $name5; 		
				}
				
				?>
				<br>				

				
				
				<?php '</td>';
				
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep6 == "Deaprtment") {					
				
				$dep6 = "";		
				 echo $dep6; 
				
				} else
					
				{
					echo $dep6; 		
				}
				
				?>
				<br>		
					
				<?php
				if ($name6 == "Full Name") {					
				
				$name6 = "";		
				 echo $name6; 
				
				} else
					
				{
					echo $name6; 		
				}
				
				?>
				<br>				

				
				
				
				<?php '</td>';
				
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep7 == "Deaprtment") {					
				
				$dep7 = "";		
				 echo $dep7; 
				
				} else
					
				{
					echo $dep7; 		
				}
				
				?>
				<br>	
					
				<?php
				if ($name7 == "Full Name") {					
				
				$name7 = "";		
				 echo $name7; 
				
				} else
					
				{
					echo $name7; 		
				}
				
				?>
				<br>					

				
				
				
				<?php '</td>';
				
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep8 == "Deaprtment") {					
				
				$dep8 = "";		
				 echo $dep8; 
				
				} else
					
				{
					echo $dep8; 		
				}
				
				?>
				<br>		
					
				<?php
				if ($name8 == "Full Name") {					
				
				$name8 = "";		
				 echo $name8; 
				
				} else
					
				{
					echo $name8; 		
				}
				
				?>
				<br>			
 
 
				<?php '</td>';
				
				echo '<td style="padding: 1px;border: 1PX solid #FFFFFF;background: #B0C4DE ;">' ; ?> 
				
				<?php
				if ($dep9 == "Deaprtment") {					
				
				$dep9 = "";		
				 echo $dep9; 
				
				} else
					
				{
					echo $dep9; 		
				}
				
				?>
				<br>
					
				<?php
				if ($name9 == "Full Name") {					
				
				$name9 = "";		
				 echo $name9; 
				
				} else
					
				{
					echo $name9; 		
				}
				
				?>
				<br>					

				
				
				
				<?php '</td>';
						
				
                echo "</tr>"; 
				
				$i = $i + 1;	
							
			//	}
				}
				if ( $i > $rows ) {
				break;	
				
				} 
				
		//	}
			
			
					
		echo "</table>";
		}
		?>
		
		
		</div> <!-- Responsive Table -->		
	</div>
		
		
	</div>
	
	
 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css"
    rel="stylesheet" type="text/css" />
<script type="text/javascript">
    $(function () {
        $("#dialog").dialog({
            modal: true,
            autoOpen: false,
            title: "View Staff Profile",
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
