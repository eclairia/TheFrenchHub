<?php
	if(isset($_GET["id"]) || ($_POST["article_id"]))
	{
		$_GET["id"] = intval($_GET["id"]);
		$articles = selecttable("table1" => "tfh_articles", 
							array(
								"idcolumn" => "article_id",
								"idvalue" => $_GET["id"],
								"orderby" => "article_id",
								"order" => "DESC"						
							));

		// var_dump($articles_pictures_url);
		// die();

		$article = $articles[0];
		//Appel de la vue correspondante	
		define("APP_LANG", "fr");
		define("PAGE_TITLE", "Détail d'un article");
		include_once('app/view/articles/detail.php');				
	}

	else
	{
		location("articles", "list", "notif=nok");
	}