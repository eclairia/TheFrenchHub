<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function insert_justification($justif)
	{	
		global $pdo;

		try
		{
			$req = "INSERT INTO tfh_project_refusal(project_refusal_justification, which_project)
					VALUES (:project_refusal_justification, :which_project)";

			$query = $pdo->prepare($req);

			$query->bindValue(':project_refusal_justification', $justif["project_refusal_justification"], PDO::PARAM_STR);
			$query->bindValue(':which_project', $justif["project_ID"], PDO::PARAM_INT);

			$query->execute();

            return true;
		}

		catch(Exception $e)
		{
            die('Erreur technique :' .$e->getMessage());
		}
	}