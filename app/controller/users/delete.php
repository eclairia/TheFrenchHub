<?php
	if(!isset($_GET["id"]))
	{
		location("users", "list", "notif=noid");
	}

	else
	{
		include_once("app/model/delete_article.php");
		$retour = delete_article($_GET['id'], $_POST['password']);

		// deletetable("tfh_users", array(
		// 						"idcolumn" => "user_login",
		// 						"idvalue" => $_GET['id'],
		// 					));		

		// var_dump($retour);
		// die();

		if(!$retour)
		{
			location("users", "list", "notif=nok");
		}

		else
		{
			location("users", "list", "notif=ok");
		}
	}