<?php
    session_start();
    include "perfect_function.php";

	$reason = $_POST['reason'];
    $id = $_GET['id'];
	$table_name = "forms";
	$status = $_GET['status'];
	$regStatus = $_GET['regStatus'];
	date_default_timezone_set('Asia/Singapore'); 
	$xdate=date('Y-m-d');

	$user_editedvalues = array (
    	//columname from table => value from post
		"status" => 6,
        "regStatus" => "Disapproved",
		"regRemarks" => $reason,
        "regDateApprove" => $xdate,
	);

update($user_editedvalues, $id, $table_name);


	$get_userData = get_where($table_name, $id);
	//fetch result and pass it  to an array
	foreach ($get_userData as $key => $row) {
		 $id = $row['id'];
		 $email = $row['email'];
		 $lastname = $row['lastname'];
		
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
	$mail->Subject = "Registrar's Office - Form Request";
	$mail->setFrom("larajerick169@gmail.com");
	$mail->isHTML(true);
	$mail->Body = "<h1>Hello " . $lastname . "</h1><br><h3>Your requested form was declined for the reason  " . " <b><u>$reason</b></u>. Please request again";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: completed_forms.php");
	}else{
		echo "Error";
	}

	$mail->smtpClose();


$table_name = "forms";

//get user ID from URL
$id = $_GET['id'];
$_SESSION['alert_msg']=5; 

date_default_timezone_set('Asia/Singapore');

    $table_name="logs";
    $username= $_SESSION['username'];
    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
    $acct_type=$_SESSION['access'];
    $xdate=date('Y-m-d');
    $xtime=date('h:i:sa');
    $action="Declined pending form(".$id.")";
    
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
header("Location: completed_forms.php");

?>