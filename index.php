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
            <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                <div class='card-body'>
                REQUESTED FORM SUCCESSFULLY SUBMITTED
                </div>
            </div>";
            unset($_SESSION['alert_msg']);
    }
  }
    ?>

<div class="divbg">
  <div class="piccontainer mb-5">
    <img src="img/flc.png" class="darkbg">
    <div class="centered"><b>OFFICE OF THE REGISTRAR</b></div>
  </div>
<div class="userhether3">
  <div class="futer2">
  </div>
  <div class="userhether1 mb-5">
  </div>
</div>

<div class="row mb-4" style="width: 80%; margin: auto;">
  <div class="col-sm-12 text-center">
    <div class="card">
      <div class="card-body colorcb">
        <h2 class="card-title mt-3">VISION</h2>
        <p class="card-text mb-5" style="justify-content: left;">St. Paul University Philippines is an internationally recognized institution dedicated to the <BR>
        formation of competent leaders and responsible citizens of their communities, country, and <br>the world.</p>
        <h2 class="card-title mt-3">MISSION</h2>
        <p class="card-text mb-5">Animated by the Gospel and guided by the teachings of the Church, it helps to uplift the 
        <br>quality of life and to effect social transformation through:<br>
                <br>1. Quality, Catholic, Paulinian formation, academic excellence, research, and community services;
                <br>2. Optimum access to Paulinian education and service in an atmosphere of compassionate caring;    and,
                <br>3. Responsive and innovative management processes</p>
      </div>
    </div>
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