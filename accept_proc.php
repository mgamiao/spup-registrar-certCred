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


    $id = $_GET['id'];
	$table_name = "forms";
	$get_userData = get_where($table_name, $id);
	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		 $id = $row['id'];
		 $email = $row['email'];
		 $lastname = $row['lastname'];
		
	}
	date_default_timezone_set('Asia/Singapore');
	$xdate=date('Y-m-d');
	$xtime=date('h:i:sa');

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
	$mail->Subject = "Registrar's Office - Form Request" ;
	$mail->setFrom("larajerick169@gmail.com");
	$mail->isHTML(true);
	$mail->Body = "<h1>Hello " . $lastname . "</h1><br> $xdate . $xtime <h3> Your form was approved by the registrar office and now under review by your designated dean</h3>";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: pend_forms.php");
	}else{
		echo "Error";
	}

	$mail->smtpClose();


	date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
    $acct_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Approved pending form(".$id.")";
    
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