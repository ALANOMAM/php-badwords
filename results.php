
<?php 

$paragrafo = $_GET['Paragraph'];

$parola = $_GET['Word'];

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

<div>Il paragrafo scritto è : <?php echo $paragrafo ?></div>
<div>e la parola vietata è : <?php echo $parola?></div>

    
</body>
</html>