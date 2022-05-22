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
                <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                    <div class='card-body'>
                    RECORD SUCCESSFULLY APPROVED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    ?>

<div class="card w-100 " style="border:none;">
                <div class="card-headerbordercolor" style="border:none;">
                <h1 class="m-0 headerblacked">COMPLETED FORMS</h1>
                </div>
                <div class="card-body bodyblacked">
                <div class="table-responsive" >
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" >
        
        <thead class="tableblacked">
        <tr>
            <td>Student Number</td>
            <td>Full Name</td>
            <td>School</td>
            <td>Type of Form</td>
            <td>Reason/Purpose</td>
            <td>E-mail</td>
            <td>Option</td>
            
            
        </tr>
        </thead>

        <tfoot class="tableblacked">
        <tr>
            <td>Student Number</td>
            <td>Full Name</td>
            <td>School</td>
            <td>Type of Form</td>
            <td>Reason/Purpose</td>
            <td>E-mail</td>
            <td>Option</td>
            

        </tr>
        </tfoot>

        <tbody class="bodyblacked">

    <?php
        $table_name = "forms";
        $column = "status";
        $condition = 2;
        $get_userData = get_where_custom($table_name, $column, $condition);
        $table_name = "forms";
        $column = "school";
        $condition = "SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT";
        $get_userData = get_where_custom($table_name, $column, $condition);

        foreach ($get_userData as $key => $row) {
            
            $id = $row['id'];
            $studnum = $row['studentnumber'];
            $lastName = $row['lastname'] ;
            $firstName = $row['firstname'] ;
            $middleName = $row['middlename'] ;
            $school = $row['school'];
            $formType = $row['form_type'];
            $reason = $row['reason'];
            $email = $row['email'];
            $status = $row['status'];
            

    ?>
    
<?php if($status=="2" || $status=="3" || $status=="4" || $status=="5" && $school == "SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT"){ ?>
    <tr>
        <td><?= $studnum?></td>
        <td><?= $firstName . " " . $middleName . " " . $lastName?></td>
        <td><?= $school?></td>
        <td><?= $formType?></td>
        <td><?= $reason?></td>
        <td><?= $email?></td>
        

        
            
        <td>
        <!-- <a href="stud_deact.php?id=<?= $id?>" class="btn btn-secondary btn-icon-split" style="margin-left: 1%;">
                    <span class="icon text-red-50">
                    <i class="fas fa-user-slash"></i>
                </span>
                <span class="text">
                    DEACTIVATE
                </span>
        </a> -->
        &nbsp;&nbsp;
            <a href="sbahmcompleted_view_forms.php?id=<?= $id?>" class="btn btn-success btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="fas fa-eye"></i>
            </span>
            <span class="text">
                    View
                </span>
            </a>
        </td>

        <?php } ?>
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


