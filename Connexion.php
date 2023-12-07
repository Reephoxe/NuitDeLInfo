<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <?php 
    if(!isset($_REQUEST['user'])){
        $user = NULL;
    }else{
        $user = $_REQUEST['user'];
    }
    ?>
</head>


<body>
   
    <div class="wrapper">
        <form method="POST" action="index.php?action=connexion">

            <h1>CONNEXION</h1>
            <?php if($user != NULL){
        ?> <p class="error">Connexion impossible</p> <?php
    } ?>
            <div class="input-box">
                <input id="id" name="id" type="text" placeholder="Username" value="<?php if($user != NULL) echo $user; ?>" required>
                <i class='bx bxs-user'></i>
            </div>
            
             <div class="input-box">
                <input id="mdp" name="mdp" type="password" placeholder="password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            

            <button type="submit"class="btn">login </button>

            <div class="register-link">
                <p>Don't have an account?<a href="creation.php">Register</a></p>

            </div>
        </form>
    </div>
    </html>
</body>