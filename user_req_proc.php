<?php
    session_start();

    include "perfect_function.php";

    $table_name="forms";

    $firstname=$_POST['firstname'];
    $middlename=$_POST['middlename'];
    $lastname=$_POST['lastname'];
    $school =$_POST['school'];
    $formType =$_POST['form_type'];
    $numofCopies =$_POST['numofcopies'];
    $numofRequest =$_POST['numofrequest'];
    $reason =$_POST['reason'];
    $modeofclaiming =$_POST['modeofclaiming'];
    $address =$_POST['address'];
    $courseCompleted =$_POST['coursecompleted'];
    $dategraduated =$_POST['dategraduated'];
    $undergraduate =$_POST['undergraduate'];
    $email=$_POST['email'];
    $mobileNum=$_POST['mobilenum'];
    $date=$_POST['date'];

    $user_data=array(
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

    header("Location: user_done.php");

?>