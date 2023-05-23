<?php
    include('model/admin/challengesManager.php');
	if ($_GET['challenges'] == 'ajout') {

        ajouterChallenge(htmlspecialchars($_POST['libelleChallenge']), htmlspecialchars($_POST['descriptionChallenge']), htmlspecialchars($_POST['idType']), $connexion);
        

		$view = "view/admin/v_challenges.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getChallenges($connexion);
        
        
	}elseif($_GET['challenges'] == 'confirmationsupprimer'){

        supprimerChallenge($_GET['idChallenge'], $connexion);
        

        $view = "view/admin/v_challenges.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getChallenges($connexion);
        
    }elseif($_GET['challenges'] == 'accueil' || $_GET['challenges'] == 'supprimer'){
		$view = "view/admin/v_challenges.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getChallenges($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>