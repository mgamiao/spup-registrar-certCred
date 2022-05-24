<?php
// session_start();
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
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-light text-dark'>
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
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-light text-dark'>
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
                <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY DELETED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==4){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                    <div class='card-body'>
                    PASSWORD CHANGED SUCCESSFULLY
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==5){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                    <div class='card-body'>
                    YOUR NEW PASSWORD & CONFIRMATION PASSWORD DO NOT MATCH
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
?>

<div class="card w-100 " style="border:none;">
            <div class="py-3 bordercolor" style="border:none;">
              <h1 class="m-0 headerblacked">ACCOUNT MANAGER</h1>
            </div>
            <div class="card-body bodyblacked">
                <a href="account_add.php" class="btn btn-success btn-icon-split" style="float:right; margin-bottom: 10px;">
    <span class="icon text-white-50">
        <i class="fas fa-plus"></i>
</span>
<span class="text">
    New Account
</span>
</a> 
              <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
    
    <thead class="tableblacked text-light" style="text-align:center;">
    <tr>
        <td>Username</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Contact</td>
        <td>User Type</td>
        <td>Option</td>

    </tr>
    </thead>

    <tfoot class="tableblacked text-light" style="text-align:center;">
    <tr>
        <td>Username</td>
        <td>Full Name</td>
        <td>Email</td>
        <td>Contact</td>
        <td>User Type</td>
        <td>Option</td>

    </tr>
    </tfoot>

    <tbody class="bodyblacked" style="text-align:center;">

    <?php
        $table_name="accounts";

        $user_data=get($table_name);

        foreach ($user_data as $key => $row) {
            $acc_id=$row['acc_id'];
            $username=$row['username'];
            $name=$row['firstname'] ." ". $row['middlename'] ." ". $row['lastname'];
            $contact=$row['contact'];
            $email=$row['email'];
            $user_type=$row['acct_type'];
            // if ($user_type==0){
            //     $user_type="GOVERNOR";
            // } elseif ($user_type==1){
            //     $user_type="FACULTY";
            // } elseif ($user_type==2){
            //     $user_type="DEAN";
            // } 

            if ($user_type == "1") {
                $user_type = "ADMIN";
            } if ($user_type == "2") {
                $user_type = "EMPLOYEE";
            } if ($user_type == "3") {
                $user_type = "SITE DEAN";
            } if ($user_type == "4") {
                $user_type = "SBAHM DEAN";
            } if ($user_type == "5") {
                $user_type = "SNAHS DEAN";
            } if ($user_type == "6") {
                $user_type = "SASTE DEAN";
            } if ($user_type == "7") {
                $user_type = "BEU DEAN";
            } if ($user_type == "8") {
                $user_type = "SOM DEAN";
            } if ($user_type == "9") {
                $user_type = "GRADSCHOOL DEAN";
            } if ($user_type == "10") {
                $user_type = "BAO";
            }

    ?>
    
    <tr>
        <!--<td><?= $acc_id ?></td>-->
        <td><?= $username ?></td>
        <td><?= $name ?></td>
        <td><?= $email ?></td>
        <td><?= $contact ?></td>
        <td><?= $user_type ?></td>


        <td>
            <a href="account_edit.php?id=<?= $acc_id?>" class="btn btn-warning btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    Edit
                </span>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="account_delete.php?id=<?= $acc_id?>" class="btn btn-danger btn-icon-split btn-md">
        <span class="icon text-red-50">
        <i class="far fa-trash-alt"></i>
        </span>
        <span class="text">
            Delete
        </span>
            </a>
            </a>
        </td>
    </tr>

        <?php   }   ?>
    </tbody>
</table>

<script src="template/vendor/jquery/jquery.min.js"></script>
    <!-- <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>   pag meron to ayaw gumana ng logout-->

    <!-- Core plugin JavaScript-->
    <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="template/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="template/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="template/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="template/js/demo/datatables-demo.js"></script>

</div>
</div>
</div>
</div>
</div>
<?php include "footeradmin.php" ?>
</div>