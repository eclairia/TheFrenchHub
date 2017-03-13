<?php
    protection("admin", "admin", "login", USER_ADMIN);

    $users = select_table(
                array("table1" => "tfh_users"),
                array(
                	"orderby" => "user_date",
                	"order" => "DESC"
                ));

    define("PAGE_TITLE", 'Liste des utilisateurs');
    include_once("app/view/users/list.php");

