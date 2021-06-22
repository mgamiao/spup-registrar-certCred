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
<div class="row" style="width: 80%; margin: auto;">
  <div class="col-sm-4 text-center">
    <div class="card">
      <div class="card-body">
        <img src="img/form.png" style= "width: 20%; align-items: center; ">
        <h5 class="card-title mt-3">REQUEST A FORM</h5>
        <p class="card-text mb-5">Online application of student records</p>
        <a href="user_terms.php" class="userbtn">Request Now</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 text-center">
    <div class="card">
      <div class="card-body">
        <img src="img/archive.png" style= "width: 20%; align-items: center;">
        <h5 class="card-title mt-3">TRACK REQUESTED FORM</h5>
        <p class="card-text mb-5">Check status of online application of student records</p>
        <a href="user_track_form.php" class="userbtn">Track Now</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4 text-center">
    <div class="card">
      <div class="card-body">
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