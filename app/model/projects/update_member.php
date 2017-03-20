<?php

	function update_member($member)
	{
		global $pdo;

		// var_dump($member);
		// die();
		
		try
		{
			$req = "UPDATE tfh_users SET user_civility = :user_civility, user_login = :user_login, user_password = :user_password, user_level = :user_level, user_project = :user_project WHERE user_key = :user_key";

			$query = $pdo->prepare($req);

			$query->bindParam(':user_civility', $member['user_civility'], PDO::PARAM_STR);
			$query->bindParam(':user_login', $member['user_login'], PDO::PARAM_STR);
			$query->bindParam(':user_password', $member['user_password'], PDO::PARAM_STR);	
			$query->bindParam(':user_level', $member['user_level'], PDO::PARAM_INT);
			$query->bindParam(':user_project', $member['user_project'], PDO::PARAM_INT);

			$query->execute();

			return true;
		}

		catch(Exception $e)
		{
			return false;
		}
	}