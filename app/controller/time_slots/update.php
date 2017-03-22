<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 17:59
 */
if (!defined("_BASE_URL")) die("Ressource interdite !");
protection("admin", "admin", "login", "USER_ADMIN");

if(!isset($_POST["time_slot_begin_disponibility"]))
{
    $time_slot = select_table(array("table1" => "tfh_time_slots"),
                              array("where_column" => "time_slot_ID",
                                    "where_value" => $_GET['id']));

    define("PAGE_TITLE", "Entrer une plage horaire");
    include_once("app/view/time_slots/update.php");
}
else
{
    include_once("app/model/time_slots/update_time_slot.php");
    $retour = update_time_slot($_POST, $_GET['id']);

    if(!$retour)
    {
        location("time_slots", "update", "id=". $_GET['id'] ."&notif=nok");
    }
    else
    {
        location("time_slots", "list", "notif=ok");
    }
}