<?php
	if(!isset($_GET["id"]))
	{
		location("articles", "list", "notif=noid");
	}

	else
	{	
		$id = intval($_GET["id"]);
		$retour = deletetable("tfh_articles", array(
								"idcolumn" => "article_id",
								"idvalue" => $id
							));

		if(!$retour)
		{
			location("articles", "list", "notif=nok");
		}

		else
		{
			location("articles", "list", "notif=ok");
		}
	}