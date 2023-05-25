<?php
    include('model/admin/challengesManager.php');
    $array = getChallenges($connexion);
    $view = "view/api/v_challenges.php";

?>