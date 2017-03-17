<?php
	if(!isset($_GET["id"]))
	{
		location("admin", "list", "notif=noid");
	}

	else
	{	
		$id = intval($_GET["id"]);
		$retour = deletetable(
                    array("table1" =>"tfh_admin"),
                    array("where_column" => "admin_ID",
                          "where_value" => $id));

		if(!$retour)
		{
			location("admin", "list", "notif=nok");
		}

		else
		{
			location("admin", "list", "notif=ok");
		}
	}