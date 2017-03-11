<?php

	function update_article($article, $url)
	{
		global $pdo;

		try
		{
			$req = "UPDATE tfh_articles SET article_title = :article_title, article_content = :article_content, article_picture_url = :article_picture_url WHERE article_id = :article_id";

			$query = $pdo->prepare($req);

			$query->bindParam(':article_title', $article["article_title"], PDO::PARAM_STR);
			$query->bindParam(':article_content', $article["article_content"], PDO::PARAM_STR);
			$query->bindParam(':article_picture_url', $url, PDO::PARAM_STR);
			$query->bindParam(':article_id', $article["article_id"], PDO::PARAM_INT);			
			$query->execute();
		}

		catch(Exception $e)
		{
			return false;
		}
	}