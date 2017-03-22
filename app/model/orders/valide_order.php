<?php
if (!defined("_BASE_URL")) die("Ressource interdite !");
function valide_order()
{
    global $pdo;
    try
    {
        $req = "UPDATE tfh_orders
                SET order_state = 1
                WHERE order_user_login =:user_login
                AND order_user_password =:user_password";

        $query = $pdo->prepare($req);

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
