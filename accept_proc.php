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

	header("Location: req_forms.php");
?>