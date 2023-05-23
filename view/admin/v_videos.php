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
                                    <h2 class="title-1">Vidéos</h2>
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
                                            echo 		'<th>ID</th>' ;
                                            echo 		'<th>Challenge</th>' ;
                                            echo 		'<th>Type</th>' ;
                                            echo 		'<th>Temps</th>' ;
                                            echo 		'<th>Status</th>' ;
                                            echo 		'<th>Date d\'ajout</th>' ;
                                            echo 		'<th>Voir</th>' ;
                                            echo 	'</tr>';
                                            echo   '</thead>';
                                            echo '<tbody>';
                                    
                                            foreach ($array as $key => $value) {

                                                $challenge = getChallenges($value[4], $connexion);
                                                $type = getUnType($challenge[0][3], $connexion);

                                                echo '<tr>';
                                                echo 	'<td>' .$value[0]. '</td>' ;
                                                

                                                echo 	'<td>' .$challenge[0][1]. '</td>' ;
                                                echo 	'<td>' .$type[0][0]. '</td>' ;


                                                echo 	'<td>' .$value[2]. '</td>' ;
                                                echo 	'<td>' .$value[3]. '</td>' ;
                                                echo 	'<td>' .$value[5]. '</td>' ;
                                                echo 	'<td><a href="/index.php?videos=voir&id='.$value[0].'" class="button-1">Voir</a></td>' ;
                                                echo '</tr>';

                                            }
                                            echo '</tbody>';
                                            echo '</table>';
                                        }else{
                                            echo '<div style="text-align:center;">Il n\'y a aucune vidéos pour le moment.</div>';
                                        }
                                    ?>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>

                            
                        </div>


<?php
	include('view/footer.php');
?>
<!-- HTML !-->
<button class="button-1" role="button">Button 1</button>
<style>
/* CSS */
.button-1 {
    background-color: #3385ff;
    border-radius: 8px;
    border-style: none;
    box-sizing: border-box;
    color: #FFFFFF;
    cursor: pointer;
    display: inline-block;
    font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    font-weight: 500;
    height: 40px;
    line-height: 20px;
    list-style: none;
    margin: 0;
    outline: none;
    padding: 10px 16px;
    position: relative;
    text-align: center;
    text-decoration: none;
    transition: color 100ms;
    vertical-align: baseline;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
  }
  
  .button-1:hover,
  .button-1:focus {
    background-color: #F082AC;
  }
</style>