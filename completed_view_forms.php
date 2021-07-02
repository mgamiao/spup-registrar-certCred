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
  <style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

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
                <div class="py-3 bordercolor" style="border:none;">
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
            $paymentphoto = $row['paymentphoto'];
            $status = $row['status'];
            $photo_url = base_url().'user_payment/'.$paymentphoto;
            $representname = $row['representname'];
           
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
      <input type="text" class="form-control" id="inputEmail4" value="<?= $address?>" readonly>
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
       </div>
       <div class="form-row">
    <div class="form-group col-md-12 mt-4">
      <label for="inputEmail4"><h4>Total Fee</h4></label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $fees?>" readonly>
    </div>
    <div class="form-row">
    <div class="form-group col-md-12 mt-4">
      <label for="inputEmail4">Proof of Payment</label>
      <?php
							if ($paymentphoto == "") {
							echo "<i>No photo available.</i>";
							}
							else {
							?>
							<img id="myImg" src="<?= $photo_url ?>" style="width: 100%;" class="img-responsive">
							<?php
							}
						?>
    </div>
  </form>
</div>
<br>
  </div>
            
<div align="center" class="mb-5">
        <?php if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ ?>
          <a href="req_accept_proc.php?id=<?= $id?>" class="btn btn-success btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="fas fa-check"></i>
            </span>
            <span class="text">
                   Approve
                </span>
            </a>
            <a href="comp_decline.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="fas fa-times"></i>
            </span>
            <span class="text">
                    Decline
                </span>
            </a>
       
        <a href="completed_forms.php" class="btn btn-warning btn-icon-split btn-md">
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
   <?php } ?>

<div id="myModal" class="modal">
<span class="close">&times;</span>
<img class="modal-content" id="img01">
<div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>


</body>
</html>
</div>
</div>
<?php include "footeradmin.php" ?>