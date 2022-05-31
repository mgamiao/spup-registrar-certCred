<?php
    session_start();
	include "perfect_function.php";
    

	$table_name ='forms';

	//get user ID from URL
	$id = $_GET['id'];
    $status = $_GET['status'];
	$regStatus = $_GET['regStatus'];
	date_default_timezone_set('Asia/Singapore'); 
    $xdate=date('Y-m-d');
	$claimant = $_POST['claimant'];
	

	$user_editedvalues = array (
		//columname from table => value from post
			"status" => 6,
			"claimant" => $claimant,
			"regStatus" => "Claimed",
			"baoStatus" => "Validated the Receipt",
			"regRemarks" => "",
			"regDateApprove" => $xdate,
			"dateReceived" => $xdate

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
		 $claimant = $row['claimant'];
		 $unique = $row['refno'];
		
	}
	date_default_timezone_set('Asia/Singapore');
	$xdate=date('M-d-Y');
	$xtime=date('h:i:sa');
	$claimant = $_POST['claimant'];

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
	$mail->Body = "<h1>Hello Mr./Ms. " . $lastname . "</h1>
	<h3>Your requested form was sucessfully claimed by Mr./Ms. $claimant. Thank you. </h3>
	<br><br>Your reference number is: <b>". $unique."</b><br>";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: form_claim_pending.php");
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
    $action="Finalized form(".$firstname." ".$lastname.")";
    
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

	header("Location: form_claim_pending.php");
?>