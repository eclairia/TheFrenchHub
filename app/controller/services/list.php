<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 15:55
 */

if (!defined("_BASE_URL")) die("Ressource interdite !");
protection("admin", "admin", "login", USER_ADMIN);

$services = select_table(array("table1" => "tfh_services"),
                         array("orderby" => "service_price",
                               "order" => "ASC"));

define("PAGE_TITLE", "Liste des Offres");
include_once "app/view/services/list.php";