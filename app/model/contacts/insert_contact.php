<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function insert_contact($contact)
	{	
		global $pdo;

		var_dump($contact);
		try
		{
			$req = "INSERT INTO tfh_contacts(contact_first_name, contact_last_name, contact_mail, contact_object, contact_message)
					VALUES (:contact_first_name, :contact_last_name, :contact_mail, :contact_object, :contact_message)";

			$query = $pdo->prepare($req);

			$query->bindValue(':contact_first_name', $contact["contact_first_name"], PDO::PARAM_STR);
			$query->bindValue(':contact_last_name', $contact["contact_last_name"], PDO::PARAM_STR);
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
            die('Erreur SQL: ' . $e->getMessage());
            return false;
		}
	}