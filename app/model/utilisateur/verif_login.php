<?php

	function verif_login($form)
	{
		global $pdo;

		try
		{
			$query = $pdo->prepare('SELECT *
									FROM blog_users
									WHERE user_login = :login
									AND user_pass = :password');

			$query->bindParam(':login', $form["user_login"], PDO::PARAM_STR);
			$query->bindParam(':password', $form["user_password"], PDO::PARAM_STR);

			$query->execute();

			$users = $query->fetchAll();

			$query->closeCursor();	

			//On regarde la taille du tableau
			if((empty($users)) || (sizeof($users) > 1))
			{
				return false;
			}

			else
			{
				return $users[0];
			}
		}

		catch(Exception $e)
		{
			die('Erreur SQL: ' . $e->getMessage());
		}		
	}	