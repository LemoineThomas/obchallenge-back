<?php
    include('model/admin/typesManager.php');
	if ($_GET['types'] == 'ajout') {
		$view = "view/admin/v_types.php";
		
		ajouterType(htmlspecialchars($_POST['libelleType']), $connexion);
		
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getTypes($connexion);
	}elseif($_GET['types'] == 'confirmationsupprimer'){

        supprimerType($_GET['idType'], $connexion);
        

        $view = "view/admin/v_types.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
        $array = getTypes($connexion);
        
    }elseif($_GET['types'] == 'accueil' || $_GET['types'] == 'supprimer'){
		$view = "view/admin/v_types.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getTypes($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>