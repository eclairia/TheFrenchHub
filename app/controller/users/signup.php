<?php
	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Inscrivez-vous à The French Hub');
		include_once('app/view/users/signup.php');
	}
	else
	{
		$_POST["user_level"] = intval($_POST["user_level"]);
		$_POST["user_password"] = md5($_POST["user_password"] . SALT);

        $key = md5(uniqid(rand()));
		//Appel du modele pour insérer un administrateur
		include_once("app/model/users/insert_user.php");
		$retour = insert_user($_POST, $key);

		if($retour)
		{
            include_once("app/model/users/verif_validate.php");
            $retour = verif_validate($key, USER_CONFIRMED);

            if ($retour)
            {
                location("users", "login", "notif=oksignup");
            }
            else
            {
                location("users", "login", "notif=notactive");
            }
		}
		else
		{
			location("users", "signup", "notif=noksignup");
		}
	}
