<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function insert_url_articles($upload_pictures, $article_id, $article_pictures_url)
	{
		global $pdo;
		try
		{
			var_dump($upload_pictures);
			die();
			$req = "INSERT INTO tfh_article_pictures(article_ID, article_pictures_url)
					VALUES (:article_id, :article_pictures_url)";

			$query = $pdo->prepare($req);

			$query->bindValue(':article_id', $article_id, PDO::PARAM_INT);
			$query->bindValue(':article_pictures_url', "webroot/images/".$upload_pictures, PDO::PARAM_STR);

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}
	}