<?php
    session_start();
    include "perfect_function.php";

$table_name = "forms";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);
$_SESSION['alert_msg']=3;


date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
    $acct_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Deleted pending form(".$id.")";
    
    $user_data=array(
        "username" => $username ,
        "firstname" => $firstname ,
        "lastname" => $lastname ,
        "acct_type" => $acct_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);

header("Location: pend_forms.php");

?>