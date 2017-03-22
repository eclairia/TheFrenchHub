<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 20/03/2017
 * Time: 18:19
 */

if (!defined("_BASE_URL")) die("Ressource interdite !");

if($_POST['additionnal_member_mail'])
{
    include_once("app/model/additionnal_members/new.php");
    $retour = add_member($_POST);

    if(!$retour)
    {
        location('users', 'dashboard', "notif=nok");
    }
    else
    {
        $projects = select_table_value(array("table1" => "tfh_projects"),
                                       array("where_column" => "project_ID",
                                             "where_value" => $_POST['user_project']));

        $nb_members = $projects[0]['project_nb_members'] + 1;
        include_once("app/model/projects/update_nb_members.php");
        $retour = update_nb_members($_POST, $nb_members);

        if($retour)
        {
            location('users', 'dashboard', "notif=ok");
        }
        else
        {
            location('users', 'dashboard', "notif=notaddmember");
        }
    }
}
else
{
    location('users', 'dashboard', "notif=nomembers");
}