<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 15:55
 */

protection("admin", "admin", "login", USER_ADMIN);

if(!isset($_POST['service_description']))
{
    $service = select_table(array("table1" => "tfh_services"),
                            array("where_column" => "service_ID",
                                  "where_value" => $_GET['id']));

    define("PAGE_TITLE", "Modifier une offre");
    include_once("app/view/services/update.php");
}
else
{
    include_once("app/model/services/update_service.php");
    $retour = update_service($_POST, $_GET['id']);

    if(!$retour)
    {
        location("services", "update", "id=". $_GET['id'] ."&notif=nok");
    }
    else
    {
        location("services", "list", "notif=ok");
    }
}