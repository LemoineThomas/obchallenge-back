<?php
    
    function getChallengesType($idType, $connexion){

        $idType = strip_tags($idType);

        $requete = $connexion->prepare("
        SELECT * FROM challenges WHERE types_idtype = :idType");
        
        $requete->bindParam(':idType',$idType);

        $requete->execute();

        $resultat = $requete->fetchall();


        return $resultat;
    }

    function ajouterType($libelle, $imageURL, $connexion){
        
        $libelle = strip_tags($libelle);
        $imageURL = strip_tags($imageURL);

        $requete = $connexion->prepare("
        INSERT INTO types(libelleType, imageType) VALUES (:libelle, :imageURL)");

        $requete->bindParam(':libelle',$libelle);
        $requete->bindParam(':imageURL',$imageURL);

        $requete->execute();
    }

    function supprimerType($id, $connexion){



        $requete3 = $connexion->prepare("
		DELETE FROM types WHERE idType = :id");

        $requete3->bindParam(':id',$id);

		$requete3->execute();

    }

?>