<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	if($_GET['key'])
	{
		//Faire select_table users pour récupérer la clé
		$retour =  select_table_value(
            		array("table1" => "tfh_users"),
            		array(
            			"where_colum" => "user_key",
            			"where_value" => $_GET['key'],
            			"orderby" => "user_date",
            			"order" => "DESC"));

		if($retour)
		{
			include_once("app/model/users/verif_validate.php");
			$user_confirmed = USER_CONFIRMED;
			$retour = verif_validate($retour[0]['user_key'], $user_confirmed);
			if($retour)
			{
				// var_dump($retour);
				// die();
				location("users", "login", "notif=okvalidate");
			}

			else
			{			
				location("users", "login", "notif=novalidate");
			}
		}

		else
		{
			location("users", "login", "notif=nokey");
		}
	}