<?php
	
	protection("admin", "admin", "login", USER_ADMIN);


	if(!isset($_POST['article_title']))
	{
		define("APP_LANG", "fr");
		define("PAGE_TITLE", "Insertion d'un article");
		include_once("app/view/articles/new.php");
	}

	else
	{
		//Appel du modele pour insérer un article
		include_once("app/model/articles/upload_pictures.php");
		$upload_pictures = upload_pictures($_POST, $_FILES);
		include_once("app/model/articles/insert_article.php");
		$retour = insert_article($_POST, $_FILES, $_SESSION["admin"]["admin_ID"]
			);
		include_once("app/model/articles/insert_url_articles.php");
		$retour = intval($retour);
		$retour2 = insert_url_articles($upload_pictures, $retour, $_FILES);

		if(!$retour && !$retour2)
		{
			location("articles", "new", "notif=nok");
		}

		else
		{
			location("articles", "detail", "id=" . $retour . "&notif=ok");
		}
	}
