<?php include "user_header.php"; ?>

<h1 class="page-header">Attach proof of payment</h1>

<!-- main content -->
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Upload Image</h2>
		</div>
		<div class="box-content">
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

			<form method="post" action="user_paymentupload_proc.php" enctype="multipart/form-data">
			<p style="margin-top:24px;">
				Please choose a file from your computer and then press 'Upload'.
			</p>
            <div class="form-group">
            <h6>Full Name: </h6>
            <input type="text" class="form" placeholder="Enter Full Name" name="fullname" required autocomplete=off>
            </div>
			  <fieldset>
				<div class="control-group" style="height:200px;">
				  <label class="control-label" for="fileInput">File input</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" name="fileToUpload" type="file" required>
				  </div>
				</div>       
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Upload</button>
				  <a href="" value="Cancel" class="btn">Cancel</a>
				</div>
			  </fieldset>
			</form>   
		</div>
	</div><!--/span-->
</div><!--/row-->

<!-- close main content -->
