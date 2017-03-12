<?php

	if(!isset($_POST["user_login"]))
	{
		define("APP_LANG", "fr");
		define("PAGE_TITLE", "Connectez vous à votre compte the French Hub");
		include_once("app/view/users/login.php");
	}

	else
	{
		$_POST["user_password"] = md5($_POST["user_password"] . SALT);

		//Appel du modèle pour chercher un user
		include_once("app/model/users/verif_login.php");
		$retour = verif_login($_POST);

		if(!$retour)
		{
			location("users", "login", "notif=nok");
		}

		else
		{
			$_SESSION["user"] = $retour;
			location("projects", "index", "notif=ok");
		}
	}