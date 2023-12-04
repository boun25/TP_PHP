<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

  /*
Elles permettent de contreoler la bonne saisie dans un formulaire d'une page web. Par exemple, un code postal
ne contient que des chiffres, un nom propre ne peut pas contenir des caractères inhabituels, une adresse email doit obligatoirement poséder le signe , une zone doit obligatoirement être en majuscule, etc.
A partir de HTML5, la balise input propose des contrôle intégrés qui surveillent les caractères, mais vous pouvez aussi tester les données dans un script PHP.
Ces expression sont
appelées rationnelles ou régulières (regular en anglais).
Le principe est de définir un modèle de saisies dans une chaine qui va servir à tester une autre chaine de caractères par rapport à ce modèle. S'il n'y a pas de correspondance, on peut renvoyer un message à l'utilisateur en indiquat qu'il y a une ne erreur.
*/

// $modele = "/[A-Z]/";
// if(preg_match($modele.$_POST['nom'])==false){
//     //j'appelle la fonction et je passe le message à afficher affiche ("le nom doit comporter des majuscules");
//     affiche("le nom doit comporter des majuscules");
//     exit();
//     }



// Le tableau ci-dessous montre quelques modèmles employés dans le code PHP
/*II Description
Au moins un caractères contenant n'importe quelle lettre Au moins un caractères contenant n'importe quelle lettre Au moins un chiffre entre 0 et 9
N'importe quel caractère minuscule ou majuscule Tous les caractères alphanumériques
Modele
"/[a-z]/" "/[A-Z]/"
"/[0-9]/"
"/[[:alpha: ]]/" "/[[:alnum:]]/"
*/

/*
 "/[[:alnum:]]/"
"/[[:b1ank: 11/"
"/[[:ctr1:]]/"
"/[[:digit:11/"
"/Lyon/"
|| Description
Au moins un caractères contenant n'importe quelle lettre
en minuscule
Au moins un caractères contenant n'importe quelle lettre
en majuscule
Au moins un chiffre entre 0 et 9
N'importe quel caractère minuscule ou majuscule
Tous les caractères alphanumériques, est équivalent à "[a-zA-Z0-9]"
Les espaces, les tabulations
Les caractères de controle
Tous les chiffres
Tous les chiffres
"/\.com|\.fr/"
Teste si l'une des chawles.com ou .fr existe. Le "où" est indiqué par le caractère I
"/[^rtg]/"
LE caractère ^exclut les lettres r, t et g.
 */



?>

<form 
action="" method="post"> 
<fieldset>
    <legend><b>Vos coordonnées</b></legend>
     <label>Nom : </label>
    <input type="text" name= "nom" size="40" />
    <label>Email : </label>
    <input type="text" name= "mail" pattern = "(^[a-z0-9]+) @([a-z0-9])+(\.)([a-z]{2,4})" />
     <label>Tél : </label>
    <input type="tel" name= "tel" pattern = "^[0-9]{9}" /> <br />
    <label>code :</label>
    <input type="passeword" name="code" size= "40" maxlength="6"/><br />
    <label>departement :</label>
    <input type="numero" name="num" nim= "1" max="101"/><br/>
    <label>Né(e) le : </label>
    <input type="date " name= "date" min="1960_01_01" max= "2018_01_01" /><br />
     <input type="radio" name= "sexe" value="Femme" />Femme<br />
    <input type="radio" name= "sexe" value="Homme" />Homme<br /> 
    <select name="pays" size="1">
        <option value="France">France</option>
        <option value="Belgique">Belgique</option> 
        <option value="Suisse">Suisse</option>
        <option value="Canada">Canada</option>
     </select>


</fieldset>






</body>
</html>


