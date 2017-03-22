<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function update_time_slot($slot, $id)
	{
		global $pdo;
		
		try
		{
			$req = "UPDATE tfh_time_slots 
                    SET time_slot_begin_disponibility = :time_slot_begin_disponibility
                    WHERE time_slot_ID = :id";

			$query = $pdo->prepare($req);

			$query->bindParam(':time_slot_begin_disponibility', $slot['time_slot_begin_disponibility'], PDO::PARAM_STR);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
			$query->execute();

			return true;
		}

		catch(Exception $e)
		{
            die('Erreur technique :' .$e->getMessage());
			//return false;
		}
	}