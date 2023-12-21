<?php
session_start();
if($_SESSION["autoriser"] != "oui"){
    header("location:indexLogin.php");
    exit();
};
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Espace</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./style/styleMembre.css">
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
<header>
    <div class="header-container">
        <div class="header-left">
            <?php echo $_SESSION['name'];?>
        </div>
        <div class="header-mid">
            <img src="./assets/logo.png" alt="">
        </div>
        <div class="header-right">       
            <div class="toggler-container">
                <button type="button" class="nav-toggler">
                    <span class="line l1"></span>
                    <span class="line l2"></span>
                    <span class="line l3"></span>
                </button>    
            </div>
        </div>        
    </div>
</header>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>
    <div class="container">
        <h1 class="title">Bienvenue </h1> 
        <h2>sur votre espace personnel <?php echo $_SESSION['name'];?></h2>
    </div>

<script src="./script/scriptToggler.js"></script>
</body>
</html>