<?php
session_start();

include "perfect_function.php";
$captchaResult = $_POST['captchaResult'];
$firstNumber = $_POST['firstNumber'];
$secondNumber = $_POST['secondNumber'];
$randomSymbol = $_POST['randomSymbol'];
if ($randomSymbol == "+") {
    $checkTotal = $firstNumber + $secondNumber;
    //echo $firstNumber . $randomSymbol . $secondNumber . "=" . $checkTotal . "<br> userAnswer=" . $captchaResult;
  } if ($randomSymbol == "-") {
    $checkTotal = $firstNumber - $secondNumber;
    //echo $firstNumber . $randomSymbol . $secondNumber . " = " . $checkTotal . "<br> userAnswer=" . $captchaResult;
  } if ($randomSymbol == "*") {
    $checkTotal = $firstNumber * $secondNumber;
    //echo $firstNumber . $randomSymbol . $secondNumber . " = " . $checkTotal . "<br> userAnswer=" . $captchaResult;
  }
  
    $email = $_POST['email'];
if  ($captchaResult==$checkTotal){
    
    
    $_SESSION['email']=$email;
   
    header("Location: user_home.php");

  }

if ($captchaResult!=$checkTotal){
    $_SESSION['captcha']=1;
    header("Location: user_login.php");
}

?>