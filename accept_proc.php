<?php
    session_start();
	include "perfect_function.php";
    

	$table_name ='forms';

	//get user ID from URL
	$id = $_GET['id'];
    $status = $_GET['status'];

	$user_editedvalues = array (
		//columname from table => value from post
			"status" => 1
			
	);
	
	update($user_editedvalues, $id, $table_name);
    $_SESSION['alert_msg']=1;

	date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['fullname'];
    $acct_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Approved pending form(".$id.")";
    
    $user_data=array(
        "username" => $username ,
        "fullname" => $fullname ,
        "acct_type" => $acct_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);

	header("Location: req_forms.php");
?>