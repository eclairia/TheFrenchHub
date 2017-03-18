<?php

	function insert_contact($contact)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_contact(contact_login, contact_mail, contact_object, contact_message)
					VALUES (:contact_login, :contact_mail, :contact_object, :contact_message)";

			$query = $pdo->prepare($req);

			$query->bindValue(':contact_login', $_SESSION['user']['user_login'], PDO::PARAM_STR);
			$query->bindValue(':contact_mail', $contact["contact_mail"], PDO::PARAM_STR);
			$query->bindValue(':contact_object', $contact["contact_object"], PDO::PARAM_STR);
			$query->bindValue(':contact_message', $contact["contact_message"], PDO::PARAM_STR);

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