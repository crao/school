<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student Addmision Process</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
   <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">

  <!-- bootstrap datepicker -->
 <script src="../plugins/daterangepicker/daterangepicker.js"></script>
 <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <style>
  html,body, .view {
	font-size: 14px;  
  } 

  p.small {
    line-height: 90%;
 }
 
  </style>
  
  <style>
  .sidebar-menu, .header, .logo, .logo-mini, .logo-lg {
	 background-color: #0073B7; 
	 
  } 
  
  .treeview, .active {
	   background-color: #0073B7;
  }
  
  ul.treeview-menu {
	  background-color: #0073B7;
  }
  
  a:hover { 
    background-color: 0073B7;
}
  .skin-blue .wrapper, .skin-blue .main-sidebar, .skin-blue .left-side {
	  background-color: #0073B7;
  }
  
  .skin-blue .main-header .logo {
	  
	   background-color: #0073B7; 
  }
  
  .mleft {
	  margin-left: 100px;
	  margin-bottom: 30px;
	  
  }
  </style>
  
  <script>
 
	function checkAge()
	{

	if(document.getElementById('pre_dateofbirth').value!='')
	{


	myDOB = document.getElementById('pre_dateofbirth').value.split('/');

	myDate = myDOB[0];
	myMonth= myDOB[1];
	myYear = myDOB[2];

	var age;
	var now = new Date();
	var todayDate = now.getDate();
	var todayMonth = now.getMonth();
	var todayYear = now.getFullYear();
	if(todayYear < myYear)
	{
	alert('Eneter Valid Date');
	return false;
	}
	else
	{
	if(myMonth > todayMonth+1)
	{
	age=todayYear-myYear-1;

	month=12-myMonth+todayMonth+1;
	}
	else
	{

	age=todayYear-myYear;

	month=todayMonth-myMonth+1;
	}

	document.getElementById('pre_age').value=age+'.'+month;

	}
	}
	}

 </script>
 
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<script type="text/javascript">

function fetch_select1(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data-name.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select1").innerHTML=response; 

 }
 });
}

function fetch_select2(val1)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data-vehicleno.php',
 data: {
  get_option:val1
 },
 success: function (response) {
  document.getElementById("new_select2").innerHTML=response; 

 }
 });
}

function fetch_select3(val2)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data-driver.php',
 data: {
  get_option:val2
 },
 success: function (response) {
  document.getElementById("new_select3").innerHTML=response; 

 }
 });
}

</script>

 <style type="text/css">
    .box{
        color: #000;
         margin-top: 40px;
    }
    .red{ background: #ECF0F5; }
 
    
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type="checkbox"]').click(function(){
        var inputValue = $(this).attr("value");
        $("." + inputValue).toggle();
    });
});

