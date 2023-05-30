<?php
    include('model/admin/apprentissageManager.php');

    if(isset($_GET['id'])){
        $array = getUnApprentissage(htmlspecialchars($_GET['id']), $connexion);
    }else{
        $array = getApprentissage($connexion);
    }
    $view = "view/api/v_apprentissage.php";

?>