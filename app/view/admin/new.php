<?php include_once("app/view/layout/header_back.inc.php"); ?>
    <div class="col-lg-10 col-sm-10">
        <p id="erreur_admin" class='col-lg-10 bg-danger'><p>
        <form method="POST" action="?module=admin&action=new" id="form_admin">
            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_admin_name"></p>
                <label for="admin_name">Admin Name</label>
                <input type="text" id="admin_name" name="admin_name" class="form-control" required>
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_admin_mail"></p>
                <label for="admin_mail">Admin mail</label>
                <input type="email" id="admin_mail" name="admin_mail" class="form-control" required>
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_admin_login"></p>
                <label for="admin_login">Admin login</label>
                <input type="text" id="admin_login" name="admin_login" class="form-control" required>
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_admin_password"></p>
                <label for="admin_password">Admin password</label>
                <input type="password" id="admin_password" name="admin_password" class="form-control" required>
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <p id="erreur_admin_level"></p>
                <label for="admin_level"> Niveau d'administrateur</label>
                <select id="admin_level" name="admin_level" class="form-control">
                    <option value="1">Admin</option>
                    <option value="2">Super Admin</option>
                </select>
            </div>

            <input type="submit" class="btn btn-lg btn-success" value="Ajouter un administrateur">
        </form>
    </div>
</div>

<script type="text/javascript" src="webroot/JS/form_admin.js"></script>
<?php include_once("app/view/layout/footer_back.inc.php"); ?>
