<?php
$id = $_GET['id'];
include "header.php";
?>

<div align=center>
        <!-- Begin Page Content -->
        <div class="container-fluid">

<div class="card shadow w-50" style="border:none;">
                <div class=" py-3 bordercolor" style="border:none;">
                  <h1 class="m-0 headerblacked">DECLINE FORM</h1>
                </div>
                
                <div class="card-body">
                  <h5 class="text-dark">Are you sure you want to decline this requested form?</h5>
           <br>
                <form method = "post" action = "bao_form_decline_proc.php?id=<?= $id?>">
                <h6 class="text-dark">Input your reason of declining this form</h6>
                  <textarea name="reason" rows="4" cols="50" required></textarea>
                  <br>
                <button class="btn btn-success btn-icon-split btn-md">
                <span class="icon text-white-50">
                <i class="fas fa-check"></i>
                </span>  
            <span class="text">
                Continue
            </span>
            </button>
        &nbsp;&nbsp;&nbsp;
        <a href="bao_req_view_forms.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
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
