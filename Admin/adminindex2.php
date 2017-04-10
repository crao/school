<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>School ERP Admin Dashboard</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
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
  
  html,body, .view {
	font-size: 14px;  
  } 

  </style>
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
		
		error_reporting("0");
		
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
      <!-- search form 
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>-->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="background-color: #0073B7;color:white;">MAIN NAVIGATION</li>
        <li class="treeview">
		
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Info boxes -->
    <div class="row" align="center">
       <p><br><p><br>
		<!-- school management icons 128 by 128  -->
		

 <div class="col-md-3 col-md-offset-2">
  <a href="createlogin.php"> <img class="img-responsive" src="../dist/img/icons/user_add.png"  alt="Add User" title="Add Users" height="120" width="120"  />
  Add User
  </a>
 </div>
 <div class="col-md-3">
   <a href="viewlogin.php"><img class="img-responsive" src="../dist/img/icons/user_view.png"  alt="View User" title="View Users" height="120" width="120"/>
   View Users
   </a>
 </div>

 <div class="col-md-3">
   <a href="createstudent.php"><img class="img-responsive" class="img-responsive" src="../dist/img/icons/add_stud.png"  alt="Add Student" title="Add Student" height="120" width="120"/>
   Add Student
   </a>
	<p><br>
 </div> 
 
 
 
 <div class="col-md-3 col-md-offset-2">
   <a href="viewstudent.php"><img class="img-responsive" src="../dist/img/icons/view_stud.png"  class="img-responsive" alt="View Student" title="View Student" height="120" width="120"  />
   View Student
   </a>
 </div>
 <div class="col-md-3">
   <a href="viewfees.php"><img class="img-responsive" src="../dist/img/icons/fees.png" class="img-responsive" alt="Fees Collection" title="Fees Collection" height="120" width="120" />
   Fees Collection
   </a>
   
   <p><br>
 </div>

 <div class="col-md-3">
   <a href="viewpresentystaff.php"><img class="img-responsive" src="../dist/img/icons/attendance.png" class="img-responsive" alt="Attendance" title="Attendance" height="120" width="120" />
   Attendance
   </a>
 </div>
 
 <div class="col-md-3 col-md-offset-2">
  <a href="viewtimetable.php"> <img class="img-responsive" src="../dist/img/icons/timetable.png"  alt="Time Table" title="Time-Table" height="120" width="120" />
  Time Table
  </a>
 </div>
 <div class="col-md-3">
   <a href="#"><img class="img-responsive" src="../dist/img/icons/assignment.png"  alt="Assignment" title="Assignment" height="120" width="120" />
   Assignment
   </a>
 </div>

 <div class="col-md-3">
   <a href="viewlibrary.php"><img class="img-responsive" class="img-responsive" src="../dist/img/icons/Library.png"  alt="Add Library" title="Add Library" height="120" width="120" />
   Library
   </a>
	<p><br>
 </div> 

 <div class="col-md-3 col-md-offset-2">
  <a href="#"> <img class="img-responsive" src="../dist/img/icons/examination.png"  alt="Examinatons" title="Examinatons" height="120" width="120" />
  Examinatons
  </a>
 </div>
 <div class="col-md-3">
   <a href="#"><img class="img-responsive" src="../dist/img/icons/Payroll.png"  alt="Payroll" title="Payroll" height="120" width="120" />
   Payroll
   </a>
 </div>

 <div class="col-md-3">
   <a href="#"><img class="img-responsive" class="img-responsive" src="../dist/img/icons/school-bus-icon.png"  alt="School Transport" title="School Transport" height="120" width="120" />
   School Transport
   </a>
	<p><br>
 </div> 

	 
    <!-- /.content -->
		
		
  <!-- /.content-wrapper -->
	</div>


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

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
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
</body>
</html>
