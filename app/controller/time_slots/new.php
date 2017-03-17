<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 17:59
 */

protection("admin", "admin", "login", "USER_ADMIN");

if(!isset($_POST["time_slot_begin_disponibility"]))
{
    define("PAGE_TITLE", "Entrer une plage horaire");
    include_once("app/view/time_slots/new.php");
}
else
{
    include_once("app/model/time_slots/insert_time_slot.php");
    $retour = insert_time_slot($_POST);

    if(!$retour)
    {
        location("time_slots", "new", "notif=nok");
    }
    else
    {
        location("time_slots", "list", "notif=ok");
    }
}