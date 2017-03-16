<?php
	protection("admin", "admin", "login", USER_ADMIN);

	if(!isset($_POST['article_title']))
	{
		define("PAGE_TITLE", "Insertion d'un article");
		include_once("app/view/articles/new.php");
	}
	else
	{
		// var_dump($_POST);
		// var_dump($_FILES);
		// die();
		//Appel du modele pour insérer un article
		include_once("app/model/articles/upload_pictures.php");
		$article_picture_url = upload_pictures($_POST, $_FILES);
		include_once("app/model/articles/insert_article.php");

		// var_dump($article_picture_url);
		// die();

		$_SESSION["admin"]["admin_ID"] = intval($_SESSION["admin"]["admin_ID"]);
		$retour = insert_article($_POST, $_FILES, $article_picture_url, $_SESSION["admin"]["admin_ID"]);


		if(!$retour)
		{
			location("articles", "new", "notif=nok");
		}
		else
		{
			location("articles", "detail", "id=" . $retour . "&notif=ok");
		}
	}
