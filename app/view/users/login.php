<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="contentlogin">

  <div id="formlogin">

    <div id="titrelogin"><h1 id="titlelogin">Connexion</h1></div>

    <form id="formlogin" method="post" action="?module=users&action=login">

      <div>
        <p id="erreur_login"></p>
        <input class="formwidth borderform2" id="user_login" name="user_login" type="text" placeholder="Identifiant" value="<?php if(isset($_COOKIE['user_login']))
        {
          echo $_COOKIE['user_login'];
        } ?>" required>
      </div>

      <div>
        <p id="erreur_password"></p>
        <input class="formwidth borderform2" id="user_password" name="user_password" type="password" placeholder="Mot de passe" value="<?php if(isset($_COOKIE['user_password']))
        {
          echo $_COOKIE['user_password'];
        } ?>" required>
      </div>

      <div>
        <input type="checkbox" name="user_cookie" id="user_cookie"><label for="user_cookie">Se souvenir de moi</label>
      </div>

        <input type="hidden" name="user_key" value="<?php if (isset($_GET['key']))
        {
            echo $_GET['key'];
        } ?>">

      <div>
        <input class="formwidth boutonform"  type="submit" placeholder="Se connecter" >
      </div>

      <div><a id="forgottenpass" href="?module=users&action=reset">Mot de passe oublié ?</a></div>

    </form>



  </div>

  <div id="loginright">

    <div><p id="grdtxtlogin">Pas de compte ?<br/>Inscrivez vous maintenant !</p></div>
    <div><p id="txtlogin">Créez votre compte The French Hub <br/> et lancez vous dans l'aventure.</p></div>
    <div><a id="inscrire" href="?module=users&action=signup">S'inscrire</a></div>

  </div>

</div>

<script type="text/javascript" src="webroot/JS/form_login.js"></script>
<?php include_once 'app/view/layout/footer_front.inc.php'; ?>
