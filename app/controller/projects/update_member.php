<?php
	if(empty($_POST))
	{
		define("PAGE_TITLE", 'Insérer un utilisateur dans un projet');
		include_once('app/view/projects/update_member.php');
	}

	else
	{
		include_once("app/model/projects/update_member.php");
		$_POST['user_password'] = md5($_POST['user_password']);
		$_POST['user_level'] = intval($_POST['user_level']);
		$_POST['user_project'] = intval($_POST['user_project']);
		$retour = update_member($_POST);

		if($retour)
		{
			location("users", "login", "notif=ok");
		}

		else
		{
			location("users", "login", "notif=nok");
		}
	}