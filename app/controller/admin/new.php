<?php
	protection("admin", "admin", "new", "USER_SUPER_ADMIN");
	
	if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Insérer un administrateur');
		include_once('app/view/admin/new.php');
	}
	else
	{
	    var_dump($_POST);
		$_POST["admin_level"] = intval($_POST["admin_level"]);
		$_POST["admin_password"] = md5($_POST["admin_password"] . SALT);
		//Appel du modele pour insérer un administrateur
		include_once("app/model/admin/insert_admin.php");
		$retour = insert_admin($_POST);

		if(!$retour)
		{
			location("admin", "new", "notif=nok");		
		}
		else
		{
			location("admin", "list", "notif=ok");
		}
	}
