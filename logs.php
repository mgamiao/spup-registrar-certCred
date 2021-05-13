<?php
// session_start();
include "header.php";
?>

<div class="card w-100 bg-gradient-dark" style="border:none;">
                <div class="card-header py-3 bg-secondary" style="border:none;">
                <h1 class="m-0 font-weight-bold text-light">LOGS</h1>
                </div>
                <div class="card-body">

                <div class="table-responsive" >
                    <table class="table" id="dataTable" width="100%" cellspacing="0" >
        
        <thead class="bg-secondary" style="text-align: center; color: white;">
        <tr>
            <td>Action </td>
            <td>Date</td>
            <td>Time</td>
            <td>In-charge(username)</td>
            <td>In-charge(fullname)</td>
            <td>Account Type</td>
            
        </tr>
        </thead>

        <tfoot class="bg-secondary" style="text-align: center; color: white;">
        <tr>
            <td>Action </td>
            <td>Date</td>
            <td>Time</td>
            <td>In-charge(username)</td>
            <td>In-charge(fullname)</td>
            <td>Account Type</td>
        </tr>
        </tfoot>
<tbody style="text-align: center; color: white;">
    <?php
        $table_name="logs";
        $column="log_id";
        $user_data=get_desc($table_name, $column);

        foreach ($user_data as $key => $row) {
            $log_id=$row['log_id'];
            $username=$row['username'];
            $fullname=$row['fullname'];
            $acct_type=$row['acct_type'];
            $action=$row['action'];
            $xdate=$row['xdate'];
            $xtime=$row['xtime'];

    ?>
    <tr>
        <td><?= $action?></td>
        <td><?= $xdate?></td>
        <td><?= $xtime?></td>
        <td><?= $username?></td>
        <td><?= $fullname?></td>
        <?php
        if($acct_type == "1"){
                    echo "<td>Admin</td>";
                }else{
                    echo "<td>Employee</td>";
                }?></td>
       
        

        <?php } ?>
    </tr>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
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