</script>

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="adminindex2.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Authority</span>
    </a>
	
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"><span style="color:white;font-size:24px;"><marquee>Copperpod School ERP Project</marquee></span>
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> 
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
	  
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        
		<?php
				
		include_once("classes/Crud.php");

		$crud = new Crud();
		
		if ( $crud->is_session_started() === FALSE ) session_start();
		
		$muser = $_SESSION['userid'];
			
		$result = $crud->getData("SELECT * FROM  login_authority WHERE username='$muser'");
	    
		foreach ($result as $res) {
		
			$image=$res['image'];
		
		}
		
		?>
		 
		<img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" width="30" height="30" class="user-image" alt="User Image" />	
	  
              <span class="hidden-xs"><?php  echo $_SESSION['username']; ?> </span>
            		
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
              <img src="data:image/jpeg;base64,<?php  echo base64_encode($image); ?>"  width='50px' height='50px' align='left' class="img-circle" alt="User Image" />	

                <p>
                  <?php  echo $_SESSION['username']; ?> 
                  
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="../index.html" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>"  width='50px' height='50px' align='left' />
        </div>
        <div class="pull-left info">
          <p><?php  echo $_SESSION['username']; ?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="background-color: #0073B7;color:white;">MAIN NAVIGATION</li>
        <li class="active treeview">
		
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Login</span></a>
				
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="createlogin.php"><i class="fa fa-circle-o"></i> Create User</a></li>
            <li class="active"><a href="viewlogin.php"><i class="fa fa-circle-o"></i> View User</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Admission Process</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="createstudent.php"><i class="fa fa-circle-o"></i>Add Students</a></li>
            <li><a href="viewstudent.php"><i class="fa fa-circle-o"></i> View Students</a></li>
            <li><a href="createfees.php"><i class="fa fa-circle-o"></i> Fees Collection</a></li>
            <li><a href="viewfees.php"><i class="fa fa-circle-o"></i> Fees Report</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Attendance</span>
			<span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="createattendance.php"><i class="fa fa-circle-o"></i>Add Attendance</a></li>
			<li><a href="createaholidays.php"><i class="fa fa-circle-o"></i> Add Holidays</a></li>
			<li><a href="createleaves.php"><i class="fa fa-circle-o"></i> Add Leaves</a></li>
            <li><a href="createtimetable.php"><i class="fa fa-circle-o"></i> Add Timetable</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"> <i class="fa fa-files-o"></i>
           
            <span>Assignments</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="createassignment.php"><i class="fa fa-circle-o"></i> Add Assignments</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> View Assignments</a></li>
            <li><a href="createbooks.php"><i class="fa fa-circle-o"></i> Add Library Book</a></li>
			<li><a href="createissuebook.php"><i class="fa fa-circle-o"></i> Issue Return Book</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Examinatons</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Exam</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Student Wise Marks</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Subject Wise Marks</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Class Report</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Student Rank</a></li>

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa  fa-cab"></i>
            <span>Transport</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="#"><i class="fa fa-circle-o"></i> Create Route</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Route List</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Vehicle</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Add Driver</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Transport Fees</a></li>

          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-male"></i>
            <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="createstaff.php"><i class="fa fa-circle-o"></i>Add Staff</a></li>
            <li><a href="viewstaff.php"><i class="fa fa-circle-o"></i> View Staff</a></li>
			<li><a href="createattendancestaff.php"><i class="fa fa-circle-o"></i> Add Staff Attendance</a></li>

          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa  fa-bank"></i>
            <span>Payroll</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="background-color: #0073B7;">
            <li><a href="#"><i class="fa fa-circle-o"></i>Create Salary</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Create Loan</a></li>
			<li><a href="#"><i class="fa fa-circle-o"></i> View Salary</a></li>
   			<li><a href="#"><i class="fa fa-circle-o"></i> Pay Slip</a></li>
			
          </ul>
        </li>
		<li>
          <a href="#">
            <i class="fa fa-camera"></i> <span>Gallery</span>
            
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Birthday</span>
            
          </a>
        </li>
               
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="view">
<!--Intro content-->
    
	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <!-- Info boxes -->
	  <div class="row">
				
		<!-- <div class="col-sm-2">&nbsp;</div>	-->
		
		<div style="text-align: center"> <h3>Student Admission</h3></div> <p> 
		 <p/>&nbsp;<p/>
		 
		 <?php
		 
			  if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)
				{
				// query db
				$id = $_GET['id'];
				error_reporting("0"); 
				
				if ( $crud->is_session_started() === FALSE ) session_start();
				
				$_SESSION['id'] = $id;
				
				include_once("classes/Crud.php");
				
				$crud = new Crud();
				
				$conn = $crud->myconnect();
				
				$result = $crud->getData("SELECT * FROM stu_admission WHERE stusrno = '$id' Limit 1");
				
				foreach ($result as $res) {
					
						  $id = $res['stusrno'];
						  $studid = $res['studid'];
						  $admissiondate=$res['admissiondate'];
						  $pre_title = $res['pre_title'];		
						  $firstName=$res['firstName'];
						  $middleName=$res['middleName'];
						  $lastName=$res['lastName'];
						  $academicYear=$res['academicYear'];  
						  $gender=$res['gender']; 
						  $image=$res['image'];
						  $dateOfBirth=$res['dateOfBirth'];
						  $bloodGroup=$res['bloodGroup']; 
						  $medicalHistory=$res['medicalHistory'];						  
						  $chooseClass = $res['chooseClass'];
						  $section = $res['section'];
						  $fatherName=$res['fatherName'];
						  $motherName = $res['motherName'];		
						  $emailId=$res['emailId'];
						  $mobileNumber=$res['mobileNumber'];
						  $userName=$res['userName'];  
						  $userPassword=$res['userPassword']; 
						  $userStatus=$res['userStatus'];
						  $documentDeposited=$res['documentDeposited'];
						  $physicallyHandicaped=$res['physicallyHandicaped']; 
						  $hobbies=$res['hobbies'];						  
						  $religion = $res['religion'];
						  $caste = $res['caste'];
						  $subCaste=$res['subCaste'];
						  $stuAddress = $res['stuAddress'];		
						  $country=$res['country'];
						  $state=$res['state'];
						  $city=$res['city'];  
						  $residanceNumber=$res['residanceNumber']; 
						  $mobSms=$res['mobSms'];
						  $prevSchool=$res['prevSchool'];
						  $prevPercent=$res['prevPercent']; 
						  $prevYearPass=$res['prevYearPass'];						  
						  $transportRoute=$res['transportRoute'];
						  $pickupPoint=$res['pickupPoint'];
						  $vehicleNumber=$res['vehicleNumber']; 
						  $vehicleDriver=$res['vehicleDriver'];

						  
				}
		
	  ?>
		 
          <form action="crud/updateaddstudent.php" enctype="multipart/form-data" method="post">
              
            <div class="col-md-12 col-lg-12 col-sm-12 col-md-8 ">
			
			
			<div class="container-fluid form-group"><!-- Row 1 -->
			<div class="col-lg-6" id="userFormColumn1" >		 
		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="studentId">Student ID</label></div>
				   <div class="col-sm-6">
				   
				   <?php			
							echo "$studid";											
					?>
				   
				   </div>				  
				</div>  		 
			</div>
			
			<div class="col-lg-6" id="userFormColumn2">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"><label for="adm_date">Date</label></div>
					<div class="col-sm-6">
					
					<div class="input-group date">
					<div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
					</div>
					<input type="text" name="admissiondate" class="form-control pull-right" id="datepicker" value="<?php echo $admissiondate;?>">
					</div>
					
					
					</div>		  
				</div> 			 
			</div>			
		</div>
						
		<p>
		
		<div class="container-fluid form-group"><!-- Row 2 -->
		
			<div class="col-lg-6" id="userFormColumn3">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="pre_title">Title</label></div>
					<div class="col-sm-6">
					
					<select class="form-control"  name="pre_title" placeholder="Enter Title">
						<option value="<?php echo $pre_title;?>"><?php echo $pre_title;?></option>
						<option value="Mr.">Mr.</option>
						<option value="Miss.">Miss.</option>
						<option value="Mrs.">Mrs.</option>
						<option value="Dr.">Dr.</option>
					</select>
					
					</div>			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn4">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="firstName">First Name</label></div>
					<div class="col-sm-6"><input name="firstName" id="firstName" required class="form-control" placeholder="Enter First Name" value="<?php echo $firstName;?>"></div>
				 
				</div> 		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 3 -->
		
			<div class="col-lg-6" id="userFormColumn5">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="middleName">Middle Name</label></div>
					<div class="col-sm-6"><input name="middleName" id="middleName" required class="form-control" placeholder="Enter Middle Name" value="<?php echo $middleName;?>"></div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn6">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="lastName">Last Name</label></div>
					<div class="col-sm-6"><input name="lastName" id="lastName" required class="form-control" placeholder="Enter Last Name" value="<?php echo $lastName;?>"></div>
				 
				</div>  		 		 
			</div>
		</div>
		
		
		<div class="container-fluid form-group"><!-- Row 4 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="academicYear">Academic Year</label></div>
					<div class="col-sm-6">
					
					<?php	
					$result = $crud->getData("SELECT * FROM  school_info");
						echo "<select name='academicYear'  class='form-control detail'>"; ?>
						<option value="<?php echo $academicYear;?>"><?php echo $academicYear;?></option>
						<?php
						foreach ($result as $res) {
						
							$academicYear=$res['academicYear'];
							echo "<option>$academicYear</option>";
						}
						
					echo "</select>";

					?>
										
					</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="Gender">Gender</label></div>
					<div class="col-sm-6">
					
					<select class="form-control"  name="gender" placeholder="Enter Gender">
					<option value="<?php echo $gender;?>"><?php echo $gender;?></option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
					
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 5 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="uploadPhoto">Upload Photo</label></div>
					<div class="col-sm-6"><input name='filename' class='form-control detail' type='file'>  <p>
					<input type="hidden" class="form-control detail" name="MAX_FILE_SIZE" value="5342888" />
					<img src="data:image/jpeg;base64,<?php echo base64_encode($image); ?>" height="100" width="120"  align='left' /> 
					</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="dateOfBirth">Date Of Birth</label></div>
					<div class="col-sm-6">
					
					<div class="input-group date">
					<div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
					</div>
					<input type="text" name="dateOfBirth" class="form-control pull-right" id="birthdate" placeholder='Date of Birth' value="<?php echo $dateOfBirth;?>">
					</div>
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 6 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="bloodGroup">Blood Group</label></div>
					<div class="col-sm-6"><input name='bloodGroup' class='form-control detail' type='text' placeholder='Enter Blood Group' value="<?php echo $bloodGroup;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="medicalHistory">Medical History</label></div>
					<div class="col-sm-6"><input name='medicalHistory' class='form-control detail' type='text' placeholder='Enter Medical History' value="<?php echo $medicalHistory;?>">
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 7 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="chooseClass">Choose Class</label></div>
					<div class="col-sm-6">
				<?php	
					$result = $crud->getData("SELECT * FROM  stu_class");
						echo "<select name='chooseClass'  class='form-control detail'>"; ?>
						<option value="<?php echo $chooseClass;?>"><?php echo $chooseClass;?></option>
						<?php
						foreach ($result as $res) {
						
							$class=$res['class'];
							echo "<option value='$class'>$class</option>";
						}
						
					echo "</select>";

				?>	
					  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="Section">Section</label></div>
					<div class="col-sm-6">
					
					<?php	
					$result = $crud->getData("SELECT * FROM  stu_division");
						echo "<select name='section'  class='form-control detail'>"; ?>
						<option value="<?php echo $section;?>"><?php echo $section;?></option>
						<?php
						foreach ($result as $res) {
						
							$section=$res['section'];
							echo "<option value='$section'>$section</option>";
						}
						
						echo "</select>";

					?>
														
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 8 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="fatherName">Father's Name</label></div>
					<div class="col-sm-6"><input name='fatherName' class='form-control detail' type='text' placeholder='Enter Father Name' value="<?php echo $fatherName;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="motherName">Mother's Name</label></div>
					<div class="col-sm-6"><input name='motherName' class='form-control detail' type='text' placeholder='Enter Mother Name' value="<?php echo $motherName;?>">
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 9 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="emailId">Email ID</label></div>
					<div class="col-sm-6"><input type="emailId" class="form-control" id="exampleInputEmail1" required name="emailId" placeholder="Enter email ID" value="<?php echo $emailId;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="mobileNumber">Mobile Number</label></div>
					<div class="col-sm-6"><input name='mobileNumber' class='form-control detail' required type='text' placeholder='Enter Mobile Number' value="<?php echo $mobileNumber;?>">
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 10 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="userName">User Name</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" readonly id="userName" name="userName" value="<?php echo $studid;  ?>" > <p> 
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="userPassword">Password</label></div>
					<div class="col-sm-6"><input type="password" class="form-control" required id="exampleInputPassword1" name="userPassword" placeholder="Enter Password" value="<?php echo $userPassword;?>">
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 11 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="bloodGroup">Status</label></div>
					<div class="col-sm-6">
					<select class="form-control"  name="userStatus" placeholder="Enter Status">
					<option value="<?php echo $userStatus;?>"><?php echo $userStatus;?></option>
						<option value="Active">Active</option>
						<option value="Inactive">Inactive</option>
						<option value="Suspended">Suspended</option>
						<option value="Terminated">Terminated</option>
					</select>	
						

					<p> 
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="documentDeposited">Documents Deposited</label></div>
					<div class="col-sm-6"><textarea type="text" class="form-control" required id="documentDeposited" name="documentDeposited" placeholder="Enter Documents Deposited" value="<?php echo $documentDeposited;?>"><?php echo $documentDeposited;?></textarea>
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 12 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="physicallyHandicaped">Physically Handicaped</label></div>
					<div class="col-sm-6">
					<select class="form-control"  name="physicallyHandicaped" placeholder="Enter Physical Status">
					<option value="<?php echo $physicallyHandicaped;?>"><?php echo $physicallyHandicaped;?></option>
						<option value="No">No</option>
						<option value="Yes">Yes</option>
					</select>	
						

					<p> 
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="hobbies">Hobbies</label></div>
					<div class="col-sm-6"><textarea type="text" class="form-control" required id="hobbies" name="hobbies" placeholder="Enter Hobbies" value="<?php echo $hobbies;?>"><?php echo $hobbies;?></textarea>
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 13 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="Religion">Religion</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" id="Religion" required name="religion" placeholder="Enter Religion" value="<?php echo $religion;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="Caste">Caste</label></div>
					<div class="col-sm-6"><input name='caste' class='form-control detail' type='text' placeholder='Enter Caste' value="<?php echo $caste;?>">
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 14 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="subCaste">Sub Caste</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" id="subCaste" name="subCaste" placeholder="Enter Sub Caste" value="<?php echo $subCaste;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				<!--   <div class="col-sm-3"> <label for="Caste">Caste</label></div>
					<div class="col-sm-6"><input name='caste' class='form-control detail' type='text' placeholder='Enter Caste'>
									
					</div>	-->			 
				</div>  		 		 
			</div>
		</div>
		
		
		<div class="container-fluid form-group"><!-- Row 15 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="stuAddress">Address</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" id="stuAddress" required  name="stuAddress" placeholder="Enter Address" value="<?php echo $stuAddress;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="country">Country</label></div>
					<div class="col-sm-6"><input name='country' class='form-control detail' type='text' placeholder='Enter Country' value="<?php echo $country;?>">
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 16 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="state">State</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" id="state"  name="state" placeholder="Enter State" value="<?php echo $state;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="city">City</label></div>
					<div class="col-sm-6"><input name='city' class='form-control detail' type='text' placeholder='Enter City' value="<?php echo $city;?>">
									
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 17 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="residanceNumber">Residance Number</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" id="residanceNumber"  name="residanceNumber" placeholder="Enter Residance Number" value="<?php echo $residanceNumber;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="mobSms">Mobile Number</label></div>
					<div class="col-sm-6"><input name='mobSms' id="mobsms" class='form-control detail' type='text' placeholder='Enter Mobile Number' value="<?php echo $mobSms;?>"><br>
					<span style="color:red">( All Future SMS will be Send on this Number Only )</span>				
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 18 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="prevSchool">Previous School</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" id="prevSchool"  name="prevSchool" placeholder="Enter Previous School" value="<?php echo $prevSchool;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="prevPercent">Previous Percentage</label></div>
					<div class="col-sm-6"><input name='prevPercent' id="prevPercent" class='form-control detail' type='text' placeholder='Enter Previous Percentage' value="<?php echo $prevPercent;?>"><br>
					
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 19 -->
		
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="prevYearPass">Previous Year of Passing</label></div>
					<div class="col-sm-6"><input type="text" class="form-control" id="prevYearPass" name="prevYearPass" placeholder="Enter Previous Year of Passing" value="<?php echo $prevYearPass;?>">  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"><label>Transport</label></div>
					<div class="col-sm-6"><input type="checkbox" name="colorCheckbox" value="red" >&nbsp;&nbsp;&nbsp;<strong> Select If Transport Not Required</strong>					</div>	
				</div>  		 		 
			</div>
		</div>
		
		<div class="red box"> <br>
		<div class="container-fluid form-group"><!-- Row 20 -->
			
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="transportRoute">Select Route</label></div>
					<div class="col-sm-6">
					<?php 
					include_once("classes/Crud.php");

					$crud = new Crud();
					
					$result = $crud->getData("SELECT  route FROM transport_route  group by route");
						
						echo "<select onChange='fetch_select1(this.value);fetch_select2(this.value);fetch_select3(this.value);' name='transportRoute'  class='form-control detail'>"; ?>
						
						<option value="<?php echo $transportRoute;?>"><?php echo $transportRoute;?></option>
						
						<?php
						foreach ($result as $res) {
						
							$route=$res['route'];
							echo "<option value='$route'>$route</option>";
						}
						
					echo "</select>";	
					
					?>						
									
				  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="pickupPoint">Pickup Point</label></div>
					<div class="col-sm-6">
					
					<?php 
				
					 echo '<select id="new_select1" name="pickupPoint"  class="form-control detail">'; ?>
						<option value="<?php echo $pickupPoint;?>"><?php echo $pickupPoint;?></option>
					 <?php echo '</select>'; ?>
					
					</div>				 
				</div>  		 		 
			</div>
		</div>
		
		<div class="container-fluid form-group"><!-- Row 20 -->
			
			<div class="col-lg-6" id="userFormColumn7">
		 		 
				<div class="form-group">
					<div class="col-sm-3"><label for="vehicleNumber">Vehicle Number</label></div>
					<div class="col-sm-6">
					
					<?php
					
					echo '<select id="new_select2" name="vehicleNumber"  class="form-control detail">'; ?>
					<option value="<?php echo $vehicleNumber;?>"><?php echo $vehicleNumber;?></option>
					 <?php echo '</select>';	?>
									
				  <p>
				</div>
			
				</div>		 			 
			</div>
			
			<div class="col-lg-6" id="userFormColumn8">
		 		 
				<div class="form-group">
				   <div class="col-sm-3"> <label for="vehicleDriver">Driver</label></div>
					<div class="col-sm-6">

					
					<?php 
					include_once("classes/Crud.php");

					$crud = new Crud();
					
					$result = $crud->getData("SELECT  drivername FROM  transport_vehicle");
						
						echo '<select id="continent" class="form-control detail" name="vehicleDriver">'; ?>
						
						<option value="<?php echo $vehicleDriver;?>"><?php echo $vehicleDriver;?></option>
						
						<?php
						
						foreach ($result as $res) {
						
							$drivername=$res['drivername'];
							echo "<option value='$drivername'>$drivername</option>";
						}
						
					echo "</select>";	
					
					?>		
					
					<br>
					
					</div>				 
				</div>  		 		 
			</div>
		</div>
		</div>
		
		
		
		<!-- End main columns -->		
		</div>		
		<!-- End -->
		
				
			
				
			<div class="container-fluid form-group"><!-- Row Last -->
			
			<div class="col-lg-12" id="studentSubmit">
		 
		 
				<div class="form-group">
					
					<div class="col-sm-5"><label for="submit">&nbsp;</label></div>
					<div class="col-sm-4"><input type="submit"  value="Submit" name="UpdateSubmit" class="btn btn-primary" /></div>
				
				
				</div>
		 
				 
			</div>
			
		</div>	
               
			  
			  
            </form>
			
			<?php
		
			}
		
		?>
    <!-- /.content -->
		</div>
  <!-- /.Col -->
    
  
</div>
<!-- row -->
	
	

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
</div>
<!-- view -->


<!-- <div class="col-sm-2" style="background-color:lavender;">&nbsp;</div> -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 It is disabling Slider Menus -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Previous -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
		format: 'dd/mm/yyyy',	  
      autoclose: true
    });

	 $('#birthdate').datepicker({
		format: 'dd/mm/yyyy',	  
      autoclose: true
    });
	
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
