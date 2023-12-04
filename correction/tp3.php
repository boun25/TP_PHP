<?php
 /*
Rédiger une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3
et de 5.
*/
/*Exo 1*/
$x = 895;
if($x%3==0 AND $x%5==0){
    echo "$x est multiple de 3 et de 5 <br />";
}else
{
        echo "$x n'est pas multiple de 3 et de 5 <br />";
}
echo "<br />";
$x1=45;
switch($x1){
    case $x1%3!==0 : 
        echo "$x1 n'est pas multiple de 3 <br />";
        break;
    case $x1%5!==0 : 
        echo "$x1 n'est pas multiple de 5 <br />";
        break;
    default : 
        echo "$x1 est un  multiple de 3 et de 5 <br />";
        break;    
}

/*Exo 2*/
/*Écrire une expression conditionnelle utilisant les variables $age et $sexe dans une
instruction if pour sélectionner une personne de sexe féminin dont l’age est compris entre
21 et 40 ans et afficher un message de bienvenue approprié.*/
$sexe = 'F';
$age = 43;
if($sexe =='F' and $age >=21  and $age <=40){
    echo "Bonjour Madame vous avez entre 21 et 40 ans <br />";
}else{
    echo "Désolé, vous ne remplissez pas les conditions <br /> <br />";
}
//exo3
/*Effectuer une suite de tirages de nombres aléatoires jusqu’à obtenir une suite composée d’un
nombre pair suivi de deux nombres impairs.*/
$compteur = 0;
do{
    $x = rand(0,1000);
    $y= rand(0,1000);
    $z = rand(0,1000);
    $compteur++;
    echo $x, ",", $y, ";", $z, "<br />";
}
while($x%2==1 OR $y%2==0 OR $z%2==0);
    echo  "Résultat obtenu en $compteur tours" ;
    echo "<br />";
    echo "<br />";
//Alternative
$number1 = rand(1,100);
$number2 = rand(1,100);
$number3 = rand(1,100);
while($number1%2==1 || $number2%2==0 || $number3%2==0){
    $number1 = rand(1,100);
    $number2 = rand(1,100);
    $number3 = rand(1,100);
    
}
echo " le premier est $number1, le 2è est $number2 et le 3è est $number3";
 echo "<br />";
echo "<br />";

// Exo 4
/* Créer et afficher des numéros d’immatriculation automobile (pour Paris, par exemple) en
commençant au numéro 100 PHP 75. Effectuer ensuite la même procédure en mettant en
réserve les numéros dont le premier groupe de chiffres est un multiple de 100.
Stocker ces numéros particuliers dans un tableau.

Si on réalise le script complet, il affiche plusieurs millions de numéros de 100 PHP 75 à 999
ZZZ 75. L’exécution est donc très longue et risque de bloquer le serveur. Pour effectuer un
test, les valeurs des chiffres sont limitées ci-dessous entre 100 et 120.*/

/*function console_log($output, $with_script_tags = true) {
            $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
            ');';
            if ($with_script_tags) {
            $js_code = '<script>' . $js_code . '</script>';
            }
            echo $js_code;
            }
$plaquepart =[];
for($i = 100; $i<=999;$i++){
    $plaque2= ' PHP 75';
    $plaquefinale = $i.$plaque2;
    console_log($plaquefinale2);
    if($i%100==0){
        $plaquepart[]=$plaquefinale;
    }
}
var_dump($plaquepart);

//Alternative

$numImmatriculation = "100 PHP 75";
for($i = 1; $i <=6; $i++){
    echo $numImmatriculation. " - ";
    $parts = explode(" ", $numImmatriculation);
    $numero = (int) $parts[0];
    $numero++;
    $numImmatriculation =  $numImmatriculation.$parts[1].$parts[2];
}*/
//Alternative 
$numerosParticuliers = array();

    for ($i = 100; $i <= 999; $i++) {
        $numeroImmatriculation = " " . str_pad($i, 3, '0', STR_PAD_LEFT) . " PHP 75"; // Incrémente le nombre

            if ($i % 100 === 0) {
        $numerosParticuliers[] = $numeroImmatriculation;
            }
            //echo $numeroImmatriculation . "<br>";  
        }

        echo "Numéros particuliers :<br>";
        foreach ($numerosParticuliers as $numero) {
            echo $numero . "<br>";
        }


