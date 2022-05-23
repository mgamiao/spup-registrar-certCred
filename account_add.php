<?php
include "header.php";
?>

<div align=center>
<div class="card-header bordercolor">
    <h1 class="headerblacked">ADD NEW ACCOUNT</h1>
</div>
<div class="card mb-4 w-100 bodyblacked mt-5">

<div class="container card shadow pb-8 mb-5">

<form class="bodyblacked2 card-body" method="post" action="account_add_proc.php">

  <div class="form-row mt-5">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Username</label>
      <input type="text" name="username" class="form-control" id="inputEmail4" required autocomplete=off>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Password </label>
      <input type="password" name="password" id="Inputpw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control"  required autocomplete=off>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Confirm Password </label>
      <input type="password" name="confirmpassword" id="Inputconfirmpw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control"  required autocomplete=off>
      <input type="checkbox" style="margin-left: 200px; margin-top: 10px;" onclick="myFunction()">Show Password
    </div>
</div>

  <div class="form-row mt-5">
    <div class="form-group col-md-4">
      <label for="inputEmail4">First Name</label>
      <input type="text" name="firstname" class="form-control" id="inputEmail4"  required autocomplete=off>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Middle Name</label>
      <input type="text" name="middlename" class="form-control" id="inputPassword4"  autocomplete=off >
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Last Name</label>
      <input type="text" name="lastname" class="form-control" id="inputPassword4"  required autocomplete=off>
    </div>
  </div>

  <div class="form-row mt-5">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="text" name="email" class="form-control" id="inputEmail4"  required autocomplete=off>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Contact</label>
      <input type="tel" name="contact"  pattern="[0]{1}[9]{1}[0-9]{9}" title="Number must be a valid PH number" class="form-control" id="inputPassword4"  required autocomplete=off>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Account Type</label>
      <select type="text" name="user_type" class="form-control form-control-user"  required autocomplete=off>
      <option value="">Type:</option>
        <option value="1">ADMIN</option>
        <option value="2">EMPLOYEE</option>
        <option value="3">SITE DEAN</option>
        <option value="4">SBAHM DEAN</option>
        <option value="5">SNAHS DEAN</option>
        <option value="6">SASTE DEAN</option>
        <option value="7">BEU DEAN</option>
        <option value="8">SoM DEAN</option>
        <option value="9">GRADSCHOOL DEAN</option>
        <option value="10">BAO</option>
      </select>
    </div>
  </div>


  
    <br>
    <br><br>
    <!-- BUTTONS -->
    <button type="submit" class="btn btn-success btn-icon-split" style="margin-top:5%">
      <span class="icon text-white-50">
      <i class="fas fa-check"></i>
        </span>
        <span class="text">
          Continue
        </span>
      </button>
    &nbsp;&nbsp;
      <a href="account_manage.php" class="btn btn-danger btn-icon-split" style=" margin-top:5%">
        <span class="icon text-white-50">
      <i class="fas fa-times"></i>
    </span>
    <span class="text">
        Cancel
    </span>
    </a>
<br><br><br>

<form>
</div>
</div>
</div>
<?php include "footeradmin.php" ?>
</div>

<script>
  function myFunction() {
    var x = document.getElementById("Inputpw");
    var y = document.getElementById("Inputconfirmpw");
    if (x.type === "password") {
      x.type = "text";
      y.type = "text";
    } else {
      x.type = "password";
      y.type = "password";
    }
  }
  </script>