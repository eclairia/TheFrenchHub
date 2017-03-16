<?php
	// var_dump($_GET['key']);
	// die();

	if($_GET['key'])
	{
		//Faire select_table users pour récupérer la clé
		$retour =  select_table(
            		array("table1" => "tfh_users"),
            		array(
            			"where_column" => "user_key",
            			"where_value" => $_GET['key']
        			));

		if($retour)
		{
			location("users", "login", "notif=okvalidate");
		}

		else
		{
			location("users", "login", "notif=nokey");
		}
	}