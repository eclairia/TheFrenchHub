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
		$article_picture_url = upload_pictures($_POST, $_FILES);
		include_once("app/model/articles/insert_article.php");
		$_SESSION["admin"]["admin_ID"] = intval($_SESSION["admin"]["admin_ID"]);
		$retour = insert_article($_POST, $_FILES, $_SESSION["admin"]["admin_ID"], $article_picture_url);

		if(!$retour)
		{
			location("articles", "new", "notif=nok");
		}

		else
		{
			location("articles", "detail", "id=" . $retour . "&notif=ok");
		}
	}
