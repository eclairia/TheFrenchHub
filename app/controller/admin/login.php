<?php

	if(!isset($_POST["admin_login"]))
	{
		define("APP_LANG", "fr");
		define("PAGE_TITLE", "Page de connexion");
		include_once("app/view/admin/login.php");
	}

	else
	{
		$_POST["admin_password"] = md5($_POST["admin_password"] . SALT);

		//Appel du modèle pour chercher un user
		include_once("app/model/admin/verif_login.php");
		$retour = verif_login($_POST);

		if(!$retour)
		{
			location("admin", "login", "notif=nok");
		}

		else
		{
			$_SESSION["admin"] = $retour;

			if($retour["admin_level"] == 1)
			{
				$_SESSION["admin_level"] = USER_ADMIN;
				location("admin", "index", "notif=ok");
			}

			else
			{
				$_SESSION["level"] = USER_PROJECT;
				location("projects", "index", "notif=nok");
			}	
		}
	}