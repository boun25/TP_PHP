<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
  <?php
  //difinition insensible à la casse 
  define("PI", 3.1415926535); // décla d'un constente avec le mot c
  //UTILISATION 
  echo " la constante pi vaut ",PI, "<br/>";

  echo "PI arrondi à 3 chiffre apreé la virgule  ". round(PI,3);
  $val= 10;
  $som = $val + PI;

  
  echo "addition de val + pi = " .$som;
  echo "<br>";
  echo "<br>";
  $som1 = round($som, 2);
  echo "arrondi le resul à 2 chiffres aprés ", $som1;
 
  echo "<br />";
  $ip = $_SERVER['REMOTE_ADDR'];
  $nv = $_SERVER["HTTP_USER_AGENT"]; 

  echo"adrese  ip de client : ".$ip. " avec le navigateur : " .$nv;

  echo "<br>";
  echo "<br>";

  $a = "ceci est une variable";
  if (isset($a)){
    echo"la valiable $a exte";

  }
unset ($a); // unset c'est poue suprime une variable 
echo $a;

echo date('Y m j ');


$prenom = "jean";
switch ($prenom) 
{
  case 'jean':
  echo "mascu";
  break;

  case 'jeannine':
  echo "fefimin";
  break;
default:
echo "non";

 }

 $mata= "t un bg";
 for($i=0;$i<500;$i++){
  echo  $mata." ";
 }

 
  ?>
</body>
</html>