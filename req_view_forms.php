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
<div align=center>

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



<div class="card w-100 bg-gradient-dark" style="border:none;">
                <div class="card-header py-3 bg-secondary" style="border:none;">
                <h1 class="m-0 font-weight-bold text-light">View Forms</h1>
                </div>
                <div class="card-body">
                <form method="post" action="stud_search.php">
                    <div class="input-group mb-3 w-25 " style="float: left;">
                        <input type="text" class="form-control" placeholder="" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary text-light" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>

               

                <div class="table-responsive" >
                    <table class="table" id="dataTable" width="100%" cellspacing="0" >
        
        <thead class="bg-secondary" style="text-align: center; color: white;">
        <tr>
            <td>Last Name</td>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>School</td>
            <td>Type of Form</td>
            <td>No. of Copies</td>
            <td>No. of Request</td>
            <td>Reason</td>
            <td>Mode of Claiming</td>
            <td>Address</td>
            <td>Course Completed</td>
            <td>Date Graduated</td>
            <td>Undergraduate</td>
            <td>Mobile Number</td>
            <td>E-mail</td>
            <td>Option</td>
            
        </tr>
        </thead>

        <tfoot class="bg-secondary" style="text-align: center; color: white;">
        <tr>
            <td>Last Name</td>
            <td>First Name</td>
            <td>Middle Name</td>
            <td>School</td>
            <td>Type of Form</td>
            <td>No. of Copies</td>
            <td>No. of Request</td>
            <td>Reason</td>
            <td>Mode of Claiming</td>
            <td>Address</td>
            <td>Course Completed</td>
            <td>Date Graduated</td>
            <td>Undergraduate</td>
            <td>Mobile Number</td>
            <td>E-mail</td>
            <td>Option</td>
        </tr>
        </tfoot>

        <tbody style="text-align: center; color: white;">
        
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
            $status = $row['status'];
           
        ?>
       <tr>
        <td><?= $lastName?></td>
        <td><?= $firstName?></td>
        <td><?= $middleName?></td>
        <td><?= $school?></td>
        <td><?= $formType?></td>
        <td><?= $numofCopies?></td>
        <td><?= $numofRequest?></td>
        <td><?= $reason?></td>
        <td><?= $modeofClaim?></td>
        <td><?= $address?></td>
        <td><?= $courseCompleted?></td>
        <td><?= $dateGrad?></td>
        <td><?= $underGrad?></td>
        <td><?= $mobileNum?></td>
        <td><?= $email?></td>
            
   
        <?php if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ ?>
            
        <td>
        &nbsp;&nbsp;
            <a href="req_accept_proc.php?id=<?= $id?>" class="btn btn-success btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    Finalize Request
                </span>
            </a>
        
        &nbsp;&nbsp;
            <a href="print.php?id=<?= $id?>" class="btn btn-warning btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    Print
                </span>
            </a>
        
       
        &nbsp;&nbsp;
        
        <a href="req_forms.php" class="btn btn-danger btn-icon-split btn-md">
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
    </tr>
   <?php } ?>

        
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>


