<?php
    if (!defined("_BASE_URL")) die("Ressource interdite !");
    include_once "app/view/layout/header_back.inc.php";
?>

    <div class="table-responsive" xmlns="http://www.w3.org/1999/html">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <p class="text-center">
                        Nom du projet
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Nombre de membres
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Date de début
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Date de fin
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Confirmation
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Présentation du projet
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Confirmer le projet
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Refuser le projet
                    </p>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($projects as $project)
            {
                if ($project['project_confirmation'] == 0)
                    $status = 'danger';
                else if ($project['project_confirmation'] == 1)
                    $status = 'success';
                else if ($project['project_confirmation'] == 2)
                    $status = 'default'
                ?>

                <tr <?= 'class="' . $status . '"'?> >
                    <td>
                        <p class="text-center">
                            <?= $project['project_name']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $project['project_nb_members']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $project['project_begin_date']; ?>
                        </p>
                    </td>

                    <td >
                        <p class="text-center">
                            <?= $project['project_end_date']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?php
                                if ($project['project_confirmation'] == 0)
                                {
                            ?>
                                    <a href="?module=projects&action=justification&projectid=<?= $project['project_ID']; ?>"> Informez <?= $project['user_first_name']; ?> <?= $project['user_last_name']; ?> du refus de son projet </a> <br>
                                    <?php
                                        if($project['user_prevent'] == 1)
                                        {
                                    ?>
                                            <span class="label label-success text-center">Prévenu</span>
                                    <?php
                                        }
                                    ?>
                            <?php
                                }
                                else
                                {
                                    echo 'Confirmé';
                                }
                            ?>
                        </p>
                    </td>

                    <td>
                        Fichier de Présentation du projet
                    </td>
                    <th>
                        <div class=" btn-group-sm text-center" data-toggle="modal" data-target="#confirmModal">
                            <button type="button" id="confirm" class="btn btn-success btn-lg" onclick="accepter('<?= $project['project_ID']; ?>', '<?= $project['user_mail']; ?>', '<?= $project['user_first_name']; ?>');">
                                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                            </button>
                        </div>
                    </th>
                    <th>
                        <div class=" btn-group-sm text-center" data-toggle="modal" data-target="#refuseModal">
                            <button type="button" id="refuse" class="btn btn-danger btn-lg" onclick="refuser('<?= $project['project_ID']; ?>');">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </div>
                    </th>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Voulez vous valider le projet ?</h4>
                </div>
                <div class="modal-body text-center">
                    <button type="button" id="validerProjet" class="btn btn-lg btn-success">Confirmer</button>
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="refuseModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Pourquoi voulez-vous refuser le projet ?</h4>
                </div>
                <div class="modal-body text-center">
                    <button type="button" id="refuserProjet" class="btn btn-lg btn-success"> Oui </button>
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Annuler</button>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="webroot/JS/status_project.js"></script>
<?php
    include_once "app/view/layout/footer_back.inc.php";