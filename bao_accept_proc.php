<?php
    session_start();
	include "perfect_function.php";
    

	$table_name ='forms';

	//get user ID from URL
	$id = $_GET['id'];
    $status = $_GET['status'];
	$transfee = $_POST['transfee'];
	$dipfee = $_POST['dipfee'];
	$formfee = $_POST['formfee'];
	$certfee = $_POST['certfee'];
	$authfee = $_POST['authfee'];
	$servfee = $_POST['servfee'];
	$docstamp = $_POST['docstamp'];
	$mailfee = $_POST['mailfee'];
	$letterfee = $_POST['letterfee'];
	$torenvfee = $_POST['torenvfee'];
	$stickerfee = $_POST['stickerfee'];
	$fees = $transfee + $dipfee + $formfee + $certfee + $authfee + $servfee + $docstamp + $mailfee + $letterfee + $torenvfee + $stickerfee;

	

	$user_editedvalues = array (
		//columname from table => value from post
			"status" => 3,
			"fees" => $fees

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
		 $fees = $row['fees'];
		 $unique = $row['refno'];
		
	}
	date_default_timezone_set('Asia/Singapore');
	$xdate=date('Y-m-d');
	$xtime=date('h:i:sa');
	$transfee = $_POST['transfee'];
	$dipfee = $_POST['dipfee'];
	$formfee = $_POST['formfee'];
	$certfee = $_POST['certfee'];
	$authfee = $_POST['authfee'];
	$servfee = $_POST['servfee'];
	$docstamp = $_POST['docstamp'];
	$mailfee = $_POST['mailfee'];
	$letterfee = $_POST['letterfee'];
	$torenvfee = $_POST['torenvfee'];
	$stickerfee = $_POST['stickerfee'];

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
	$mail->Body = "<h1>Hello " . $lastname . "</h1><br>$xdate . $xtime <h3>Your form was approved by the Business Affair Office.Please wait for the finalization of you requested form</h3><br>
	<h3>Your total fee is: P$fees.00. Please present the receipt of your payment before claiming your requested form. Thank you </h3><br><br><br>Your reference number is: <b>". $unique."</b><br>
	<h3><b>Breakdown of Fees:<b></h3>
	<table>
	<tr>
    <td>Transcript Fee</td>
	<td> : </td>
    <td> $transfee</td>
  	</tr>
  	<tr>
    <td>Diploma Fee</td>
	<td> : </td>
    <td> $dipfee </td>
  	</tr>
  	<tr>
    <td>Form 137A/138B</td>
	<td> : </td>
    <td> $formfee </td>
  	</tr>
  	<tr>
    <td>Certification Fee</td>
	<td> : </td>
    <td> $certfee </td>
  	</tr>
  	<tr>
    <td>Authentication Fee</td>
	<td> : </td>
    <td> $authfee </td>
  	</tr>
	<tr>
	<td>Service Fee(Online)</td>
	<td> : </td>
	<td> $servfee </td>
	</tr>
	<tr>
	<td>Documentary Stamp</td>
	<td> : </td>
	<td> $docstamp </td>
	</tr>
	<tr>
    <td>Mailing Fee</td>
	<td> : </td>
    <td> $mailfee </td>
  	</tr>
	<tr>
    <td>Letter Envelope</td>
	<td> : </td>
    <td> $letterfee </td>
  	</tr>
	<tr>
    <td>SPUP TOR Envelope</td>
	<td> : </td>
    <td> $torenvfee </td>
  	</tr>
	<tr>
    <td>SPUP Sticker</td>
	<td> : </td>
    <td> $stickerfee </td>
  	</tr>
	<tr>
	<td>Total Fee</td>
	<td> : </td>
	<td>  $fees </td>
	</tr>   
	</table>";
	$mail->addAddress($email);
	
	if ($mail->Send() ) {
		header("Location: bao_req_forms.php");
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

	header("Location: bao_req_forms.php");
?>