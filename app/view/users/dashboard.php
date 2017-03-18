<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="allcontentdashboardtop">

  <div class="titletxt">

    <div><h1 class="titlechoice">Votre espace personnel</h1></div>
    <div class="undertitlechoice"></div>
    <div>
      <p id="explainchoice">Bonjour Michel,
    </div>

  <div id="ariane">
      <div id="txtariane">
        <p>Projet soumis</p>
        <p>Projet validé</p>
        <p>Membres ajoutés</p>
        <p>Offre choisie</p>

      </div>

      <div id="checkedariane">

        <div class="unchecked"></div>
        <div class="unchecked"></div>
        <div class="unchecked"></div>
        <div class="unchecked"></div>

      </div>

      <div id="hrariane">

      </div>
  </div>

</div>
</div>

<div id="allcontentdashboardbot">

  <div id="dashleft">
    <form method="post" action="">
      <div class="formaddmember">

        <h2 class="titlechoice2">Ajout d'un membre</h2>
        <input class="formwidthdash2 borderform" type="text" placeholder="Nom" name="additionnal_member_last_name"></input>
        <input class="formwidthdash2 borderform" type="text" placeholder="Prénom" name="additionnal_member_first_name"></input>
        <input class="formwidthdash2 borderform" type="email" placeholder="Adresse mail" name="additionnal_member_mail"></input>
        <input class="boutonform3" type="submit" value="Ajouter un membre"></input>

      </div>
    </form>


  </div>

  <div id="dashright">
    <form method="post" action="">

      <div class="formaddmember2">

        <h2 class="titlechoice2">Votre projet</h2>
        <input class="formwidthdash2 borderform" type="text" placeholder="Nom de votre projet" name="project_name"></input>
        <textarea class="formwidthdash borderformdash" placeholder="Décrivez votre projet en quelques mots" name="project_description"></textarea>
        <input class="formwidthdash2 borderform" type="file" placeholder="Fichier à joindre" name="project_file"></input>
        <input class="boutonform2" type="submit" value="Soumettre votre projet"></input>

      </div>

    </form>

  </div>

</div>

<?php include_once 'app/view/layout/footer_front.inc.php'; ?>
