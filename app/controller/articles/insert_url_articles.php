<?php

	function insert_url_articles($upload_pictures, $article_id, $article_pictures_url)
	{
		global $pdo;
		try
		{
			$req = "INSERT INTO tfh_article_pictures(article_ID, article_pictures_url)
					VALUES (:article_id, :article_pictures_url)";

			$query = $pdo->prepare($req);

			$query->bindValue(':article_id', $article_id, PDO::PARAM_INT);
			$query->bindValue(':article_pictures_url', $_SERVER["DOCUMENT_ROOT"]."TheFrenchHub/webroot/images/".$upload_pictures, PDO::PARAM_STR);

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}
	}