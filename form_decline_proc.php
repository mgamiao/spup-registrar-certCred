<?php
    session_start();
    include "perfect_function.php";

    $id = $_GET['id'];
	$table_name = "forms";
	$get_userData = get_where($table_name, $id);
	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		 $id = $row['id'];
		 $email = $row['email'];
		
	}
    require 'phpmailer/includes/PHPMailer.php';
	require 'phpmailer/includes/SMTP.php';
	require 'phpmailer/includes/Exception.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = "true";
	$mail->SMTPSecure = "tls";
	$mail->Port = "587";
	$mail->Username = "larajerick169@gmail.com";
	$mail->Password = "jericklara18";
	$mail->Subject = "Hello ";
	$mail->setFrom("larajerick169@gmail.com");
	$mail->Body = "Form declined";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: archived_forms.php");
	}else{
		echo "Error";
	}

	$mail->smtpClose();


$table_name = "forms";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);
$_SESSION['alert_msg']=5; 

date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $fullname=$_SESSION['fullname'];
    $acct_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Declined pending form(".$id.")";
    
    $user_data=array(
        "username" => $username ,
        "fullname" => $fullname ,
        "acct_type" => $acct_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);
header("Location: pend_forms.php");

?>