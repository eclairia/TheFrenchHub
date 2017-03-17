<?php

	function insert_project($project)
	{
		global $pdo;

		// var_dump($project);
		// die();

		try
		{
			$req = "INSERT INTO tfh_projects(project_name, project_nb_members)
					VALUES (:project_name, :project_nb_members)";

			$query = $pdo->prepare($req);

			$query->bindValue(':project_name', $project["project_name"], PDO::PARAM_STR);
			$query->bindValue(':project_nb_members', $project["project_nb_members"], PDO::PARAM_INT);			

			$query->execute();

			//Récupération de l'ID
			return $pdo->lastInsertId();
		}

		catch(Exception $e)
		{
			return false;
		}
	}