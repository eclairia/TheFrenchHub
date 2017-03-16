<?php
	if(!isset($_GET["id"]))
	{
		location("users", "list", "notif=noid");
	}

	else
	{
		$retour = deletetable("tfh_users", array(
								"idcolumn" => "user_login",
								"idvalue" => $_GET['id']
							));

		if(!$retour)
		{
			location("users", "list", "notif=nok");
		}

		else
		{
			location("users", "list", "notif=ok");
		}
	}