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
                <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
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
                <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
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
            $mailingaddress = $row['mailingaddress'];
            $courseCompleted = $row['coursecompleted'];
            $dateGrad = $row['dategraduated'];
            $underGrad = $row['undergraduate'];
            $mobileNum = $row['mobilenum'];
            $email = $row['email'];
            $status = $row['status'];
            $representname = $row['representname'];
            $number_pages = $row['number_pages'];
            $number_sets = $row['number_sets'];
            $number_envelope = $row['number_envelope'];
            $localAbroad = $row['localAbroad'];
            $country = $row['country'];
           
        ?>   
<body>
<div class="container card shadow pb-8 mb-5">

<form method="post"  action="<?= $form_location?> "class="bodyblacked2 card-body"><br>
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
    <div class="form-group col-md-4">
      <label for="inputEmail4">Type of Form</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $formType?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Reason</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $reason?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Local/Abroad</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $localAbroad ." - ". $country?>" readonly>
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
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Number of Pages:</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $number_pages?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Number of Sets for Authentication :</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $number_sets?>" readonly>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Quantity of SPUP Envelope/Sticker:</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $number_envelope?>" readonly>
    </div>
</div>

<br>
    <h2>Breakdown of Fees</h2>
      <br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Transcript Fee</label>
      <input type="number" class="form-control" id="inputEmail4" value="0" name="transfee" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Diploma Fee </label>
      <input type="number" class="form-control" id="inputPassword4" value="0" name="dipfee" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Form 137A/138B</label>
      <input type="number" class="form-control" id="inputEmail4" value="0" name="formfee" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Certification Fee</label>
      <input type="number" class="form-control" id="inputPassword4" value="0" name="certfee" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Authentication Fee</label>
      <input type="number" class="form-control" id="inputEmail4" value="0" name="authfee" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Service Fee(Online)</label>
      <input type="number" class="form-control" id="inputPassword4" value="0" name="servfee" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Documentary Stamp</label>
      <input type="number" class="form-control" id="inputEmail4" value="0" name="docstamp" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mailing Fee</label>
      <input type="number" class="form-control" id="inputPassword4" value="0" name="mailfee" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Letter Envelope</label>
      <input type="number" class="form-control" id="inputEmail4" value="0" name="letterfee" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">SPUP TOR Envelope</label>
      <input type="number" class="form-control" id="inputPassword4" value="0" name="torenvfee" required>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">SPUP Sticker</label>
      <input type="number" class="form-control" id="inputEmail4" value="0" name="stickerfee" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Previous Balance:</label>
      <input type="number" class="form-control" id="inputEmail4" value="0" name="previousbal" required>
    </div>
</div>
        <!-- <div class="form-row">
    <div class="form-group col-md-12 mt-4">
      <label for="inputEmail4"><h4>Total Fee</h4></label> 
       <input type="number" class="form-control" id="inputEmail4" value="0" name="fees">
    </div>  -->
   
  </div>
    
    <div align="center" class="mb-5 mt-5">
            <button type="submit" class="btn btn-success btn-icon-split btn-md" style="width:120px;" >
          <span class="icon text-red-50">
          <i class="fas fa-check"></i>
            </span>
            <span class="text">
              Continue
            </span>
          </button>

          </form>
            <!-- <a href="bao_accept_proc.php?id=<?= $id?>" class="btn btn-success btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    Approve
                </span>
            </a> -->

            <a href="bao_form_decline.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="fas fa-times"></i>
            </span>
            <span class="text">
                   Decline
                </span>
            </a>


        <a href="bao_req_forms.php" class="btn btn-warning btn-icon-split btn-md">
        <span class="icon text-red-50">
        <i class="fas fa-arrow-left"></i>
        </span>
        <span class="text">
            Back
        </span>
            </a>
            </a>
        

        <?php } ?>

</div>   
   </div>

        
</body>
</html>


<?php
include "footeradmin.php";
?>