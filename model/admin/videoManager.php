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

    function ajouterVideo($nom, $prenom, $instagram, $avatar, $video, $connexion){
        $nom = strip_tags($nom);
        $prenom = strip_tags($prenom);
        $instagram = strip_tags($instagram);
        $avatar = strip_tags($avatar);
        $video = strip_tags($video);

        $requete = $connexion->prepare("
        INSERT INTO types(nom, prenom, instagram, avatar, url, status) VALUES (:nom, :prenom, :instagram, :avatar, :video, 'en attente')");

        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':prenom',$prenom);
        $requete->bindParam(':instagram',$instagram);
        $requete->bindParam(':avatar',$avatar);
        $requete->bindParam(':video',$video);

        $requete->execute();
    }
?>