<?php
	session_start();
?>
<?php
 include "perfect_function.php"; ?>
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
<?php
          date_default_timezone_set('Asia/Singapore'); 
          $xdate=date('Y-m-d');
          $xtime=date('h:i:sa'); 
          echo "<h6 class='m-0 font-weight-bold text-dark'>Date: $xdate   &nbsp </h6>  "; 
          echo "<h6 class='m-0 font-weight-bold text-dark'>Time:  $xtime</h6>";
          ?>

<div class="header">
<a href="#default" class="headerpic"><img src="img/spup.png"></a>
  <div class="hdrbtn">
    <a class="header-right ui-btn-right" href="index1.php">Home</a>
    <a class="header-right ui-btn-right" href="#about">About</a>
    <a class="header-right ui-btn-right" href="contact.php">Contact</a>
  </div>
  
</div>



<body id="page-top">

<ul>
</div>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
         

  <!-- Logout Modal-->
  
  
  

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
 

</body>

</html>


