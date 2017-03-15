<?php

	//protection("user", "users", "login", USER_LAMBDA);

	if(empty($_POST))
	{
		//Appel de la vue correspondante
        $admin = select_table(
            array("table1" => "tfh_admin"),
            array("where_column" => "admin_ID",
                "where_value" => $_GET['id'])
        );
		define("PAGE_TITLE", "Modifier les données d'un administrateur");
		include_once('app/view/admin/update.php');
	}

	else
	{
		//Appel du modele pour modifier les données d'un utilisateur
		include_once("app/model/admin/update_admin.php");
		$_POST["admin_password"] = md5($_POST["admin_password"] . SALT);
		$_SESSION["admin_id"] = intval($_POST["admin_id"]);
		// var_dump($_POST);
		// die();
		$retour = update_admin($_POST["admin_name"], $_POST["admin_mail"], $_POST["admin_login"], $_POST["admin_password"], $_POST["admin_id"]);

		if(!$retour)
		{
			location("admin", "list", "notif=nok");			
		}

		else
		{
			$_SESSION["admin"]["admin_name"] = $_POST["admin_name"];
			$_SESSION["admin"]["admin_mail"] = $_POST["admin_mail"];
			$_SESSION["admin"]["admin_login"] = $_POST["admin_login"];
			$_SESSION["admin"]["admin_password"] = $_POST["admin_password"];
			location("admin", "list", "notif=ok");							
		}
	}
