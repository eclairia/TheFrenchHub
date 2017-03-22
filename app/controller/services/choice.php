<?php
    $services = select_table(array("table1" => "tfh_services"));
    $time_slots = select_table(array("table1" => "tfh_time_slots"));

    define("PAGE_TITLE", 'les offres de The French Hub');
    include_once("app/view/services/choice.php");
