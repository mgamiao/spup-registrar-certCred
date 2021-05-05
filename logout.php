<?php
session_start();
session_unset(); 
$_SESSION['alert_msg']=1;
header("Location: index.php");
?>