<?php
	if(!isset($_GET["id"]))
	{
		location("admin", "list", "notif=noid");
	}

	else
	{	
		$id = intval($_GET["id"]);
		$retour = deletetable("tfh_admin", array(
								"idcolumn" => "admin_ID",
								"idvalue" => $id
							));

		if(!$retour)
		{
			location("admin", "list", "notif=nok");
		}

		else
		{
			location("admin", "list", "notif=ok");
		}
	}