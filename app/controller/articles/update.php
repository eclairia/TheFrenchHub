<?php
	protection("admin", "admin", "login", "USER_ADMIN");

	if(empty($_GET['id']))
	{
		location("articles", "list", "notif=noid");
	}

	if(!isset($_POST["article_title"]))
	{
	    $article = select_table(
	                        array("table1" => "tfh_articles",
                                  "table2" => "tfh_admin"),
                            array("where_column" => "article_ID",
                                  "where_value" => $_GET['id']),
                            array("and_column1" => "article_ID",
                                  "and_value1" => "article_author")

        );
		//Appel de la vue correspondante
<<<<<<< HEAD
//<<<<<<< HEAD
		define("APP_LANG", "fr");
		define("PAGE_TITLE", 'Modifier les données d\'un article');
//=======
		define("PAGE_TITLE", "Modifier les données d'un article");
//>>>>>>> b802626ff4a6451c192d0180b06812262b5e18df
=======
		define("PAGE_TITLE", "Modifier les données d'un article");
>>>>>>> 73315423cf1803a7bd90c581f49a47239faaef88
		include_once("app/view/articles/update.php");
	}
	else
	{
		$_POST["article_id"] = intval($_POST["article_id"]);		
		//Appel du modele pour modifier les données d'un article
		include_once("app/model/articles/upload_pictures.php");
		$article_picture_url = upload_pictures($_POST, $_FILES);
		include_once("app/model/articles/update_article.php");
		$retour = update_article($_POST, $article_picture_url);

		if(!$retour)
		{
			location("articles", "list");
		}
	}
