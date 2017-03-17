<?php

	if(!isset($_POST["user_login"]))
	{
		define("PAGE_TITLE", "Connectez vous à votre compte the French Hub");
		include_once("app/view/users/login.php");
	}
	else
    {
        if (isset($_POST['user_cookie']))
        {
            setcookie("user_login", $_POST['user_login'], time() + 365 * 24 * 3600);
            setcookie("user_password", $_POST['user_password'], time() + 365 * 24 * 3600);
        }

        $_POST["user_password"] = md5($_POST["user_password"] . SALT);

        //Appel du modèle pour chercher un user
        include_once("app/model/users/verif_login.php");
        $retour = verif_login($_POST);

        if (!$retour)
        {
            location("users", "login", "notif=nok");
        }
        else
        {
            if ($retour['user_confirmed'] == 1)
            {
                $_SESSION["user"] = $retour;
                location("projects", "new", "notif=ok");
            }
            else
            {
                location("users", "new", "notif=nokey");
            }
        }
    }