<?php 
include_once 'bd.inc.php';

/**
	 * Permet de tester la connection d'un utilisateur et d'un admin
	 *
	 * @param integer $id l'identifiant de l'utilisateur qui essaye de se connecter
	 * @param string $mdp le prenom de l'utilisateur
	*/

	function getLesIdentifiants($id, $mdp){ 
		$monPdo = connexionPDO();
		$req = $monPdo->prepare ('select motdepasse, identifiant from identifiant');
		$req->bindValue(':id', $id, PDO::PARAM_STR);
		$req->execute();
		$lesInfos = $req->fetchAll(PDO::FETCH_ASSOC);
		if(!empty($lesInfos)){
			if ($lesInfos && password_verify($mdp, $lesInfos[0]['motdepasse'])) {
			$_SESSION['co'] = "true";
			    ?> <p class="text_connect">Vous êtes bien connecté ✓</p> <?php
			
		    }else{
                header('Location:connexion.php?user='.$id);
            }
	    }
	}

    function creerCompte($nom, $prenom, $date, $email, $password){
        $monPdo = connexionPDO();
        $id = rand(2,99999);
        $req = $monPdo->prepare('insert into identifiant (ID, motdepasse, identifiant) values (:id, :password, :email)');
		$res = $req->execute(array(
                        'id'=> $id,
						'password' => password_hash($password, PASSWORD_DEFAULT),
						'email' => $email));
        $req = $monPdo->prepare('insert into informations (ID, nom, prenom, naissance) values (:id, :nom, :prenom, :naissance)');
		$res = $req->execute(array(
                        'id' => $id,
						'nom' => $nom,
                        'prenom' => $prenom,
						'naissance' => $date));
        ?> <p class="text_connect">Vous vous êtes bien inscrits ✓</p> <?php
    }



?>