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
                    <table class="table table-bordered"  width="100%" cellspacing="0">
        
        <thead style="text-align:center;">
        <tr>
            <td>Full Name</td>
            <td>School</td>
            <td>Type of Form</td>
            <td>Date Requested</td>
            

        </tr>
        </thead>

        

        <tbody style="text-align:center;">

        <?php
        

        $table_name="forms";
        $enterYear = $_GET['y']; 
        $enterMonth = $_GET['m']; 
        // echo "Year: " . $enterYear . " " . "Month: " . $enterMonth;
        $userData=get_forms_month($enterYear, $enterMonth);

        foreach ($userData as $key => $row) {
            $id=$row['id'];
            $lastname=$row['lastname'];
            $firstname=$row['firstname'];
            $dept=$row['school'];
            $formType=$row['form_type'];
            $dateReq=$row['date']

    ?>
    

    <tr>
        <td><?= $firstname ." ". $lastname  ?></td>
         <td><?= $dept ?></td> 
        <td><?= $formType ?></td>
        <td><?= $dateReq ?></td>
        
        
    </tr>

                
        <?php    }   ?>
    </tbody>
</table>

</div>
</div>
</div>



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






