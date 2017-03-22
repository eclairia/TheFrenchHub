<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 15:55
 */

if (!defined("_BASE_URL")) die("Ressource interdite !");
protection("admin", "admin", "login", USER_ADMIN);

if(!isset($_POST['service_description']))
{
    define("PAGE_TITLE", "Ajouter une offre");
    include_once("app/view/services/new.php");
}
else
{
    include_once("app/model/services/insert_service.php");
    $retour = insert_service($_POST);

    if(!$retour)
    {
        location("services", "new", "notif=nok");
    }
    else
    {
        location("services", "list", "notif=ok");
    }
}