<?php
	session_start();
	if ($_SESSION['username']=="") {
		header("Location: logout.php");
	}
?>
<?php 
include "perfect_function.php";
$pendnotif = count_pending_forms();
$table_name="forms";
$status=1;
$school = "SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING";
$sitereqnotif = count_deaninProcess_forms($table_name, $school, $status);
$table_name="forms";
$status=1;
$school = "SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT";
$sbahmreqnotif = count_deaninProcess_forms($table_name, $school, $status);
$table_name="forms";
$status=1;
$school = "SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES";
$snahsreqnotif = count_deaninProcess_forms($table_name, $school, $status);
$table_name="forms";
$status=1;
$school = "SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION";
$sastereqnotif = count_deaninProcess_forms($table_name, $school, $status);
$table_name="forms";
$status=1;
$school = "BASIC EDUCATION UNIT";
$beureqnotif = count_deaninProcess_forms($table_name, $school, $status);
$table_name="forms";
$status=1;
$school = "SCHOOL OF MEDICINE";
$somreqnotif = count_deaninProcess_forms($table_name, $school, $status);
$table_name="forms";
$status=1;
$school = "GRADUATE SCHOOL";
$gradreqnotif = count_deaninProcess_forms($table_name, $school, $status);
$reqnotif1 = count_inProcess_forms1();
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
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          
        </div>
        <div class="sidebar-brand-text mx-3">SPUP Registrar </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->  
      <?php if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ ?>
      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          
          <span>HOME</span></a>
      </li>
      <?php } ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     
      <?php if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ ?> 
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="inprocess_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>In ProcessForms</span>
        </a>
      
      </li>
      <?php } ?> 
      <?php if($_SESSION['access']=="3"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="sitedean_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($sitereqnotif == "0"){
            echo "<span> (sitedean)Requested Forms</span>";
          }else{
           echo "<span>(sitedean)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $sitereqnotif";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="sitecompleted_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>SITE Completed Forms</span>
        </a>
      
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="10"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="bao_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($reqnotif1 == "0"){
            echo "<span> (bao)Requested Forms</span>";
          }else{
           echo "<span>(bao)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $reqnotif1";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="baocompleted_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>BAO Completed Forms</span>
        </a>
      
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="4"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="sbahmdean_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($sbahmreqnotif == "0"){
            echo "<span> (sbahmdean)Requested Forms</span>";
          }else{
           echo "<span>(sbahmdean)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $sbahmreqnotif";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="sbahmcompleted_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>SBAHM Completed Forms</span>
        </a>
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="5"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="snahsdean_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($snahsreqnotif == "0"){
            echo "<span> (snahsdean)Requested Forms</span>";
          }else{
           echo "<span>(snahsdean)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $snahsreqnotif";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="snahscompleted_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>SNAHS Completed Forms</span>
        </a>
      
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="6"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="sastedean_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($sastereqnotif == "0"){
            echo "<span> (sastedean)Requested Forms</span>";
          }else{
           echo "<span>(sastedean)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $sastereqnotif";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="sastecompleted_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>SASTE Completed Forms</span>
        </a>
      
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="7"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="beudean_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($beureqnotif == "0"){
            echo "<span> (beudean)Requested Forms</span>";
          }else{
           echo "<span>(beudean)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $beureqnotif";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="beucompleted_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>BEU Completed Forms</span>
        </a>
      
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="8"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="somdean_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($somreqnotif == "0"){
            echo "<span> (somdean)Requested Forms</span>";
          }else{
           echo "<span>(somdean)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $somreqnotif";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="somcompleted_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>SOM Completed Forms</span>
        </a>
      
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="9"){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="graddean_req_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <?php 
          if ($gradreqnotif == "0"){
            echo "<span> (graddean)Requested Forms</span>";
          }else{
           echo "<span>(graddean)Requested Forms</span>";
          echo  "<span class='badge badge-danger badge-counter'> $gradreqnotif";
          }
        ?>
        </a>
        <a class="nav-link collapsed" href="gradcompleted_forms.php"  aria-expanded="true" aria-controls="collapseTwo">
        <span>GRADUATE SCHOOL Completed Forms</span>
        </a>
      
      </li>
      <?php } ?>
      <?php if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ ?>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="completed_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="archived_forms.php"   aria-expanded="true" aria-controls="collapseTwo">
        <span>Archived Forms</span>
        </a>
      
      </li>
        <li class="nav-item active">
        <a class="nav-link collapsed" href="logs.php"  aria-expanded="true" aria-controls="collapseUtilities">
          
          <span>Logs</span>
        </a>
          </li>
          <?php } ?>
          <?php if($_SESSION['access']=="1"){ ?>
          <hr class="sidebar-divider">
        <li class="nav-item active"> 
        <a class="nav-link" href="account_manage.php">
  
          <span>Account Manager</span></a>
      </li>
      <?php } ?>


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
          
          // echo "<h6 class='m-0 font-weight-bold text-primary'>Time:  $xtime</h6>";

          echo "<span class='m-0 font-weight-bold text-primary'>Time:&nbsp</span>
          <span id='hrs' class='m-0 font-weight-bold text-primary'> 0</span><span class='m-0 font-weight-bold text-primary'>:</span>
          <span id='mins' class='m-0 font-weight-bold text-primary'>0</span><span class='m-0 font-weight-bold text-primary'>:</span>
          <span id='secs' class='m-0 font-weight-bold text-primary'>0</span>";

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

</body>

</html>


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


<script src='http://code.jquery.com/jquery.js'></script>
        <script>
         $(document).ready(function(){
             setInterval(_initTimer, 1000);
         });
         function _initTimer(){
             $.ajax({
                 url: 'timer.php',
                 success: function(data) {
                    // console.log(data);
                     data = data.split(':');
                     $('#hrs').html(data[0]);
                     $('#mins').html(data[1]);
                     $('#secs').html(data[2]);
                 }
             });
         }
        </script>