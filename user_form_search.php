<?php include "user_header.php";?>
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
<?php   
           
        $table_name="forms";
        $column="refno";
        $search=$_POST['search'];
        echo "<div class='text-dark' style='float:left;'><i>Results of <b>"
                ."'".$search."'"
                ."</b>.</i><br><br></div>";
        $user_data=count_refno($table_name, $search);
      if ($user_data == "1"){
          $user_data2=get_where_custom($table_name, $column, $search);
          foreach ($user_data2 as $key => $row) {
              $id = $row['id'];
              $refno=$row['refno'];
              $status=$row['status'];
        
        if ($status == "0" && $refno == $search){
            echo "<br>
            <table class='table' width='100%' cellspacing='0'>
        <tr>
          <th>Registrar's Office</th>
          <th>School Dean</th>
          <th>Business Affair Office</th>
          <th>Ready to Claim</th>
        </tr>
        <tr>
          <td>Under Review</td>
          <td>Pending</td>
          <td>Pending</td>
          <td>Pending</td>
        </tr>
        </table>
        ";
        }elseif ($status == "1" && $refno == $search){
          echo "<br>
          <table class='table' width='100%' cellspacing='0'>
            <tr>
                <th>Registrar's Office</th>
                <th>School Dean</th>
                <th>Business Affair Office</th>
                <th>Ready to Claim</th>
            </tr>
            <tr>
                <td>Approved requested form</td>
                <td>Under Review</td>
                <td>Pending</td>
                <td>Pending</td>
            </tr>
        </table>";
        }elseif ($status == "2" && $refno == $search){
          echo "<br>
            <table class='table' width='100%' cellspacing='0'>
              <tr>
                  <th>Registrar's Office</th>
                  <th>School Dean</th>
                  <th>Business Affair Office</th>
                  <th>Ready to Claim</th>
              </tr>
              <tr>
                  <td>Approved requested form</td>
                  <td>Approved requested form</td>
                  <td>Under Review</td>
                  <td>Pending</td>
              </tr>
          </table>";
        }elseif ($status == "3" && $refno == $search){
          echo "<br>
            <table class='table' width='100%' cellspacing='0'>
              <tr>
                  <th>Registrar's Office</th>
                  <th>School Dean</th>
                  <th>Business Affair Office</th>
                  <th>Ready to Claim</th>
              </tr>
              <tr>
                  <td>Approved requested form</td>
                  <td>Approved requested form</td>
                  <td>Approved requested form</td>
                  <td>Ready when paid</td>
              </tr>
          </table>
          <BR>
    <h1> ATTACH PROOF OF PAYMENT</H1>
   <form method='post' action='user_paymentupload_proc.php?id=<?= $id ?>' enctype='multipart/form-data'>
			<p style='margin-top:24px;'>
				Please choose a file from your computer and then press 'Upload'.
			</p>
			  <fieldset>
				<div class='control-group' style='height:200px;'>
				  <label class='control-label' for='fileInput'>File input</label>
				  <div class='controls'>
					<input class='input-file uniform_on' id='fileInput' name='fileToUpload' type='file' required>
				  </div>
				</div>       
				<div class='form-actions'>
				  <button type='submit' class='btn btn-primary'>Upload</button>
				  <a href='user_track_form.php' value='Cancel' class='btn'>Cancel</a>
				</div>
			  </fieldset>
			</form>   ";
        }elseif ($status == "4" && $refno == $search){
          echo "<br>
            <table class='table' width='100%' cellspacing='0'>
          <tr>
              <th>Registrar's Office</th>
              <th>School Dean</th>
              <th>Business Affair Office</th>
              <th>Ready to Claim</th>
          </tr>
          <tr>
              <td>Approved requested form</td>
              <td>Approved requested form</td>
              <td>Approved requested form</td>
              <td>Claimed</td>
          </tr>
          </table>";
        }
      }
        }else{
          echo "<br><h4> Invalid Reference Number.Please try valid reference number</h4> ";
        }
       
    ?>
    