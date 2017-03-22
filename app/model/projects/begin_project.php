<?php
    if (!defined("_BASE_URL")) die("Ressource interdite !");
    function begin_project($date, $user_project)
    {
        global $pdo;

        try
        {
            $req = "UPDATE tfh_projects 
                    SET project_begin_date = :project_begin_date, project_end_date = :project_end_date 
                    WHERE project_ID = :user_project";

            $query = $pdo->prepare($req);

            $query->bindValue(':project_begin_date', $date[0]["time_slot_begin_disponibility"], PDO::PARAM_STR);
            $query->bindValue(':project_end_date', $date[0]["time_slot_end_disponibility"], PDO::PARAM_STR);
            $query->bindParam(':user_project', $user_project['user_project'], PDO::PARAM_INT);

            $query->execute();
            return true;
        }

        catch(Exception $e)
        {
            return false;
        }
    }