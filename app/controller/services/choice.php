<?php
    if (!defined("_BASE_URL")) die("Ressource interdite !");
    $services = select_table(array("table1" => "tfh_services"));
    $time_slots = select_table(array("table1" => "tfh_time_slots"));

    if(isset($_SESSION['user']))
    {
        $user_project = select_table_value(
            array("table1" => "tfh_users",
                "table2" => "tfh_projects"),
            array("where_column" => "project_ID",
                "where_value" => $_SESSION['user']['user_project']),
            array("and_column1" => "user_login",
                "and_value1" => $_SESSION['user']['user_login'],
                "and_column2" => "user_password",
                "and_value2" => $_SESSION['user']['user_password']));
    }

    define("PAGE_TITLE", 'les offres de The French Hub');
    include_once("app/view/services/choice.php");
