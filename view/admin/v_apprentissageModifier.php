<?php
	include('view/header.php');
?>
  <script src="https://cdn.tiny.cloud/1/1g2orxxdagiqjeyris5w4kip6pbyk8qzmmge5ym00ibv8rcb/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
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
                            <div class="col-md-12">
                            <div class="card">
                                    <div class="card-header">Ajouter un type de challenge</div>
                                    <div class="card-body card-block">
                                        <form action="index.php?apprentissage=modifier&id=<?php echo $array[0][0] ?>" method="post" class="">
                                        <div class="form-group" style="display: none;">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="id" name="id" placeholder="id" class="form-control" value="<?php echo $array[0][0] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                    <input type="text" id="libelle" name="libelle" placeholder="Libelle" class="form-control" value="<?php echo $array[0][2] ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                <textarea id="html" name="html">
                                                    <?php echo $array[0][1] ?>
                                                </textarea>
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
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ]
    });
  </script>