<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href='https://unpkg.com/Boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style_home.css">
    <?php include("bd.connexion.php"); ?>
</head>
<body>
    <div class="wrapper">
        <form action="">
        <section>
            <ul>
                <li><a href="index.php" data-text="Accueil">Accueil</a></li>
                <li><a href="#" data-text="propos">A propos de nous</a></li>
                <li><a href="#" data-text="Services">Les services</a></li>
                <li><a href="connexion.php" data-text="connexion">connexion</a></li>

            </ul>
        </section>
        </form>
    </div>

    <div class="page">
        <h1>Bienvenue sur cet interface en cours de programation par l'équipe les saisonniers !</h1>
        
        
    
     </div>
     <div id="connecter">
     <?php
// contrôleur qui gère l'affichage des catégories
if(!isset($_REQUEST['action'])){
    $action = "rien";
}else{
    $action = $_REQUEST['action'];

}
switch($action)
{
    case 'connexion' : // quand le formulaire de connexion est rempli
	{
	    $id =$_REQUEST['id']; $mdp = $_REQUEST['mdp']; //on récupère le mdp et l'id
	    getLesIdentifiants($id, $mdp); //on vérifie si on peut retrouver la personne et ainsi se connecter
	    break;
	}
    case 'inscription':
        {
            $nom = $_REQUEST['nom']; $prenom = $_REQUEST['prenom']; $date = $_REQUEST['date']; $email = $_REQUEST['email']; 
            $password = $_REQUEST['password']; $password2 = $_REQUEST['password2']; 
            if($password != $password2){

                header('Location:creation.php?mdp=notok');
            }else{
                creerCompte($nom, $prenom, $date, $email, $password);

            }
            break;
           
        }
    
}

?> 
    </div>
    </html>
</body>