<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	if(!isset($_GET["id"]))
	{
		location("articles", "list", "notif=noid");
	}

	else
	{	
		$id = intval($_GET["id"]);
		$retour = deletetable(
		            array("table1" => "tfh_articles"),
                    array("where_column" => "article_id",
                          "where_value" => $id));

		if(!$retour)
		{
			location("articles", "list", "notif=nok");
		}

		else
		{
			location("articles", "list", "notif=ok");
		}
	}