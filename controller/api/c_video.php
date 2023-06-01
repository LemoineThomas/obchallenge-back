<?php
    include('model/admin/videoManager.php');
    //$array = getTypes($connexion);
    ajouterVideo(
        htmlspecialchars($_POST['nom']),
        htmlspecialchars($_POST['prenom']),
        htmlspecialchars($_POST['instagram']),
        htmlspecialchars($_POST['avatar']),
        htmlspecialchars($_POST['video']),
        $connexion
    );

?>