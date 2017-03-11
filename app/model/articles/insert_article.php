<?php

	function insert_article($article, $file, $admin_id, $article_picture_url)
	{
		global $pdo;

		// var_dump($article);
		// var_dump($file);
		// var_dump($article_picture_url);
		// var_dump($admin_id);
		// die();

		try
		{
			$req = "INSERT INTO tfh_articles(article_title, article_content, article_picture_url, article_author)
					VALUES (:article_title, :article_content, :article_picture_url, :article_author)";

			$query = $pdo->prepare($req);

			$query->bindValue(':article_title', $article["article_title"], PDO::PARAM_STR);
			$query->bindValue(':article_content', $article["article_content"], PDO::PARAM_STR);
			$query->bindValue(':article_picture_url', $article_picture_url, PDO::PARAM_STR);			
			$query->bindValue(':article_author', $admin_id, PDO::PARAM_INT);						

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}
	}