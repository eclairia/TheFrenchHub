<?php

	//protection("user", "users", "login", USER_LAMBDA);

	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("APP_LANG", "fr");
		define("PAGE_TITLE", 'Modifier les données d\'un user');
		include_once('app/view/admin/update.php');
	}

	else
	{
		$_POST["admin_password"] = md5($_POST["admin_password"] . SALT);	
		
		//Appel du modele pour modifier les données d'un utilisateur
		include_once("app/model/admin/update_admin.php");
		$admin_id = $_GET["id"];
		$retour = update_admin($_POST["admin_name"], $_POST["admin_mail"], $_POST["admin_login"], $_POST["admin_password"], $admin_id);

		if(!$retour)
		{
			$_SESSION["admin"]["admin_name"] = $_POST["admin_name"];
			$_SESSION["admin"]["admin_mail"] = $_POST["admin_mail"];
			$_SESSION["admin"]["admin_login"] = $_POST["admin_login"];
			$_SESSION["admin"]["admin_password"] = $_POST["admin_password"];
			location("admin", "all_users", "notif=ok");
		}

		else
		{
			location("admin", "update_admin", "notif=nok");
		}
	}
