<?php
    include('model/admin/typesManager.php');
	if ($_GET['types'] == 'ajout') {
		$view = "view/admin/v_types.php";
		
		// Répertoire de destination pour les images
        $uploadDir = "img/";

        // Récupération des informations sur le fichier
        $fileName = $_FILES["image"]["name"];
        $fileTmpName = $_FILES["image"]["tmp_name"];
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

        // Génération d'un nom de fichier unique
        $uniqueFileName = uniqid() . "." . $fileExtension;

        // Chemin complet du fichier de destination
        $destination = $uploadDir . $uniqueFileName;

		if (move_uploaded_file($fileTmpName, $destination)) {
			// Récupération de l'URL complète du fichier stocké
			$imageURL = "http://obchallenge-back.test/" . $destination;

			ajouterType(htmlspecialchars($_POST['libelleType']), $imageURL, $connexion);
		}
		
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