<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 13/03/2017
 * Time: 11:38
 */
include_once("app/view/layout/header_back.inc.php"); ?>

    <div class="col-lg-10 col-sm-10">
        <form method="POST" action="?module=admin&action=new">
            <div class="form-group col-lg-6 col-sm-6">
                <label for="admin_name">Admin Name</label>
                <input type="text" name="admin_name" class="form-control" id="admin_name" value="<?= $admin[0]['admin_name'] ?>">
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <label for="admin_mail">Admin mail</label>
                <input type="email" name="admin_mail" class="form-control" id="admin_mail" value="<?= $admin[0]['admin_mail'] ?>">
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <label for="admin_login">Admin login</label>
                <input type="text" name="admin_login" class="form-control" id="admin_login" value="<?= $admin[0]['admin_login'] ?>">
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <label for="admin_password">Admin password</label>
                <input type="password" name="admin_password" class="form-control" id="admin_password" value="<?= $admin[0]['admin_password'] ?>">
            </div>

            <div class="form-group col-lg-6 col-sm-6">
                <label for="admin_level"> Niveau d'administrateur</label>
                <select name="admin_level" class="form-control" id="admin_level">
                    <option value="1" <?php if( $admin[0]['admin_level'] == 1){echo 'selected';} ?> >Admin</option>
                    <option value="2" <?php if( $admin[0]['admin_level'] == 2){echo 'selected';} ?> >Super Admin</option>
                </select>
            </div>

            <input type="submit" class="btn btn-lg btn-success" value="Ajouter un administrateur">
        </form>
    </div>
</div>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>
