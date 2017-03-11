<?php

	function verif_login($login)
	{
		global $pdo;

		try
		{
			$query = $pdo->prepare('SELECT *
									FROM tfh_users
									WHERE user_login = :user_login
									AND user_password = :user_password');

			$query->bindParam(':user_login', $login["user_login"], PDO::PARAM_STR);
			$query->bindParam(':user_password', $login["user_password"], PDO::PARAM_STR);

			$query->execute();

			$user = $query->fetchAll();

			$query->closeCursor();	

			//On regarde la taille du tableau
			if((empty($user)) || (sizeof($user) > 1))
			{
				return false;
			}

			else
			{
				return $user[0];
			}
		}

		catch(Exception $e)
		{
			die('Erreur SQL: ' . $e->getMessage());
		}		
	}	