<?php
    
    function getVideos($connexion){
        $requete = $connexion->prepare("
        SELECT * FROM videos");

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
	}

    function getUnVideo($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT * FROM videos WHERE idVideo = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
	}

    function getChallenges($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT * FROM challenges WHERE idChallenge = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function getUnType($id, $connexion){
        $id = strip_tags($id);

        $requete = $connexion->prepare("
        SELECT libelleType FROM types WHERE idType = :id");

        $requete->bindParam(':id',$id);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }
?>