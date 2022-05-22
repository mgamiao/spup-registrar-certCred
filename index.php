<?php include "user_header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  pag meron to ayaw gumana ng logout dropdown-->

</head>

<body>
<?php
if (isset($_SESSION['alert_msg'])){
    if ($_SESSION['alert_msg']==1){
        echo "
            <div align=center>
            <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                <div class='card-body'>
                REQUESTED FORM SUCCESSFULLY SUBMITTED
                </div>
            </div>
            </div>
            ";
            unset($_SESSION['alert_msg']);
    }
  }
    ?>

<div class="divbg">
  <div class="piccontainer mb-5">
    <img src="img/usercover.jpg" class="darkbg">
    <div class="centered"><b>OFFICE OF THE REGISTRAR</b></div>
  </div>
<div class="userhether3">
  <div class="futer2">
  </div>
  <div class="userhether1 mb-5">
  </div>
</div>


<div class="row mt-5" style="width: 80%; margin: 0 auto;">
  <div class="col-sm-4 text-center">
    <div class="card">
      <div class="card-body colorcb">
        <img src="img/form.png" style= "width: 20%; align-items: center; ">
        <h5 class="card-title mt-3">REQUEST A FORM</h5>
        <p class="card-text mb-5">Online application of student records</p>
        <a href="user_terms.php" class="userbtn">Request Now</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 text-center">
    <div class="card">
      <div class="card-body colorcb">
        <img src="img/archive.png" style= "width: 20%; align-items: center;">
        <h5 class="card-title mt-3">TRACK REQUESTED FORM</h5>
        <p class="card-text mb-5">Check status of online application of student records</p>
        <a href="user_track_form.php" class="userbtn">Track Now</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 text-center">
    <div class="card">
      <div class="card-body colorcb">
        <img src="img/faq.png" style= "width: 20%; align-items: center;">
        <h5 class="card-title mt-3">FREQUENTLY ASKED QUESTIONS</h5>
        <p class="card-text mb-5">Frequently asked questions to the Office of the Registrar.</p>
        <a href="faq.php" class="userbtn ">Read Now</a>
      </div>
    </div>
  </div>
</div>
</body>

</html>
<br>
<br>
<br>
<br>
<br>
<br>

<?php include "footer.php" ?>