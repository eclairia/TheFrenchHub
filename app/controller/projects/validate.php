<?php
	// var_dump($_GET['key']);
	// die();

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
			var_dump($_GET['id']);
			die();
			include_once("app/model/projects/verif_validate.php");
			$user_confirmed = USER_CONFIRMED;
			$_GET['id'] = intval($_GET['id']);
			$retour = verif_validate($retour[0]['user_key'], $user_confirmed, $_GET['id']);
			if($retour)
			{
				location("projects", "update_member", "key=".$retour."&notif=okvalidate");
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