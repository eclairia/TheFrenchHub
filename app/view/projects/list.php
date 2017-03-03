<?php
    include_once "app/view/layout/header_back.inc.php";
?>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>
                    Nom du projet
                </th>
                <th>
                    Nombre de membres
                </th>
                <th>
                    Date de début
                </th>
                <th>
                    Date de fin
                </th>
                <th>
                    Confirmation
                </th>
                <th>
                    Présentation du projet
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($projects as $project)
                {
            ?>
                <?php
                    $status = ($project['project_confirmation'] == 0) ? 'danger' : 'success';
                ?>

                <tr <?= 'class="' . $status . '"'?> >
                    <td>
                        <?= $project['project_name']; ?>
                    </td>

                    <td>
                        <?= $project['project_nb_members']; ?>
                    </td>

                    <td>
                        <?= $project['project_begin_date']; ?>
                    </td>

                    <td>
                        <?= $project['project_end_date']; ?>
                    </td>

                    <td>
                        <?php
                            if ($project['project_confirmation'] ==0)
                            {
                                echo 'Non confirmé';
                            }
                            else
                            {
                                echo 'Confirmé';
                            }
                        ?>
                    </td>

                    <td>
                        Fichier de Présentation du projet
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
<?php
    include_once "app/view/layout/header_back.inc.php";