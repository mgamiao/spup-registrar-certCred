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
<div class="card mb-4 w-75 bg-gradient-dark"  style="width:50%; border:none;">
<div class="card-header bg-secondary text-light" style="border:none;">
    <h1>EDIT ACCOUNT</h1>
</div>

<form method="post" action="<?=$form_location;?>">

  <div class="" style="margin-left:10%;">

    <input type="text" name="username" class="form-control form-control-user" autocomplete=off value="<?= $username;?>" style="width:40%; margin-left:25%; margin-top:5%; float:left;" readonly>

  </div>
<br>
  <div class="input-group" style="width:75%; margin-left:0%; margin-top: 9%;">

      <input type="text" name="firstname" class="form-control form-control-user" autocomplete=off value="<?= $firstname;?>" class="form-control">
      <input type="text" name="middlename" class="form-control form-control-user" autocomplete=off value="<?= $middlename;?>" class="form-control">
      <input type="text" name="lastname" class="form-control form-control-user" autocomplete=off value="<?= $lastname;?>" class="form-control">
  </div>
  <br>

  <div class="" style="margin-left:9%;">

  <input type="number" name="contact" class="form-control form-control-user" value="<?= $contact;?>" autocomplete=off required style="width:25%; margin-left:5%; margin-top:2%; float:left;">
  
      <input type="email" name="email" class="form-control form-control-user" autocomplete=off value="<?= $email;?>" style="width:25%; margin-left:2%; margin-top:2%; float:left;">


    <select type="text" name="user_type" class="form-control form-control-user" value="<?= $user_type;?>" required autocomplete=off style="width:25%; margin-left:2%; margin-top:2%; float:left;">
        <option value="">Type:</option>
        <option value="1">ADMIN</option>
        <option value="2">EMPLOYEE</option>
      </select>

  </div>
    <br>
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
