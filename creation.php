<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<?php
if(!isset($_REQUEST['mdp'])){
        $mdp = NULL;
    }else{
        $mdp = $_REQUEST['mdp'];
    }
    ?>
<body>
    <div class="wrapper">
        <form method="POST" action="index.php?action=inscription">

            <h1>INSCRIPTION</h1>
            <?php if($mdp != NULL){
            ?> <p class="error">Mots de passe différents</p> <?php
        } ?>

            <div class="input-box">
                <input id="nom" name="nom" type="Nom" placeholder="Votre Nom" required>
                <i class='bx bxl-gmail' ></i>
            </div>

            <div class="input-box">
                <input id="prenom" name="prenom" type="prenom" placeholder="Votre Prénom" required>
                <i class='bx bxl-gmail' ></i>
            </div>

            <div class="input-box">
                <input id="date" name="date" type="date" placeholder="Votre date de naissance" required>
                <i class='bx bxl-gmail' ></i>
            </div>
        
            <div class="input-box">
                <input id="email" name="email" type="email" placeholder="Votre email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                <i class='bx bxl-gmail' ></i>
            </div>

             <div class="input-box">
                <input id="password" name="password" type="password" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}" required >
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="input-box">
                <input id="password2" name="password2" type="password" placeholder="confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit"class="btn">S'INSCRIRE</button>

            <div class="register-link">
                <p>si vous avez deja un compte <a href="connexion.php">Connexion</a></p>
            </div>

            <div class="register-link">
                <p><a href="index.php">Page d'accueil</a></p>
            </div>

        </form>
    </div>
    </html>
</body>