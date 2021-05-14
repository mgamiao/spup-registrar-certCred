<?php
	session_start();
	if ($_SESSION['username']=="") {
		header("Location: logout.php");
	}
?>
<?php 
include "perfect_function.php"; 
$pendnotif = count_pending_forms();
$reqnotif = count_inProcess_forms();
$compnotif = count_archived_forms();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPUP Registrar</title>

  <!-- Custom fonts for this template-->
  <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/collapsible.css" rel="stylesheet" type="text/css">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">SPUP Registrar </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          
          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     
      <?php if($_SESSION['access']=="1"){ ?>    
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pend_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
          <?php 
          if ($pendnotif == "0"){
            echo "<span>Pending Forms</span>";
          }else{
           echo "<span>Pending Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $pendnotif";
          }
        ?>
        </a>
      
      </li>
      <?php } ?> 

      <li class="nav-item">
        <a class="nav-link collapsed" href="req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($reqnotif == "0"){
            echo "<span>Requested Forms</span>";
          }else{
           echo "<span>Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $reqnotif";
          }
        ?>
        </a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="archived_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($compnotif == "0"){
            echo "<span>Completed Forms</span>";
          }else{
           echo "<span>Completed Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $compnotif";
          }
        ?>
        </a>
      
      </li>
        <li class="nav-item">
        <a class="nav-link collapsed" href="logs.php"  aria-expanded="true" aria-controls="collapseUtilities">
          
          <span>Logs</span>
        </a>
      
</li>

      <!-- Divider -->
      <hr class="sidebar-divider">

</ul>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          
          <?php
          date_default_timezone_set('Asia/Singapore'); 
          $xdate=date('Y-m-d');
          $xtime=date('h:i:sa'); 
          echo "<h6 class='m-0 font-weight-bold text-primary'>Date: $xdate   &nbsp </h6>  "; 
          
          echo "<h6 class='m-0 font-weight-bold text-primary'>Time:  $xtime</h6>";
          ?>
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->

           
            <?php
				  //get first name
			  	$get_firstname = get_where_custom("accounts", "firstname", $_SESSION['firstname']);
				    foreach ($get_firstname as $key => $row) {
					  $firstname = $row['firstname'];
				  }
          $get_lastname = get_where_custom("accounts", "lastname", $_SESSION['lastname']);
          foreach ($get_lastname as $key => $row) {
          $lastname = $row['lastname'];
          }
				  ?>
          	
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-4 d-none d-lg-inline text-gray-900 medium "><?= $firstname  . " " . $lastname;?> |  <span class="fas fa-sign-out-alt fa-sm fa-fw mr-4 text-gray-900 medium"> Logout</span></span>
            <!-- Nav Item - User Information -->
               
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
         

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="template/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="template/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="template/js/demo/chart-area-demo.js"></script>
  <script src="template/js/demo/chart-pie-demo.js"></script>

</body>

</html>