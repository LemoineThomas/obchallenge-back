<?php
	include('view/header.php');
?>

            <!-- MAIN -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Apprentissage</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12 mb-4">
                                <a href="/index.php?apprentissage=ajouter" class="btn btn-primary">Ajouter un apprentissage</a>
                            </div>
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    
                                    <?php
                                        if (sizeof($array) > 0) {
                                            echo '<table class="table table-borderless table-data3">';
                                            echo   '<thead>';
                                            echo 	'<tr>';
                                            echo 		'<th>Libelle</th>' ;
                                            echo 		'<th>Voir</th>' ;
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {
                                                
                                                echo '<tr>';
                                                echo 	'<td>' .$value[2]. '</td>' ;
                                                echo 	'<td><a href="/index.php?apprentissage=voir&id='.$value[0].'" class="button-1">Voir</a></td>' ;
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucun apprentissage pour l\'instant.</div>';
                                        }
                                    ?>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>


<?php
	include('view/footer.php');
?>