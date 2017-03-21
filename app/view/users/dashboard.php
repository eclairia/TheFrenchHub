
<?php include_once 'app/view/layout/header_front.inc.php'; ?>

<div id="allcontentdashboardtop">
    <div class="titletxt">
        <div><h1 class="titlechoice">Votre espace personnel</h1></div>

        <div class="undertitlechoice"></div>

        <div>
            <?= '<p id="explainchoice"> Bonjour ' . $_SESSION['user']['user_first_name'] . '</p>' ?>
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
                <div class="<?php echo (!empty($user_project) ? ($user_project[0]['project_confirmation'] == 1 ? 'checked' : 'unchecked') : "unchecked" )?>"></div>
                <div class="<?php echo ($nb_additionnal_members > 0 ? 'checked' : 'unchecked')?>"></div>
                <div class="<?php echo (!empty($order) ? 'checked' : 'unchecked')?>"></div>
            </div>

            <div id="hrariane"></div>
        </div>
    </div>
</div>

<div id="allcontentdashboardbot">
    <div id="dashleft">
        <form method="post" action="<?php echo (!empty($user_project) ? ($user_project[0]['project_confirmation'] == 1 ? '?module=additionnal_members&action=new' : '') : "" ) ?>" id="form_add_member">
            <div class="formaddmember">
                <h2 class="titlechoice2">Ajout d'un membre<br/>
                    <?php echo (!empty($user_project) ? ($user_project[0]['project_confirmation'] != 1 ? '<span>(Vous ne pouvez ajouter des membres qu\'une fois le projet validé.)</span>' : '') : "<span>(Vous ne pouvez ajouter des membres qu'une fois le projet validé.)</span>" ) ?>
                </h2>

                <p id="erreur_additionnal_member_last_name"></p>
                <input class="formwidthdash2 borderform" type="text" placeholder="Nom" id="additionnal_member_last_name" name="additionnal_member_last_name" <?php echo (!empty($user_project) ? ($user_project[0]['project_confirmation'] != 1 ? 'disabled' : '') : "disabled" ) ?>>
                <p id="erreur_additionnal_member_first_name"></p>
                <input class="formwidthdash2 borderform" type="text" placeholder="Prénom" id="additionnal_member_first_name" name="additionnal_member_first_name" <?php echo (!empty($user_project) ? ($user_project[0]['project_confirmation'] != 1 ? 'disabled' : '') : "disabled" ) ?>>
                <p id="erreur_additionnal_member_mail"></p>
                <input class="formwidthdash2 borderform" type="email" placeholder="Adresse mail" id="additionnal_member_mail" name="additionnal_member_mail" <?php echo (!empty($user_project) ? ($user_project[0]['project_confirmation'] != 1 ? 'disabled' : '') : "disabled" ) ?>>
                <input type="hidden" name="user_project" value="<?php echo (!empty($user_project) ? $user_project[0]['user_project'] : ""); ?>">
                <input class="boutonform3" type="submit" value="Ajouter un membre" <?php echo (!empty($user_project) ? ($user_project[0]['project_confirmation'] != 1 ? 'disabled' : '') : "disabled" ) ?>>
            </div>
        </form>
    </div>

    <?php
        if($_SESSION['user']['user_project'] == null)
        {
    ?>
            <div id="dashright">
                <form method="post" action="?module=projects&action=new" id="form_submit_project" enctype="multipart/form-data">
                    <div class="formaddmember2">
                        <h2 class="titlechoice2">Votre projet</h2>
                        <p id="erreur_project_name"></p>
                        <input class="formwidthdash2 borderform" type="text" placeholder="Nom de votre projet" id="project_name" name="project_name">
                        <p id="erreur_project_file"></p>
                        <input class="formwidthdash2 borderform" type="file" id="project_file" name="project_file">
                        <input class="boutonform2" type="submit" value="Soumettre votre projet">
                    </div>
                </form>
            </div>
    <?php
        }
        else
        {
    ?>
            <div id="dashright">
                <form method="post" action="">
                    <div class="formaddmember2">
                        <h2 class="titlechoice2">Votre projet</h2>

                        <div id="txtinfosdash">
                            <p> <?= $user_project[0]['project_name'] ?> </p>
                            <a href="<?= FILE_PROJECT_URL.$user_project[0]['project_file'] ?>">Voir le document</a>
                            <button class="boutonform2" type="button">Modifier mes informations</button>
                        </div>
                    </div>
                </form>
            </div>
    <?php
        }
    ?>


    <div id="projectmembers">
        <div id="projectrelative"><h2 class="titlechoice2">Liste des membres du projet</h2></div>

        <?php
            if(isset($additionnal_members))
            {
                foreach ($additionnal_members as $additionnal_member)
                {
        ?>
                    <div class="memberlisting">
                        <p><?= $additionnal_member['additionnal_member_first_name'] ."". $additionnal_member['additionnal_member_last_name'] ?></p>
                    </div>
        <?php
                }
            }
            else
            {
        ?>
                <div class="memberlisting">
                    <p>Pas encore de membres</p>
                </div>
        <?php
            }
        ?>
    </div>
</div>

<script type="text/javascript" src="webroot/JS/form_dashboard.js"></script>
<?php include_once 'app/view/layout/footer_front.inc.php'; ?>
