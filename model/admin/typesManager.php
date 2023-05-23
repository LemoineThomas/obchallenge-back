<?php
    
    function getChallengesType($idType, $connexion){

        $idType = strip_tags($idType);

        $requete = $connexion->prepare("
        SELECT * FROM challenges WHERE idChallenge = :idType");
        
        $requete->bindParam(':idType',$idType);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function ajouterType($libelle, $connexion){
        
        $libelle = strip_tags($libelle);

        $requete = $connexion->prepare("
        INSERT INTO types(libelleType) VALUES (:libelle)");

        $requete->bindParam(':libelle',$libelle);

        $requete->execute();
    }

    function supprimerType($id, $connexion){



        $requete3 = $connexion->prepare("
		DELETE FROM types WHERE idType = :id");

        $requete3->bindParam(':id',$id);

		$requete3->execute();

    }

?>