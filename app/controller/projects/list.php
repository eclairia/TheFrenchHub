<?php
    if (isset($_GET['id']))
    {
        $status = ($_GET['status'] == 'accepted') ? 1 : 0;
        include_once "app/model/projects/update_status.php";
        $retour =  update_status($_GET['id'], $status);
        if ($retour)
        {
            location('projects', 'list', "notif=ok");
            exit;
        }
        else
        {
            location('projects', 'list', "notif=nok");
            exit;
        }
    }

    $projects = select_table( array("table1" => "tfh_projects") );

    define("PAGE_TITLE", "Liste des projets");
    include_once "app/view/projects/list.php";