<?php
session_start();

include "perfect_function.php";
$captchaResult = $_POST['captchaResult'];
$firstNumber = $_POST['firstNumber'];
$secondNumber = $_POST['secondNumber'];
$randomSymbol = $_POST['randomSymbol'];
if ($randomSymbol == "+") {
    $checkTotal = $firstNumber + $secondNumber;
    echo $firstNumber . $randomSymbol . $secondNumber . "=" . $checkTotal . "<br> userAnswer=" . $captchaResult;
  } if ($randomSymbol == "-") {
    $checkTotal = $firstNumber - $secondNumber;
    echo $firstNumber . $randomSymbol . $secondNumber . " = " . $checkTotal . "<br> userAnswer=" . $captchaResult;
  } if ($randomSymbol == "*") {
    $checkTotal = $firstNumber * $secondNumber;
    echo $firstNumber . $randomSymbol . $secondNumber . " = " . $checkTotal . "<br> userAnswer=" . $captchaResult;
  }

$table_name="accounts";
$username=$_POST['username'];
$password=_hash_string($_POST['password']);
// echo $username."<br>";

$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
        $password1 = $row['password1'];
        

        $fullname=$row['username'];
        $acctType=$row['acct_type'];
        
    }

if (($password1==$password) and ($captchaResult==$checkTotal)){
    
    // echo $password." == ".$password1."<br>";
    $_SESSION['username']=$username;
    $_SESSION['access']=$acctType;
    // $_SESSION['firstlast']=$firstname." ".$lastname;
    $_SESSION['fullname']=$fullname;
    // echo $_SESSION['firstlast'];
    header("Location: home.php");
} if ($password1!=$password) {
    $_SESSION['login']=1;
    header("Location: index.php");
} if ($captchaResult!=$checkTotal){
    $_SESSION['captcha']=1;
    header("Location: index.php");
}

?>