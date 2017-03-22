<?php
    if (!defined("_BASE_URL")) die("Ressource interdite !");
    include_once "app/view/layout/header_back.inc.php";
?>
    <main class="col-lg-10 col-sm-10">
        <form method="post" action="#">
            <div class="row">
                <div class="form-group col-lg-6 col-sm-6">
                    <label for="user_first_name">Prénom : </label>
                    <input type="text" id="user_first_name" class="form-control" name="user_first_name" value="<?= $infos_mail[0]['user_first_name']; ?>" readonly/>
                </div>

                <div class="form-group col-lg-6 col-sm-6">
                    <label for="user_last_name">Nom : </label>
                    <input type="text" id="user_last_name" class="form-control" name="user_last_name" value="<?= $infos_mail[0]['user_last_name']; ?>" readonly/>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-6 col-sm-6">
                    <label for="user_mail">Mail : </label>
                    <input type="email" id="user_mail" class="form-control" name="user_mail" value="<?= $infos_mail[0]['user_mail']; ?>" readonly/>
                </div>

                <div class="form-group col-lg-6 col-sm-6">
                    <label for="project_name">Nom du projet : </label>
                    <input type="text" id="project_name" class="form-control" name="project_name" value="<?= $infos_mail[0]['project_name']; ?>" readonly/>
                </div>
            </div>

            <div class="form-group col-lg-6 col-sm-6 col-lg-offset-3 col-sm-offset-3">
                <label for="justification">Entrez la justification du refus du projet </label>
                <textarea id="justification" class="form-control" rows="5" name="project_refusal_justification"></textarea>

                <input type="hidden" name="project_ID" value="<?= $_GET['projectid']; ?>" />
                <button type="submit" class="btn btn-lg btn-success col-lg-offset-4 col-sm-offset-4">Envoyer le mail</button>
            </div>
        </form>
    </main>
</div>



<script type="text/javascript" src="webroot/JS/status_project.js"></script>
<?php
    include_once "app/view/layout/footer_back.inc.php";