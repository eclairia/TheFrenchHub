<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	if(!isset($_GET["id"]))
	{
		location("admin", "list", "notif=noid");
	}
	else
	{	
		$id = intval($_GET["id"]);
		$retour = deletetable(array("table1" => "tfh_services"),
                              array("where_column" => "service_ID",
								    "where_value" => $_GET['id']));

		if(!$retour)
		{
			location("services", "list", "notif=nok");
		}
		else
		{
			location("services", "list", "notif=ok");
		}
	}