<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function lire_users($offset, $limite)
	{
		global $pdo;

		try
		{
			$query = $pdo->prepare('SELECT *
									FROM tfh_admin
									ORDER BY admin_ID DESC');		

			$query->execute();

			$admins = $query->fetchAll();

			$query->closeCursor();

			return $admins;			
		}

		catch(Exception $e)
		{
			die('Erreur SQL: ' . $e->getMessage());
		}		
	}