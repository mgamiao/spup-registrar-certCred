<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template -->
  <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


    <?php
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY ADDED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
    
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==2){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY EDITED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==3){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY DELETED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==5){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
                    <div class='card-body'>
                    STUDENT SUCCESSFULLY DEACTIVATED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
    ?>



<div class="card w-100 " style="border:none;">
<div align="center">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked">VIEW FORM</h1>
                </div>
</div>
<br>
    <?php
       $id = $_GET['id'];
      
   
       $table_name = "forms";
       $get_userData = get_where($table_name, $id);
       //fetch result and pass it  to an array
       foreach ($get_userData as $key => $row) {
            $id = $row['id'];
            $lastName = $row['lastname'] ;
            $firstName = $row['firstname'] ;
            $middleName = $row['middlename'] ;
            $school = $row['school'];
            $formType = $row['form_type'];
            $numofCopies = $row['numofcopies'];
            $numofRequest = $row['numofrequest'];
            $reason = $row['reason'];
            $modeofClaim = $row['modeofclaiming'];
            $address = $row['address'];
            $courseCompleted = $row['coursecompleted'];
            $dateGrad = $row['dategraduated'];
            $underGrad = $row['undergraduate'];
            $mobileNum = $row['mobilenum'];
            $email = $row['email'];
            $fees = $row['fees'];
            $status = $row['status'];
           
        ?>   
<body>
<div class="container" >

  <form>
    <div class="form-group">
      <h6 style="color:black;">Last Name:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $lastName?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">First Name:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $firstName?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Middle Name:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $middleName?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">School:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $school?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Type of Form:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $formType?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Number of Copies:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $numofCopies?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Number of Request:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $numofRequest?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Reason/Purpose:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $reason?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Mode of Claiming:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $modeofClaim?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Address:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $address?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Course Completed:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $courseCompleted?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Date Graduated:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $dateGrad?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Undergraduate:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $underGrad?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Mobile Number:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $mobileNum?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Email:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $email?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Total Fee:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $fees?>" readonly>
    </div>
  </form>
</div>
<br>
            
<div align="center">
        <?php if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ ?>
        <a href="archived_forms.php" class="btn btn-danger btn-icon-split btn-md">
        <span class="icon text-red-50">
        <i class="far fa-trash-alt"></i>
        </span>
        <span class="text">
            Back
        </span>
            </a>
            </a>
        </td>

        <?php } ?>
   <?php } ?>

        
</body>
</html>

