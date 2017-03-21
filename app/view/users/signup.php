<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="contentinscription">
    <div id="forminscription">
        <div id="titresignup"><h1 id="titleinscription">inscription</h1></div>

        <form id="formsignup" method="post" action="?module=users&action=signup">
            <div id="civility" class="formwidth">
                <div><p id="pcivil">Civilité</p></div>
                <div><input type="radio" id="radio1" name="user_civility" value="M" required> M</div>
                <div><input type="radio" id="radio2" name="user_civility" value="Mme"> Mme</div>
                <div><input type="radio" id="radio3" name="user_civility" value="Mlle"> Mlle</div>
            </div>

            <div>
                <p id="erreur_last_name"></p>
                <input class="formwidth borderform" id="user_last_name" name="user_last_name" type="text" placeholder="Nom" required>
            </div>

            <div>
                <p id="erreur_first_name"></p>
                <input class="formwidth borderform" id="user_first_name" name="user_first_name" type="text" placeholder="Prénom" required>
            </div>

            <div>
                <p id="erreur_birth"></p>
                <input class="formwidth borderform" id="user_birth" name="user_birth" type="date" min="1940/01/01" placeholder="Date de naissance" required>
            </div>

            <div>
                <p id="erreur_mail"></p>
                <input class="formwidth borderform" id="user_mail" name="user_mail" type="email" placeholder="Adresse mail" required>
            </div>

            <div>
                <p id="erreur_login"></p>
                <input class="formwidth borderform" id="user_login" name="user_login" type="text" placeholder="Identifiant" required>
            </div>

            <div>
                <p id="erreur_password"></p>
                <input class="formwidth borderform" id="user_password" name="user_password" type="password" placeholder="Mot de passe" required>
            </div>

            <div>
                <p id="erreur_password2"></p>
                <input class="formwidth borderform" id="user_password2" name="user_password2" type="password" placeholder="Confirmation mot de passe" required>
            </div>

            <div>
                <input type="hidden" name="user_level" value="0">
                <input class="formwidth boutonform" type="submit" placeholder="Inscription">
            </div>

            <div>
                <input class="formwidth boutonform" type="reset" placeholder="Réinitialiser">
            </div>
        </form>
    </div>

</div>

<script type="text/javascript" src="webroot/JS/form_signup.js"></script>
<?php include_once 'app/view/layout/footer_front.inc.php'; ?>
