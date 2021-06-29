<?php
    session_start();

    include "perfect_function.php";

    $table_name="forms";

    $studentnumber=$_SESSION['studnum'];
    $firstname=$_SESSION['firstname'];
    $middlename=$_SESSION['middlename'];
    $lastname=$_SESSION['lastname'];
    $school =$_SESSION['school'];
    $formType =$_SESSION['form_type'];
    $numofCopies =$_SESSION['numofcopies'];
    $numofRequest =$_SESSION['numofrequest'];
    $reason =$_SESSION['reason'];
    $modeofclaiming =$_POST['modeofclaiming'];
    $address =$_POST['address'];
    $courseCompleted =$_SESSION['coursecompleted'];
    $dategraduated =$_SESSION['dategraduated'];
    $undergraduate =$_SESSION['undergraduate'];
    $email=$_SESSION['email'];
    $mobileNum=$_SESSION['mobilenum'];
    $date=$_SESSION['date'];
    $representname = $_POST['representname'];
    $regStatus = "Pending";
    $deanStatus = "Pending";
    $baoStatus = "Pending";
    //reference number generator
    $today = date("Ymd");
    $formYear = date("Y");
    $formMonth = date("m");
    $formDay = date("d");
    $rand = strtoupper(substr(uniqid(sha1(time())),0,10));
    echo $unique = $today. "-" . $rand;

    // $target_dir = "representative_id/";
    // $target_file = $target_dir . basename($_FILES["representid"]["name"]);
    // $uploadOk = 1;
    // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
    //     $check = getimagesize($_FILES["representid"]["tmp_name"]);
    //     if($check !== false) {
    //         $uploadOk = 1;
    //     } else {
    //         $error_msg1 =  "File is not an image.";
    //         $uploadOk = 0;
    //     }
    // }

    // // Check if file already exists
    // if (file_exists($target_file)) {
    //     $error_msg1 = "Sorry, file already exists.";
    //     $uploadOk = 0;
    // }

    // // Check file size
    // if ($_FILES["representid"]["size"] > 5000000) {
    //     $error_msg1 = "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    // // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //     $error_msg1 = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //     $uploadOk = 0;
    // }

    // // Check if $uploadOk is set to 0 by an error
    // if ($uploadOk == 0) {
    //     $_SESSION['pic_errormsg'] = $error_msg1. "Your file was not uploaded.";
    //     header("Location: user_request1.php");
    // // if everything is ok, try to upload file
    // } else {
    //     if (move_uploaded_file($_FILES["representid"]["tmp_name"], $target_file)) {
    //     } else {
    //         $_SESSION['pic_errormsg'] = "Sorry, there was an error uploading your file.";
    //         header("Location: user_request1.php");
    //     }
    // }

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
        "formYear" => $formYear,
        "formMonth" => $formMonth,
        "formDay" => $formDay,
        "representname" => $representname,
        "regStatus" => "Pending",
        "deanStatus" => "Pending",
        "baoStatus" => "Pending",

    );

    echo insert($user_data, $table_name);
    header("Location: index.php");
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
$xdate=date('Y-m-l');
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
     header("Location: index.php");
}else{
    echo "Error";
}

$mail->smtpClose();
?>