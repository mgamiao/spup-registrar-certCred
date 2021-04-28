<DOCTYPE html>
<head>
    <style>
        body {
            margin: 0; padding: 0; font-family: Arial, sans-serif; font-size: 22px; line height: 180%;
        }  .center { margin: 0 auto; max-width: 990px;}
    </style>
</head>

<?php
    $min_number = 1;
    $max_number = 10;
    $random_number1 = mt_rand($min_number , $max_number);  
    $random_number2 = mt_rand($min_number , $max_number);    
?>

<div class="center">
<form action="homepage.php" method="POST">
Please solve this problem to prove that you are not a bot <br>

<?php
    echo $random_number1 . ' + ' . $random_number2 . ' = ';
?>

<input name="captchaResult" type="text" size="4" />
<input name="firstnumber" type="hidden" value= "<?php echo $random_number1; ?>"/>
<input name="secondnumber" type="hidden" value= "<?php echo $random_number2; ?>"/>
<input  type="submit" value= "submit"/>
</form>
</div>
</html>


