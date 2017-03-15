<?php

	function verif_login($login)
	{
		global $pdo;

		try
		{
			$query = $pdo->prepare('SELECT *
									FROM tfh_admin
									WHERE admin_login = :admin_login
									AND admin_password = :admin_password');

			$query->bindParam(':admin_login', $login["admin_login"], PDO::PARAM_STR);
			$query->bindParam(':admin_password', $login["admin_password"], PDO::PARAM_STR);

			$query->execute();

			$admin = $query->fetchAll();

			$query->closeCursor();	

			//On regarde la taille du tableau
			if((empty($admin)) || (sizeof($admin) > 1))
			{
				return false;
			}

			else
			{
				return $admin[0];
			}
		}

		catch(Exception $e)
		{
			// die('Erreur SQL: ' . $e->getMessage());
			return false;
		}		
	}