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
	$mail->Body = "Form approve";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: archived_forms.php");
	}else{
		echo "Error";
	}

	$mail->smtpClose();

?>









	




