<?php	
	if(!isset($_POST["project_name"]))
	{
		define("APP_LANG", "fr");
		define("PAGE_TITLE", "Création d'un projet");
		include_once("app/view/projects/new.php");
	}

	else
	{
		include_once("app/model/projects/insert_project.php");
		$_POST["project_nb_members"] = intval($_POST["project_nb_members"]);
		$retour = insert_project($_POST);

		if(!$retour)
		{
			location("projects", "new", "notif=nok");
		}

		else
		{
			location("projects", "index", "notif=ok");
		}
	}
