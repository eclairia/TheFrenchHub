<?php
	if(!isset($_GET['mail']))
	{
		location("users", "reset", "notif=nomail");
	}

	else if(empty($_POST))
	{
		//Appel de la vue correspondante
		define("PAGE_TITLE", 'Modification de votre mot de passe');
		include_once('app/view/users/update_password.php');
	}

	else
	{
		include_once("app/model/users/update_password.php");
		$_POST['user_password'] = md5($_POST['user_password']);
		$retour = update_password($_GET['mail'], $_POST['user_password']);

		if($retour)
		{
			location("users", "login", "notif=ok");
		}

		else
		{
			location("users", "login", "notif=nok");
		}
	}