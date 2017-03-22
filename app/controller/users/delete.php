<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	if( (!isset($_GET['user_login'])) && (!isset($_GET['user_password'])) )
	{
		location("users", "list", "notif=noid");
	}
	else
	{
        $retour = deletetable(
                        array("table1" => "tfh_users",),
                        array("where_column" => "user_login",
                              "where_value" => $_GET["user_login"]),
                        array("and_column1" => "user_password",
                              "and_value1" => $_GET["user_password"]));

		if(!$retour)
		{
			location("users", "list", "notif=nok");
		}
		else
		{
			location("users", "list", "notif=ok");
		}
	}