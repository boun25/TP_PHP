<?php

/**une expretion condionnnelle pr tester si un nombre est a la miltipliable par 3 et de 5  */

//exo 1 

$x = 1245;
    if($x%3==0 AND $x%5==0){
    echo "$x est multipliable de 3 et de 5 <br/>";
    }else
    {
        echo "$x n'est pas  multipliable de 3 et de 5 <br/>";  
    }
    //alternative 
    $x1 =45;

//                 // Exercice2 
//                 // Écrivez une expression conditionnelle utilisant les variables $age et $sexe dans une
//                 // instruction if pour sélectionner une personne de sexe féminin dont l’âge est compris
//                 // entre 21 et 40 ans et afficher un message de bienvenue approprié. 

    $sexe = 'f';
    $age = 43;

    if($sexe =='F' and $age >=21 and $age <=40){
        echo "bjr madame vs avees entre 21 et 40 ans <br />";
    }else{
        echo "désole vous ne remplisse par les condition  <br />";
    }
// echo "<br/>";
// echo "<br/>";
//                 // Exercice 3 
//                 // Effectuez une suite de tirages de nombres aléatoires jusqu’à obtenir une suite composée
//                 // d’un nombre pair suivi de deux nombres impairs. 

    $compteur = 0;
    //rand = il donne des chifre au pif  
do{
    $x = rand(0,1000);
    $y =rand(0,1000);
    $z = rand(0,1000);
    $compteur++;
    echo $x, ",", $y, ",", $z, "<br/>";
   }

 while($x%2==1 OR $y%2==0 OR $z%2==0);
    echo "resultat obtenu en $compteur tours"; 

//  echo "<br/>";
//  echo "<br/>";

//alternative 
$ndr1 = rand(1,100);
$ndr2 = rand(1,100);
$ndr3 = rand(1,100);

while($ndr1%2==1||$ndr2%2==0 || $ndr3%2==0){
    $ndr1 = rand(1,100);
    $ndr2 = rand(1,100);
    $ndr3 = rand(1,100);  
  }

                // Exercice 4  
                // Créez et affichez des numéros d’immatriculation automobile (pour Paris, par exemple)
                // en commençant au numéro 100 PHP 75. Effectuez ensuite la même procédure en mettant
                // en réserve les numéros dont le premier groupe de chiffres est un multiple de 100.
                // Stockez ces numéros particuliers dans un tableau.

   

//alternet1
$plaquepart=[];
for($i=100;$i<=999;$i++){
    $plaque2=' PHP 75';
    $plaquefinale=$i.$plaque2;
    // console_log($plaquefinale);
    if($i%100==0){
        $plaquepart[]=$plaquefinale;
    }
}
var_dump ($plaquepart);

//alternet2
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
//alternative 3


    // $inintx = 80;// p 
    //  $inity = 72 ; //h 
    //  $initz = 80; //p 
    // //  boucle imbriquéé 
    //  for ( $x = $inintx; $x<=90; $x++){
     
    //     for ( $y= $inity; $y<=90; $y++){
        
    //         for ( $z= $initz; $z<=90; $z++){
    //                 for ($num= 100 ; $num<120; $num++)
    //                 {
    //                 echo "numero : $num ",chr($x),chr($y),chr($z),"75 <br/ > <br/ > <br/ >";
    //                 }
    //                 $inintx = 65 ; // on repart à la lettre a pr la troisieme caractere 
    //             }
    //            $inintx = 65 ;// on repart à la lettre a pr la deuxieme  caractere
    //     }      
    // }     
/**pour ne conserve les  */

// for($x =$inintx;$x<=90; $x++){
//         for($y =$inintx;$y<=90;$y++){
//             for($z = $initz; $z<=90; $z++){
//                 for($num=100;$num<1000;$num++){
//                     $tab[]=$num.chr($x).chr($y).chr($z);
//                 }
//             }
//         }
//     }

                /*Exercice 5 
                Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, et
                comptez le nombre de tirages nécessaire pour obtenir le nombre initial. Arrêtez les
                tirages, et affichez le nombre de coups réalisés. Réalisez ce script d’abord avec
                l’instruction while puis avec l’instruction for. 
 -->*/


//  echo "<br/>";
//   echo "<br/>";
//   $nb= 789;
//  //compteur;
//  $conp= 0;
// // //  //boucle de tirage 

