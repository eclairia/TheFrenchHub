<?php

	protection("user", "users", "login", USER_LAMBDA);

	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("APP_LANG", "fr");
		define("PAGE_TITLE", 'Modifier les données d\'un user');
		include_once('app/view/users/update_users.php');
	}

	else
	{
		$_POST["user_pass"] = md5($_POST["user_pass"] . SALT);	
		
		//Appel du modele pour modifier les données d'un utilisateur
		include_once("app/model/users/modifier_users.php");
		$retour = modifier_users($_POST["user_login"], $_POST["user_pass"], $_POST["user_email"], $_POST["display_name"], $_SESSION["user"]["ID"]);

		if(!$retour)
		{
			$_SESSION["user"]["user_login"] = $_POST["user_login"];
			$_SESSION["user"]["user_pass"] = $_POST["user_pass"];
			$_SESSION["user"]["user_email"] = $_POST["user_email"];
			$_SESSION["user"]["display_name"] = $_POST["display_name"];
			location("users", "all_users", "notif=ok");
		}

		else
		{
			location("users", "update_users", "notif=nok");
		}
	}
