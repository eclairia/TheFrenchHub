<?php
	if(!isset($_GET["id"]))
	{
		location("testimonials", "list", "notif=noid");
	}
	else
	{	
		$id = intval($_GET["id"]);
		$retour = deletetable(
                    array("table1" =>"tfh_testimonials"),
                    array("where_column" => "testimonial_ID",
                          "where_value" => $id));

		if(!$retour)
		{
			location("testimonials", "list", "notif=nok");
		}

		else
		{
			location("testimonials", "list", "notif=ok");
		}
	}