<?php
include "header.php";
//get s ID from URL
$id = $_GET['id'];
$form_location = "change_pw_proc.php?id=".$id;
$form_location2 = "account_edit.php?id=".$id;

$table_name = "accounts";
$column = "acc_id";
$get_userData = get_where_custom($table_name, $column, $id);

//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
	        $acc_id=$row['acc_id'];
            $dbpassword=$row['password1'];
            
    
}

if (isset($_SESSION['alert_msg'])){
    if ($_SESSION['alert_msg']==3){
        echo "
            <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                <div class='card-body'>
                INCORRECT OLD PASSWORD
                </div>
            </div>";            
            
            
    }
  
    if ($_SESSION['alert_msg']==1){
        echo "
            <div class='card mb-4 py-3 border-bottom-success bg-light text-dark'>
                <div class='card-body'>
                YOUR NEW PASSWORD & CONFIRMATION PASSWORD DO NOT MATCH
                </div>
            </div>";
            
    }
    unset($_SESSION['alert_msg']);
}

?>

<div align=center>
<div class="card-header bordercolor">
    <h1 class="headerblacked">CHANGE PASSWORD</h1>
</div>
<div class="card mb-4 w-100 bodyblacked mt-5">

<div class="container card shadow pb-8 mb-5">

<form class="bodyblacked2 card-body" method="post" action="<?=$form_location;?>"><br>

  <div class="form-row mt-5">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Old Password</label>
      <input type="password" class="form-control" id="inputEmail4" name="currentpw">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">New Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="newpw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete=off>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Confirm New Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="confirmpw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required autocomplete=off>
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

	<a href="<?=$form_location2;?>" class="btn btn-danger btn-icon-split" style=" margin-top:5%">
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