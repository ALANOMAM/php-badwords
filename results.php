
<?php 

$paragrafo = $_GET['Paragraph'];

$parola = $_GET['Word'];

$lunghezza = strlen($paragrafo);

 $paragrafo2 =  str_replace($parola,"***", $paragrafo);
 $lunghezza2 = strlen($paragrafo2);

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
<div>e la lunghezza del paragrafo è : <?php echo $lunghezza?></div>
<div>Il secondo paragrafo scritto è : <?php echo $paragrafo2 ?></div>
<div>e la lunghezza del secondo paragrafo è : <?php echo $lunghezza2?></div>

<hr>


    
</body>
</html>