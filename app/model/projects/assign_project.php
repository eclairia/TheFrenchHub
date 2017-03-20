<?php

function assign_project($projectID)
{
    global $pdo;

    try
    {
        $req = "UPDATE tfh_users 
                SET user_project = :user_project 
                WHERE user_login = :user_login 
                AND user_password = :user_passord";

        $query = $pdo->prepare($req);

        $query->bindParam(':user_project', $projectID, PDO::PARAM_INT);
        $query->bindParam(':user_login', $_SESSION['user']['user_login'], PDO::PARAM_STR);
        $query->bindParam(':user_passord', $_SESSION['user']['user_password'], PDO::PARAM_STR);
        $query->execute();

        return true;
    }

    catch(Exception $e)
    {
        die('Erreur technique :' .$e->getMessage());
        return false;
    }
}