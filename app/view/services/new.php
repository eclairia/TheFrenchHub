<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 15:55
 */
include_once("app/view/layout/header_back.inc.php"); ?>
<div class="col-lg-10 col-sm-10">
    <p id="erreur_service" class='col-lg-10 bg-danger'><p>
    <form method="POST" action="?module=services&action=new" enctype="multipart/form-data" id="form_service">
        <div class="form-group col-lg-12 col-sm-12">
            <label for="service_description">Description: </label>
            <textarea id="service_description" name="service_description" class="form-control" id="service_description" rows="10" cols="100" required ></textarea>
        </div>

        <div class="form-group col-lg-3 col-sm-3 col-lg-offset-3 col-md-offset-3">
            <p id="erreur_service_price"></p>
            <label for="service_price">Prix: </label>
            <input id="service_price" name="service_price" class="form-control" id="service_price" type="number" required />
        </div>

        <div class="form-group col-lg-3 col-sm-3">
            <p id="erreur_service_duration"></p>
            <label for="service_duration">Durée: </label>
            <input id="service_duration" name="service_duration" class="form-control" id="service_duration" type="number" required />
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
<script type="text/javascript" src="webroot/JS/form_service.js"></script>
<?php include_once("app/view/layout/footer_back.inc.php"); ?>
