<?php
	if(!isset($_GET["id"]))
	{
		location("time_slots", "list", "notif=noid");
	}
	else
	{	
		$id = intval($_GET["id"]);
		$retour = deletetable(array("table1" => "tfh_time_slots"),
                              array("where_column" => "time_slot_ID",
								    "where_value" => $_GET['id']));

		if(!$retour)
		{
			location("time_slots", "list", "notif=nok");
		}
		else
		{
			location("time_slots", "list", "notif=ok");
		}
	}