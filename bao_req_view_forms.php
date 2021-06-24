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
                <div class=" py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked">View Form</h1>
                </div>
                </div>


               

<br>
    <?php
       $id = $_GET['id'];
       $form_location = "bao_accept_proc.php?id=".$id;
   
       $table_name = "forms";
       $get_userData = get_where($table_name, $id);
       //fetch result and pass it  to an array
       foreach ($get_userData as $key => $row) {
            $id = $row['id'];
            $studnum = $row['studentnumber'];
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
<body>
<div class="container" >

  <form method="post" action="<?= $form_location ?>">
    <div class="form-group">
      <h6 style="color:black;">Student Number:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $studnum?>" readonly>
    </div>
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
      <h6 style="color:black;">Reason/Purpose:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $reason?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Mode of Claiming:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $modeofClaim?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Mobile Number:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $mobileNum?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Email:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $email?>" readonly>
    </div>
    </div>
    <br>
    <div class="container">
    <div class="card w-100 " style="border:none;">
    <div align="center">
                <div class="py-3 bordercolor " style="border:none;">
                <h1 class="m-0 headerblacked">Process Payment</h1>
                </div>
                </div>
                <br>
    <h6 style="color:black;">Transcript Fee:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;"  value= "0" name="transfee" placeholder="Enter amount of payment"  autocomplete="off">
    <h6 style="color:black;">Diploma Fee:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;"  value= "0" name="dipfee" placeholder="Enter amount of payment"  autocomplete="off">
    <h6 style="color:black;">Form 137A/138B:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="formfee" placeholder="Enter amount of payment"  autocomplete="off">
    <h6 style="color:black;">Certification Fee:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="certfee" placeholder="Enter amount of payment"  autocomplete="off">
    <h6 style="color:black;">Authentication Fee:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="authfee" placeholder="Enter  amount of payment"  autocomplete="off">
    <h6 style="color:black;">Service Fee(Online):</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="servfee" placeholder="Enter amount of payment"  autocomplete="off">
    <h6 style="color:black;">Documentary Stamp:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="docstamp" placeholder="Enter  amount of payment"  autocomplete="off">
    <h6 style="color:black;">Mailing/Shipping Fee:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="mailfee" placeholder="Enter  amount of payment"  autocomplete="off">
    <h6 style="color:black;">Letter Envelope:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="letterfee" placeholder="Enter  amount of payment"  autocomplete="off">
    <h6 style="color:black;">SPUP TOR Envelope:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="torenvfee" placeholder="Enter  amount of payment"  autocomplete="off">
    <h6 style="color:black;">SPUP Sticker:</h6>
    <input type="number" class="form-control"  style="color:black; font-weight:bold;" value= "0" name="stickerfee" placeholder="Enter  amount of payment"  autocomplete="off">
    <div align="center">
    <br>
    <button type="submit" class="btn btn-success btn-icon-split btn-md" style="width:120px;" >
	<span class="icon text-black-50">
	<i class="fas fa-check"></i>
		</span>
		<span class="text">
			Continue
		</span>
	</button>

  </form>  

  <a href="bao_form_decline.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                   Decline
                </span>
            </a>

        <a href="bao_req_forms.php" class="btn btn-warning btn-icon-split btn-md">
        <span class="icon text-red-50">
        <i class="far fa-trash-alt"></i>
        </span>
        <span class="text">
            Back
        </span>

        <?php } ?>
   
</div>   
   

        
</body>
</html>


