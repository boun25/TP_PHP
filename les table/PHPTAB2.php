<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //exo1
$personne = ['nom'=>'matango', 'prenom'=>'sylvi','ages'=>19];
foreach($personne as $lui){
    echo" les personnes : " .$lui."<br>";
 }
//exo2
 $nombre= [1,2,3,4,5,6,7,8,9,10];

//exo3
$personne["Ville"] = "Orléans";
// exo 4 -->
$suite =[11,12,13,14,15,16,17,18,19,20];

foreach($nombre as $val){
    echo" les arme sont la : " .$val."<br>";
 }
for($i = 11 ;$i<= 20; $i++){
    $nombre[]=$i;   
}
print_r($nombre);

if
//


?>
</body>
</html>