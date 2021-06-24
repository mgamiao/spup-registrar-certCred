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
  <script type="text/javascript">
    function yesnoCheck(that) {
    if (that.value == "Through Representative") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}
  </script> 
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
      $_SESSION['numofcopies']=$_POST['numofcopies'];
      $_SESSION['numofrequest'] =$_POST['numofrequest'];
      $_SESSION['reason'] =$_POST['reason'];
      $_SESSION['coursecompleted'] =$_POST['coursecompleted'];
      $_SESSION['dategraduated'] =$_POST['dategraduated'];
      $_SESSION['undergraduate'] =$_POST['undergraduate'];
        
      ?>


<div class="card w-100 " style="border:none;">
                <div class="py-3 bordercolor" style="border:none;">
                <h1 class="m-0 headerblacked"> REQUEST FORM - MODE OF CLAIMING</h1>
                </div>
                <div class="card-body">

<div class="container" >    
  <h6 style="color:red"> * Required </h6><br>
  <form method ="post" action="user_req_proc.php" enctype="multipart/form-data">    
    <h6>Mode of Claiming: <span style="color:red">*</h6></span>
    <select name="modeofclaiming" class="custom-select" onchange="yesnoCheck(this);" required autocomplete=off>
    <option value="">Select mode of claiming:</option>
    <option value="Personal Pick-up">Personal Pick-up</option>
    <option value="Through Representative"> Through Representative</option>
    <option value="Through Courier">Through Courier</option>
    </select>
    <div id="ifYes" style="display: none;">
    <br>
    <h6>Representative's Name: <span style="color:red">*</h6></span> <input type="text" class="form-control" name="representname" /><br />
   
    <!-- <div class='control-group' style='height:100px;'>
    <h6>Attach photo of Valid ID of the Representative: <span style="color:red">*</h6></span> 
    <div class='controls'>
    <input class='input-file uniform_on' id='fileInput' name='representid' type='file' required>
    </div> -->

	</div>

    <div class="form-group">
      <h6>Address <span style="color:blue">(if through courier please add address):</h6></span>
      <input type="text" class="form-control"  placeholder="Enter Address" name="address"  autocomplete=off>
    </div>
    <br>
    <h6 style="color:red; "><i> Note: Please make sure that all information given are correct before clicking submit.<br>
     Don't forget to present your valid ID upon claiming.</h6></i>
    <input type="checkbox" id="agree_again" name="agree" value="ON">
    <label><h6 style="color:gray;">Understood</h6></label>


    

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
</body>
</html>
<?php include "footer.php" ?>
