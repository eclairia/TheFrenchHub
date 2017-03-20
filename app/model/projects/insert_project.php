<?php

	function insert_project($project, $file_project)
	{
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_projects(project_name, project_nb_members, project_file)
					VALUES (:project_name, 1, :project_file)";

			$query = $pdo->prepare($req);

			$query->bindValue(':project_name', $project["project_name"], PDO::PARAM_STR);
            $query->bindValue(':project_file', $file_project, PDO::PARAM_STR);

            $query->execute();

            return $pdo->lastInsertId();
        }
		catch(Exception $e)
		{
            die('Erreur technique :' .$e->getMessage());
            return false;
		}
	}