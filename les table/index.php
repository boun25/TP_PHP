<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$fussi = array("bombe","kalach","fusie ","mmili");
echo "les arrme sont la : " , "<b>".$fussi[1], "</b><br/>";
foreach($fussi as $lui){
   echo" les arme sont la : " .$lui."<br>";
}

//Exo1: Création et Accès aux Tableaux
//exo 1 tablaue de fruit 

$fruits = array("pomme","poire","orange","cerise");
echo "le deuxieme element du tablau fruit est : ","<b>" .$fruits[1],"</b><br/>";

//ajoute d'un element au tablau
$fruits []='kiwi';

$fruits []='montre';

//affichage de la taille totale du tableau
echo "<br>la taille totale du tableau fruits est : " .count($fruits),"<br/>";


//affiche chaque element du tableau sur une ligne nouvelle
foreach($fruits as $frui){
    echo "une nouvelle liqne pour le ou la  : ".$frui ."<br>";
}

//Exo2: Manipulation de Tableaux
$etudiants = array(
    'alice'=>18, 'bob'=>15,'ale'=>19, 'avab'=>16,
);
echo "<br> la note de l'etudiante alice est : " .$etudiants['alice'],"<br><br>";

/**modifier la note de bob a 17*/
$etudiants ['bob']= 17;

//ajoute un nouvel etudient du nom de charlie avec une note de 16
echo "ajoute de l'etudient charlier : " .$etudiants['charlier']=16, "<br><br>";

$total_notes = array_sum($etudiants);
echo"la somme totale des notes est :", $total_notes, "<br><br>"; 
$nombre_eludiants = count($etudiants);
echo"le nombre totale d'etudiant est  : ",$nombre_eludiants,"<br><br>"; 
$moyenne = $total_notes / $nombre_eludiants;
echo"le moyenne des note est : " .$moyenne;

    ?>
</body>
</html>