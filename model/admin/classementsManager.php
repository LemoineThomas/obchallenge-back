<?php
    
    function getVideos($connexion){
        $requete = $connexion->prepare("
        SELECT * FROM videos");

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
	}
?>