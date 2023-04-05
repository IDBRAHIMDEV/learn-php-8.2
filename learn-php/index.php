
<?php

   include('./inc/calculator.php');

   define('NAME', 'Mohamed IDBRAHIM');
   $title = "Bright Coding";
   $firstName = "Mohamed";
   $lastName = "IDBRAHIM";
   $age = 30;

   //echo $firstName.' '.$lastName;
   //echo "My name is : $firstName $lastName";
   //echo "My name is : \"$firstName $lastName\"";
   $fullName = "My name is : \"$firstName $lastName\"";
   
   //echo strlen($fullName);

   //echo strtoupper($fullName);
   echo strtolower($fullName);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <h2><?php echo NAME; ?></h2>
    <p>Salam mes chers developpeurs</p>
    <p>My Age is : <?php echo $age; ?></p>

    <?php include('./inc/content.php'); ?>
    <?php include('./inc/content.php'); ?>

    <h1><?php echo addition(2, 7); ?></h1>
    <h1><?php echo substraction(50, 7); ?></h1>
    <h1><?php echo multiplication(2, 7); ?></h1>
    <h1><?php echo division(10, 2); ?></h1>
    <?php include('./inc/content.php'); ?>

</body>
</html>