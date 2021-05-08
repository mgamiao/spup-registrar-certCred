<?php
    session_start();
    include "perfect_function.php";

$table_name = "forms";

//get user ID from URL
$id = $_GET['id'];
delete($id, $table_name);
$_SESSION['alert_msg']=3;




header("Location: req_forms.php");

?>