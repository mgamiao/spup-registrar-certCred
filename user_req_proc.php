<?php
    session_start();

    include "perfect_function.php";

    $table_name="forms";

    $studentnumber=$_SESSION['studnum'];
    $firstname=$_SESSION['firstname'];
    $middlename=$_SESSION['middlename'];
    $lastname=$_SESSION['lastname'];
    $school =$_SESSION['school'];
    $formType =$_POST['form_type'];
    $numofCopies =$_POST['numofcopies'];
    $numofRequest =$_POST['numofrequest'];
    $reason =$_POST['reason'];
    $modeofclaiming =$_POST['modeofclaiming'];
    $address =$_POST['address'];
    $courseCompleted =$_POST['coursecompleted'];
    $dategraduated =$_POST['dategraduated'];
    $undergraduate =$_POST['undergraduate'];
    $email=$_SESSION['email'];
    $mobileNum=$_SESSION['mobilenum'];
    $date=$_SESSION['date'];
    //reference number generator
    $today = date("Ymd");
    $rand = strtoupper(substr(uniqid(sha1(time())),0,10));
    echo $unique = $today. "-" . $rand;


    $user_data=array(
        "refno" => $unique,
        "studentnumber" => $studentnumber,
        "firstname" => $firstname,
        "middlename" => $middlename,
        "lastname" => $lastname,
        "school" => $school,
        "form_type" => $formType,
        "numofcopies" => $numofCopies,
        "numofrequest" => $numofRequest,
        "reason" => $reason,
        "modeofclaiming" => $modeofclaiming,
        "address" => $address,
        "coursecompleted" => $courseCompleted,
        "dategraduated" => $dategraduated,
        "undergraduate" => $undergraduate,
        "email" => $email,
        "mobilenum" => $mobileNum,
        "date" => $date,

    );

    echo insert($user_data, $table_name);
    $_SESSION['alert_msg']=1;


?>
<?php 
$id = $_GET['id'];
$table_name = "forms";
$get_userData = get_where($table_name, $id);
//fetch result and pass it  to an array
foreach ($get_userData as $key => $row) {
     $id = $row['id'];
     $email = $row['email'];
     $lastname = $row['lastname'];
     $unique = $row['refno'];
    
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
$mail->Body = "<h1>Hello " . $lastname .  "</h1><br>$xdate . $xtime <h3>Your requested form is under review of the registrar office</h3><br><br><br>Your reference number is: <b>". $unique."</b>";
$mail->addAddress($email);

if ($mail->Send() ) {
    header("Location: user_request1.php");
}else{
    echo "Error";
}

$mail->smtpClose();
?>