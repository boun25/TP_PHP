<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom = ('boun');
    echo $nom;

    echo "<br>";
    echo "<br>";

    $nbre= array(1,2,3,4,5);

    for($i=0;$i<6;$i++){
        echo $i;
    }
    echo "<br>";
    echo "<br>";


    $noms= array("sici","nona","mina","lila","bob");

    for($i=0;$i<count($noms) ;$i++){
        echo  $noms [$i].",";
    }

    echo "<br>";
    echo "<br>";

function calculeSomme($b1,$b2){
        $resultat = $b1+$b2;
        echo "<br>". $resultat;
    }
    calculeSomme(1,2);
    echo"<br>"; 

//exo 5
      ?>


    <form action="" method="get">
        nom :  <input placeholder="nom" name="nom"><br><br>
        prenom : <input placeholder="prenom" name="prenom"><br><br>
        Adresse: <input placeholder="Adresse" name="Adresse"><br><br>
        ville : <input placeholder="ville" name="ville"><br><br>
        age : <input placeholder="age" type="text" ><br><br>
        <input type="submit">
    </form>


    

</form>
</body>
</html>