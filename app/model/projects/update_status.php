<?php
if (!defined("_BASE_URL")) die("Ressource interdite !");
function update_status($projectID, $status)
{
    global $pdo;

    try
    {
        $req = "UPDATE tfh_projects SET project_confirmation = :project_confirmation WHERE project_ID = :project_ID";

        $query = $pdo->prepare($req);

        $query->bindParam(':project_ID', $projectID, PDO::PARAM_INT);
        $query->bindParam(':project_confirmation', $status, PDO::PARAM_INT);
        $query->execute();
        return true;
    }

    catch(Exception $e)
    {
        return false;
    }
}