<?php
	include('view/header.php');

    if($_GET['types'] == 'supprimer'){
        if(isset($_GET['id'])){
            $id = $_GET['id'];

            echo '<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: block; padding-right: 17px;" aria-hidden="true">';
            echo 	'<div class="modal-dialog" role="document">';
            echo 		'<div class="modal-content">';
            echo 			'<div class="modal-header">';
            echo 				'<h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>';
            echo 				'<a class="close" data-dismiss="modal" aria-label="Close" href="index.php?types=accueil">';
            echo 					'<span aria-hidden="true">&times;</span>';
            echo 				'</a>';
            echo 			'</div>';
            echo 			'<div class="modal-body">Etes-vous sûr de vouloir supprimer ce type de challenge ? Cela supprimera également les challenges et vidéos associés.';
            echo 			'</div>';
            echo 			'<div class="modal-footer">';
            echo 				'<a class="btn btn-secondary" data-dismiss="modal" href="index.php?types=accueil">Non</a>';
            echo 				'<a type="button" class="btn btn-primary" href="index.php?types=confirmationsupprimer&idType='.$id. '">Oui</a>';
            echo 			'</div>';
            echo 		'</div>';
            echo 	'</div>';
            echo '</div>';
        }
    }
?>

            <!-- MAIN -->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Types de challenge</h2>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-30">
                            <div class="col-md-7">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    
                                    <?php
                                        if (sizeof($array) > 0) {
                                            echo '<table class="table table-borderless table-data3">';
                                            echo   '<thead>';
                                            echo 	'<tr>';
                                            echo 		'<th>Libelle</th>' ;
                                            echo        '<th></th>';
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {
                                                
                                                echo '<tr>';
                                                echo 	'<td>' .$value[1]. '</td>' ;
                                                echo 	'<td><a type="button" class="btn btn-warning" href="index.php?types=supprimer&id='.$value[0]. '">
                                                            Retirer</a>
                                                        </td>' ;
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucun type actuellement.</div>';
                                        }
                                    ?>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            <div class="col-lg-5">
                                <div class="card">
                                    <div class="card-header">Ajouter un type de challenge</div>
                                    <div class="card-body card-block">
                                        <form action="index.php?types=ajout" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="libelleType" name="libelleType" placeholder="Libelle" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-actions form-group">
                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



<?php
	include('view/footer.php');
?>