<?php

	function insert_admin($admin)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_admin(admin_name, admin_mail, admin_login, admin_password, admin_level)
					VALUES (:admin_name, :admin_mail, :admin_login, :admin_password, :admin_level)";

			$query = $pdo->prepare($req);

			$query->bindValue(':admin_name', $admin["admin_name"], PDO::PARAM_STR);
			$query->bindValue(':admin_mail', $admin["admin_mail"], PDO::PARAM_STR);
			$query->bindValue(':admin_login', $admin["admin_login"], PDO::PARAM_STR);
			$query->bindValue(':admin_password', $admin["admin_password"], PDO::PARAM_STR);
			$query->bindValue(':admin_level', $admin["admin_level"], PDO::PARAM_INT);

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}
	}