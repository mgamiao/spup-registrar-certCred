<?php include "user_header.php" ?>
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

<div class="container">
  <h2>Request Form</h2>
  <h6 style="color:red"> * Required </h6><br>
  <form method ="post" action="user_req_proc.php">
    <div class="form-group">
      <h6>Enter Date Today:  <span style="color:red">*</h6></span>
      <input type="date" class="form-control" placeholder="" name="date" required autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Last Name: <span style="color:red">*</h6></span>
      <input type="text" class="form-control" placeholder="Enter Last name" name="lastname" required autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Middle Name: <span style="color:red">*</h6></span>
      <input type="text" class="form-control"  placeholder="Enter Middle name" name="middlename" required autocomplete=off>
    </div>
    <div class="form-group">
      <h6>First Name:<span style="color:red">*</h6></span>
      <input type="text" class="form-control"  placeholder="Enter First name" name="firstname" required autocomplete=off>
    </div>

    <h6>School: <span style="color:red">*</h6></span>
    <select name="school" class="custom-select" required autocomplete=off>
    <option selected>Select school:</option>
    <option value="site">SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING</option>
    <option value="sbahm">SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT</option>
    <option value="snahs">SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES</option>
    <option value="saste">SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION</option>
    <option value="beu">BASIC EDUCATION UNIT</option>
    <option value="SoM">SCHOOL OF MEDICINE</option>
    <option value="gradschool">GRADUATE SCHOOL</option>
    </select>
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
      <h6>Number of Copies: <span style="color:red">*</h6></span>
      <input type="number" class="form-control"  placeholder="Enter Number of Copies" name="numofcopies" required autocomplete=off>
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
    <h6>Mode of Claiming <span style="color:red">*</h6></span>
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
    <div class="form-group">
      <h6>Email: <span style="color:red">*</h6></span>
      <input type="email" class="form-control"  placeholder="Enter Email Address" name="email" required autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Mobile Number: <span style="color:red">*</h6></span>
      <input type="number" class="form-control"  placeholder="Enter Mobile number" name="mobilenum" required autocomplete=off maxlength="11">
    </div>
    <br>
    <h6 style="color:red; "><i> Note: Please make sure that all information above are correct before clicking submit </h6> </i>   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
