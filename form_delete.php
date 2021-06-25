<?php
$id = $_GET['id'];
include "header.php";
?>

<div align=center class="mt-5">
        <!-- Begin Page Content -->
        <div class="container-fluid ">

<div class="card shadow w-50" style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                  <h1 class="m-0 headerblacked">DELETE FORM</h1>
                </div>
                
                <div class="card-body">
                  <h5 class="text-dark">Are you sure you want to delete this requested form?</h5>
           <br>
                <i><a href="form_delete_proc.php?id=<?= $id?>" class="btn btn-success btn-icon-split btn-md">
                <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">
                Continue
            </span>
            </a>
        &nbsp;&nbsp;&nbsp;
        <a href="pend_forms.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
        <span class="icon text-white-50">
                <i class="fas fa-times"></i>
            </span>
            <span class="text">
                Cancel
            </a>
          
            </div>

              </div>
</div>
</div>
</div>
</div>
