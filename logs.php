<?php
// session_start();
include "header.php";
?>

    <div class="card w-100" style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked">LOGS</h1>
                </div>
                <div class="card-body bodyblacked">
                <div class="table-responsive" >
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0" >
        
        <thead class="tableblacked">
        <tr>
            <td>Log Id </td>
            <td>Action </td>
            <td>Date</td>
            <td>Time</td>
            <td>In-charge(username)</td>
            <td>In-charge(fullname)</td>
            <td>Account Type</td>
            
        </tr>
        </thead>

        <tfoot class="tableblacked">
        <tr>
            <td>Log Id</td>
            <td>Action </td>
            <td>Date</td>
            <td>Time</td>
            <td>In-charge(username)</td>
            <td>In-charge(fullname)</td>
            <td>Account Type</td>
        </tr>
        </tfoot>
    <tbody class="bodyblacked">
    <?php
        $table_name="logs";
        $column="log_id";
        $user_data=get_desc($table_name, $column);

        foreach ($user_data as $key => $row) {
            $log_id=$row['log_id'];
            $username=$row['username'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $acct_type=$row['acct_type'];
            $action=$row['action'];
            $xdate=$row['xdate'];
            $xtime=$row['xtime'];

    ?>
    <tr>
        <td><?= $log_id?></td>
        <td><?= $action?></td>
        <td><?= $xdate?></td>
        <td><?= $xtime?></td>
        <td><?= $username?></td>
        <td><?= $firstname . " " . $lastname?></td>
        <?php
        if($acct_type == "1"){
                    echo "<td>Admin</td>";
                }if($acct_type == "2"){
                    echo "<td>Employee</td>";
                }if($acct_type == "3"){
                    echo "<td>SITE Dean</td>";
                }if($acct_type == "4"){
                    echo "<td> SBAHM Dean</td>";
                }if($acct_type == "5"){
                    echo "<td>SNAHS Dean</td>";
                }if($acct_type == "6"){
                    echo "<td>SASTE Dean</td>";
                }if($acct_type == "7"){
                    echo "<td>BEU Dean</td>";
                }if($acct_type == "8"){
                    echo "<td>SoM Dean</td>";
                }if($acct_type == "9"){
                    echo "<td>GRADSCHOOL Dean</td>";
                }if($acct_type == "10"){
                    echo "<td>BAO</td>";
                }
                ?></td>
       
        

        <?php } ?>
    </tr>
    </tbody>
</table>
</div>
</div>
</div>
</div>
<?php include "footeradmin.php" ?>
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

