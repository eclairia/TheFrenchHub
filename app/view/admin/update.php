<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 13/03/2017
 * Time: 11:38
 */
include_once("app/view/layout/header_back.inc.php"); ?>

<div class="col-lg-10 col-sm-10">
    <p id="erreur_update_admin" class='col-lg-10 bg-danger'><p>
    <form method="POST" action="?module=admin&action=update" id="form_update_admin">
        <div class="form-group col-lg-6 col-sm-6">
            <p id="erreur_update_admin_name"></p>
            <label for="admin_name">Admin Name</label>
            <input type="text" name="admin_name" class="form-control" id="update_admin_name" value="<?= $admin[0]['admin_name'] ?>" required>
        </div>

        <div class="form-group col-lg-6 col-sm-6">
            <p id="erreur_update_admin_mail"></p>
            <label for="admin_mail">Admin mail</label>
            <input type="email" name="admin_mail" class="form-control" id="update_admin_mail" value="<?= $admin[0]['admin_mail'] ?>" required>
        </div>

        <div class="form-group col-lg-6 col-sm-6">
            <p id="erreur_update_admin_login"></p>
            <label for="admin_login">Admin login</label>
            <input type="text" name="admin_login" class="form-control" id="update_admin_login" value="<?= $admin[0]['admin_login'] ?>" required>
        </div>

        <div class="form-group col-lg-6 col-sm-6">
            <p id="erreur_update_admin_password"></p>
            <label for="admin_password">Admin password</label>
            <input type="password" name="admin_password" class="form-control" id="update_admin_password" required>
        </div>      

        <div class="form-group col-lg-6 col-sm-6">
            <p id="erreur_update_admin_level"></p>
            <label for="admin_level"> Niveau d'administrateur</label>
            <select name="admin_level" class="form-control" id="update_admin_level">
                <option value="1" <?php if( $admin[0]['admin_level'] == 1){echo 'selected';} ?> >Admin</option>
                <option value="2" <?php if( $admin[0]['admin_level'] == 2){echo 'selected';} ?> >Super Admin</option>
            </select>
        </div>

        <input type="submit" class="btn btn-lg btn-success" value="Modifier un administrateur">
    </form>
</div>
</div>

<script type="text/javascript" src="webroot/JS/form_update_admin.js"></script>
<?php include_once("app/view/layout/footer_back.inc.php"); ?>