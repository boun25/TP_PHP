<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Exercice 1
Transformez une chaîne écrite dans des casses différentes afin que chaque mot ait une initiale en majuscule.
Exercice 2En utilisant la fonction strlen(), écrivez une boucle qui affiche chaque lettre de la
chaîne "PHP MySQL" sur une ligne différente.
Exercice 3
Formatez l’affichage d’une suite de chaînes contenant des noms et prénoms en respectant les critères suivants : un prénom et un nom par ligne affichés sur 20 caractères ; toutes les initiales des mots doivent se superposer verticalement.
Exercice 4
Utilisez les fonctions adéquates afin que la chaîne <form action="script.php"> soit affichée telle quelle et non comme du code HTML.
Exercice 5
À partir de deux chaînes quelconques contenues dans des variables, effectuez une comparaison entre elles pour pouvoir les afficher en ordre alphabétique naturel.
Exercice 6
Effectuez une censure sur des textes en n’affichant pas ceux qui contiennent le mot zut.
Exercice 7
Créez une fonction de validation d’une adresse HTTP ou FTP en vous inspirant de l’exemple 4-13.
Exercice 8
Créez une expression régulière pour valider un âge inférieur à 100 ans.
Exercice 9
Dans la chaîne PHP \n est meilleur \n que ASP \n et JSP \n réunis, remplacez les
caractères \n par <br /> en utilisant deux méthodes différentes (une fonction ou une expression régulière). -->
<?php
//exo 1 
// echo 'exesci 1 <br/>';
// $ch = "Transformez une chaîne écrite dans des casses
//  différentes afin que chaque mot ait une initiale en majuscule";
//  echo ucwords (strtolower($ch));
//  echo "<br/>";
//  echo "<br/>";
// //exo 2 
// echo 'exesci 2 <br/>';
// $ch1 = "php MYSQL";
// for($i=0;$i<strlen($ch1);$i++){
//     echo "<h3> $ch1[$i]</h3>";
// } 
// //alternative 

// $string2 = "PHP MySQL";
//         echo "La chaîne à décomposer est la suivante : $string2 <br>";
//         for($i=0;$i<strlen($string2);$i++){
//             echo "Le charactère n°".$i." de la chaîne de charactère ".$string2." est \"".substr($string2,$i,1)."\".<br>";
//         }

// //exo3
// echo 'exesci 3 <br/>';
// $nom1 = "azerky";
// $prenom1 = "sophia";
// echo sprintf("<code>%'_-20%'_-20s </code><br/> " ,$nom1 , $prenom1);
// $nom2 = "bazertudih";
// $prenom2 = "jean-michel";
// echo sprintf("<code>%'_-20%'_-20s </code><br/> " ,$nom2 , $prenom2);
// echo "<br/>";
// echo "***************";
//  echo "<br/>";
//  echo "<br/>";
//  echo "<br/>";

// //exo 4
// echo 'exesci 4 <br/>';
// $ch2 = '<form action = "script.php">';
// echo htmlentities($ch2);
// echo "<br/>";
// echo "***************";
// echo "<br/>";
// //exo 5
// echo 'exesci 5 <br/>';
// $ch3="alpha";
// $ch4="AZéma";
// if(strtolower($ch3)<strtolower($ch4)) echo $ch3, "est avant ",$ch4;  
// else echo $cho4 , "est avant ",$ch3;
// echo "<br/>";
// echo "***************";
//  echo "<br/>";
//  echo "<br/>";
//  //exo 6 
//  $string6="\"Je ne l'ai pas dit, encore une fois! − Si, vous l'avez dit. − Non! − Si! − Zut! Vous m'embêtez à la fin!\"(Courteline, Ronds-de-cuir, 1893, p. 179)";
//  $target= array("Zut","zUt","zuT","ZUt","zUT","ZuT","ZUT");
//  $censorship="Censuré !";
//  $censoredstring = str_replace($target,$censorship,$string6);
 
