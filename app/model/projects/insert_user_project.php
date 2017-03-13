<?php

	function insert_user_project($project, $user_login)
	{
		global $pdo;

		try
		{

			var_dump($project);
			var_dump($user_login);
			die();

			$req = "INSERT INTO tfh_users(user_project)
					VALUES (:user_project)
					WHERE user_login = :user_login";

			$query = $pdo->prepare($req);
			$query->bindValue(':user_project', $project["user_project"], PDO::PARAM_INT);
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