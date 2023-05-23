<?php
    include('model/admin/classementsManager.php');
	if($_GET['classements'] == 'accueil'){
		$view = "view/admin/v_classements.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getVideos($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>