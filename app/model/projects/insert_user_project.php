<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function insert_user_project($project, $user_login)
	{
		global $pdo;

		// var_dump($project);
		// var_dump($user_login);
		// die();

		try
		{
			// var_dump($project);
			// var_dump($user_login);
			// die();

			$req = "UPDATE tfh_users, tfh_projects SET user_project = :project_id WHERE user_login = :user_login";

			$query = $pdo->prepare($req);
			$query->bindValue(':project_id', $project[0]["project_ID"], PDO::PARAM_INT);			
			$query->bindValue(':user_login', $user_login, PDO::PARAM_STR);

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}
	}