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

$table_name="accounts";
$username=$_POST['username'];
$password=_hash_string($_POST['password']);
// echo $username."<br>";

$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
        $password1 = $row['password1'];
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $acctType=$row['acct_type'];
        
    }

if (($password1==$password) and ($captchaResult==$checkTotal)){
    
    
    $_SESSION['username']=$username;
    $_SESSION['access']=$acctType;
    $_SESSION['firstname']=$firstname;
    $_SESSION['lastname']=$lastname;
   if($_SESSION['access']=="1" || $_SESSION['access']=="2" ){ 
    header("Location: home.php");
   }elseif ($_SESSION['access'] == "3"){
     header("Location: sitedean_req_forms.php");
   }elseif ($_SESSION['access'] == "10"){
    header("Location: bao_req_forms.php");
  }elseif ($_SESSION['access'] == "4"){
    header("Location: sbahmdean_req_forms.php");
  }elseif ($_SESSION['access'] == "5"){
    header("Location: snahsdean_req_forms.php");
  }elseif ($_SESSION['access'] == "6"){
    header("Location: sastedean_req_forms.php");
  }elseif ($_SESSION['access'] == "7"){
    header("Location: beudean_req_forms.php");
  }elseif ($_SESSION['access'] == "8"){
    header("Location: somdean_req_forms.php");
  }elseif ($_SESSION['access'] == "9"){
    header("Location: graddean_req_forms.php");
  }
} if ($password1!=$password) {
    $_SESSION['login']=1;
    header("Location: index.php");
} if ($captchaResult!=$checkTotal){
    $_SESSION['captcha']=1;
    header("Location: index.php");
}

?>