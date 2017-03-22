<?php
if (!defined("_BASE_URL")) die("Ressource interdite !");
function prevent_user($project_ID)
{
    global $pdo;

    try
    {
        $req = "UPDATE tfh_users SET user_prevent = 1 WHERE user_project = :project_ID";

        $query = $pdo->prepare($req);

        $query->bindParam(':project_ID', $project_ID['project_ID'], PDO::PARAM_INT);
        $query->execute();
        return true;
    }

    catch(Exception $e)
    {
        return false;
    }
}