$initx = 80; // lettre P
$inity = 72; // lettre H
$initz = 80; //lettre P

//Boucles imbriquées
/*for($x = $initx; $x<=90; $x++){
    for($y = $inity; $y<=90; $y++){
        for($z = $initz; $z<=90; $z++){
            for($num=100;$num<120;$num++)
			{
			 echo "Numero : $num ",chr($x), chr($y), chr($z), " 75 <br /> <br /> <br />";
			 //$tab[]="$num".chr($x).chr($y).chr($z)." 75";
            }
            $initz = 65; // on repart à la lettre A pour le troisième caractère 
        }
            $inity = 65; // on repart à la lettre A pour le deuxième caractère
    }
}
/* Pour ne conserver que les nombres multiples de 100 nous remplaçons l'instruction echo par le stockage des numéros dans un tableau. 
Il estu affiché à la fin de toutes les boucles à l'aide de la fonction print_r(). */
/*for($x = $initx; $x<=90; $x++){
    for($y = $inity; $y<=90; $y++){
        for($z = $initz; $z<=90; $z++){
            for($num=100;$num<1000;$num++)
			{
		
			 $tab[]="$num".chr($x).chr($y).chr($z)." 75";
            }
            $initz = 65; // on repart à la lettre A pour le troisième caractère 
        }
            $inity = 65; // on repart à la lettre A pour le deuxième caractère
    }
}

print_r($tab);*/

//Exo 5
/* Choisir un nombre de trois chiffres. Effectuer ensuite des tirages aléatoires et compter le
nombre de tirages nécessaire pour obtenir le nombre initial. Arrêter les tirages et afficher le
nombre de coups réalisés. Réaliser ce script d’abord avec l’instruction while puis avec
l’instruction for.  */
//Avec la boucle while
 //nombre à trouver
 echo "<br />";
 echo "<br />";
 echo "<br />";
 $nb= 789;
 //compteur
 $coup = 0;
 //boucle de tirage
 echo "avec la boucle while ";
 while($x!=$nb){
    $x = rand(0,1000);
    $coup++;
    //echo $x, "<br />; // Pour afficher tous les tirages
 }
 echo " $nb trouvé(s) en $coup  coups ";

 //Avec la boucle for
 //Nombre à trouver
 $nb1 = 650;
 echo "<br>";
 echo "<br>";
 //boucle tirage
 echo "Avec la boucle for : <br />";
 for($coup=1; $x!=$nb1;$coup++){
    $x = rand (0, 1000);

 }
 echo "$nb1 trouvé(s) en $coup coups <br /><br />";
//Exo 6
/*
Créer un tableau dont les indices varient de 11 à 36 et dont les valeurs sont des lettres de A à
Z. Lire ensuite ce tableau avec une boucle for puis une boucle foreach et afficher les
indices et les valeurs (la fonction chr(n) retourne le caractère dont le code ASCII vaut n).
*/
for($i=11; $i<=36;$i++){
    $tab[$i]=chr(54+$i);
}
//Lecture avec for
for($i=11;$i<=36;$i++){
    echo "Elément d'indice $i : $tab[$i] <br />";
}
echo "<hr />";

//Lecture avec foreach
foreach($tab as $cle=>$valeur){
    echo "Element d'indice $cle: $valeur <br />";
}
echo "<br />";
echo "<br />";
///Alternative
$alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";        
        echo "La suite de caractères renseignés est la suivante pour \$table2 : ";
        for($i=11;$i<=36;$i++){
            $table2[$i]=substr($alphabet,$i-11,1);
            echo $table2[$i];
        }
        var_dump($table2);
//Exo 7 
/*
 Utiliser une boucle while pour déterminer le premier entier obtenu par tirage aléatoire qui
soit un multiple d’un nombre donné. Écrire la variante utilisant la boucle do…while.
Avec une boucle while, notez qu’il faut initialiser $x avant la boucle.
*/
echo "<br />";
echo "<br />";
$nbre = 57;
$compt = 1;
$x_=rand(0,1000);
//Boucle while
while($x_%$nbre!=0){
    $x_=rand(0,1000);
    $compt++;
}
echo "$x_ est un multiple de $nbre: Résultat obtenu en $compt coups";
$compt++;
echo "<br>";
echo "<br>";
 //Exo 9 pgcd

