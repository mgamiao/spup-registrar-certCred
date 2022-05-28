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
      date_default_timezone_set('Asia/Singapore'); 
      $xdate=date('Y-m-d');
      $xtime=date('h:i:sa'); 
      ?>
      <?php
      $_SESSION['date'] = $_POST['date'];
      $_SESSION['lastname'] = $_POST['lastname']; 
      $_SESSION['middlename'] = $_POST['middlename'];
      $_SESSION['firstname'] = $_POST['firstname'];  
      $_SESSION['email'] = $_POST['email']; 
      $_SESSION['mobilenum'] = $_POST['mobilenum'];
      $_SESSION['gender'] = $_POST['gender']; 
      $_SESSION['presentaddress'] = $_POST['presentaddress'] 
        
      ?>


<div class="card w-100 " style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked"> REQUEST FORM - ACADEMIC INFORMATION</h1>
                </div>
                <div class="card-body">

<div class="container" >    
  <h6 style="color:red"> * Required </h6><br>
  <form method ="post" action="user_request3.php">
    <div class="form-group">
      <h6>Student Number:</h6>
      <input type="tel" class="form-control" placeholder="Enter Student Number" name="studnum"  autocomplete=off>
    </div>
    <h6>School:<span style="color:red">*</h6></span>
    <select name="school" class="custom-select" required autocomplete=off>
    <option value=" " selected>Select School:</option>
    <option value="SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING">SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING</option>
    <option value="SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT">SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT</option>
    <option value="SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES">SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES</option>
    <option value="SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION">SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION</option>
    <option value="BASIC EDUCATION UNIT">BASIC EDUCATION UNIT</option>
    <option value="SCHOOL OF MEDICINE">SCHOOL OF MEDICINE</option>
    <option value="GRADUATE SCHOOL">GRADUATE SCHOOL</option>
    </select>
    <br><br>
    <div class="form-group">
      <h6>Degree Program in the Institution:<span style="color:red">*</h6></span>
      <input type="text" class="form-control"  placeholder="Enter Degree Program in the Institution" name="degree" required autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Major/Specialization:</h6>
      <input type="text" class="form-control"  placeholder="Enter Major/Specialization" name="specialization"  autocomplete=off>
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
    <button type="submit" class="btn btn-primary custombutton">Proceed</button>
  </form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php include "footer.php" ?>
