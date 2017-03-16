<?php

	function insert_time_slot($date)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_projects(project_begin_date, project_end_date)
					VALUES (:project_begin_date, :project_end_date)";

			$query = $pdo->prepare($req);

			$query->bindValue(':project_begin_date', $date["time_slot_begin_disponibility"], PDO::PARAM_STR);
			$query->bindValue(':project_end_date', $date["time_slot_end_disponibility"], PDO::PARAM_STR);

			$query->execute();

            return true;
		}

		catch(Exception $e)
		{
		    return false;
            //die('Erreur technique :' .$e->getMessage());
		}
	}