<?php

function getApprentissage($connexion){
    $requete = $connexion->prepare("
    SELECT * FROM apprentissage");

    $requete->execute();

    $resultat = $requete->fetchall();


    return $resultat;
}

function getUnApprentissage($id, $connexion){
    $id = strip_tags($id);

    $requete = $connexion->prepare("
    SELECT * FROM apprentissage WHERE id = :id");

    $requete->bindParam(':id',$id);

    $requete->execute();

    $resultat = $requete->fetchall();


    return $resultat;
}

function ajouterApprentissage($libelle, $html, $connexion){
    $libelle = strip_tags($libelle);
    $html = strip_tags($html);

    $requete = $connexion->prepare("
    INSERT INTO apprentissage(libelle, html) VALUES (:libelle, :html)");

    $requete->bindParam(':libelle',$libelle);
    $requete->bindParam(':html',$html);

    $requete->execute();
}

function updateApprentissage($id, $libelle, $html, $connexion){
    $id = strip_tags($id);
    $libelle = strip_tags($libelle);
    $html = strip_tags($html);

    $requete = $connexion->prepare("
    UPDATE apprentissage SET libelle = :libelle, html = :html WHERE id = :id");

    $requete->bindParam(':id',$id);
    $requete->bindParam(':libelle',$libelle);
    $requete->bindParam(':html',$html);

    $requete->execute();

}


?>