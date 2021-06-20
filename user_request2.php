<?php include "user_header.php"; 
 if ($_SESSION['captchaResult']=="") {
  header("Location: user_terms.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</head>
<body onload="checkStatus()">
<?php
if (isset($_SESSION['alert_msg'])){
        if ($_SESSION['alert_msg']==1){
            echo "
                <div class='card mb-4 py-3 border-bottom-success bg-gradient-dark text-light'>
                    <div class='card-body'>
                    REQUESTED FORM SUCCESSFULLY SUBMITTED
                    </div>
                </div>";
                unset($_SESSION['alert_msg']);
        }
    }
    ?>
      <?php
      date_default_timezone_set('Asia/Singapore'); 
      $xdate=date('Y-m-d');
      $xtime=date('h:i:sa'); 
      ?>
      <?php
      $_SESSION['date'] = $_POST['date'];
      $_SESSION['studnum'] = $_POST['studnum']; 
      $_SESSION['lastname'] = $_POST['lastname']; 
      $_SESSION['middlename'] = $_POST['middlename'];
      $_SESSION['firstname'] = $_POST['firstname']; 
      $_SESSION['school'] = $_POST['school']; 
      $_SESSION['email'] = $_POST['email']; 
      $_SESSION['mobilenum'] = $_POST['mobilenum']; 
        
      ?>


<div class="card w-100 " style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked"> REQUEST FORM - FORM INFORMATION</h1>
                </div>
                <div class="card-body">

<div class="container" >    
  <h6 style="color:red"> * Required </h6><br>
  <form method ="post" action="user_req_proc.php">
    <h6>Type of Form: <span style="color:red">*</h6></span>
    <select name="form_type" class="custom-select" required autocomplete=off>
    <option value="">Select type of form:</option>
    <option value="Diploma">Diploma</option>
    <option value="Form137A">Form 137A</option>
    <option value="Transcript of records">Transcript of Records</option>
    <option value="Certificate of Enrolment">Certificate of Enrollment</option>
    <option value="Certificate of Grades">Certificate of Grades</option>
    <option value="Certificate of GWA">Certificate of General Weighted Average</option>
    <option value="Certificate of Graduation">Certificate of Graduation</option>
    <option value="Certificate of English as Medium of Instruction">Certificate of English as Medium of Instruction</option>
    <option value="Certificate of Units Earned">Certificate of Units Earned</option>
    <option value="Certified True Copy of Documents (TOR/Diploma)">Certified True Copy of Documents (TOR/Diploma)</option>
    <option value="Course Description">Course Description</option>
    <option value="Certification, Authentication and Verification">Certification, Authentication and Verification (Red Ribbon)</option>
    <option value="Transfer credentials">Transfer Credentials</option>
    </select>
    <div class="form-group">
      <h6>Number of Copies<span style="color:blue">(maximum of 3): </span><span style="color:red">*</h6></span>
      <input type="number" class="form-control"  placeholder="Enter Number of Copies" name="numofcopies" required autocomplete=off min=1 max=3>
    </div>
    <h6>Number of Request:</h6>
    <select name="numofrequest" class="custom-select"  autocomplete=off>
    <option value="">Select number of request:</option>
    <option value="1">First Request</option>
    <option value="2">Second Request</option>
    <option value="3">Third Request</option>
    </select>
    <h6>Reason/Purpose: <span style="color:red">*</h6></span>
    <select name="reason" class="custom-select" required autocomplete=off>
    <option value="">Select reason/purpose:</option>
    <option value="transfer to another school">Transfer to another school</option>
    <option value="Board Examination">Board Examination</option>
    <option value="For Reference">For Reference(Employment/Promotion)</option>
    <option value="Scholarship">Scholarship</option>
    </select>
    
    <h6>Mode of Claiming: <span style="color:red">*</h6></span>
    <select name="modeofclaiming" class="custom-select" required autocomplete=off>
    <option value="">Select mode of claiming:</option>
    <option value="Personal Pick-up">Personal Pick-up</option>
    <option value="Through Representative"> Through Representative</option>
    <option value="Through Courier">Through Courier</option>
    </select>
    <div class="form-group">
      <h6>Address <span style="color:blue">(if through courier please add address):</h6></span>
      <input type="text" class="form-control"  placeholder="Enter Address" name="address"  autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Course Completed:</h6>
      <input type="text" class="form-control"  placeholder="Enter Course Completed" name="coursecompleted"  autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Date Graduated:</h6>
      <input type="date" class="form-control"  placeholder="Enter Date Graduated" name="dategraduated" autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Undergraduate(COURSE, SEMESTER AND LAST ACADEMIC YEAR ATTENDED AT ST. PAUL UNIVERSITY PHILIPPINES):</h6>
      <input type="text" class="form-control"  placeholder="Enter COURSE, SEMESTER AND LAST ACADEMIC YEAR ATTENDED AT ST. PAUL UNIVERSITY PHILIPPINES" name="undergraduate"  autocomplete=off>
    </div>
    <br>
    <!-- <h6 style="color:red; "><i> Note: Please make sure that all information above are correct before clicking submit </h6> </i>    -->
    <input type="checkbox" id="agree_again" name="agree" value="ON">
    <label><h6 style="color:red; "><i> Note: Please make sure that all information given are correct before clicking submit </h6></i></label> 
    

    <p id="text" ><button type="submit" class="btn btn-primary custombutton">Submit</button></p>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
function checkStatus() {
        console.log('reached');
        if ($('#agree_again').is(":checked")) {
            $(".custombutton").attr('disabled', false);
        } else {
            $(".custombutton").attr('disabled', true);
        }
    }
    $("#agree_again").change(function () {
        checkStatus();
    })
</script>
</body>
</html>
<?php include "footer.php" ?>
