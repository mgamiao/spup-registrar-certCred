<html>
<body>

<?php
$captchaResult = $_POST['captchaResult'];
$firstnumber = $_POST['firstnumber'];
$secondnumber = $_POST['secondnumber'];

$checkTotal = $firstnumber + $secondnumber;


if ($captchaResult == $checkTotal) {
    header("Location: stud_home.php");
}else {
    header("Location: wrong1.php");
}
?>

</body>
</html>