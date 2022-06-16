<?php
    session_start();
	include "perfect_function.php";
    

	$table_name ='forms';

	//get user ID from URL
	$id = $_GET['id'];
    $status = $_GET['status'];
	$dateReceived = $_GET['dateReceived'];
	date_default_timezone_set('Asia/Singapore'); 
	$dateNow = date("Y-m-d");

	$user_editedvalues = array (
		//columname from table => value from post
			"status" => 5,
			"regStatus" => "Waiting to be Claimed",
			"regDateApprove" => $dateNow,
			"baoStatus" => "Validated the Receipt"
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
		 $firstname = $row['firstname'];
		 $lastname = $row['lastname'];
		 $unique = $row['refno'];
		
	}
	date_default_timezone_set('Asia/Singapore');
	$xdate=date('M-d-Y');
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
	$mail->Username = "norely.registrarsoffice@gmail.com";
	$mail->Password = "tazlfbcviyaxfcgs";
	$mail->Subject = "Registrar's Office - Form Request" ;
	$mail->setFrom("norely.registrarsoffice@gmail.com");
	$mail->isHTML(true);
	$mail->Body = "Dear Mr./Ms." . $firstname  . " " . $lastname ."
	<br><br>Your request is now available for pickup. 
	<br>Gentle Reminder:
	<br><br>Records are released from 8:00A.M. to 5:00P.M. from Monday to Friday; on Saturdays from 8:00A.M to 12:00 Noon. The office observed “No Noon Break Policy”. 
	<br><br>An authorization letter with a photocopy of identification card of the applicant and representative with signature is REQUIRED when CLAIMING the record of another person.   
	<br><br>We hope to serve you better and faster with this intervention. 
	<br>God bless!
	<br><br>yours truly,
	<br>SPUP Registrar
	<br><br>";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: completed_forms.php");
	}else{
		echo "Error";
	}

	$mail->smtpClose();


	date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $adminfirstname=$_SESSION['firstname'];
    $adminlastname=$_SESSION['lastname'];
    $acct_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Approved requested form(".$firstname." ".$lastname.")";
    
    $user_data=array(
        "username" => $username ,
        "firstname" => $adminfirstname ,
        "lastname" => $adminlastname ,
        "acct_type" => $acct_type ,
        "xdate" => $xdate ,
        "xtime" => $xtime ,
        "action" => $action 

    );

    echo insert($user_data, $table_name);
	header("Location: completed_forms.php");
?>









	




