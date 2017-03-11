<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="contentinscription">

  <div id="forminscription">

    <div id="titresignup"><h1 id="titleinscription">inscription</h1></div>

    <form id="formsignup" method="post">

      <div id="civility" class="formwidth">

        <div><p id="pcivil">Civilité</p></div>
        <div><input type="radio" id="radio1" name="user_civility" value="M"> M</div>
        <div><input type="radio" id="radio2" name="user_civility" value="Mme"> Mme</div>
        <div><input type="radio" id="radio3" name="user_civility" value="Mlle"> Mlle</div>

      </div>

      <div>
        <input class="formwidth borderform" name="user_lastname" type="text" placeholder="Nom" required></input>

      </div>

      <div>
        <input class="formwidth borderform" name="user_firstname" type="text" placeholder="Prénom" required></input>
      </div>

      <div>
        <input class="formwidth borderform" name="user_birth" type="date" min="1940/01/01" placeholder="Date de naissance" required></input>
      </div>

      <div>
        <input class="formwidth borderform" name="user_mail" type="email" placeholder="Adresse mail" required></input>
      </div>

      <div>
        <input class="formwidth borderform" name="user_login" type="text" placeholder="Identifiant" required></input>
      </div>

      <div>
        <input class="formwidth borderform" name="user_password" type="password" placeholder="Mot de passe" required></input>
      </div>

      <div>
        <input class="formwidth borderform" name="user_password2" type="password" placeholder="Confirmation mot de passe" required></input>
      </div>

      <div>
        <input class="formwidth boutonform" type="submit" placeholder="Inscription"></input>
      </div>

      <div>
        <input class="formwidth boutonform" type="reset" placeholder="Réinitialiser"></input>
      </div>

    </form>

  </div>

</div>
<?php include_once 'app/view/layout/footer_front.inc.php'; ?>
