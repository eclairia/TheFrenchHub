<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function insert_member($member, $key)
	{	
		global $pdo;

		// var_dump($member);
		// die();
		try
		{
			$req = "INSERT INTO tfh_users(user_first_name, user_last_name, user_mail, user_password, user_key)
					VALUES (:user_first_name, :user_last_name, :user_mail, :user_password, :user_key)";

			$query = $pdo->prepare($req);

			$query->bindValue(':user_first_name', $member["user_first_name"], PDO::PARAM_STR);
			$query->bindValue(':user_last_name', $member["user_last_name"], PDO::PARAM_STR);			
			$query->bindValue(':user_mail', $member["user_mail"], PDO::PARAM_STR);
			$query->bindValue(':user_password', $member["user_password"], PDO::PARAM_STR);
			$query->bindValue(':user_key', $key, PDO::PARAM_STR);			

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