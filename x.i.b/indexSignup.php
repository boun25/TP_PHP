<?php
function connectDb(){

$connexion = mysqli_connect("localhost", "root", "", "membre");

if(mysqli_connect_errno()){
    echo "erreur de connexion à la base ".mysqli_connect_error();
    exit();
}
return $connexion;
}

//Retourne true si le user en paramètre existe dans la base de données
// Sinon retourne false si le user en paramètre n'existe pas dans la base de donnée
function checkUser($login, $db){
// verifier que le user soit rempli
if($login !== ""){
// verifier que le user n'existe pas dans la BDD:
    $myRequest = "select login from user where login like '$login';";
    $result = $db->query($myRequest);
    if($r = mysqli_fetch_array($result)){
        // echo 'Résultat de la recherche : ' .$r['id_contact'].'<br>';
        return true;
    }else{
        return false;
    }
}
// si le user est vide : 
return false;
}
//Je vérifie également que les clés (createPwd et createPwd) sont bien présentes.
//A la fin je vérifie que les cléescreatePwd et createPwd ne sont pas vide.
if(
isset($_POST) &&
isset($_POST['login'], $_POST['password'], $_POST['password2']) &&
trim($_POST['login']) !== "" && 
trim($_POST['password']) !== "" &&
trim($_POST['password2']) !== "")
{
//J'appel ma fonction pour me connecter à la BDD
$con = connectDb();

//Création des variables pour récupérer les données de mes champs du formulaire
@$login = htmlspecialchars($_POST['login']);
@$password = MD5(htmlspecialchars($_POST['password']));
@$password2 = MD5(htmlspecialchars($_POST['password2']));

//J'ajoute la vérification de l'user avant insertion (je ne veux pas de doublons d'emails)
if(checkUser($login, $con)){
    echo "Ce nom d'utilisateur existe déjà";
}elseif($password!==$password2){
    echo "Vous n'avez pas renseigné 2 mots de passe identiques";
}else{
    //Je créé ma reqête d'insertion SQL
    $sql_ = "INSERT INTO user (id, login, password) VALUES ('', '$login', '$password')";
    $result = mysqli_query($con, $sql_) or die ("Echec de la requête insert");
    echo "Vos informations ont bien été enregistrées";
}

// Fermeture de connexion
mysqli_close($con);
}else{
echo "veuiller renseigner tout les champs !";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./style/styleInscription.css">
    <!-- Lilita -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">    
</head>
<body>
<div class="background"></div>
<section class="inscrip-form">
    <div class="title">Inscription</div>
    <form action="" method="post">
        <input type="text" placeholder="Nom d'utilisateurs" name="login">
        <div class="password-container">
            <input type="password" placeholder="Mot De Passe" name="password" id="">            
            <input type="password" placeholder="Confirmez" name="password2" id="">
        </div>
        <input type="submit" class="btn" value="Inscription">  
        <button class="btn"><a href="./indexLogin.php">Retour à la connexion</a></button>          
    </form>
</section>
</body>
</html>