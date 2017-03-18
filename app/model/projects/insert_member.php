<?php

	function insert_member($member)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_users(user_mail)
					VALUES (:user_mail)";

			$query = $pdo->prepare($req);

			$query->bindValue(':user_mail', $member["user_mail"], PDO::PARAM_STR);

			$query->execute();

			//Récupération de l'ID
			//return $pdo->lastInsertId();
            return true;
		}

		catch(Exception $e)
		{
			return false;
		}
	}