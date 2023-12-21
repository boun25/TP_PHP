<?php
// Serveur connexion
$serverName = 'localhost';
$user = 'root';
$password = '';

$connexion = mysqli_connect($serverName, $user, $password);
if(!$connexion){
    die('Failled to connect'.mysqli_connect_error());
};

// Database connexion
$databaseName = 'membre';

$cnx = mysqli_connect($serverName, $user, $password, $databaseName);
if(!$cnx){
    die('Failled to connect'.mysqli_connect_error());
};

// SESSION

// ... (ta connexion à la base de données)

session_start();

if(isset($_POST['valider'])) {
    $login = htmlspecialchars($_POST['login']);
    $pass = htmlspecialchars($_POST['pass']);

    // Hachage du mot de passe saisi pour le comparer avec celui enregistré dans la base de données
    $hashed_password = md5($pass);

    // Vérifie si l'utilisateur avec le login et le mot de passe haché existe dans la base de données
    $sql = "SELECT * FROM user WHERE login = '$login' AND password = '$hashed_password'";
    $result = mysqli_query($cnx, $sql);

    if($result) {
        $row = mysqli_fetch_assoc($result);
        if($row) {
            $_SESSION["autoriser"] = "oui";
            $_SESSION["name"] = "$login";
            header("location: indexMembre.php");
            exit();
        } else {
            $erreur = "Mauvais login ou mot de passe";
        }
    } else {
        echo 'Erreur de requête : '.mysqli_error($cnx);
    }
}
// ... (ton formulaire HTML et le reste du code pour gérer les erreurs, afficher les messages, etc.)

mysqli_close($cnx);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XavierIsaacBenoit</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./style/styleAccueil.css">
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
<section class="connect-container">
    <section class="connect-form">
        <div class="title">Connexion</div>

        <form action="" method="post">
            <input type="text" name="login" placeholder="Nom d'Utilisateurs">
            <input type="password" name="pass" placeholder="Votre Mot de Passe">
            <input type="submit" name="valider" class="btn" value="Je me connecte">
        </form>

        <div class="mini-texte">Vous n'avez pas encore de compte ? <a href="./indexSignup.php" class="sign-in">Je veux m'inscrire</a></div>
<?php if(!empty($erreur)){?>
<div id="erreur"><?=$erreur?></div>
<?php } ?>
    </section>     
</section>
</body>
</html>