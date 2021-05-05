<?php
include "perfect_function.php";

$password = "11";

$hashed_password = _hash_string($password);

echo $hashed_password;

?>