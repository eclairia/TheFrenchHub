<?php include_once 'app/view/layout/header_back.inc.php'; ?>
    <div class="col-lg-10 col-sm-10">
        <p id="erreur_testimonial" class='col-lg-10 bg-danger'><p>
        <form method="POST" action="?module=testimonials&action=new" enctype="multipart/form-data" id="form_testimonial">
            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_testimonial_first_name"></p>
                <label for="testimonial_first_name">Prénom</label>
                <input type="text" name="testimonial_first_name" class="form-control" id="testimonial_first_name">
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_testimonial_last_name"></p>
                <label for="testimonial_last_name">Nom</label>
                <input type="text" name="testimonial_last_name" class="form-control" id="testimonial_last_name">
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_testimonial_file"></p>
                <label for="testimonial_file">Photo</label>
                <input type="file" name="testimonial_file" class="form-control" id="testimonial_file">
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_testimonial_job"></p>
                <label for="testimonial_job">Job</label>
                <input type="text" name="testimonial_job" class="form-control" id="testimonial_job">
            </div>

            <div class="form-group col-lg-12 col-sm-12">
                <p id="erreur_testimonial_content"></p>
                <label for="testimonial_content">Témoignage: </label>
                <textarea name="testimonial_content" class="form-control" id="testimonial_content" rows="10" cols="100"></textarea>
            </div>

            <input type="submit" class="btn btn-lg btn-success" value="Ajouter un Témoignage">
        </form>
    </div>
</div>

<script>
    CKEDITOR.replace('testimonial_content');
</script>
<script type="text/javascript" src="webroot/JS/form_testimonial.js"></script>
<?php include_once 'app/view/layout/footer_back.inc.php'; ?>
