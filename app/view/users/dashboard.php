
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
                <p>Inscription</p>
                <p>Projet soumis</p>
                <p>Projet validé</p>
                <p>Membres ajoutés</p>
                <p>Offre choisie</p>
            </div>

            <div id="checkedariane">
                <div class="checked"></div>
                <div class="<?php echo ($_SESSION['user']['user_project'] != null ? 'checked' : 'unchecked')?>"></div>
                <div class="<?php echo (!empty($user_project) ? ($user_project[0]['project_confirmed'] == 1 ? 'checked' : 'unchecked') : "unchecked" )?>"></div>
                <div class="<?php echo ($nb_additionnal_members > 0 ? 'checked' : 'unchecked')?>"></div>
                <div class="<?php echo (!empty($order) ? 'checked' : 'unchecked')?>"></div>
            </div>

            <div id="hrariane"></div>
        </div>
    </div>
</div>

<div id="allcontentdashboardbot">
    <div id="dashleft">
        <form method="post" action="">
            <div class="formaddmember">
                <h2 class="titlechoice2">Ajout d'un membre<br/>
                    <span>(Vous ne pouvez ajouter des membres qu'une fois le projet validé.)</span>
                </h2>

                <input class="formwidthdash2 borderform" type="text" placeholder="Nom" name="additionnal_member_last_name">
                <input class="formwidthdash2 borderform" type="text" placeholder="Prénom" name="additionnal_member_first_name">
                <input class="formwidthdash2 borderform" type="email" placeholder="Adresse mail" name="additionnal_member_mail">
                <input class="boutonform3" type="submit" value="Ajouter un membre">
            </div>
        </form>
    </div>

    <div id="dashright">
        <form method="post" action="">
            <div class="formaddmember2">
            <h2 class="titlechoice2">Votre projet</h2>
            <input class="formwidthdash2 borderform" type="text" placeholder="Nom de votre projet" name="project_name">
            <textarea class="formwidthdash borderformdash" placeholder="Décrivez votre projet en quelques mots" name="project_description"></textarea>
            <input class="formwidthdash2 borderform" type="file" name="project_file">
            <input class="boutonform2" type="submit" value="Soumettre votre projet">
            </div>
        </form>

        <!--<form method="post" action="">

        <div class="formaddmember2">

        <h2 class="titlechoice2">Votre projet</h2>

        <div id="txtinfosdash">
        <p>The French Hub</p>
        <p>Ceci est une description toute pourrie parce que je n'ai pas d'imagination</p>
        <a href="#">Télécharger le document</a>
        <button class="boutonform2" type="button">Modifier mes informations</button>
        </div>
        </div>

        </form>-->

    </div>

    <div id="projectmembers">
        <div id="projectrelative"><h2 class="titlechoice2">Liste des membres du projet</h2></div>

        <div class="memberlisting">
            <p>Jean DUPONT</p>
        </div>

        <div class="memberlisting">
            <p>Jacques JACQUES</p>
        </div>

        <div class="memberlisting">
            <p>Nicolas LUCAS</p>
        </div>
    </div>
</div>

<?php include_once 'app/view/layout/footer_front.inc.php'; ?>
