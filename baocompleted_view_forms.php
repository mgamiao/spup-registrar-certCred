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
    
    ?>



<div class="card w-100 " style="border:none;">
<div align="center">
                <div class="card-header bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked">View Form</h1>
                </div>
</div>
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
            $mailingaddress = $row['mailingaddress'];
            $courseCompleted = $row['coursecompleted'];
            $dateGrad = $row['dategraduated'];
            $underGrad = $row['undergraduate'];
            $mobileNum = $row['mobilenum'];
            $email = $row['email'];
            $fees = $row['fees'];
            $transfee = $row['transcriptfee'];
            $dipfee = $row['diplomafee'];
            $formfee = $row['formfee'];
            $certfee = $row['certfee'];
            $authfee = $row['authfee'];
            $servfee = $row['servicefee'];
            $docstamp = $row['docstamp'];
            $mailfee = $row['mailingfee'];
            $letterfee = $row['letterenvelope'];
            $torenvfee = $row['torenvelope'];
            $stickerfee = $row['stickerfee'];
            $status = $row['status'];
            $representname = $row['representname'];
            $studnum = $row['studentnumber'];
            $ornumber = $row['ornumber'];
            $dateApproved = $row['date_approved'];
            $previousbal = $row['previousbal'];
           
        ?>   
<body>
<div class="container card shadow pb-8 mb-5">

<form class="bodyblacked2 card-body"><br>
<h2>Personal Information</h2><br>
<div class="form-row">
    <div class="form-group col-md-2">
    <label for="studentNumber">Student Number</label>
      <input type="text" class="form-control" id="studentNumber" value="<?= $studnum?>" readonly>
    </div>
    <div class="form-group col-md-6">
    </div>
    <div class="form-group col-md-4">
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $firstName?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Middle Name</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $middleName?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $lastName?>" readonly>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mobile Number </label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $mobileNum?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Email </label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $email?>" readonly>
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputEmail4">School</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $school?>" readonly>
    </div>
       </div>
<br>
<h2>Academic Information</h2>
<br>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Type of Form</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $formType?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Reason</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $reason?>" readonly>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Number of Copies</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $numofCopies?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Number of Requests</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $numofRequest?>" readonly>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Course Completed</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $courseCompleted?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Date Graduated </label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $dateGrad?>" readonly>
    </div>
</div>


  <div class="form-group">
    <label for="inputAddress">Undergraduate</label>
    <input type="text" class="form-control" id="inputAddress" value="<?= $underGrad ?>" readonly>
  </div>

  <br>

  <h2>Claiming Information</h2>
      <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Mode of Claiming</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $modeofClaim?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Representative Name </label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $representname?>" readonly>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Mailing Address</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $mailingaddress?>" readonly>
    </div>
       </div>

<br>
    <h2>Breakdown of Fees</h2>
      <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Transcript Fee</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $transfee?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Diploma Fee </label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $dipfee?>" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Form 137A/138B</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $formfee?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Certification Fee</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $certfee?>" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Authentication Fee</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $authfee?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Service Fee(Online)</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $servfee?>" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Documentary Stamp</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $docstamp?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mailing Fee</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $mailfee?>" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Letter Envelope</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $letterfee?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">SPUP TOR Envelope</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $torenvfee?>" readonly>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">SPUP Sticker</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $stickerfee?>" readonly>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Previous Balance</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $previousbal?>" readonly>
    </div>
       </div>
    <div class="form-row">
    <div class="form-group col-md-12 mt-4">
      <label for="inputEmail4"><h4>Total Fee</h4></label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $fees?>" readonly>
    </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4"><h4>Official Receipt Number</h4></label>
        <input type="text" class="form-control" id="inputEmail4" value="<?= $ornumber?>" readonly>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4"><h4>Date Approved</h4></label>
        <input type="text" class="form-control" id="inputEmail4" value="<?= $dateApproved?>" readonly>
      </div>
    </div>
  </form>
</div>
            
<div align="center" class="mb-5">
        <a href="baocompleted_forms.php" class="btn btn-warning btn-icon-split btn-md">
        <span class="icon text-red-50">
        <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">
            Back
        </span>
            </a>
            </a>
        </td>

        <?php } ?>
        
</body>
</html>
</div>
</div>
</div>
<?php include "footeradmin.php" ?>

