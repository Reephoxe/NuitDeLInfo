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
                <li><a href="idee.html" data-text="Face">Idées reçus</a></li>
                <li><a href="#" data-text="Services">Solutions Viables</a></li>
                <li><a href="connexion.php" data-text="connexion">connexion</a></li>

            </ul>
        </section>
        </form>
    </div>

    <div class="page">
        <h2>La crise climatique contemporaine exige une réflexion urgente sur notre impact environnemental. Les constats scientifiques sont alarmants : les émissions de gaz à effet de serre continuent de croître, mettant en péril notre capacité à limiter le réchauffement mondial à des niveaux critiques. Les conséquences de ce dérèglement sont déjà perceptibles à travers des événements météorologiques extrêmes et des changements environnementaux rapides. Ainsi, la nécessité de repenser nos modes de vie et d'adopter des pratiques durables devient impérative pour forger un avenir plus résilient. <a href="idee.html">Plus d'info ici.</a></h2>
        <br/>
        <!--<h3>L’empreinte climat qu’est ce c’est ?</h3>
        <br/>
        <h3>L'empreinte climat, c'est la mesure de notre impact sur le réchauffement de la planète en termes d'émissions de gaz à effet de serre. Pour évaluer notre contribution individuelle, on calcule l'empreinte carbone, qui tient compte des émissions liées à nos diverses activités quotidiennes, telles que le transport, l'alimentation et le logement.
        Chaque action, de prendre la voiture à manger un steak, génère des émissions tout au long de son cycle de vie, de la fabrication à l'élimination. L'empreinte carbone personnelle résulte de la somme de ces émissions, visualisée à travers diverses infographies.
        La prise de conscience de son empreinte carbone est essentielle, mais la réduire est encore plus cruciale. Cela passe par différentes actions, entre petits gestes (changer les ampoules, éteindre les appareils en veille) et grands gestes (réduire la consommation de viande, électrifier les usages fossiles).
        Cependant, il est important de reconnaître que certains aspects de notre empreinte ne sont pas toujours sous notre contrôle, comme le manque d'isolation dans une location. Atteindre l'objectif ambitieux de 2 tonnes de CO₂ₑ par personne nécessite des efforts collectifs, impliquant l'État, les collectivités, les entreprises et la société dans son ensemble. C'est une transformation globale vers un mode de vie bas carbone, où chacun joue un rôle dans la construction d'un avenir plus durable.
        </h3>
-->
        
    
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