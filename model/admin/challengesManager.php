<?php
    function getChallenges($connexion){
        $requete = $connexion->prepare("
        SELECT * FROM challenges");

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



    function ajouterChallenge($libelle, $description, $type, $connexion){
        
        $libelle = strip_tags($libelle);
        $type = strip_tags($type);
        $description = strip_tags($description);


        $requete = $connexion->prepare("
        INSERT INTO challenges(libelleChallenge, types_idtype, descriptionChallenge) VALUES (:libelle, :type, :description)");

        $requete->bindParam(':libelle',$libelle);
        $requete->bindParam(':type',$type);
        $requete->bindParam(':description',$description);

        $requete->execute();
    }


    function supprimerChallenge($id, $connexion){

        $requete = $connexion->prepare("
		DELETE FROM videos WHERE idChallenge = :id");

        $requete->bindParam(':id',$id);

		$requete->execute();


        $requete2 = $connexion->prepare("
		DELETE FROM challenges WHERE idChallenge = :id");

        $requete2->bindParam(':id',$id);

		$requete2->execute();

    }
?>