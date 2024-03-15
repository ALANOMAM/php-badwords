
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

<!--inizio stile-->
    <style>
*{
 margin:0;
 padding:0;
 box-sizing:border-box;
}

body{
 font-family:sans-serif;
 font-size:20px;
 background-color:lightblue;
 display:flex;
 justify-content: center;
}

.container{
 margin-top:50px;
 padding: 20px;
 border: 1px solid black;
 border-radius:5px;
 background-color:lightpink;
 display: flex;
 flex-direction:column;
 align-items: start;
 gap:40px;
}


strong{
    padding:10px;
    background-color:lightblue;
    color:white;
    border: 1px solid lightpink;
    border-radius:5px;
}

 </style>
 <!--fine stile-->

</head>
<body>



<div class="container">
<div>Il paragrafo scritto è : <strong><?php echo $paragrafo ?></strong></div>
<div> La parola vietata è :  <strong><?php echo $parola?></strong></div>
<div> La lunghezza del paragrafo è : <strong><?php echo $lunghezza?></strong></div>
<div>Il secondo paragrafo scritto è : <strong><?php echo $paragrafo2 ?></strong></div>
<div>La lunghezza del secondo paragrafo è : <strong><?php echo $lunghezza2?></strong></div>
</div>



    
</body>
</html>