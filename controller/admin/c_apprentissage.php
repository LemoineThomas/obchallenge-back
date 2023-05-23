<?php
    include('model/admin/apprentissageManager.php');
	if ($_GET['apprentissage'] == 'ajout') {
		
		ajouterApprentissage(htmlspecialchars($_POST['libelle']),htmlspecialchars($_POST['html']),$connexion);
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getApprentissage($connexion);
		
		$view = "view/admin/v_apprentissage.php";
	}elseif($_GET['apprentissage'] == 'modifier' && isset($_GET['id'])){
		$view = "view/admin/v_apprentissage.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		updateApprentissage(htmlspecialchars($_GET['id']), htmlspecialchars($_POST['libelle']),htmlspecialchars($_POST['html']), $connexion);

        $array = getApprentissage($connexion);

	}elseif($_GET['apprentissage'] == 'voir' && isset($_GET['id'])){
		$view = "view/admin/v_apprentissageModifier.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getUnApprentissage(htmlspecialchars($_GET['id']), $connexion);

	}elseif($_GET['apprentissage'] == 'accueil'){
		$view = "view/admin/v_apprentissage.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getApprentissage($connexion);

	}elseif($_GET['apprentissage'] == 'ajouter'){
		$view = "view/admin/v_apprentissageAjouter.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getApprentissage($connexion);

    }else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>