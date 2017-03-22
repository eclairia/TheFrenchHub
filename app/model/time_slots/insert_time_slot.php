<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function insert_time_slot($slot)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_time_slots(time_slot_begin_disponibility)
					VALUES (:time_slot_begin_disponibility)";

			$query = $pdo->prepare($req);

			$query->bindValue(':time_slot_begin_disponibility', $slot["time_slot_begin_disponibility"], PDO::PARAM_STR);

			$query->execute();

            return true;
		}

		catch(Exception $e)
		{
            die('Erreur technique :' .$e->getMessage());
		}
	}