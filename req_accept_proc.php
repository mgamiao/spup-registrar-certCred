<?php
    session_start();
	include "perfect_function.php";
    

	$table_name ='forms';

	//get user ID from URL
	$id = $_GET['id'];
    $status = $_GET['status'];

	$user_editedvalues = array (
		//columname from table => value from post
			"status" => 2
			
	);
	
	update($user_editedvalues, $id, $table_name);
    $_SESSION['alert_msg']=1;

// ito nalang yung kulang?
_fire_email($target_email, $subject, $msg);
{
    $to = "captainsteven01@gmail.com";
    $subject = "hello";
    $message = "Your form was decline.";
    $headers = "From: captainsteven01@gmail.com\r\n";
    $headers .= "Content-type: text/html; charset=\"UTF-8\"; format=flowed \r\n";
    mail($to, $subject, $message, $headers);
}



$_SESSION['alert_msg']=5; 
	header("Location: archived_forms.php");


?>

