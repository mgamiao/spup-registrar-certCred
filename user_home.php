<?php include "user_header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  pag meron to ayaw gumana ng logout dropdown-->

</head>
<body>
<div class="jumbotron text-center">
  <img src="img/spup.png" style="margin-top:-50px;">
  <h1>WELCOME TO THE WEB APPLICATION FOR SCHOOL CREDENTIALS AND CERTIFICATION!</h1>
  <h3 style="text-align:center;">This web application outlines SPUP’s Web Application Services for School Credentials</h3>
</div>

<div class="container">
  <h4>Type of Forms(Certificate/Credentials)</h4>            
  <table class="table table-dark table-striped">
    <tbody>
      <tr>
        <td align="center"><a href="user_request.php">Diploma</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Form 137</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Transcript of Records</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certificate of Enrollment</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certificate of Grades</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certificate of General Weighted Average</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certificate of English as Medium of Instruction</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certificate of Units Earned</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certified True Copy of Documents (TOR/Diploma)</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Course Description</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certificate of Grades</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Certification, Authentication and Verification (Red Ribbon)</a></td>
      </tr>
      <tr>
        <td align="center"><a href="user_request.php">Transfer Credentials</a></td>
      </tr>
    </tbody>
  </table>
</div>
<div class="container">
  <h4>Procedure:</h4>            
  <table class="table table-dark table-striped">
    <thead>

    </thead>
    <tbody>
      <tr>
        <td align="center">The applicant fill-up the request form. <a href="user_request.php">Request Form</a></td>
      </tr>
      <tr>
        <td align="center">The applicant will be informed about the requested form through  an e-mail notification.</td>
      </tr>
      <tr>

    </tbody>
  </table>
</div>
<div class="container">
  <h4>Mode of Claiming</h4>            
  <table class="table table-dark table-striped">
    <thead>

    </thead>
    <tbody>
      <tr>
        <td align="center">Personal pick-up.</td>
      </tr>
      <tr>
        <td align="center">Through a Representative.</td>
      </tr>
      <tr>
      <td align="center"> Through Courier.</td>
      </tr>
    </tbody>
  </table>
</div>

<a href="user_request.php" class="btn btn-primary btn-icon-split btn-md" style="margin-left:45%;">
        <span class="text">
            Request a Form
        </span>
            </a>
            </a>

</body>
</html>
