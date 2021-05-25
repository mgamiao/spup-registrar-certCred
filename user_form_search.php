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
        $search=$_POST['search'];
        echo "<div class='text-dark' style='float:left;'><i>Results of <b>"
                ."'".$_POST['search']."'"
                ."</b>.</i><br><br></div>";
        $user_data=search_form($table_name, $search);

        foreach ($user_data as $key => $row) {
            $refno=$row['refno'];
            $status=$row['status'];
        }
        
        if ($status == "0"){
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
        </table>";
          }if ($status == "1"){
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
        }if ($status == "2"){
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
        }if ($status == "3"){
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
          </table>";
        }if ($status == "4"){
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
    ?>