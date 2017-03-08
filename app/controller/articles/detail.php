<?php
	if(isset($_GET["id"]))
	{
		$_GET["id"] = intval($_GET["id"]);
		$articles = selecttable("tfh_articles", 
							array(
								"idcolumn" => "article_id",
								"idvalue" => $_GET["id"]
							));

		$article = $articles[0];

		//Appel de la vue correspondante	
		define("APP_LANG", "fr");
		define("PAGE_TITLE", "Détail d'un article");
		include_once('app/view/articles/detail.php');				
	}

	else
	{
		location("admin", "login", "notif=nok");		
	}