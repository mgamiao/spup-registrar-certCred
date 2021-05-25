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
<div class="jumbotron text-center">
  <img src="img/spup.png" style="margin-top:-50px;">
  <h1>WELCOME TO THE WEB APPLICATION FOR SCHOOL CREDENTIALS AND CERTIFICATION!</h1>
  <h3 style="text-align:center;">This web application outlines SPUP’s Web Application Services for School Credentials</h3>
</div>
<div align="center">
<form method="post" action="user_form_search.php">
                    <h5> Enter your reference number here:</h5>
                    <div class="input-group mb-3 w-25">
                        <input type="text" class="form-control" placeholder="Enter your Reference number" name="search" autocomplete="off" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary text-dark" type="submit" id="button-addon2">Search</button>
                        </div>
                        </div>
                </form>
               