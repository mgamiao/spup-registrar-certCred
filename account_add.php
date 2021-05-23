<?php
include "header.php";
?>
<div align=center>
<div class="card mb-4 w-90 bg-gradient-dark" style="border:none;">
<div class="card-header bg-secondary text-light" style="border:none;">
    <h1>ADD NEW USER</h1>
</div>

<form method="post" action="account_add_proc.php">

  <div class="" style="margin-left:10%;">

    <input type="text" name="username" class="form-control form-control-user" autocomplete=off placeholder="Username" style="width:40%; margin-left:3%; margin-top:5%; float:left;">
    <input type="password" name="password" class="form-control form-control-user" autocomplete=off placeholder="Password" style="width:40%; margin-left:3%; margin-top:5%; float:left;">
    

  </div>

  <div class="input-group" style="width:75%; margin-left:0%; margin-top: 9%;">
      <input type="text" name="firstname" class="form-control form-control-user" autocomplete=off placeholder="First Name" class="form-control">
      <input type="text" name="middlename" class="form-control form-control-user" autocomplete=off placeholder="Middle Name" class="form-control">
      <input type="text" name="lastname" class="form-control form-control-user" autocomplete=off placeholder="Last Name" class="form-control">
  </div>
  <br>
 
  <div class="" style="margin-left:9%;">

  <input type="email" name="email" class="form-control form-control-user" autocomplete=off placeholder="Email Address" style="width:25%; margin-left:5%; margin-top:2%; float:left;">

  <input type="number" name="contact" class="form-control form-control-user" placeholder="Contact" autocomplete=off required style="width:25%; margin-left:2%; margin-top:2%; float:left;">

  <select type="text" name="user_type" class="form-control form-control-user" autocomplete=off required style="width:25%; margin-left:2%; margin-top:2%; float:left;">
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
        <option value="10">BAO DEAN</option>
      </select>

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
</div>