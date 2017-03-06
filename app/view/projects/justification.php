<?php
    include_once "app/view/layout/header_back.inc.php";
?>
    <form method="post" action="#">
        <div class="form-group">
            <label for="user_first_name">Prénom : </label>
            <input type="text" id="user_first_name" name="user_first_name" value="<?= $infos_mail[0]['user_first_name']; ?>" readonly/>
        </div>

        <div class="form-group">
            <label for="user_last_name">Nom : </label>
            <input type="text" id="user_last_name" name="user_last_name" value="<?= $infos_mail[0]['user_last_name']; ?>" readonly/>
        </div>

        <div class="form-group">
            <label for="user_mail">Mail : </label>
            <input type="email" id="user_mail" name="user_mail" value="<?= $infos_mail[0]['user_mail']; ?>" readonly/>
        </div>

        <div class="form-group">
            <label for="project_name">Nom du projet : </label>
            <input type="text" id="project_name" name="project_name" value="<?= $infos_mail[0]['project_name']; ?>" readonly/>
        </div>

        <div class="form-group">
            <label for="justification">Entrez la justification du refus du projet </label>
            <textarea id="justification" name="project_refusal_justification"></textarea>
        </div>

        <input type="hidden" name="project_ID" value="<?= $_GET['projectid']; ?>" />
        <button type="submit" class="btn btn-success">Envoyer le mail</button>
    </form>

</div>



<script type="text/javascript" src="webroot/JS/status_project.js"></script>
<?php
    include_once "app/view/layout/footer_back.inc.php";