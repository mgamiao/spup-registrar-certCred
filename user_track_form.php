<?php
include "user_header.php";
?>
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

<br>
<br>
<div align="center">
<form method="post" action="user_form_search.php">
                    <h5> Start tracking your request by entering your reference number in the box below.</h5>
                    <br>
                    <div class="input-group mb-3 w-25">
                        <input type="text" class="form-control" placeholder="Enter Reference Number" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary text-dark" type="submit" id="button-addon2">Track</button>
                        </div>
                        </div>
                        <p></p>
                </form>
</div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<?php include "footer.php" ?>