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
                                    <h2 class="title-1">Classements</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    
                                    <?php
                                        if (sizeof($array) > 0) {
                                            echo '<table class="table table-borderless table-data3">';
                                            echo   '<thead>';
                                            echo 	'<tr>';
                                            echo 		'<th>Top</th>' ;
                                            echo 		'<th>Video</th>' ;
                                            echo 		'<th>Temps</th>' ;
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {
                                                
                                                echo '<tr>';
                                                echo 	'<td>' .$value[0]. '</td>' ;
                                                echo 	'<td>' .$value[1]. '</td>' ;
                                                echo 	'<td>' .$value[2]. '</td>' ;
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucun classement pour l\'instant.</div>';
                                        }
                                    ?>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>


<?php
	include('view/footer.php');
?>