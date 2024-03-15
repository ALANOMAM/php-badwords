<?php
//http://localhost/php-badwords/index.php?eta=27&nome=Alan

$name = $_GET['nome'];
     
$age = $_GET['eta'];

$height = $_GET['altezza']

     
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Ciao mi chiamo <?php  echo $name ?> e ho <?php echo $age ?> anni e sono alto <?php  echo $height ?> </p>  
</body>
</html>