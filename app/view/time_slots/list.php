<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 17:58
 */
if (!defined("_BASE_URL")) die("Ressource interdite !");
include_once "app/view/layout/header_back.inc.php"; ?>

    <div class="table-responsive" xmlns="http://www.w3.org/1999/html">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>
                    <p class="text-center">
                        Date de commencement
                    </p>
                </th>
                <th class="text-center">
                    <p class="text-center">
                        Date de fin
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Modifier l'offre
                    </p>
                </th>

                <th class="text-center">
                    <p class="text-center">
                        Supprimer l'offre
                    </p>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($time_slots as $time_slot)
            {
                ?>
                <tr>
                    <td>
                        <p class="text-center">
                            <?= $time_slot['time_slot_begin_disponibility']; ?>
                        </p>
                    </td>

                    <td>
                        <p class="text-center">
                            <?= $time_slot['time_slot_end_disponibility']; ?>
                        </p>
                    </td>

                    <td>
                        <a href="?module=time_slots&action=update&id=<?= $time_slot['time_slot_ID']; ?>"><div class=" btn-group-sm text-center" data-toggle="modal" data-target="#confirmModal">
                                <button type="button"class="btn btn-primary btn-lg">
                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                </button>
                            </div></a>
                    </td>

                    <td>
                        <div class=" btn-group-sm text-center" data-toggle="modal" data-target="#deleteModal">
                            <button type="button" id="refuse" class="btn btn-danger btn-lg" onclick="suppr(<?= $time_slot['time_slot_ID']; ?>);">
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
                    <h4 class="modal-title" id="myModalLabel">Voulez vous supprimer cette plage horaire ?</h4>
                </div>
                <div class="modal-body text-center">
                    <button type="button" id="supprimerSlot" class="btn btn-lg btn-success"> Oui </button>
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Annuler</button>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="webroot/JS/delete_time_slot.js"></script>

<?php
include_once "app/view/layout/footer_back.inc.php";