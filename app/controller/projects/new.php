<?php	
	if(!isset($_POST["project_name"]))
	{
		location("users", "dashboard", "notif=project_entry");
	}
	else
	{
        include_once("app/model/projects/upload_presentation.php");
        $file_project = upload_presentation($_FILES);

		include_once("app/model/projects/insert_project.php");
		$retour = insert_project($_POST, $file_project);

        $_SESSION['user']['user_project'] = $retour;

        include_once("app/model/projects/assign_project.php");
        $retour = assign_project($retour);

		if(!$retour)
		{
			location("users", "dashboard", "notif=not_add_project");
		}
		else
		{
			location("users", "dashboard", "notif=ok");
		}
	}
