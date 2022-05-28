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
      $_SESSION['form_type'] =$_POST['form_type'];
      $_SESSION['section_yrgrad'] =$_POST['section_yrgrad'];
      $_SESSION['semesterAcad'] =$_POST['semesterAcad'];
      $_SESSION['localAbroad'] =$_POST['localAbroad'];
      $_SESSION['country'] =$_POST['country'];
      $_SESSION['boardexamname'] =$_POST['boardexamname'];
      $_SESSION['scholarshipname'] =$_POST['scholarshipname'];
      $_SESSION['others'] =$_POST['others'];
      $_SESSION['numofcopies']=$_POST['numofcopies'];
      $_SESSION['numofrequest'] =$_POST['numofrequest'];
      $_SESSION['reason'] =$_POST['reason'];
        
      ?>


<div class="card w-100 " style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked"> REQUEST FORM - MODE OF CLAIMING</h1>
                </div>
                <div class="card-body">

<div class="container" > 
  <h6 style="color:red"> * Required </h6><br>
  <form method ="post" action="user_req_proc.php">    
    <h6>Mode of Claiming: <span style="color:red">*</h6></span>
    <select name="modeofclaiming" class="custom-select" id= "modeofClaiming" onchange = "modeofClaim()" required autocomplete=off>
    <option value="">Select mode of claiming:</option>
    <option value="Personal Pick-up">Personal Pick-up</option>
    <option value="Through Representative"> Through Representative</option>
    <option value="Through Courier">Through Courier</option>
    </select>
    <div id="representative" style="display: none;">
    <br>
    <h6>Representative's Name: <span style="color:red">*</h6></span> <input type="text" class="form-control" id="representname" name="representname"  autocomplete=off /><br>
	<h6>Relationship: <span style="color:red">*</h6></span> <input type="text" class="form-control" id="representrelationship"  name="representrelationship"  autocomplete=off /><br>
    <h6>Contact Number: <span style="color:red">*</h6></span> <input type="tel" class="form-control" id="representcontact"  name="representcontact" pattern="[0]{1}[9]{1}[0-9]{9}" title="Number must be a valid PH number" autocomplete=off /><br />
    <b>NOTE: An AUTHORIZATION LETTER with a photocopy of valid identification card of the applicant and representative is REQUIRED when applying / claiming the record of another person</b>
    </div>

    <div id="courier" style="display: none;">
    <br>
      <h6>Mailing Address(Philippines only)</h6><input type="text" class="form-control" id="malingaddress"  name="mailingaddress"  autocomplete=off><br>
      <h6>Contact Number: <span style="color:red">*</h6></span> <input type="tel" class="form-control" id="mailingcontact"  name="mailingcontact" pattern="[0]{1}[9]{1}[0-9]{9}" title="Number must be a valid PH number"  autocomplete=off /><br />
    </div>
    <br><br>
    <h6 style="color:red; "><i> Conforme: I have read and understood all the conditions in connection with this request and agree to comply with them.</h6></i>
    <input type="checkbox" id="agree_again" name="agree" value="ON">
    <label><h6 style="color:gray;">I Agree</h6></label>


    

    <p id="text" ><button type="submit" class="btn btn-primary custombutton">Submit</button></p>
  </form>
</div>
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
<script type="text/javascript">
    function modeofClaim() {
        var modeofClaiming = document.getElementById("modeofClaiming");
        var modeofClaimingvalue = document.getElementById("modeofClaiming").value;
        var representative = document.getElementById("representative");
        var courier = document.getElementById("courier");
        representative.style.display = modeofClaiming.value == "Through Representative" ? "block" : "none";
        courier.style.display = modeofClaiming.value == "Through Courier" ? "block" : "none";

        if(modeofClaimingvalue == "Through Representative"){
          representname.setAttribute('required', '');
          representrelationship.setAttribute('required', '');
          representcontact.setAttribute('required', '');

          mailingaddress.removeAttribute('required');
          mailingcontact.removeAttribute('required');
          
        }if(modeofClaimingvalue == "Through Courier"){
          mailingaddress.setAttribute('required', '');
          mailingcontact.setAttribute('required', '');

          representname.removeAttribute('required');
          representrelationship.removeAttribute('required');
          representcontact.removeAttribute('required');
        }
    }
</script>

</body>
</html>
<?php include "footer.php" ?>