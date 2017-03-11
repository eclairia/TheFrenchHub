<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="contentlogin">

  <div id="formlogin">

    <div id="titrelogin"><h1 id="titlelogin">Connexion</h1></div>

    <form id="formlogin" method="post">

      <div>
        <input class="formwidth borderform2 " name="user_login" type="text" placeholder="Identifiant" required></input>

      </div>

      <div>
        <input class="formwidth borderform2" name="user_password" type="password" placeholder="Mot de passe" required></input>
      </div>

      <div>
        <input class="formwidth boutonform"  type="submit" placeholder="Se connecter" ></input>
      </div>

    </form>

  </div>

  <div id="loginright">

    <div id="logofrenchlogin"><img src="webroot/IMG/logo03.png" id="logologin"/></div>
    <div><p id="grdtxtlogin">Pas de compte ?<br/>Inscrivez vous maintenant !</p></div>
    <div><p id="txtlogin">Créez votre compte The French Hub <br/> et lancez vous dans l'aventure.</p></div>
    <div><a id="inscrire" href="signup.php">S'inscrire</a></div>

  </div>

</div>
<?php include_once 'app/view/layout/footer_front.inc.php'; ?>
