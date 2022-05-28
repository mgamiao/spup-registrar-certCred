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
<body>
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
			if (isset($_SESSION['pic_errormsg'])) {
			?>
			<div class="alert alert-warning">
				<?= $_SESSION['pic_errormsg'] ?>
			</div>
			<?php
			}
			unset($_SESSION['pic_errormsg']);
			?>
      <?php
      date_default_timezone_set('Asia/Singapore'); 
      $xdate=date('Y-m-d');
      $xtime=date('h:i:sa'); 
      ?>
      <?php
      $_SESSION['studnum'] = $_POST['studnum']; 
      $_SESSION['school'] = $_POST['school'];
      $_SESSION['degree'] = $_POST['degree'];
      $_SESSION['specialization'] = $_POST['specialization'];
      $_SESSION['coursecompleted'] =$_POST['coursecompleted'];
      $_SESSION['dategraduated'] =$_POST['dategraduated'];
      $_SESSION['undergraduate'] =$_POST['undergraduate'];
        
      ?>


<div class="card w-100 " style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked"> REQUEST FOR FORM</h1>
                </div>
                <div class="card-body">

<div class="container" >  
    <h6 style="color:red"> * Required </h6><br>
    <form method ="post" action="user_request4.php">
    
    <input type="radio" name="localAbroad" id= "Local" onclick = "local()" value="local" required>
    <label for="Local">Local</label>
    <input type="radio" name="localAbroad" id= "Abroad" onclick = "abroad()" value="abroad" required>
    <label for="Abroad">Abroad</label>
    <div id="country" style="display: none;">
      <h6>For ABROAD, Please indicate the country of destination</h6><input type="text" class="form-control" id="countryInput" name="country" value=""   autocomplete=off><br>
    </div>

    <h6>Type of Form: <span style="color:red">*</h6></span>
    <select name="form_type" class="custom-select" id= "typeofForm" onchange = "formtype()" required autocomplete=off>
    <option value=" ">Select type of form:</option>
    <option value="Diploma">Diploma</option>
    <option value="Form137A">Form 137A</option>
    <option value="Transcript of records">Transcript of Records</option>
    <option value="Certificate of Enrollment">Certificate of Enrollment</option>
    <option value="Certificate of Grades">Certificate of Grades</option>
    <option value="Certificate of GWA">Certificate of General Weighted Average</option>
    <option value="Certificate of Graduation">Certificate of Graduation</option>
    <option value="Certificate of English as Medium of Instruction">Certificate of English as Medium of Instruction</option>
    <option value="Certificate of Units Earned">Certificate of Units Earned</option>
    <option value="Certified True Copy of Documents (TOR/Diploma)">Certified True Copy of Documents (TOR/Diploma)</option>
    <option value="Course Description">Course Description</option>
    <option value="Certification, Authentication and Verification">Certification, Authentication and Verification (Red Ribbon)</option>
    <option value="Transfer credentials">Transfer Credentials</option>
    </select><br><br>
    <div id="form137" style="display: none;">
      <h6>Please indicate your Section and Year Graduated</h6><input type="text" class="form-control" id="form137Input"  name="section_yrgrad"  autocomplete=off><br>
    </div>
    <div class="form-group">
      <h6>Specify the Semester and Academic Year</h6>
      <input type="text" class="form-control" placeholder="For Certification of Grades, Enrollment, and Units Earned " name="semesterAcad"  autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Number of Copies </span><span style="color:red">*</h6></span>
      <input type="number" class="form-control"  placeholder="Enter Number of Copies" name="numofcopies" required autocomplete=off min=1>
    </div>
    <h6>Number of Request:<span style="color:red">*</span></h6>
    <select name="numofrequest" class="custom-select"  required autocomplete=off>
    <option value="">Select number of request:</option>
    <option value="1">First Request</option>
    <option value="2">Second Request</option>
    <option value="3">Third Request</option>
    </select><br><br>
    <h6>Reason/Purpose: <span style="color:red">*</h6></span>
    <select name="reason" class="custom-select" id= "reason" onchange = "Reason()" required autocomplete=off>
    <option value=" ">Select reason/purpose:</option>
    <option value="transfer to another school">Transfer to another school</option>
    <option value="Board Examination">Board Examination</option>
    <option value="For Reference">For Reference(Employment/Promotion)</option>
    <option value="Scholarship">Scholarship</option>
    <option value="Others">Others(Please Specify)</option>
    </select><br><br>
    <div id="boardexam" style="display: none;">
      <h6>For BOARD EXAMINATION (Indicate the name of examination)</h6><input type="text" class="form-control" id="boardexamInput"  name="boardexamname"   autocomplete=off><br>
    </div>
    <div id="scholarship" style="display: none;">
      <h6>For SCHOLARSHIP(Please indicate the NAME of the scholarship program)</h6><input type="text" class="form-control" id="scholarshipInput"  name="scholarshipname"  autocomplete=off><br>
    </div>
    <div id="others" style="display: none;">
      <h6>Others(Please Specify)</h6><input type="text" class="form-control" id="othersInput"  name="others"  autocomplete=off><br>
    </div>
    <button type="submit" class="btn btn-primary custombutton">Proceed</button>
    
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    function abroad() {
        var Abroad = document.getElementById("Abroad");
        var country = document.getElementById("country");
        var countryInput = document.getElementById("countryInput");
        country.style.display = Abroad.checked ? "block" : "none";
        countryInput.setAttribute('required', '');
        
    }
    function local() {
        var Abroad = document.getElementById("Abroad");
        var countryInput = document.getElementById("countryInput");
        var country = document.getElementById("country");
        country.style.display = Abroad.checked ? "block" : "none";
        countryInput.removeAttribute('required');
        
    }

    function formtype() {
        var typeofForm = document.getElementById("typeofForm");
        var formvalue = document.getElementById("typeofForm").value;
        var form137 = document.getElementById("form137");
        form137.style.display = typeofForm.value == "Form137A" ? "block" : "none";
        

        if(formvalue == "Form137A"){
          form137Input.setAttribute('required', '');
        }else{
          form137Input.removeAttribute('required');
        }
  
    }

    function Reason() {
        var reason = document.getElementById("reason");
        var reasonvalue = document.getElementById("reason").value;
        var boardexam = document.getElementById("boardexam");
        var scholarship = document.getElementById("scholarship");
        var others = document.getElementById("others");
        boardexam.style.display = reason.value == "Board Examination" ? "block" : "none";
        scholarship.style.display = reason.value == "Scholarship" ? "block" : "none";
        others.style.display = reason.value == "Others" ? "block" : "none";
        
        if(reasonvalue == "Board Examination"){
          boardexamInput.setAttribute('required', '');
        }if(reasonvalue == "Scholarship"){
          scholarshipInput.setAttribute('required', '');
        }if(reasonvalue == "Others"){
          othersInput.setAttribute('required', '');
        }
        
        
    }
</script>

</body>
</html>
<?php include "footer.php" ?>