<?php	
	if(!isset($_POST["project_name"]))
	{
		define("PAGE_TITLE", "Création d'un projet");
		include_once("app/view/projects/new.php");
	}
	else
	{
		$projects = select_table(
			array("table1" => "tfh_projects")
			array(
					"wherecolumn" => "project_ID"
					"wherevalue" => ""
				)
			);
		include_once("app/model/projects/insert_project.php");
		$_POST["project_nb_members"] = intval($_POST["project_nb_members"]);
		$retour = insert_project($_POST);
		//Appel du model pour insérer le user_project
		include_once("app/model/projects/insert_user_project.php");
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
