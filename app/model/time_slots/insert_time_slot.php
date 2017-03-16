<?php

	function insert_time_slot($slot)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_time_slot(time_slot_begin_disponibility, time_slot_end_disponibility)
					VALUES (:time_slot_begin_disponibility, :time_slot_end_disponibility)";

			$query = $pdo->prepare($req);

			$query->bindValue(':time_slot_begin_disponibility', $slot["time_slot_begin_disponibility"], PDO::PARAM_STR);
			$query->bindValue(':time_slot_end_disponibility', $slot["time_slot_end_disponibility"], PDO::PARAM_STR);

			$query->execute();

            return true;
		}

		catch(Exception $e)
		{
            die('Erreur technique :' .$e->getMessage());
		}
	}