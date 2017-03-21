<!DOCTYPE html>
<html lang="<?= PAGE_LANG ?>">
    <head>
        <meta charset="<?= PAGE_CHARSET ?>">
        <title><?= PAGE_TITLE ?></title>
        <link rel='stylesheet' type="text/css" href='webroot/CSS/bootstrap.min.css' />
        <link rel='stylesheet' type="text/css" href='webroot/CSS/style.css' />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="webroot/JS/jquery-3.1.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4">
                    <form method="POST" action="?module=admin&action=login" id="form_login">
                        <p id="erreur_admin_login"></p>
                        <label for="admin_login">Login: </label> <input type="text" id="admin_login" class="form-control" name="admin_login"><br /><br />
                        <p id="erreur_admin_password"></p>
                        <label for="admin_password">Mot de passe: </label> <input type="password" id="admin_password" class="form-control" name="admin_password"><br /><br />
                        <input type="submit" class="btn btn-lg btn-success" value="Se connecter">
                    </form>
                </div>
            </div>
        </div>
        <script src="webroot/JS/bootstrap.min.js"></script>
        <script src="webroot/JS/form_admin_login.js"></script>
    </body>
</html>