<?php

	function insert_user($user, $user_picture_url, $key)
	{
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_users(user_first_name, user_last_name, user_civility, user_birth, user_mail, user_login, user_password, user_avatar, user_level, user_key)
					VALUES (:user_first_name, :user_last_name, :user_civility, :user_birth, :user_mail, :user_login, :user_password, :user_avatar, :user_level, :user_key)";

			$query = $pdo->prepare($req);

			$query->bindValue(':user_first_name', $user["user_first_name"], PDO::PARAM_STR);
			$query->bindValue(':user_last_name', $user["user_last_name"], PDO::PARAM_STR);
			$query->bindValue(':user_civility', $user["user_civility"], PDO::PARAM_STR);
			$query->bindValue(':user_birth', $user["user_birth"], PDO::PARAM_STR);
			$query->bindValue(':user_mail', $user["user_mail"], PDO::PARAM_STR);
			$query->bindValue(':user_login', $user["user_login"], PDO::PARAM_STR);						
			$query->bindValue(':user_password', $user["user_password"], PDO::PARAM_STR);
			$query->bindValue(':user_avatar', $user_picture_url, PDO::PARAM_STR);			
			$query->bindValue(':user_level', $user["user_level"], PDO::PARAM_INT);
			$query->bindValue(':user_key', $key, PDO::PARAM_STR);

			$query->execute();

			//Récupération de l'ID
			return true;
		}

		catch(Exception $e)
		{
			return false;
		}
	}