<?php if (!defined("_BASE_URL")) die("Ressource interdite !");
include_once 'app/view/layout/header_back.inc.php'; ?>
    <p id="erreur_update_testimonial" class='col-lg-10 bg-danger'><p>
    <div class="col-lg-10 col-sm-10">
        <form method="POST" action="?module=testimonials&action=update&id=<?= $_GET['id']; ?>" enctype="multipart/form-data" id="form_update_testimonial">
            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_update_testimonial_first_name"></p>
                <label for="testimonial_first_name">Prénom</label>
                <input type="text" name="testimonial_first_name" value="<?= $testimonial[0]['testimonial_first_name'] ?>" class="form-control" id="update_testimonial_first_name" required>
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_update_testimonial_last_name"></p>
                <label for="testimonial_last_name">Nom</label>
                <input type="text" name="testimonial_last_name" value="<?= $testimonial[0]['testimonial_last_name'] ?>" class="form-control" id="update_testimonial_last_name" required>
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_update_testimonial_file"></p>
                <label for="testimonial_file">Photo</label>
                <input type="file" name="testimonial_file" class="form-control" id="update_testimonial_file" required>
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_update_testimonial_job"></p>
                <label for="testimonial_job">Job</label>
                <input type="text" name="testimonial_job" class="form-control" value="<?= $testimonial[0]['testimonial_job'] ?>" id="update_testimonial_job" required>
            </div>

            <div class="form-group col-lg-12 col-sm-12">
                <p id="erreur_update_testimonial_content"></p>
                <label for="testimonial_content">Témoignage: </label>
                <textarea name="testimonial_content" class="form-control" id="update_testimonial_content" rows="10" cols="100" required><?= $testimonial[0]['testimonial_content'] ?></textarea>
            </div>

            <input type="hidden" name="testimonial_id" value="<?= $_GET['id']; ?>">
            <input type="submit" class="btn btn-lg btn-success" value="Modifier le Témoignage">
        </form>
    </div>
</div>

<script>
    CKEDITOR.replace('testimonial_content');
</script>
<script type="text/javascript" src="webroot/JS/form_update_testimonial.js"></script>
<?php include_once 'app/view/layout/footer_back.inc.php'; ?>

