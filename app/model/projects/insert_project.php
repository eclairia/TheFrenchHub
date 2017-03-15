<?php

	function insert_project($project)
	{
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_projects(project_name, project_nb_members, project_begin_date, project_end_date)
					VALUES (:project_name, :project_nb_members, :project_begin_date, :project_end_date)";

			$query = $pdo->prepare($req);

			$query->bindValue(':project_name', $project["project_name"], PDO::PARAM_STR);
			$query->bindValue(':project_nb_members', $project["project_nb_members"], PDO::PARAM_INT);
			$query->bindValue(':project_begin_date', $project["project_begin_date"], PDO::PARAM_STR);			
			$query->bindValue(':project_end_date', $project["project_end_date"], PDO::PARAM_STR);			

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}
	}