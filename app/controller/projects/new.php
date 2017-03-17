<?php	
	if(!isset($_POST["project_name"]))
	{
		define("PAGE_TITLE", "Création d'un projet");
		include_once("app/view/projects/new.php");
	}
	else
	{
		$projects = select_table(
			array("table1" => "tfh_projects",
					"table2" => "tfh_users"),
			array(
					"where_column" => "project_ID",
					"where_value" => "user_project"
				));

		include_once("app/model/projects/insert_project.php");
		$_POST["project_nb_members"] = intval($_POST["project_nb_members"]);
		$retour = insert_project($_POST);
		// var_dump($retour);
		// die();
		//Appel du model pour insérer le user_project
		include_once("app/model/projects/insert_user_project.php");
		// var_dump($projects);
		// die();
		$projects[0]["project_ID"] = intval($projects[0]["project_ID"]);
		$retour2 = insert_user_project($projects, $_SESSION["user"]["user_login"]);

		if(!$retour && !$retour2)
		{
			location("projects", "new", "notif=nok");
		}
		else
		{
			location("projects", "index", "notif=ok");
		}
	}
