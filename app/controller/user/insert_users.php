<?php

	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("APP_LANG", "fr");
		define("PAGE_TITLE", 'Insérer un user');
		include_once('app/view/users/inserer_users.php');
	}

	else
	{
		$_POST["user_password"] = md5($_POST["user_password	"] . SALT);

		//Appel du modele pour insérer un utilisateur
		include_once("app/model/utilisateur/inserer_users.php");
		$retour = inserer_users($_POST);

		if(!$retour)
		{
			//header("Location:?module=article&action=new&notif=nok");
			location("utilisateur", "insert_users", "notif=nok");
		}

		else
		{
			//header("Location:?module=article&action=detail&id=". $retour . "&notif=ok");
			location("users", "all_users", "notif=ok");
		}
	}
