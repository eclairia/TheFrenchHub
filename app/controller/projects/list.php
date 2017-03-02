<?php
    $projects = select_table( array("table1" => "tfh_project") );


    define("PAGE_TITLE", "Liste des projets");
    include_once "app/view/projects/list.php";