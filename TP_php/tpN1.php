<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour le monde !</title>
</head>
<body>
    <?php
    echo  "Bonjour le monde";

    echo "<br>";
    echo "<br>";

    $a = (15);
    $b = (28);

    $addi= $a+$b ;
    echo $addi;
    echo "<br>";
    echo "<br>";

    //ex4 

// Si l'âge est supérieur ou égal à 18

function  lesPair ($bnr){
    if ($bnr%2==0){ 
  echo "nombre est pair !";
}
else // Sinon...
{
  echo "nombre est impair!";
}
}
lesPair(6);

    ?>


</body>
</html>