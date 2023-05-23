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
                            <div class="col-md-7">
                                <?php
                                    echo $video[0][1];
                                ?>
                            </div>

                            <div class="col-md-5">
                                <div class="card">
                                    <div class="card-header">Informations</div>
                                    <div class="card-body card-block">
                                        <form action="index.php?video=ajout" method="post" class="">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="datetime" id="temps" name="temps" placeholder="Temps" class="form-control" value="<?php echo $video[0][2] ?>">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <select class="form-control" value="valide">
                                                            <option value="en attente" <?php if($video[0][3] == "en attente"){echo 'selected="selected"';} ?>>En attente</option>
                                                            <option value="refuse" <?php if($video[0][3] == "refuse"){echo 'selected="selected"';} ?>>Refusé</option>
                                                            <option value="valide" <?php if($video[0][3] == "valide"){echo 'selected="selected"';} ?>>Validé</option>
                                                    </select>
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