//  while($x!=$nb){
//     $x = rand(0,1000);
//     $conp++;
//     //echo $x pour afiche tout les triages 
//  }
//     echo "$nb trouvé en $coup  coup ";
//     //avc la boucle for  // nbr a trouve 
//     $nb1 = 650;
//     echo "<br/>";
//     echo "<br/>";
//     //boucle trirage 
//     echo "avec la boucle for : <br/>";
//     for($coup=1;$x!=$nb1;$coup++){
//         $x = rand (0,100);

// }
// echo "$nb1 trouve en $coup coup";
                /*Exercice 6 
                Créez un tableau dont les indices varient de 11 à 36 et dont les valeurs sont des lettres
                de A à Z. Lisez ensuite ce tableau avec une boucle for puis une boucle foreach, et
                affichez les indices et les valeurs (la fonction chr(n) retourne le caractère dont le code
                ASCII vaut n). */
    // for ($i= 11;$i<=36;$i++){
    //     $tab [$i]=chr(54+$i); 
    // }
    // for($i=11;$i<=36;$i++){
    //     echo"élement d'inciden  $i : $tab[$i] <br />";
    // }
    // echo "<br/>";
    // foreach($tab as $cle=> $valeur){
    //     echo"élement d'inciden  $cle : $valeur <br />";
    // }
    // echo "<br/>";
    // echo "<br/>";
                /**Exercice 7

                Utilisez une boucle while pour déterminer le premier entier obtenu par tirage aléatoire
                qui soit un multiple d’un nombre donné. Écrivez la variante utilisant la boucle do…while. */
    // $nbre =57;
    // $compt = 1;
    // $x_=rand(0,100);
    // //bcle while
    // while ($x_%$nbre!=0){l
    // $x_=rand(0,1000);
    // $compt++;}

// }
// echo "$x_ est un multiple de $nbre : résultat obtenu en $compt coups ";

// Exercice 8
// Recherchez le PGCD (plus grand commun diviseur) de deux nombres donnés. Gérez au
    // function pgcd( $a, $b){
    //     if(($a <=0 )|| ($b <=0 ))
    //     return("veuilles entre 2 agument");
    // while($b > 0){
    //     $r = $a % $b;
    //     $a = $b ; 
    //     $b= $r;
    // }
    // return $a;
    // }
    // echo pgcd(105, 10);
    // echo "<br/>";
    // echo "<br/>";

    //ici ereur
//  $nbrpgcd1=rand(1,1000);
//  $nbrpgcd2=rand(1,1000);

//  if(is_int($nbrpgcd1)!=TRUE){
//      echo "Le nombre $nbrpgcd1 n'est pas un nombre entier.";
//  }elseif(is_int($nbrpgcd2)!=TRUE){
//      echo "Le nombre $nbrpgcd2 n'est pas un nombre entier.";
//  }else{
//      $gcd = GCD($nbrpgcd1, $nbrpgcd2);
//      echo "Le plus grand commun diviseur de $nbrpgcd1 et $nbrpgcd2 est $gcd.";
//  }


    // Exercice 9
    // 1. Connecter vous à la base casse2
    // 2. Afficher toutes les personnes qui vivent à Paris ou à Bordeaux,
    // 3. Afficher toutes les personnes dont l'âge est compris entre 25 et 40 ans.
    // 4. Afficher les personnes dont le nom comprend la lettre "n".


    // $con  = mysqli_connect("localhost", "root","","casse2" );
    // if(mysqli_connect_errno()){
    //     echo "erreur de connection à la base " .mysquli_connect_error();
    // }
    //     // def de la requette 

    // $sql = "SELECT Nom, Ville FROM personne WHERE Ville = 'Paris' OR Ville = 'Bordeaux' ORDER BY Nom ASC";

    //     if($request1 = mysqli_query($con, $sql)){
    //         echo "<table width=500>";
    //         echo "<th>"."Nom"."</th>";
    //         echo "<th>"."Ville"."</th>";

    //         while($row = mysqli_fetch_row($request1)){
    //             echo "<tr>";
    //             for($i=0;$i<count($row);$i++){
    //             echo "<td>".$row[$i]."</td>";
    //         }
    //             echo "</tr>";
    //         }

    //         echo "</table>";

    //         mysqli_free_result($request1);
    //     }








?>