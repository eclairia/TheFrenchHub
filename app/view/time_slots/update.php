<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 17:59
 */

include_once("app/view/layout/header_back.inc.php"); ?>
    <div class="col-lg-10 col-sm-10">
        <form method="POST" action="?module=time_slots&action=update&id=<?= $_GET['id'] ?>" enctype="multipart/form-data" id="form_update_timeslot">
            <div class="form-group col-lg-12 col-sm-12">
                <label for="time_slot_begin_disponibility">Date de commencement: </label>
                <p id="erreur_update_time_slot_begin_disponibility"></p>
                <input type="date" name="time_slot_begin_disponibility" class="form-control" id="update_time_slot_begin_disponibility" value="<?= $time_slot[0]['time_slot_begin_disponibility'] ?>" rows="10" cols="100" required />
            </div>

            <div class="form-group col-lg-6 col-sm-6 text-center col-lg-offset-3 col-md-offset-3">
                <input value="Enregistrer" class="btn btn-lg btn-success" type="submit" />
                <input type="reset" name="reset" class="btn btn-lg btn-warning" value="Effacer" />
            </div>
        </form>
    </div>
</div>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>