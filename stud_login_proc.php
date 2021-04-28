<?php
session_start();

include "perfect_function.php";

$table_name="accounts";
$username=$_POST['username'];
$password=$_POST['password'];
// echo $username."<br>";

$user_data = get_where_custom($table_name, "username", $username);
	foreach ($user_data as $key => $row) {
        $password1 = $row['password1'];
        

        $fullname=$row['firstname'];
        
    }

if ($password1==$password){
    
    // echo $password." == ".$password1."<br>";
    $_SESSION['username']=$username;
    // $_SESSION['firstlast']=$firstname." ".$lastname;
    $_SESSION['fullname']=$fullname;
    // echo $_SESSION['firstlast'];
    header("Location: captcha1.php");
} else {
    $_SESSION['login']=1;
    header("Location: stud_login.php");
}




?>