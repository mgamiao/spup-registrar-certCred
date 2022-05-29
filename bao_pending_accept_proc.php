<?php
    session_start();
	include "perfect_function.php";
    

	$table_name ='forms';

	//get user ID from URL
	$id = $_GET['id'];
    $status = $_GET['status'];
	$ornumber = $_POST['ornumber'];
	$dateReceived = $_GET['dateReceived'];
	date_default_timezone_set('Asia/Singapore'); 
	$dateNow = date("Y-m-d");
	

	$user_editedvalues = array (
		//columname from table => value from post
			"status" => 4,
			"ornumber" => $ornumber,
			"date_approved" => $dateNow,
			"baoStatus" => "Validated the Receipt",
			"regStatus" => "Processing",
			"baoRemarks" => "",
			"baoDateApprove" => $dateNow
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
	$mail->Username = "larajerick169@gmail.com";
	$mail->Password = "jericklara18";
	$mail->Subject = "Registrar's Office - Form Request" ;
	$mail->setFrom("larajerick169@gmail.com");
	$mail->isHTML(true);
	$mail->Body = "<h1>Hello Mr./Ms. " . $lastname .  "</h1> 
	<h3>Your form is approved by Business Affair's Office. Registrar's Office will be processing your request. Please wait atleast seven(7) working days.</h3><br><br>
	Your reference number is: <b>". $unique."</b>";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: bao_pending_forms.php");
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
	header("Location: bao_pending_forms.php");
?>









	



