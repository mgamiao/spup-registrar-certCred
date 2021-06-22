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

<div class="card w-100" style="border:none;">
<div align="center">
                <div class=" py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked">VIEW FORM</h1>
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
            $representname = $row['representname'];
            $representid = $row['representid'];
            $address = $row['address'];
            $courseCompleted = $row['coursecompleted'];
            $dateGrad = $row['dategraduated'];
            $underGrad = $row['undergraduate'];
            $mobileNum = $row['mobilenum'];
            $email = $row['email'];
            $status = $row['status'];
            $photo_url = base_url().'representative_id/'.$representid;
           
        ?>   
<body>
<style>
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
<div class="container">

  <form>
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
      <h6 style="color:black;">Number of Request:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $numofRequest?>" readonly>
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
      <h6 style="color:black;">Representative Name:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $representname?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Representative Valid ID:</h6>
            <?php
							if ($representid == "") {
							echo "<i>No photo available.</i>";
							}
							else {
							?>
							<img id="myImg" src="<?= $photo_url ?>" style="height: 100;width: 100;" class="img-responsive">
							<?php
							}
						?>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Address:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $address?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Course Completed:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $courseCompleted?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Date Graduated:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $dateGrad?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Undergraduate:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $underGrad?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Mobile Number:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $mobileNum?>" readonly>
    </div>
    <div class="form-group">
      <h6 style="color:black;">Email:</h6>
      <input type="text" class="form-control"  style="color:black; font-weight:bold;" value="<?= $email?>" readonly>
    </div>
  </form>
</div>
<br>


<br>
<div align="center" class="mb-5">
        <?php if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ ?>
            <a href="accept_proc.php?id=<?= $id?>" class="btn btn-success btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                    Approve
                </span>
            </a>
            <a href="form_decline.php?id=<?= $id?>" class="btn btn-danger btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                   Decline
                </span>
            </a>
            <a href="pend_forms.php" class="btn btn-warning btn-icon-split btn-md">
            <span class="icon text-red-50">
            <i class="far fa-edit"></i>
            </span>
            <span class="text">
                   Back
                </span>
            </a>
        

        <?php } ?>
    <?php } ?>
    </div>
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

<?php include "footer.php" ?>