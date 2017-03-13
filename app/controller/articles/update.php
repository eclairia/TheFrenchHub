<?php

	// protection("admin", "admin", "login", "USER_ADMIN");

	if(!isset($_POST["article_title"]))
	{
		//Appel de la vue correspondante
		define("APP_LANG", "fr");
		define("PAGE_TITLE", 'Modifier les données d\'un article');
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
