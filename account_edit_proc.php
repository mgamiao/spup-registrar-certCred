<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'accounts';
    $column = "acc_id";
    
    // echo $_GET['id'];
	//get user ID from URL
	$id = $_GET['id'];
    
            $username=$_POST['username'];
            $firstname=$_POST['firstname'];
            $middlename=$_POST['middlename'];
            $lastname=$_POST['lastname'];
            $contact=$_POST['contact'];
            $email=$_POST['email'];
            $user_type=$_POST['user_type'];
	
	$user_editedValues = array(
        "username" => $username ,
        "firstname" => $firstname ,
        "middlename" => $middlename ,
        "lastname" => $lastname ,
        "contact" => $contact ,
        "email" => $email ,
		
	);

    update_from($user_editedValues, $id, $table_name, $column);
    $_SESSION['alert_msg']=2;
    
    if($username==$_SESSION['username']){
        $_SESSION['firstlast']=$firstname." ".$lastname;
    }
    
    // echo $username . "<br>";
    // echo $firstname . "<br>";
    // echo $middlename . "<br>";
    // echo $lastname . "<br>";
    // echo $contact . "<br>";
    // echo $email . "<br>";
    // echo $user_type . "<br>";
        // ______________________________________________________________________________________________________________________
    // GETTING ENTRY ID
    
    date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $adminfirstname=$_SESSION['firstname'];
    $adminlastname=$_SESSION['lastname'];
    $user_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Edited in accounts(".$id.")";
    
    $user_data=array(
        "username" => $username ,
        "firstname" => $adminfirstname ,
        "lastname" => $adminlastname ,
        "acct_type" => $user_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);
    
// ______________________________________________________________________________________________________________________

	header("Location: account_manage.php");
?>