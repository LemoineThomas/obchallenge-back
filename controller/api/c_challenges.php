<?php
    include('model/admin/typesManager.php');
    include('model/admin/challengesManager.php');
    if (isset($_GET['type'])) {
        $array = getChallengesType(htmlspecialchars($_GET['type']), $connexion);
    }elseif (isset($_GET['id'])) {
        $array = getChallenge(htmlspecialchars($_GET['id']), $connexion);
    }else{
        $array = getChallenges($connexion);
    }

    $view = "view/api/v_challenges.php";

?>