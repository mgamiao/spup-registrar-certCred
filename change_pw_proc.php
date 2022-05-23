<?php
    session_start();
	include "perfect_function.php";

    $table_name = 'accounts';
    $column = "acc_id";
    $currentpw=_hash_string($_POST['currentpw']);
    $newpw = _hash_string($_POST['newpw']);
    $confirmpw = _hash_string($_POST['confirmpw']);
    $id = $_GET['id'];
    $user_data = get_where_custom($table_name, "acc_id", $id);
	foreach ($user_data as $key => $row) {
        $password1 = $row['password1'];
        $username = $row['username'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
    }
    
    // echo $id;
    // echo "<br>";
    // echo "databasepassword =" . $password1;
    // echo "<br>";
    // echo "new password =" . $currentpw;
    if ($newpw==$confirmpw){

        if ($password1==$currentpw){
            $user_editedValues = array(
                "password1" => $newpw ,
                "password2" => $newpw ,

                
            );
            update_from($user_editedValues, $id, $table_name, $column);
            $_SESSION['alert_msg']=4;
            header("Location: account_manage.php");
        }elseif($password1!=$currentpw){
            $_SESSION['alert_msg']=3;
            header("Location: change_pw.php?id=".$id);
            
        }
}if($newpw!=$confirmpw){
    $_SESSION['alert_msg']=1;
    header("Location: change_pw.php?id=".$id);
    
    
}

	      
     
    
    if($username==$_SESSION['username']){
        $_SESSION['firstlast']=$firstname." ".$lastname;
    }
    
    
    
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
    


	//header("Location: account_manage.php");
?>