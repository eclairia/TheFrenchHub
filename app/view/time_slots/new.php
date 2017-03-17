<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 17:59
 */

include_once("app/view/layout/header_back.inc.php"); ?>
    <div class="col-lg-10 col-sm-10">
        <form method="POST" action="?module=time_slots&action=new" enctype="multipart/form-data" id="form_post">
            <div class="form-group col-lg-12 col-sm-12">
                <label for="time_slot_begin_disponibility">Date de commencement: </label>
                <input type="date" name="time_slot_begin_disponibility" class="form-control" id="time_slot_begin_disponibility" rows="10" cols="100" required />
            </div>

            <div class="form-group col-lg-12 col-sm-12">
                <label for="time_slot_end_disponibility">Date de fin: </label>
                <input type="date" name="time_slot_end_disponibility" class="form-control" id="time_slot_end_disponibility" rows="10" cols="100" required />
            </div>

            <div class="form-group col-lg-6 col-sm-6 text-center col-lg-offset-3 col-md-offset-3">
                <input value="Enregistrer" class="btn btn-lg btn-success" type="submit" />
                <input type="reset" class="btn btn-lg btn-warning" value="effacer" />
            </div>
        </form>
    </div>
</div>

<?php include_once("app/view/layout/footer_back.inc.php"); ?>