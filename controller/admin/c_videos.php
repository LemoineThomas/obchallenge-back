<?php
    include('model/admin/videoManager.php');
	if ($_GET['videos'] == 'ajout') {
		
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getVideos($connexion);
		
		$view = "view/admin/v_videos.php";
	}elseif($_GET['videos'] == 'accueil'){
		$view = "view/admin/v_videos.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getVideos($connexion);

	}elseif($_GET['videos'] == 'voir' && isset($_GET['id'])){
		$video = getUnVideo(htmlspecialchars($_GET['id']), $connexion);

		$view = "view/admin/v_videoOne.php";
		//on récupére les users pour les afficher dans le tableau de l'accueil de gestion users
		$array = getVideos($connexion);

	}else{
        $view = "view/admin/v_accueilAdmin.php";
    }
		
?>