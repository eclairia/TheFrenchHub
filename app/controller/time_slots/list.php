<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 17/03/2017
 * Time: 17:58
 */
if (!defined("_BASE_URL")) die("Ressource interdite !");
$time_slots = select_table(array("table1" => "tfh_time_slots"));

define("PAGE_TITLE", "Liste des plages horaire");
include_once("app/view/time_slots/list.php");