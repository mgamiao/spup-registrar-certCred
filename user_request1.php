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


<div class="card w-100 " style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked"> REQUEST STUDENT RECORD</h1>
                </div>
                <div class="card-body">
  


<div class="container" >    
  <h6 style="color:red"> * Required </h6><br>
  <form method ="post" action="user_request2.php">
    <div class="form-group">
      <h6>Date Today:  </h6>
      <input type="" class="form-control" placeholder=""  value = <?= $xdate?> name="date" required autocomplete=off readonly>
    </div>
    <div class="form-group">
      <h6>Student Number:</h6>
      <input type="tel" class="form-control" placeholder="Enter Student Number" name="studnum"  autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Last Name: <span style="color:red">*</h6></span>
      <input type="text" class="form-control" placeholder="Enter Last name while in SPUP" name="lastname" required autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Middle Name:</h6>
      <input type="text" class="form-control"  placeholder="Enter Middle name while in SPUP" name="middlename"  autocomplete=off>
    </div>
    <div class="form-group">
      <h6>First Name:<span style="color:red">*</h6></span>
      <input type="text" class="form-control"  placeholder="Enter First name while in SPUP" name="firstname" required autocomplete=off>
    </div>


    <h6>School: <span style="color:red">*</h6></span>
    <select name="school" class="custom-select" required autocomplete=off>
    <option selected>Select school:</option>
    <option value="SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING">SCHOOL OF INFORMATION TECHNOLOGY AND ENGINEERING</option>
    <option value="SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT">SCHOOL OF BUSINESS, ACCOUNTANCY AND HOSPITALITY MANAGEMENT</option>
    <option value="SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES">SCHOOL OF NURSING AND ALLIED HEALTH SCIENCES</option>
    <option value="SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION">SCHOOL OF ARTS, SCIENCES AND TEACHER EDUCATION</option>
    <option value="BASIC EDUCATION UNIT">BASIC EDUCATION UNIT</option>
    <option value="SCHOOL OF MEDICINE">SCHOOL OF MEDICINE</option>
    <option value="GRADUATE SCHOOL">GRADUATE SCHOOL</option>
    </select>  
    <div class="form-group">
      <h6>Email: <span style="color:red">*</h6></span>
      <input type="email" class="form-control"  placeholder="Enter Email Address" name="email" required autocomplete=off>
    </div>
    <div class="form-group">
      <h6>Mobile Number: <span style="color:red">*</h6></span>
      <input type="tel" class="form-control"  placeholder="Enter Mobile number" name="mobilenum" pattern="[0]{1}[9]{1}[0-9]{9}" title="Number must be a valid PH number" required autocomplete=off>
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

<script>
$(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);

$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});

</script>







