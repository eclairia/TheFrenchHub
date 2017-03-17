<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 15:55
 */
include_once("app/view/layout/header_back.inc.php"); ?>
<div class="col-lg-10 col-sm-10">
    <form method="POST" action="?module=services&action=new" enctype="multipart/form-data" id="form_post">
        <div class="form-group col-lg-12 col-sm-12">
            <label for="service_description">Description: </label>
            <textarea name="service_description" class="form-control" id="service_description" rows="10" cols="100" required ></textarea>
        </div>

        <div class="form-group col-lg-6 col-sm-6 col-lg-offset-3 col-md-offset-3">
            <label for="service_price">Prix: </label>
            <input name="service_price" class="form-control" id="service_price" type="number" required/>
        </div>

        <div class="form-group col-lg-6 col-sm-6 text-center col-lg-offset-3 col-md-offset-3">
            <input value="Enregistrer" class="btn btn-lg btn-success" type="submit" />
            <input type="reset" class="btn btn-lg btn-warning" value="effacer" />
        </div>
    </form>
</div>
</div>

<script>
    CKEDITOR.replace('service_description');
</script>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>
