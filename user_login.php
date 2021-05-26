<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPUP Registrar</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-dark" style="background-color: #a9a9a9;" onload="checkStatus()">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center ">

      <div class="col-xl-10 col-lg-12 col-md-9 ">

        <div class="card o-hidden border-0 shadow-lg my-5 bg-gradient-dark">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block text-light" style="margin: auto;">
              <div style="text-align: center;"><h1><b>Web Application for<br>School Credentials and<br>Certification</b> </h1></div>
            </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <br>
                    <h2 class="text-light mb-4">Welcome!</h2>
                  </div>
                  <form class="user" method="post" action="user_login_proc.php">
                    <div class="form-group">
                      <input type="email" name=email class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email" required autocomplete=off>
                      <br>
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

                      <span class="text-light"> Please solve this problem to prove that you are not a bot <br> </span>

                        <?php
                          echo "<span class='text-light'>" . $random_number1 . " " . $random_symbol . " " . $random_number2 . ' = ' . "</span>";
                        ?>

                        <input name="captchaResult" type="text" size="4" required/>
                        <input name="firstNumber" type="hidden" value= "<?php echo $random_number1; ?>"/>
                        <input name="randomSymbol" type="hidden" value="<?php echo $random_symbol; ?>"/>
                        <input name="secondNumber" type="hidden" value= "<?php echo $random_number2; ?>"/>
                        
                      </div>

                      
                    </div>

                    <div class="form-group">
                      
                      <!-- <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> -->
                    
                    <hr>
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
                    <label><h6 style="color:red; "><i> Note: Please make sure that the email inputted above is correct.</h6></i></label> 
                      <p id="text" ><button type="submit" class="btn btn-primary custombutton">Submit</button></p>
                  </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="template/js/sb-admin-2.min.js"></script>
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
</body>

</html>