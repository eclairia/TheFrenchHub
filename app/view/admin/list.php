<?php include_once("app/view/layout/header_back.inc.php"); ?>

    <div class="table-responsive" xmlns="http://www.w3.org/1999/html">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <p class="text-center">
                        Nom
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Mail
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Login
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Modifier
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Supprimer
                    </p>
                </th>
            </tr>
            </thead>

            <tbody>
            <?php
            foreach ($admins as $admin)
            {
            ?>
                <tr>
                    <td>
                        <p class="text-center">
                            <?= $admin['admin_name']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $admin['admin_mail']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $admin['admin_login']; ?>
                        </p>
                    </td>

                    <td >
                        <a href="?module=admin&action=modif&id=<?= $admin['admin_ID']; ?>"><div class=" btn-group-sm text-center">
                            <button type="button" id="confirm" class="btn btn-primary btn-lg">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </button>
                        </div></a>
                    </td>

                    <td>
                        <div class=" btn-group-sm text-center" data-toggle="modal" data-target="#deleteModal">
                            <button type="button" id="refuse" class="btn btn-danger btn-lg" onclick="refuser('<?= $admin['admin_ID']; ?>');">
                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                            </button>
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Voulez-vous vraiment supprimer cet administrateur ?</h4>
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

<script type="text/javascript" src="webroot/JS/admin_delete.js"></script>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>

