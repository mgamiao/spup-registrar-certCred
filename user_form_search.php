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
<?php   
           
        $table_name="forms";
        $column="refno";
        $search=$_POST['search'];
        $user_data=count_refno($table_name, $search);
      if ($user_data == "1"){
          $user_data2=get_where_custom($table_name, $column, $search);
          foreach ($user_data2 as $key => $row) {
              $id = $row['id'];
              $refno=$row['refno'];
              $status=$row['status'];
        
        if ($status == "0" && $refno == $search){
            echo "<br>
            <div class='col-10' style='margin-left:16%;'>
            <div class='col-10 '>
                <div class='card shadow pb-8'>
                    <div class='card-header ' style='background-color:#044a33;'>
                        <h5 class='m-0'>  '<div class='text-light' style='float:left;'>Results of
                        '$search'
                        </div></h5>
                    </div>
                    <div class='card-body pt-5' style='background-color:#F0F0F0;'>
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
        </div>
        </div>
        </div>
        </div>
        ";
        }elseif ($status == "1" && $refno == $search){
          echo "<br>
          <div class='col-10' style='margin-left:16%;'>
          <div class='col-10 '>
              <div class='card shadow pb-8'>
                  <div class='card-header ' style='background-color:#044a33;'>
                      <h5 class='m-0'>  '<div class='text-light' style='float:left;'>Results of
                      '$search'
                      </div></h5>
                  </div>
                  <div class='card-body pt-5' style='background-color:#F0F0F0;'>
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
        </table>
        </div>
        </div>
        </div>
        </div>
        ";
        }elseif ($status == "2" && $refno == $search){
          echo "<br>
          <div class='col-10' style='margin-left:16%;'>
          <div class='col-10 '>
              <div class='card shadow pb-8'>
                  <div class='card-header ' style='background-color:#044a33;'>
                      <h5 class='m-0'>  '<div class='text-light' style='float:left;'>Results of
                      '$search'
                      </div></h5>
                  </div>
                  <div class='card-body pt-5' style='background-color:#F0F0F0;'>
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
          </table>
          </div>
          </div>
          </div>
          </div>
          ";
        }elseif ($status == "3" && $refno == $search){
          $form_location = "user_paymentupload_proc.php?id=".$id;
          echo "<br>
          <div class='col-10' style='margin-left:16%;'>
          <div class='col-10 '>
              <div class='card shadow pb-8'>
                  <div class='card-header ' style='background-color:#044a33;'>
                      <h5 class='m-0'>  '<div class='text-light' style='float:left;'>Results of
                      '$search'
                      </div></h5>
                  </div>
                  <div class='card-body pt-5' style='background-color:#F0F0F0;'>
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
          </div>
          </div>
          </div>
          </div>
          <BR>
          <BR>
          <BR>
          <BR>
          <BR>
          <div class='col-10' style='margin-left:16%;'>
          <div class='col-10 '>
              <div class='card shadow pb-8'>
                  <div class='card-header ' style='background-color:#044a33;'>
                      <h5 class='m-0 font-weight-bold' style='color:white;'>ATTACH PROOF OF PAYMENT</h5>
                  </div>
                  <div class='card-body pt-5' style='background-color:#F0F0F0;'>
          
   <form method='post' action='$form_location' enctype='multipart/form-data'>
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
          <div class='col-10' style='margin-left:16%;'>
            <div class='col-10 '>
                <div class='card shadow pb-8'>
                    <div class='card-header ' style='background-color:#044a33;'>
                        <h5 class='m-0'>  '<div class='text-light' style='float:left;'>Results of
                        '$search'
                        </div></h5>
                    </div>
                    <div class='card-body pt-5' style='background-color:#F0F0F0;'>
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
          </table>
          </div>
          </div>
          </div>
          </div>
          ";
        }
      }
        }else{
          echo "<br><h4> Invalid Reference Number.Please try valid reference number</h4> ";
        }
       
    ?>
    </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <?php include "footer.php";?>