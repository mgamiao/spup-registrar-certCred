<?php
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$form_location = "account_edit_proc.php?id=".$id;

$table_name = "accounts";
$column = "acc_id";
$get_userData = get_where_custom($table_name, $column, $id);

//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	        $acc_id=$row['acc_id'];
            $username=$row['username'];
            $firstname=$row['firstname'];
            $middlename=$row['middlename'];
            $lastname=$row['lastname'];
            $contact=$row['contact'];
            $email=$row['email'];
            $user_type=$row['acct_type'];
    
}
?>
<div align=center>
<div class="card-header bordercolor">
    <h1 class="headerblacked">EDIT ACCOUNT</h1>
</div>
<div class="card mb-4 w-100 bodyblacked mt-5">

<div class="container card shadow pb-8 mb-5">

<form class="bodyblacked2 card-body" method="post" action="<?=$form_location;?>"><br>
<div class="form-row">
    <div class="form-group col-md-4">
    </div>
    <div class="form-group col-md-4">
    <label for="studentNumber">Username</label>
      <input type="text" class="form-control" id="studentNumber" value="<?= $username?>" readonly>
    </div>
    <div class="form-group col-md-4">
    </div>
  </div>

  <div class="form-row mt-5">
    <div class="form-group col-md-4">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $firstname?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Middle Name</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $middlename?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Last Name</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $lastname?>">
    </div>
  </div>

  <div class="form-row mt-5">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Number</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?= $contact?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Email</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?= $email?>">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Account Type</label>
      <select type="text" name="user_type" class="form-control form-control-user" value="<?= $user_type;?>" required autocomplete=off>
        <option value="">Type:</option>
        <option value="1">ADMIN</option>
        <option value="2">EMPLOYEE</option>
      </select>
    </div>
  </div>
    <br>
<br>

	<button type="submit" class="btn btn-success btn-icon-split" style="margin-left:%; margin-top: 5%;">
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
</form>
</div>
</div>
</div>
</div>

<?php include "footeradmin.php" ?>