//Exo 9
//Q1 connexion
$con = mysqli_connect("localhost", "root","","casse2");
if(mysqli_connect_errno()){
    echo "erreur de connexion à la base".mysqli_connect_error();
}//fin Q1
//  Q2 défintion de la requête

$sql = "select nom, ville from personne  where ville ='Paris' OR ville='Bordeaux' ";
//$sql = "select * from personne  where ville ='Paris' OR ville='Bordeaux' order by nom asc";

if($result = mysqli_query($con, $sql)){
    echo "Pour cette requete :  $sql il y a  : " .mysqli_num_rows($result). " enregistrements";
    echo "<br><br>";
    echo "<html><style>";
    echo "table, th, td{
        border:1px solid black";
};
echo "</style>";
echo "<body><table>";
//echo "<th>"."NumAch"."</th>";
echo "<th>"."Nom"."</th>";
//echo "<th>"."Age"."</th>";
echo "<th>"."Ville"."</th>";
//echo "<th>"."Sexe"."</th>";
//pour l'ensemble des lignes du jeu de résultat
while($row=mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    /*echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>"; */ 
    echo "</td>";
}
echo "</table></body></html>";

mysqli_free_result($result);
//Alternative
echo "<br>";
echo "<br>";

$ville = "SELECT Nom, Ville FROM personne WHERE Ville = 'Paris' OR Ville = 'Bordeaux' ORDER BY Nom ASC";

        if($result = mysqli_query($con, $ville)){
            echo "<table width=500>";
            echo "<th>"."Nom"."</th>";
            echo "<th>"."Ville"."</th>";

            while($row = mysqli_fetch_row($result)){
                echo "<tr>";
                for($i=0;$i<count($row);$i++){
                echo "<td>".$row[$i]."</td>";
            }
                echo "</tr>";
            }

            echo "</table>";

            mysqli_free_result($result);
        }

        //  Q3 défintion de la requête
$sql3 = "select nom,age  from personne  where age >=25 and age<=40 ";
//$sql = "select nom,age  from personne  where age between 25 and 40  order by age desc";

//$sql = "select nom,age  from personne  where age IN (15, 25, 36, 89) order by age desc";

if($result3 = mysqli_query($con, $sql3)){
    echo "Pour cette requete :  $sql3 il y a  : " .mysqli_num_rows($result3). " enregistrements";
    echo "<br><br>";
    echo "<html><style>";
    echo "table, th, td{
        border:1px solid black";
};
echo "</style>";
echo "<body><table>";
//echo "<th>"."NumAch"."</th>";
echo "<th>"."Nom"."</th>";
echo "<th>"."Age"."</th>";
// echo "<th>"."Ville"."</th>";
//echo "<th>"."Sexe"."</th>";
//pour l'ensemble des lignes du jeu de résultat
while($row=mysqli_fetch_row($result3)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    /*echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>"; */ 
    echo "</td>";
}
echo "</table></body></html>";

mysqli_free_result($result3);

echo "<br>";
echo "<br>";
//  Q4 défintion de la requête
$sql4 = "select * from personne where nom like '%n%'";
//$sql = "select nom,age  from personne  where age between 25 and 40  order by age desc";

//$sql = "select nom,age  from personne  where age IN (15, 25, 36, 89) order by age desc";

if($result4 = mysqli_query($con, $sql4)){
    echo "Pour cette requete :  $sql4 il y a  : " .mysqli_num_rows($result4). " enregistrements";
    echo "<br><br>";
    echo "<html><style>";
    echo "table, th, td{
        border:1px solid black";
};
echo "</style>";
echo "<body><table>";
echo "<th>"."NumAch"."</th>";
echo "<th>"."Nom"."</th>";
echo "<th>"."Age"."</th>";
echo "<th>"."Ville"."</th>";
echo "<th>"."Sexe"."</th>";
//pour l'ensemble des lignes du jeu de résultat
while($row=mysqli_fetch_row($result4)){
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>"; 
    echo "</td>";
}
echo "</table></body></html>";

mysqli_free_result($result4);

mysqli_close($con);

?>