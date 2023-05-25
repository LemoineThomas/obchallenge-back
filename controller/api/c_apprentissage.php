<?php
    include('model/admin/apprentissageManager.php');
    $array = getApprentissage($connexion);
    $view = "view/api/v_apprentissage.php";

?>