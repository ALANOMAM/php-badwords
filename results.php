
<?php 

$name = $_GET['user-name'];

$age = $_GET['user-age'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RESULTS </title>
</head>
<body>

<h1>Risultati del form </h1>
<p>Ciao, il tuo nome è <?php echo $name ?> e hai <?php echo $age?> anni </p>
    
</body>
</html>