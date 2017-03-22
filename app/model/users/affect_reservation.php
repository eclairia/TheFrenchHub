<?php
if (!defined("_BASE_URL")) die("Ressource interdite !");
function affect_reservation($reservation)
{
    global $pdo;
    try
    {
        $req = "UPDATE tfh_users
                SET user_time_slot =:time_slot_ID
                WHERE user_login =:user_login
                AND user_password =:user_password";

        $query = $pdo->prepare($req);

        $query->bindValue(':time_slot_ID', $reservation['time_slot_begin_disponibility'], PDO::PARAM_INT);
        $query->bindValue(':user_login', $_SESSION['user']['user_login'], PDO::PARAM_STR);
        $query->bindValue(':user_password', $_SESSION['user']['user_password'], PDO::PARAM_STR);


        $query->execute();

        return true;
    }
    catch (Exception $e)
    {
        return false;
        //die('Erreur SQL :' .$e->getMessage());
    }
}
