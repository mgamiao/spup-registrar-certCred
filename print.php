<?php
// session_start();
include "header_print.php";
include "perfect_function.php"; 
?>

<div align=center>

<div class="card w-100" style="margin-top: 20px; float: left;">
                <div class="card-header py-3 bg-secondary">
                <h6 class="m-0 font-weight-bold text-white">FORM INFORMATION</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        
        <thead style="text-align:center;">
        <tr>
            <td>Full Name</td>
            <td>Department</td>
            <td>Type of Form</td>
            

        </tr>
        </thead>

        <tfoot style="text-align:center;">
        <tr>
            <td>Full Name</td>
            <td>Department</td>
            <td>Type of Form</td>
           

        </tr>
        </tfoot>

        <tbody style="text-align:center;">

        <?php
        $table_name="forms";
        $id = $_GET['id'];
        $userData=get_where($table_name, $id);

        foreach ($userData as $key => $row) {
            $id=$row['id'];
            $fullname=$row['fullname'];
            $dept=$row['dept'];
            $formType=$row['form_type'];

    ?>
    

    <tr>
        <td><?= $fullname ?></td>
         <td><?= $dept ?></td> 
        <td><?= $formType ?></td>
        
        
    </tr>

                
        <?php    }   ?>
    </tbody>
</table>

</div>
</div>
</div>
<!-- ____________________________________________________________________________________________________________________ -->
<?php
    if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success'>
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
                <div class='card mb-4 py-3 border-bottom-success'>
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
                <div class='card mb-4 py-3 border-bottom-success'>
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
                <div class='card mb-4 py-3 border-bottom-success'>
                    <div class='card-body'>
                    VIOLATION SUCCESSFULLY COMPLIED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }

    // ECHO $_SESSION['committer_id'];
    ?>
<!-- ____________________________________________________________________________________________________________________ -->


</table>

</div>
</div>
</div>

<!-- <div class="" style="margin-top: 23px;">

<a href="violation_add.php?id=<?= $id?>" class="btn btn-danger btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">
            Add Violation
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        </a>

<a href="violation_view.php?id=<?= $id?>" class="btn btn-success btn-icon-split" style="margin-top: 10px;">
        <span class="icon text-white-50">
            <i class="fas fa-print"></i>
        </span>
        <span class="text">
            Print violation
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        </a>

<a href="violation_view.php?id=<?= $id?>" class="btn btn-dark btn-icon-split" style="margin-top: 10px;">
        <span class="icon text-white-50">
            <i class="fas fa-print"></i>
        </span>
        <span class="text">
            View violation and attendance
        </span>
        </a>

<a href="violation_active_manage.php" class="btn btn-secondary btn-icon-split" style="margin-top: 10px;">
        <span class="icon text-dark-50">
            <i class="fas fa-user-times"></i>
        </span>
        <span class="text">
            Return to student list
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span>
        </a>
</div> -->
</div>