//  echo "La Phrase non-censurée est la suivante :<br>".$string6;
//  echo "<br>";
//  echo "La Phrase censurée est la suivante :<br>".$censoredstring;
//  //alternat
//  $a = "zut!! personne ne parle!";
// $mot = "zut";

// if (preg_match("/$mot/i", $a)) {
//     echo "le mot censuré est : $mot";//on n'as pas besoin d'accolate si un seul ligne mais si deux ligne on met lacolate
// } else {
//     echo $a;
// }
// echo "<br/>";
// echo "***************";
//  echo "<br/>";
//  echo "<br/>";
//  //exo 7
//  echo 'exesci 7 <br/>';
//  //création de la fonction 
//  function validhttp($vald){
//     $modeles = "/^(www)\. ([a-z0-9]+)(\.|-)?([a-z0-9]*)\.([a-z]{2,4}$)/";
//     $vald= strtolower($vald);
//     if(preg_match($modeles, $vald)){
//         echo "$vald est valide <br/>";
//         return TRUE;

//     }else {
//         ECHO "$vald est invalide <br/>";
//         return false;
//     }  
//  }
// $url = "www.laposte2.info";
// $url1 ="www.zedi.fr";
// $url2 ="www.odoo.fr";
// validhttp($url);
// validhttp($url1);
// validhttp($url2);
// echo "<br/>";
// echo "***************";
//  echo "<br/>";
//  echo "<br/>";
// //alternative

// function validurl1($url){
//     $test=@fopen($url,"r");
//     if($test){
//         fclose($test);
//         echo "Le test de ".$url." a un retour positif.<br>";
//     }else{
//         echo "Le test n'a pas fontionné.<br>";
//     }
// }

// function validurl2($url2){
//     if (!filter_var($url2, FILTER_VALIDATE_URL) === false) {
//         echo("URL est valide.<br>");
//       } else {
//         echo("URL n'est pas valide.<br>");
//       }
// }

// $strurl1="http://www.google.com";
// $strurl2="/gogle!com";
// $strurl3="https://github.com/Ashkade";
// $strurl4="tps/github/Ashkade";

// validurl1($strurl1);
// validurl2($strurl1);
// validurl1($strurl2);
// validurl2($strurl2);
// validurl1($strurl3);
// validurl2($strurl3);
// validurl1($strurl4);
// validurl2($strurl4);
// echo "<br/>";
// echo "***************";
//  echo "<br/>";
//  echo "<br/>";

//exo8
echo 'exercice 8 <br/>';
$model = "/^[0-9]?([0-9]?)$/";
$age = "400";
if(preg_match( $model,$age)){
    echo "$age est un age valide <br/>";
    // return TRUE;
}else{
    echo "$age est un age invalide <br/>";
    // return FALSE;
}

?> 

<?php
//alternative 
function agetest($age){
    $pattern="/^[1-9][0-9]?$/";
    if(preg_match($pattern,$age)==true)
        echo "L'age renseigné $age est un age valide.<br>";
    else
        echo "L'age renseigné $age n'est pas un age valide.<br>";
}

$agerand;

for($i=0;$i<10;$i++){
    $agerand=rand(0,200);
    agetest($agerand);
}
echo "***************";
 echo "<br/>";
 echo "<br/>";


//exo 9
echo 'exercice 9 <br/>';
$chaine  = "PHP 5 \n est meilleur \n que ASP \n et JSP \n réunis";
echo "<p>", nl2br($chaine),"</p>";
//utilisation d'une expression régulier 
echo "avec les expresion régulières <br />";
//$models="/\n/";
//$nouveau= "/br/>/";
echo preg_replace("/\n/","<br/>", $chaine);
echo "<br/>";
echo "***************";
 echo "<br/>";
 echo "<br/>";


//alternative 
$target9= "\n";
$replacement="<br>";
$newstring9 = str_replace($target9,$replacement,$chaine);

echo $newstring9;
?>

 




</body>
</html>