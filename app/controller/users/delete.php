<?php
	if( (!isset($_GET['user_login'])) && (!isset($_GET['user_password'])) )
	{
		location("users", "list", "notif=noid");
	}
	else
	{
	    //var_dump($_GET);
        //var_dump($_GET['user_login']);
        //exit;
        $retour = deletetable(
                        array("table1" => "tfh_users",),
                        array("where_column" => "user_login",
                              "where_value" => $_GET["user_login"]),
                        array("and_column1" => "user_password",
                              "and_value1" => $_GET["user_password"])
        );

		// deletetable("tfh_users", array(
		// 						"idcolumn" => "user_login",
		// 						"idvalue" => $_GET['id'],
		// 					));		

		// var_dump($retour);
		// die();

		if(!$retour)
		{
			location("users", "list", "notif=nok");
		}
		else
		{
			location("users", "list", "notif=ok");
		}
	}