<?php
	function delete_article($user_login, $user_password)
	{
		try
		{
			$sql = "DELETE FROM tfh_users 
					WHERE user_login = :user_login
					AND user_password = :user_password";

			$query = $pdo->prepare($req);

			$query->bindValue(':user_login', $user_login, PDO::PARAM_STR);
			$query->bindValue(':user_password', $user_password, PDO::PARAM_STR);						

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}		
	}