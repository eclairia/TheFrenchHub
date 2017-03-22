<?php
	if (!defined("_BASE_URL")) die("Ressource interdite !");
	function update_nb_members($id, $nb_members)
	{
		global $pdo;

		// var_dump($member);
		// die();
		
		try
		{
			$req = "UPDATE tfh_projects 
                    SET project_nb_members = :project_nb_members 
                    WHERE project_ID = :project_ID";

			$query = $pdo->prepare($req);

			$query->bindParam(':project_nb_members', $nb_members, PDO::PARAM_INT);
            $query->bindParam(':project_ID', $_POST['user_project'], PDO::PARAM_INT);

			$query->execute();

			return true;
		}
		catch(Exception $e)
		{
			return false;
		}
	}