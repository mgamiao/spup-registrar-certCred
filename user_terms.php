<?php include "user_header.php"; 
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</head>
<body onload="checkStatus()">
<div class="col-10 mt-5" style="margin-left:15%;">
        <div class="col-10 ">
            <div class="card shadow pb-10">
                <div class="card-header " style="background-color:#044a33;">
                    <h5 class="m-0 font-weight-bold" style="color:white;">TERMS AND CONDITIONS</h5>
                </div>
                <div class="card-body pt-5" style="background-color:#F0F0F0;">
                   <h5 style="margin-top:-25px; color:black; font-weight:bold; font-family:times new roman;"> IMPORTANT - PLEASE READ CAREFULLY: </h5>
                   <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                   when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                   with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
                   It is a long established fact that a reader 
                   will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                   as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default 
                   model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                   <hr>
                   <form class="user" method="post" action="user_terms_proc.php">
                    <div class="form-group">
                      <?php
                        $min_number = 1;
                        $max_number = 10;
                        $symbol = array("+", "-", "*");
                        $random_symbol = array_rand($symbol, 1);
                        if ($random_symbol == "0") {
                          $random_symbol = "+";
                        } if ($random_symbol == "1") {
                          $random_symbol = "-";
                        } if ($random_symbol == "2") {
                          $random_symbol = "*";
                        }
                        $random_number1 = mt_rand($min_number , $max_number);  
                        $random_number2 = mt_rand($min_number , $max_number);    
                      ?>

                      <div class="center">

                      <span class="text-dark"> Please solve this problem to prove that you are not a bot <br> </span>

                        <?php
                          echo "<span class='text-dark'>" . $random_number1 . " " . $random_symbol . " " . $random_number2 . ' = ' . "</span>";
                        ?>

                        <input name="captchaResult" type="text" size="4" required autocomplete="off"/>
                        <input name="firstNumber" type="hidden" value= "<?php echo $random_number1; ?>"/>
                        <input name="randomSymbol" type="hidden" value="<?php echo $random_symbol; ?>"/>
                        <input name="secondNumber" type="hidden" value= "<?php echo $random_number2; ?>"/>
                        
                      </div>

                      
                    </div>

                    <div class="form-group">
                    <?php
                    if (isset($_SESSION['login'])){
                      unset($_SESSION['login']);?>
                      
                      <span style="color: red; font-weight: bold;">Wrong username or password</span>
                      <br>
                    <?php
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['captcha'])){
                      unset($_SESSION['captcha']);?>
                      
                      <span style="color: red; font-weight: bold;">Incorrect captcha</span>
                      <br>
                    <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['timeout'])){
                      unset($_SESSION['timeout']);?>
                      <script>window.alert('You were inactive for 5 minutes. Please log in again')</script>
                      <br>
                    <?php
                    }
                    ?>
                    <input type="checkbox" id="agree_again" name="agree" value="ON">
                    <label><h6 style="color:red; "><i> Please tick the checkbox to proceed.</h6></i></label> 
                      <p id="text" ><button type="submit" class="btn btn-primary custombutton">Submit</button></p>
                  </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        <script>
        function checkStatus() {
            console.log('reached');
            if ($('#agree_again').is(":checked")) {
                $(".custombutton").attr('disabled', false);
            } else {
                $(".custombutton").attr('disabled', true);
            }
        }
        $("#agree_again").change(function () {
            checkStatus();
        })
        </script>
        <br>
        <br>
        <?php include "footer.php" ?>
        